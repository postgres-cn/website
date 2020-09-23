<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title><?php if ( isset($title) ) echo $title ; ?>: 世界上功能最强大的开源数据库...</title>
    <link rel="stylesheet" href="/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" h ref="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/v2/style.css?t=1234">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script s rc="/js/jquery.slim.min.js"></script>
    <script s rc="/js/bootstrap.bundle.min.js"></script>

	<script src="/js/showdown.min.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
<?php
$username = $this->session->userdata('username');
$thegroup = $this->session->userdata('thegroup');
$thepoint = $this->session->userdata('thepoint');
$thelevel = $this->session->userdata('thelevel');
$regtime = $this->session->userdata('regtime');
$userpic = $this->session->userdata('userpic');
?>
<!--头部-->
    <!--导航栏-->
    <nav class="navbar bg_blue navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<a class="navbar-brand" href="https://postgresql.org" target=_blank><img class="logo" src=/images/elephant_logo.png width="32" height="32"></img></a> 
                <a class="navbar-brand" href="/v2/home">PostgreSQL中文社区</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/v2/home">首页 <span class="sr-only">(current)</span></a></li>
                    <li><a href="/v2/news">社区新闻</a></li>
                    <li><a href="/v2/document">中文文档</a></li>
                    <!-- 2020-02-20 Closed 
                    <li class="hidden-xs hidden-sm"><a href="/v2/faq">有问有答</a></li> 
                    <li><a href="/v2/certificate">培训认证</a></li> -->

                    <li class="dropdown hidden-xs hidden-sm" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">相关资料 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
			                <li><a href="/v2/about">了解PostgreSQL</a></li>
                            <li><a href="/v2/document">PostgreSQL相关文档</a></li>
                            <li><a href="/v2/download">PostgreSQL软件下载</a></li>
	                        <li><a href="/v2/book">PostgreSQL中文图书</a></li>
                            <li><a href="/v2/news/typelist/1/会议资料">社区年会PPT资料</a></li>
                            <li><a href="/v2/community">关于中文社区</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left  hidden-xs hidden-sm" name=srch action=/v2/search method=post>
                    <div class="form-group" style="max-width:120px">
                        <input type="text" class="form-control" name="keysrh" placeholder="Search" style="max-width:120px">
                    </div>
                </form>

<?php
$sessid = "1329876" ;
if ( $username != FALSE ) {
		$this->load->helper('security');
 		$sessid = do_hash($username . date('Y-m-d') . $_SERVER['REMOTE_ADDR'], 'md5') ;
		 echo "<ul class='nav navbar-nav navbar-right'>"; 
		echo "<li class='dropdown'>";
        echo "<a href=# class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>";
		echo $username . "<span class='caret'></span></a>" ;
        echo "<ul class='dropdown-menu'>" ;
        echo "	<li><a href='/v2/act/userinfo'>个人资料修改</a></li>"; 
        echo "                    <li><a href='/v2/trail/index/1/1'>晋级</a></li>";
        echo "                  <li role='separator' class='divider'></li>";
        echo "                  <li><a href='/v2/act/logout/" . uri_string() ."'>退出</a></li>";
        echo "            </ul>";
        echo "            </li>";
        echo "        </ul>";
}else {
		 echo "<ul class='nav navbar-nav navbar-right'>" ;
		 echo "<li><a href='/v2/act/register'>注册</a></li>" ;
		 echo "<li><a href='/v2/act/userinfo'>登录</a></li>" ;
		 echo "</ul>" ;
}

?>



            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--头部图片-->



