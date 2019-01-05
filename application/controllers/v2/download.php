<?php



class Download extends CI_Controller {


public function index( ) {



  $data['title'] = '下载页面/Download' ; 

  $filename = 'application/views/v2/download/download.php' ; 

  $file_info = get_file_info($filename, 'date') ; 

  if ( $file_info != FALSE ) 

	  $data['last_modified'] = date('Y-m-d H:i:s',$file_info['date']) ; 

  else

	  $data['last_modified'] = 'unknown' ; 



  $query = $this->db->query("select varval as last_update from sys_vars_table where varname='last_update_for_download'  ") ;
  if ($query->num_rows() > 0)
       $data['last_update'] =  $query->row_array() ;


  $query = $this->db->query(" select * from download_table where thetype='PRODUCT' order by platform_or_title,is32_64,isinstall_zip   ") ;
  if ($query->num_rows() > 0)
       $data['bURLs'] =  $query->result_array() ;


  $query = $this->db->query(" select * from download_table where thetype='TEST' order by platform_or_title,is32_64,isinstall_zip  ") ;
  if ($query->num_rows() > 0)
       $data['tURLs'] =  $query->result_array() ;



  $this->load->view('v2/templates/header', $data);

  $this->load->view('v2/download/download', $data);

  $this->load->view('v2/templates/footer');



}







}



?>
