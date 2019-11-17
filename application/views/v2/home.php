<?php
function getTimeShow($t) {
		$clr_t = "" ;
		if ( strstr($t,'day')  || strstr($t,'mon') || strstr($t,'year') ) {
			$ta = explode(' ', $t) ;
			if ( strstr($ta[1],'year') )
					$clr_t = $ta[0].'年前' ;
			elseif ( strstr($ta[1],'mon'))
					$clr_t = $ta[0].'月前' ;
			else
					$clr_t = $ta[0].'天前' ;
		}else {
			$ta = explode(':', $t) ;
			if ( $ta[0] != '00' )
						$clr_t = ltrim($ta[0],'0')."小时前" ;
			else {
					if ( $ta[1] !='00')
						$clr_t = ltrim($ta[1],'0')."分钟前" ;
					else
						$clr_t = ltrim(substr($ta[2],0,2),'0')."秒前" ;
			}
		}
	return $clr_t ;
}
?>
<!--中间部分-->

<div class="Xheader_img Xbg_blue">
<a target=_blank href="http://pg.itpub.net/ticket.html">
<img src="/images/pg_conf_2019.jpg" style="max-width:100%;width:100%"></img>
</a>
</div>

<div class="container" style="margin-top: 20px">
    <!--左边内容部分-->
    <div class="col-md-3">
        <!--用户信息或登录信息显示-->
        <div class="panel panel-default">
            <div class="panel-heading">当前用户信息</div>

<?php 
	$username = $this->session->userdata('username');
	$regtime = $this->session->userdata('regtime');
	$userpic = $this->session->userdata('userpic');

	if ( $username != FALSE ) {
		       echo '<div class="panel-body"  style="text-align: center">' ;
               echo '<a href="/v2/act/userinfo"><img src="/images/users/'. $userpic .'"  height="80px"></a>' ;
			   echo '<ul class="userInCon">' ; 
               echo '     <li>用户名：<span>'.  $username . '</span></li>';
			   echo '     <li>注册：<span>'. $regtime . '</span></li>';
			   echo ' </ul>' ;
			   echo '</div>' ; 
	}else { ?>
			<form action=/v2/act/login method=post>
            <div class="panel-body"> 
                <div class="form-group clearfix">
                    <label for="firstname" class="col-sm-4 control-label">用户名</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" name=username id="firstname" placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label for="lastname" class="col-sm-4 control-label">密码</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control input-sm" name=passwd id="lastname" placeholder="请输入密码">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-default btn-sm">  登录  </button>
                    </div>
                </div>
            </div>
			</form>
      
<?php 
			}
?>
 </div>
	<!--Org -->
	<div class="panel panel-default">
            <div class="panel-heading">社区组织</div>
            <div class="panel-body">
                <li>主　席：<b>赵振平</b></li>
                <li>副主席：<b>唐成</b></li>
                <li>委　员：<small>
