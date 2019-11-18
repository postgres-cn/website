<?php
class News_model extends CI_Model {

	  public function __construct() {
	  }

		public function get_editors(){
  		  $query = $this->db->get_where('sys_vars_table', array('varname' => 'news_editor'));
		  if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->varval ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Extract News Editor Error!!!') ; 
				return 'NONE' ; 
			}
		}

		public function get_news($theclass = FALSE,$limit=30,$offset=0){

		  if ($theclass === FALSE){
				$query = $this->db->get('v_news_list',$limit,$offset);
				return $query->result_array();
		  }

		  $query = $this->db->get_where('v_news_list', array('theclass' => $theclass),$limit,$offset);
		  return $query->result_array();
		}


		public function count_news() {
			return $this->db->count_all_results('news_table');
		}

		public function count_class_news($theclass) {
			$this->db->where('theclass', $theclass);
			return $this->db->count_all_results('news_table');		
		}

		public function count_news_comments($newsid) {
			$this->db->where('newsid', $newsid);
			return $this->db->count_all_results('news_comments_table');		
		}

		public function get_userinfo_byname($username = 'NONE'){
  		  $query = $this->db->get_where('act', array('thename' => $username));
		  return $query->row_array();
		}


		public function get_news_byid($sysid = 0){
  		  $query = $this->db->get_where('v_news', array('sysid' => $sysid));
		  return $query->row_array();
		}



		public function get_news_comments_byid($newsid=0,$limit=30,$offset=0) {
			$this->db->order_by('inputtime','desc') ; 
		  $query = $this->db->get_where('news_comments_table_v', array('newsid' => $newsid),$limit,$offset);
		  return $query->result_array();

		}

		public function get_next_news_id() {
			$query = $this->db->query("select nextval('news_table_sysid_seq') as sysid ");
			if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->sysid ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Generate news id Error!!!') ; 
				return -1 ; 
			}
		}

		public function view_news_once($sysid = 0){
			$this->db->set('viewclicks', 'viewclicks+1', FALSE);
			$this->db->where('sysid', $sysid);
			$this->db->update('news_table'); 
			return 1 ; 
		}

		public function news_good_click($sysid = 0){
			$this->db->set('goodclicks', 'goodclicks+1', FALSE);
			$this->db->where('sysid', $sysid);
			$this->db->update('news_table'); 
			return 1 ; 
		}

		public function news_bad_click($sysid = 0){
			$this->db->set('badclicks', 'badclicks+1', FALSE);
			$this->db->where('sysid', $sysid);
			$this->db->update('news_table'); 
			return 1 ; 
		}


		public function delete_by_id($sysid = 0){
			$this->db->where('sysid', $sysid);
			$this->db->delete('news_table'); 
			return 1 ; 
		}		
		
		public function save_news(){

		 $news_id = $this->get_next_news_id() ; 

		  $data = array(
			'sysid' => $news_id,
			'thetitle' => $this->input->post('thetitle'),
			'theclass' => $this->input->post('theclass'),
			'brief_info' => $this->input->post('brief_info'),
			'author' => $this->input->post('author'),
			'org_author' => $this->input->post('org_author'),
			'org_pubtime' => $this->input->post('org_pubtime'),
			'topshow' => $this->input->post('topshow'),
			'aux_pic_info1' => $this->input->post('aux_pic_info1'),
			'aux_pic_info2' => $this->input->post('aux_pic_info2'),
			'aux_pic_info3' => $this->input->post('aux_pic_info3'),
			'pubtime' => $this->input->post('pubtime')  /*date('Y-m-d H:i:s')  */
		  );

		  $this->db->insert('news_table', $data);

		  $memo = array(
			'newsid' => $news_id,
			'thecontent' => $this->input->post('content')
		  );

			$this->db->insert('news_memo_table', $memo);
		  return  $news_id ; 

		}




		public function save_comment(){
		  
		  $data = array(
			'thecomment' => $this->input->post('content'),
			'newsid' => $this->input->post('sysid'),
			'username' => $this->input->post('username'),
			'ipaddr'=> $this->input->ip_address(),
			'inputtime' => date('Y-m-d H:i:s') 
		  );

		$cur_comm = $this->input->post('content') ; 
		$cur_user = $this->input->post('username') ; 
		//判断字符串中是否有中文或是英文长度《1K

		//if ( preg_match("/[\\u4e00-\\u9fa5]/", $cur_comm) || strlen($cur_comm) < 100  ) { 
		if ( $cur_user != 'GUEST' ) {
			return $this->db->insert('news_comments_table', $data);
		} else {
			return 2 ; 
		}

		}



		public function modify_news()	{

			  $data = array(
				'pubtime' => $this->input->post('pubtime'),
				'org_author' => $this->input->post('org_author'),
				'theclass' => $this->input->post('theclass'),
				'topshow' => $this->input->post('topshow'),
				'thetitle' => $this->input->post('thetitle'),
				'brief_info' => $this->input->post('brief_info')
			  );

			$this->db->where('sysid', $this->input->post('sysid'));	
			$this->db->update('news_table', $data);

			$memo = array(
				'thecontent' => $this->input->post('content')
			);
			$this->db->where('newsid', $this->input->post('sysid'));	
			$this->db->update('news_memo_table', $memo);
		
			return $this->input->post('sysid'); 
		
		}

    public function get_feeds($limit = 100) {
		$query = $this->db->get_where('v_news_list', array('topshow' => 1), $limit);
		return $query->result_array();
    }
}
