<?php
class Certificate extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
	  $data['title'] = '已通过认证人员名单/Certificates List' ; 

	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/certificate/cert_p1', $data);
	  $this->load->view('v2/templates/footer');
    }


	public function phase2($page=1,$theclass){
	  $data['title'] = '已通过认证人员名单/Certificates List' ; 

	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/certificate/cert_p2', $data);
	  $this->load->view('v2/templates/footer');
	}


}

?>

