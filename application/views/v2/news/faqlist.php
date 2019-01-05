
<div class=banner style="padding:4px;border-bottom:1px dotted gray">首页 --> 问答专栏

<?php
			echo " 　　　　<a href=/news/faq_create><img src=/images/new2.gif border=0></img></a>" ; 

?>
</div>


<?php foreach  ($grpnews as $news):  ?>

<br>
<div style="padding:8px">
<span style="font-weight:bold;font-size:14px">
<a href=/news/faq_viewone/1/<?php echo $news['sysid']; ?> class=newsbanner><?php echo $news['thetitle']; ?></a>
</div>

<div style="padding:8px;line-height:20px;">
<?php echo $news['thecontent']; ?>
</div>
<div style="background:#eeeef7;padding:8px;">
<?php echo $news['author']; ?> 发布于 <?php echo $news['pubtime']; ?>　　
<img src=/images/comment.gif align=absmiddle> 回复:<?php echo $news['comtclicks']; ?>　　
<img src=/images/reader.gif align=absmiddle> 浏览: <?php echo $news['viewclicks']; ?>

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

