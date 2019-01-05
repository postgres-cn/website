<script src=/js/my_procs.js></script>

<div class=banner>首页 --> 应用案例发布</div><br><br>

<?php 

echo form_open_multipart('cases/create');

$vad_info = validation_errors(); 

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=4><div class=banner> $vad_info </div>" : "" ; 

?>


<div align=center>
<TABLE  width=95% cellspacing=0 border=01 style="border-collapse:collapse" cellpadding=4><TBODY>

<?php echo $extra_info ; ?>

<input type="hidden" id="username" name="username"   value="<?php echo$this->session->userdata('username'); ?>"  >
 
<TR  bgcolor=#f0f0f0>

<TD>案例类别
<td><script> 
var token = '国际组织,制造,信息,交通,金融,政府' ; 
document.write(outSelectFromTokenString('theclass',token,1,"<?php echo set_value('thetitle'); ?>")) ; </script>
<span class=redc>*</span>


<TD>项目名称：
<td><input type=text size=40 maxlength name=thetitle value="<?php echo set_value('thetitle'); ?>" class=mytxt> <span class=redc>*</span>


<TR>
<TD>上线时间
<td><input type=text id="project_online" name="project_online"   value="<?php echo date('Y-m-d'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TD>PostgreSQL信息：
<td><input type=text id="pg_info" name="pg_info"   value="<?php echo set_value('pg_info'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TR bgcolor=#f0f0f0><TD>OS信息：
<td><input type=text id="os_info" name="os_info"   value="<?php echo set_value('os_info'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TD>App信息
<td><input type=text id="app_info" name="app_info"   value="<?php echo set_value('app_info'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TR><TD>硬件信息
<td><input type=text id="hardware" name="hardware"   value="<?php echo set_value('hardware'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TD>网络信息
<td><input type=text id="network" name="network"   value="<?php echo set_value('network'); ?>"  size=30  class=mytxt> <span class=redc>*</span>


<TR bgcolor=#f0f0f0><TD>在线用户信息
<td><input type=text id="users_info" name="users_info"   value="<?php echo set_value('users_info'); ?>"  size=30  class=mytxt> <span class=redc>*</span>


<TD>数据库信息
<td><input type=text id="db_info" name="db_info"   value="<?php echo set_value('db_info'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TR><TD>联系人信息
<td><input type=text id="contact_info" name="contact_info"   value="<?php echo set_value('contact_info'); ?>"  size=30  class=mytxt> <span class=redc>*</span>

<TD>相关网站
<td><input type=text id="rel_website" name="rel_website"   value="<?php echo set_value('rel_website'); ?>"  size=30  class=mytxt> <span class=redc>*</span>


<TR><TD>项目描述
 <td colspan=3><textarea name=proj_descr class=proj_descr rows=15 style='width:100%'><?php echo set_value('proj_descr');?></textarea>

 <TR bgcolor=#f0f0f0><TD>附件1描述
 <td colspan=3><input type="text" id="aux_pic_info1" name="aux_pic_info1"   value="<?php echo set_value('aux_pic_info1');?>"  size="50" class=mytxt> <input type=file name="file1" id="file1" >

 <TR><TD>附件2描述
 <td colspan=3><input type="text" id="aux_pic_info2" name="aux_pic_info2"   value="<?php echo set_value('aux_pic_info2');?>"  size="50" class=mytxt> <input type=file name="file2" id="file2" >

 <TR bgcolor=#f0f0f0><TD> 附件3描述
 <td colspan=3><input type="text" id="aux_pic_info3" name="aux_pic_info3"   value="<?php echo set_value('aux_pic_info3');?>"  size="50"  class=mytxt> <input type=file name="file3" id="file3" >
</table>

<table width=94% border=0>
<TR height=40><TD> <INPUT TYPE=submit CLASS=mybtn  VALUE="  提交保存  " >
</TABLE>

</div>

</FORM>


