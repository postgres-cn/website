<?php
class Faq_model extends CI_Model {

	  public function __construct() {
	  }

		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'faq_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract FAQ Editor Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function get_author($sysid,$table){
  		  $query = $this->db->get_where($table, array('sysid' => $sysid));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->author ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract '.$table.'/'.$sysid.'FAQ Editor Error!!!') ; 
				return 'NONEUSER' ; 
			}
		}

		public function get_faq($thetype = FALSE,$limit=30,$offset=0){

		  if ($thetype === FALSE){
				$query = $this->db->get('v_faq_list',$limit,$offset);
				return $query->result_array();
		  }

		  $query = $this->db->get_where('v_faq_list', array('thetype' => $thetype),$limit,$offset);
		  return $query->result_array();
		}

		public function get_userinfo_byname($username = 'NONE'){
  		  $query = $this->db->get_where('act', array('thename' => $username));
		  return $query->row_array();
		}

		public function count_faq() {
			return $this->db->count_all_results('faq_table');
		}

		public function count_type_faq($thetype) {
			$this->db->where('thetype', $thetype);
			return $this->db->count_all_results('faq_table');		
		}

		public function view_faq_once($sysid = 0){
			$this->db->set('viewclicks', 'viewclicks+1', FALSE);
			$this->db->where('sysid', $sysid);
			$this->db->update('faq_table'); 
			return 1 ; 
		}

		public function get_grpfaq_byid($sysid = 0){
  		  $query = $this->db->get_where('v_grp_faq', array('sysid' => $sysid));
		  return $query->result_array();
		}

		public function get_faq_byid($sysid = 0){
  		  $query = $this->db->get_where('faq_table', array('sysid' => $sysid));
		  return $query->row_array();
		}

		public function get_faq_reply_byid($sysid = 0){
  		  $query = $this->db->get_where('faq_reply_table', array('sysid' => $sysid));
		  return $query->row_array();
		}

		public function delete_by_id($sysid = 0,$table){
			$this->db->where('sysid', $sysid);
			$this->db->delete($table); 
			return 1 ; 
		}		
		
		public function save_faq(){

		  $data = array(
			'thetitle' => $this->input->post('thetitle'),
			'thetype' => $this->input->post('thetype'),
			'author' => $this->input->post('author'),
			'thecontent' => $this->input->post('thecontent'),
			'ipaddr'=> $this->input->ip_address(),
			'creation_time' =>  date('Y-m-d H:i:s') //$this->input->post('creation_time')  
		  );

		  $this->db->insert('faq_table', $data);

		  return  $this->db->insert_id(); ; 

		}


		public function save_reply(){
		  
		  $data = array(
			'reply' => $this->input->post('content'),
			'pid' => $this->input->post('sysid'),
			'author' => $this->input->post('username'),
			'ipaddr'=> $this->input->ip_address(),
			'creation_time' => date('Y-m-d H:i:s') 
		  );

		return $this->db->insert('faq_reply_table', $data);

		}

		public function faq_reply_click($sysid = 0){
			$this->db->set('comtclicks', 'comtclicks+1', FALSE);
			$this->db->where('sysid', $sysid);
			$this->db->update('faq_table'); 
			return 1 ; 
		}


		public function modify_faq()	{

			  $data = array(
				'thetitle' => $this->input->post('thetitle'),
				'thetype' => $this->input->post('thetype'),
				'thecontent' => $this->input->post('content')
			  );

			$this->db->where('sysid', $this->input->post('sysid'));	
			$this->db->update('faq_table', $data);

			return $this->input->post('sysid'); 
		
		}

		public function modify_faq_reply()	{

			  $data = array(
				'reply' => $this->input->post('content')
			  );

			$this->db->where('sysid', $this->input->post('sub_id'));	
			$this->db->update('faq_reply_table', $data);

			return $this->input->post('sysid'); 
		
		}


}

?>