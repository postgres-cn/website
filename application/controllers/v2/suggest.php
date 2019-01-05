<?php
class Suggest extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('suggest_model');
  }


public function index($page=1,$thetype=FALSE){

	  $total_rows = $this->suggest_model->count_suggest($thetype);
	  $data['total_rows'] = $total_rows ; 
	  $data['page'] = $page ; 

	  $per_page = 20 ; 
	  $offset = ($page-1) * $per_page  ; 
	  if ( $offset < 0 )  $offset = 0 ; 

	  $data['suggs'] = $this->suggest_model->get_suggest(FALSE,$per_page,$offset);

	  $data['editors'] = $this->suggest_model->get_editors();


	  $data['title'] = '用户意见和处理反馈 / Suggestions /Feedback ';
	  $data['pageoffset'] =  $offset ; 
	  $data['pagelinks'] = $this->getPageLinks(3,'/suggest/index',$total_rows,$per_page,$thetype,'/suggest/index/1/'.$thetype) ; 


	  $this->load->view('templates/header', $data);
	  $this->load->view('suggest/index', $data);
	  $this->load->view('templates/footer');
}



public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = '网站建设用户建议发布/Suggestion for website';
  
  $this->form_validation->set_rules('thecontent', '意见内容', 'required|min_length[10]');

  $this->form_validation->set_rules('thetype', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info1', '', 'isset');

  
  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('templates/header', $data);  
    $this->load->view('suggest/publication',$data);
    $this->load->view('templates/footer');
    
  } else {
 	   $newsid = $this->suggest_model->save_suggest();

		$act_id =  $this->session->userdata('userid') ; 
	    $this->act_model->add_point_byid($act_id,10,'网站建设意见','<a href=/suggest>浏览所有建议</a>') ; 


	   $this->load->view('templates/header', $data);  
	   $this->load->view('suggest/success_pub',$data);
	   $this->load->view('templates/footer');
   }

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


public function reply($page){

  $this->load->helper('form');
  $this->load->library('form_validation');
 
  $cdata['title'] = '回复意见保存/Save feedback';
  $cdata['page'] = $page ; 
  
  $this->form_validation->set_rules('fixture', '评论内容', 'required');
  $this->form_validation->set_rules('sysid', '意见的ID', 'required');
  

  if ($this->form_validation->run() === FALSE) {
		$cdata['vad_info'] = validation_errors() ; 
		log_message('error','Run reply ... ' . $cdata['vad_info'] ) ; 
		redirect('suggest/index/'.$page ,$cdata);
  } else {
	    $this->suggest_model->save_reply();
		$act_id =  $this->session->userdata('userid') ; 
	    $this->act_model->add_point_byid($act_id,3,'网站建设回复','<a href=/suggest/index/'.$page.'>浏览相关意见</a>') ; 

		$this->load->view('templates/header', $cdata);  
		$this->load->view('suggest/success_feed',$cdata);
		$this->load->view('templates/footer');

  }

}



}

