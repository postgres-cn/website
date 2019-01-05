<?php
class Admin_lite extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function index(){

	  $data['title'] = 'Online Aministrating Tool / Lite';
	  $data['his'] = read_file('backup.txt'); ;

//	  $this->load->view('templates/header', $data);
	  $this->load->view('admin_lite/sendpara', $data);
//	  $this->load->view('templates/footer');
}

public function runquery() {

	  $query= $this->db->query($_POST['sqlquery']) ; 
	  $data['title'] = 'Online Aministrating Tool / Lite';

	echo  "<P>SQL=" . $_POST['sqlquery'] ; 


	foreach ($query->result_array()  as $row){
	   echo "<LI>". $row['sysid'] . " / " . $row['thename'];
	}
//	  $this->load->view('templates/header', $data);
//	  $this->load->view('suggest/index', $data);
//	  $this->load->view('templates/footer');


}

public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = 'General record input...';
  
  $this->form_validation->set_rules('thecontent', '意见内容', 'required|min_length[10]');

  $this->form_validation->set_rules('thetype', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info1', '', 'isset');

  
  if ($this->form_validation->run() === FALSE) {
		$this->load->view('templates/header', $data);  
		$this->load->view('admin_lite/publication',$data);
		$this->load->view('templates/footer');
    
  } else {
 	   $newsid = $this->suggest_model->save_suggest();
	   $this->load->view('templates/header', $data);  
	   $this->load->view('admin_lite/success_pub',$data);
	   $this->load->view('templates/footer');
   }

}



public function update(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = 'General record input...';
  
  $this->form_validation->set_rules('thecontent', '意见内容', 'required|min_length[10]');

  $this->form_validation->set_rules('thetype', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info1', '', 'isset');

  
  if ($this->form_validation->run() === FALSE) {
		$this->load->view('templates/header', $data);  
		$this->load->view('admin_lite/publication',$data);
		$this->load->view('templates/footer');
    
  } else {
 	   $newsid = $this->suggest_model->save_suggest();
	   $this->load->view('templates/header', $data);  
	   $this->load->view('admin_lite/success_pub',$data);
	   $this->load->view('templates/footer');
   }

}


public function delete(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = 'General record input...';
  
  $this->form_validation->set_rules('thecontent', '意见内容', 'required|min_length[10]');

  $this->form_validation->set_rules('thetype', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info1', '', 'isset');

  
  if ($this->form_validation->run() === FALSE) {
		$this->load->view('templates/header', $data);  
		$this->load->view('admin_lite/publication',$data);
		$this->load->view('templates/footer');
    
  } else {
 	   $newsid = $this->suggest_model->save_suggest();
	   $this->load->view('templates/header', $data);  
	   $this->load->view('admin_lite/success_pub',$data);
	   $this->load->view('templates/footer');
   }

}



}

