
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
			<ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/book">图书</a></li>
                <li><a href="/v2/document">文档资料</a></li>
                <li><a href="/v2/download">软件下载</a></li>
                <li class="active"><a href="/v2/community">关于中文社区</a></li>
            </ul>
        </div>

    </div>

    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="#">相关资料</a></li>
                <li><a href="/v2/community">关于中文社区</a></li>
                <li><a href="#">注册用户列表</a></li>
            </ol>

<table class='table table-stripped table-sm' >

<tr align=center><td><td>Logo<td>帐号<td>姓名<td>注册时间<td>省份<td>城市<td>所在行业<td>关注或兴趣</tr>

<?php $count = 1  + ($curpage-1) * $pagesize ; ?>
<?php foreach  ($grpusers as $users):  ?>

<?php 
$bg = " bgcolor=#ddddff " ; 
if ($count % 2 == 0 )  
		$bg = "" ; 
?>		

<tr align=center <?php echo $bg; ?> ><td><?php echo $count ; ?>
<td><a href=/v2/act/userinfo_v/<?php echo $users['sysid']; ?>>
<?php 
$picname = $users['picture'] ; 
if ( file_exists(dirname(__FILE__).'/../../../images/users/'.$picname)  && $picname != '' ) 
	echo "<img width=60 src=/images/users/" . $users['picture'] . " border=1></img></a>" ; 
else
	echo "<img width=45 src=/images/users/null_pic.jpg border=1></img></a>" ; 
?>	
<td><a href=/v2/act/userinfo_v/<?php echo $users['sysid']; ?> class=newsbanner><?php echo $users['thename']; ?></a>
<td><?php echo $users['realname']; ?>
<td><?php echo $users['regtime']; ?>　　
<td><?php echo $users['theprovince']; ?> 
<td><?php echo $users['thecity']; ?>
<td><?php echo $users['industry']; ?>
<td align=left><?php echo $users['focused']; ?>　
</tr>
<?php 
$count = $count +1 ; 

endforeach 
?>

</table>
	 <div class="text-center">
		<ul class="pagination">
		<?php  echo $pagelinks ; ?>
		</ul>
		</div>

 </div>

</div>
</div>
