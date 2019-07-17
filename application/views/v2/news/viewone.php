
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/news">全部</a></li>
                <li><a href="/v2/news/typelist/1/%E7%A4%BE%E5%8C%BA%E6%B4%BB%E5%8A%A8">社区活动</a></li>
                <li><a href="/v2/news/typelist/1/%e7%83%ad%e7%82%b9%e8%af%9d%e9%a2%98">热点话题</a></li>
                <li><a href="/v2/news/typelist/1/%e6%8a%80%e6%9c%af%e8%ae%a8%e8%ae%ba">技术讨论</a></li>
                <li><a href="/v2/news/typelist/1/%E6%AF%8F%E5%91%A8%E6%96%B0%E9%97%BB%E7%BB%BC%E8%BF%B0">新闻综述</a></li>
                <li><a href="/v2/news/typelist/1/%E7%B2%BE%E5%93%81%E6%94%B6%E9%9B%86">精品收集</a></li>
                <li><a href="/v2/news/typelist/1/%E5%BC%BA%E4%BA%BA%E9%9A%8F%E7%AC%94">强人随笔</a></li>
                <li><a href="/v2/news/typelist/1/%E9%97%AE%E9%A2%98%E8%A7%A3%E7%AD%94">问题解答</a></li>
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
                <li><a href="/v2/news">社区新闻</a></li>
                <li class="active"><?php echo $news['theclass'] ; ?></li>
            </ol>
            <!--文章标题-->
            <div class="page-header">
                 <h2><?php echo $news['thetitle']; ?></h2>  
                <div class="clearfix infobar" style="position: relative">
                    <div>
                        <p>
				<?php
					if ($news['theclass'] == '精品收集' or $news['theclass'] == '强人随笔' )
						echo "<b>原作者：" . $news['org_author']  . "　创作时间：". $news['org_pubtime'] ."</b>&nbsp;&nbsp; ";
				?>
						采编：<strong><?php echo $news['author']; ?></strong></p>
                        <p>发布时间：<span><?php echo $news['pubtime']; ?></span></p>
                        <p> 欢迎大家踊跃投稿，投稿信箱：<strong>press@postgres.cn</strong></p>
                    </div>
                    <div style="position: absolute;bottom: 0;right: 0">
                        <p><?php
					$username = $this->session->userdata('username');
					if ( strstr( $editors,$username)  != FALSE ) {
						echo "<a href=/v2/news/modify/".$news['sysid']."><i class='glyphicon glyphicon-pencil'></i></a>&nbsp; " ;
						echo "<a href=### onclick=\"if (confirm('Confirm DELETE data !!!')) " .												"document.location='/v2/news/delete/".$news['sysid']."';\">" .
							"<i class='glyphicon glyphicon-remove'></i></a> &nbsp;" ;
					}
					?>
                            <i class="glyphicon glyphicon-comment"></i> 评论：<span><?php echo $news['comtclicks']; ?></span>
                            &nbsp;&nbsp;<i class="glyphicon glyphicon-fire"></i> 浏览：<span><?php echo $news['viewclicks']; ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <!--文章内容-->
            <div class="page-content">
				<div id="rel_content">
				<?php
					if ( $news['sysid'] <= 283 )
						echo $news['thecontent'];
				?>
				</div>
				<div id="md_content_zone" style="display:none">
				<?php
					if ( $news['sysid'] > 283 )
						echo "<textarea id='mdx_content' rows=20>" . $news['thecontent'] . "</textarea>" ;
				?>
				</div>

            </div>
            <!--点赞btn-->
            <div class="likebtn">
                <button type="button" class="btn btn-success" 
					onclick="document.location='/v2/news/goodclick/<?php echo $page.'/'.$sysid.'#comment';?>'" 
					data-toggle="button">
					<i class="glyphicon glyphicon-thumbs-up"></i> 顶：<span><?php echo $news['goodclicks']; ?></span></button>
                <button type="button" class="btn btn-danger" data-toggle="button"
				onclick="document.location='/v2/news/badclick/<?php echo $page.'/'.$sysid.'#comment';?>'" 
				><i class="glyphicon glyphicon-thumbs-down"></i> 踩：<span><?php echo $news['badclicks']; ?></span></button>
                
            </div>
            <!--评论-->
            <div class="comment">
                <div class="comment_header">
					<?php
					$username = $this->session->userdata('username');
					if ( $username != FALSE ) {
						echo '已有评论'.$total_rows.'条，请点此 <a href=#comm_now>发表评论</a>' ;
					}else{
						echo '请在<a href=/act/loginget/_news_viewone_'.$page.'_'.$sysid.'#comment>登录</a>后发表评论，否则无法保存。' ;
					}
					?>                
					</div>
                <!--评论列表-->
				<?php $count = 1 + $pageoffset ; ?>
				<?php foreach($grpcmts as $cmt ) : ?>
                <div class="comment_list_group clearfix">
                    <div class="col-md-1">
                        <img src=/images/users/<?php echo strlen($cmt['picture']) < 5 ? "null_pic.jpg" : $cmt['picture'] ; ?> alt="" width="50" height="50">
                    </div>
                    <div class="col-md-11">
                        <div class="clearfix">
                            <div class="pull-left"><strong><?php echo $count;?>楼 </strong> 
							<strong><?php echo $cmt['username']; ?></strong> </div>
                            <div class="pull-right"><span><?php echo $cmt['inputtime'] ; ?></span></div>
                        </div>
                        <p><?php echo $cmt['thecomment'] ; ?></p>
                    </div>

                </div>
				<?php $count = $count +1 ; ?>
				<?php endforeach ; ?>

               
            </div>
            <!--发布评论-->
            <fo rm role="form" class="publish">
                <div class="form-group clearfix">
                    <label>发表评论：</label>
					<?php
					if ( $username != FALSE ) {
						echo "<form action=/v2/news/savecomment/$page/$sysid method=post name=savecomt onsubmit='javascript: return confirmit();'>" ;
						echo "<input type=hidden name=page id=page value=$page >" ;
						echo " <input type=hidden id=sysid name=sysid value=$sysid >" ;
						echo "<input type=hidden name=username id=username value='".$username."'>" ;
						echo "<textarea id=editor_id name=content class='form-control'></textarea>";
						echo "<input type=submit class='btn btn-primary pull-right btn-sm' value ='发表评论'>" ;
					}else {
						echo "<div align=center><img src=/images/lock.png border=0 vspace=10 align=absmiddle>" ;
						echo "<a href=/act/loginget/v2/_news_viewone_".$page."_".$sysid."#comment> 您还没有登录,请您登录后再发表评论 </a></img></div>" ;	
					}
					?>
                </div>
            </form>
        </div>

    </div>
</div>

<script language="javascript">
function confirmit() {
	html = document.getElementById('editor_id').value; 
	if ( html.length < 1 ){
		alert('内容为空，不必提交!') ; return false ;
	}
	alert ('确认提交内容：' + html) ;
	return true;
}

function showMarkdown() {
	var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		literalMidWordUnderscores:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

    md_text = document.getElementById('mdx_content').value; ;
    htmlTxt = converter.makeHtml(md_text);
    htmlTxt = htmlTxt.replace(/<table/g,'<table class="table table-bordered table-condensed"') ;
    document.getElementById("rel_content").innerHTML=htmlTxt ;
 }

</script>
<?php
	if ( $news['sysid'] > 283 )
		echo "<script language='javascript'> showMarkdown(); </script>" ;
?>
