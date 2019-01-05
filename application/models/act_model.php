<?php
class Act_model extends CI_Model {

	  public function __construct() {
		$this->load->database();
	  }

		public function get_accuonts($thegroup = FALSE){
		  if ($thegroup === FALSE){
			$query = $this->db->get('act');
			return $query->result_array();
		  }
		  
		  $query = $this->db->get_where('act', array('thegroup' => $thegroup));
		  return $query->result_array();
		}


		public function get_account_byname($thename = 'NONE',$passwd='NONE'){
		  $this->load->helper('security');
		  $enc_pwd = do_hash($passwd, 'md5');

  		  $query = $this->db->get_where('act', array('thename' => $thename,'passwd'=>$enc_pwd));
		  return $query->row_array();
		}

		public function get_account_byid($id = 0){
  		  $query = $this->db->get_where('act', array('sysid' => $id));
		  return $query->row_array();
		}


		public function extract_info_byname($thename = 'NONE'){
  		  $query = $this->db->get_where('act', array('thename' => $thename));
		  return $query->row_array();
		}

		public function get_id_byname($thename = 'NONE'){
  		  $query = $this->db->get_where('act', array('thename' => $thename));
		  if ( $query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->sysid ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Generate act id by name Error!!!') ; 
				return -1 ; 
			}
		}

		public function count_users() {
			return $this->db->count_all_results('act');
		}

		public function count_class_users($theclass) {
			$dateVar = " current_date - interval '7 days' " ;
			
			if ( $theclass == "MONTHREG" ) 
				$dateVar = "  current_date - interval '31 days' " ;
			else if ( $theclass =="ALL") 
				$dateVar = "  '1900-01-01'::date " ;
				
			$this->db->where(array('regtime >'=>$dateVar),NULL, FALSE);
			return $this->db->count_all_results('act');		
		}

		
		public function get_users($theclass = FALSE,$limit=50,$offset=0){
			$dateVar = " current_date - interval '7 days' " ;
			if ( $theclass == "MONTHREG" ) 
				$dateVar = "  current_date - interval '31 days' " ;
			else if ( $theclass =="ALL") 
				$dateVar = "  '1900-01-01'::date " ;
			$this->db->where(array('regtime >'=>$dateVar),NULL, FALSE);

			$this->db->order_by('regtime','desc');
			$this->db->order_by('sysid','desc');

		  $query = $this->db->get('act',$limit,$offset);
		  return $query->result_array();
		}		
		
		
		public function add_point_byid($sysid=0, $thepoint=0,$action='NONE',$thememo=''){

			if ( $sysid < 1 ) {
				//log_message('error','No id=0, action='.$action.', memo='.$thememo) ; 
				return -1 ; 
			}

			$this->db->set('thepoint','thepoint +'.$thepoint ,FALSE) ; 
			$this->db->where('sysid', $sysid) ; 
			$this->db->update('act');
			
			$data = array(
				'userid' =>$sysid,
				'thetime' => date('Y-m-d H:i:s') , 
				'thetype' => $action,
				'thepoint' => $thepoint, 
				'thememo' => $thememo 
			  );
			 return $this->db->insert('act_points_table', $data);


		}


		public function get_next_act_id() {
			$query = $this->db->query("select nextval('act_table_sysid_seq') as sysid ");
			if ($query->num_rows() > 0) {
				$row = $query->row() ; 
				return $row->sysid ; 
			}else {
				log_message('error',date('Y-m-d H:i:s'). 'Generate act id Error!!!') ; 
				return -1 ; 
			}
		}

		public function insert_user(){

			$sysid = $this->get_next_act_id() ; 

		//	log_message('error', 'Get file = ' . $_FILES['userfile']['name']) ; 

			$fileExt = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);

			  $data = array(
				'sysid' => $sysid ,
				'thename' => $this->input->post('thename'),
				'realname' => $this->input->post('realname'),
				'theprovince' => $this->input->post('theprovince'),
				'thecity' => $this->input->post('thecity'),
				'industry' => $this->input->post('industry'),
				'regtime' => date('Y-m-d') , 
				'focused' => $this->input->post('focused'),
				'passwd' => $this->input->post('passwd'),
				'picture' => $sysid . '.'. $fileExt
			  );
			  $this->db->insert('act', $data);
			  return $sysid ; 
		}


		public function update_user()	{

			  $data = array(
				'realname' => $this->input->post('realname'),
				'theprovince' => $this->input->post('theprovince'),
				'thecity' => $this->input->post('thecity'),
				'industry' => $this->input->post('industry'),
				'focused' => $this->input->post('focused'),
				'qq' => $this->input->post('qq'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'cust_sig' => $this->input->post('cust_sig')
			  );

		  $passwd = $this->input->post('passwd') ; 
		  if ( strlen($passwd) > 4 ) {
			  $this->load->helper('security');
			  $enc_pwd = do_hash($passwd, 'md5');
			  $data['passwd'] = $enc_pwd ; 
		}

		   $this->db->where('sysid', $this->input->post('sysid'));	
		//   log_message('error','Run Act update='.$this->input->post('sysid') ) ; 
		  return $this->db->update('act', $data);
		}






}

/*


CREATE TABLE act (
sysid serial,
thename varchar(30) NOT NULL,
realname varchar(40)  DEFAULT '' NOT NULL,
theprovince varchar(30)  DEFAULT '' NOT NULL,
thecity varchar(30)  default '' not null ,
focused varchar(40)  DEFAULT '' NOT NULL,
passwd varchar(32) not null default '' ,
industry varchar(30) COLLATE default,
regtime date,
thegroup varchar(30) ,
email varchar(40) not null default '',
qq varchar(20) not null default '' ,
picture varchar(30) not null default '' ,
phone varchar(30) not null default '' ,
cust_sig varchar(100) not null default '' ,
thelevel varchar(30) not null default '' ,
thepoint int4 DEFAULT 0 NOT NULL,
manager_role varchar(30) not null default '' ,
manager_expdate date,
CONSTRAINT act_pkey PRIMARY KEY (sysid)
)

CREATE UNIQUE INDEX act_name_inx ON act USING btree (thename);

*/
