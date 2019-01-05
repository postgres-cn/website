<?php



class Book extends CI_Controller {



public function index( ) {



  $data['title'] = '下载页面/Download' ; 


  $query = $this->db->query("select varval as last_update from sys_vars_table where varname='last_update_for_book' ") ;
  if ($query->num_rows() > 0)
       $data['last_update'] =  $query->row_array() ;


  $query = $this->db->query(" select * from books_table where 1=1 order by hottest desc,pubdate desc    ") ;
  if ($query->num_rows() > 0)
       $data['bURLs'] =  $query->result_array() ;


 



  $this->load->view('v2/templates/header', $data);

  $this->load->view('v2/book/booklist', $data);

  $this->load->view('v2/templates/footer');



}







}



?>
