<?php
class Search extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function index(){

	$key_org =  trim($_POST['keysrh']) ; 

	$key = $this->db->escape_like_str($key_org) ;

	$data['key'] = $key ; 
	

	if ( strlen($key) < 2 ) 
		$data['keyshort']= 1 ; 
	else
		$data['keyshort'] = 0 ; 

	$sql = "select 'v2/news/viewone/1/'::varchar(20) as type,'社区新闻'::varchar(20) as ctype,sysid,theclass,pubtime,thetitle from v_news where thetitle like '%" . $key . "%' ESCAPE '!' or thecontent like '%".$key ."%' ESCAPE '!' "; 
	
	$sql = $sql. " union all " ; 
	$sql = $sql."select 'v2/release/v/','软件发布声明',sysid,thetype,to_char(reltime,'YYYY-MM-DD'),theversion ||'版本发布声明' from pg_release_table where thecontent like '%".$key."%' ESCAPE '!'" ; 

	//$sql = $sql. " union all " ; 
	//$sql = $sql."select 'v2/cases/viewone/','应用案例',sysid,theclass,to_char(project_online,'YYYY-MM-DD'),thetitle from //cases_table where thetitle like '%".$key."%' or proj_descr like '%".$key."%' ESCAPE '!' " ; 

	$sql = $sql. " union all " ; 
	$sql = $sql."select 'v2/faq/viewone/1/','有问有答(FAQ)',sysid,'',to_char(creation_time,'YYYY-MM-DD'),thetitle from v_grp_faq where thetitle like '%".$key."%' ESCAPE '!' or thecontent like '%".$key."%' ESCAPE '!' or author like '%".$key."%' ESCAPE '!' " ; 


	$data['sql'] = $sql ; 

	$query = $this->db->query( $sql . " order by type,pubtime limit 500 " ) ; 
	if ($query->num_rows() > 0) {
		$data['recs'] =  $query->result_array() ; 
	}else {
		$data['recs'] =  null ; 
	}


  $data['title'] = 'Search Result';

  $this->load->view('v2/templates/header',$data);
  $this->load->view('v2/search', $data);
  $this->load->view('v2/templates/footer');


}


}