<?php
class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }


public function index(){

$this->load->dbutil();
$this->load->helper('file');
$this->load->helper('download');

$prefs = array(
//                'tables'      => array('table1', 'table2'),  // 包含了需备份的表名的数组.
                'ignore'      => array(),           // 备份时需要被忽略的表
                'format'      => 'gzip',             // gzip, zip, txt
                'filename'    => 'mybackup.sql',    // 文件名 - 如果选择了ZIP压缩,此项就是必需的
                'add_drop'    => TRUE,              // 是否要在备份文件中添加 DROP TABLE 语句
                'add_insert'  => TRUE,              // 是否要在备份文件中添加 INSERT 语句
                'newline'     => "\n"               // 备份文件中的换行符
              );

$this->dbutil->backup($prefs); 

$bak_file = 'backup'.date('YmdHis').'.gz' ; 
write_file('./' . $bak_file, $backup);

force_download($bak_file, $backup); 

}


public function download($file = FALSE ) {
			$this->load->helper('download');

			 if ( $file === FALSE ) {
				$data = 'Here is some text!';
				$name = 'mytext.txt';
				force_download($name, $data); 
			 }else {
				$data = file_get_contents("d:/pgsite/images/china_3.jpg"); // 读文件内容
				$name = 'myphoto.jpg';
				force_download($name, $data); 
			 }

}


}