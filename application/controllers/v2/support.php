<?php



class Support extends CI_Controller {



public function index( ) {



  $data['title'] = '商业支持/Tech Support for Business Level' ; 

  $query = $this->db->query("select varval as last_update from sys_vars_table where varname='last_update_for_support'  ") ;
  if ($query->num_rows() > 0)
       $data['last_update'] =  $query->row_array() ;
  else
       $data['last_update'] =  '2018-10-20' ; 


  $query = $this->db->query(" select * from business_support_table where 1=1 or category='独立发行版厂商' order by category desc ,companyname  ") ;
  if ($query->num_rows() > 0)
       $data['bURLs'] =  $query->result_array() ;
/*
  $query = $this->db->query(" select * from business_support_table where category='PRODUCT' order by category  ") ;
  if ($query->num_rows() > 0)
       $data['bURLs'] =  $query->result_array() ;

   $query = $this->db->query(" select * from business_support_table where category='PRODUCT' order by category  ") ;
  if ($query->num_rows() > 0)
       $data['bURLs'] =  $query->result_array() ;
*/

  $this->load->view('templates/header', $data);

  $this->load->view('support/supportlist', $data);

  $this->load->view('templates/footer');



}







}



?>
