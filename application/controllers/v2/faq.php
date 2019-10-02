<?php
class Faq extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('faq_model');
  }

public function index( ){

	$query = $this->db->query(" select thetype,ts,rs,nts,nrs from v_brief_faq " ) ;

	if ($query->num_rows() > 0)
		   $data['tfaq'] =  $query->result_array() ;

	  $data['title'] = 'PG有问有答区'  ;
	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/faq/faqhome', $data);
	  $this->load->view('v2/templates/footer');
}

public function typelist($page=1,$thetype){

	  $thetype = rawurldecode($thetype) ;
	  $per_page = 20 ;
	  $offset = ($page-1) * $per_page  ;
	  if ( $offset < 0 )  $offset = 0 ;
	  $total_rows = $this->faq_model->count_type_faq($thetype);
	  $data['total_rows'] = $total_rows ;
	  $data['pageoffset'] = $offset ;

	  $data['grpfaq'] = $this->faq_model->get_faq($thetype,$per_page, $offset);

	  $data['title'] = '分类问答:' . $thetype. '/FAQ Sub-Type';
	  $data['thetype'] = $thetype ;
	  $data['pagelinks'] = $this->getPageLinks(5,'/v2/faq/typelist',$total_rows,$per_page,$thetype,'/v2/faq/typelist/1/'.$thetype) ;
	  $this->load->view('v2/templates/header', $data);
	  $this->load->view('v2/faq/typelist', $data);
	  $this->load->view('v2/templates/footer');
}


public function delete($sysid = 0,$sub_id=0, $type='SUB'){
  $act_id =  $this->session->userdata('username') ;
  $enabledUsers = $this->faq_model->get_editors() ;

	$table = 'faq_table' ; 
	$del_id = $sysid ; 
	if ($type==='SUB') {
		$table = "faq_reply_table" ;
		$del_id = $sub_id ; 
	}
  
  $cur_author = $this->faq_model->get_author($del_id,$table) ;

  if ( strpos($enabledUsers ,$act_id) > -1  or $cur_author == $act_id  ) {
    //echo "You have rights" . $act_id  ;

    $this->faq_model->delete_by_id($del_id,$table) ;
	if ( $type == 'SUB') 
		redirect('/v2/faq/viewone/1/'.$sysid) ;
	else
		redirect('/v2/faq/') ;

  }else {
    show_error('You have no right to DELETE data ! <br><br>您没有权限删除数据，请退回！' ,505);
  }
}

public function viewone($page=1,$sysid = 0,$total_reply=0,$thetype){

  if(  is_numeric ($sysid) === FALSE ) {
    show_error('You do NOT give a correct FAQ ID ! <br><br>您所请求的FAQ ID不正确，请退回！' ,505);
  }

  $vdata['action_ok'] = $this->faq_model->view_faq_once($sysid);
  $vdata['grpfaq'] = $this->faq_model->get_grpfaq_byid($sysid);


  if (empty($vdata['grpfaq'])) {
    show_404();
  }

  $vdata['editors'] = $this->faq_model->get_editors();

  $per_page = 20 ;
  $offset = ($page-1) * $per_page  ;
  if ( $offset < 0 )  $offset = 0 ;
  $total_rows = $total_reply +1 ; //加上其自身数量  ;
  $vdata['total_rows'] = $total_rows ;
  $vdata['pageoffset'] =  $offset ;
  $vdata['sysid'] =  $sysid ;
  $vdata['page'] =  $page ;
  $vdata['curtype'] = $thetype ;


  $vdata['pagelinks'] = $this->getPageLinks(3,'/v2/faq/viewone',$total_rows,$per_page,$sysid,'/v2/faq/viewone/1/'.$sysid.'/'.$total_rows) ;


  $this->load->view('v2/templates/header', $vdata);
  $this->load->view('v2/faq/viewone', $vdata);
  $this->load->view('v2/templates/footer');
}



