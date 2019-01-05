<?php
class Blog_model extends CI_Model {

	  public function __construct() {
	  }


		public function get_blog($limit=30,$offset=0){

		 $this->db->order_by("refertime","desc") ; 

		  $query = $this->db->get('blog_table',$limit,$offset);
		  return $query->result_array();
		}



		public function count_blog() {
			return $this->db->count_all_results('blog_table');
		}


		public function get_type_blog($thetype=FALSE,$limit=30,$offset=0){

		 $this->db->order_by("refertime","desc") ; 
		  $query = $this->db->get_where('blog_table',array('thetype' => $thetype),$limit,$offset);
		  return $query->result_array();
		}



		public function count_type_blog($thetype) {
			$this->db->where('thetype', $thetype);
			return $this->db->count_all_results('blog_table');
		}


		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'blog_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract blog editor  Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function save_blog(){

		  $data = array(
			'referral' => $this->input->post('referral'),
			'refertime' => $this->input->post('refertime'),
			'blogowner' => $this->input->post('blogowner'),
			'thetitle' => $this->input->post('thetitle'),
			'thetype' => $this->input->post('thetype'),
			'theurl' => $this->input->post('theurl')
		  );

		  return $this->db->insert('blog_table', $data);

		}



}

?>