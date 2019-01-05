<!doctype HTML>
<html  xmlns:wb="http://open.weibo.com/wb">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta property="wb:webmaster" content="e0af5ce7fe86b196" />
  <meta name="description" content="PostgreSQL,database,postgres.cn, 中文社区,pgsql, open source, 中文社区官网, pg文档,世界上功能最强大的开源数据库" />
  <meta name="description" content="The official site for PostgreSQL, the world's most advanced open source database" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="/css/extra.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="shortcut icon" href="/favicon.ico" />
  <title><?php if ( isset($title) ) echo $title ; ?>__PostgreSQL中文社区: 世界上功能最强大的开源数据库...</title>
  <?php
//if ( strstr($_SERVER['PHP_SELF'],'community') != FALSE  )
//		echo chr(13).chr(10).'<script language="javascript" src="/js/fcfcharts.js"></script>' ;
  /*
  if ( strstr($_SERVER['PHP_SELF'],'news/viewone') != FALSE  ||  strstr($_SERVER['PHP_SELF'],'news/create') != FALSE  ) {
		echo chr(13).chr(10).'<script charset="utf-8" src="/editor/kindeditor.js"></script>' ;
		echo chr(13).chr(10).'<script charset="utf-8" src="/editor/lang/zh_CN.js"></script>' ;
		echo chr(13).chr(10).'<script> var editor ; ' ;
        		echo chr(13).chr(10)."KindEditor.ready(function(K) { " ;
		echo chr(13).chr(10)."		editor = K.create('textarea[name=\"content\"]', { " ;
		echo chr(13).chr(10)."			resizeType : 1, " ;
		echo chr(13).chr(10)."			allowPreviewEmoticons : false, " ;
		echo chr(13).chr(10)."			allowImageUpload : false," ;
		echo chr(13).chr(10)."			items : [ " ;
		echo chr(13).chr(10)."				'source','preview','baidumap','table','hr','image',";
		echo chr(13).chr(10)."				'title','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',";
		echo chr(13).chr(10)."				'removeformat','|','justifyleft','justifycenter','justifyright','insertorderedlist'," ;
		echo chr(13).chr(10)."				'insertunorderedlist', '|', 'emoticons', 'link'] " ; //'image'
		echo chr(13).chr(10)."				}); ";
		echo chr(13).chr(10)."        });" ;
		echo chr(13).chr(10)."</script> " ;
  }
*/  
  ?>

<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
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
$userid = $this->session->userdata('userid');
$realname = $this->session->userdata('realname');
?>

<div align=center>

<img src="/images/pg_all.png" class=rad10></img>
<br>
<img src=/images/blank.gif height=4></img>
<br>
<div class="menuBanner rad6" style="text-align: left;"><!--标题菜单-->
<UL style="list-style-type:none;margin:0; padding:0;">
	<LI class=mnu><a href="/home" class=nav style="color:#FFFFFF">　首页</a>  　
	<LI class=mnu><a href="/about" class=nav style="color:#FFFFFF" >了解PostgreSQL</a> 　
	<LI class=mnu><a href="/news"  class=nav style="color:#FFFFFF" >社区新闻</a> 　
	<LI class=mnu><a href="/download" class=nav style="color:#FFFFFF" >软件下载</a>　
	<LI class=mnu><a href="/document"  class=nav style="color:#FFFFFF">文档资料</a> 　
	<LI class=mnu><a href="/support"  class=nav style="color:#FFFFFF">商业支持</a> 　
	<LI class=mnu><a href="/book"  class=nav style="color:#FFFFFF">图书</a> 　
	<LI class=mnu><a href="http://www.postgresql.org/" class=nav  style="color:#FFFFFF" target=_blank>全球总站</a> 　
	<LI class=mnu><a href="/community"  class=nav style="color:#FFFFFF">关于中文社区</a> 　
	<LI class=mnu><a href="/faq" class=nav style="color:#FFFFFF">有问有答(FAQ)</a>　

<?php
$sessid = "1329876" ;
if ( $username != FALSE ) {
		$this->load->helper('security');
 		$sessid = do_hash($username . date('Y-m-d') . $_SERVER['REMOTE_ADDR'], 'md5') ;
		 echo "<LI class=mnu><a href='/act/userinfo'  class=nav style='color:#FFFFFF'><b>".$realname.'('.$username.")</b></a> 	 " ;
		 echo " ~~~  <a href=/act/logout/". uri_string() ." class=nav><img src=/images/fw.gif border=0></img></a>" ;
}else {
		 echo "<LI class=mnu><a href='/act/userinfo' class=nav style='color:#FFFFFF'>登录</a> 	" ;
}

?>
</UL>
</div>

<img src=/images/blank.gif height=4></img>

