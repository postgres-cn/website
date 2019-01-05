
<div class=banner style="padding:4px;border-bottom:1px dotted gray">
<a href=/ class=banner style="color: #990000;"> 首页 </a>-->
<a href=/news class=banner style="color: #990000;"> 社区新闻 </a>

<?php
	$username = $this->session->userdata('username');
	$isEditor = FALSE ;
	if ( strstr( $editors,$username)  != FALSE ) {
			echo " 　　　　<a href=/news/create><img src=/images/new2.gif border=0></img></a>" ;
			$isEditor = TRUE ;
	}

?>
<span style="font-size:12px;font-weight:plain;tex-align:right" align=right>
　　Tags:
<a href=/news/typelist/1/%E7%A4%BE%E5%8C%BA%E6%B4%BB%E5%8A%A8>社区活动</a> |
<a href=/news/typelist/1/%e7%83%ad%e7%82%b9%e8%af%9d%e9%a2%98>热点话题</a> |
<a href=/news/typelist/1/%e6%8a%80%e6%9c%af%e8%ae%a8%e8%ae%ba>技术讨论</a> |
<a href=/news/typelist/1/%E6%AF%8F%E5%91%A8%E6%96%B0%E9%97%BB%E7%BB%BC%E8%BF%B0>新闻综述</a> |
<a href=/news/typelist/1/%E7%B2%BE%E5%93%81%E6%94%B6%E9%9B%86>精品收集</a> |
<a href=/news/typelist/1/%E5%BC%BA%E4%BA%BA%E9%9A%8F%E7%AC%94>强人随笔</a> |
<a href=/news/typelist/1/%E9%97%AE%E9%A2%98%E8%A7%A3%E7%AD%94>问题解答</a> |
<a href=/news/typelist/1/%E4%BC%9A%E8%AE%AE%E8%B5%84%E6%96%99>会议资料</a> | 
<a href=/news/typelist/1/%E5%85%B6%E4%BB%96>其他</a>

</span>
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

