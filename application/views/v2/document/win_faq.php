
<div class="container" style="margin-top: 60px">
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/book">图书</a></li>
                <li class="active"><a href="/v2/document">文档资料<span class="badge pull-right">*</span></a></li>
                <li><a href="/v2/download">软件下载</a></li>
                <li><a href="/v2/community">关于中文社区</a></li>
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
                <li><a href="#">文档资料</a></li>
				<li class="active">Windows平台安装PostgreSQL常见问题及解答... (更新于: <?php echo $last_modified ; ?>)</li>
            </ol>

            <div class="well well-sm" style="position: relative;">

<br>
<p>本文档的英文最新版本可以在[ <a href="http://wiki.postgresql.org/wiki/Running_%26_Installing_PostgreSQL_On_Native_Windows" 
target=_blank>这里Wiki</a> ]查看。



<table id="toc" class="toc" summary="目录"><tr><td><div id="toctitle"><h2>目录</h2></div>
<ul>
<li class="toclevel-1"><a href="#.E6.94.AF.E6.8C.81.E7.9A.84.E7.B3.BB.E7.BB.9F.E5.B9.B3.E5.8F.B0"><span class="tocnumber">1</span> <span class="toctext">支持的系统平台</span></a>
<ul>
<li class="toclevel-2"><a href="#PostgreSQL.E5.8F.AF.E4.BB.A5.E8.BF.90.E8.A1.8C.E5.9C.A8.E5.93.AA.E4.BA.9BWindows.E7.89.88.E6.9C.AC.E4.B8.8A.EF.BC.9F"><span class="tocnumber">1.1</span> <span class="toctext">PostgreSQL可以运行在哪些Windows版本上？</span></a></li>
<li class="toclevel-2"><a href="#.E5.93.AA.E4.BA.9BWindows.E5.B9.B3.E5.8F.B0.E6.98.AF.E4.B8.8D.E8.A2.AB.E6.94.AF.E6.8C.81.E7.9A.84.EF.BC.9F"><span class="tocnumber">1.2</span> <span class="toctext">哪些Windows平台是不被支持的？</span></a></li>
<li class="toclevel-2"><a href="#.E6.98.AF.E5.90.A6.E6.94.AF.E6.8C.81.E5.9C.A8Windows_NT4_.E5.92.8C_Windows_2000_.E7.9A.84.E5.B9.B3.E5.8F.B0.E4.B8.8B.E8.BF.90.E8.A1.8C.EF.BC.9F"><span class="tocnumber">1.3</span> <span class="toctext">是否支持在Windows NT4 和 Windows 2000 的平台下运行？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E5.8F.AF.E4.BB.A5.E8.BF.90.E8.A1.8C.E5.9C.A8_Windows_95.2F98.2FME.E5.B9.B3.E5.8F.B0.E4.B8.8B.E5.90.97.EF.BC.9F"><span class="tocnumber">1.4</span> <span class="toctext">PostgreSQL可以运行在 Windows 95/98/ME平台下吗？</span></a></li>
<li class="toclevel-2"><a href="#.E6.98.AF.E5.90.A6.E6.9C.89.E4.B8.BA64.E4.BD.8DWindows.E7.BC.96.E8.AF.91.E5.A5.BD.E7.9A.84PostgreSQL_64.E4.BD.8D.E7.89.88.E6.9C.AC.EF.BC.9F"><span class="tocnumber">1.5</span> <span class="toctext">是否有为64位Windows编译好的PostgreSQL 64位版本？</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.E5.AE.89.E8.A3.85"><span class="tocnumber">2</span> <span class="toctext">安装</span></a>
<ul>
<li class="toclevel-2"><a href="#.E5.9C.A8Windows.E4.B8.8A.E5.AE.89.E8.A3.85PostgreSQL.E9.9C.80.E8.A6.81.E5.81.9A.E4.BA.9B.E4.BB.80.E4.B9.88.EF.BC.9F"><span class="tocnumber">2.1</span> <span class="toctext">在Windows上安装PostgreSQL需要做些什么？</span></a></li>
<li class="toclevel-2"><a href="#.E8.87.AA.E5.B7.B2.E4.BB.8E.E6.BA.90.E4.BB.A3.E7.A0.81.E7.BC.96.E8.AF.91PostgreSQL.E6.80.8E.E4.B9.88.E5.81.9A.EF.BC.9F"><span class="tocnumber">2.2</span> <span class="toctext">自已从源代码编译PostgreSQL怎么做？</span></a></li>
<li class="toclevel-2"><a href="#.E8.BF.90.E8.A1.8CPostgreSQL.E4.B8.BA.E4.BD.95.E9.9C.80.E8.A6.81.E4.B8.80.E4.B8.AA.E9.9D.9E.E7.AE.A1.E7.90.86.E5.91.98.E5.B8.90.E5.8F.B7.EF.BC.9F.28.E4.BF.AE.E6.94.B9.E5.9C.A8.E6.AD.A4.29"><span class="tocnumber">2.3</span> <span class="toctext">运行PostgreSQL为何需要一个非管理员帐号？(修改在此)</span></a></li>
<li class="toclevel-2"><a href="#.E5.8F.AF.E4.BB.A5.E5.B0.86PostgreSQL.E5.AE.89.E8.A3.85.E5.9C.A8FAT.E5.88.86.E5.8C.BA.E5.90.97.EF.BC.9F"><span class="tocnumber">2.4</span> <span class="toctext">可以将PostgreSQL安装在FAT分区吗？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E9.9C.80.E8.A6.81.E4.BB.80.E4.B9.88.E6.A0.B7.E7.9A.84.E6.96.87.E4.BB.B6.E7.B3.BB.E7.BB.9F.E6.9D.83.E9.99.90.EF.BC.9F"><span class="tocnumber">2.5</span> <span class="toctext">PostgreSQL需要什么样的文件系统权限？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E4.B8.8D.E8.83.BD.E9.80.89.E6.8B.A9Unicode.E7.BC.96.E7.A0.81.EF.BC.9F"><span class="tocnumber">2.6</span> <span class="toctext">为什么我不能选择Unicode编码？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.AE.89.E8.A3.85.E4.BA.86.E4.B8.80.E4.B8.AA.E9.9D.9E.E8.8B.B1.E6.96.87.E7.9A.84.E8.AF.AD.E8.A8.80.EF.BC.8C.E4.BD.86.E6.89.80.E6.9C.89.E7.9A.84.E4.BF.A1.E6.81.AF.E9.83.BD.E6.98.BE.E7.A4.BA.E4.B8.BA.E8.8B.B1.E6.96.87.EF.BC.81"><span class="tocnumber">2.7</span> <span class="toctext">我安装了一个非英文的语言，但所有的信息都显示为英文！</span></a></li>
<li class="toclevel-2"><a href="#.5B.E8.AF.91.E8.80.85.E6.B7.BB.E5.8A.A0.5D.E5.A6.82.E4.BD.95.E4.BD.BF.E7.94.A8.E5.85.8D.E5.AE.89.E8.A3.85.E7.89.88.E6.9C.AC.E5.AE.8C.E5.85.A8.E6.89.8B.E5.8A.A8.E5.AE.89.E8.A3.85.EF.BC.9F"><span class="tocnumber">2.8</span> <span class="toctext">[译者添加]如何使用免安装版本完全手动安装？</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.E5.B8.B8.E8.A7.81.E5.AE.89.E8.A3.85.E9.94.99.E8.AF.AF"><span class="tocnumber">3</span> <span class="toctext">常见安装错误</span></a>
<ul>
<li class="toclevel-2"><a href="#PostgreSQL.E4.B8.8E.2F.E6.88.96.E5.85.B6.E5.AE.89.E8.A3.85.E7.A8.8B.E5.BA.8F.E5.9C.A8.E5.90.AF.E5.8A.A8.E6.97.B6.E5.B4.A9.E6.BA.83.E3.80.81.E4.B8.8D.E8.83.BD.E6.AD.A3.E5.B8.B8.E5.90.AF.E5.8A.A8.E6.88.96.E6.98.AF.E5.90.AF.E5.8A.A8.E5.90.8E.E6.8C.82.E8.B5.B7"><span class="tocnumber">3.1</span> <span class="toctext">PostgreSQL与/或其安装程序在启动时崩溃、不能正常启动或是启动后挂起</span></a></li>
<li class="toclevel-2"><a href="#.E5.AE.89.E8.A3.85.E7.A8.8B.E5.BA.8F.E5.A3.B0.E7.A7.B0.E6.8C.87.E5.AE.9A.E7.9A.84.E5.B8.90.E5.8F.B7.E6.98.AF.E7.AE.A1.E7.90.86.E5.91.98.E5.B8.90.E5.8F.B7.EF.BC.8C.E4.BD.86.EF.BC.88.E4.BD.A0.E8.AE.A4.E4.B8.BA.EF.BC.89.E4.B8.8D.E6.98.AF.21"><span class="tocnumber">3.2</span> <span class="toctext">安装程序声称指定的帐号是管理员帐号，但（你认为）不是!</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E7.B1.BB.E4.BC.BC_.22the_user_has_not_been_granted_the_requested_logon_type_at_this_computer.28.E7.94.A8.E6.88.B7.E6.B2.A1.E6.9C.89.E8.A2.AB.E5.88.86.E9.85.8D.E5.BF.85.E9.9C.80.E7.9A.84.E7.99.BB.E5.BD.95.E6.9D.83.E9.99.90.29.22.E7.9A.84.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF"><span class="tocnumber">3.3</span> <span class="toctext">我收到一个类似 "the user has not been granted the requested logon type at this computer(用户没有被分配必需的登录权限)"的错误信息</span></a></li>
<li class="toclevel-2"><a href="#.E5.9C.A8.E5.AE.89.E8.A3.85.2F.E8.BF.90.E8.A1.8Cinitdb.E6.97.B6.EF.BC.8C.E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E6.9D.83.E9.99.90.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF"><span class="tocnumber">3.4</span> <span class="toctext">在安装/运行initdb时，我收到一个权限错误信息</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF.E6.98.BE.E7.A4.BAPostgreSQL.E4.B8.8D.E8.83.BD.E5.A4.9F.E4.BB.8E.E4.B8.80.E4.B8.AA.E7.BB.88.E7.AB.AF.E6.9C.8D.E5.8A.A1.E4.BC.9A.E8.AF.9D.E4.B8.AD.E8.BF.9B.E8.A1.8C.E5.AE.89.E8.A3.85"><span class="tocnumber">3.5</span> <span class="toctext">我收到一个错误信息显示PostgreSQL不能够从一个终端服务会话中进行安装</span></a></li>
<li class="toclevel-2"><a href="#.E5.AE.89.E8.A3.85.E6.97.B6.E6.88.91.E6.94.B9.E5.8F.98.E4.BA.86.E7.9B.AE.E5.BD.95.EF.BC.8C.E4.BD.86PostgreSQL.E8.BF.98.E6.98.AF.E5.AE.89.E8.A3.85.E5.9C.A8.E7.BC.BA.E7.9C.81.E7.9A.84.E7.9B.AE.E5.BD.95"><span class="tocnumber">3.6</span> <span class="toctext">安装时我改变了目录，但PostgreSQL还是安装在缺省的目录</span></a></li>
<li class="toclevel-2"><a href="#.E5.9C.A8.E5.8D.87.E7.BA.A7.E5.AE.89.E8.A3.85.E6.97.B6.EF.BC.8C.E5.AE.89.E8.A3.85.E7.A8.8B.E5.BA.8F.E8.AF.B4.E6.88.91.E6.B2.A1.E6.9C.89.E6.9D.83.E9.99.90.E5.AE.89.E8.A3.85.E4.B8.80.E4.B8.AA.E6.9C.8D.E5.8A.A1.EF.BC.8C.E4.BD.86.E6.88.91.E6.98.AF.E4.BB.A5.E7.AE.A1.E7.90.86.E5.91.98.E7.99.BB.E5.BD.95.E7.9A.84"><span class="tocnumber">3.7</span> <span class="toctext">在升级安装时，安装程序说我没有权限安装一个服务，但我是以管理员登录的</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E9.94.99.E8.AF.AF.E8.AF.B4.E5.AE.89.E8.A3.85.E5.8C.85.E6.97.A0.E6.B3.95.E6.89.93.E5.BC.80"><span class="tocnumber">3.8</span> <span class="toctext">我收到一个错误说安装包无法打开</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.E5.B8.B8.E8.A7.81.E8.BF.90.E8.A1.8C.E9.94.99.E8.AF.AF"><span class="tocnumber">4</span> <span class="toctext">常见运行错误</span></a>
<ul>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BD.95.E6.88.91.E5.9C.A8.E5.AE.89.E8.A3.85.E4.B8.80.E4.B8.AA.E8.BF.87.E7.A8.8B.E8.AF.AD.E8.A8.80.E6.97.B6.E4.BC.9A.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.22dynamic_load_error.22.E9.94.99.E8.AF.AF.EF.BC.9F"><span class="tocnumber">4.1</span> <span class="toctext">为何我在安装一个过程语言时会收到一个"dynamic load error"错误？</span></a></li>
<li class="toclevel-2"><a href="#.E8.99.BD.E7.84.B6.E6.88.91.E5.8F.AA.E5.90.AF.E5.8A.A8.E4.BA.86.E6.9C.8D.E5.8A.A1.E5.99.A8.E4.B8.80.E6.AC.A1.E4.BD.86.E5.8F.91.E7.8E.B0.E6.9C.89.E5.BE.88.E5.A4.9A.E7.9A.84postgres.exe.E8.BF.9B.E7.A8.8B"><span class="tocnumber">4.2</span> <span class="toctext">虽然我只启动了服务器一次但发现有很多的postgres.exe进程</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E8.AE.BE.E7.BD.AE.E7.8E.AF.E5.A2.83.E5.8F.98.E9.87.8F.EF.BC.9F"><span class="tocnumber">4.3</span> <span class="toctext">我如何设置环境变量？</span></a></li>
<li class="toclevel-2"><a href="#.E5.B0.BD.E7.AE.A1.E7.A1.AC.E4.BB.B6.E6.80.A7.E8.83.BD.E5.BC.BA.E5.8A.B2.EF.BC.8C.E6.88.91.E4.B8.8D.E8.83.BD.E4.B8.80.E6.AC.A1.E6.89.A7.E8.A1.8C.E8.B6.85.E8.BF.87125.E4.B8.AA.E6.95.B0.E6.8D.AE.E5.BA.93.E5.B9.B6.E5.8F.91.E8.BF.9E.E6.8E.A5"><span class="tocnumber">4.4</span> <span class="toctext">尽管硬件性能强劲，我不能一次执行超过125个数据库并发连接</span></a></li>
</ul>
</li>
</ul>
</td></tr></table>
<p><br />
</p>
<a name=".E6.94.AF.E6.8C.81.E7.9A.84.E7.B3.BB.E7.BB.9F.E5.B9.B3.E5.8F.B0"></a><h2> <span class="mw-headline">支持的系统平台</span></h2>
<a name="PostgreSQL.E5.8F.AF.E4.BB.A5.E8.BF.90.E8.A1.8C.E5.9C.A8.E5.93.AA.E4.BA.9BWindows.E7.89.88.E6.9C.AC.E4.B8.8A.EF.BC.9F"></a><h4> <span class="mw-headline">PostgreSQL可以运行在哪些Windows版本上？</span></h4>
<p>PostgreSQL 9.0版本可运行在 Windows XP 及更高的版本平台上，可同时在32位及64位的Windows版本上运行。
</p><p>一般情况下在PostgreSQL某大的版本服务器软件发布之后发布的操作系统，则PostgreSQL前一个大的版本因未在这个操作系统上进行过测试，因此是不被官方支持的，如Windows 7是在PostgreSQL 8.4之后发布的操作系统，这样PostgreSQL 8.3将不会支持这个平台。相应地，当RHEL 6发布时，仅PostgreSQL 9.0.X系列将会支持在其上运行。我们的目标是在PostgreSQL新的大版本发布后才发布的新操作系统是支持的。
</p><p>对某平台上是否有一键可安装的程序包，可浏览安装包下载页面中的Windows相关下载链接。
</p><p>对非Widnows平台，可浏览FAQ和主要下载页面。
</p>
<a name=".E5.93.AA.E4.BA.9BWindows.E5.B9.B3.E5.8F.B0.E6.98.AF.E4.B8.8D.E8.A2.AB.E6.94.AF.E6.8C.81.E7.9A.84.EF.BC.9F"></a><h4> <span class="mw-headline">哪些Windows平台是不被支持的？</span></h4>
<p>PostgreSQL安装包在以下平台未测试或是不被官方支持：
</p>
<pre>   Windows XP Embedded
   Windows 2000
   Windows NT 4
   Windows NT 3.5.x
   Windows 95/98/ME/3.x
   Windows CE
   Windows Mobile 
