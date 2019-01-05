<?php
class Chart_dataout extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function industry(){

	$query = $this->db->query('select *  from v_industry');
	if ($query->num_rows() > 0){
		   $row = $query->row() ; 
			if ( $row->manu_num > 0 ) $data['manu_num'] = $row->manu_num ; 
			if ( $row->it_num > 0 ) $data['it_num'] = $row->it_num ; 
			if ( $row->ast_num > 0 ) $data['ast_num'] = $row->ast_num ; 
			if ( $row->gov_num > 0 ) $data['gov_num'] = $row->gov_num ; 
			if ( $row->fin_num > 0 ) $data['fin_num'] = $row->fin_num ; 
			if ( $row->base_num > 0 ) $data['base_num'] = $row->base_num ; 
			if ( $row->trav_num > 0) $data['trav_num'] = $row->trav_num ; 
			if ( $row->cul_num > 0 ) $data['cul_num'] = $row->cul_num ; 
			if ( $row->agr_num>0 ) $data['agr_num'] = $row->agr_num ; 
			if ( $row->oth_num>0 ) $data['oth_num'] = $row->oth_num ; 
	}

  $this->load->view('chart/chart_data_industry', $data);


}


public function province(){

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

  $this->load->view('chart/chart_data_province', $data);


}



}