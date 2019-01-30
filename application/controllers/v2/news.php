<?php
class News extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('news_model');
  }


public function index($page=1){

	  $total_rows = $this->news_model->count_news();
	  $data['total_rows'] = $total_rows ;

	  $data['editors'] = $this->news_model->get_editors();

	  $per_page = 20 ;
	  $offset = ($page-1) * $per_page  ;
	  if ( $offset < 0 )  $offset = 0 ;

	  $data['grpnews'] = $this->news_model->get_news(FALSE,$per_page,$offset);

	  $data['title'] = '最新社区新闻/Community News';
	  $data['pagelinks'] = $this->getPageLinks(3,'/v2/news/index',$total_rows,$per_page,'','') ;


	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/news/catalog', $data);
	  $this->load->view('v2/templates/footer');
}


public function typelist($page=1,$theclass){

	  $theclass = rawurldecode($theclass) ;
	  $per_page = 20 ;
	  $offset = ($page-1) * $per_page  ;
	  if ( $offset < 0 )  $offset = 0 ;
	  $total_rows = $this->news_model->count_class_news($theclass);
	  $data['total_rows'] = $total_rows ;

	  $data['editors'] = $this->news_model->get_editors();


	  $data['grpnews'] = $this->news_model->get_news($theclass,$per_page, $offset);

	  $data['title'] = '分类社区新闻:' . $theclass. '/Community News';
	  $data['theclass'] = $theclass ;
	  $data['pagelinks'] = $this->getPageLinks(5,'/v2/news/typelist',$total_rows,$per_page,$theclass,'/v2/news/typelist/1/'.$theclass) ;
	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/news/typelist', $data);
	  $this->load->view('v2/templates/footer');
}


public function goodclick($page=1,$sysid = 0){
  $vdata['good'] = $this->news_model->news_good_click($sysid);
  $act_id =  $this->session->userdata('userid') ;
  $this->act_model->add_point_byid($act_id,1,'新闻好评','<a href=/v2/news/viewone/1/'.$sysid.'>浏览' . $sysid .'号新闻</a>') ;
  redirect('/v2/news/viewone/'.$page.'/'.$sysid.'#comment') ;
}


public function badclick($page=1,$sysid = 0){
  $vdata['bad'] = $this->news_model->news_bad_click($sysid);
  $act_id =  $this->session->userdata('userid') ;
  $this->act_model->add_point_byid($act_id,1,'新闻差评','<a href=/v2/news/viewone/1/'.$sysid.'>浏览' . $sysid .'号新闻</a>') ;
  redirect('/v2/news/viewone/'.$page.'/'.$sysid.'#comment') ;
}


public function delete($sysid = 0){
  $act_id =  $this->session->userdata('username') ;
  $enabledUsers = $this->news_model->get_editors() ;

  if ( strpos($enabledUsers ,$act_id) > -1  ) {
    //echo "You have rights" . $act_id  ;
    $this->news_model->delete_by_id($sysid) ;
    redirect('/v2/news') ;

  }else {
    show_error('You have no right to DELETE data ! <br><br>您没有权限删除数据，请退回！' ,505);
  }
}

public function viewone($page=1,$sysid = 0){

  if(  is_numeric ($sysid) === FALSE ) {
    show_error('You do NOT give a correct article ID ! <br><br>您所请求的文章ID不正确，是否是URL不对，请退回！' ,505);
  }

  $vdata['action_ok'] = $this->news_model->view_news_once($sysid);

  $vdata['news'] = $this->news_model->get_news_byid($sysid);


  if (empty($vdata['news'])) {
    show_404();
  }

  $vdata['editors'] = $this->news_model->get_editors();


  $info = $vdata['news']['brief_info'] ;
  $info = str_replace("　　", "" , $info) ;
  $info = str_replace("<br><br>", "" , $info) ;
  $vdata['title'] = $vdata['news']['thetitle'] . '__'. $info  ;
  $author = $vdata['news']['author'];
  $user_rec = $this->news_model->get_userinfo_byname($author);
  $vdata['pic_name']  = isset($user_rec['picture']) ? $user_rec['picture'] : "null_pic.jpg" ;



  $per_page = 20 ;
  $offset = ($page-1) * $per_page  ;
  if ( $offset < 0 )  $offset = 0 ;
  $total_rows = $vdata['news']['comtclicks'] ;
  $vdata['total_rows'] = $total_rows ;
  $vdata['pageoffset'] =  $offset ;
  $vdata['sysid'] =  $sysid ;
  $vdata['page'] =  $page ;


  $vdata['grpcmts'] = $this->news_model->get_news_comments_byid($sysid,$per_page,$offset);

  $vdata['pagelinks'] = $this->getPageLinks(3,'/v2/news/viewone',$total_rows,$per_page,$sysid.'#comment','/v2/news/viewone/1/'.$sysid.'#comment') ;


  $this->load->view('v2/templates/header', $vdata);
  $this->load->view('v2/news/viewone', $vdata);
  $this->load->view('v2/templates/footer');
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
		$config['first_tag_open'] = chr(13).'<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '末页';
		$config['last_tag_open'] = chr(13).'<li>';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '下一页&gt;&gt;';
		$config['next_tag_open'] = chr(13).'<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '上一页&lt;&lt;';
		$config['prev_tag_open'] = chr(13).'<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = chr(13).'<li>';
		$config['cur_tag_close'] = '</li>';

		$config['num_tag_open'] =chr(13).'<li>';
		$config['num_tag_close'] =  '</li>';
//		$config['display_pages'] = FALSE; //不显示中间的数字页
		$config['total_rows'] = $totalrows;
		$config['per_page'] = $per_page;
		$this->pagination->initialize($config);
		return  $this->pagination->create_links();

}

