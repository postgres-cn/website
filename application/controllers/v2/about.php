<?php
class About extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function index($page = "about"){

  
	
  $file_info = get_file_info('application/views/v2/about/'.$page.'.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $data['title'] = 'About Chinese Community';

  $this->load->view('v2/templates/header',$data);
  $this->load->view('v2/about/'.$page, $data);
  $this->load->view('v2/templates/footer');


}






}
