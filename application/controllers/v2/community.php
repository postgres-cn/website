<?php
class Community extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('act_model');
  }


public function index(){

	$query = $this->db->query('select count(1) as total_num  from act');
	if ($query->num_rows() > 0){
		   $row = $query->row() ; 
			$data['total_num'] = $row->total_num ; 
	}else {
			$data['total_num'] = 0 ; 
	}

  $data['title'] = 'About Chinese Community';

	$query = $this->db->query('select *  from v_industry');
	if ($query->num_rows() > 0){
		   $row = $query->row() ; 
			$data['manu_num'] = $row->manu_num ; 
			$data['it_num'] = $row->it_num ; 
			$data['ast_num'] = $row->ast_num ; 
			$data['gov_num'] = $row->gov_num ; 
			$data['fin_num'] = $row->fin_num ; 
			$data['base_num'] = $row->base_num ; 
			$data['trav_num'] = $row->trav_num ; 
			$data['cul_num'] = $row->cul_num ; 
			$data['agr_num'] = $row->agr_num ; 
			$data['oth_num'] = $row->oth_num ; 
	}else {
			$data['manu_num'] = 1 ; 
			$data['it_num'] = 1 ; 
			$data['ast_num'] = 1 ; 
			$data['gov_num'] = 1 ; 
			$data['fin_num'] = 1 ; 
			$data['base_num'] = 1 ; 
			$data['trav_num'] = 1 ; 
			$data['cul_num'] = 1 ; 
			$data['agr_num'] = 1 ; 
			$data['oth_num'] = 1 ; 
	}

	$query = $this->db->query('select *  from v_province');
	if ($query->num_rows() > 0){
		   $row = $query->row() ; 
			$data['n_ah'] = $row->n_ah ; 
			$data['n_bj'] = $row->n_bj ; 
			$data['n_tj'] = $row->n_tj ; 
			$data['n_sh'] = $row->n_sh ; 
			$data['n_cq'] = $row->n_cq ; 
			$data['n_hlj'] = $row->n_hlj ; 
			$data['n_jl'] = $row->n_jl ; 
			$data['n_ll'] = $row->n_ll ; 
			$data['n_hn'] = $row->n_hn ; 
			$data['n_hb'] = $row->n_hb ; 
			$data['n_sd'] = $row->n_sd ; 
			$data['n_sx'] = $row->n_sx ; 
			$data['n_shx'] = $row->n_shx ; 
			$data['n_hun'] = $row->n_hun ; 
			$data['n_hub'] = $row->n_hub ; 
			$data['n_js'] = $row->n_js ; 
			$data['n_zj'] = $row->n_zj ; 
			$data['n_jx'] = $row->n_jx ; 
			$data['n_gd'] = $row->n_gd ; 
			$data['n_fj'] = $row->n_fj ; 
			$data['n_gx'] = $row->n_gx ; 
			$data['n_yn'] = $row->n_yn ; 
			$data['n_gz'] = $row->n_gz ; 
			$data['n_sc'] = $row->n_sc ; 
			$data['n_other'] = $row->n_other ; 

	}else {
			$data['n_ah'] = 0 ; 
			$data['n_bj'] = 0 ; 
			$data['n_tj'] = 0 ; 
			$data['n_sh'] = 0 ; 
			$data['n_cq'] = 0 ; 
			$data['n_hlj'] = 0 ; 
			$data['n_jl'] = 0 ; 
			$data['n_ll'] =0 ; 
			$data['n_hn'] = 0 ; 
			$data['n_hb'] = 0 ; 
			$data['n_sd'] = 0 ; 
			$data['n_sx'] = 0 ; 
			$data['n_shx'] = 0 ; 
			$data['n_hun'] = 0 ; 
			$data['n_hub'] = 0 ; 
			$data['n_js'] = 0 ; 
			$data['n_zj'] = 0 ; 
			$data['n_jx'] = 0 ; 
			$data['n_gd'] = 0 ; 
			$data['n_fj'] = 0 ; 
			$data['n_gx'] = 0 ; 
			$data['n_yn'] = 0 ; 
			$data['n_gz'] = 0 ; 
			$data['n_sc'] = 0 ; 
			$data['n_other'] = 0 ; 
	}

  $this->load->view('v2/templates/header',$data);
  $this->load->view('v2/community/community_chinese', $data);
  $this->load->view('v2/templates/footer');


}


public function typelist($page=1,$theclass){

	  $per_page = 30 ; 
	  $offset = ($page-1) * $per_page  ; 
	  if ( $offset < 0 )  $offset = 0 ; 
	  $total_rows = $this->act_model->count_class_users($theclass);
	  $data['total_rows'] = $total_rows ; 


	  $data['grpusers'] = $this->act_model->get_users($theclass,$per_page, $offset);

	  $data['curpage'] = $page ; 
	  $data['pagesize'] = $per_page ; 

	  $data['title'] = '注册用户列表:' . $theclass. '/Registered Users';
	  $data['theclass'] = $theclass ; 
	  $data['pagelinks'] = $this->getPageLinks(5,'/v2/community/typelist',$total_rows,$per_page,$theclass,'/v2/community/typelist/1/'.$theclass) ; 
	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/community/typelist', $data);
	  $this->load->view('v2/templates/footer');
}


function getPageLinks($pageloc,$theurl,$totalrows , $per_page,$ext_info,$firsturl) {
		$this->load->library('pagination');
		$config['base_url'] = site_url($theurl) ; 
		if ( strlen($ext_info) > 0 ) 
			$config['suffix'] = "/".$ext_info;

		$config['first_url'] = $firsturl;
		$config['num_links'] = $pageloc;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = '首页';
		$config['first_tag_open'] = chr(13).'<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '末页';
		$config['last_tag_open'] = chr(13).'<li>';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '下一页&gt;&gt;';
		$config['next_tag_open'] = chr(13).'<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '上一页&lt;&lt;';
		$config['prev_tag_open'] = chr(13).'<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = chr(13).'<li class="active">';
		$config['cur_tag_close'] = '</li>';

		$config['num_tag_open'] =chr(13).'<li>';
		$config['num_tag_close'] =  '</li>';
//		$config['display_pages'] = FALSE; //不显示中间的数字页
		$config['total_rows'] = $totalrows;
		$config['per_page'] = $per_page;
		$this->pagination->initialize($config);
		return  $this->pagination->create_links();

}


}
