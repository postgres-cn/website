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
				<li class="active">一般使用常见问题汇总(FAQ)... (更新于: <?php echo $last_modified ; ?>)</li>
            </ol>

            <div class="well well-sm" style="position: relative;">

<br>
<p>本文档的英文最新版本可以在[ <a href="http://wiki.postgresql.org/wiki/FAQ" target=_blank>这里Wiki</a> ]查看。
</p>
<table id="toc" class="toc" summary="目录"><tr><td><div id="toctitle"><h2>目录</h2></div>
<ul>
<li class="toclevel-1"><a href="#.E5.B8.B8.E8.A7.81.E9.97.AE.E9.A2.98"><span class="tocnumber">1</span> <span class="toctext">常见问题</span></a>
<ul>
<li class="toclevel-2"><a href="#PostgreSQL_.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F.E8.AF.A5.E6.80.8E.E4.B9.88.E5.8F.91.E9.9F.B3.EF.BC.9FPostgres.E5.8F.88.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F"><span class="tocnumber">1.1</span> <span class="toctext">PostgreSQL 是什么？该怎么发音？Postgres又是什么？</span></a></li>
<li class="toclevel-2"><a href="#.E8.B0.81.E6.8E.A7.E5.88.B6PostgreSQL.EF.BC.9F"><span class="tocnumber">1.2</span> <span class="toctext">谁控制PostgreSQL？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E7.9A.84.E7.89.88.E6.9D.83.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F"><span class="tocnumber">1.3</span> <span class="toctext">PostgreSQL的版权是什么？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL_.E5.8F.AF.E4.BB.A5.E8.BF.90.E8.A1.8C.E5.9C.A8.E5.93.AA.E4.BA.9B.E6.93.8D.E4.BD.9C.E7.B3.BB.E7.BB.9F.E5.B9.B3.E5.8F.B0.E4.B8.8A.EF.BC.9F"><span class="tocnumber">1.4</span> <span class="toctext">PostgreSQL 可以运行在哪些操作系统平台上？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E4.BB.8E.E5.93.AA.E9.87.8C.E8.83.BD.E5.BE.97.E5.88.B0PostgreSQL.EF.BC.9F"><span class="tocnumber">1.5</span> <span class="toctext">我从哪里能得到PostgreSQL？</span></a></li>
<li class="toclevel-2"><a href="#.E6.9C.80.E6.96.B0.E7.89.88.E7.9A.84PostgreSQL.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F"><span class="tocnumber">1.6</span> <span class="toctext">最新版的PostgreSQL是什么？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E4.BB.8E.E5.93.AA.E9.87.8C.E8.83.BD.E5.BE.97.E5.88.B0.E5.AF.B9PostgreSQL.E7.9A.84.E6.94.AF.E6.8C.81.EF.BC.9F"><span class="tocnumber">1.7</span> <span class="toctext">我从哪里能得到对PostgreSQL的支持？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E6.8F.90.E4.BA.A4.E4.B8.80.E4.B8.AABUG.E6.8A.A5.E5.91.8A.EF.BC.9F"><span class="tocnumber">1.8</span> <span class="toctext">我如何提交一个BUG报告？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E4.BA.86.E8.A7.A3.E5.B7.B2.E7.9F.A5.E7.9A.84_BUG_.E6.88.96.E6.9A.82.E7.BC.BA.E7.9A.84.E5.8A.9F.E8.83.BD.EF.BC.9F"><span class="tocnumber">1.9</span> <span class="toctext">我如何了解已知的 BUG 或暂缺的功能？</span></a></li>
<li class="toclevel-2"><a href="#.E8.83.BD.E5.A4.9F.E8.8E.B7.E5.8F.96.E7.9A.84.E6.9C.80.E6.96.B0.E6.96.87.E6.A1.A3.E6.9C.89.E5.93.AA.E4.BA.9B.EF.BC.9F"><span class="tocnumber">1.10</span> <span class="toctext">能够获取的最新文档有哪些？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.BA.94.E8.AF.A5.E6.80.8E.E6.A0.B7.E5.AD.A6.E4.B9.A0_SQL_.EF.BC.9F"><span class="tocnumber">1.11</span> <span class="toctext">我应该怎样学习 SQL ？</span></a></li>
<li class="toclevel-2"><a href="#.E5.A6.82.E4.BD.95.E6.8F.90.E4.BA.A4.E8.A1.A5.E4.B8.81.E6.88.96.E6.98.AF.E5.8A.A0.E5.85.A5.E5.BC.80.E5.8F.91.E9.98.9F.E4.BC.8D.EF.BC.9F"><span class="tocnumber">1.12</span> <span class="toctext">如何提交补丁或是加入开发队伍？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E5.92.8C.E5.85.B6.E4.BB.96.E6.95.B0.E6.8D.AE.E5.BA.93.E7.B3.BB.E7.BB.9F.E6.AF.94.E8.B5.B7.E6.9D.A5.E5.A6.82.E4.BD.95.EF.BC.9F"><span class="tocnumber">1.13</span> <span class="toctext">PostgreSQL和其他数据库系统比起来如何？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E5.8F.AF.E4.BB.A5.E5.A4.84.E7.90.86.E6.9C.80.E8.BF.91.E5.90.84.E4.B8.AA.E5.9B.BD.E5.AE.B6.E5.A4.8F.E6.97.B6.E5.88.B6.E7.9A.84.E5.8F.98.E5.8C.96.E5.90.97.3F"><span class="tocnumber">1.14</span> <span class="toctext">PostgreSQL可以处理最近各个国家夏时制的变化吗?</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.E7.94.A8.E6.88.B7.E5.AE.A2.E6.88.B7.E7.AB.AF.E9.97.AE.E9.A2.98"><span class="tocnumber">2</span> <span class="toctext">用户客户端问题</span></a>
<ul>
<li class="toclevel-2"><a href="#.E6.88.91.E4.BB.AC.E5.8F.AF.E4.BB.A5.E7.94.A8.E4.BB.80.E4.B9.88.E8.AF.AD.E8.A8.80.E5.92.8CPostgreSQL.E6.89.93.E4.BA.A4.E9.81.93.EF.BC.9F"><span class="tocnumber">2.1</span> <span class="toctext">我们可以用什么语言和PostgreSQL打交道？</span></a></li>
<li class="toclevel-2"><a href="#.E6.9C.89.E4.BB.80.E4.B9.88.E5.B7.A5.E5.85.B7.E5.8F.AF.E4.BB.A5.E6.8A.8APostgreSQL.E7.94.A8.E4.BA.8E_Web_.E9.A1.B5.E9.9D.A2.EF.BC.9F"><span class="tocnumber">2.2</span> <span class="toctext">有什么工具可以把PostgreSQL用于 Web 页面？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E6.8B.A5.E6.9C.89.E5.9B.BE.E5.BD.A2.E7.94.A8.E6.88.B7.E7.95.8C.E9.9D.A2.E5.90.97.EF.BC.9F"><span class="tocnumber">2.3</span> <span class="toctext">PostgreSQL拥有图形用户界面吗？</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.E7.B3.BB.E7.BB.9F.E7.AE.A1.E7.90.86.E9.97.AE.E9.A2.98"><span class="tocnumber">3</span> <span class="toctext">系统管理问题</span></a>
<ul>
<li class="toclevel-2"><a href="#.E6.88.91.E6.80.8E.E6.A0.B7.E8.83.BD.E6.8A.8APostgreSQL.E8.A3.85.E5.9C.A8_.2Fusr.2Flocal.2Fpgsql_.E4.BB.A5.E5.A4.96.E7.9A.84.E5.9C.B0.E6.96.B9.EF.BC.9F"><span class="tocnumber">3.1</span> <span class="toctext">我怎样能把PostgreSQL装在 /usr/local/pgsql 以外的地方？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E6.8E.A7.E5.88.B6.E6.9D.A5.E8.87.AA.E5.85.B6.E4.BB.96.E7.94.B5.E8.84.91.E7.9A.84.E8.BF.9E.E6.8E.A5.EF.BC.9F"><span class="tocnumber">3.2</span> <span class="toctext">我如何控制来自其他电脑的连接？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.80.8E.E6.A0.B7.E8.B0.83.E6.95.B4.E6.95.B0.E6.8D.AE.E5.BA.93.E5.BC.95.E6.93.8E.E4.BB.A5.E8.8E.B7.E5.BE.97.E6.9B.B4.E5.A5.BD.E7.9A.84.E6.80.A7.E8.83.BD.EF.BC.9F"><span class="tocnumber">3.3</span> <span class="toctext">我怎样调整数据库引擎以获得更好的性能？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E9.87.8C.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97.E4.BB.80.E4.B9.88.E6.A0.B7.E7.9A.84.E8.B0.83.E8.AF.95.E7.89.B9.E6.80.A7.EF.BC.9F"><span class="tocnumber">3.4</span> <span class="toctext">PostgreSQL里可以获得什么样的调试特性？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E5.9C.A8.E8.AF.95.E5.9B.BE.E8.BF.9E.E6.8E.A5.E6.97.B6.E6.94.B6.E5.88.B0.E2.80.9CSorry.2C_too_many_clients.EF.BC.88.E5.B7.B2.E6.9C.89.E5.A4.AA.E5.A4.9A.E7.94.A8.E6.88.B7.E8.BF.9E.E6.8E.A5.EF.BC.89.E2.80.9D.E6.B6.88.E6.81.AF.EF.BC.9F"><span class="tocnumber">3.5</span> <span class="toctext">为什么在试图连接时收到“Sorry, too many clients（已有太多用户连接）”消息？</span></a></li>
<li class="toclevel-2"><a href="#PostgreSQL.E7.9A.84.E5.8D.87.E7.BA.A7.E8.BF.87.E7.A8.8B.E6.9C.89.E5.93.AA.E4.BA.9B.E5.86.85.E5.AE.B9_.EF.BC.9F"><span class="tocnumber">3.6</span> <span class="toctext">PostgreSQL的升级过程有哪些内容 ？</span></a></li>
<li class="toclevel-2"><a href="#.28.E4.BD.BF.E7.94.A8PostgreSQL.29.E6.88.91.E9.9C.80.E8.A6.81.E4.BD.BF.E7.94.A8.E4.BB.80.E4.B9.88.E8.AE.A1.E7.AE.97.E6.9C.BA.E7.A1.AC.E4.BB.B6_.EF.BC.9F"><span class="tocnumber">3.7</span> <span class="toctext">(使用PostgreSQL)我需要使用什么计算机硬件 ？</span></a></li>
</ul>
</li>
<li class="toclevel-1"><a href="#.E6.93.8D.E4.BD.9C.E9.97.AE.E9.A2.98"><span class="tocnumber">4</span> <span class="toctext">操作问题</span></a>
<ul>
<li class="toclevel-2"><a href="#.E5.A6.82.E4.BD.95.E5.8F.AA.E9.80.89.E6.8B.A9.E4.B8.80.E4.B8.AA.E6.9F.A5.E8.AF.A2.E7.BB.93.E6.9E.9C.E7.9A.84.E5.A4.B4.E5.87.A0.E8.A1.8C.EF.BC.9F.E6.88.96.E6.98.AF.E9.9A.8F.E6.9C.BA.E7.9A.84.E4.B8.80.E8.A1.8C.EF.BC.9F"><span class="tocnumber">4.1</span> <span class="toctext">如何只选择一个查询结果的头几行？或是随机的一行？</span></a></li>
<li class="toclevel-2"><a href="#.E5.A6.82.E4.BD.95.E6.9F.A5.E7.9C.8B.E8.A1.A8.E3.80.81.E7.B4.A2.E5.BC.95.E3.80.81.E6.95.B0.E6.8D.AE.E5.BA.93.E4.BB.A5.E5.8F.8A.E7.94.A8.E6.88.B7.E7.9A.84.E5.AE.9A.E4.B9.89.EF.BC.9F.E5.A6.82.E4.BD.95.E6.9F.A5.E7.9C.8Bpsql.E9.87.8C.E7.94.A8.E5.88.B0.E7.9A.84.E6.9F.A5.E8.AF.A2.E6.8C.87.E4.BB.A4.E5.B9.B6.E6.98.BE.E7.A4.BA.E5.AE.83.E4.BB.AC.EF.BC.9F"><span class="tocnumber">4.2</span> <span class="toctext">如何查看表、索引、数据库以及用户的定义？如何查看psql里用到的查询指令并显示它们？</span></a></li>
<li class="toclevel-2"><a href="#.E5.A6.82.E4.BD.95.E6.9B.B4.E6.94.B9.E4.B8.80.E4.B8.AA.E5.AD.97.E6.AE.B5.E7.9A.84.E6.95.B0.E6.8D.AE.E7.B1.BB.E5.9E.8B.EF.BC.9F"><span class="tocnumber">4.3</span> <span class="toctext">如何更改一个字段的数据类型？</span></a></li>
<li class="toclevel-2"><a href="#.E5.8D.95.E6.9D.A1.E8.AE.B0.E5.BD.95.EF.BC.8C.E5.8D.95.E4.B8.AA.E8.A1.A8.EF.BC.8C.E5.8D.95.E4.B8.AA.E6.95.B0.E6.8D.AE.E5.BA.93.E7.9A.84.E6.9C.80.E5.A4.A7.E9.99.90.E5.88.B6.E6.98.AF.E5.A4.9A.E5.B0.91.EF.BC.9F"><span class="tocnumber">4.4</span> <span class="toctext">单条记录，单个表，单个数据库的最大限制是多少？</span></a></li>
<li class="toclevel-2"><a href="#.E5.AD.98.E5.82.A8.E4.B8.80.E4.B8.AA.E5.85.B8.E5.9E.8B.E7.9A.84.E6.96.87.E6.9C.AC.E6.96.87.E4.BB.B6.E9.87.8C.E7.9A.84.E6.95.B0.E6.8D.AE.E9.9C.80.E8.A6.81.E5.A4.9A.E5.B0.91.E7.A3.81.E7.9B.98.E7.A9.BA.E9.97.B4.EF.BC.9F"><span class="tocnumber">4.5</span> <span class="toctext">存储一个典型的文本文件里的数据需要多少磁盘空间？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E7.9A.84.E6.9F.A5.E8.AF.A2.E5.BE.88.E6.85.A2.EF.BC.9F.E4.B8.BA.E4.BB.80.E4.B9.88.E8.BF.99.E4.BA.9B.E6.9F.A5.E8.AF.A2.E6.B2.A1.E6.9C.89.E5.88.A9.E7.94.A8.E7.B4.A2.E5.BC.95.EF.BC.9F"><span class="tocnumber">4.6</span> <span class="toctext">为什么我的查询很慢？为什么这些查询没有利用索引？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E6.89.8D.E8.83.BD.E7.9C.8B.E5.88.B0.E6.9F.A5.E8.AF.A2.E4.BC.98.E5.8C.96.E5.99.A8.E6.98.AF.E6.80.8E.E6.A0.B7.E8.AF.84.E4.BC.B0.E5.A4.84.E7.90.86.E6.88.91.E7.9A.84.E6.9F.A5.E8.AF.A2.EF.BC.9F"><span class="tocnumber">4.7</span> <span class="toctext">我如何才能看到查询优化器是怎样评估处理我的查询？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.80.8E.E6.A0.B7.E5.81.9A.E6.AD.A3.E5.88.99.E8.A1.A8.E8.BE.BE.E5.BC.8F.E6.90.9C.E7.B4.A2.E5.92.8C.E5.A4.A7.E5.B0.8F.E5.86.99.E6.97.A0.E5.85.B3.E7.9A.84.E6.AD.A3.E5.88.99.E8.A1.A8.E8.BE.BE.E5.BC.8F.E6.9F.A5.E6.89.BE.EF.BC.9F.E6.80.8E.E6.A0.B7.E5.88.A9.E7.94.A8.E7.B4.A2.E5.BC.95.E8.BF.9B.E8.A1.8C.E5.A4.A7.E5.B0.8F.E5.86.99.E6.97.A0.E5.85.B3.E6.9F.A5.E6.89.BE.EF.BC.9F"><span class="tocnumber">4.8</span> <span class="toctext">我怎样做正则表达式搜索和大小写无关的正则表达式查找？怎样利用索引进行大小写无关查找？</span></a></li>
<li class="toclevel-2"><a href="#.E5.9C.A8.E4.B8.80.E4.B8.AA.E6.9F.A5.E8.AF.A2.E9.87.8C.EF.BC.8C.E6.88.91.E6.80.8E.E6.A0.B7.E6.A3.80.E6.B5.8B.E4.B8.80.E4.B8.AA.E5.AD.97.E6.AE.B5.E6.98.AF.E5.90.A6.E4.B8.BA_NULL_.EF.BC.9F.E6.88.91.E5.A6.82.E4.BD.95.E6.89.8D.E8.83.BD.E5.87.86.E7.A1.AE.E6.8E.92.E5.BA.8F.E8.80.8C.E4.B8.8D.E8.AE.BA.E6.9F.90.E5.AD.97.E6.AE.B5.E6.98.AF.E5.90.A6.E5.90.AB_NULL_.E5.80.BC.EF.BC.9F"><span class="tocnumber">4.9</span> <span class="toctext">在一个查询里，我怎样检测一个字段是否为 NULL ？我如何才能准确排序而不论某字段是否含 NULL 值？</span></a></li>
<li class="toclevel-2"><a href="#.E5.90.84.E7.A7.8D.E5.AD.97.E7.AC.A6.E7.B1.BB.E5.9E.8B.E4.B9.8B.E9.97.B4.E6.9C.89.E4.BB.80.E4.B9.88.E4.B8.8D.E5.90.8C.EF.BC.9F"><span class="tocnumber">4.10</span> <span class="toctext">各种字符类型之间有什么不同？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.80.8E.E6.A0.B7.E5.88.9B.E5.BB.BA.E4.B8.80.E4.B8.AA.E5.BA.8F.E5.88.97.E5.8F.B7.E6.88.96.E6.98.AF.E8.87.AA.E5.8A.A8.E9.80.92.E5.A2.9E.E7.9A.84.E5.AD.97.E6.AE.B5.EF.BC.9F"><span class="tocnumber">4.11</span> <span class="toctext">我怎样创建一个序列号或是自动递增的字段？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E8.8E.B7.E5.BE.97.E4.B8.80.E4.B8.AA.E6.8F.92.E5.85.A5.E7.9A.84.E5.BA.8F.E5.88.97.E5.8F.B7.E7.9A.84.E5.80.BC.EF.BC.9F"><span class="tocnumber">4.12</span> <span class="toctext">我如何获得一个插入的序列号的值？</span></a></li>
<li class="toclevel-2"><a href="#.E5.90.8C.E6.97.B6.E4.BD.BF.E7.94.A8_currval.28.29_.E4.BC.9A.E5.AF.BC.E8.87.B4.E5.92.8C.E5.85.B6.E4.BB.96.E7.94.A8.E6.88.B7.E7.9A.84.E5.86.B2.E7.AA.81.E6.83.85.E5.86.B5.E5.90.97.EF.BC.9F"><span class="tocnumber">4.13</span> <span class="toctext">同时使用 currval() 会导致和其他用户的冲突情况吗？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E4.B8.8D.E5.9C.A8.E4.BA.8B.E5.8A.A1.E5.BC.82.E5.B8.B8.E4.B8.AD.E6.AD.A2.E5.90.8E.E9.87.8D.E7.94.A8.E5.BA.8F.E5.88.97.E5.8F.B7.E5.91.A2.EF.BC.9F.E4.B8.BA.E4.BB.80.E4.B9.88.E5.9C.A8.E5.BA.8F.E5.88.97.E5.8F.B7.E5.AD.97.E6.AE.B5.E7.9A.84.E5.8F.96.E5.80.BC.E4.B8.AD.E5.AD.98.E5.9C.A8.E9.97.B4.E6.96.AD.E5.91.A2.EF.BC.9F"><span class="tocnumber">4.14</span> <span class="toctext">为什么不在事务异常中止后重用序列号呢？为什么在序列号字段的取值中存在间断呢？</span></a></li>
<li class="toclevel-2"><a href="#.E4.BB.80.E4.B9.88.E6.98.AF_OID_.EF.BC.9F.E4.BB.80.E4.B9.88.E6.98.AF_CTID_.EF.BC.9F"><span class="tocnumber">4.15</span> <span class="toctext">什么是 OID ？什么是 CTID ？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E6.94.B6.E5.88.B0.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF.E2.80.9CERROR:_Memory_exhausted_in_AllocSetAlloc.28.29.E2.80.9D.EF.BC.9F"><span class="tocnumber">4.16</span> <span class="toctext">为什么我收到错误信息“ERROR: Memory exhausted in AllocSetAlloc()”？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E6.89.8D.E8.83.BD.E7.9F.A5.E9.81.93.E6.89.80.E8.BF.90.E8.A1.8C.E7.9A.84PostgreSQL.E7.9A.84.E7.89.88.E6.9C.AC.EF.BC.9F"><span class="tocnumber">4.17</span> <span class="toctext">我如何才能知道所运行的PostgreSQL的版本？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E5.88.9B.E5.BB.BA.E4.B8.80.E4.B8.AA.E7.BC.BA.E7.9C.81.E5.80.BC.E6.98.AF.E5.BD.93.E5.89.8D.E6.97.B6.E9.97.B4.E7.9A.84.E5.AD.97.E6.AE.B5.EF.BC.9F"><span class="tocnumber">4.18</span> <span class="toctext">我如何创建一个缺省值是当前时间的字段？</span></a></li>
<li class="toclevel-2"><a href="#.E6.88.91.E6.80.8E.E6.A0.B7.E8.BF.9B.E8.A1.8C_outer_join_.EF.BC.88.E5.A4.96.E8.BF.9E.E6.8E.A5.EF.BC.89.EF.BC.9F"><span class="tocnumber">4.19</span> <span class="toctext">我怎样进行 outer join （外连接）？</span></a></li>
<li class="toclevel-2"><a href="#.E5.A6.82.E4.BD.95.E4.BD.BF.E7.94.A8.E6.B6.89.E5.8F.8A.E5.A4.9A.E4.B8.AA.E6.95.B0.E6.8D.AE.E5.BA.93.E7.9A.84.E6.9F.A5.E8.AF.A2.EF.BC.9F"><span class="tocnumber">4.20</span> <span class="toctext">如何使用涉及多个数据库的查询？</span></a></li>
<li class="toclevel-2"><a href="#.E5.A6.82.E4.BD.95.E8.AE.A9.E5.87.BD.E6.95.B0.E8.BF.94.E5.9B.9E.E5.A4.9A.E8.A1.8C.E6.88.96.E5.A4.9A.E5.88.97.E6.95.B0.E6.8D.AE.EF.BC.9F"><span class="tocnumber">4.21</span> <span class="toctext">如何让函数返回多行或多列数据？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E5.9C.A8.E4.BD.BF.E7.94.A8PL.2FPgSQL.E5.87.BD.E6.95.B0.E5.AD.98.E5.8F.96.E4.B8.B4.E6.97.B6.E8.A1.A8.E6.97.B6.E4.BC.9A.E6.94.B6.E5.88.B0.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF.E2.80.9Crelation_with_OID_.23.23.23.23.23_does_not_exist.E2.80.9D.EF.BC.9F"><span class="tocnumber">4.22</span> <span class="toctext">为什么我在使用PL/PgSQL函数存取临时表时会收到错误信息“relation with OID ##### does not exist”？</span></a></li>
<li class="toclevel-2"><a href="#.E7.9B.AE.E5.89.8D.E6.9C.89.E5.93.AA.E4.BA.9B.E6.95.B0.E6.8D.AE.E5.A4.8D.E5.88.B6.E6.96.B9.E6.A1.88.E5.8F.AF.E7.94.A8.EF.BC.9F"><span class="tocnumber">4.23</span> <span class="toctext">目前有哪些数据复制方案可用？</span></a></li>
<li class="toclevel-2"><a href="#.E4.B8.BA.E4.BD.95.E6.9F.A5.E8.AF.A2.E7.BB.93.E6.9E.9C.E6.98.BE.E7.A4.BA.E7.9A.84.E8.A1.A8.E5.90.8D.E6.88.96.E5.88.97.E5.90.8D.E4.B8.8E.E6.88.91.E7.9A.84.E6.9F.A5.E8.AF.A2.E8.AF.AD.E5.8F.A5.E4.B8.AD.E7.9A.84.E4.B8.8D.E5.90.8C.EF.BC.9F.E4.B8.BA.E4.BD.95.E5.A4.A7.E5.86.99.E7.8A.B6.E6.80.81.E4.B8.8D.E8.83.BD.E4.BF.9D.E7.95.99.EF.BC.9F"><span class="tocnumber">4.24</span> <span class="toctext">为何查询结果显示的表名或列名与我的查询语句中的不同？为何大写状态不能保留？</span></a></li>
</ul>
</li>
</ul>
</td></tr></table><script type="text/javascript"> if (window.showTocToggle) { var tocShowText = "显示"; var tocHideText = "隐藏"; showTocToggle(); } </script>
<a name=".E5.B8.B8.E8.A7.81.E9.97.AE.E9.A2.98"></a><h2> <span class="mw-headline">常见问题</span></h2>
<a name="PostgreSQL_.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F.E8.AF.A5.E6.80.8E.E4.B9.88.E5.8F.91.E9.9F.B3.EF.BC.9FPostgres.E5.8F.88.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F"></a><h3><span class="mw-headline">PostgreSQL 是什么？该怎么发音？Postgres又是什么？</span></h3>
<p>PostgreSQL 读作 Post-Gres-Q-L，(想听一下其发音的人员可从这里下载声音文件： <a href="http://www.postgresql.org/files/postgresql.mp3" class="external text" title="http://www.postgresql.org/files/postgresql.mp3" rel="nofollow">MP3文件</a> ) 。
</p><p>PostgreSQL 是面向目标的关系数据库系统，它具有传统商业数据库系统的所有功能，同时又含有将在下一代 DBMS 系统的使用的增强特性。PostgreSQL 是自由免费的，并且所有源代码都可以获得。
</p><p>PostgreSQL 的开发队伍主要为志愿者，他们遍布世界各地并通过互联网进行联系，这是一个社区开发项目，它不被任何公司控制。 如想加入开发队伍，请参见开发人员常见问题（FAQ） <a href="http://www.postgresql.org/files/documentation/faqs/FAQ_DEV.html" class="external free" title="http://www.postgresql.org/files/documentation/faqs/FAQ_DEV.html" rel="nofollow">http://www.postgresql.org/files/documentation/faqs/FAQ_DEV.html</a>
</p>
<a name=".E8.B0.81.E6.8E.A7.E5.88.B6PostgreSQL.EF.BC.9F"></a><h3> <span class="mw-headline">谁控制PostgreSQL？</span></h3>
<p>如果你在寻找PostgreSQL的掌门人，或是什么中央委员会，或是什么所属公司，你只能放弃了---因为一个也不存在，但我们的确有一个 核心委员会和CVS管理组，但这些工作组的设立主要是为了进行管理工作而不是对PostgreSQL进行独占式控制，PostgreSQL项目是由任何人均 可参加的开发人员社区和所有用户控制的，你所需要做的就是订阅邮件列表，参与讨论即可（要参与PostgreSQL的开发，详见开发人员常见问题 <a href="http://www.postgresql.org/docs/faqs.FAQ_DEV.html" class="external text" title="http://www.postgresql.org/docs/faqs.FAQ_DEV.html" rel="nofollow">Developer's FAQ</a> 获取信息）。
</p>
<a name="PostgreSQL.E7.9A.84.E7.89.88.E6.9D.83.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F"></a><h3> <span class="mw-headline">PostgreSQL的版权是什么？</span></h3>
<p>PostgreSQL的发布遵从经典的BSD版权。它允许用户不限目的地使用PostgreSQL，甚至你可以销售PostgreSQL而不含源代码也可以，唯一的限制就是你不能因软件自身问题而向我们追诉法律责任，另外就是要求所有的软件拷贝中须包括以下版权声明。下面就是我们所使用的 BSD版权声明内容：
</p><p>PostgreSQL数据库管理系统
</p><p>部分版权（c）1996-2005，PostgreSQL 全球开发小组，部分版权（c）1994-1996 加州大学董事
</p><p>（Portions copyright (c) 1996-2005,PostgreSQL Global Development Group Portions Copyright (c) 1994-6 Regents of the University of California）
</p><p>允许为任何目的使用，拷贝，修改和分发这个软件和它的文档而不收取任何费用， 并且无须签署因此而产生的证明，前提是上面的版权声明和本段以及下面两段文字出现在所有拷贝中。
</p><p>（Permission to use, copy, modify, and distribute this software and its documentation for any purpose, without fee, and without a written agreement is hereby granted, provided that the above copyright notice and this paragraph and the following two paragraphs appear in all copies.）
</p><p>在任何情况下，加州大学都不承担因使用此软件及其文档而导致的对任何当事人的直接的， 间接的，特殊的，附加的或者相伴而生的损坏，包括利益损失的责任，即使加州大学已经建议了这些损失的可能性时也是如此。
</p><p>（IN NO EVENT SHALL THE UNIVERSITY OF CALIFORNIA BE LIABLE TO ANY PARTY FOR DIRECT, INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, INCLUDING LOST PROFITS, ARISING OUT OF THE USE OF THIS SOFTWARE AND ITS DOCUMENTATION, EVEN IF THE UNIVERSITY OF CALIFORNIA HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.）
</p><p>加州大学明确放弃任何保证，包括但不局限于某一特定用途的商业和利益的隐含保证。 这里提供的这份软件是基于“当作是”的基础的，因而加州大学没有责任提供维护，支持，更新，增强或者修改的服务。
</p><p>（THE UNIVERSITY OF CALIFORNIA SPECIFICALLY DISCLAIMS ANY WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE SOFTWARE PROVIDED HEREUNDER IS ON AN "AS IS" BASIS, AND THE UNIVERSITY OF CALIFORNIA HAS NO OBLIGATIONS TO PROVIDE MAINTENANCE, SUPPORT, UPDATES, ENHANCEMENTS, OR MODIFICATIONS.）
</p>
<a name="PostgreSQL_.E5.8F.AF.E4.BB.A5.E8.BF.90.E8.A1.8C.E5.9C.A8.E5.93.AA.E4.BA.9B.E6.93.8D.E4.BD.9C.E7.B3.BB.E7.BB.9F.E5.B9.B3.E5.8F.B0.E4.B8.8A.EF.BC.9F"></a><h3><span class="mw-headline">PostgreSQL 可以运行在哪些操作系统平台上？</span></h3>
<p>一般说来，任何现在对 UNIX 兼容的操作系统之上都能运行PostgreSQL 。在安装指南里列出了发布时经过明确测试的平台。
</p><p>PostgreSQl也可以直接运行在基于微软Windows-NT的操作系统，如Win2000 SP4，WinXP 和 Win2003，已制作完成的安装包可从 <a href="http://pgfoundry.org/projects/pginstaller下载，基于MSDOS的Windows操作系统" class="external free" title="http://pgfoundry.org/projects/pginstaller下载，基于MSDOS的Windows操作系统" rel="nofollow">http://pgfoundry.org/projects/pginstaller下载，基于MSDOS的Windows操作系统</a> （Win95，Win98，WinMe）需要通过Cygwin模拟环境运行PostgreSQL。
</p><p>同时也有一个为Novell Netware 6开发的版本可从 <a href="http://forge.novell.com" class="external free" title="http://forge.novell.com" rel="nofollow">http://forge.novell.com</a> 获取，为OS/2(eComStation)开发的版本可从 <a href="http://hobbes.nmsu.edu/cgi-bin/h-search?sh=1&amp;button=Search&amp;key=postgreSQL&amp;stype=all&amp;sort=type&amp;dir=%2F" class="external text" title="http://hobbes.nmsu.edu/cgi-bin/h-search?sh=1&amp;button=Search&amp;key=postgreSQL&amp;stype=all&amp;sort=type&amp;dir=%2F" rel="nofollow">这里</a>下载。
</p>
<a name=".E6.88.91.E4.BB.8E.E5.93.AA.E9.87.8C.E8.83.BD.E5.BE.97.E5.88.B0PostgreSQL.EF.BC.9F"></a><h3> <span class="mw-headline">我从哪里能得到PostgreSQL？</span></h3>
<p>通过浏览器可从 <a href="http://www.postgresql.org/ftp/" class="external free" title="http://www.postgresql.org/ftp/" rel="nofollow">http://www.postgresql.org/ftp/</a> 下载，也可通过FTP，从 <a href="ftp://ftp.PostgreSQL.org/pub/" class="external free" title="ftp://ftp.PostgreSQL.org/pub/" rel="nofollow">ftp://ftp.PostgreSQL.org/pub/</a> 站点下载。
</p>
<a name=".E6.9C.80.E6.96.B0.E7.89.88.E7.9A.84PostgreSQL.E6.98.AF.E4.BB.80.E4.B9.88.EF.BC.9F"></a><h3><span class="mw-headline">最新版的PostgreSQL是什么？</span></h3>
<p>PostgreSQL 最新的版本是版本 8.4 。
</p><p>我们计划每年发布一个主要升级版本，每几个月发布一个小版本。
</p>
<a name=".E6.88.91.E4.BB.8E.E5.93.AA.E9.87.8C.E8.83.BD.E5.BE.97.E5.88.B0.E5.AF.B9PostgreSQL.E7.9A.84.E6.94.AF.E6.8C.81.EF.BC.9F"></a><h3> <span class="mw-headline">我从哪里能得到对PostgreSQL的支持？</span></h3>
<p>PostgreSQL社区通过邮件列表为其大多数用户提供帮助，订阅邮件列表的主站点是 <a href="http://www.postgresql.org/community/lists/，一般情况下，先加入General" class="external free" title="http://www.postgresql.org/community/lists/，一般情况下，先加入General" rel="nofollow">http://www.postgresql.org/community/lists/，一般情况下，先加入General</a> 或 Bug邮件列表是一个较好的开始。
</p><p>主要的IRC频道是在FreeNode(irc.freenode.net)的#postgresql，为了连上此频道，可以使用UNIX程序irc，其指令格式： irc -c '#postgresql' "$USER" irc.freenode.net ，或者使用其他IRC客户端程序。在此网络中还存在一个PostgreSQL的西班牙频道(#postgersql-es)和法语频道 (#postgresql-fr)。同样地，在EFNET上也有一个PostgreSQL的交流频道。
</p><p>可提供商业支持的公司列表可在  <a href="http://www.postgresql.org/support/professional_support" class="external free" title="http://www.postgresql.org/support/professional_support" rel="nofollow">http://www.postgresql.org/support/professional_support</a> 浏览。
</p>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E6.8F.90.E4.BA.A4.E4.B8.80.E4.B8.AABUG.E6.8A.A5.E5.91.8A.EF.BC.9F"></a><h3> <span class="mw-headline">我如何提交一个BUG报告？</span></h3>
<p>可访问 <a href="http://www.postgresql.org/support/submitbug" class="external free" title="http://www.postgresql.org/support/submitbug" rel="nofollow">http://www.postgresql.org/support/submitbug</a> ，填写Bug上报表格即可，同样也可访问ftp站点 <a href="ftp://ftp.PostgreSQL.org/pub/" class="external free" title="ftp://ftp.PostgreSQL.org/pub/" rel="nofollow">ftp://ftp.PostgreSQL.org/pub/</a> 检查有无更新的PostgreSQL版本或补丁。
</p><p>通过使用Bug提交表格或是发往PostgreSQL邮件列表的Bug通常会有以下之一回复：
</p>
<ul><li> 所提交内容不是一个Bug及其不是Bug的原因。
</li><li> 所提交内容是一个已知的Bug并且已经加入TODO待处理任务列表。
</li><li> 所提交的Bug已在当前版本中被修正。
</li><li> 所提交的Bug已修正但尚未将补丁加入现在的发布软件包。
</li><li> 请求提交者提供更详细的信息：
<ul><li>操作系统
</li><li>PostgreSQL版本
</li><li>可重现Bug的测试案例
</li><li>调试信息
</li><li>调试跟踪输出
</li></ul>
</li><li> 所提交内容是一个新Bug，将执行以下工作：
<ul><li>创建一个新补丁并将其加入下一个主要版本或是小的改进版本中。
</li><li>此Bug暂时不能修正，将被加至<a href="http://www.postgresql.org/docs/faqs.TODO.html" class="external text" title="http://www.postgresql.org/docs/faqs.TODO.html" rel="nofollow">TODO</a> 待处理任务列表。
</li></ul>
</li></ul>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E4.BA.86.E8.A7.A3.E5.B7.B2.E7.9F.A5.E7.9A.84_BUG_.E6.88.96.E6.9A.82.E7.BC.BA.E7.9A.84.E5.8A.9F.E8.83.BD.EF.BC.9F"></a><h3><span class="mw-headline">我如何了解已知的 BUG 或暂缺的功能？</span></h3>
<p>PostgreSQL 支持一个扩展的 SQL:2003 的子集。参阅我们的TODO 列表，了解已知Bug列表、暂缺的功能和将来的开发计划。
</p><p>要求增加新功能的申请通常会收到以下之一的回复：
</p>
<ul><li> 该功能已加入TODO待处理任务列表。
</li><li> 该功能不是必须的，因为：
<ul><li>它是现有的且符合SQL标准的某功能的重复。
</li><li>该功能性会大大增加代码的复杂程序，而带来的好处是微不足道的。
</li><li>该功能是不安全或是不可靠的。
</li></ul>
</li><li> 该功能将被加入TODO待处理任务列表。
</li></ul>
<p>PostgreSQL不使用Bug跟踪系统，因为我们发现在邮件列表中直接回复以及保证TODO任务列表总是处于最新状态的方式工作效率会更高一些。事实上，Bug不会在我们的软件中存在很长时间，对影响很多用户的Bug也总是很快会被修正。唯一能找到所有改进、提高和修正的地方是CVS的日志信息，即使是在软件新版本的发布信息中也不会列出每一处的软件更新。
</p>
<a name=".E8.83.BD.E5.A4.9F.E8.8E.B7.E5.8F.96.E7.9A.84.E6.9C.80.E6.96.B0.E6.96.87.E6.A1.A3.E6.9C.89.E5.93.AA.E4.BA.9B.EF.BC.9F"></a><h3><span class="mw-headline">能够获取的最新文档有哪些？</span></h3>
<p>PostgreSQL包含大量的文档，主要有详细的参考手册，手册页和一些的测试例子。参见 /doc 目录（译注：应为 $PGHOME/doc）。 你还可以在线浏览PostgreSQL的手册，其网址是：<a href="http://www.postgresql.org/docs" class="external free" title="http://www.postgresql.org/docs" rel="nofollow">http://www.postgresql.org/docs</a> 。
</p><p>有两本关于PostgreSQL的书在线提供，在 <a href="http://www.postgresql.org/docs/books/awbook.html" class="external free" title="http://www.postgresql.org/docs/books/awbook.html" rel="nofollow">http://www.postgresql.org/docs/books/awbook.html</a> 和 <a href="http://www.commandprompt.com/ppbook/" class="external free" title="http://www.commandprompt.com/ppbook/" rel="nofollow">http://www.commandprompt.com/ppbook/</a> 。 也有大量的PostgreSQL书籍可供购买，其中最为流行的一本是由Korry Douglas编写的。在 <a href="http://www.postgresql.org/docs/books/" class="external free" title="http://www.postgresql.org/docs/books/" rel="nofollow">http://www.postgresql.org/docs/books/</a> 上有大量有关PostgreSQL书籍的简介。 在 <a href="http://www.postgresql.org/docs/techdocs" class="external free" title="http://www.postgresql.org/docs/techdocs" rel="nofollow">http://www.postgresql.org/docs/techdocs</a> 上收集了有关PostgreSQL的大量技术文章。
</p><p>客户端的命令行程序psql有一些以 \d 开头的命令，可显示关于类型，操作符，函数，聚合等信息，使用 \? 可以显示所有可用的命令。
</p><p>我们的 web 站点包含更多的文档。
</p>
<a name=".E6.88.91.E5.BA.94.E8.AF.A5.E6.80.8E.E6.A0.B7.E5.AD.A6.E4.B9.A0_SQL_.EF.BC.9F"></a><h3> <span class="mw-headline">我应该怎样学习 SQL ？</span></h3>
<p>首先考虑上述提到的与PostgreSQL相关的书籍。我们的许多用户喜欢The Practical SQL Handbook， Bowman, Judith S. 编写，Addison-Wesley公司出版，其他的则喜欢 The Complete Reference SQL, Groff 编写，McGraw-Hill公司出版。
</p><p>在下列网址上也有很好的教程，他们是
</p>
<ul><li><a href="http://www.intermedia.net/support/sql/sqltut.shtm" class="external free" title="http://www.intermedia.net/support/sql/sqltut.shtm" rel="nofollow">http://www.intermedia.net/support/sql/sqltut.shtm</a>
</li><li><a href="http://sqlcourse.com" class="external free" title="http://sqlcourse.com" rel="nofollow">http://sqlcourse.com</a>.
</li><li><a href="http://www.w3schools.com/sql/default.asp" class="external free" title="http://www.w3schools.com/sql/default.asp" rel="nofollow">http://www.w3schools.com/sql/default.asp</a>
</li><li><a href="http://mysite.verizon.net/Graeme_Birchall/id1.html" class="external free" title="http://mysite.verizon.net/Graeme_Birchall/id1.html" rel="nofollow">http://mysite.verizon.net/Graeme_Birchall/id1.html</a>
</li></ul>
<a name=".E5.A6.82.E4.BD.95.E6.8F.90.E4.BA.A4.E8.A1.A5.E4.B8.81.E6.88.96.E6.98.AF.E5.8A.A0.E5.85.A5.E5.BC.80.E5.8F.91.E9.98.9F.E4.BC.8D.EF.BC.9F"></a><h3><span class="mw-headline">如何提交补丁或是加入开发队伍？</span></h3>
<p>详见 开发人员常见问题 <a href="http://www.postgresql.org/docs/faqs.FAQ_DEV.html" class="external text" title="http://www.postgresql.org/docs/faqs.FAQ_DEV.html" rel="nofollow">Developer's FAQ</a> 。
</p>
<a name="PostgreSQL.E5.92.8C.E5.85.B6.E4.BB.96.E6.95.B0.E6.8D.AE.E5.BA.93.E7.B3.BB.E7.BB.9F.E6.AF.94.E8.B5.B7.E6.9D.A5.E5.A6.82.E4.BD.95.EF.BC.9F"></a><h3> <span class="mw-headline">PostgreSQL和其他数据库系统比起来如何？</span></h3>
<p>评价软件有好几种方法：功能，性能，可靠性，支持和价格。
</p>
<ul><li>功能
<ul><li>PostgreSQL 拥有大型商用数据库最多的功能，例如：事务，子查询，触发器，视图，外键参考完整性和复杂的锁定等。 我们还有一些它们没有的特性，如用户定义类型，继承，规则和多版本并行控制以减少锁的争用等。
</li></ul>
</li></ul>
<ul><li>性能
<ul><li>PostgreSQL和其他商用或开源的数据库具有类似的性能。对某些数据处理快一些，对其他一些处理慢一些。 与其他数据库相比，我们的性能优劣通常在 +/- 10%之间。
</li></ul>
</li></ul>
<ul><li>可靠性
<ul><li>我们都知道数据库必须是可靠的，否则它就一点用都没有。我们努力做到发布经过认真测试的，缺陷最少的稳定代码。每个版本至少有一个月的 beta 测试时间，并且我们的发布历史显示我们可以提供稳定的，牢固的，可用于生产使用的版本。我们相信在这方面我们与其他的数据库软件是相当的。
</li></ul>
</li></ul>
<ul><li>支持
<ul><li>我们的邮件列表提供一个非常大的开发人员和用户的组以帮助解决所碰到的任何问题。我们不能保证总是能解决问题，相比之下，商用数据库软件也并不是总能够提供解决方法。 直接与开发人员、用户群、手册和源程序接触使PostgreSQL的支持比其他数据库还要好。还有一些商业性的全面技术支持，可以给提供给那些需要的人。（参阅1.7 小节）
</li></ul>
</li></ul>
<ul><li>价格
<ul><li>我们对任何用途都免费，包括商用和非商用目的。 你可以不加限制地向你的产品里加入我们的代码，除了那些我们在上面的版权声明里声明的 BSD版权之外的内容。 
</li></ul>
</li></ul>
<a name="PostgreSQL.E5.8F.AF.E4.BB.A5.E5.A4.84.E7.90.86.E6.9C.80.E8.BF.91.E5.90.84.E4.B8.AA.E5.9B.BD.E5.AE.B6.E5.A4.8F.E6.97.B6.E5.88.B6.E7.9A.84.E5.8F.98.E5.8C.96.E5.90.97.3F"></a><h3> <span class="mw-headline">PostgreSQL可以处理最近各个国家夏时制的变化吗?</span></h3>
<p>PostgreSQL 8.0之前的版本是使用操作系统中的时区数据库来处理夏时制的信息，自8.0版及以后的版本PostgreSQL会自身含有最新的时区信息。美国夏时制的更改包括在PostgreSQL 8.0.4版以后版本及所有以后发布的大的升级版本，如8.1版，加拿大和澳大利亚夏时制的更新包括在8.0.10版及以后版本中。
</p>
<a name=".E7.94.A8.E6.88.B7.E5.AE.A2.E6.88.B7.E7.AB.AF.E9.97.AE.E9.A2.98"></a><h2><span class="mw-headline">用户客户端问题</span></h2>
<a name=".E6.88.91.E4.BB.AC.E5.8F.AF.E4.BB.A5.E7.94.A8.E4.BB.80.E4.B9.88.E8.AF.AD.E8.A8.80.E5.92.8CPostgreSQL.E6.89.93.E4.BA.A4.E9.81.93.EF.BC.9F"></a><h3> <span class="mw-headline">我们可以用什么语言和PostgreSQL打交道？</span></h3>
<p>PostgreSQL(缺省情况)只安装有C和内嵌式C的接口，其他的接口都是独立的项目，能够分别下载，这些接口项目独立的好处 是他们可以有各自的发布计划和各自独立的开发组。
</p><p>一些编程语言如PHP都有访问PostgreSQL的接口，Perl、TCL、Python以及很多其他语言的接口在<a href="http://gborg.postgresql.org" class="external text" title="http://gborg.postgresql.org" rel="nofollow">网站上的Drivers/Interfaces</a>小节可找到， 并且通过Internet很容易搜索到。
</p>
<a name=".E6.9C.89.E4.BB.80.E4.B9.88.E5.B7.A5.E5.85.B7.E5.8F.AF.E4.BB.A5.E6.8A.8APostgreSQL.E7.94.A8.E4.BA.8E_Web_.E9.A1.B5.E9.9D.A2.EF.BC.9F"></a><h3> <span class="mw-headline">有什么工具可以把PostgreSQL用于 Web 页面？</span></h3>
<p>一个介绍以数据库为后台的挺不错的站点是：<a href="http://www.webreview.com。" class="external free" title="http://www.webreview.com。" rel="nofollow">http://www.webreview.com。</a>
</p><p>对于 Web 集成，PHP 是一个极好的接口。它在<a href="http://www.php.net/。" class="external free" title="http://www.php.net/。" rel="nofollow">http://www.php.net/。</a>
</p><p>对于复杂的任务，很多人采用 Perl 接口和 使用CGI.pm的DBD::Pg 或 mod_perl 。
</p>
<a name="PostgreSQL.E6.8B.A5.E6.9C.89.E5.9B.BE.E5.BD.A2.E7.94.A8.E6.88.B7.E7.95.8C.E9.9D.A2.E5.90.97.EF.BC.9F"></a><h3> <span class="mw-headline">PostgreSQL拥有图形用户界面吗？</span></h3>
<p>商业用户或是开源开发人员能找到很多的有关PostgreSQL的GUI图形工具软件，在 <a href="http://www.postgresql.org/docs/techdocs.54" class="external text" title="http://www.postgresql.org/docs/techdocs.54" rel="nofollow">PostgreSQL社区文档</a> 有一个详细的列表。
</p>
<a name=".E7.B3.BB.E7.BB.9F.E7.AE.A1.E7.90.86.E9.97.AE.E9.A2.98"></a><h2><span class="mw-headline">系统管理问题</span></h2>
<a name=".E6.88.91.E6.80.8E.E6.A0.B7.E8.83.BD.E6.8A.8APostgreSQL.E8.A3.85.E5.9C.A8_.2Fusr.2Flocal.2Fpgsql_.E4.BB.A5.E5.A4.96.E7.9A.84.E5.9C.B0.E6.96.B9.EF.BC.9F"></a><h3> <span class="mw-headline">我怎样能把PostgreSQL装在 /usr/local/pgsql 以外的地方？</span></h3>
<p>在运行 configure 时加上 --prefix 选项。
</p>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E6.8E.A7.E5.88.B6.E6.9D.A5.E8.87.AA.E5.85.B6.E4.BB.96.E7.94.B5.E8.84.91.E7.9A.84.E8.BF.9E.E6.8E.A5.EF.BC.9F"></a><h3> <span class="mw-headline">我如何控制来自其他电脑的连接？</span></h3>
<p>缺省情况下，PostgreSQL只允许来自本机且通过 unix 域套接字或TCP/IP方式的连接。 你只有在修改了配置文件postgresql.conf中的listen_addresses，且也在配置文件$PGDATA/pg_hba.conf中打开了 基于远程电脑（ host-based ）的身份认证，并重新启动PostgreSQL，否则其他电脑是不能与你的PostgreSQL服务器进行连接的。
</p>
<a name=".E6.88.91.E6.80.8E.E6.A0.B7.E8.B0.83.E6.95.B4.E6.95.B0.E6.8D.AE.E5.BA.93.E5.BC.95.E6.93.8E.E4.BB.A5.E8.8E.B7.E5.BE.97.E6.9B.B4.E5.A5.BD.E7.9A.84.E6.80.A7.E8.83.BD.EF.BC.9F"></a><h3> <span class="mw-headline">我怎样调整数据库引擎以获得更好的性能？</span></h3>
<p>有三个主要方面可以提升PostgreSQL的潜能。
</p>
<ul><li>查询方式的变化，这主要涉及修改查询方式以获取更好的性能:
</li></ul>
<ul><li><ul><li> 创建索引，包括表达式和部分索引；
</li><li> 使用COPY语句代替多个Insert语句；
</li><li> 将多个SQL语句组成一个事务以减少提交事务的开销；
</li><li> 从一个索引中提取多条记录时使用CLUSTER；
</li><li> 从一个查询结果中取出部分记录时使用LIMIT；
</li><li> 使用预编译式查询（Prepared Query)；
</li><li> 使用ANALYZE以保持精确的优化统计；
</li><li> 定期使用 VACUUM 或 pg_autovacuum
</li><li> 进行大量数据更改时先删除索引（然后重建索引）
</li></ul>
</li></ul>
<ul><li>服务器的配置
<ul><li>配置文件postgres.conf中的很多设置都会影响性能，所有参数的列表可见：<a href="http://www.postgresql.org/docs/current/static/runtime-config.html" class="external text" title="http://www.postgresql.org/docs/current/static/runtime-config.html" rel="nofollow">管理员指南/数据库服务器运行环境/数据库服务器运行配置</a>， 有关参数的解释可见： <a href="http://www.varlena.com/varlena/GeneralBits/Tidbits/annotated_conf_e.html" class="external free" title="http://www.varlena.com/varlena/GeneralBits/Tidbits/annotated_conf_e.html" rel="nofollow">http://www.varlena.com/varlena/GeneralBits/Tidbits/annotated_conf_e.html</a> 和 <a href="http://www.varlena.com/varlena/GeneralBits/Tidbits/perf.html。" class="external free" title="http://www.varlena.com/varlena/GeneralBits/Tidbits/perf.html。" rel="nofollow">http://www.varlena.com/varlena/GeneralBits/Tidbits/perf.html。</a> 
</li></ul>
</li></ul>
<ul><li>硬件的选择
<ul><li>计算机硬件对性能的影响可浏览 <a href="http://candle.pha.pa.us/main/writings/pgsql/hw_performance/index.html" class="external free" title="http://candle.pha.pa.us/main/writings/pgsql/hw_performance/index.html" rel="nofollow">http://candle.pha.pa.us/main/writings/pgsql/hw_performance/index.html</a> 和 <a href="http://www.powerpostgresql.com/PerfList/。" class="external free" title="http://www.powerpostgresql.com/PerfList/。" rel="nofollow">http://www.powerpostgresql.com/PerfList/。</a>
</li></ul>
</li></ul>
<a name="PostgreSQL.E9.87.8C.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97.E4.BB.80.E4.B9.88.E6.A0.B7.E7.9A.84.E8.B0.83.E8.AF.95.E7.89.B9.E6.80.A7.EF.BC.9F"></a><h3><span class="mw-headline">PostgreSQL里可以获得什么样的调试特性？</span></h3>
<p>PostgreSQL 有很多类似 log_* 的服务器配置变量可用于查询的打印和进程统计，而这些工作对调试和性能测试很有帮助。
</p>
<a name=".E4.B8.BA.E4.BB.80.E4.B9.88.E5.9C.A8.E8.AF.95.E5.9B.BE.E8.BF.9E.E6.8E.A5.E6.97.B6.E6.94.B6.E5.88.B0.E2.80.9CSorry.2C_too_many_clients.EF.BC.88.E5.B7.B2.E6.9C.89.E5.A4.AA.E5.A4.9A.E7.94.A8.E6.88.B7.E8.BF.9E.E6.8E.A5.EF.BC.89.E2.80.9D.E6.B6.88.E6.81.AF.EF.BC.9F"></a><h3> <span class="mw-headline">为什么在试图连接时收到“Sorry, too many clients（已有太多用户连接）”消息？</span></h3>
<p>这表示你已达到缺省100个并发后台进程数的限制，你需要通过修改postgresql.conf文件中的max_connections值来 增加postmaster的后台并发处理数，修改后需重新启动postmaster。
</p>
<a name="PostgreSQL.E7.9A.84.E5.8D.87.E7.BA.A7.E8.BF.87.E7.A8.8B.E6.9C.89.E5.93.AA.E4.BA.9B.E5.86.85.E5.AE.B9_.EF.BC.9F"></a><h3><span class="mw-headline">PostgreSQL的升级过程有哪些内容 ？</span></h3>
<p>浏览 <a href="http://www.postgresql.org/support/versioning" class="external free" title="http://www.postgresql.org/support/versioning" rel="nofollow">http://www.postgresql.org/support/versioning</a> 页面可找到关于升级的详细讨论，另外， <a href="http://www.postgresql.org/docs/current/static/install-upgrading.html" class="external free" title="http://www.postgresql.org/docs/current/static/install-upgrading.html" rel="nofollow">http://www.postgresql.org/docs/current/static/install-upgrading.html</a> 处也有详细的操作步骤。
</p>
<a name=".28.E4.BD.BF.E7.94.A8PostgreSQL.29.E6.88.91.E9.9C.80.E8.A6.81.E4.BD.BF.E7.94.A8.E4.BB.80.E4.B9.88.E8.AE.A1.E7.AE.97.E6.9C.BA.E7.A1.AC.E4.BB.B6_.EF.BC.9F"></a><h3> <span class="mw-headline">(使用PostgreSQL)我需要使用什么计算机硬件 ？</span></h3>
<p>由于计算机硬件大多数是兼容的，人们总是倾向于相信所有计算机硬件质量也是相同的。事实上不是， ECC RAM（带奇偶校验的内存），SCSI （硬盘）和优质的主板比一些便宜货要更加可靠且具有更好的性能。PostgreSQL几乎可以运行在任何硬件上， 但如果可靠性和性能对你的系统很重要，你就需要全面的研究一下你的硬件配置了。在我们的邮件列表上也有关于 硬件配置和性价比的讨论。
</p>
<a name=".E6.93.8D.E4.BD.9C.E9.97.AE.E9.A2.98"></a><h2> <span class="mw-headline">操作问题</span></h2>
<a name=".E5.A6.82.E4.BD.95.E5.8F.AA.E9.80.89.E6.8B.A9.E4.B8.80.E4.B8.AA.E6.9F.A5.E8.AF.A2.E7.BB.93.E6.9E.9C.E7.9A.84.E5.A4.B4.E5.87.A0.E8.A1.8C.EF.BC.9F.E6.88.96.E6.98.AF.E9.9A.8F.E6.9C.BA.E7.9A.84.E4.B8.80.E8.A1.8C.EF.BC.9F"></a><h3> <span class="mw-headline">如何只选择一个查询结果的头几行？或是随机的一行？</span></h3>
<p>如果你只是要提取几行数据，并且你在执行查询中知道确切的行数，你可以使用LIMIT功能。 如果有一个索引与 ORDER BY中的条件匹配，PostgreSQL 可能就只处理要求的头几条记录， （否则将对整个查询进行处理直到生成需要的行）。如果在执行查询功能时不知道确切的记录数， 可使用游标(cursor)和FETCH功能。
</p><p>可使用以下方法提取一行随机记录的：
</p>
<pre>
      SELECT  cols
      FROM tab
      ORDER BY random()
      LIMIT 1&nbsp;;