</pre>
<a name=".E6.98.AF.E5.90.A6.E6.94.AF.E6.8C.81.E5.9C.A8Windows_NT4_.E5.92.8C_Windows_2000_.E7.9A.84.E5.B9.B3.E5.8F.B0.E4.B8.8B.E8.BF.90.E8.A1.8C.EF.BC.9F"></a><h4> <span class="mw-headline">是否支持在Windows NT4 和 Windows 2000 的平台下运行？</span></h4>
<p>虽然官方未表示支持，事实上PostgreSQL可以运行在Windows NT4和 Windows 2000系统上，但存在以下一些小问题：
</p>
<ol><li>安装程序不能正常运行，你需要自已手动从zip解压安装或是自己编译安装PostgreSQL。
</li><li>PostgreSQL利用NTFS文件系统中的一项功能“多分点(reparse points)”来完成表空间功能，“多分点”功能不能在NT4下使用，因此PostgreSQL的表空间功能自然也不能使用。
</li><li>在NT4下没有“runas.exe”程序，因此以管理员的帐号来启动PostgreSQL非常困难。
</li></ol>
<p>另外要说明的是，在Windows NT4 和Windows 2000下，我们对PostgreSQL系统所作的测试较少，所以新的版本也许不能在这些平台工作。
</p><p>请不要在邮件列表中对在这些过时平台下如何运行PostgreSQL请求帮助，当然，一些专业的公司可以帮助你。
</p><p><br />
</p>
<a name="PostgreSQL.E5.8F.AF.E4.BB.A5.E8.BF.90.E8.A1.8C.E5.9C.A8_Windows_95.2F98.2FME.E5.B9.B3.E5.8F.B0.E4.B8.8B.E5.90.97.EF.BC.9F"></a><h4> <span class="mw-headline">PostgreSQL可以运行在 Windows 95/98/ME平台下吗？</span></h4>
<p>PostgreSQL所必需的一些操作系统功能在这些操作系统下不存在，因此不能运行。如果你一定要在这些操作系统下运行PostgreSQL，你可以使用<a href="http://www.postgresql.org/files/documentation/faqs/text/FAQ_CYGWIN" class="external text" title="http://www.postgresql.org/files/documentation/faqs/text/FAQ_CYGWIN" rel="nofollow">Cygwin模拟环境版本</a>，该版本提供Win9X平台下的基本支持。
</p>
<a name=".E6.98.AF.E5.90.A6.E6.9C.89.E4.B8.BA64.E4.BD.8DWindows.E7.BC.96.E8.AF.91.E5.A5.BD.E7.9A.84PostgreSQL_64.E4.BD.8D.E7.89.88.E6.9C.AC.EF.BC.9F"></a><h4> <span class="mw-headline">是否有为64位Windows编译好的PostgreSQL 64位版本？</span></h4>
<p>是的，PostgreSQL 9.0有64位版本的安装包。
32位版本的PostgreSQL可以很好地运行在64位的操作系统平台下。虽然服务器不能直接使用大于1GB以上的共享内存，但它们仍可从内存超过4G的平台获益，因为Windows
内核将会使用内存对磁盘读取进行缓存。
</p>
<a name=".E5.AE.89.E8.A3.85"></a><h2> <span class="mw-headline">安装</span></h2>
<a name=".E5.9C.A8Windows.E4.B8.8A.E5.AE.89.E8.A3.85PostgreSQL.E9.9C.80.E8.A6.81.E5.81.9A.E4.BA.9B.E4.BB.80.E4.B9.88.EF.BC.9F"></a><h3> <span class="mw-headline"> 在Windows上安装PostgreSQL需要做些什么？ </span></h3>
<p>可浏览<a href="http://www.postgresql.org/download/windows" class="external text" title="http://www.postgresql.org/download/windows" rel="nofollow">PostgreSQL在Windows</a>平台下的下载页面，了解各种下载和安装PostgreSQL的方法。
</p><p>在Windows上安装PostgreSQL最简单的方法是从前面的下载页面下载由EnterpriseDB公司维护的一键安装程序，这个安装程序将在Windows上安装一个已编译好的PostgreSQL数据库软件、一个图形界面的管理程序pgAdmin、可选择的有附加功能的增值模块和过程语言。另外一个名叫StackBuilder的软件也会安装上，它以后
可以帮助你下载或安装附加模块，如ODBC或JDBC驱动。
</p>
<a name=".E8.87.AA.E5.B7.B2.E4.BB.8E.E6.BA.90.E4.BB.A3.E7.A0.81.E7.BC.96.E8.AF.91PostgreSQL.E6.80.8E.E4.B9.88.E5.81.9A.EF.BC.9F"></a><h3> <span class="mw-headline"> 自已从源代码编译PostgreSQL怎么做？</span></h3>
<p>在Windows下从源代码编译PostgreSQL的常见问题FAQ在<a href="http://www.postgresql.org/files/documentation/faqs/FAQ_MINGW.html" class="external text" title="http://www.postgresql.org/files/documentation/faqs/FAQ_MINGW.html" rel="nofollow">FAQ_MINGW.html</a> 里有编译过程的详细细节。
</p>
<a name=".E8.BF.90.E8.A1.8CPostgreSQL.E4.B8.BA.E4.BD.95.E9.9C.80.E8.A6.81.E4.B8.80.E4.B8.AA.E9.9D.9E.E7.AE.A1.E7.90.86.E5.91.98.E5.B8.90.E5.8F.B7.EF.BC.9F.28.E4.BF.AE.E6.94.B9.E5.9C.A8.E6.AD.A4.29"></a><h3> <span class="mw-headline"> 运行PostgreSQL为何需要一个非管理员帐号？(修改在此) </span></h3>
<p>当一个黑客利用一个软件的BUG进入一台计算机时，他就获得了这个软件运行所使用的用户帐号的权限。目前我们不知道PostgreSQL是否有这样的BUG，我们坚持使用非管理员帐号运行PostgreSQL的目的就是为了减少(万一)黑客利用在PostgreSQL发现的BUG可能对系统造成的损害。
</p><p>在UNIX的世界中，这已是一个常见的习惯了（即不使用管理员帐号进入系统），在Windows世界中，微软和其他软件供应商们为了提高系统的安全性，也正开始逐渐将这一操作变成标准习惯。
</p><p>Note, that with the release of PostgreSQL 8.2, it is possible to run under a administrative account. PostgreSQL 8.2 and above are able to irrevocably give up administrative rights at startup thus ensuring the rest of the system remains secure in the extremely unlikely event that PostgreSQL becomes compromised. 
</p>
<a name=".E5.8F.AF.E4.BB.A5.E5.B0.86PostgreSQL.E5.AE.89.E8.A3.85.E5.9C.A8FAT.E5.88.86.E5.8C.BA.E5.90.97.EF.BC.9F"></a><h3> <span class="mw-headline"> 可以将PostgreSQL安装在FAT分区吗？ </span></h3>
<p>PostgreSQL首要任务是保证数据的完整性。FAT和FAT32文件系统不能提供为达到这一目的的可靠性，而且FAT文件系统安全性的缺乏使得保护原始数据不被未经授权的更改无法保证，最后PostgreSQL使用一项“多分点(reparse points)”的功能来完成表空间功能，这一特性在FAT文件系统下也是无法实现的。
</p><p>NTFS文件系统是一个日志式文件系统，提供了好得多的可靠性和恢复功能，而且它有较全面的存取控制功能，并提供PostgreSQL要用到的多分点功能。
</p><p>基本上述原因，PostgreSQL安装程序只能在NTFS分区中完成数据库的初始化工作，而PostgreSQL服务器程序自身和一些工具程序可以安装在任何分区中。
</p><p>然而也要看到，在一些系统中，特别是开发人员的电脑上，也许只有一种FAT分区，在这种情况下，你可以象正常情况下一样安装PostgreSQL，
但不要进行数据库的初始化工作，在安装完成后，在FAT分区上手动执行initdb.exe程序，但安全性和可靠性就不能保证了，要想建立表空间也会失败。
</p>
<a name="PostgreSQL.E9.9C.80.E8.A6.81.E4.BB.80.E4.B9.88.E6.A0.B7.E7.9A.84.E6.96.87.E4.BB.B6.E7.B3.BB.E7.BB.9F.E6.9D.83.E9.99.90.EF.BC.9F"></a><h3> <span class="mw-headline"> PostgreSQL需要什么样的文件系统权限？ </span></h3>
<p>PostgreSQL的运行帐号需要对PostgreSQL目录下及所有子目录的读权限，需要对数据目录的写权限，特别是这个帐号不应分配对一些含有二进制程序文件的目录除了读权限以外的任何权限（所有安装目录下的目录权限，安装程序均会自动设置好，所以除非你想改变什么设置，一般情况下，安装后没有任何权限设置问题）。
</p><p>PostgreSQL还需要对系统DLL文件（如kernel32.dll和user32.dll以及其他DLL文件）的读权限， 默认这些权限是已分配的，但对CMD.exe程序的执行，在某些情况下会被锁定，需分配此权限。
</p><p>如果你在一个多用户系统中运行 PostgreSQL，你应该移除非管理员对PostgreSQL目录的操作权限，没有一个用户需要任何处理PostgreSQL文件的权限，所有的通讯都是通过libpq连接来完成，直接存取PostgreSQL数据文件会导致数据不安全和系统的不稳定！
</p><p><br />
</p>
<a name=".E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E4.B8.8D.E8.83.BD.E9.80.89.E6.8B.A9Unicode.E7.BC.96.E7.A0.81.EF.BC.9F"></a><h3> <span class="mw-headline"> 为什么我不能选择Unicode编码？</span></h3>
<p>在PostgreSQL 8.1及以后版本中，(UTF8)UNICODE编码在Windows平台上是完全支持的。
</p>
<a name=".E6.88.91.E5.AE.89.E8.A3.85.E4.BA.86.E4.B8.80.E4.B8.AA.E9.9D.9E.E8.8B.B1.E6.96.87.E7.9A.84.E8.AF.AD.E8.A8.80.EF.BC.8C.E4.BD.86.E6.89.80.E6.9C.89.E7.9A.84.E4.BF.A1.E6.81.AF.E9.83.BD.E6.98.BE.E7.A4.BA.E4.B8.BA.E8.8B.B1.E6.96.87.EF.BC.81"></a><h3> <span class="mw-headline"> 我安装了一个非英文的语言，但所有的信息都显示为英文！ </span></h3>
<p>在安装时的语言选择只是选择了安装程序的语言，要改变PostgreSQL服务器提示信息的语言， 首先确认你已安装了<i>自然语言支持(Natural language support)</i>特性，然后编辑postgresql.conf文件来改变<i>lc_messages</i>的参数数值来选择你想要的语言。
</p><p><br />
</p>
<a name=".5B.E8.AF.91.E8.80.85.E6.B7.BB.E5.8A.A0.5D.E5.A6.82.E4.BD.95.E4.BD.BF.E7.94.A8.E5.85.8D.E5.AE.89.E8.A3.85.E7.89.88.E6.9C.AC.E5.AE.8C.E5.85.A8.E6.89.8B.E5.8A.A8.E5.AE.89.E8.A3.85.EF.BC.9F"></a><h3> <span class="mw-headline"> [译者添加]如何使用免安装版本完全手动安装？</span></h3>
<p>以 Windows XP SP2 默认环境进行手动安装为例，其他版本未经测试。自8.2版本起，PostgreSQL应广大普通用户的要求，允许以管理员帐号直接执行手动安装所有步骤，所以就更方便了。
</p><p>执行下列步骤前，暂作以下假定：
</p>
<ul><li>PostgreSQL拟装在d:\postgresql 
</li><li>数据库以后拟存放在d:\postgresql\data
</li></ul>
<p><br />
首先下载 postgresql-8.3.0-2-binaries-no-installer.zip 最新版待用（下载地址：<a href="ftp://ftp.cn.postgresql.org/pub/postgresql/binary/v8.3.0/win32/" class="external free" title="ftp://ftp.cn.postgresql.org/pub/postgresql/binary/v8.3.0/win32/" rel="nofollow">ftp://ftp.cn.postgresql.org/pub/postgresql/binary/v8.3.0/win32/</a> ），下列步骤达到手工安装好PostgreSQL，初始化数据库，将PostgreSQL注册为服务。
</p><p>1、PostgreSQL.zip解压至d:\postgresql后，创建一个data目录；
</p><p>2、新开一个cmd窗口，并切换目录： cd d:\postgresql\bin ；
</p><p>3、initdb -D d:\postgresql\data -E UTF8 --locale=C
</p><p>4、pg_ctl register -D d:\postgresql\data -Npgsql 即将postgres注册为服务，服务名为pgsql；
</p><p><br />
以下为可选步骤了：
</p><p>5、net start pgsql即可启动postgresql，进行后续工作了；
</p><p>6、createdb -E UTF8 testdb，创建测试数据库
</p><p>7、psql testdb 进入交互方式，直接操作数据库；
</p><p>另上述第3步及6步为避免以后可能发生的亚州大字符集的乱码问题，统一使用UTF8。
</p><p><br />
</p>
<a name=".E5.B8.B8.E8.A7.81.E5.AE.89.E8.A3.85.E9.94.99.E8.AF.AF"></a><h2> <span class="mw-headline">常见安装错误 </span></h2>
<a name="PostgreSQL.E4.B8.8E.2F.E6.88.96.E5.85.B6.E5.AE.89.E8.A3.85.E7.A8.8B.E5.BA.8F.E5.9C.A8.E5.90.AF.E5.8A.A8.E6.97.B6.E5.B4.A9.E6.BA.83.E3.80.81.E4.B8.8D.E8.83.BD.E6.AD.A3.E5.B8.B8.E5.90.AF.E5.8A.A8.E6.88.96.E6.98.AF.E5.90.AF.E5.8A.A8.E5.90.8E.E6.8C.82.E8.B5.B7"></a><h3> <span class="mw-headline"> PostgreSQL与/或其安装程序在启动时崩溃、不能正常启动或是启动后挂起 </span></h3>
<p>目前针对这一现象最主要的原因是防病毒软件和防火墙软件造成的。如果你的电脑上安装有防火墙软件，可以试着禁用它或是卸载它。
如果你的电脑上安装有防病毒软件，你也必须禁止它对PostgreSQL用到目录的监控，如果这样还不能起作用，也许需要完全地从你的电脑中卸载它。
</p><p>有一些关于<i>nod32</i>防病毒产品的特例情况，如果你使用这个产品，在其高级选项中，将“postmaster.exe”加入到它不处理程序列表中去，这样就可以解决这个问题。
</p><p>也有一些关于Mcafee和Panda防病毒软件以及NetLimiter网络监控软件的特例情况报告，由于一些人能够使PostgreSQL与这些软件共同工作，
因此对那些PostgreSQL与这些软件不能正常运行的情况没有特别的或是推荐的方案，问题表现出安装有一定的特殊性，有时需要卸载（或重安装）。
</p><p>另外还有一个问题就是如果你安装了Cygwin，并且cygwin\bin目录在系统的搜索路径Path变量，在cygin目录下有一些与解释型语言（TCL、perl、python）相关的DLL文件可能含有BUG会导致安装程序或是安装好的PostgreSQL运行时挂起或崩溃，只要在运行安装程序前将cygwin\bin从系统路径中删除即可！
</p><p><br />
</p>
<a name=".E5.AE.89.E8.A3.85.E7.A8.8B.E5.BA.8F.E5.A3.B0.E7.A7.B0.E6.8C.87.E5.AE.9A.E7.9A.84.E5.B8.90.E5.8F.B7.E6.98.AF.E7.AE.A1.E7.90.86.E5.91.98.E5.B8.90.E5.8F.B7.EF.BC.8C.E4.BD.86.EF.BC.88.E4.BD.A0.E8.AE.A4.E4.B8.BA.EF.BC.89.E4.B8.8D.E6.98.AF.21"></a><h3> <span class="mw-headline"> 安装程序声称指定的帐号是管理员帐号，但（你认为）不是! </span></h3>
<p>最大可能是你所指定的帐号是一个管理员帐号或是Power用户组帐号，但是你还未意识到这一点。安装程序会特别针对管理员组和Power用户组的成员进行检查。按照你原来的方法使用本地用户和工作组再操作一次 -- 打开管理员工作组，看一下有哪些成员。然后检查任何属于管理员级别的工作组（域中或本地组），同时也检查这些组的成员。PostgreSQL可以对嵌套的工作组设置进行深入的检查。
</p><p><br />
</p>
<a name=".E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E7.B1.BB.E4.BC.BC_.22the_user_has_not_been_granted_the_requested_logon_type_at_this_computer.28.E7.94.A8.E6.88.B7.E6.B2.A1.E6.9C.89.E8.A2.AB.E5.88.86.E9.85.8D.E5.BF.85.E9.9C.80.E7.9A.84.E7.99.BB.E5.BD.95.E6.9D.83.E9.99.90.29.22.E7.9A.84.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF"></a><h3> <span class="mw-headline"> 我收到一个类似 "the user has not been granted the requested logon type at this computer(用户没有被分配必需的登录权限)"的错误信息 </span></h3>
<p>首先确认所指定的PostgreSQL帐号有“作为服务程序登录”和“本地登录”的权限，“本地登录”的权限只是在安装时需要，安装完成后可以根据安全策略的需要删除此权限（权限的分配和删除可进入MMC程序的“本地安全策略”的子栏目，“本地登录”的权限是默认的，“作为服务程序登录”的权限正常情况下是由安装程序分配的）。
</p><p>如果仍然存在此问题，打开“审核允许”权限（也在“本地安全策略”的子栏目中），同时也请通知我们，在这种情况下还需要什么权限。
</p><p>注意，如果你的计算机是“域”中成员，你的安全策略设置也许是在域服务器上使用工作组安全策略来设定的。
</p><p><br />
</p>
<a name=".E5.9C.A8.E5.AE.89.E8.A3.85.2F.E8.BF.90.E8.A1.8Cinitdb.E6.97.B6.EF.BC.8C.E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E6.9D.83.E9.99.90.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF"></a><h3> <span class="mw-headline"> 在安装/运行initdb时，我收到一个权限错误信息 </span></h3>
<p>确认PostgreSQL的运行帐号有对安装的PostgreSQL目录有（合适的）权限。安装程序会设置安装目录的权限，但并不设置其父目录的权限。详见问题 2.5 可浏览所必须的权限信息。
</p><p><br />
</p>
<a name=".E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF.E6.98.BE.E7.A4.BAPostgreSQL.E4.B8.8D.E8.83.BD.E5.A4.9F.E4.BB.8E.E4.B8.80.E4.B8.AA.E7.BB.88.E7.AB.AF.E6.9C.8D.E5.8A.A1.E4.BC.9A.E8.AF.9D.E4.B8.AD.E8.BF.9B.E8.A1.8C.E5.AE.89.E8.A3.85"></a><h3> <span class="mw-headline"> 我收到一个错误信息显示PostgreSQL不能够从一个终端服务会话中进行安装 </span></h3>
<p>很不幸，确实是这样。PostgreSQL的后台程序不能够从终端服务会话中运行，为了能够初始化数据库，安装程序需要启动一个独立的后台进程，因此安装程序需要从一个控制台中启动。如果你使用的是Windows Server 2003，你可以获取对真正控制台的远程存取权限， 为了做到这一点，可以通过执行<i>mstsc /console</i>程序来启动远程桌面连接，这会锁定服务器上的本地控制台而给你完全的控制权，在这种情况下，PostgreSQL的安装没有问题。
</p><p><br />
</p>
<a name=".E5.AE.89.E8.A3.85.E6.97.B6.E6.88.91.E6.94.B9.E5.8F.98.E4.BA.86.E7.9B.AE.E5.BD.95.EF.BC.8C.E4.BD.86PostgreSQL.E8.BF.98.E6.98.AF.E5.AE.89.E8.A3.85.E5.9C.A8.E7.BC.BA.E7.9C.81.E7.9A.84.E7.9B.AE.E5.BD.95"></a><h3> <span class="mw-headline"> 安装时我改变了目录，但PostgreSQL还是安装在缺省的目录 </span></h3>
<p>首先确认你更改了<i>根目录</i>的内容， PostgreSQL安装程序允许更改每一个模块的目录，如果你更改了根目录("PostgreSQL")，其他的子模块（如Database Server)将自动继承根目录的值作为缺省值，但是如果你只是更改了子模块的目录，系统还是会安装在缺省的目录。
</p><p><br />
</p>
<a name=".E5.9C.A8.E5.8D.87.E7.BA.A7.E5.AE.89.E8.A3.85.E6.97.B6.EF.BC.8C.E5.AE.89.E8.A3.85.E7.A8.8B.E5.BA.8F.E8.AF.B4.E6.88.91.E6.B2.A1.E6.9C.89.E6.9D.83.E9.99.90.E5.AE.89.E8.A3.85.E4.B8.80.E4.B8.AA.E6.9C.8D.E5.8A.A1.EF.BC.8C.E4.BD.86.E6.88.91.E6.98.AF.E4.BB.A5.E7.AE.A1.E7.90.86.E5.91.98.E7.99.BB.E5.BD.95.E7.9A.84"></a><h3> <span class="mw-headline"> 在升级安装时，安装程序说我没有权限安装一个服务，但我是以管理员登录的</span></h3>
<p>解决方法是首先<i>卸载</i>先前的版本，这并<i>不会</i>删除你的数据，然后确保将新版本安装到<i>同一目录</i>中，就可以解决这个问题了。需要注意的是这个方法仅仅适用于小的版本升级(如：8.0.1→8.0.2)，因为它们不需要转储/重载(dump/reload)。
</p>
<a name=".E6.88.91.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.E9.94.99.E8.AF.AF.E8.AF.B4.E5.AE.89.E8.A3.85.E5.8C.85.E6.97.A0.E6.B3.95.E6.89.93.E5.BC.80"></a><h3> <span class="mw-headline"> 我收到一个错误说安装包无法打开</span></h3>
<p>可能有两个原因。最可能的原因是你直接在ZIP文件中双击MSI所致，你必须将ZIP完全解压到一个临时目录中以后再运行MSI文件。另一个原因是你下载的文件已经被损坏了，可以尝试从另一个不同的镜像站点重新下载来解决问题。
</p><p><br />
</p>
<a name=".E5.B8.B8.E8.A7.81.E8.BF.90.E8.A1.8C.E9.94.99.E8.AF.AF"></a><h2> <span class="mw-headline">常见运行错误</span></h2>
<a name=".E4.B8.BA.E4.BD.95.E6.88.91.E5.9C.A8.E5.AE.89.E8.A3.85.E4.B8.80.E4.B8.AA.E8.BF.87.E7.A8.8B.E8.AF.AD.E8.A8.80.E6.97.B6.E4.BC.9A.E6.94.B6.E5.88.B0.E4.B8.80.E4.B8.AA.22dynamic_load_error.22.E9.94.99.E8.AF.AF.EF.BC.9F"></a><h3> <span class="mw-headline">为何我在安装一个过程语言时会收到一个"dynamic load error"错误？ </span></h3>
<p>大多数情况下这表示与某个过程语言相关的DLL文件丢失，PostgreSQL 的DLL文件只能包含了该语言的入口调用，
还需要该过程语言自身的DLL文件存在于系统的搜索路径PATH中。不同的过程语言需要的不同的DLL文件，详情可参见
<a href="http://pginstaller.projects.postgresql.org/" class="external text" title="http://pginstaller.projects.postgresql.org/" rel="nofollow">安装指南</a> 。
</p><p><br />
为了找出具体哪一个DLL文件丢失，你可以使用来自微软的依赖性检查工具，它在微软的支持软件工具包中，在一个单独的安装光盘上，只要运行了<i>depends plpython.dll</i>（对PL/python语言来说）就可以显示出哪一个DLL文件不存在了。
</p><p><br />
</p>
<a name=".E8.99.BD.E7.84.B6.E6.88.91.E5.8F.AA.E5.90.AF.E5.8A.A8.E4.BA.86.E6.9C.8D.E5.8A.A1.E5.99.A8.E4.B8.80.E6.AC.A1.E4.BD.86.E5.8F.91.E7.8E.B0.E6.9C.89.E5.BE.88.E5.A4.9A.E7.9A.84postgres.exe.E8.BF.9B.E7.A8.8B"></a><h3> <span class="mw-headline"> 虽然我只启动了服务器一次但发现有很多的postgres.exe进程</span></h3>
<p>这是正常情况。PostgreSQL使用多进程体系结构，在一个无用户连接的空系统中会有2至5个进程，一旦用户开始连接服务器，PostgreSQL的进程数就会增加。
</p>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E8.AE.BE.E7.BD.AE.E7.8E.AF.E5.A2.83.E5.8F.98.E9.87.8F.EF.BC.9F"></a><h3> <span class="mw-headline">我如何设置环境变量？</span></h3>
<p>PostgreSQL使用环境变量来设定几项运行参数。 在常见的Windows版本中要改变一个环境变量，先选择“我的电脑”－－&gt;属性－－&gt;然后进入高级选项。注意此时有两组环境变量－－一组是系统级的，所有用户均有效，一组是仅限当前用户生效的。如果你想让一个环境变量影响PostgreSQL服务，你必须改为系统级的变量，在修改过变量数据后，重新启动PostgreSQL服务程序。
</p>
<a name=".E5.B0.BD.E7.AE.A1.E7.A1.AC.E4.BB.B6.E6.80.A7.E8.83.BD.E5.BC.BA.E5.8A.B2.EF.BC.8C.E6.88.91.E4.B8.8D.E8.83.BD.E4.B8.80.E6.AC.A1.E6.89.A7.E8.A1.8C.E8.B6.85.E8.BF.87125.E4.B8.AA.E6.95.B0.E6.8D.AE.E5.BA.93.E5.B9.B6.E5.8F.91.E8.BF.9E.E6.8E.A5"></a><h3> <span class="mw-headline">尽管硬件性能强劲，我不能一次执行超过125个数据库并发连接</span></h3>
<p>在作为一项服务运行时，你可能有大约125个并发连接不能成功的经历。这是由于PostgreSQL所使用的库文件需要操作系统的user32.dll从一个叫桌面堆内存区那里申请内存。堆内存区每次分配给一个非交互的连接会话大约为512KB。而每一个Postgres的进程需大约消耗3.2KB堆内存，这样再结合其他一些系统消耗就会在大约125个连接时消耗完堆内存。这种情况在从命令行启动PostgreSQL程序时不会发生（更精确地说，也会发生，不过连接数会变得非常高），因为交互式的会话一般会被分配高达3MB堆内存。
</p><p>你可以根据微软知识库的说明，通过更改注册表中第三个SharedSection的值来增加非交互性桌面堆内存。注意这需要非常小心，因为过高的数值也会影响到系统的启动。
</p>


	</div>
	</div>
	</div>
</div>
