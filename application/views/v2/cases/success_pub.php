<P>&nbsp;</p>
<br>
<div class=banner align=center>
案例发布成功！将自动切换至案例浏览页面。。。<a href=/cases/viewone/<?php echo $newsid; ?>>或按此直接浏览</a>
</div>

<p>文件上传提示：</P>
<pre>
<?php 
echo  $error ; 
?>
</pre>
<script language=javascript>
setTimeout("document.location='/cases/viewone/<?php echo $newsid; ?>';",10000) ; 
</script>


