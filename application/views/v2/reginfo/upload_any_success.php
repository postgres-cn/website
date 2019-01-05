<!doctype HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="PostgreSQL,postgres.cn, 中文社区,pgsql, open source, 中文社区官网, pg文档,世界上功能最强大的开源数据库" />
  <meta name="description" content="The official site for PostgreSQL, the world's most advanced open source database" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
  <link rel="shortcut icon" href="/favicon.ico" />
  <title>General Upload__PostgreSQL中文社区: 世界上功能最强大的开源数据库...</title>
  
</head>
 <body>

<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">个人资料修改</a></li>
                <li><a href="#">晋级之路</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="#">个人资料修改</a></li>
            </ol>

<P>&nbsp;</p>
<br>
<div class=banner>
上传文件成功！上传后的文件为：
<ul>
<?php 
/* method 1: 
 foreach ($upload_data as $item => $value):
   if( strpos(',full_path,image_width,image_height,image_type,file_size,',$item) > -1 ) {
	   $org_str = $value ; 
	   if ( $item == 'full_path' )
		   $org_str = substr($org_str,13) ; 
	   echo "<LI>".$item." : ".$org_str ;
	}
 endforeach;
*/
//Method 2 , directly

 $org_str = $upload_data['full_path'] ;  // -- /var/www/html/images/news/2017/20170924_2024_3.jpg
 $url_str = substr($org_str,13) ; 
 echo "<li>Image URL : <b>".$url_str ."</b>" ; 
 echo "<LI>...." ;
 echo "<LI>File_size: ". $upload_data['file_size']." K";
 echo "<LI>Image_width: ".$upload_data['image_width'] ; 
 echo "<LI>Image_height: ".$upload_data['image_height']; 
 echo "<LI>Image_type: " .$upload_data['image_type'] ; 
 
?>
</ul>
<br><br>
15秒后将自动切换至上传页面。。。<a href=/v2/act/upload_any>按此手动返回</a>
</div>

<script language=javascript>
setTimeout("document.location='/v2/act/upload_any';",15000) ; 
</script>


</div>
</div>
</div>
</div>
