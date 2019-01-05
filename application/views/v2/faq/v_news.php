<br>
<table width=100% cellpadding=4 border=0>
<tr><td align=center height=40 style="color: #990000;font-size:16px;font-weight:bold"><?php echo $news['thetitle']; ?></td></tr>
<tr><td height=20 style="background:#eeeef7;">
<?php
if ($news['theclass'] == '精品收集' or $news['theclass'] == '强人随笔' ) {
	echo "　　<span class=redc>原作者：" . $news['org_author']  . "　　创作时间：". $news['org_pubtime'] ."</span>";
} else {
	echo "<b><a href=/news/typelist/1/". $news['theclass'].">分类：". $news['theclass'] ."</a>　　".$news['author']. " 发布于" .
		$news['pubtime'] . " ... <a href=http://www.postgres.cn>postgres.cn</a> </b>";
}

?>


<span style="float:right">
<img src=/images/comment.gif title='评论' align=absmiddle> <?php echo $news['comtclicks']; ?>　　
<img src=/images/reader.gif title='浏览' align=absmiddle> <?php echo $news['viewclicks']; ?>　　
<img src=/images/good.gif  title='顶' align=absmiddle width=18> <?php echo $news['goodclicks']; ?>　
<img src=/images/bad.gif  title='踩' align=absmiddle width=18> <?php echo $news['badclicks']; ?>　
</span>
</td></tr></table>


<div id="rel_content">
	<?php
		if ( $news['sysid'] <= 283 )
			echo $news['thecontent'];
	?>
</div>

<div id="md_content_zone" style="display:none">
<?php
	if ( $news['sysid'] > 283 )
		echo "<textarea id='mdx_content' rows=20>" . $news['thecontent'] . "</textarea>" ;
?>
</div>



<p a lign= center style="padding:15px;">
<?php
$sysid = $news['sysid'];
$year =  substr($news['pubtime'],0,4) ;
$path  = './images/news/' . $year .'/' ;
$r_path = '/images/news/' . $year .'/' ;
$pic_file_prefix = $path .$sysid ;

if ( file_exists($pic_file_prefix.'_1.jpg') &&  strstr($news['aux_pic_info1'],"HOMEPAGEONLY") == FALSE   )
		echo "<br>附图1：". $news['aux_pic_info1']."<br><img src=".$r_path.$sysid."_1.jpg wi dth=640 border=1>\n";

if ( file_exists($pic_file_prefix.'_11.jpg') )
		echo "<br><br>附图2：". $news['aux_pic_info2']."<br><img src=".$r_path.$sysid."_11.jpg wi dth=640 border=1>\n";

if ( file_exists($pic_file_prefix.'_12.jpg') )
		echo "<br><br>附图3：". $news['aux_pic_info3']."<br><img src=".$r_path.$sysid."_12.jpg wi dth=640 border=1>\n";

?>

</p>

<a name=comment></a>
<hr size=1 color=gray>
<div style="background:#eeeef7;padding:6px;">
<img src=/images/comment.gif align=absmiddle> 评论:<?php echo $news['comtclicks']; ?>　　
<img src=/images/reader.gif align=absmiddle> 浏览: <?php echo $news['viewclicks']; ?>


<span style="float:right">
&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
<wb:share-button appkey="4143326836" addition="simple" type="button" ralateUid="1495104070"></wb:share-button>
&nbsp; &nbsp;
</span>


&nbsp;
<span style="float:right">
<a href=/news/goodclick/<?php echo $page.'/'.$sysid.'#comment';?> style="border:1px solid;padding:4px;color:#000033">
<img src=/images/good.gif align=absmiddle width=18> 顶: <?php echo $news['goodclicks']; ?>　</a>
<a href=/news/badclick/<?php echo $page.'/'.$sysid.'#comment';?> style="border:1px solid;padding:4px;color:#000033">
<img src=/images/bad.gif align=absmiddle width=18> 踩: <?php echo $news['badclicks']; ?>　</a>
</span>
</div>

<br>
<span class=banner>评论：</span>
<?php
$username = $this->session->userdata('username');
if ( $username != FALSE ) {
	echo '已有评论'.$total_rows.'条，请点此 <a href=#comm_now>发表评论</a>' ;
}else{
	echo '请在<a href=/act/loginget/_news_viewone_'.$page.'_'.$sysid.'#comment>登录</a>后发表评论，否则用户名称只能显示为GUEST。' ;
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

<div >
<b>发表评论：</b><br>
<div>
<?php

if ( $username != FALSE ) {
	echo "<form action=/news/savecomment/$page/$sysid method=post name=savecomt onsubmit='javascript: return confirmit();'>" ;
	echo "<input type=hidden name=page id=page value=$page ><input type=hidden id=sysid name=sysid value=$sysid >" ;
	echo "<input type=hidden name=username id=username value='".$username."'>" ;
	echo "<textarea id=editor_id name=content style='width:100%;height:150px;'></textarea>";
	echo "<input type=submit class=mybtn value=' 发表评论 ' >" ;
}else {
//	echo "<div align=center><img src=/images/lock.png border=0 vspace=10 align=absmiddle>" ;
//	echo "<a href=/act/loginget/_news_viewone_".$page."_".$sysid."#comment> 您还没有登录,请您登录后再发表评论 </a></img></div>" ;
	echo "<form action=/news/savecomment/$page/$sysid method=post name=savecomt onsubmit='javascript: return confirmit();'>" ;
	echo "<input type=hidden name=page id=page value=$page ><input type=hidden id=sysid name=sysid value=$sysid >" ;
	echo "<input type=hidden name=username id=username value='GUEST'>" ;
	echo "<textarea id=editor_id name=content style='width:100%;height:150px;'></textarea>";
	echo "<input type=submit class=mybtn value=' 发表评论 ' >" ;

}
?>
</div>


<script language="javascript">
function showMarkdown() {
	var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

    md_text = document.getElementById('mdx_content').value; ;
    //alert("MDTxt="+ md_text) ;
    htmlTxt = converter.makeHtml(md_text);
    //alert("Before replace Table=" + htmlTxt) ;
//    htmlTxt = htmlTxt.replace(/table/g,'table class="table table-bordered table-condensed"') ;
    htmlTxt = htmlTxt.replace(/<table/g,'<table width=90% border=1 cellpadding=2 cellspacing=0 style="border-collapse:collapse;margin-left:20px;" class="table table-bordered table-condensed"') ;
    //alert("After replae table =" + htmlTxt) ;

    document.getElementById("rel_content").innerHTML=htmlTxt ;
 }


function confirmit() {
//	html = editor.html();
//	editor.sync();
	html = document.getElementById('editor_id').value; // 原生API
	if ( html.length < 1 ){
		alert('内容为空，不必提交!') ; return false ;
	}
	alert ('确认提交内容：' + html) ;
	return true;
}
</script>

<?php
	if ( $news['sysid'] > 283 )
		echo "<script language='javascript'> showMarkdown(); </script>" ;
?>