萧少聪、周正中、汪洋、张文升、陈河堆、朱贤文、李海龙、周到京、白国华、姜明俊、谭峰、胡辉、王硕、陈华军、秦红胜、刘泉、胡怡文、彭煜玮、胡森、姚延栋。(排名不分先后)</small> </li>
            </div>

	</div>

        <!--社区信息统计及最新用户显示-->
        <div class="panel panel-default">
            <div class="panel-heading">社区信息统计</div>
            <div class="panel-body">
                <li>总用户数：<a href=/v2/community/typelist/1/ALL><?php echo $sums['people_num'] ; ?></a></li>
                <li>一周内注册：<a href=/v2/community/typelist/1/WEEKREG><?php echo $sums['people_num_weekly']; ?></a></li>
                <li>一月内注册：<a href=/v2/community/typelist/1/MONTHREG><?php echo $sums['people_num_month']; ?></a></li>
                <li>用户区域：<a href=/v2/community>分布图</a></li>
            </div>
            <!--两种形式显示最新注册的三位用户信息，列表式和表格式-->
            <!--列表式-->
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src=/images/users/<?php echo strlen($nrec['picture']) < 6 ? "null_pic.jpg" : $nrec['picture'] ; ?> width="64px" height="64px"></img>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $nrec['thename'] ; ?></h4>
                        <span>注册：<span><?php echo $nrec['regtime'] ; ?></span></span><br/>
                        <span>地址：<span><?php echo $nrec['theprovince'].'　'.$nrec['thecity'] ; ?></span></span>
                    </div>
                </li>         
                
            </ul>
        </div>

        <!--相关链接-->
        <div class="panel panel-default">
            <div class="panel-heading">PostgreSQL相关链接</div>
            <div class="panel-body">
                <ul class="links">
                    <li><a target=_blank href="https://www.postgresql.org/">PostgreSQL官网</a></li>
                    <li><a target=_blank href="https://www.citusdata.com/">Citus Data官网</a></li>
                    <li><a target=_blank href="http://www.postgis.net/">PostGIS官网</a></li>
                    <li><a target=_blank href="https://github.com/digoal/blog/blob/master/README.md">德哥的博客</a></li>
                    <li><a target=_blank href="https://postgres.fun/">francs的博客</a></li>
                    <li><a target=_blank href="http://www.pgsql.tech">乘数的PG技术网站</a></li>
                    <li><a target=_blank href="https://planet.postgresql.org/">Planet社区博客</a></li>
                    <li><a target=_blank href="http://momjian.us/main/blogs/pgblog/2012.html">社区管家Bruce</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <!--最新消息-->
        <div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" style="height:420px">
                        <img src="/image/timg1.jpg"  width="242" height="160">
                        <div class="caption">
                            <h4><a href="#">PostgreSQL<?php echo $trel['theversion']."发布" ; ?></a></h4>
                            <p><?php echo $trel['thecontent']; ?> </p>
                            <span><a href="/v2/release/v/<?php echo $trel['sysid']; ?>" class="btn btn-primary btn-sm" role="button">详细内容</a> <a href="/v2/download" class="btn btn-default btn-sm" role="button">下载新版本</a></span>
                        </div>
                    </div>
                </div>
				<?php foreach($onen2 as $onen) : ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" style="height:420px">
			<?php
                              $sysid = $onen['sysid'];
                              $year =  substr($onen['pubtime'],0,4) ;
                              $path  = './images/news/' . $year .'/' ;
                              $r_path = '/images/news/' . $year .'/' ;
                              $pic_file_prefix = $path .$sysid ;
                             if ( file_exists($pic_file_prefix.'_1.jpg') ) {
                             	echo "<img src=".$r_path.$sysid."_1.jpg  height=160 ></img>";
			    } else {
                             	echo "<img src=/image/timg1.jpg height=160  ></img>";
				}


			?>
                        <div class="caption">
                            <h4><a href="#" ><?php echo isset($onen['thetitle'])? $onen['thetitle'] : '' ; ?></a></h4>
                            <p><?php echo $onen['brief_info'] ; ?></p>
                            <span><a href="/v2/news/viewone/1/<?php echo isset($onen['sysid'])? $onen['sysid'] : '0' ; ?>" class="btn btn-primary btn-sm" role="button">详细内容</a></span>
                        </div>
                    </div>
                </div>
				<?php  endforeach ; ?>

            </div>
        </div>
        <!--社区大小事-->
        <div class="well">
            <div class="page-header" >
                <h4><a href="/v2/news"> 社区大小事 <small class="pull-right">更多社区消息>> </small> </a></h4>
            </div>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>新闻及活动标题</th>
                    <th>作者</th>
                    <th>浏览/回复</th>
                    <th>发布时间</th>
                </tr>
                </thead>
                <tbody>
			<?php foreach($tnewss as $tnews) : ?>
				<tr><td><a href=/v2/news/viewone/1/<?php echo $tnews['sysid'];?>><?php echo $tnews['thetitle'] ; ?></a></td>

				<td><small><?php echo isset($tnews['org_author']) && strlen($tnews['org_author'])>1 ? "<b>".$tnews['org_author'] . "</b>" : $tnews['author'] ; ?></small></td>
				<td><?php echo $tnews['viewclicks'] ; ?> / <?php echo $tnews['comtclicks'] ; ?></td>
				<td><?php echo getTimeShow($tnews['age']) ; ?></td></tr>

			<?php  endforeach ; ?>
                </tbody>
            </table>
        </div>

        <!--版本信息-->
        <div class="well">
            <div class="page-header" >
                <h4><a href="/v2/release"> 版本信息 <small class="pull-right">更多发版列表>> </small> </a></h4>
            </div>
            <table class="table">
<!--
                <thead>
                <tr>
                    <th>版本信息</th>
                    <th>时间</th>
                    <th>发布声明</th>
                </tr>
                </thead>
-->
                <tbody>
				<?php
					$count = 1 ;
					foreach($pgvers as $pgver ):
						echo "<tr><td><a href=/v2/release/v/". $pgver['sysid'] . "><b>PostgreSQL ".$pgver['theversion'] . "</b></a></td>" ; 
						echo "<td>".  $pgver['reltime2'] ."</td>" ;
						echo "<td><a href=/v2/release/v". $pgver['sysid'].">发布声明</a></td></tr>"; 
						$count ++ ;
					endforeach ;
				?>

                </tbody>
            </table>
        </div>

        <!--有问有答(FAQ)最新动态-->
        <div class="well">
            <div class="page-header" >
                <h4><a href="/v2/faq"> 有问有答(FAQ)最新动态 <small class="pull-right">更多动态>> </small> </a></h4>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>问答标题</th>
                    <th>提交者</th>
                    <th>浏览/回复</th>
                    <th>发布时间</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($faqs as $faq) : ?>
				<tr><td>
				<a href=/v2/faq/viewone/1/<?php echo $faq['sysid'].'/'.$faq['comtclicks'].'/'.$faq['thetype'] ;?>><?php echo $faq['thetitle'] ; ?></a></td>

				<td><?php echo "<b>".$faq['author'] . "</b>"  ; ?></td>
				<td><?php echo $faq['viewclicks'].'/'.$faq['comtclicks'] ; ?></td>
				<td><?php echo getTimeShow($faq['age']) ; ?></td></tr>

				<?php  endforeach ; ?>

                </tbody>
            </table>
        </div>


    </div>
</div>
