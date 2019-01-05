<?php
class Release_model extends CI_Model {

	  public function __construct() {
//		$this->load->database();
	  }


		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'release_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract Release Editor Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function get_releases($mainver = FALSE){
//			$this->db->select('sysid,theversion,inputtime,reltime,thetype,topshow ') ; 
//			$this->db->from('pg_release_table');
			if ( $mainver != FALSE) 	$this->db->like('theversion', $mainver); 
			$this->db->order_by("mainver", "desc"); 
			$this->db->order_by("reltime", "desc"); 
			$query = $this->db->get('pg_release_table');

			return $query->result_array();
		}

		public function get_mainversions(){
  		  $this->db->distinct('mainver') ; 
  		  $this->db->order_by("mainver", "desc"); 
  		  $query = $this->db->get('pg_release_table') ; 
		  return $query->row_array();
		}


		public function get_release_byid($sysid = 0){
  		  $query = $this->db->get_where('pg_release_table',array('sysid'=>$sysid)) ; 
		  return $query->row_array();
		}

		public function get_release_byver($version = '9.3'){
  		  $query = $this->db->get_where('pg_release_table',array('theversion'=>$version)) ; 
		  return $query->row_array();
		}


		public function get_next_release_id() {
			$query = $this->db->query("select nextval('pg_release_table_sysid_seq') as sysid ");
			if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->sysid ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Generate release id Error!!!') ; 
				return -1 ; 
			}
		}

		public function save_release(){

		 $rel_id = $this->get_next_release_id() ; 

		 $data = array(
			'sysid' => $rel_id ,
			'inputtime' => date('Y-m-d H:i:s'),
			'reltime' => $this->input->post('reltime'),
			'theversion' => $this->input->post('theversion'),
			'thetype' => $this->input->post('thetype'),
			'mainver' => $this->input->post('mainver'),
			'topshow' => $this->input->post('topshow'),
			'thememo' => $this->input->post('thememo'),
			'author' => $this->input->post('author'),
			'thecontent' => $this->input->post('thecontent'),
		  );

		  $this->db->insert('pg_release_table', $data);
		  return  $rel_id ; 

		}




}
?>