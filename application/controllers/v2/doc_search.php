<?php
class Doc_Search extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $size = 20;
        $q = $this->input->get('q');
        $p = (int)$this->input->get('p');
        if (!$p) {
            $p = 1;
        }
        $u = $this->input->get('u');

        $sqlCount = "
            SELECT COUNT(*) AS c
            FROM pg_fs_docs, plainto_tsquery('myzhcfg', ?) AS tsq
            WHERE keywords @@ tsq AND theurl LIKE ?
        ";
        $query = $this->db->query($sqlCount, [$q, "%$u%"]);
        $count = $query->first_row('array')['c'];
        $pages = ceil($count / $size);

        $sqlData = "
            SELECT theurl, thetitle, ts_headline('myzhcfg', thecontent, tsq) AS headline, ts_rank(keywords, tsq)::numeric(10,3) AS r 
            FROM pg_fs_docs, plainto_tsquery('myzhcfg', ?) AS tsq
            WHERE keywords @@ tsq AND theurl LIKE ?
            ORDER BY r DESC LIMIT ? OFFSET ?
        ";
        $query = $this->db->query($sqlData, [$q, "%$u%", $p * $size, ($p - 1) * $size]);
	    $list = $query->result_array();

        $data['u'] = $u;
        $data['p'] = $p;
        $data['q'] = $q;
        $data['count'] = $count;
        $data['pages'] = $pages;
        $data['title'] = '文档查询结果';
        $data['list'] = $list;

        $this->load->library('pagination');
        $config['base_url'] = sprintf("/v2/doc_search?u=%s&q=%s", urlencode($u), urlencode($q));
        $config['total_rows'] = $count;
        $config['per_page'] = $size;
        $config['num_links'] = 5;
        $config['use_page_numbers'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'p';
        $config['first_link'] = false;
        $config['prev_link'] = '上一页';
        $config['next_link'] = '下一页';
        $config['last_link'] = false;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('v2/templates/header',$data);
        $this->load->view('v2/doc_search', $data);
        $this->load->view('v2/templates/footer');
    }

    public function prepare($version = null){
        // 仅限命令行调用
        // if (!$this->input->is_cli_request()) {
        //     return '仅限CLI访问';
        // }

        if (!$version) {
            return '请指定版本';
        }

        if (!in_array($version, ['9.3', '9.4', '9.5', '9.6', '10', '11','12','13'])) {
            return '版本不存在';
        }

        $dir = realpath(BASEPATH . "../docs/$version");
        echo $dir;
        $handler = opendir($dir);
        if (!$handler) {
            return '文档目录不存在';
        }

        // 将文档逐个存入数据库
        while (false !== ($entry = readdir($handler))) {
            if (substr($entry, -5) != '.html') {
                continue;
            }
            $data = $this->getDocData($version, $dir, $entry);

            $this->db->query("
                INSERT INTO pg_fs_docs (create_time, theversion, theurl, thetitle, thecontent, keywords)
                VALUES (?, ?, ?, ?, ?,
                    setweight(to_tsvector('myzhcfg', coalesce(?, '')), 'A') || setweight(to_tsvector('myzhcfg', coalesce(?)), 'B')
                ) ON CONFLICT(theurl)
                DO UPDATE SET thetitle = excluded.thetitle, thecontent = excluded.thecontent, keywords = excluded.keywords
            ", [
                date('Y-m-d H:i:s'),
                $data['theversion'],
                $data['theurl'],
                $data['thetitle'],
                $data['plainText'],
                $data['thetitle'],
                $data['plainText'],
            ]);
        }
    }

    private function getDocData($version, $dir, $entry) {
        $doc = new DOMDocument();
        $content = file_get_contents($dir . '/' . $entry);

		if (in_array($version, ['9.3', '9.4', '9.5', '9.6'])) {
            $doc->loadHTML($content);
        }else 
			$doc->loadXML($content);

        // 标题
        $title = $doc->getElementsByTagName('title')->item(0)->nodeValue;

        // 去掉非关键内容
        $mainHTML = $this->getDocMain($doc);
        $plainText = strip_tags($mainHTML);

        return [
            'theversion' => $version,
            'thecontent' => $mainHTML,
            'thetitle' => $title,
            'theurl' => "http://postgres.cn/docs/$version/$entry",
            'plainText' => $plainText,
        ];
    }

    private function getDocMain($doc) {
        $finder = new DomXPath($doc);

        $preheader = $finder->query("//*[contains(@class, 'preheader')]")->item(0);
        if ($preheader) {
            $preheader->parentNode->removeChild($preheader);
        }

        $navheader = $finder->query("//*[contains(@class, 'navheader')]")->item(0);
        if ($navheader) {
            $navheader->parentNode->removeChild($navheader);
        }

        $navfooter = $finder->query("//*[contains(@class, 'navfooter')]")->item(0);
        if ($navfooter) {
            $navfooter->parentNode->removeChild($navfooter);
        }

        $mainHTML = $doc->saveHTML();
        return $mainHTML;
    }
}

