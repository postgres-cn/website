
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">图书</a></li>
                <li><a href="/v2/document">文档资料</a></li>
                <li><a href="/v2/download">软件下载</a></li>
                <li><a href="/v2/community">关于中文社区</a></li>
				<li><hr size=1></li>
                <li><a href="https://www.aliyun.com/product/rds/postgresql" target="_blank">阿里云PostgreSQL</a></li>

            </ul>

        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="#">首页</a></li>
                <li><a href="#">相关资料</a></li>
                <li class="active"><a href="#">图书</a></li>
            </ol>
            <!--图书列表-->

		<?php foreach($bURLs as $bURL) : ?>

            <div class="well clearfix" style="position: relative;">
                <div class="col-md-3">
					<?php echo isset($bURL['pic_name']) ? "<img src=/images/book/" .  $bURL['pic_name'] ." width=180></img>" : "" ; ?>
                </div>
                <div class="col-md-9">
                    <h3><?php echo $bURL['thetitle'] ; ?></h3>
                    <div class="infobar">
                        <i class="glyphicon glyphicon-education"></i> 作者：<span><?php echo  $bURL['author']; ?></span>
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <i class="glyphicon glyphicon-book"></i> 出版：<span><?php echo   $bURL['pubdate'] ; ?></span>
                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <i class="glyphicon glyphicon-shopping-cart"></i> 购买：
                        <span><a target=_blank href=<?php echo   $bURL['buy_url1'] ; ?>>京东</a></span>
                        &nbsp;<span><a target=_blank href=<?php echo   $bURL['buy_url2'] ; ?>>当当</a></span>
                        &nbsp;<span><a target=_blank href=<?php echo   $bURL['buy_url3'] ; ?>>互动出版</a></span>
                    </div>
                    <div style="padding-top: 10px">
                        <i class="glyphicon glyphicon-leaf"></i> <strong>内容简介：</strong>
                        <span class="infobar"> <?php echo   $bURL['book_info'] ; ?></span>
                    </div>
                </div>
            </div>

	<?php  endforeach ; ?>
                
            <!--分页-->
            <!--<div class="text-center">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>-->

        </div>

    </div>
</div>
