<script type="text/javascript" src='/js/my_procs.js'></script>
<div class=banner>首页 --> 录入问题</div><br><br>

<?php 

//echo form_open('news/create') ; 
echo form_open_multipart('news/faq_create');

$vad_info = validation_errors(); 

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=2><div class=banner> $vad_info </div>" : "" ; 

?>


<div align=center>
<TABLE  width=90% cellspacing=0 border=01 style="border-collapse:collapse" cellpadding=4><TBODY>

<?php echo $extra_info ; ?>

  
<input type="hidden" id="author" name="author"   value="<?php echo$this->session->userdata('username'); ?>"  size=20 class=mytxtr read only> 
 

<input type=hidden id="pubtime" name="pubtime"   value="<?php echo date('Y-m-d H:i:s'); ?>"  size=30  readonly class=mytxtr> 
<input type=hidden id="theclass" name="theclass" value="FAQ">
<input type=hidden id="topshow" name="topshow" value="0">
<TR bgcolor=#f0f0f0><TD>问题标题：
 <td><input type=text size=50 name=thetitle value="<?php echo set_value('thetitle'); ?>" class=mytxt> <span class=redc>*</span>

 
<input type=hidden id="brief_info" name="brief_info" value="--">

<TR><TD>问题内容：
 <td><textarea name=thecontent id=thecontent class=memofd rows=20 style='width:100%'><?php echo set_value('thecontent');?></textarea>

 <TR bgcolor=#f0f0f0><TD>附件1描述：
 <td><input type="text" id="aux_pic_info1" name="aux_pic_info1"   value="<?php echo set_value('aux_pic_info1');?>"  size="50" class=mytxt> <input type=file name="file1" id="file1" >

 <TR><TD>附件2描述：
 <td><input type="text" id="aux_pic_info2" name="aux_pic_info2"   value="<?php echo set_value('aux_pic_info2');?>"  size="50" class=mytxt> <input type=file name="file2" id="file2" >

 <TR bgcolor=#f0f0f0><TD> 附件3描述：
 <td><input type="text" id="aux_pic_info3" name="aux_pic_info3"   value="<?php echo set_value('aux_pic_info3');?>"  size="50"  class=mytxt> <input type=file name="file3" id="file3" >

  <TR><TD><TD> <INPUT TYPE=submit CLASS=mybtn  VALUE="  提交保存  " >

<INPUT TYPE=button  CLASS=mybtn  VALUE="预览" onclick="prev()" >


</FORM>

 </TABLE>
</div>



<script>
function prev() {
var htmlVal = document.getElementById('thecontent').value ; 
//htmlVal = htmlVal.replace(/(\\r\\n|\\r|\\n|\\n\\r)/g, '<br>') ;
	
var prevWin=window.open('','','top=100,left=200,height=800,width=880,scrollbars=yes');
prevWin.opener = null ; 
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css></head>") ; 
prevWin.document.write("<body><p>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</p><br><br></body></html>') ;
prevWin.document.close();
}

</script>