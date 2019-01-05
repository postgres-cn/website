<?php
class Trail extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('trail_model');
  }


public function index($page=1,$userid=0){

		//log_message('error','Ruser= '. $userid . ' , page= '. $page ) ; 

	  $total_rows = $this->trail_model->count_trail_log($userid);
	  $data['total_rows'] = $total_rows ; 

	  $per_page = 30 ; 
	  $offset = ($page-1) * $per_page  ; 
	  if ( $offset < 0 )  $offset = 0 ; 

	  $data['ulogs'] = $this->trail_model->get_trail_log(FALSE,$userid,$per_page,$offset);

	  $data['title'] = '用户日志/User Logs';
	  $data['pageoffset'] =  $offset ; 
	  $data['pagelinks'] = $this->getPageLinks(3,'/trail/index',$total_rows,$per_page,$userid,'/trail/index/1/'.$userid) ; 


	  $this->load->view('templates/header', $data);
	  $this->load->view('userlog', $data);
	  $this->load->view('templates/footer');
}





function getPageLinks($pageloc,$theurl,$totalrows , $per_page,$ext_info,$firsturl) {
		$this->load->library('pagination');
		$config['base_url'] = site_url($theurl) ; 
		if ( strlen($ext_info) > 0 ) 
			$config['suffix'] = "/".$ext_info;

		$config['first_url'] = $firsturl;
		$config['num_links'] = $pageloc;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = '首页';
		$config['first_tag_open'] = chr(13).'<span class=pagebtn>';
		$config['first_tag_close'] = '</span>';
		$config['last_link'] = '末页';
		$config['last_tag_open'] = chr(13).'<span class=pagebtn>';
		$config['last_tag_close'] = '</span>';

		$config['next_link'] = '下一页&gt;&gt;';
		$config['next_tag_open'] = chr(13).'<span class=pagebtn>';
		$config['next_tag_close'] = '</span>';

		$config['prev_link'] = '上一页&lt;&lt;';
		$config['prev_tag_open'] = chr(13).'<span class=pagebtn>';
		$config['prev_tag_close'] = '</span>';

		$config['cur_tag_open'] = chr(13).'<span class=pagebtn_cur>';
		$config['cur_tag_close'] = '</span>';

		$config['num_tag_open'] =chr(13).'<span class=pagebtn>';
		$config['num_tag_close'] =  '</span>';
//		$config['display_pages'] = FALSE; //不显示中间的数字页
		$config['total_rows'] = $totalrows;
		$config['per_page'] = $per_page;
		$this->pagination->initialize($config);
		return  $this->pagination->create_links();

}




}