public function create(){

  $editors = $this->news_model->get_editors();
  $username = $this->session->userdata('username');
  if (strstr($editors, $username) == false) {
    redirect('/v2/act/userinfo');
  }

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');

  $data['title'] = '社区新闻发布/Communit News publication';

  $this->form_validation->set_rules('thetitle', '新闻标题', 'required|min_length[5]|max_length[50]');
  $this->form_validation->set_rules('brief_info', '新闻摘要', 'required|min_length[10]|max_length[400]');

  $this->form_validation->set_rules('theclass', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info1', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info2', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info3', '', 'isset');
  $this->form_validation->set_rules('content', '', 'isset');


  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/news/publication',$data);
    $this->load->view('v2/templates/footer');

  } else {
	 $newsid = $this->news_model->save_news();


		$act_id =  $this->session->userdata('userid') ;
	    $this->act_model->add_point_byid($act_id,30,'新闻发布','<a href=/v2/news/viewone/1/'.$newsid.'>浏览' . $newsid .'号新闻</a>') ;


	$data['title']='社区新闻发布成功/News publication successed !' ;
	$data['newsid'] = $newsid ;


	  $fileExt = 'jpg' ;
	  $config['upload_path'] = './images/news/'.date('Y').'/' ;
	  $config['allowed_types'] = 'gif|jpg|png';
	  $config['overwrite'] = FALSE ;
	  $config['max_size'] = '500';
	  $config['max_width']  = '1024';
	  $config['max_height']  = '768';

	  $error = "" ;

	  for($i = 1 ; $i < 4 ; $i++) {
				  if ( strlen( $_POST['aux_pic_info'.$i]) > 2 ) {
							  $new_filename = $newsid .'_1.jpg';
							  $config['upload_path'] = './images/news/'.date('Y').'/' ;
							  $config['allowed_types'] = 'jpg';
							  $config['overwrite'] = FALSE ;
							  $config['max_size'] = '500';
							  $config['file_name'] = $new_filename ;
							  $this->load->library('upload', $config);
							  if ( ! $this->upload->do_upload('file'.$i))  {
									$error = $error . "<br>第$i 附图：" . $this->upload->display_errors()  ;
								} else{
									log_message('error','Run : $i =' . $new_filename) ;
							   }
				  }
	  }


	  $data['error'] = $error ;


	   $this->load->view('v2/templates/header', $data);
	   $this->load->view('v2/news/success_pub',$data);
	   $this->load->view('v2/templates/footer');
   }

}


public function savecomment($page,$sysid)
{
  $this->load->helper('form');
  $this->load->library('form_validation');

  $cdata['title'] = '评论保存/Save news comment';
  $cdata['page'] = $page ;
  $cdata['sysid']= $sysid ;

  $this->form_validation->set_rules('content', '评论内容', 'required');

  if ($this->form_validation->run() === FALSE) {
    redirect('v2/news/viewone/'.$page.'/'.$sysid,$cdata);
  } else {
    $this->news_model->save_comment();
		$act_id =  $this->session->userdata('userid') ;
	    $this->act_model->add_point_byid($act_id,3,'新闻评论回复','<a href=/v2/news/viewone/1/'.$sysid.'>浏览'. $sysid. '号新闻</a>') ;

	$this->load->view('v2/templates/header', $cdata);
    $this->load->view('v2/news/success_cmts',$cdata);
    $this->load->view('v2/templates/footer');

  }

}


public function modify($sysid){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');

  $data['title'] = '社区新闻更新/Communit News publication';

  $this->form_validation->set_rules('thetitle', '新闻标题', 'required|min_length[5]|max_length[50]');
  $this->form_validation->set_rules('brief_info', '新闻摘要', 'required|min_length[10]|max_length[400]');
  $this->form_validation->set_rules('theclass', '', 'isset');
  $this->form_validation->set_rules('content', '', 'isset');


  if ($this->form_validation->run() === FALSE)
  {
	$data["sysid"] = $sysid ;
	$data["vnews"] = $this->news_model->get_news_byid($sysid);
    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/news/modify',$data);
    $this->load->view('v2/templates/footer');

  } else {
	$newsid = $this->news_model->modify_news();

	$data['title']='社区新闻更新成功/News modify successed !' ;
	$data['newsid'] = $newsid ;

	$data['error'] = " " ;

	$this->load->view('v2/templates/header', $data);
	$this->load->view('v2/news/success_mod',$data);
	$this->load->view('v2/templates/footer');
   }

}






}

