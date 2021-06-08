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
<!--
	<div class="header_img bg_blue" style="height:320px;">
       ---     <h3 style="padding-top:80px;"><a style="color:#fff;decoration:none;" href="/v2/news/viewone/1/536" target="_blank">PostgreSQL 2019 中国技术大会圆满结束！资料下载</a></h3> 
	
            <h2 style='padding-top:80px;color:#fff;'>不忘初心 砥砺前行 PostgreSQL 2020 再出发！</h2>
	
			<h3 style="color:#fff;"><img src='/images/doty2017.png' style="height:120px;"></img> <img src='/images/doty2018.png' style="height:120px;"></img> 蝉联DB-Engine“年度最佳数据库”</h3>
			<br>
			
    </div>
-->

<!-- 当前大会需要推介时用
	<div class="Xheader_img Xbg_blue">
	<a target=_blank href="http://pg.itpub.net/ticket.html">
		<img src="/images/pg_conf_2019.jpg" style="max-width:100%;width:100%"></img>
	</a>
	</div>
-->
<?php 

$userAgent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'NONE_CLI';

$keyList= array("about","discount","imgrecog","sales_p2p");

$imgArr = array("about" =>"https://www.aliyun.com/product/rds/postgresql", 
				"discount"=>"https://www.aliyun.com/database/postgresqlactivity",
				"imgrecog"=>"https://help.aliyun.com/document_detail/154873.html",
				"sales_p2p"=>"https://help.aliyun.com/document_detail/154080.html");
//shuffle($keyList) ;
//阿里云的PPT轮播要求每次随机顺序，因此大会的不加入数组；
$picClass = preg_match_all('/iPhone|iPad|iPod|Android/i', $userAgent, $wordsFound) > 0 ? "cover" : "contain" ;

