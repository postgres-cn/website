<?php
class Cases_model extends CI_Model {

	  public function __construct() {
//		$this->load->database();
	  }

		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'cases_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract Cases Editor Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function get_cases($type = FALSE){
			$this->db->select('sysid,thetitle,theclass,rel_website,inputdate ') ; 
			$this->db->from('cases_table');
			if ( $type != FALSE) 	$this->db->where('theclass', $type); 
			$this->db->order_by("theclass", "desc"); 
			$this->db->order_by("inputdate", "desc"); 
			$query = $this->db->get();

			return $query->result_array();
		}


		public function get_case_byid($sysid = 0){
  		  $query = $this->db->get_where('cases_table', array('sysid' => $sysid));
		  return $query->row_array();
		}


		public function get_next_case_id() {
			$query = $this->db->query("select nextval('cases_table_sysid_seq') as sysid ");
			if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->sysid ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Generate case id Error!!!') ; 
				return -1 ; 
			}
		}

		public function save_case(){

		 $case_id = $this->get_next_case_id() ; 

		 $data = array(
			'sysid' => $case_id ,
			'username' => $this->input->post('username'),
			'inputdate' => date('Y-m-d'),
			'thetitle' => $this->input->post('thetitle'),
			'theclass' => $this->input->post('theclass'),
			'project_online' => $this->input->post('project_online'),
			'pg_info' => $this->input->post('pg_info'),
			'os_info' => $this->input->post('os_info'),
			'app_info' => $this->input->post('app_info'),
			'hardware' => $this->input->post('hardware'),
			'network' => $this->input->post('network'),
			'users_info' => $this->input->post('users_info'),
			'db_info' => $this->input->post('db_info'),
			'contact_info' => $this->input->post('contact_info'),
			'rel_website' => $this->input->post('rel_website'),
			'aux_pic_info1' => $this->input->post('aux_pic_info1'),
			'aux_pic_info2' => $this->input->post('aux_pic_info2'),
			'aux_pic_info3' => $this->input->post('aux_pic_info3'),
		  );

		  $this->db->insert('cases_table', $data);
		  return  $case_id ; 

		}



}
?>