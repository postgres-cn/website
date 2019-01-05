<?php
class Forum_model extends CI_Model {

	  public function __construct() {
	  }


		public function get_forums($thetype = FALSE,$limit=30,$offset=0){

		 $this->db->order_by("inputtime","desc") ; 
		  if ($thetype === FALSE){
				$query = $this->db->get('forum_table',$limit,$offset);
				return $query->result_array();
		  }

		  $query = $this->db->get_where('forum_table', array('thecolumn' => $thetype),$limit,$offset);
		  return $query->result_array();
		}


		public function count_forum() {
			return $this->db->count_all_results('forum_table');
		}

		public function count_type_forum($thetype) {
			$this->db->where('thecolumn', $thetype);
			return $this->db->count_all_results('forum_table');		
		}


		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'forum_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract Forum fixeders  Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function save_forum(){

		  $data = array(
			'poster' => $this->input->post('poster'),
			'posttime' => $this->input->post('posttime'),
			'thecolumn' => $this->input->post('thecolumn'),
			'msgid' => $this->input->post('msgid'),
			'inputter' => $this->input->post('inputter'),
			'inputtime' => $this->input->post('inputtime'),
			'thetitle' => $this->input->post('thetitle')
		  );

		  return $this->db->insert('forum_table', $data);

		}



}

?>