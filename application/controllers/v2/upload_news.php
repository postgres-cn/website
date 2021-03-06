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
  $updated_fd = $_POST['updated_fd'] ; //aux_pic_info1 /2/3
  $updated_info = $_POST['aux_pic_info'] ; 
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
	 
   	      $this->load->view('templates/header_noreg');
	      $this->load->view('news/upload_fail',$error);
		  $this->load->view('templates/footer');
  } else{
	   $data = array('upload_data' => $this->upload->data());

		$up_rec = array(  $updated_fd => $new_filename   );
		$this->db->where('sysid', $sysid);
		$this->db->update('news_table', $up_rec); 
	   
 	   $this->load->view('templates/header');
	   $this->load->view('news/upload_success', $data);
	   $this->load->view('templates/footer');
  }

 }  /* end of do_upload */



}
?>