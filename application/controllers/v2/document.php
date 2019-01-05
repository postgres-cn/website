<?php

class Document extends CI_Controller {



public function index() {

  $data['title'] = '文档目录/Document Index' ; 

  $file_info = get_file_info('application/views/document/document.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $this->load->view('v2/templates/header', $data);
  $this->load->view('v2/document/document', $data);
  $this->load->view('v2/templates/footer');

}



public function whatsnew() {

  $data['title'] =  '新增功能/What\'s New' ; 

  $file_info = get_file_info('application/views/v2/document/whatsnew.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $this->load->view('v2/templates/header', $data);
  $this->load->view('v2/document/whatsnew', $data);
  $this->load->view('v2/templates/footer');

}


public function faq() {

  $data['title'] = '常见问题/FAQ'; 

  $file_info = get_file_info('application/views/v2/document/faq.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $this->load->view('v2/templates/header', $data);
  $this->load->view('v2/document/faq', $data);
  $this->load->view('v2/templates/footer');

}

public function dev_faq() {

  $data['title'] = '开发人员常见问题/DEV_FAQ';

  $file_info = get_file_info('application/views/v2/document/dev_faq.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $this->load->view('v2/templates/header', $data);
  $this->load->view('v2/document/dev_faq', $data);
  $this->load->view('v2/templates/footer');

}

public function win_faq() {

  $data['title'] = 'Windows平台下常见问题/Win_FAQ' ; 
  $file_info = get_file_info('application/views/v2/document/win_faq.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $this->load->view('v2/templates/header', $data);
  $this->load->view('v2/document/win_faq', $data);
  $this->load->view('v2/templates/footer');

}



}

?>