?>
<div  class="fluid" style="margin-top: 50px">
<section id="myCarousel" class="carousel slide" style="min-height:300px;max-height:500px;" >
	<ol class="carousel-indicators" style="margin-top:5px;">
		<li data-target="#myCarousel" data-slide-to="0" class="active mr-3" style="width:20px;height:20px;margin-right:20px"></li>
		<li data-target="#myCarousel" data-slide-to="1" class="mr-3" style="width:20px;height:20px;margin-right:20px"></li>
		<li data-target="#myCarousel" data-slide-to="2" class="mr-3" style="width:20px;height:20px;margin-right:20px"></li>
		<li data-target="#myCarousel" data-slide-to="3" class="mr-3" style="width:20px;height:20px;margin-right:20px"></li>
		<li data-target="#myCarousel" data-slide-to="4" class="mr-3" style="width:20px;height:20px;margin-right:20px"></li>
	</ol>

	<section class="carousel-inner" style="min-height:300px;max-height:500px;">
		<!--div class="item active" style="background-color:#223cd1;text-align:center;">
			<a href="http://pgconf2020.postgres.cn" target="_blank"><img src="/image/pgconf2020_v3.jpg" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div -->
		<div class="item active" style="background-color:#223cd1;text-align:center;">
			<a href="#" 
			 onclick="countURLAccess('华为Cloud','https://www.huaweicloud.com/product/pg.html?utm_source=PGzhongwenshequ&utm_medium=banner&utm_campaign=&utm_content=&utm_term=&utm_adplace=AdPlace036596')">
			<img src="/image/huawei_cloud1.jpg" id="huawei_pic" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div>
		<!--
		<div class="item" style="background-color:#223cd1;text-align:center;">
			<a href="#" 
			 onclick="countURLAccess('华为Trial','https://activity.huaweicloud.com/pg.html?utm_source=PGzhongwenshequ&utm_medium=banner&utm_campaign=&utm_content=&utm_term=&utm_adplace=AdPlace036595')">
			<img src="/image/huawei_cloud2.jpg" id="huawei_pic2" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div>
		-->
		<div class="item" style="background-color:#223cd1;text-align:center;">
			<a href="#" onclick="countURLAccess('阿里关于','<?php echo $imgArr[$keyList[0]]; ?>')" ><img src="/image/aliyun_<?php echo $keyList[0]; ?>.jpg" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div>
		<div class="item" style="background-color:#223cd1;text-align:center;">
			<a href="#" onclick="countURLAccess('阿里促销','<?php echo $imgArr[$keyList[1]]; ?>')" ><img src="/image/aliyun_<?php echo $keyList[1]; ?>.jpg" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div>
		<div class="item" style="background-color:#223cd1;text-align:center;">
			<a href="#" onclick="countURLAccess('阿里图象识别','<?php echo $imgArr[$keyList[2]]; ?>')"><img src="/image/aliyun_<?php echo $keyList[2]; ?>.jpg" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div>
		<div class="item" style="background-color:#223cd1;text-align:center;">
			<a href="#" onclick="countURLAccess('阿里销售画像','<?php echo $imgArr[$keyList[3]]; ?>')" ><img src="/image/aliyun_<?php echo $keyList[3]; ?>.jpg" 
					alt="" style="background-color:#223cd1;min-height:300px;max-height:500px;object-fit:<?php echo $picClass ; ?>;"></a>
		</div>
	</section>

	<a href="#myCarousel" class="left carousel-control" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a href="#myCarousel" class="right carousel-control" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</section>
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
    if (!$userpic || substr($userpic, -1) == '.') {
        $userpic = 'null_pic.jpg';
    }

	if ( $username != FALSE ) {
		       echo '<div class="panel-body"  style="text-align: center">' ;
               echo '<a href="/v2/act/userinfo"><img src="/images/users/'. $userpic .'"  height="80px"></a>' ;
			   echo '<ul class="userInCon">' ; 
               echo '     <li>用户名：<span>'.  $username . '</span></li>';
			   echo '     <li>注册：<span>'. $regtime . '</span></li>';
			   echo ' </ul>' ;
			   echo '</div>' ; 
	} else { ?>
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
                <li>主　席：<b>张文升</b></li>
                <li>常　委：<small>彭煜玮，周正中，朱贤文，唐成，姚延栋，姜明俊，张文升</small> </li>
				<li>委　员：<small>汪洋，周到京，赵全明，谭峰，陈华军，秦红胜，李海龙，王硕，陈河堆，刘泉</small></li>
				<li>顾　问：<small>李元佳，萧少聪，胡怡文，权宗亮，赵振平，韩涵，谢灿扬</small></li>
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
                            <img class="media-object" src=/images/users/<?php echo (strlen($nrec['picture']) < 6 || substr($nrec['picture'], -1) == '.') ? "null_pic.jpg" : $nrec['picture'] ; ?> width="64px" height="64px" style="max-width: none;"></img>
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
                    <li><a target=_blank href="https://www.aliyun.com/product/rds/postgresql">阿里云RDS PostgreSQL</a></li>
                    <li><a href="#" 
			 onclick="countURLAccess('华为LEFTLink','https://www.huaweicloud.com/product/pg.html?utm_source=PGzhongwenshequ&utm_medium=banner&utm_campaign=&utm_content=&utm_term=&utm_adplace=AdPlace036596')">华为云RDS for PG</a></li>
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
        <?php require('home/news.php'); ?>
        <!--社区大小事-->
        <?php require('home/events.php'); ?>
        <!--版本信息-->
        <?php require('home/release.php'); ?>
        <!--有问有答(FAQ)最新动态-->
        <!-- 2020-2-20 根据社区要求，因没有专人回复和维护，暂关闭 -->
        <!-- < ? php require('home/faq.php'); ? > -->
    </div>
</div>

<script >
    $("#myCarousel").carousel({
        interval: 3000,
        pause: "hover",
        wrap: true
    });

	function countURLAccess(objType, objURL){
		/*_czc.push(["_trackPageview","/华为云","http://postgres.cn/v2/home/"]) ; */
		_czc.push(["_trackEvent","横幅","弹窗",objType, "1","huawei_pic"]) ;
		console.log("push Pageview & Event ", (new Date())) ; 
		window.open(objURL) ; 
	}
</script>