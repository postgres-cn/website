
<div class=banner style="padding:4px;border-bottom:1px dotted gray">
<a href=/ class=banner style="color: #990000;"> 首页 </a>-->
<a href=/faq class=banner style="color: #990000;"> 有问有答 </a>

<?php
	$username = $this->session->userdata('username');
	$isEditor = FALSE ;
	if ( strstr( $editors,$username)  != FALSE ) {
			echo " 　　　　<a href=/news/create><img src=/images/new2.gif border=0></img></a>" ;
			$isEditor = TRUE ;
	}

?>

</div>



<?php foreach  ($grpnews as $news):  ?>

<br>
<div style="padding:8px">
<span style="font-weight:bold;font-size:14px">【<a href=/news/typelist/1/<?php echo rawurlencode($news['theclass']); ?> class=newsbanner><?php echo $news['theclass']; ?></a>】</span>...
<a href=/news/viewone/1/<?php echo $news['sysid']; ?> class=newsbanner><?php echo $news['thetitle']; ?></a>
</div>

<div style="padding:8px;line-height:20px;">
<?php echo $news['thecontent']; ?>
</div>
<div style="background:#eeeef7;padding:8px;">
<?php echo $news['author']; ?> 发布于 <?php echo $news['pubtime']; ?>　　
<img src=/images/comment.gif align=absmiddle> 评论:<?php echo $news['comtclicks']; ?>　　
<img src=/images/reader.gif align=absmiddle> 浏览: <?php echo $news['viewclicks']; ?>

&nbsp;&nbsp;
<?php
	if ( $isEditor == TRUE ) {
		echo "<a href=/news/modify/".$news['sysid']."><img src=/images/pens.gif border=0></img></a> &nbsp; " ;
		echo "<a href=### onclick=\"if (confirm('Confirm DELETE data !!!')) document.location='/news/delete/".$news['sysid']."';\"><img src=/images/del2.gif border=0></img></a>" ;
	}
?>

<span style="float:right">
<img src=/images/good.gif align=absmiddle width=18> 顶: <?php echo $news['goodclicks']; ?>　
<img src=/images/bad.gif align=absmiddle width=18> 踩: <?php echo $news['badclicks']; ?>　
</span>
</div>


<?php
endforeach
?>

<br>

<div class="pagination" align=right>
<?php  echo $pagelinks ; ?>
</div>

</div>

