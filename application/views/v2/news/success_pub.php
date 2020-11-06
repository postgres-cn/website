<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/news">全部</a></li>
                <li><a href="/v2/news/typelist/1/%E7%A4%BE%E5%8C%BA%E6%B4%BB%E5%8A%A8">社区活动</a></li>
                <li><a href="/v2/news/typelist/1/%e6%8a%80%e6%9c%af%e8%ae%a8%e8%ae%ba">技术讨论</a></li>
                <li><a href="/v2/news/typelist/1/%E6%AF%8F%E5%91%A8%E6%96%B0%E9%97%BB%E7%BB%BC%E8%BF%B0">新闻综述</a></li>
                <li><a href="/v2/news/typelist/1/%E5%BC%BA%E4%BA%BA%E9%9A%8F%E7%AC%94">强人随笔</a></li>
                <li><a href="/v2/news/typelist/1/%E4%BC%9A%E8%AE%AE%E8%B5%84%E6%96%99">会议资料</a></li>
                <li><a href="/v2/news/typelist/1/%E5%85%B6%E4%BB%96">其他</a></li>
            </ul>
        </div>
    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li class="active"><a href="#">社区新闻发布</a></li>

			</ol>

<P>&nbsp;</p>
<br>
<div class=banner align=center>
新闻发布成功！将自动切换至新闻浏览页面。。。<a href=/v2/news/viewone/1/<?php echo $newsid; ?>>或按此直接浏览</a>
</div>

<p>文件上传提示：</P>
<pre>
<?php 
echo  $error ; 
?>
</pre>
<script language=javascript>
setTimeout("document.location='/news/viewone/1/<?php echo $newsid; ?>';",10000) ; 
</script>


        </div>

    </div>
</div>