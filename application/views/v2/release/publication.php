<script type="text/javascript" src='/js/my_procs.js'></script>

<!--中间部分-->
<div class="container-fluid" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/release">所有版本列表</a></li>
            </ul>
        </div>
    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li class="active"><a href="#">新版本发布</a></li>

			</ol>

<?php

echo form_open('v2/release/create') ;

$vad_info = validation_errors();

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=2 class='text-alert'> $vad_info </td></tr>" : "" ;

?>


<div align=center>
<TABLE   class='table table-bordered table-sm'><TBODY>

<?php echo $extra_info ; ?>


<input type="hidden" id="author" name="author"   value="<?php echo$this->session->userdata('username'); ?>"  >

<TR><TD>主版本：<td>
<script>
var token = '8,9,10,11,12,13,14,15' ;
document.write(outSelectFromTokenString('mainver',token,1,"<?php echo set_value('mainver'); ?>")) ; </script>
</td>
<TD>软件类别：
<td>
<script>
var token = 'Alpha新版,Beta新版,RC新版,主版,补丁版本,其他' ;
document.write(outSelectFromTokenString('thetype',token,1,"<?php echo set_value('thetype'); ?>")) ; </script>
</td>
</tr>


<TR><TD>发布时间：
 <td><input type=text size=20 name=reltime value="<?php  echo date('Y-m-d H:i:s'); ?>" class='form-control input-sm'> 

 <TD>是否在首页显示
 <td> <select name=topshow class='form-control input-sm'>
 <option value=1>显示
 <option value=0>不显示
 </select>
 </td></tr>



<TR><TD>新版本号：
<td colspan=3><input type=text size=40 name=theversion value="<?php echo set_value('theversion'); ?>" class='form-control input-sm'>


 <TR><TD>发布内容：
 <td colspan=3>
 <textarea name=thecontent id=thecontent class='form-control input-sm' onkeyup="refresh()" rows=20><?php echo set_value('thecontent');?></textarea>

<input type=hidden name=thememo value=''>
<!--
 <TR><TD>备注：
 <td colspan=3><textarea na me=thememo i d=thememo class='form-control input-sm' rows=2><?php echo set_value('thememo');?></textarea>
-->

<TR><TD><TD colspan=3> <INPUT TYPE=submit CLASS='btn btn-primary btn-sm'  VALUE="  提交保存  " >
<a href=### onclick="prev_old()"> . </a>
<a href=### onclick="prev_htm()"> h </a> &nbsp; 
<a href=/test/mdhelp.html target=_blank> ? </a>

<tr height=50><td>MarkDown预览<td colspan=3 id="prevzone"></td></tr>


</TABLE>
</FORM>


</div>
</div>
</div>
</div>



<script>

refresh(); 

function refresh() {

var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

    md_text   = document.getElementById('thecontent').value; ;
    html      = converter.makeHtml(md_text);

    html = html.replace('table','table class="table table-bordered table-condensed"') ; 
    //alert(html) ;

    document.getElementById("prevzone").innerHTML=html ; 

}

function prev_htm() {
var htmlVal = document.getElementById('prevzone').innerHTML ;
htmlVal = htmlVal.replace(/</g,"&lt;").replace(/>/g,"&gt;");

var prevWin=window.open('','','top=100,left=200,height=800,width=880,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css></head>") ;
prevWin.document.write("<body>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</body></html>') ;
prevWin.document.close();
}


function prev_old() {
var htmlVal = document.getElementById('thecontent').value ;

var prevWin=window.open('','','top=100,left=200,height=800,width=880,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css></head>") ;
prevWin.document.write("<body><p>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</p><br><br></body></html>') ;
prevWin.document.close();
}
</script>