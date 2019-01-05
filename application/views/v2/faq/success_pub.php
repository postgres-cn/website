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
            </ol>
<P>&nbsp;</p>
<br>
<div class=banner align=center>
提交发布成功！将自动切换至浏览页面。。。<a href=/v2/faq/viewone/1/<?php echo $faqid; ?>>或按此直接浏览</a>
</div>

<p>文件上传提示：</P>
<pre>
<?php 
echo  $error ; 
?>
</pre>
<script language=javascript>
setTimeout("document.location='/v2/faq/viewone/1/<?php echo $faqid; ?>';",3000) ; 
</script>

</div>
</div>
</div>
</div>

