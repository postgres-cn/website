<!doctype HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="PostgreSQL,database,postgres.cn, 中文社区,pgsql, open source, 中文社区官网, pg文档,世界上功能最强大的开源数据库" />
  <meta name="description" content="The official site for PostgreSQL, the world's most advanced open source database" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="/css/extra.css">
  <link rel="shortcut icon" href="/favicon.ico" />
  <title>General Upload__PostgreSQL中文社区: 世界上功能最强大的开源数据库...</title>
  
</head>
 <body>

<div class=banner>General Upload </div><br><br>

<?php echo form_open_multipart('upload_reg/any_upload');?>


<table cellspacing=0 border=0 cellpadding=10>


 <TR><TD>File to be upload <td> <input type=file id="userfile" name="userfile">

<tr><td>File Prefix: <td><input type="text" class=mytxt size=30 name="fname_prefix"  
value="<?php echo date('Ymd_Hi'); ?>" />

<tr><td>Saved to: <td><input type="text" class=mytxtr readonly  size=30 name="upload_path"  value="./images/<?php echo $default_dir ; ?>/<?php echo date('Y'); ?>/" />
<input type="hidden" size=30 name="upload_fname" value="--.txt" />

<tr><td><td><input type=submit value='Upload Now !' class=mybtn>

&nbsp; &nbsp; &nbsp; <input type=button value='关闭本窗口 !' class=mybtn onclick="self.close();">

 </TD></tr>
 </table>



</FORM>

