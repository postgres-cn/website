<?php

class Upload_reg extends CI_Controller {

 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
 }

 function index() {
	  $this->load->view('upload_form', array('error' => ' ' ));
 }

 function do_upload() {

  $fileExt = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
  $sysid = $_POST['upload_fname'] ;
  $new_filename = $sysid .'.'. $fileExt;
  log_message('error', 'Fname='. $sysid .'.'. $fileExt );

  $config['upload_path'] = $_POST['upload_path'];
  $config['file_name'] = $new_filename ;
  $config['allowed_types'] = 'gif|jpg|png';
  $config['overwrite'] = TRUE ;
  $config['max_size'] = '100';
  $config['max_width']  = '1024';
  $config['max_height']  = '768';


  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload())  {
	     $error = array('error' => $this->upload->display_errors());

   	      $this->load->view('v2/templates/header');
	      $this->load->view('v2/reginfo/upload_fail',$error);
		  $this->load->view('v2/templates/footer');
  } else{
	   $data = array('upload_data' => $this->upload->data());

		$up_rec = array(  'picture' => $new_filename   );

		$this->db->where('sysid', $sysid);
		$this->db->update('act', $up_rec);

        // 更新 session 中的头像，让首页可以直接看到效果
	   $this->session->set_userdata('userpic', $new_filename);
 	   $this->load->view('v2/templates/header');
	   $this->load->view('v2/reginfo/upload_success', $data);
	   $this->load->view('v2/templates/footer');
  }

 }  /* end of do_upload */


function any_upload() {

  $new_filename = $_FILES['userfile']['name'] ;

  $config['upload_path'] = $_POST['upload_path'];
  $config['file_name'] = $_POST['fname_prefix'] .'_'. $new_filename ;
  $config['allowed_types'] = 'php|txt|js|css|gif|jpg|png';
  $config['overwrite'] = TRUE ;
  $config['max_size'] = '1000';


  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('userfile') ) {
	     $error = array('error' => $this->upload->display_errors());

   	      //$this->load->view('templates/header');
	      $this->load->view('v2/reginfo/upload_any_fail',$error);
		  //$this->load->view('templates/footer');
  } else{
	   $data = array('upload_data' => $this->upload->data());

	   //$this->load->view('templates/header');
	   $this->load->view('v2/reginfo/upload_any_success', $data);
	   //$this->load->view('templates/footer');
  }

 }  /* end of any_upload */




}
?>