</pre>
<a name=".E5.A6.82.E4.BD.95.E6.9F.A5.E7.9C.8B.E8.A1.A8.E3.80.81.E7.B4.A2.E5.BC.95.E3.80.81.E6.95.B0.E6.8D.AE.E5.BA.93.E4.BB.A5.E5.8F.8A.E7.94.A8.E6.88.B7.E7.9A.84.E5.AE.9A.E4.B9.89.EF.BC.9F.E5.A6.82.E4.BD.95.E6.9F.A5.E7.9C.8Bpsql.E9.87.8C.E7.94.A8.E5.88.B0.E7.9A.84.E6.9F.A5.E8.AF.A2.E6.8C.87.E4.BB.A4.E5.B9.B6.E6.98.BE.E7.A4.BA.E5.AE.83.E4.BB.AC.EF.BC.9F"></a><h3> <span class="mw-headline">如何查看表、索引、数据库以及用户的定义？如何查看psql里用到的查询指令并显示它们？</span></h3>
<p>在psql中使用 \dt 命令来显示数据表的定义，要了解psql中的完整命令列表可使用\? ，另外，你也可以阅读 psql 的源代码 文件pgsql/src/bin/psql/describe.c，它包括为生成psql反斜杠命令的输出的所有 SQL 命令。你还可以带 -E 选项启动 psql， 这样它将打印出你在psql中所给出的命令执行时的内部实际使用的SQL查询语句。PostgreSQL也提供了一个兼容SQL的INFORMATION SCHEMA接口， 你可以从这里获取关于数据库的信息。
</p><p>在系统中也有一些以pg_ 打头的系统表也描述了表的定义。
</p><p>使用 psql -l 指令可以列出所有的数据库。
</p><p>也可以浏览一下 pgsql/src/tutorial/syscat.source文件，它列举了很多可从数据库系统表中获取信息的SELECT语法。
</p>
<a name=".E5.A6.82.E4.BD.95.E6.9B.B4.E6.94.B9.E4.B8.80.E4.B8.AA.E5.AD.97.E6.AE.B5.E7.9A.84.E6.95.B0.E6.8D.AE.E7.B1.BB.E5.9E.8B.EF.BC.9F"></a><h3> <span class="mw-headline">如何更改一个字段的数据类型？</span></h3>
<p>在8.0及以后的版本里更改一个字段的数据类型很容易，可使用 ALTER TABLE ALTER COLUMN TYPE 。
</p><p>在以前的版本中，可以这样做：
</p><p><br />
</p>
<pre>  BEGIN;
   ALTER TABLE tab ADD COLUMN new_col new_data_type;
   UPDATE tab SET new_col = CAST(old_col AS new_data_type);
   ALTER TABLE tab DROP COLUMN old_col;
   COMMIT;
