<?php
class Trail_model extends CI_Model {

	  public function __construct() {
	  }


		public function get_trail_log($thetype = FALSE,$userid=0,$limit=30,$offset=0){

			$this->db->order_by('thetime', 'desc') ; 
			$this->db->where('userid', $userid);

		  if ($thetype === FALSE){
				$query = $this->db->get('act_points_table',$limit,$offset);
				return $query->result_array();
		  }

		  $query = $this->db->get_where('act_points_table', array('thetype' => $thetype),$limit,$offset);
		  return $query->result_array();
		}


		public function count_trail_log($userid) {
			$this->db->where('userid', $userid);
			return $this->db->count_all_results('act_points_table');
		}

		public function count_type_trail($userid,$thetype) {
			$this->db->where('thetype', $thetype);
			$this->db->where('userid', $userid);
			return $this->db->count_all_results('act_points_table');		
		}


}

?>