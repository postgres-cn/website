<!--中间部分-->
<div class="container-fluid" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/release">所有版本列表</a></li>
            </ul>
        </div>
    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li class="active"><a href="#">新版本发布</a></li>

			</ol>


<P>&nbsp;</p>
<br>
<div>
新版本发布成功！将自动切换至新版本发布声明的浏览页面。。。<a href=/v2/release/v/<?php echo $relid; ?>>或按此直接浏览</a>
</div>

<script language=javascript>
setTimeout("document.location='/v2/release/v/<?php echo $relid; ?>';",10000) ; 
</script>

</div>
</div>
</div>
</div>