</pre>
<p>你然后可以使用VACUUM FULL tab 指令来使系统收回无效数据所占用的空间。
</p>
<a name=".E5.8D.95.E6.9D.A1.E8.AE.B0.E5.BD.95.EF.BC.8C.E5.8D.95.E4.B8.AA.E8.A1.A8.EF.BC.8C.E5.8D.95.E4.B8.AA.E6.95.B0.E6.8D.AE.E5.BA.93.E7.9A.84.E6.9C.80.E5.A4.A7.E9.99.90.E5.88.B6.E6.98.AF.E5.A4.9A.E5.B0.91.EF.BC.9F"></a><h3> <span class="mw-headline">单条记录，单个表，单个数据库的最大限制是多少？</span></h3>
<p>下面是一些限制：
</p>
<pre>   单个数据库最大尺寸？	无限制（已存在有 32TB 的数据库）
   单个表的最大尺寸？	32 TB
   一行记录的最大尺寸？	400 GB
   一个字段的最大尺寸?	1 GB
   一个表里最大行数？	无限制
   一个表里最大列数？	250-1600 （与列类型有关）
   一个表里的最大索引数量？	无限制
</pre>
<p>当然，实际上没有真正的无限制，还是要受系统可用磁盘空间、可用内存/交换区的制约。 事实上，当上述这些数值变得异常地大时，系统性能也会受很大影响。
</p><p>单表的最大大小 32 TB 不需要操作系统对单个文件也需这么大的支持。大表用多个 1 GB 的文件存储，因此文件系统大小的限制是不重要的。
</p><p>如果缺省的块大小增长到 32K ，最大的单表大小和最大列数还可以增加到四倍。
</p><p>有一个限制就是不能对大小多于2000字节的列创建索引。幸运地是这样的索引很少用到。通过对多字节列的内容进行MD5哈稀运算结果进行函数索引可对列的唯一性得到保证， 并且全文检索允许对列中的单词进行搜索。
</p>
<a name=".E5.AD.98.E5.82.A8.E4.B8.80.E4.B8.AA.E5.85.B8.E5.9E.8B.E7.9A.84.E6.96.87.E6.9C.AC.E6.96.87.E4.BB.B6.E9.87.8C.E7.9A.84.E6.95.B0.E6.8D.AE.E9.9C.80.E8.A6.81.E5.A4.9A.E5.B0.91.E7.A3.81.E7.9B.98.E7.A9.BA.E9.97.B4.EF.BC.9F"></a><h3> <span class="mw-headline">存储一个典型的文本文件里的数据需要多少磁盘空间？</span></h3>
<p>一个 Postgres 数据库（存储一个文本文件）所占用的空间最多可能需要相当于这个文本文件自身大小5倍的磁盘空间。
</p><p>例如，假设有一个 100,000 行的文件，每行有一个整数和一个文本描述。 假设文本串的平均长度为20字节。文本文件占用 2.8 MB。存放这些数据的PostgreSQL数据库文件大约是 6.4 MB:
</p>
<pre>    24 字节: 每行的头（大约值）
    24 字节: 一个整数型字段和一个文本型字段
  +  4 字节: 页面内指向元组的指针
  ----------------------------------------
    52 字节每行
