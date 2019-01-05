<?php
class Suggest_model extends CI_Model {

	  public function __construct() {
	  }


		public function get_suggest($thetype = FALSE,$limit=30,$offset=0){

		 $this->db->order_by("thetime","desc") ; 
		  if ($thetype === FALSE){
				$query = $this->db->get('suggest_table',$limit,$offset);
				return $query->result_array();
		  }

		  $query = $this->db->get_where('suggest_table', array('thetype' => $thetype),$limit,$offset);
		  return $query->result_array();
		}


		public function count_suggest() {
			return $this->db->count_all_results('suggest_table');
		}

		public function count_type_suggest($thetype) {
			$this->db->where('thetype', $thetype);
			return $this->db->count_all_results('suggest_table');		
		}


		public function get_next_suggest_id() {
			$query = $this->db->query("select nextval('suggest_table_sysid_seq') as sysid ");
			if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->sysid ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Generate suggest id Error!!!') ; 
				return -1 ; 
			}
		}


		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'suggest_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract suggestion fixeders  Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function save_suggest(){

		  $data = array(
			'thename' => $this->input->post('thename'),
			'thetime' => $this->input->post('thetime'),
			'thetype' => $this->input->post('thetype'),
			'thecontent' => $this->input->post('thecontent')
		  );

		  return $this->db->insert('suggest_table', $data);

		}


		public function save_reply(){

		  $data = array(
			'fixedby' => $this->input->post('fixedby'),
			'fixedtime' => $this->input->post('fixedtime'),
			'fixture' => $this->input->post('fixture')
		  );


		  $this->db->where('sysid', $this->input->post('sysid') );

		  return $this->db->update('suggest_table', $data);

		}




}

?>