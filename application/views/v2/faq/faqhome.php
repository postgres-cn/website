
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/v2/faq">全部</a></li>
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
                <li class="active"><a href="/v2/faq">有问有答(FAQ)</a></li>
            </ol>



<form action=/v2/faq/search method=post class="form-inline">
	<div class="form-group  pull-right">
		<label for="keysrh">FAQ 搜索：</label> 
		<input  type=text class='form-control input-sm' name=keysrh id="keysrh" 
			placeholder='关键字使用空格隔开' value='' > &nbsp; 
		<input type=image src=/images/go.gif>
	</div>
</form>

<br><br>

<table class='table table-stripped'>
<tr align=center bgcolor=#f0f0f0><th>问答类别</th><th>主题/回复数</th><th>近两天的主题/回复数</th></tr> 

<?php

$total_topics = 0 ;
$total_reply = 0 ; 
$total_topics_2d = 0 ; 
$total_reply_2d = 0 ; 

foreach  ($tfaq  as $one):  ?>

<tr>
<th>
【<a href=/v2/faq/typelist/1/<?php echo rawurlencode($one['thetype']); ?> ><?php echo $one['thetype']; ?></a>】</th> 
<th> <?php echo $one['ts'] . ' / ' . $one['rs']; ?> </th>
<th> 
<?php
	if ( $one['nts'] > 0 or $one['nrs'] >0 ) {
		echo   $one['nts'] . ' / ' . $one['nrs'] . " <img src=/images/new.gif border=0></img>" ;
	}else {
		echo   "" ;  
	}

$total_topics += $one['ts']  ;
$total_reply += $one['rs'] ; 
$total_topics_2d += $one['nts'] ; 
$total_reply_2d += $one['nrs'] ; 

?>

</th>
</tr>


<?php
endforeach
?>

<tr bgcolor=#f0f0f0>
<td>合计</td>
<th><?php echo $total_topics.'/'.$total_reply ; ?></td>
<th><?php echo $total_topics_2d.'/'.$total_reply_2d ; ?></td>
</table>



</div>
</div>
</div>
</div>