</pre>
<pre>  PostgreSQL 数据页的大小是 8192 字节 (8 KB)，则：
</pre>
<pre>  8192 字节每页
  -------------------   =  158 行/数据页（向下取整）
    52 字节每行
</pre>
<pre>  100000 数据行
  --------------------  =  633 数据页（向上取整）
     158 行/数据页
</pre>
<pre>  633 数据页 * 8192 字节/页  = 5,185,536 字节（5.2 MB）
</pre>
<p>索引不需要这么多的额外消耗，但也确实包括被索引的数据，因此它们也可能很大。
</p><p>空值NULL存放在位图中，因此占用很少的空间。
</p>
<a name=".E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E7.9A.84.E6.9F.A5.E8.AF.A2.E5.BE.88.E6.85.A2.EF.BC.9F.E4.B8.BA.E4.BB.80.E4.B9.88.E8.BF.99.E4.BA.9B.E6.9F.A5.E8.AF.A2.E6.B2.A1.E6.9C.89.E5.88.A9.E7.94.A8.E7.B4.A2.E5.BC.95.EF.BC.9F"></a><h3> <span class="mw-headline">为什么我的查询很慢？为什么这些查询没有利用索引？</span></h3>
<p>并非每个查询都会自动使用索引。只有在表的大小超过一个最小值，并且查询只会选中表中较小比例的记录时才会采用索引。 这是因为索引扫描引起的随即磁盘存取可能比直接地读取表（顺序扫描）更慢。
</p><p>为了判断是否使用索引，PostgreSQL必须获得有关表的统计值。这些统计值可以使用 VACUUM ANALYZE，或 ANALYZE 获得。 使用统计值，优化器知道表中有多少行，就能够更好地判断是否利用索引。 统计值对确定优化的连接顺序和连接方法也很有用。在表的内容发生变化时，应定期进行统计值的更新收集。
</p><p>索引通常不用于 ORDER BY 或执行连接。对一个大表的一次顺序扫描再做一次排序通常比索引扫描要快。然而，如果将 LIMIT 和 ORDER BY 结合在一起使用的话，通常将会使用索引，因为这时仅返回表中的一小部分记录。
</p><p>如果你确信PostgreSQL的优化器使用顺序扫描是不正确的，你可以使用SET enable_seqscan TO 'off'指令来关闭顺序扫描， 然后再次运行查询，你就可以看出使用一个索引扫描是否确实要快一些。
</p><p>当使用通配符操作，例如 LIKE 或 ~ 时，索引只能在特定的情况下使用：
</p>
<ul><li> 字符串的开始部分必须是普通字符串，也就是说：
<ul><li>LIKE 模式不能以 % 打头。
</li><li>~ （正则表达式）模式必须以 ^ 打头。
</li></ul>
</li><li> 字符串不能以匹配多个字符的模式类打头，例如 [a-e]。
</li><li> 大小写无关的查找，如 ILIKE 和 ~* 等不使用索引，但可以用 4.8 节描述的表达式索引。
</li><li> 在做 initdb 时必须采用缺省的本地设置 C locale，因为系统不可能知道在非C locale情况时下一个最大字符是什么。 在这种情况下，你可以创建一个特殊的text_pattern_ops索引来用于LIKE的索引。
</li></ul>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E6.89.8D.E8.83.BD.E7.9C.8B.E5.88.B0.E6.9F.A5.E8.AF.A2.E4.BC.98.E5.8C.96.E5.99.A8.E6.98.AF.E6.80.8E.E6.A0.B7.E8.AF.84.E4.BC.B0.E5.A4.84.E7.90.86.E6.88.91.E7.9A.84.E6.9F.A5.E8.AF.A2.EF.BC.9F"></a><h3> <span class="mw-headline">我如何才能看到查询优化器是怎样评估处理我的查询？</span></h3>
<p>参考 EXPLAIN 手册页。
</p>
<a name=".E6.88.91.E6.80.8E.E6.A0.B7.E5.81.9A.E6.AD.A3.E5.88.99.E8.A1.A8.E8.BE.BE.E5.BC.8F.E6.90.9C.E7.B4.A2.E5.92.8C.E5.A4.A7.E5.B0.8F.E5.86.99.E6.97.A0.E5.85.B3.E7.9A.84.E6.AD.A3.E5.88.99.E8.A1.A8.E8.BE.BE.E5.BC.8F.E6.9F.A5.E6.89.BE.EF.BC.9F.E6.80.8E.E6.A0.B7.E5.88.A9.E7.94.A8.E7.B4.A2.E5.BC.95.E8.BF.9B.E8.A1.8C.E5.A4.A7.E5.B0.8F.E5.86.99.E6.97.A0.E5.85.B3.E6.9F.A5.E6.89.BE.EF.BC.9F"></a><h3> <span class="mw-headline">我怎样做正则表达式搜索和大小写无关的正则表达式查找？怎样利用索引进行大小写无关查找？</span></h3>
<p>操作符 ~ 处理正则表达式匹配，而 ~* 处理大小写无关的正则表达式匹配。大小写无关的 LIKE 变种成为 ILIKE。
</p><p>大小写无关的等式比较通常写做：
</p>
<pre>
    SELECT *
    FROM tab
    WHERE lower(col) = 'abc';
