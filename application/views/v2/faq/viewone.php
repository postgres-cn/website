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
				<li><a href="/v2/faq/typelist/1/<?php echo rawurldecode($curtype); ?>">【<?php echo rawurldecode($curtype) ; ?>】</a>类主题列表</li>
            </ol>

<br>
<table class='table table-sm '>

<?php $count = 1 + $pageoffset ; ?>
<?php foreach  ($grpfaq as $faq):  ?>

<tr>
<td rowspan=3 align=center><?php 

	$cur_pic =  $faq['picture'] ; 
	$filelen = strlen($cur_pic) ; 
	if ( $cur_pic == FALSE ) 
		$cur_pic = "null_pics.jpg" ;

	$pic_file  = './images/users/'. $cur_pic  ;
	if ( file_exists($pic_file) and $filelen > 4 ){
		echo "<img src=/images/users/".$faq['picture']." width=80></img>";
	}else {
		echo '<img src=/images/users/null_pics.jpg width=80></img>' ; 
	}
	echo '<br><b>'. $faq['author'].'</b>'; 
	
?></td>
<td height=20 style="background:#eeeef7;">
<b><?php echo ($faq['type'] == 'MAIN' ? $faq['thetitle'] : '回复：'); ?> ... </b>


<?php
	$username = $this->session->userdata('username');

	$isLess3days = FALSE ; 
	$prev3Days = date('Y-m-d H:i:s', strtotime(new DateTime(). ' - 2 days')); 
	if ($faq['creation_time'] > $prev3Days   ) {
   		$isLess3days = TRUE ;
	}
	
	$main_id = $faq['sysid'] ;
	$sub_id = $faq['org_sysid'] ; 

	$act_f = "modify" ; 
	if ( $faq['type']=='SUB') 
		$act_f = "modify_reply" ;

	if ( strstr( $editors,$username)  != FALSE or ( $isLess3days and $username==$faq['author']) ) { //管理员或是发布者在2天内可以修改

		echo " <a href=/v2/faq/".$act_f."/".$main_id."/".$sub_id."/".$faq['type']."><i class='glyphicon glyphicon-pencil'></i></a> &nbsp; " ;

	}

	if ( strstr( $editors,$username)  != FALSE  ) { //仅管理员可以删除记录
		echo "<a href=/v2/faq/delete/".$main_id."/".$sub_id."/".$faq['type']." ### onclick=\"if (confirm('Confirm DELETE data !!!')) document.location='/v2/faq/delete/".$main_id."/".$sub_id."/".$faq['type']."';\"><i class='glyphicon glyphicon-remove'></i></a> ... " ;
	}

?>
 
<span style='float:right;font-weight:bold;'> ... <?php echo $faq['creation_time'] . '...' . $count . '楼' ; ?></span>
</td></tr>

<tr><td>
<div style="display:none">
<?php
		echo "<textarea id='raw". $count . "_area' rows=20>" . $faq['thecontent'] . "</textarea>" ;
?>
</div>
<div>
<?php
		echo "<span id='show". $count . "_area' >" ;
?>
</div>
</td></tr>

<tr><td style='color:#666666'>我的签名：<?php echo $faq['cust_sig']; ?></td></tr>


<?php 
  $count = $count + 1 ;
endforeach 
?>

</table>

<div class="pagination" align=right>
<?php  echo $pagelinks ; ?>
</div>

<div>
<?php

if ( $username != FALSE ) {
	echo "<form action=/v2/faq/savereply/$page/$sysid method=post name=savecomt onsubmit='javascript: return confirmit();'>" ;
	echo "<input type=hidden name=page id=page value=$page ><input type=hidden id=sysid name=sysid value=$sysid >" ;
	echo "<input type=hidden name=username id=username value='".$username."'>" ;
	echo "<input type=submit class='btn btn-sm btn-primary' value='发表我的回复.. 录入内容支持Markdown语法并可实时预览 '> " ;
	echo "<a href=/test/mdhelp.html target=_blank><b> ? </b></a> <br><br>" ;
	echo "<textarea id=editor_id name=content rows=4 onkeyup='refresh()' class='form-control input-sm'></textarea>";
	echo "<table class='table table-sm table-bordered'>" ;
	echo "<TR><TD align=center colspan=2 bgcolor=#6666ff>意见Markdown预览</TD></TR>" ; 
	echo "<TR height=50><TD colspan=2 id='prevzone'></TD></TR>" ; 
	echo "</table>" ;

}else {
	echo "<div align=center><img src=/images/lock.png border=0 vspace=10 align=absmiddle>" ;
	echo "<a href=/v2/act/loginget/_faq_viewone_".$page."_".$sysid.">您还没有登录,请您登录后再发表回复 </a></img></div>" ;

}
?>
</div>


</div>
</div>
</div>
</div>


<script language="javascript">
function confirmit() {
//	html = editor.html();
//	editor.sync();
	html = document.getElementById('editor_id').value; // 原生API
	if ( html.length < 1 ){
		alert('内容为空，不必提交!') ; return false ;
	}
	alert ('确认提交内容：\n\n' + html) ;
	return true;
}

function showMarkdown() {
	var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

  for (i = 1 ; i < <?php echo $count; ?> ; i ++ ) {
  
    md_text = document.getElementById('raw' + i + '_area').value; ;
    htmlTxt = converter.makeHtml(md_text);
    htmlTxt = htmlTxt.replace(/<table/g,'<table class="table table-bordered table-condensed"') ;
    document.getElementById('show'+i+'_area').innerHTML=htmlTxt ;
 }

}


function refresh() {

var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		emoji: true,
		excludeTrailingPunctuationFromURLs: true
	});

    md_text   = document.getElementById('editor_id').value; ;
    html      = converter.makeHtml(md_text);

    html = html.replace(/<table/g,'<table class="table table-bordered table-condensed"') ;

    document.getElementById("prevzone").innerHTML=html ;

}

</script>
<?php
	echo "<script language='javascript'> showMarkdown(); </script>" ;
	if ( $username != FALSE ) 
		echo "<script language='javascript'> refresh(); </script>" ;
	
?>