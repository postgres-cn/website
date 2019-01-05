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
				<li class="active">【<?php echo $thetype ; ?>】类主题列表</li>
            </ol>

<table class='table table-sm table-hover'>
<tr><td colspan=7><input type=button class='btn btn-info btn-sm' value='录入新问题' onclick="document.location='/v2/faq/create/<?php echo $thetype ; ?>';" >  
<span class='pull-right'>
<img src=/images/new.gif align=absmiddle> 表示近两天的新主题或是有新回复 </img> </span>
</td></tr>
<tr align=center bgcolor=#f0f0f0><td><nobr>序号</nobr>
<td>标题<td>发布人员<td>发布时间<td>最新回复<td><nobr>回复数</nobr><td><nobr>浏览数</nobr></td></tr>

<?php 
	$count = 1 + $pageoffset;
?>

<?php foreach  ($grpfaq as $faq):  

$cur_comments = $faq['comtclicks'] ;
if ($cur_comments == null )
	$cur_comments = 0 ;

?>

<tr align=center>
<td><?php echo $count ; ?></td>
<td align=left><a href=/v2/faq/viewone/1/<?php echo $faq['sysid'].'/'.$cur_comments.'/'.rawurldecode($thetype); ?> ><?php echo $faq['thetitle'] ; ?></a>
<?php
   $prev3Days = date('Y-m-d H:i:s', strtotime(new DateTime(). ' - 2 days')); 
   //echo $prev3Days ;
   if ($faq['creation_time'] > $prev3Days || $faq['last_reply_time'] > $prev3Days ) {
   		echo "... <img src=/images/new.gif align=absmiddle></img> " ;
   }

	$cre_time = new DateTime($faq['creation_time']);
	$cre_str = $cre_time->format('Y-m-d H:i') ;
	$rep_time = new DateTime($faq['last_reply_time']);
	$rep_str = $rep_time->format('m-d H:i'); 
	if ( $faq['last_reply_time'] == FALSE ) 
		$rep_str = "" ;
?>


</td>
<td><?php echo $faq['author']; ?></td>
<td><?php echo $cre_str; ?></td>
<td><?php echo $rep_str; ?></td>
<td><?php echo $faq['comtclicks']; ?></td>
<td><?php echo $faq['viewclicks']; ?></td>

</tr>

<?php 
  $count = $count + 1 ;
endforeach 
?>

</table>

<br>

            <div class="text-center">
                <ul class="pagination">
                 <?php  echo $pagelinks ; ?>
                </ul>
            </div>


</div>
</div>
</div>
</div>

