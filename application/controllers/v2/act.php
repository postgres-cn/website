<?php
class Act extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('act_model');
    $this->load->helper(array('form', 'url'));
  }

public function logout($to_url = '/'){
   // $this->load->helper('url');
	//log_message('error','TO_URL=' . $to_url) ;
	$array_items = array('username' => '', 'thegroup' => '','thelevel'=>'', 'regtime'=>'','thepoint'=>'');
	$this->session->unset_userdata($array_items);
    session_unset('usernamex') ;

	redirect('/v2/home') ;
}


public function login(){

	 $username = $_POST['username'] ;
	 $passwd = $_POST['passwd'] ;
	 $to_url = $_POST['to_url'] ;

	 $data['account'] = $this->act_model->get_account_byname($username,$passwd);

	if ( $data['account'] != FALSE ) {
  		//  $this->load->helper('url');
		   $this->act_model->add_point_byid($data['account']['sysid'],1,'系统登录','') ;

		   $this->session->set_userdata('username',  $username);
		   $this->session->set_userdata('thegroup', $data['account']['thegroup']);
		   $this->session->set_userdata('thepoint', $data['account']['thepoint'] + 1);
		   $this->session->set_userdata('thelevel', $data['account']['thelevel']);
		   $this->session->set_userdata('regtime', $data['account']['regtime']);
		   $this->session->set_userdata('userpic', $data['account']['picture']);
		   $this->session->set_userdata('userid', $data['account']['sysid']);
		   $this->session->set_userdata('realname', $data['account']['realname']);
		   session_start();
		   $_SESSION['usernamex'] = $username ;
		redirect('/v2/home') ;
	}else {
		  $this->load->view('v2/templates/header', $data);
		  $this->load->view('v2/reginfo/login_fail', $data);
		  $this->load->view('v2/templates/footer');
	}
}


public function userinfo(){
     $username = $this->session->userdata('username') ;
	 if ( $username != FALSE ) {

			  $data['title'] = $username.' 信息/UserInfo' ;
			  $data['user'] = $this->act_model->extract_info_byname($username);
			  if ( $data['user'] != FALSE ) {
					  $this->load->view('v2/templates/header', $data);
					  $this->load->view('v2/reginfo/userinfo', $data);
					  $this->load->view('v2/templates/footer');
			  }
	}else {
		  $data['title'] = '用户未登录/Not login' ;
		  $this->load->view('v2/templates/header', $data);
		  $this->load->view('v2/reginfo/loginpage', $data);
		  $this->load->view('v2/templates/footer');
	}

}


public function userinfo_v($sysid){

			 $data['title'] = '注册用户公开信息/Public user information' ;
			 $data['user'] = $this->act_model->get_account_byid($sysid);
			  if ( $data['user'] != FALSE ) {
					  $this->load->view('v2/templates/header', $data);
					  $this->load->view('v2/reginfo/userinfo_v', $data);
					  $this->load->view('v2/templates/footer');
			  }

}


public function loginget($to_url){
		  $data['title'] = '用户未登录/Not login' ;
		  $data['to_url'] = str_replace("_","/",$to_url);
		  $this->load->view('v2/templates/header', $data);
		  $this->load->view('v2/reginfo/logingetpage', $data);
		  $this->load->view('v2/templates/footer');
}


public function upload_any($default_dir){
		  $data['title'] = 'General Upload' ;
		  if ( isset($default_dir) ) 
			  $data['default_dir'] = $default_dir ;
			else 
				$data['default_dir'] = 'news' ;
		  //$this->load->view('templates/header', $data);
		  $this->load->view('reginfo/upload_any', $data);
		  //$this->load->view('templates/footer');
}


public function register(){

  $this->load->helper('form');
  $this->load->library('form_validation');

  $data['title'] = 'Regist a username';

  $this->form_validation->set_rules('thename', '登录名称', 'required|alpha_numeric|min_length[2]|max_length[12]|is_unique[act.thename]');
  $this->form_validation->set_rules('passwd', '密码', 'required|matches[passconf]|md5');
  $this->form_validation->set_rules('passconf', '确认密码', 'required');
  $this->form_validation->set_rules('theprovince', '所在省份', 'required');
  $this->form_validation->set_rules('industry', '所属行业', 'required');
  $this->form_validation->set_rules('realname', '昵称或实名', 'required|min_length[2]|max_length[20]');

  $this->form_validation->set_rules('thecity', '所在城市', 'isset');
  $this->form_validation->set_rules('qq', '', 'isset');
  $this->form_validation->set_rules('email', '', 'isset');
  $this->form_validation->set_rules('phone', '', 'isset');
  $this->form_validation->set_rules('focused', '', 'isset');
  $this->form_validation->set_rules('cust_sig', '', 'isset');


  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/reginfo/register');
    $this->load->view('v2/templates/footer');

  } else {
		 $act_id = $this->act_model->insert_user();
		 $data['title']='用户注册成功/Register Success' ;

		  $fileExt = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
		  $config['upload_path'] = './images/users/' ;
		  $config['allowed_types'] = 'gif|jpg|png';
		  $config['overwrite'] = TRUE ;
		  $config['max_size'] = '1024';
		  $config['max_width']  = '1024';
		  $config['max_height']  = '1024';

		  $error = "" ;

		  $new_filename = $act_id .'.'.$fileExt ;
		  $config['file_name'] = $new_filename ;
		  $this->load->library('upload', $config);
		  if ( ! $this->upload->do_upload('userfile'))  {
						$error = $error . "<br>上传文件ERROR：" . $this->upload->display_errors()  ;
			} else{
						log_message('error','User Register FileName :  =' . $new_filename) ;
		   }

	  $data['error'] = $error ;


		$this->load->view('v2/templates/header', $data);
		$this->load->view('v2/reginfo/r_success');
		$this->load->view('v2/templates/footer');


	} //End of else --> insert user and upload picture
}

public function update()
{
  $this->load->helper('form');
  $this->load->library('form_validation');

  $data['title'] = '更新用户信息';

  $this->form_validation->set_rules('passwd', '密码', 'matches[passconf]');
//  $this->form_validation->set_rules('passconf', '确认密码', 'required');
  $this->form_validation->set_rules('theprovince', '所在省份', 'required');
  $this->form_validation->set_rules('industry', '所属行业', 'required');
  $this->form_validation->set_rules('realname', '昵称或实名', 'required|min_length[2]|max_length[20]');

/*
  $this->form_validation->set_rules('qq', '', 'isset');
  $this->form_validation->set_rules('email', '', 'isset');
  $this->form_validation->set_rules('phone', '', 'isset');
  $this->form_validation->set_rules('focused', '', 'isset');
  $this->form_validation->set_rules('cust_sig', '', 'isset');
*/

  if ($this->form_validation->run() === FALSE)
  {
 	 $data['vaderr']= validation_errors();
     $username = $this->session->userdata('username') ;
	 $data['title'] = $username.' 信息/UserInfo' ;
//	 log_message('error','Update found user='.$username.',Vad_Err='.$data['vaderr']) ;
	 $data['user'] = $this->act_model->extract_info_byname($username);


    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/reginfo/userinfo',$data);
    $this->load->view('v2/templates/footer');

  } else {
    $this->act_model->update_user();
	$this->load->view('v2/templates/header', $data);
    $this->load->view('v2/reginfo/u_success',$data);
	$this->load->view('v2/templates/footer');

  }

}




}

