<?php
class Blog extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('blog_model');
  }


public function more($page=1){

	  $total_rows = $this->blog_model->count_blog();
	  $data['total_rows'] = $total_rows ; 
	  $data['page'] = $page ; 

	  $per_page = 20 ; 
	  $offset = ($page-1) * $per_page  ; 
	  if ( $offset < 0 )  $offset = 0 ; 

	  $data['blogs'] = $this->blog_model->get_blog($per_page,$offset);

	  $data['editors'] = $this->blog_model->get_editors();


	  $data['title'] = '优秀博文推荐 / Excellent blogs ';
	  $data['pageoffset'] =  $offset ; 
	  $data['pagelinks'] = $this->getPageLinks(3,'/blog/more',$total_rows,$per_page,'','') ; 


	  $this->load->view('templates/header', $data);
	  $this->load->view('blog/more', $data);
	  $this->load->view('templates/footer');
}


public function typelist($page=1,$thetype="NONE"){

	  $thetype = rawurldecode($thetype) ; 
	  $total_rows = $this->blog_model->count_type_blog($thetype);
	  $data['total_rows'] = $total_rows ; 
	  $data['page'] = $page ; 
	  $data['thetype'] = $thetype ;

	  $per_page = 20 ; 
	  $offset = ($page-1) * $per_page  ; 
	  if ( $offset < 0 )  $offset = 0 ; 

	  $data['blogs'] = $this->blog_model->get_type_blog($thetype,$per_page,$offset);

	  $data['title'] = '优秀博文推荐 / Excellent blogs ';
	  $data['pageoffset'] =  $offset ; 
	  $data['pagelinks'] = $this->getPageLinks(3,'/blog/typelist',$total_rows,$per_page,$thetype, '/blog/typelist/1/'.$thetype) ; 


	  $this->load->view('templates/header', $data);
	  $this->load->view('blog/typelist', $data);
	  $this->load->view('templates/footer');
}



public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = '优秀博文推荐发布/Excellent Blog';
  
  $this->form_validation->set_rules('thetitle', '优秀博文标题', 'required|min_length[5]');
  $this->form_validation->set_rules('blogowner', '博主', 'required|min_length[2]');
  $this->form_validation->set_rules('theurl', '博文URL', 'required|min_length[10]');
  $this->form_validation->set_rules('thetype', '', 'isset');


  
  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('templates/header', $data);  
    $this->load->view('blog/publication',$data);
    $this->load->view('templates/footer');
    
  } else {
 	   $this->blog_model->save_blog();

		$act_id =  $this->session->userdata('userid') ; 
	    $this->act_model->add_point_byid($act_id,5,'优秀博文推荐','<a href=/blog>浏览所有推荐博文</a>') ; 


	   $this->load->view('templates/header', $data);  
	   $this->load->view('blog/success_pub',$data);
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