<!-- 包含三列内容,
	左侧常用侧边栏/搜索/登录，
	中间为[软件发布信息/全球新闻] + 社区新闻 + 最新最热论坛信息 + Blog引用 ,
	右边为社区用户相关信息 + 版本历史信息 + 投票等
	-->


<table width=1020 border=0 cellpadding=0>
<tr  valign=top><td width=180>
			<div class=pad4Content>
				<UL>
<!--				<LI style="padding: 4px">外接论坛：<a href="http://bbs.postgres.cn/foward.php?ucnt=<?php echo $username; ?>&sid=<?php echo $sessid; ?>" target=_blank>按此进入</a> -->
<!--				<LI>社区像册：<a href="/zp/" target=_blank>按此进入</a> <a href=/zp/zp-core/admin.php target="_blank"> &nbsp; <img src=/images/reader.gif height=12 border=0></img></a> -->
				<LI>QQ群1：5276420
				<LI>QQ群2：3336901
				<LI>QQ群3：254622631
				<LI>文档群：150657323
				<LI>文档翻译平台：<a href="https://github.com/postgres-cn/pgdoc-cn/" target=_blank>按此</a>
				<LI>邮件列表：<a title='中国社区邮件列表: pgsql-zh-general@postgresql.org' href="http://www.postgresql.org/community/lists/subscribe/" target=_blank>按此订阅</a>
				</UL>

				<div align=center>
				<a title='微信圈：PostgresChina'><img src=/images/wechat.jpg alt="微信圈：PostgresChina" width=135 vspace=3></img></a>
				<br>
				<a title='http://weibo.com/postgresqlchina' href=http://weibo.com/postgresqlchina target=_blank><img src=/images/weibo.jpg  alt="http://weibo.com/postgresqlchina" width=135  vspace=3 border=0></img></a>
				</div>

			</div>

			<br/>
<form name=srch action=/search method=post>
			<div  class=pad6Content>
			搜索：<input type=text size=14 name=keysrh id=keysrh class=mytxt>  <input type=image src=/images/go.gif width=15 border=0>
			</div>
</form>

<?php

if ( $username != FALSE ) {
			echo '<div  style="background:#f0f0f0; padding:6px;">' ;
			echo '<img hspace=20 vspace=10 src=/images/users/'.$userpic.' width=140 border=1></img>' ;
			echo '<dl><dt style="padding:4px">用户：' . $username ;
		    	echo " 　 <a href=/act/logout/". uri_string() ."  ><img src=/images/fw.gif border=0></img></a></dt>" ;
			echo '<dt style="padding:4px">注册：'.$regtime . '</dt>' ;
			echo '<dt style="padding:4px">级别：'.$thelevel . '</dt>' ;
			echo '<dt style="padding:4px">指数：<b><font color=#990000>'.$thepoint . '</font></b>' ;
?>

  <a href=/trail/index/1/<?php echo $userid ; ?>

title='晋级计分方式：
1，每次登录得1分；
2，发新闻一次得30分；
3，发应用案例一次得100分；
4，每次对新闻发表评论得3分；
5，对新闻顶或赞一次得1分，同一条新闻仅计一次；
6，对网站提出意见或发现Bug一次得10；
7，每10000分升级一次，共分为“初涉江湖”、“青涩少侠”、“笑傲江湖”、“天地任我行”、“东方不败”、“九九归一”
'
> <img src=/images/upgrade_s.gif border=0 width=20> 晋级之路</img></a>

</dt>

<?php
			echo '</dl></div>' ;

}else {

?>

			<div  class=pad6Content>
			<form action=/act/login method=post>
			用户：<input type=text size=14 class=mytxt name=username id=username><br/><br/>
			密码：<input type=password size=14 class=mytxt name=passwd id=passwd><br/><br/>
<?php
$this_url = $_SERVER["PHP_SELF"] ;
if ( substr($this_url,0,10) === "/index.php")
		$this_url = substr($this_url,10) ;

?>
				<input type=hidden name=to_url value='<?php echo $this_url  ; ?>'>
			　　　<input type=submit class=mybtn value='登录'>　<a href=/act/register>注册</a>　
<a href=/trail/index/1/0>晋级</img>

				</form>
			</div>

<?php } ?>

		<br/>
			<div  class=pad10Content>
			<b>PostgreSQL的企业级云服务</b><br/><a target=_blank href=https://www.qingcloud.com/><img src=/images/sponsors/qingcloud.png width=170 border=0></a>
			</div>

			<br/>
			<div  class=pad10Content>
			<b>PostgreSQL携手阿里云</b><br/><a target=_blank href=http://www.aliyun.com/act/aliyun/rds_pgsql/demo.html><img src=/images/sponsors/ali.png width=170></a>
			</div>


</td>

<td width=8></td>

<td>
