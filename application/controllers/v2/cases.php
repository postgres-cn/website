<?php
class Cases extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('cases_model');
  }


public function index($type = FALSE){

  $file_info = get_file_info('application/views/cases/cases.php', 'date') ; 
  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  $data['editors'] = $this->cases_model->get_editors();


  $data['cases'] = $this->cases_model->get_cases($type);
  $data['title'] = 'Pg案例介绍/Cases List';



  $this->load->view('templates/header', $data);
  $this->load->view('cases/cases', $data);
  $this->load->view('templates/footer');


}



public function viewone($id = 0){
  $data['case'] = $this->cases_model->get_case_byid($id);
  $data['title'] = 'Pg案例介绍['. $data['case']['thetitle'].']' ;

  if (empty($data['case'])) {
    show_404();
  }

  $this->load->view('templates/header', $data);
  $this->load->view('cases/viewone', $data);
  $this->load->view('templates/footer');
}


public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
 
  $data['title'] = '应用案例发布/Communit News publication';
  
  $this->form_validation->set_rules('thetitle', '案例名称', 'required|min_length[5]|max_length[50]');
  $this->form_validation->set_rules('project_online', '项目上线时间', 'required');

  $this->form_validation->set_rules('theclass', '', 'isset');
  $this->form_validation->set_rules('pg_info', '', 'isset');
  $this->form_validation->set_rules('os_info', '', 'isset');
  $this->form_validation->set_rules('app_info', '', 'isset');
  $this->form_validation->set_rules('hardware', '', 'isset');
  $this->form_validation->set_rules('network', '', 'isset');
  $this->form_validation->set_rules('users_info', '', 'isset');
  $this->form_validation->set_rules('db_info', '', 'isset');
  $this->form_validation->set_rules('contact_info', '', 'isset');
  $this->form_validation->set_rules('rel_website', '', 'isset');

  $this->form_validation->set_rules('aux_pic_info1', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info2', '', 'isset');
  $this->form_validation->set_rules('aux_pic_info3', '', 'isset');
  $this->form_validation->set_rules('proj_descr', '', 'isset');

  
  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('templates/header', $data);  
    $this->load->view('cases/publication',$data);
    $this->load->view('templates/footer');
    
  } else {
		$newsid = $this->cases_model->save_case();

		$act_id = $this->act_model->get_id_byname($_POST['username']) ; 
	    $this->act_model->add_point_byid($act_id,100,'发布应用案例','<a href=/cases/viewone/'.$newsid.'>浏览 '.$newsid.'号案例</a>') ; 

	$data['title']='应用案例发布成功/Case publication successed !' ; 
	$data['newsid'] = $newsid ; 


	  $fileExt = 'jpg' ; 
	  $config['upload_path'] = './images/cases/' ; 
	  $config['allowed_types'] = 'gif|jpg|png';
	  $config['overwrite'] = FALSE ; 
	  $config['max_size'] = '500';
	  $config['max_width']  = '1024';
	  $config['max_height']  = '768';

	  $error = "" ; 

	  for($i = 1 ; $i < 4 ; $i++) {
				  if ( strlen( $_POST['aux_pic_info'.$i]) > 2 ) {
							  $new_filename = $newsid .'_1.jpg';
							  $config['upload_path'] = './images/cases/' ; 
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
	  

	   $this->load->view('templates/header', $data);  
	   $this->load->view('cases/success_pub',$data);
	   $this->load->view('templates/footer');
   }

}



}