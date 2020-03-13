

<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">全部</a></li>
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
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li class="active"><a href="#">社区新闻</a></li>
<?php
	$username = $this->session->userdata('username');
	$isEditor = FALSE ;
	if ( strstr( $editors,$username)  != FALSE ) {
			echo "<li><a href='/v2/news/create'><img src=/images/new2.gif border=0></img></a></li>" ;
			$isEditor = TRUE ;
	}

?>
            </ol>
            <!--列表-->
	<?php foreach  ($grpnews as $news):  ?>

            <div class="list-group">
                <h4><a href="#"><strong>【<a href=/v2/news/typelist/1/<?php echo rawurlencode($news['theclass']); ?> class=newsbanner><?php echo $news['theclass']; ?></a>】</strong><a href=/v2/news/viewone/1/<?php echo $news['sysid']; ?> class=newsbanner><?php echo $news['thetitle']; ?></a></h4>
                <div>
                    <p><?php echo $news['thecontent']; ?></p>
                </div>
                <div class="clearfix infobar">
                    <div class="col-md-4">
                        <strong><?php echo $news['author']; ?></strong> 发布于 <span><?php echo $news['pubtime']; ?></span>
                    </div>
                    <div class="col-md-4">
                        <i class="glyphicon glyphicon-comment"></i> 评论：<span><?php echo $news['comtclicks']; ?></span>
                        &nbsp;&nbsp;
						<i class="glyphicon glyphicon-fire"></i> 浏览：<span><?php echo $news['viewclicks']; ?></span>
                    </div>
                    <div class="col-md-4">
				<?php
				if ( $isEditor == TRUE ) {
					echo "<a href=/v2/news/modify/".$news['sysid']."><i class='glyphicon glyphicon-pencil'></i></a> &nbsp; " ;
					echo "<a href=### onclick=\"if (confirm('Confirm DELETE data !!!')) " .												"document.location='/v2/news/delete/".$news['sysid']."';\">" .
							"<i class='glyphicon glyphicon-remove'></i></a> &nbsp;" ;
				}
				?>
			   <!-- 
                        <i class="glyphicon glyphicon-thumbs-up"></i> 顶：<span><?php echo $news['goodclicks']; ?></span>
                        &nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down"></i> 踩：<span><?php echo $news['badclicks']; ?></span>
				-->
                    </div>
                </div>
            </div>
            <!--分页-->
<?php
endforeach
?>



            <div class="text-center">
                <ul class="pagination">
                 <?php  echo $pagelinks ; ?>
                </ul>
            </div>

        </div>

    </div>
</div>