</pre>
<p>这样将不会使用标准的索引。但是可以创建一个在这种情况下使用的表达式索引:
</p>
<pre>
    CREATE INDEX tabindex ON tab (lower(col));
</pre>
<p>如果上述索引在创建时加入UNIQUE约束，虽然索引字段自身内容可以存储大小写不限的内容，但如果有UNIQUE约束后，这些内容不能仅仅是大小写不同（否则会造成冲突）。为了保证不发生这种情况，可以使用CHECK约束条件或是触发器在录入时进行限制。
</p>
<a name=".E5.9C.A8.E4.B8.80.E4.B8.AA.E6.9F.A5.E8.AF.A2.E9.87.8C.EF.BC.8C.E6.88.91.E6.80.8E.E6.A0.B7.E6.A3.80.E6.B5.8B.E4.B8.80.E4.B8.AA.E5.AD.97.E6.AE.B5.E6.98.AF.E5.90.A6.E4.B8.BA_NULL_.EF.BC.9F.E6.88.91.E5.A6.82.E4.BD.95.E6.89.8D.E8.83.BD.E5.87.86.E7.A1.AE.E6.8E.92.E5.BA.8F.E8.80.8C.E4.B8.8D.E8.AE.BA.E6.9F.90.E5.AD.97.E6.AE.B5.E6.98.AF.E5.90.A6.E5.90.AB_NULL_.E5.80.BC.EF.BC.9F"></a><h3> <span class="mw-headline">在一个查询里，我怎样检测一个字段是否为 NULL ？我如何才能准确排序而不论某字段是否含 NULL 值？</span></h3>
<p>用 IS NULL 和 IS NOT NULL 测试这个字段，具体方法如下：
</p>
<pre>  SELECT *
  FROM tab
  WHERE col IS NULL;