public function search(){

	$key =  trim($_POST['keysrh']) ; 

	$data['key'] = $key ; 


	if ( strlen($key) < 2 ) 
		$data['keyshort']= 1 ; 
	else
		$data['keyshort'] = 0 ; 

	$keyArray = explode(' ', $key);


	$sql = "select sysid,author,thetitle,creation_time,type from v_grp_faq where " ;
	foreach($keyArray as $key1){
		$onekey = $this->db->escape_like_str($key1) ;
		$onekey_eq = $this->db->escape_str($key1) ;
 	    $sql = $sql." (author='".$onekey_eq."' or thetitle like '%".$onekey."%' ESCAPE '!' or thecontent like '%".$onekey."%'  ESCAPE '!') and " ; 
	}
	$sql = substr($sql,0,strlen($sql) -4) ;

	$data['sql'] = $sql ; 

	$query = $this->db->query( $sql . " order by creation_time desc limit 100 " ) ; 
	if ($query->num_rows() > 0) {
		$data['recs'] =  $query->result_array() ; 
	}else {
		$data['recs'] =  null ; 
	}


  $data['title'] = '有问有答(FAQ) Search Result';

  $this->load->view('v2/templates/header',$data);
  $this->load->view('v2/faq/search', $data);
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

public function create(){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');

  $data['title'] = '有问有答/FAQ publication';

  $this->form_validation->set_rules('thetitle', '标题', 'required|min_length[5]|max_length[40]');
  $this->form_validation->set_rules('thecontent', '详细内容', 'required|min_length[10]');

  $this->form_validation->set_rules('thetype', '', 'isset');


  if ($this->form_validation->run() === FALSE)
  {
    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/faq/publication',$data);
    $this->load->view('v2/templates/footer');

  } else {
	$faqid = $this->faq_model->save_faq();

	$act_id =  $this->session->userdata('userid') ;
    $this->act_model->add_point_byid($act_id,30,'有问有答','<a href=/v2/faq/viewone/1/'.$faqid.'>浏览' . $faqid .'号问答</a>') ;


	$data['title']='问题发布成功/FAQ publication successed !' ;
	$data['faqid'] = $faqid ;


   $this->load->view('v2/templates/header', $data);
   $this->load->view('v2/faq/success_pub',$data);
   $this->load->view('v2/templates/footer');
   }

}


public function savereply($page,$sysid)
{
  $this->load->helper('form');
  $this->load->library('form_validation');

  $cdata['title'] = '回复保存/Save FAQ reply';
  $cdata['page'] = $page ;
  $cdata['sysid']= $sysid ;

  $this->form_validation->set_rules('content', '回复内容', 'required');

  if ($this->form_validation->run() === FALSE) {
    redirect('v2/faq/viewone/'.$page.'/'.$sysid,$cdata);
  } else {
    $this->faq_model->save_reply();
	$this->faq_model->faq_reply_click($sysid) ; //增加计数；
	$act_id =  $this->session->userdata('userid') ;
	$this->act_model->add_point_byid($act_id,3,'问题回复','<a href=/v2/faq/viewone/1/'.$sysid.'>浏览'. $sysid. '号问题</a>') ;

	$this->load->view('v2/templates/header', $cdata);
    $this->load->view('v2/faq/success_cmts',$cdata);
    $this->load->view('v2/templates/footer');

  }

}


public function modify($sysid,$sub_id,$thetype){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');

  $data['title'] = '有问有答问题更新/FAQ Modification';
  $date['curtype'] = $thetype ;

  $this->form_validation->set_rules('thetitle', '标题', 'required|min_length[5]|max_length[50]');
  $this->form_validation->set_rules('content', '', 'isset');


  if ($this->form_validation->run() === FALSE)
  {
	$data["sysid"] = $sysid ;
	$data["vnews"] = $this->faq_model->get_faq_byid($sysid);
    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/faq/modify',$data);
    $this->load->view('v2/templates/footer');

  } else {
	$faqid = $this->faq_model->modify_faq();

	$data['title']='更新成功/FAQ modify successed !' ;
	$data['faqid'] = $faqid ;

	$data['error'] = " " ;

	$this->load->view('v2/templates/header', $data);
	$this->load->view('v2/faq/success_mod',$data);
	$this->load->view('v2/templates/footer');
   }

}



public function modify_reply($sysid=0,$sub_id=0,$thetype='SUB'){

  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');

  $data['title'] = '有问有答回复更新/FAQ Modification';

  $this->form_validation->set_rules('content', '', 'isset');


  if ($this->form_validation->run() === FALSE)
  {
	$data["sysid"] = $sysid ;
	$data["sub_id"] = $sub_id ;
	$data["vnews"] = $this->faq_model->get_faq_reply_byid($sub_id);
    $this->load->view('v2/templates/header', $data);
    $this->load->view('v2/faq/modify_reply',$data);
    $this->load->view('v2/templates/footer');

  } else {
	$faq_reply_id = $this->faq_model->modify_faq_reply();

	$data['title']='更新成功/FAQ modify successed !' ;
	$data['faqid'] = $sysid ; //用于返回原

	$data['error'] = " " ;

	$this->load->view('v2/templates/header', $data);
	$this->load->view('v2/faq/success_mod',$data);
	$this->load->view('v2/templates/footer');
   }

}




}

