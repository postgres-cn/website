<?php
class Home extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function index(){

	$query = $this->db->query("select varval from sys_vars_table where varname='release_bg_pic' ") ;
	if ($query->num_rows() > 0)
		   $data['bg_pic'] =  $query->row_array() ;


	$query = $this->db->query("select sysid,theversion,thetype,to_char(reltime,'YYYY-MM-DD') reltime,left(thecontent,150) thecontent,author from pg_release_table where topshow=1 order by reltime desc limit 1 ") ;
	if ($query->num_rows() > 0)
		   $data['trel'] =  $query->row_array() ;


	$query = $this->db->query('select sysid,left(thetitle,50) thetitle,theclass,viewclicks,comtclicks,age(now(),pubtime) age,author,org_author from news_table order by pubtime desc limit 6 ') ;
	if ($query->num_rows() > 0)
		   $data['tnewss'] =  $query->result_array() ;

	$query = $this->db->query('select sysid,thetitle,thetype,blogowner,theurl,age(now(),refertime) from blog_table order by refertime desc limit 5 ') ;
	if ($query->num_rows() > 0)
		   $data['blogs'] =  $query->result_array() ;

	$query = $this->db->query('select msgid,thetitle,poster,thecolumn,age(now(),posttime) from forum_table order by posttime desc limit 8 ') ;
	if ($query->num_rows() > 0)
		   $data['forums'] =  $query->result_array() ;


	$query = $this->db->query("select sysid,theversion,to_char(reltime,'YYYY-MM-DD') as reltime2 from pg_release_table where topshow=1 order by reltime desc  limit 6 ") ;
	if ($query->num_rows() > 0)
		   $data['pgvers'] =  $query->result_array() ;



	$query = $this->db->query('select *  from v_act');
	if ($query->num_rows() > 0)
			$data['sums'] =  $query->row_array()  ;

	$query = $this->db->query('select pubtime,author,thetitle,brief_info,sysid,org_author  from news_table where topshow=1 order by pubtime desc limit 2');
	if ($query->num_rows() > 0)
		   $data['onen2'] =  $query->result_array() ;

	$query = $this->db->query('select author,thetitle,sysid,comtclicks,viewclicks,sort_time,age(now(),sort_time) age from v_faq_list order by sort_time desc limit 5 ');
	if ($query->num_rows() > 0)
		   $data['faqs'] =  $query->result_array() ;


	$query = $this->db->query('select * from act order by regtime desc limit 1 ') ;
	if ($query->num_rows() > 0)
		   $data['nrec'] =  $query->row_array() ;


	$query = $this->db->query('select sysid,thename,thepoint,picture from act where sysid >0 order by thepoint desc limit 3 ') ;
	if ($query->num_rows() > 0)
		   $data['topus'] =  $query->result_array() ;


  $data['title'] = 'PostgreSQL中文社区:';

  $this->load->view('v2/templates/header',$data);
  $this->load->view('v2/home', $data);
  $this->load->view('v2/templates/footer');


}


}