</pre>
<p>为了可以处理可能存在的NULL值，可以按如下方式使用COALESCE()&nbsp;:
</p>
<pre>  SELECT COALESCE(col1, ‘’) || COALESCE(col2, ‘’)
  FROM tab
</pre>
<p>为了能对含 NULL字段排序，可在 ORDER BY 条件中使用 IS NULL和 IS NOT NULL 修饰符，条件为真 true 将比条件为假false 排在前面，下面的例子就会将含 NULL 的记录排在结果的上面部分：
</p>
<pre>  SELECT *
  FROM tab
  ORDER BY (col IS NOT NULL)
</pre>
<a name=".E5.90.84.E7.A7.8D.E5.AD.97.E7.AC.A6.E7.B1.BB.E5.9E.8B.E4.B9.8B.E9.97.B4.E6.9C.89.E4.BB.80.E4.B9.88.E4.B8.8D.E5.90.8C.EF.BC.9F"></a><h3> <span class="mw-headline">各种字符类型之间有什么不同？</span></h3>
<pre>   类型	内部名称	说明
   VARCHAR(n)	varchar	指定了最大长度，变长字符串，不足定义长度的部分不补齐
   CHAR(n)	bpchar	定长字符串，实际数据不足定义长度时，以空格补齐
   TEXT	text	没有特别的上限限制（仅受行的最大长度限制）
   BYTEA	bytea	变长字节序列（使用NULL字符也是允许的）
   "char"	char	单个字符
