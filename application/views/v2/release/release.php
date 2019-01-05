<?php
class Release extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('release_model');
  }


public function index($mainver=FALSE){  

  $data['vers'] = $this->release_model->get_releases($mainver);
  $data['title'] = 'PostgreSQL发布声明/Relase' ; 

  $data['editors'] = $this->release_model->get_editors();


  $this->load->view('templates/header',$data);
  $this->load->view('release/list', $data);
  $this->load->view('templates/footer');

}


public function v($sysid = 0){  

  $data['ver'] = $this->release_model->get_release_byid($sysid);

  if (empty($data['ver'])) {
    show_404();
  }

  $data['title'] = 'PostgreSQL '.$data['ver']['theversion'].'发布声明/Relase' ; 

  $this->load->view('templates/header',$data);
  $this->load->view('release/viewone', $data);
  $this->load->view('templates/footer');

}



public function vv($version = '9_3'){  

	$version = str_replace('_','.',$version) ; 

  $data['ver'] = $this->release_model->get_release_byver($version);
  $data['title'] = 'PostgreSQL '.$data['ver']['theversion'].'发布声明/Relase' ; 

  if (empty($data['ver'])) {
    show_404();
  }

  $this->load->view('templates/header',$data);
  $this->load->view('release/viewone', $data);
  $this->load->view('templates/footer');

}


public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = '新版本发布/New version realse';
  
  $this->form_validation->set_rules('theversion', '新版本号', 'required|min_length[1]|max_length[200]');
  $this->form_validation->set_rules('mainver', '主版本号', 'required|min_length[1]|max_length[200]');

  $this->form_validation->set_rules('thetype', '', 'isset');
  $this->form_validation->set_rules('thecontent', '', 'isset');

  
  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('templates/header', $data);  
    $this->load->view('release/publication',$data);
    $this->load->view('templates/footer');
    
  } else {
	 $relid = $this->release_model->save_release();


		$act_id =  $this->session->userdata('userid') ; 
	    $this->act_model->add_point_byid($act_id,30,'新版发布','<a href=/release/v/'.$relid.'>浏览' . $relid .'号版本发布声明</a>') ; 


	$data['title']='新版本发布成功/News version publication successed !' ; 
	$data['relid'] = $relid ; 




	   $this->load->view('templates/header', $data);  
	   $this->load->view('release/success_pub',$data);
	   $this->load->view('templates/footer');
   }

}




}