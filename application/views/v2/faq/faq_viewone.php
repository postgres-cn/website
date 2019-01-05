
<div class=banner style="padding:4px;border-bottom:1px dotted gray">首页 --> 问答专栏</div>

<br>
<table width=95% cellpadding=4 border=0>
<tr>
<td rowspan=2 align=center width=140><img src=/images/users/<?php echo $pic_name ; ?> width=100></td>
<td style="color: #006699;font-size:14px;font-weight:bold"><?php echo $faq['thetitle']; ?><br>
<div class=ch_indent><?php echo $faq['thecontent']; ?></div>
　
</td>
</tr>
<tr><td height=20 style="background:#eeeef7;">
<b><?php echo $faq['author']; ?> 发布于<?php echo $faq['pubtime']; ?></b>　　

<span style="float:right">
<img src=/images/comment.gif align=absmiddle> 回答: <?php echo $faq['comtclicks']; ?>　　
<img src=/images/reader.gif align=absmiddle> 浏览: <?php echo $faq['viewclicks']; ?>　　
</span>
</td></tr></table>


<p a lign= center style="padding:15px;">
<?php
$sysid = $faq['sysid'];
$year =  substr($faq['pubtime'],0,4) ; 
$path  = './images/news/' . $year .'/' ; 
$r_path = '/images/news/' . $year .'/' ; 
$pic_file_prefix = $path .$sysid ; 


?>

</p>

<a name=comment></a>
<hr size=1 color=gray>
<br>
<span class=banner>已有回答：</span> 
<?php
$username = $this->session->userdata('username');
if ( $username != FALSE ) {
	echo '已有回答'.$total_rows.'条，请点此 <a href=#comm_now>我来回答</a>' ; 
}else{
	echo '请在<a href=/act/loginget/_news_viewone_'.$page.'_'.$sysid.'#comment>登录</a>后发表回答，否则用户名称只能显示为GUEST。' ; 
}
?>

<br>

<?php $count = 1 + $pageoffset ; ?>
<?php foreach($grpcmts as $cmt ) : ?>

<p>
<div class=grayblock><b><?php echo $count;?>#</b> __ 
<?php echo $cmt['username'] . ' 回答于 ' . $cmt['inputtime'] ; ?> </div>		
<div class=ch_indent_pad><?php echo $cmt['thecomment'] ; ?></div>
</p>

<?php $count = $count +1 ; ?>
<?php endforeach ; ?>

<br>
<div class="pagination" align=right>
<?php  echo $pagelinks ; ?>
</div>

<br>
<div>
<?php

if ( $username != FALSE ) {
	echo "<form action=/faq/savecomment/$page/$sysid method=post name=savecomt onsubmit='javascript: return confirmit();'>" ; 
	echo "<input type=hidden name=page id=page value=$page ><input type=hidden id=sysid name=sysid value=$sysid >" ; 
	echo "<input type=hidden name=username id=username value='".$username."'>" ; 
	echo "<textarea id=editor_id name=content style='width:100%;height:150px;padding:5px'></textarea>";
	echo "<br><input type=submit class=mybtn value=' 我来回答 ' >" ; 
}else {
	echo "<div align=center><img src=/images/lock.png border=0 vspace=10 align=absmiddle>" ;
	echo "<a href=/act/loginget/_news_viewone_".$page."_".$sysid."#comment> 您还没有登录,请您登录后再发表评论 </a></img></div>" ; 
	echo "<form action=/faq/savecomment/$page/$sysid method=post name=savecomt onsubmit='javascript: return confirmit();'>" ; 
	echo "<input type=hidden name=page id=page value=$page ><input type=hidden id=sysid name=sysid value=$sysid >" ; 
	echo "<input type=hidden name=username id=username value='GUEST'>" ; 
	echo "<textarea id=editor_id name=content style='width:100%;height:200px;padding:5px'></textarea>";
	echo "<br><input type=submit class=mybtn value=' 我来回答 ' >" ; 

}
?>
</div>


<script>
function confirmit() {
	html = editor.html();

	editor.sync();
	html = document.getElementById('editor_id').value; // 原生API
	if ( html.length < 1 ){
		alert('内容为空，不必提交!') ; return false ; 
	}
	alert ('确认提交内容：' + html) ; 
	return true; 
}
</script>
