<script type="text/javascript" src='/js/my_procs.js'></script>
<!--中间部分-->
<div class="container-fluid" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/faq">全部</a></li>
                <li><a href="/v2/faq/typelist/1/Bug">Bug</a></li>
                <li><a href="/v2/faq/typelist/1/使用技巧">使用技巧</a></li>
                <li><a href="/v2/faq/typelist/1/内容问题">内容问题</a></li>
                <li><a href="/v2/faq/typelist/1/建议">建议</a></li>
                <li><a href="/v2/faq/typelist/1/系统安装">系统安装</a></li>
                <li><a href="/v2/faq/typelist/1/集群复制">集群复制</a></li>
                <li><a href="/v2/faq/typelist/1/其他">其他</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="/v2/faq">有问有答(FAQ)</a></li>
				<li>问题提交</li>
            </ol>

<?php

echo form_open('v2/faq/create') ;

$vad_info = validation_errors();

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=2 class='text-warning'> $vad_info </td></tr>" : "" ;

?>


<TABLE class="table table-bordered"><TBODY>

<?php echo $extra_info ; ?>


<input type="hidden" id="author" name="author"   value="<?php echo $this->session->userdata('username'); ?>" >

<TR><TD>问题类别：
<td>
<script>
var token = '系统安装,使用技巧,集群复制,源码开发,Bug,其他' ;
document.write(outSelectFromTokenString('thetype',token,1,"<?php echo set_value('thetype'); ?>")) ; </script>
</td></tr>


<TR><TD>问题标题：
<td><input type=text maxlength="50" name=thetitle value="<?php echo set_value('thetitle'); ?>" class='form-control input-sm'> 
</td></tr>


<TR><TD colspan=2>问题内容：   <INPUT TYPE=submit CLASS='btn btn-sm btn-primary'  VALUE="  提交保存  " >  
<!-- &nbsp;&nbsp; <a href=### onclick="prev_htm()"> h </a> --> &nbsp; &nbsp;
<a href=/test/mdhelp.html target=_blank> ? </a> &nbsp; &nbsp;
<a href=### onclick="window.open('/act/Upload_any/faq/<?php echo date('Y'); ?>','UPload File','top=100,left=200,width=500,height=380');"> U </a>
<br><br>
<textarea id=editor_id class='form-control input-sm' name='thecontent' rows=15 onkeyup="refresh()">
<?php 
 if ( strlen($vad_info) > 10 )
	  echo set_value('thecontent');
 else {
	echo "### 常用Markdown语法，可在本文本框中录入你的问题，使用Markdown语法或是直接文本方式\n";
	echo "#### 一、第一章节标题... \n" ;
	echo "- 无序列表1\n" ;
	echo "- 无序列表2\n" ;
	echo "1. 有序列表1\n" ;
	echo "8. 有序列表2\n" ;
	echo "\n";
	echo "```\n" ;
	echo " var a = 123 ; //源代码或是指令类内容\n" ;
	echo " printf('hello world !');\n";
	echo "```\n" ;
	echo " ![Pretty Girl](/images/ad/girl.jpg) \n\n" ; 
	echo " 可访问 : https://github.com/xyz.git " ;
 }
?>

</textarea>

 <TR><TD align=center colspan=2 bgcolor=#6666ff>页面预览</TD></TR>
 <TR height=50><TD colspan=2 id="prevzone"></TD></TR>


</TABLE>
</FORM>

</div>
</div>
</div>
</div>

<script language="javascript">

refresh();

function refresh() {

var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

    md_text   = document.getElementById('editor_id').value; ;
    html      = converter.makeHtml(md_text);

    html = html.replace(/<table/g,'<table class="table table-bordered table-condensed"') ;

    document.getElementById("prevzone").innerHTML=html ;

}

function prev_htm() {
var htmlVal = document.getElementById('prevzone').innerHTML ;
htmlVal = htmlVal.replace(/</g,"&lt;").replace(/>/g,"&gt;");

//htmlVal = htmlVal.replace('\>' '&gt;') ;

var prevWin=window.open('','','top=100,left=200,height=800,width=880,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css></head>") ;
prevWin.document.write("<body>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</body></html>') ;
prevWin.document.close();
}


function prev() {

var htmlVal = document.getElementById('editor_id').value; ;

var prevWin=window.open('','','top=50,left=100,height=880,width=1100,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css><link rel=stylesheet type=text/css href=/css/extra.css></head>") ;
prevWin.document.write("<body><p>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</p><br><br></body></html>') ;
prevWin.document.close();
}




</script>