</pre>
<p>在系统表和在一些错误信息里你将看到内部名称。
</p><p>上面所列的前四种类型是"varlena"（变长）类型（也就是说，开头的四个字节是长度，后面才是数据）。 于是实际占用的空间比声明的大小要多一些。 然而这些类型如定义很长时都可以被压缩存储，因此磁盘空间也可能比预想的要少。
</p><p>VARCHAR(n) 在存储限制了最大长度的变长字符串是最好的。 TEXT 适用于存储最大可达 1G左右但未定义限制长度的字符串。
</p><p>CHAR(n) 最适合于存储长度相同的字符串。 CHAR(n)会根据所给定的字段长度以空格补足（不足的字段内容）， 而 VARCHAR(n) 只存储所给定的数据内容。 BYTEA 用于存储二进制数据，尤其是包含 NULL 字节的值。这些类型具有差不多的性能。
</p>
<a name=".E6.88.91.E6.80.8E.E6.A0.B7.E5.88.9B.E5.BB.BA.E4.B8.80.E4.B8.AA.E5.BA.8F.E5.88.97.E5.8F.B7.E6.88.96.E6.98.AF.E8.87.AA.E5.8A.A8.E9.80.92.E5.A2.9E.E7.9A.84.E5.AD.97.E6.AE.B5.EF.BC.9F"></a><h3> <span class="mw-headline">我怎样创建一个序列号或是自动递增的字段？</span></h3>
<p>PostgreSQL 支持 SERIAL 数据类型。（字段定义为SERIAL后）将自动创建一个序列生成器，例如：
</p>
<pre>
   CREATE TABLE person ( 
      id   SERIAL, 
      name TEXT 
   );
</pre>
<p>会自动转换为以下SQL语句：
</p>
<pre>
   CREATE SEQUENCE person_id_seq;
   CREATE TABLE person ( 
      id   INT4 NOT NULL DEFAULT nextval('person_id_seq'),
      name TEXT
   );
