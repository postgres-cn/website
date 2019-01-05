<?php
class Forum extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('forum_model');
  }


public function more($page=1,$thetype=FALSE){

	  $total_rows = $this->forum_model->count_forum($thetype);
	  $data['total_rows'] = $total_rows ; 
	  $data['page'] = $page ; 

	  $per_page = 20 ; 
	  $offset = ($page-1) * $per_page  ; 
	  if ( $offset < 0 )  $offset = 0 ; 

	  $data['forums'] = $this->forum_model->get_forums(FALSE,$per_page,$offset);

	  $data['editors'] = $this->forum_model->get_editors();


	  $data['title'] = '论坛讨论热点收集/ Hot message  ';
	  $data['pageoffset'] =  $offset ; 
	  $data['pagelinks'] = $this->getPageLinks(3,'/forum/more',$total_rows,$per_page,$thetype,'/forum/more/1/'.$thetype) ; 


	  $this->load->view('templates/header', $data);
	  $this->load->view('forum/more', $data);
	  $this->load->view('templates/footer');
}



public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = '论坛讨论热点发布/Hot Message';
  
  $this->form_validation->set_rules('poster', '发贴人', 'required');
  $this->form_validation->set_rules('posttime', '发贴时间', 'required');
  $this->form_validation->set_rules('thetitle', '讨论热点', 'required|min_length[5]');

  $this->form_validation->set_rules('thecolumn', '', 'isset');

  
  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('templates/header', $data);  
    $this->load->view('forum/publication',$data);
    $this->load->view('templates/footer');
    
  } else {
 	   $newsid = $this->forum_model->save_forum();

		$act_id =  $this->session->userdata('userid') ; 
	    $this->act_model->add_point_byid($act_id,10,'讨论热点收集','<a href=/forum/more/1>浏览所有建议</a>') ; 


	   $this->load->view('templates/header', $data);  
	   $this->load->view('forum/success_pub',$data);
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





}