</pre>
<p>参考 create_sequence 手册页获取关于序列生成器的更多信息。
</p>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E8.8E.B7.E5.BE.97.E4.B8.80.E4.B8.AA.E6.8F.92.E5.85.A5.E7.9A.84.E5.BA.8F.E5.88.97.E5.8F.B7.E7.9A.84.E5.80.BC.EF.BC.9F"></a><h3> <span class="mw-headline">我如何获得一个插入的序列号的值？</span></h3>
<p>最简单的提取插入记录的序列号的方法是使用RETURNING功能，使用4.11.1例子中的表，则例子如下：
</p>
<pre>   INSERT INTO person (name) VALUES ('Blaise Pascal') RETURNING id;
</pre>
<p>上述查询执行后会返回id，你也可以使用nextval()函数先获取当前id的数值，然后使用该值进行INSERT，或者是在执行INSERT后执行currval()函数也可以达到目的。
</p>
<a name=".E5.90.8C.E6.97.B6.E4.BD.BF.E7.94.A8_currval.28.29_.E4.BC.9A.E5.AF.BC.E8.87.B4.E5.92.8C.E5.85.B6.E4.BB.96.E7.94.A8.E6.88.B7.E7.9A.84.E5.86.B2.E7.AA.81.E6.83.85.E5.86.B5.E5.90.97.EF.BC.9F"></a><h3> <span class="mw-headline">同时使用 currval() 会导致和其他用户的冲突情况吗？</span></h3>
<p>不会。currval() 返回的是你本次会话进程所赋的值而不是所有用户的当前值。
</p>
<a name=".E4.B8.BA.E4.BB.80.E4.B9.88.E4.B8.8D.E5.9C.A8.E4.BA.8B.E5.8A.A1.E5.BC.82.E5.B8.B8.E4.B8.AD.E6.AD.A2.E5.90.8E.E9.87.8D.E7.94.A8.E5.BA.8F.E5.88.97.E5.8F.B7.E5.91.A2.EF.BC.9F.E4.B8.BA.E4.BB.80.E4.B9.88.E5.9C.A8.E5.BA.8F.E5.88.97.E5.8F.B7.E5.AD.97.E6.AE.B5.E7.9A.84.E5.8F.96.E5.80.BC.E4.B8.AD.E5.AD.98.E5.9C.A8.E9.97.B4.E6.96.AD.E5.91.A2.EF.BC.9F"></a><h3> <span class="mw-headline">为什么不在事务异常中止后重用序列号呢？为什么在序列号字段的取值中存在间断呢？</span></h3>
<p>为了提高并发性，序列号在需要的时候赋予正在运行的事务，并且在事务结束之前不进行锁定， 这就会导致异常中止的事务后，序列号会出现间隔。
</p>
<a name=".E4.BB.80.E4.B9.88.E6.98.AF_OID_.EF.BC.9F.E4.BB.80.E4.B9.88.E6.98.AF_CTID_.EF.BC.9F"></a><h3> <span class="mw-headline">什么是 OID ？什么是 CTID ？</span></h3>
<p>PostgreSQL 里创建的每一行记录都会获得一个唯一的OID，除非在创建表时使用WITHOUT OIDS选项。 OID创建时会自动生成一个4字节的整数，所有 OID 在相应PostgreSQL服务器中均是唯一的。 然而，它在超过40亿时将溢出， OID此后会出现重复。PostgreSQL 在它的内部系统表里使用 OID 在表之间建立联系。
</p><p>在用户的数据表中，最好是使用SERIAl来代替OID 因为SERIAL只要保证在单个表中的数值是唯一的就可以了，这样它溢出的可能性就非常小了， SERIAL8可用来保存8字节的序列数值。
</p><p>CTID 用于标识带着数据块（地址）和（块内）偏移的特定的物理行。 CTID 在记录被更改或重载后发生改变。索引数据使用它们指向物理行。
</p>
<a name=".E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E6.94.B6.E5.88.B0.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF.E2.80.9CERROR:_Memory_exhausted_in_AllocSetAlloc.28.29.E2.80.9D.EF.BC.9F"></a><h3> <span class="mw-headline">为什么我收到错误信息“ERROR: Memory exhausted in AllocSetAlloc()”？</span></h3>
<p>这很可能是系统的虚拟内存用光了，或者内核对某些资源有较低的限制值。在启动 postmaster 之前试试下面的命令：
</p>
<pre>
   ulimit -d 262144
   limit datasize 256m
</pre>
<p>取决于你用的 shell，上面命令只有一条能成功，但是它将把你的进程数据段限制设得比较高， 因而也许能让查询完成。这条命令应用于当前进程，以及所有在这条命令运行后创建的子进程。 如果你是在运行SQL客户端时因为后台返回了太多的数据而出现问题，请在运行客户端之前执行上述命令。
</p>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E6.89.8D.E8.83.BD.E7.9F.A5.E9.81.93.E6.89.80.E8.BF.90.E8.A1.8C.E7.9A.84PostgreSQL.E7.9A.84.E7.89.88.E6.9C.AC.EF.BC.9F"></a><h3> <span class="mw-headline">我如何才能知道所运行的PostgreSQL的版本？</span></h3>
<p>从 psql 里，输入 SELECT version();指令。
</p>
<a name=".E6.88.91.E5.A6.82.E4.BD.95.E5.88.9B.E5.BB.BA.E4.B8.80.E4.B8.AA.E7.BC.BA.E7.9C.81.E5.80.BC.E6.98.AF.E5.BD.93.E5.89.8D.E6.97.B6.E9.97.B4.E7.9A.84.E5.AD.97.E6.AE.B5.EF.BC.9F"></a><h3> <span class="mw-headline">我如何创建一个缺省值是当前时间的字段？</span></h3>
<p>使用 CURRENT_TIMESTAMP：
</p>
<pre>
CREATE TABLE test (x int, modtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP );
</pre>
<a name=".E6.88.91.E6.80.8E.E6.A0.B7.E8.BF.9B.E8.A1.8C_outer_join_.EF.BC.88.E5.A4.96.E8.BF.9E.E6.8E.A5.EF.BC.89.EF.BC.9F"></a><h3> <span class="mw-headline">我怎样进行 outer join （外连接）？</span></h3>
<p>PostgreSQL 采用标准的 SQL 语法支持外连接。这里是两个例子：
</p>
<pre>
   SELECT *
   FROM t1 LEFT OUTER JOIN t2 ON (t1.col = t2.col);
</pre>
<p>或是
</p>
<pre>
   SELECT *
   FROM t1 LEFT OUTER JOIN t2 USING (col);
</pre>
<p>这两个等价的查询在 t1.col 和 t2.col 上做连接，并且返回 t1 中所有未连接的行（那些在 t2 中没有匹配的行）。 右[外]连接（RIGHT OUTER JOIN）将返回 t2 中未连接的行。 完全外连接（FULL OUTER JOIN）将返回 t1 和 t2 中未连接的行。 关键字 OUTER 在左[外]连接、右[外]连接和完全[外]连接中是可选的，普通连接被称为内连接（INNER JOIN）。
</p>
<a name=".E5.A6.82.E4.BD.95.E4.BD.BF.E7.94.A8.E6.B6.89.E5.8F.8A.E5.A4.9A.E4.B8.AA.E6.95.B0.E6.8D.AE.E5.BA.93.E7.9A.84.E6.9F.A5.E8.AF.A2.EF.BC.9F"></a><h3> <span class="mw-headline">如何使用涉及多个数据库的查询？</span></h3>
<p>没有办法查询当前数据库之外的数据库。 因为PostgreSQL要加载与数据库相关的系统目录（系统表），因此跨数据库的查询如何执行是不定的。
</p><p>附加增值模块contrib/dblink允许采用函数调用实现跨库查询。当然用户也可以同时连接到不同的数据库执行查询然后在客户端合并结果。
</p>
<a name=".E5.A6.82.E4.BD.95.E8.AE.A9.E5.87.BD.E6.95.B0.E8.BF.94.E5.9B.9E.E5.A4.9A.E8.A1.8C.E6.88.96.E5.A4.9A.E5.88.97.E6.95.B0.E6.8D.AE.EF.BC.9F"></a><h3> <span class="mw-headline">如何让函数返回多行或多列数据？</span></h3>
<p>在函数中返回数据记录集的功能是很容易使用的，详情参见： <a href="http://www.postgresql.org/docs/techdocs.17" class="external free" title="http://www.postgresql.org/docs/techdocs.17" rel="nofollow">http://www.postgresql.org/docs/techdocs.17</a>
</p>
<a name=".E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E5.9C.A8.E4.BD.BF.E7.94.A8PL.2FPgSQL.E5.87.BD.E6.95.B0.E5.AD.98.E5.8F.96.E4.B8.B4.E6.97.B6.E8.A1.A8.E6.97.B6.E4.BC.9A.E6.94.B6.E5.88.B0.E9.94.99.E8.AF.AF.E4.BF.A1.E6.81.AF.E2.80.9Crelation_with_OID_.23.23.23.23.23_does_not_exist.E2.80.9D.EF.BC.9F"></a><h3> <span class="mw-headline">为什么我在使用PL/PgSQL函数存取临时表时会收到错误信息“relation with OID ##### does not exist”？</span></h3>
<p>在PostgreSQL 8.3版本之前，PL/PgSQL会缓存函数的脚本内容，由此带来的一个不好的副作用是若一个 PL/PgSQL 函数访问了一个临时表，然后该表被删除并重建了，则再次调用该函数将失败， 因为缓存的函数内容仍然指向旧的临时表。解决的方法是在 PL/PgSQL 中用EXECUTE 对临时表进行访问。这样会保证查询在执行前总会被重新解析。
</p><p>这个问题在8.3及以后的版本中不会再出现。
</p>
<a name=".E7.9B.AE.E5.89.8D.E6.9C.89.E5.93.AA.E4.BA.9B.E6.95.B0.E6.8D.AE.E5.A4.8D.E5.88.B6.E6.96.B9.E6.A1.88.E5.8F.AF.E7.94.A8.EF.BC.9F"></a><h3><span class="editsection">[<a href="/mwiki/index.php?title=PostgreFAQ&amp;action=edit&amp;section=51" title="Edit section: 目前有哪些数据复制方案可用？">编辑</a>]</span> <span class="mw-headline">目前有哪些数据复制方案可用？</span></h3>
<p>“复制”只是一个术语，有好几种复制技术可用，每种都有优点和缺点：
</p><p>主/从复制方式是允许一个主服务器接受读/写的申请，而多个从服务器只能接受读/SELECT查询的申请， 目前最流行且免费的主/从PostgreSQL复制方案是 Slony-I 。
</p><p>多个主服务器的复制方式允许将读/写的申请发送给多台的计算机，这种方式由于需要在多台服务器之间同步数据变动 可能会带来较严重的性能损失，Pgcluster是目前这种方案 中最好的，而且还可以免费下载。
</p><p>也有一些商业需付费和基于硬件的数据复制方案，支持上述各种复制模型。
</p>
<a name=".E4.B8.BA.E4.BD.95.E6.9F.A5.E8.AF.A2.E7.BB.93.E6.9E.9C.E6.98.BE.E7.A4.BA.E7.9A.84.E8.A1.A8.E5.90.8D.E6.88.96.E5.88.97.E5.90.8D.E4.B8.8E.E6.88.91.E7.9A.84.E6.9F.A5.E8.AF.A2.E8.AF.AD.E5.8F.A5.E4.B8.AD.E7.9A.84.E4.B8.8D.E5.90.8C.EF.BC.9F.E4.B8.BA.E4.BD.95.E5.A4.A7.E5.86.99.E7.8A.B6.E6.80.81.E4.B8.8D.E8.83.BD.E4.BF.9D.E7.95.99.EF.BC.9F"></a><h3> <span class="mw-headline">为何查询结果显示的表名或列名与我的查询语句中的不同？为何大写状态不能保留？</span></h3>
<p>最常见的原因是在创建表时对表名或是列名使用了双引号“”，当使用了双引号后，表名或列名（称为标识符）存储时是区分 大小写的， 这意谓着你在查询时表名或列名也应使用双引号，一些工具软件，像pgAdmin会在发出创建表的指令时自动地在每个标识符上加双引号。 因此，为了标识符的统一，你应该：
</p>
<ul><li> 在创建表时避免将标识符使用双引号引起来。
</li><li> 在标识符中只使用小写字母。
</li><li> （为了与已存在的标识符相同）在查询中使用双引号将标识符引起来。
</li></ul>

	</div>
	</div>
	</div>
</div>

