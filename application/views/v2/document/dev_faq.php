
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
				<li class="active">开发人员常见问题汇总(DEV_FAQ)... (更新于: <?php echo $last_modified ; ?>)</li>
            </ol>

            <div class="well well-sm" style="position: relative;">


<br>
<p>本文档的英文最新版本可以在[ <a href="http://wiki.postgresql.org/wiki/Developer_FAQ" target=_blank>这里Wiki</a> ]查看。

<table id="toc" class="toc"><tr><td><div id="toctitle"><h2>目录</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#.E5.8A.A0.E5.85.A5.E6.88.91.E4.BB.AC"><span class="tocnumber">1</span> <span class="toctext">加入我们</span></a>
<ul>
<li class="toclevel-2 tocsection-2"><a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.8F.82.E4.B8.8EPostgreSQL.E7.9A.84.E5.BC.80.E5.8F.91.E5.B7.A5.E4.BD.9C.3F"><span class="tocnumber">1.1</span> <span class="toctext">我该如何参与PostgreSQL的开发工作?</span></a></li>
<li class="toclevel-2 tocsection-3"><a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E4.B8.8B.E8.BD.BD.2F.E6.9B.B4.E6.96.B0.E5.BD.93.E5.89.8D.E7.9A.84.E6.BA.90.E4.BB.A3.E7.A0.81.3F"><span class="tocnumber">1.2</span> <span class="toctext">我该如何下载/更新当前的源代码?</span></a></li>
<li class="toclevel-2 tocsection-4"><a href="#.E5.AF.B9.E6.BA.90.E4.BB.A3.E7.A0.81.E8.BF.9B.E8.A1.8C.E5.BC.80.E5.8F.91.E9.9C.80.E8.A6.81.E4.BB.80.E4.B9.88.E5.BC.80.E5.8F.91.E7.8E.AF.E5.A2.83.3F"><span class="tocnumber">1.3</span> <span class="toctext">对源代码进行开发需要什么开发环境?</span></a></li>
<li class="toclevel-2 tocsection-5"><a href="#PostgreSQL.E7.9A.84.E5.93.AA.E4.BA.9B.E6.96.B9.E9.9D.A2.E5.8F.AF.E4.BB.A5.E6.9D.A5.E5.BC.80.E5.B1.95.E7.9B.B8.E5.85.B3.E5.B7.A5.E4.BD.9C.3F"><span class="tocnumber">1.4</span> <span class="toctext">PostgreSQL的哪些方面可以来开展相关工作?</span></a></li>
<li class="toclevel-2 tocsection-6"><a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.8F.82.E4.B8.8EPostgreSQL.E7.AB.99.E7.82.B9.E7.9A.84.E5.BC.80.E5.8F.91.E5.B7.A5.E4.BD.9C.3F"><span class="tocnumber">1.5</span> <span class="toctext">我该如何参与PostgreSQL站点的开发工作?</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-7"><a href="#.E5.BC.80.E5.8F.91.E5.B7.A5.E5.85.B7.E5.92.8C.E5.B8.AE.E5.8A.A9"><span class="tocnumber">2</span> <span class="toctext">开发工具和帮助</span></a>
<ul>
<li class="toclevel-2 tocsection-8"><a href="#.E6.BA.90.E4.BB.A3.E7.A0.81.E7.9A.84.E7.BB.93.E6.9E.84.E6.98.AF.E6.80.8E.E6.A0.B7.E7.BB.84.E7.BB.87.E7.9A.84.3F"><span class="tocnumber">2.1</span> <span class="toctext">源代码的结构是怎样组织的?</span></a></li>
<li class="toclevel-2 tocsection-9"><a href="#.E5.AF.B9.E5.BC.80.E5.8F.91.E8.80.85.E6.9C.89.E5.93.AA.E4.BA.9B.E5.8F.AF.E7.94.A8.E7.9A.84.E5.B7.A5.E5.85.B7.3F"><span class="tocnumber">2.2</span> <span class="toctext">对开发者有哪些可用的工具?</span></a></li>
<li class="toclevel-2 tocsection-10"><a href="#PostgreSQL.E7.9A.84.E7.BC.96.E7.A0.81.E9.A3.8E.E6.A0.BC.E6.98.AF.E4.BB.80.E4.B9.88.E6.A0.B7.E5.AD.90.E7.9A.84.3F"><span class="tocnumber">2.3</span> <span class="toctext">PostgreSQL的编码风格是什么样子的?</span></a></li>
<li class="toclevel-2 tocsection-11"><a href="#.E6.9C.89.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97.E7.9A.84.E7.B3.BB.E7.BB.9F.E7.9B.AE.E5.BD.95.E5.9B.BE.E8.A1.A8.E5.90.97.3F"><span class="tocnumber">2.4</span> <span class="toctext">有可以获得的系统目录图表吗?</span></a></li>
<li class="toclevel-2 tocsection-12"><a href="#.E5.93.AA.E4.BA.9B.E4.B9.A6.E5.AF.B9.E5.BC.80.E5.8F.91.E8.80.85.E6.98.AF.E6.9C.89.E5.B8.AE.E5.8A.A9.E7.9A.84.3F"><span class="tocnumber">2.5</span> <span class="toctext">哪些书对开发者是有帮助的?</span></a></li>
<li class="toclevel-2 tocsection-13"><a href="#configure.E9.83.BD.E5.92.8C.E4.BB.80.E4.B9.88.E5.86.85.E5.AE.B9.E6.9C.89.E5.85.B3"><span class="tocnumber">2.6</span> <span class="toctext">configure都和什么内容有关</span></a></li>
<li class="toclevel-2 tocsection-14"><a href="#.E6.88.91.E5.A6.82.E4.BD.95.E6.B7.BB.E5.8A.A0.E4.B8.80.E4.B8.AA.E6.96.B0.E7.9A.84.E7.AB.AF.E5.8F.A3.3F"><span class="tocnumber">2.7</span> <span class="toctext">我如何添加一个新的端口?</span></a></li>
<li class="toclevel-2 tocsection-15"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E4.B8.8D.E4.BD.BF.E7.94.A8.E7.BA.BF.E7.A8.8B.E3.80.81.E8.A3.B8.E8.AE.BE.E5.A4.87.E5.92.8C.E5.BC.82.E6.AD.A5I.2FO.EF.BC.8C.3C.E5.9C.A8.E8.BF.99.E9.87.8C.E6.B7.BB.E5.8A.A0.E4.BD.A0.E5.96.9C.E6.AC.A2.E7.9A.84.E9.AB.98.E7.BA.A7.E7.89.B9.E6.80.A7.3E.3F"><span class="tocnumber">2.8</span> <span class="toctext">为什么不使用线程、裸设备和异步I/O，&lt;在这里添加你喜欢的高级特性&gt;?</span></a></li>
<li class="toclevel-2 tocsection-16"><a href="#.E4.BB.A3.E7.A0.81.E5.88.86.E6.94.AF.E6.98.AF.E5.A6.82.E4.BD.95.E7.AE.A1.E7.90.86.E7.9A.84.3F"><span class="tocnumber">2.9</span> <span class="toctext">代码分支是如何管理的?</span></a></li>
<li class="toclevel-2 tocsection-17"><a href="#.E5.93.AA.E9.87.8C.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97SQL.E6.A0.87.E5.87.86.E7.9A.84.E5.89.AF.E6.9C.AC.3F"><span class="tocnumber">2.10</span> <span class="toctext">哪里可以获得SQL标准的副本?</span></a></li>
<li class="toclevel-2 tocsection-18"><a href="#.E6.88.91.E5.9C.A8.E5.93.AA.E9.87.8C.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97.E6.8A.80.E6.9C.AF.E6.8F.B4.E5.8A.A9.3F"><span class="tocnumber">2.11</span> <span class="toctext">我在哪里可以获得技术援助?</span></a></li>
<li class="toclevel-2 tocsection-19"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E4.BD.A0.E4.BB.AC.E6.B2.A1.E6.9C.89.E7.94.A8SVN.E3.80.81Git.E3.80.81Monotone.E6.88.96.E8.80.85VSS.E6.9B.BF.E6.8D.A2.E6.8E.89CVS.EF.BC.8C.3C.E5.9C.A8.E8.BF.99.E9.87.8C.E6.B7.BB.E5.8A.A0.E4.BD.A0.E5.96.9C.E6.AC.A2.E7.9A.84SCMS.3E.EF.BC.9F"><span class="tocnumber">2.12</span> <span class="toctext">为什么你们没有用SVN、Git、Monotone或者VSS替换掉CVS，&lt;在这里添加你喜欢的SCMS&gt;？</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-20"><a href="#.E5.BC.80.E5.8F.91.E6.AD.A5.E9.AA.A4"><span class="tocnumber">3</span> <span class="toctext">开发步骤</span></a>
<ul>
<li class="toclevel-2 tocsection-21"><a href="#.E5.9C.A8.E9.80.89.E6.8B.A9.E4.BA.86.E4.B8.80.E9.A1.B9.E4.BB.BB.E5.8A.A1.E5.90.8E.EF.BC.8C.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.BC.80.E5.B1.95.E7.9B.B8.E5.85.B3.E5.B7.A5.E4.BD.9C.3F"><span class="tocnumber">3.1</span> <span class="toctext">在选择了一项任务后，我该如何开展相关工作?</span></a></li>
<li class="toclevel-2 tocsection-22"><a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E6.B5.8B.E8.AF.95.E6.88.91.E5.AF.B9.E4.BB.A3.E7.A0.81.E5.81.9A.E5.87.BA.E7.9A.84.E6.94.B9.E5.8F.98.3F"><span class="tocnumber">3.2</span> <span class="toctext">我该如何测试我对代码做出的改变?</span></a>
<ul>
<li class="toclevel-3 tocsection-23"><a href="#.E5.9F.BA.E6.9C.AC.E7.9A.84.E7.B3.BB.E7.BB.9F.E6.B5.8B.E8.AF.95"><span class="tocnumber">3.2.1</span> <span class="toctext">基本的系统测试</span></a></li>
<li class="toclevel-3 tocsection-24"><a href="#.E8.BF.90.E8.A1.8C.E6.97.B6.E7.8E.AF.E5.A2.83"><span class="tocnumber">3.2.2</span> <span class="toctext">运行时环境</span></a></li>
<li class="toclevel-3 tocsection-25"><a href="#.E5.9B.9E.E5.BD.92.E6.B5.8B.E8.AF.95.E5.A5.97.E4.BB.B6"><span class="tocnumber">3.2.3</span> <span class="toctext">回归测试套件</span></a></li>
<li class="toclevel-3 tocsection-26"><a href="#.E5.85.B6.E5.AE.83.E8.BF.90.E8.A1.8C.E6.97.B6.E6.B5.8B.E8.AF.95"><span class="tocnumber">3.2.4</span> <span class="toctext">其它运行时测试</span></a></li>
<li class="toclevel-3 tocsection-27"><a href="#.E5.8D.95.E5.85.83.E6.B5.8B.E8.AF.95.E3.80.81.E9.9D.99.E6.80.81.E5.88.86.E6.9E.90.E5.92.8C.E6.A8.A1.E5.9E.8B.E6.A3.80.E6.B5.8B.E7.AD.89.E8.AF.A5.E5.A6.82.E5.92.8C.E8.BF.9B.E8.A1.8C.3F"><span class="tocnumber">3.2.5</span> <span class="toctext">单元测试、静态分析和模型检测等该如和进行?</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-28"><a href="#.E6.88.91.E5.B7.B2.E7.BB.8F.E5.BC.80.E5.8F.91.E4.BA.86.E4.B8.80.E4.B8.AA.E8.A1.A5.E4.B8.81.EF.BC.8C.E6.8E.A5.E4.B8.8B.E6.9D.A5.E8.AF.A5.E6.80.8E.E4.B9.88.E5.81.9A.3F"><span class="tocnumber">3.3</span> <span class="toctext">我已经开发了一个补丁，接下来该怎么做?</span></a></li>
<li class="toclevel-2 tocsection-29"><a href="#.E5.BD.93.E6.88.91.E6.8F.90.E4.BA.A4.E6.88.91.E7.9A.84.E8.A1.A5.E4.B8.81.E5.90.8E.EF.BC.8C.E5.B0.86.E5.8F.91.E7.94.9F.E4.BB.80.E4.B9.88.3F"><span class="tocnumber">3.4</span> <span class="toctext">当我提交我的补丁后，将发生什么?</span></a></li>
<li class="toclevel-2 tocsection-30"><a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.B8.AE.E5.8A.A9.E8.BF.9B.E8.A1.8C.E8.A1.A5.E4.B8.81.E5.A4.8D.E5.AE.A1.3F"><span class="tocnumber">3.5</span> <span class="toctext">我该如何帮助进行补丁复审?</span></a></li>
<li class="toclevel-2 tocsection-31"><a href="#.E6.88.91.E9.9C.80.E8.A6.81.E7.AD.BE.E7.BD.B2.E7.89.88.E6.9D.83.E8.BD.AC.E8.AE.A9.E5.90.97.3F"><span class="tocnumber">3.6</span> <span class="toctext">我需要签署版权转让吗?</span></a></li>
<li class="toclevel-2 tocsection-32"><a href="#.E6.88.91.E5.8F.AF.E4.BB.A5.E5.9C.A8.E9.80.82.E5.BD.93.E7.9A.84.E5.9C.B0.E6.96.B9.E6.B7.BB.E5.8A.A0.E6.88.91.E8.87.AA.E5.B7.B1.E7.9A.84.E7.89.88.E6.9D.83.E5.A3.B0.E6.98.8E.E5.90.97.3F"><span class="tocnumber">3.7</span> <span class="toctext">我可以在适当的地方添加我自己的版权声明吗?</span></a></li>
<li class="toclevel-2 tocsection-33"><a href="#PostgreSQL.E8.AE.B8.E5.8F.AF.E8.AF.81.E6.9C.AC.E8.BA.AB.E4.B8.8D.E9.9C.80.E8.A6.81.E4.BF.9D.E6.8C.81.E7.89.88.E6.9D.83.E5.A3.B0.E6.98.8E.E7.9A.84.E5.AE.8C.E6.95.B4.E6.80.A7.E5.90.97.3F"><span class="tocnumber">3.8</span> <span class="toctext">PostgreSQL许可证本身不需要保持版权声明的完整性吗?</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-34"><a href="#.E6.8A.80.E6.9C.AF.E9.97.AE.E9.A2.98"><span class="tocnumber">4</span> <span class="toctext">技术问题</span></a>
<ul>
<li class="toclevel-2 tocsection-35"><a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E4.BB.8E.E5.90.8E.E7.AB.AF.E4.BB.A3.E7.A0.81.E9.AB.98.E6.95.88.E5.9C.B0.E8.8E.B7.E5.8F.96.E5.88.B0.E7.B3.BB.E7.BB.9F.E7.9B.AE.E5.BD.95.E4.B8.AD.E7.9A.84.E4.BF.A1.E6.81.AF.3F"><span class="tocnumber">4.1</span> <span class="toctext">我该如何从后端代码高效地获取到系统目录中的信息?</span></a></li>
<li class="toclevel-2 tocsection-36"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E8.A1.A8.E3.80.81.E5.88.97.E3.80.81.E7.B1.BB.E5.9E.8B.E3.80.81.E5.87.BD.E6.95.B0.E3.80.81.E8.A7.86.E5.9B.BE.E7.9A.84.E5.90.8D.E5.AD.97.E6.9C.89.E6.97.B6.E5.80.99.E4.BD.9C.E4.B8.BAName.E6.88.96.E8.80.85NameData.E5.BC.95.E7.94.A8.EF.BC.8C.E6.9C.89.E6.97.B6.E5.80.99.E5.8F.88.E4.BD.9C.E4.B8.BAchar_.2A.E6.9D.A5.E5.BC.95.E7.94.A8.EF.BC.9F"><span class="tocnumber">4.2</span> <span class="toctext">为什么表、列、类型、函数、视图的名字有时候作为Name或者NameData引用，有时候又作为char *来引用？</span></a></li>
<li class="toclevel-2 tocsection-37"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E4.BB.AC.E4.BD.BF.E7.94.A8Node.E5.92.8CList.E6.9D.A5.E4.BA.A7.E7.94.9F.E6.95.B0.E6.8D.AE.E7.BB.93.E6.9E.84.EF.BC.9F"><span class="tocnumber">4.3</span> <span class="toctext">为什么我们使用Node和List来产生数据结构？</span></a></li>
<li class="toclevel-2 tocsection-38"><a href="#.E6.88.91.E5.88.9A.E7.BB.99.E4.B8.80.E4.B8.AA.E7.BB.93.E6.9E.84.E4.BD.93.E6.B7.BB.E5.8A.A0.E4.BA.86.E4.B8.80.E4.B8.AA.E5.AD.97.E6.AE.B5.E3.80.82.E6.88.91.E8.BF.98.E9.9C.80.E8.A6.81.E5.81.9A.E5.93.AA.E4.BA.9B.E5.85.B6.E5.AE.83.E5.B7.A5.E4.BD.9C.3F"><span class="tocnumber">4.4</span> <span class="toctext">我刚给一个结构体添加了一个字段。我还需要做哪些其它工作?</span></a></li>
<li class="toclevel-2 tocsection-39"><a href="#.E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E4.BB.AC.E4.BD.BF.E7.94.A8palloc.28.29.E5.92.8Cpfree.28.29.E6.9D.A5.E5.88.86.E9.85.8D.E5.86.85.E5.AD.98.3F"><span class="tocnumber">4.5</span> <span class="toctext">为什么我们使用palloc()和pfree()来分配内存?</span></a></li>
<li class="toclevel-2 tocsection-40"><a href="#ereport.28.29.E6.98.AF.E4.BB.80.E4.B9.88.3F"><span class="tocnumber">4.6</span> <span class="toctext">ereport()是什么?</span></a></li>
<li class="toclevel-2 tocsection-41"><a href="#CommandCounterIncrement.28.29.E6.98.AF.E4.BB.80.E4.B9.88.3F"><span class="tocnumber">4.7</span> <span class="toctext">CommandCounterIncrement()是什么?</span></a></li>
<li class="toclevel-2 tocsection-42"><a href="#.E6.88.91.E9.9C.80.E8.A6.81.E5.AF.B9.E6.9F.A5.E8.AF.A2.E8.A7.A3.E6.9E.90.E5.81.9A.E4.B8.80.E4.BA.9B.E6.9B.B4.E6.94.B9.E3.80.82.E4.BD.A0.E4.BB.AC.E5.8F.AF.E4.BB.A5.E8.B6.B3.E5.A4.9F.E8.AF.A6.E7.BB.86.E7.9A.84.E8.A7.A3.E9.87.8A.E8.A7.A3.E6.9E.90.E6.96.87.E4.BB.B6.E5.90.97.EF.BC.9F"><span class="tocnumber">4.8</span> <span class="toctext">我需要对查询解析做一些更改。你们可以足够详细的解释解析文件吗？</span></a></li>
<li class="toclevel-2 tocsection-43"><a href="#.E6.88.91.E5.BE.97.E5.88.B0.E4.BA.86shift.2Freduce.E5.86.B2.E7.AA.81.EF.BC.8C.E6.88.91.E4.B8.8D.E7.9F.A5.E9.81.93.E8.AF.A5.E5.A6.82.E4.BD.95.E5.A4.84.E7.90.86.E5.AE.83"><span class="tocnumber">4.9</span> <span class="toctext">我得到了shift/reduce冲突，我不知道该如何处理它</span></a></li>
<li class="toclevel-2 tocsection-44"><a href="#.E5.93.AA.E4.BA.9B.E8.B0.83.E8.AF.95.E7.89.B9.E6.80.A7.E6.98.AF.E5.8F.AF.E7.94.A8.E7.9A.84.3F"><span class="tocnumber">4.10</span> <span class="toctext">哪些调试特性是可用的?</span></a></li>
</ul>
</li>
</ul>
</td></tr></table>
<h2> <span class="mw-headline" id=".E5.8A.A0.E5.85.A5.E6.88.91.E4.BB.AC"> 加入我们 </span></h2>
<h3> <span class="mw-headline" id=".E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.8F.82.E4.B8.8EPostgreSQL.E7.9A.84.E5.BC.80.E5.8F.91.E5.B7.A5.E4.BD.9C.3F"> 我该如何参与PostgreSQL的开发工作? </span></h3>
<p>下载源代码，并且先对其有一个大概的了解。见<a href="#.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E4.B8.8B.E8.BD.BD.2F.E6.9B.B4.E6.96.B0.E5.BD.93.E5.89.8D.E7.9A.84.E6.BA.90.E4.BB.A3.E7.A0.81.3F">下载源代码</a>
</p><p>订阅并查看<a rel="nofollow" class="external text" href="http://archives.postgresql.org/pgsql-hackers/">pgsql-hackers 邮件列表</a> （通常称作“hackers”）。这里可以看见项目的贡献者和核心开发人员的讨论进展。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E4.B8.8B.E8.BD.BD.2F.E6.9B.B4.E6.96.B0.E5.BD.93.E5.89.8D.E7.9A.84.E6.BA.90.E4.BB.A3.E7.A0.81.3F"> 我该如何下载/更新当前的源代码? </span></h3>
<p>你有很多种方式获取源代码。临时进行开发的开发者可以从ftp://ftp.postgresql.org/pub/snapshot/获取到最新源代码的快照。
</p><p>长期进行开发的开发者可能会希望能够匿名访问我们的源代码管理系统。当前的源代码是保留在git中的。对于通过git来获取源代码的详细信息，请参见http://developer.postgresql.org/pgdocs/postgres/git.html和<a href="/wiki/Working_with_Git" title="Working with Git">Working with Git</a>
</p>
<h3> <span class="mw-headline" id=".E5.AF.B9.E6.BA.90.E4.BB.A3.E7.A0.81.E8.BF.9B.E8.A1.8C.E5.BC.80.E5.8F.91.E9.9C.80.E8.A6.81.E4.BB.80.E4.B9.88.E5.BC.80.E5.8F.91.E7.8E.AF.E5.A2.83.3F"> 对源代码进行开发需要什么开发环境? </span></h3>
<p>PostgreSQL主要是由C语言开发的。该源代码是针对大多数流行的Unix平台和Windows环境的（XP, Windows 2000及以上）。
</p><p>大多数开发者运行类Unix操作系统，并且使用开源工具链，如<a rel="nofollow" class="external text" href="http://gcc.gnu.org">GCC</a>, <a rel="nofollow" class="external text" href="http://www.gnu.org/software/make/make.html">GNU Make</a>, <a rel="nofollow" class="external text" href="http://www.gnu.org/software/gdb/gdb.html">GDB</a>, <a rel="nofollow" class="external text" href="http://www.gnu.org/software/autoconf/">Autoconf</a>等。如果你之前对开源软件做出过贡献，你可能会对这些工具非常熟悉。在Windows平台上的开发者利用<a rel="nofollow" class="external text" href="http://www.mingw.org/">MinGW</a>来使用这一工具链，尽管当前大多数在Windows上的开发是使用Microsoft Visual Studio 2005 (version 8) 开发环境和与其相关的一些工具。
</p><p>构建PostgreSQL所需软件的完整列表可以在<a rel="nofollow" class="external text" href="http://developer.postgresql.org/pgdocs/postgres/install-requirements.html">安装指导</a>上找到。
经常去重新编译源代码的开发者通常会在configure的时候加上--enable-depend参数。这样做的结果就是，如果你对一个C头文件进行了修改，那么所有依赖该该头文件的源文件都会被重新编译。
</p><p>src/Makefile.custom可以被用来设置环境变量，例如CUSTOM_COPT，其在每一次编译时都会使用。
</p>
<h3> <span class="mw-headline" id="PostgreSQL.E7.9A.84.E5.93.AA.E4.BA.9B.E6.96.B9.E9.9D.A2.E5.8F.AF.E4.BB.A5.E6.9D.A5.E5.BC.80.E5.B1.95.E7.9B.B8.E5.85.B3.E5.B7.A5.E4.BD.9C.3F"> PostgreSQL的哪些方面可以来开展相关工作? </span></h3>
<p>突出的特性在<a href="/wiki/Todo" title="Todo">Todo</a>中有详细的介绍。
</p><p>你可以通过查阅<a rel="nofollow" class="external text" href="http://archives.postgresql.org/">archives</a>来学习有关这些特性的更多内容、SQL标准和被大家推荐的一些文章（见<a href="#.E5.93.AA.E4.BA.9B.E4.B9.A6.E5.AF.B9.E5.BC.80.E5.8F.91.E8.80.85.E6.98.AF.E6.9C.89.E5.B8.AE.E5.8A.A9.E7.9A.84.3F">给开发者的书籍</a>）。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.8F.82.E4.B8.8EPostgreSQL.E7.AB.99.E7.82.B9.E7.9A.84.E5.BC.80.E5.8F.91.E5.B7.A5.E4.BD.9C.3F"> 我该如何参与PostgreSQL站点的开发工作? </span></h3>
<p>PostgreSQL站点的开发的讨论在<a rel="nofollow" class="external text" href="http://archives.postgresql.org/pgsql-www/">邮件列表</a>中，并且由<a href="/wiki/Infrastructure_team" title="Infrastructure team">Infrastructure team</a>进行组织。postgresql.org站点的源代码保存在<a rel="nofollow" class="external text" href="http://git.postgresql.org/gitweb/?p=pgweb.git;a=summary">Git repository</a>。
</p>
<h2> <span class="mw-headline" id=".E5.BC.80.E5.8F.91.E5.B7.A5.E5.85.B7.E5.92.8C.E5.B8.AE.E5.8A.A9"> 开发工具和帮助 </span></h2>
<h3> <span class="mw-headline" id=".E6.BA.90.E4.BB.A3.E7.A0.81.E7.9A.84.E7.BB.93.E6.9E.84.E6.98.AF.E6.80.8E.E6.A0.B7.E7.BB.84.E7.BB.87.E7.9A.84.3F"> 源代码的结构是怎样组织的? </span></h3>
<p>如果通过浏览器访问<a rel="nofollow" class="external text" href="http://www.postgresql.org/developer/backend/">How PostgreSQL Processes a Query</a>，你将会在一个流程图中看到描述数据流和后端组件的段落，以及对共享存储区域的描述。你可以点击任何一个流程图来查看对其的描述。如果你之后再点击一个目录名，你将会进入到源代码目录，以浏览其后的实际代码。在一些源代码目录中，我们也同样拥有README文件以描述该模块的功能。当你进入该目录后，浏览器也会显示这些。
</p><p>除了源代码本身所附带的文档，你可以在http://www.postgresql.org/developer/coding中找到一些讨论源代码的论文和演示文档。<a rel="nofollow" class="external free" href="http://neilconway.org/talks/hacking/">http://neilconway.org/talks/hacking/</a> 是一个非常出色的演示文档。
</p>
<h3> <span class="mw-headline" id=".E5.AF.B9.E5.BC.80.E5.8F.91.E8.80.85.E6.9C.89.E5.93.AA.E4.BA.9B.E5.8F.AF.E7.94.A8.E7.9A.84.E5.B7.A5.E5.85.B7.3F"> 对开发者有哪些可用的工具? </span></h3>
<p>首先，所有在src/tools目录中的文件都是为开发者设计的。
</p>
<pre>   RELEASE_CHANGES 我们对每一个发行版做出了哪些改变
   ccsym           找到你的编译器所产生的标准定义
   copyright       版权声明
</pre>
<pre>   entab           将空格转换为制表符，pgindent使用了该工具。
   find_static     找到可以写成静态的函数
   find_typedef    找到源代码中的typedefs
   find_badmacros  找到没有正确使用大括号的宏
   fsync           一个脚本，其用来展示出cache同步系统调用的代价信息。                 
   make_ctags      在每一个目录中制作vi的‘tags’文件
   make_diff       制作*.orig和源代码之间的差异
   make_etags      制作emcas的‘etags’文件
   make_keywords   对我们的保留字和SQL 92进行对比
   make_mkid       制作mkid的ID文件
   git_changelog   常常用于产生针对每一个发行版的变化列表
   pginclude       用来添加/删除include文件的脚本
   pgindent        indent的源文件
   pgtest          一个半自动化的构建系统
   thread          一个线程测试的脚本
</pre>
<p>在src/include/目录下：
</p>
<pre>   unused_oids     一个脚本，其可以找出在系统表中未使用的OID
   duplicate_oids  找到在系统表重复定义的OID
</pre>
<p>tools/backend已经在之前的问答部分讲解过了。
</p><p>第二，你应该有一个可以处理标签的编辑器，这样你就能够对一个函数的调用加标签以查看该函数的定义，在这之后可以在函数内部加标签以查看更低层次的函数，并且之后再次返回到开始的函数那里。大多数编辑器通过tags或etags文件来支持这种功能。
</p><p>第三，你需要从ftp://ftp.gnu.org/gnu/idutils/获取id-utils。
通过运行tools/make_makid，将创建一个源文件符号的归档，其可以立即用来查询。
许多开发者使用cscope，其可以在http://cscope.sf.net/中找到。其他一些人也使用glimpse，其可以在http://webglimpse.net/中找到。
</p><p>tools/make_diff中有工具去创建patch diff文件，其可以应用至分发版中。这样产生的context diff更加具有可读性。
</p><p>pgident常用于修订源代码的风格以符合我们的标准，其通常在每一个开发周期的最后被运行：有关我们代码风格的更多信息请参见<a href="#PostgreSQL.E7.9A.84.E7.BC.96.E7.A0.81.E9.A3.8E.E6.A0.BC.E6.98.AF.E4.BB.80.E4.B9.88.E6.A0.B7.E5.AD.90.E7.9A.84.3F">这个问题</a>
</p><p>pginclude包含了一些脚本，其常常用于添加#include行以包括一些文件，以及当不需要的时候，删除一些#include行。
</p><p>当你添加了一些内建的对象，诸如类型或函数时，你将需要赋给它们OID值。我们的惯例是，所有手工分配的OID都是彼此不同的，并且在区间1-9999范围内。（在单独的一个系统目录内，会机械性地保持OID的唯一性，但是为了清晰一些，我们需要OID在整个系统中都保持唯一性。）在src/include目录中有一个unused_oids的脚本，运行它可以显示出当前未使用的OID。如果想要赋一个新的OID，就可以根据unused_oids的结果来选择一个，并且尽量选择一个和当前已经存在的对象相近的OID。也请参见duplicate_oids脚本，如果你犯了错误（没有保持OID的唯一性），它也会给出提示。
</p>
<h3> <span class="mw-headline" id="PostgreSQL.E7.9A.84.E7.BC.96.E7.A0.81.E9.A3.8E.E6.A0.BC.E6.98.AF.E4.BB.80.E4.B9.88.E6.A0.B7.E5.AD.90.E7.9A.84.3F"> PostgreSQL的编码风格是什么样子的? </span></h3>
<p>我们的标准格式是BSD风格的，即每一级代码的缩进为一个tab，其中一个tab是由四个空格组成。你将需要设置你的编辑器或文件查看器以将tab显示为四个空格：
</p><p>对于<b>vi</b>(in <code>.exrc</code> or <code>.vimrc</code>)：
</p>
<pre>set tabstop=4 shiftwidth=4 noexpandtab
</pre>
<p>对于<b>less</b>或<b>more</b>,指明<code>-x4</code>以获取正确的缩进。
</p><p>最新的源代码中的tools/editors目录包含了一些可以用在emacs、xeamcs和vim编辑器的样板，其可以帮助保持PostgreSQL的编码标准。
</p><p>pgindent将通过指定你操作系统工具的缩进标志来格式化代码。pgindent在每个beta版的测试期之前会针对所有文件运行一次。其自动格式化所有的源文件以保持它们的一致性。需要特定的换行的注释块应该被格式化为块式注释，这种注释方式以/*------开头。这些注释将不会被重新格式化。
</p><p>请参见文档中的<a rel="nofollow" class="external text" href="http://developer.postgresql.org/pgdocs/postgres/source-format.html">格式化</a>一节。<a rel="nofollow" class="external text" href="http://archives.postgresql.org/message-id/1221125165.5637.12.camel@abbas-laptop">这篇文章</a>谈论了我们的变量和函数名字的命名方式。
</p><p>如果你想知道为什么我们在这些地方如此费心，<a rel="nofollow" class="external text" href="http://ezine.daemonnews.org/200112/single_coding_style.html">这篇文章</a>描述了一致性编码风格的意义所在。
</p>
<h3> <span class="mw-headline" id=".E6.9C.89.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97.E7.9A.84.E7.B3.BB.E7.BB.9F.E7.9B.AE.E5.BD.95.E5.9B.BE.E8.A1.A8.E5.90.97.3F"> 有可以获得的系统目录图表吗? </span></h3>
<p>是的，我们<a rel="nofollow" class="external text" href="http://dalibo.org/_media/articles/catalog.png">至少有一个</a> （<a rel="nofollow" class="external text" href="http://svn.postgresql.fr/repos/materials/advocacy/trunk/posters/catalogs83.svg">SVG版本</a>）
</p>
<h3> <span class="mw-headline" id=".E5.93.AA.E4.BA.9B.E4.B9.A6.E5.AF.B9.E5.BC.80.E5.8F.91.E8.80.85.E6.98.AF.E6.9C.89.E5.B8.AE.E5.8A.A9.E7.9A.84.3F"> 哪些书对开发者是有帮助的? </span></h3>
<p>有5本较为不错的书籍：
</p>
<ul><li> An Introduction to Database Systems, by C.J. Date, Addison, Wesley
</li><li> A Guide to the SQL Standard, by C.J. Date, et. al, Addison, Wesley
</li><li> Fundamentals of Database Systems, by Elmasri and Navathe
</li><li> Transaction Processing, by Jim Gray and Andreas Reuter, Morgan Kaufmann
</li><li> Transactional Information Systems, by Gerhard Weikum and Gottfried Vossen, Morgan Kaufmann
</li></ul>
<h3> <span class="mw-headline" id="configure.E9.83.BD.E5.92.8C.E4.BB.80.E4.B9.88.E5.86.85.E5.AE.B9.E6.9C.89.E5.85.B3"> configure都和什么内容有关 </span></h3>
<p>configure和configure.in文件是GNU autoconf包的一部分。configure允许我们来检测操作系统对不同方面的兼容性，以及接下来可以被C程序和Makefile检测到变量。autoconf也安装在PostgreSQL的主服务器上。如果希望给configure文件添加选项，可以编辑configure.in，之后运行autoconf以产生configure文件。
</p><p>当用户运行configure，其就开始检测操作系统的各项兼容性，将这些结果保存在config.status和config.cache，并且修改*.in文件。例如，如果存在一个Makefile.in，configure将生成一个Makefile，其已经替换掉了configure所找到的@var@参数。
</p><p>当你需要编辑文件时，请确认你没将时间浪费在修改由configure产生的文件。你可以编辑*.in文件，之后重新运行configure以重现创建需要的文件。如果你在源代码目录的顶层目录下运行了make distclean，所有由configure产生的文件将会被移除，此时你将只会看到源代码分发版中的文件。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E5.A6.82.E4.BD.95.E6.B7.BB.E5.8A.A0.E4.B8.80.E4.B8.AA.E6.96.B0.E7.9A.84.E7.AB.AF.E5.8F.A3.3F"> 我如何添加一个新的端口? </span></h3>
<p>为了添加一个新的端口，有很多地方需要被修改。首先，从src/template目录开始。为你的操作系统添加一个合适的入口。同样，使用src/config.guess来添加你的操作系统至src/template/.similar。你不需要精确地匹配操作系统版本。configure的测试将会查找准确的操作系统版本号。并且，如果其没有找到，则将会匹配一个不带有版本号的该操作系统。编辑src/configure.in以添加你的新操作系统。（见上面的configure。）你可能会需要运行autoconf或者也需要给src/configure.in打补丁。
</p><p>接下来，检查src/include/port，并用一个合适的值以添加你的新操作系统文件。幸运的是，已经有了一个针对你的CPU的固定代码在src/include/storage/s_lock.h中。这也有一个src/makefiles目录，其用于处理特定端口的Makefile。如果你需要针对你的操作系统的特定文件，PostgreSQL也有一个backend/port目录专门用于此种目的。
</p>
<h3> <span class="mw-headline" id=".E4.B8.BA.E4.BB.80.E4.B9.88.E4.B8.8D.E4.BD.BF.E7.94.A8.E7.BA.BF.E7.A8.8B.E3.80.81.E8.A3.B8.E8.AE.BE.E5.A4.87.E5.92.8C.E5.BC.82.E6.AD.A5I.2FO.EF.BC.8C.3C.E5.9C.A8.E8.BF.99.E9.87.8C.E6.B7.BB.E5.8A.A0.E4.BD.A0.E5.96.9C.E6.AC.A2.E7.9A.84.E9.AB.98.E7.BA.A7.E7.89.B9.E6.80.A7.3E.3F"> 为什么不使用线程、裸设备和异步I/O，&lt;在这里添加你喜欢的高级特性&gt;? </span></h3>
<p>当最新的操作系统特性出现时，尽可能早的使用该特性往往具有很大的诱惑。我们拒绝这种诱惑。
</p><p>首先，我们已经支持了15种以上的操作系统，因此在我们考虑任何新特性之前，我们都需要保证其能够很好地在现有的系统上建立起来。第二，大多数高级特性并没有带来极大的性能提升。第三，它们通常有一些弱点，诸如较低的可考性或者需要额外的代码。
</p><p>例如，对于后端程序，目前没有使用线程来替代多个进程，因为：
</p>
<ul><li> 根据以往的一些事实，线程并没有很好地被支持，并且会出现一些奇怪的问题。
</li><li> 如果一个单独的进程内有多个线程，那么一个后端程序的错误可以导致其它后端程序崩溃。
</li><li> 使用线程所得到的速度上的提升和现有的后端程序的启动时间相比是十分微不足道的。
</li><li> 后端的代码将变得更加复杂。
</li><li> 终止后端进程允许操作系统快速、干净地释放所有资源，防止内存和文件描述符的泄漏，使得后端进程的关闭更加快速和廉价。
</li></ul>
<p>（对于单独的后端进程是否使用多线程以利用多核来处理单个查询，这是另外一个问题，这里并没有提及）。
</p><p>因此，我们不是不知道新的特性。只是我们对于采纳这些特性非常谨慎。TODO列表经常包含一些指向一些讨论的连接，那里会讨论我们做这些方面的原因。
</p>
<h3> <span class="mw-headline" id=".E4.BB.A3.E7.A0.81.E5.88.86.E6.94.AF.E6.98.AF.E5.A6.82.E4.BD.95.E7.AE.A1.E7.90.86.E7.9A.84.3F"> 代码分支是如何管理的? </span></h3>
<p>有关代码分支和提交补丁是如何处理的的信息请参见<a href="/wiki/Working_with_Git#Using_Back_Branches" title="Working with Git">使用代码分支</a>和<a href="/wiki/Committing_with_Git" title="Committing with Git">Committing with Git</a>。
</p>
<h3> <span class="mw-headline" id=".E5.93.AA.E9.87.8C.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97SQL.E6.A0.87.E5.87.86.E7.9A.84.E5.89.AF.E6.9C.AC.3F"> 哪里可以获得SQL标准的副本? </span></h3>
<p>你理应到<a rel="nofollow" class="external text" href="http://www.iso.ch/">ISO</a>或<a rel="nofollow" class="external text" href="http://www.ansi.org">ANSI</a>上购买SQL标准。搜索ISO/ANSI 9075。ANSI所提供的要便宜一些，但是两个机构所提供的文档的内容是一样的。
</p><p>由于购买一个SQL标准的官方副本是十分昂贵的，所以大多数开发者都依靠在互联网上的各种草稿版本。其中的一部分如下所示：
</p>
<ul><li> SQL-92 <a rel="nofollow" class="external free" href="http://www.contrib.andrew.cmu.edu/~shadow/sql/sql1992.txt">http://www.contrib.andrew.cmu.edu/~shadow/sql/sql1992.txt</a>
</li><li> SQL:1999 <a rel="nofollow" class="external free" href="http://web.cs.ualberta.ca/~yuan/courses/db_readings/ansi-iso-9075-2-1999.pdf">http://web.cs.ualberta.ca/~yuan/courses/db_readings/ansi-iso-9075-2-1999.pdf</a>
</li><li> SQL:2003 <a rel="nofollow" class="external free" href="http://www.wiscorp.com/sql_2003_standard.zip">http://www.wiscorp.com/sql_2003_standard.zip</a>
</li><li> SQL:201x (preliminary) <a rel="nofollow" class="external free" href="http://www.wiscorp.com/sql20nn.zip">http://www.wiscorp.com/sql20nn.zip</a>
</li></ul>
<p>PostgreSQL的文档包含了有关PostgreSQL和<a rel="nofollow" class="external text" href="http://developer.postgresql.org/pgdocs/postgres/features.html">SQL一致性</a>的信息。
</p><p>更多的有关SQL标准的网页如下所示：
</p>
<ul><li> <a rel="nofollow" class="external free" href="http://troels.arvin.dk/db/rdbms/links/#standards">http://troels.arvin.dk/db/rdbms/links/#standards</a>
</li><li> <a rel="nofollow" class="external free" href="http://www.wiscorp.com/SQLStandards.html">http://www.wiscorp.com/SQLStandards.html</a>
</li><li> <a rel="nofollow" class="external free" href="http://www.contrib.andrew.cmu.edu/~shadow/sql.html#syntax">http://www.contrib.andrew.cmu.edu/~shadow/sql.html#syntax</a> (SQL-92)
</li><li> <a rel="nofollow" class="external free" href="http://dbs.uni-leipzig.de/en/lokal/standards.pdf">http://dbs.uni-leipzig.de/en/lokal/standards.pdf</a> (paper)
</li></ul>
<p>成为一个PostgreSQL开发的有意义的贡献者并不一定要获取SQL标准的副本。解释这些标准是十分困难的，并且需要多年的经验。并且大部分PostgreSQL的特性并没有在标准中指出。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E5.9C.A8.E5.93.AA.E9.87.8C.E5.8F.AF.E4.BB.A5.E8.8E.B7.E5.BE.97.E6.8A.80.E6.9C.AF.E6.8F.B4.E5.8A.A9.3F"> 我在哪里可以获得技术援助? </span></h3>
<p>许多有由新接触PostgreSQL源代码的用户提出的技术问题都已经在pgsql-hackers的邮件列表中回答了，邮件列表的归档可以在http://archives.postgresql.org/pgsql-hackers/中找到。
</p><p>如果你没有在上面找到你想要的问题讨论，你也随时可以将你的问题发布在上面。
</p><p>一些主要的PostgreSQL贡献者也同样在irc.freenode.net中的IRC上的#postgresql小组中回答技术问题，包括回答一些和新特性开发有关的问题。
</p>
<h3> <span class="mw-headline" id=".E4.B8.BA.E4.BB.80.E4.B9.88.E4.BD.A0.E4.BB.AC.E6.B2.A1.E6.9C.89.E7.94.A8SVN.E3.80.81Git.E3.80.81Monotone.E6.88.96.E8.80.85VSS.E6.9B.BF.E6.8D.A2.E6.8E.89CVS.EF.BC.8C.3C.E5.9C.A8.E8.BF.99.E9.87.8C.E6.B7.BB.E5.8A.A0.E4.BD.A0.E5.96.9C.E6.AC.A2.E7.9A.84SCMS.3E.EF.BC.9F"> 为什么你们没有用SVN、Git、Monotone或者VSS替换掉CVS，&lt;在这里添加你喜欢的SCMS&gt;？ </span></h3>
<p>这个项目在2010年9月被迁移至Git上了。
</p>
<h2> <span class="mw-headline" id=".E5.BC.80.E5.8F.91.E6.AD.A5.E9.AA.A4"> 开发步骤 </span></h2>
<h3> <span class="mw-headline" id=".E5.9C.A8.E9.80.89.E6.8B.A9.E4.BA.86.E4.B8.80.E9.A1.B9.E4.BB.BB.E5.8A.A1.E5.90.8E.EF.BC.8C.E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.BC.80.E5.B1.95.E7.9B.B8.E5.85.B3.E5.B7.A5.E4.BD.9C.3F"> 在选择了一项任务后，我该如何开展相关工作? </span></h3>
<p>你需要向pgsql-hackers发送一封电子邮件，说明你对你想要做的东西的计划（假设你的贡献并不是微不足道的）。单独开展工作是不被推荐的，因为其他人也可能在做相同的TODO任务，也有可能你对TODO任务有误解。在邮件中，说明你计划使用的方法的内部实现机制，以及任何用户可见的更改（新的语法等）。对于复杂的补丁，得到社区对你计划的反馈是十分重要的。如果没有得到反馈，很有可能是你的补丁被拒绝了。如果你的工作是由公司发起的，请阅读<a rel="nofollow" class="external text" href="http://momjian.us/main/writings/pgsql/company_contributions/">这篇文章</a>，以获得可以让你更加高效的一些提示。
</p><p>我们待复审的补丁队列是经由一个在http://commitfest.postgresql.org上的自定义Web程序<a href="/wiki/CommitFest" title="CommitFest">CommitFest</a>维护的。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E6.B5.8B.E8.AF.95.E6.88.91.E5.AF.B9.E4.BB.A3.E7.A0.81.E5.81.9A.E5.87.BA.E7.9A.84.E6.94.B9.E5.8F.98.3F"> 我该如何测试我对代码做出的改变? </span></h3>
<h4> <span class="mw-headline" id=".E5.9F.BA.E6.9C.AC.E7.9A.84.E7.B3.BB.E7.BB.9F.E6.B5.8B.E8.AF.95"> 基本的系统测试 </span></h4>
<p>测试你的代码最简洁有效的方法就是确保你所修改过的最新版本的代码能够编译通过，并且不产生编译器警告。
</p><p>建议你在configure的时候添加—enable-cassert选项。这将在源代码内打开断言，其将会使得bug更容易被发现。因为它们导致数据损坏或分段冲突。这将会使得调试变得更加容易。
接下来，通过psql完成运行时测试。
</p>
<h4> <span class="mw-headline" id=".E8.BF.90.E8.A1.8C.E6.97.B6.E7.8E.AF.E5.A2.83"> 运行时环境 </span></h4>
<p>为了测试你修改过的PostgreSQL版本，一般习惯于将PostgreSQL安装在本地目录（例如，在你的家目录里）以避免和系统上安装的产生冲突。使用<i>--prefix=</i>选项来运行configure以指定安装位置；使用<i>--with-pgport</i>以指定一个非标准的默认端口也是有意义的。为了运行这个实例，你将需要确保使用了正确的执行程序；根据你的操作系统，一些诸如PATH和LD_LIBRARY_PATH这样的环境变量需要被设置。设置PGDATA环境变量也同样是有意义的。
</p><p>为了避免手动的设置环境变量，你可能想要使用Greg Smith的<a rel="nofollow" class="external text" href="https://github.com/gregs1104/peg">固定脚本</a>，或者在buildfarm上使用的<a rel="nofollow" class="external text" href="https://github.com/PGBuildFarm/client-code">脚本</a>。
</p>
<h4> <span class="mw-headline" id=".E5.9B.9E.E5.BD.92.E6.B5.8B.E8.AF.95.E5.A5.97.E4.BB.B6"> 回归测试套件 </span></h4>
<p>下一步就是用现有的回归测试套件来测试你所做的改变。为了完成这个任务，你需要在源代码的跟目录输入"make check"。如果有任何测试错误，就继续研究错误产生的原因。
</p><p>如果你有意地改变了一些现有的行为，这个改变可能会导致回归测试的失败，但是实际上根本没有进行回归测试。如果是这样，你也需要对回归测试套件添加补丁。
</p>
<h4> <span class="mw-headline" id=".E5.85.B6.E5.AE.83.E8.BF.90.E8.A1.8C.E6.97.B6.E6.B5.8B.E8.AF.95"> 其它运行时测试 </span></h4>
<p>一些开发者利用valgrind （<a rel="nofollow" class="external free" href="http://valgrind.kde.org">http://valgrind.kde.org</a> ）来进行内存检测，gprof（其出自GNU binutils套件）和oprofile（<a rel="nofollow" class="external free" href="http://oprofile.sourceforge.net/">http://oprofile.sourceforge.net/</a> ）进行分析，以及使用一些其它相关的工具。
</p>
<h4> <span class="mw-headline" id=".E5.8D.95.E5.85.83.E6.B5.8B.E8.AF.95.E3.80.81.E9.9D.99.E6.80.81.E5.88.86.E6.9E.90.E5.92.8C.E6.A8.A1.E5.9E.8B.E6.A3.80.E6.B5.8B.E7.AD.89.E8.AF.A5.E5.A6.82.E5.92.8C.E8.BF.9B.E8.A1.8C.3F"> 单元测试、静态分析和模型检测等该如和进行? </span></h4>
<p>有很多关于其它测试框架的讨论，一些开发者也正在探索这些想法。
</p><p>记住，Makefile并没有处理包含文件的合适依赖。你不得不运行make clean，之后再运行另外一次make。如果你使用GCC，你可以使用--enable-depend选项来运行configure，以使编译器自动计算这些依赖。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E5.B7.B2.E7.BB.8F.E5.BC.80.E5.8F.91.E4.BA.86.E4.B8.80.E4.B8.AA.E8.A1.A5.E4.B8.81.EF.BC.8C.E6.8E.A5.E4.B8.8B.E6.9D.A5.E8.AF.A5.E6.80.8E.E4.B9.88.E5.81.9A.3F"> 我已经开发了一个补丁，接下来该怎么做? </span></h3>
<p>你将需要提交你的补丁至pgsql-hackers@postgresql.org。为了帮助你保证你的补丁能够及时被复审和确认，请按照<a href="/wiki/Submitting_a_Patch" title="Submitting a Patch">Submitting a Patch</a>上的指引来操作。
</p>
<h3> <span class="mw-headline" id=".E5.BD.93.E6.88.91.E6.8F.90.E4.BA.A4.E6.88.91.E7.9A.84.E8.A1.A5.E4.B8.81.E5.90.8E.EF.BC.8C.E5.B0.86.E5.8F.91.E7.94.9F.E4.BB.80.E4.B9.88.3F"> 当我提交我的补丁后，将发生什么? </span></h3>
<p>它将会被其它该项目的贡献者进行复审，并且或者被接受，或者被返送回去进行进一步的开发。在<a href="/wiki/Submitting_a_Patch#Patch_review_and_commit" title="Submitting a Patch">提交补丁</a>中有对这一过程的详细解释。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E5.B8.AE.E5.8A.A9.E8.BF.9B.E8.A1.8C.E8.A1.A5.E4.B8.81.E5.A4.8D.E5.AE.A1.3F"> 我该如何帮助进行补丁复审? </span></h3>
<p>如果你希望为复审<a rel="nofollow" class="external text" href="http://commitfest.postgresql.org">CommitFest</a>队列上的补丁做出贡献，我们也非常欢迎。请阅读<a href="/wiki/Reviewing_a_Patch" title="Reviewing a Patch">Reviewing a Patch</a>以获取更多的信息。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E9.9C.80.E8.A6.81.E7.AD.BE.E7.BD.B2.E7.89.88.E6.9D.83.E8.BD.AC.E8.AE.A9.E5.90.97.3F"> 我需要签署版权转让吗? </span></h3>
<p>不需要。贡献者都保有其自己的版权（在大多数欧洲国家都是这样的）。他们仅仅把他们自己看作是Postgres Global Development Group的一部分。（为PGDG赋予版权也是不可能的，因为其不是一个法人）。这和Linux内核以及许多其它的开源项目是一样的。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E5.8F.AF.E4.BB.A5.E5.9C.A8.E9.80.82.E5.BD.93.E7.9A.84.E5.9C.B0.E6.96.B9.E6.B7.BB.E5.8A.A0.E6.88.91.E8.87.AA.E5.B7.B1.E7.9A.84.E7.89.88.E6.9D.83.E5.A3.B0.E6.98.8E.E5.90.97.3F"> 我可以在适当的地方添加我自己的版权声明吗? </span></h3>
<p>不，请不要这样做。我们希望保持法律信息的简短和清爽。
</p><p>另外，我们也听说这样可能会给企业用户带来问题。
</p>
<h3> <span class="mw-headline" id="PostgreSQL.E8.AE.B8.E5.8F.AF.E8.AF.81.E6.9C.AC.E8.BA.AB.E4.B8.8D.E9.9C.80.E8.A6.81.E4.BF.9D.E6.8C.81.E7.89.88.E6.9D.83.E5.A3.B0.E6.98.8E.E7.9A.84.E5.AE.8C.E6.95.B4.E6.80.A7.E5.90.97.3F"> PostgreSQL许可证本身不需要保持版权声明的完整性吗? </span></h3>
<p>不，它需要保持其完整性。这是因为PostgreSQL Global Development Group涵盖了所有的版权持有者。也需要注意，对于获得版权的授权，美国法律不需要任何版权声明，和大部分欧洲的法律相同。
</p>
<h2> <span class="mw-headline" id=".E6.8A.80.E6.9C.AF.E9.97.AE.E9.A2.98"> 技术问题 </span></h2>
<h3> <span class="mw-headline" id=".E6.88.91.E8.AF.A5.E5.A6.82.E4.BD.95.E4.BB.8E.E5.90.8E.E7.AB.AF.E4.BB.A3.E7.A0.81.E9.AB.98.E6.95.88.E5.9C.B0.E8.8E.B7.E5.8F.96.E5.88.B0.E7.B3.BB.E7.BB.9F.E7.9B.AE.E5.BD.95.E4.B8.AD.E7.9A.84.E4.BF.A1.E6.81.AF.3F"> 我该如何从后端代码高效地获取到系统目录中的信息? </span></h3>
<p>首先，你应该找到你感兴趣元组（行）。有两种方法：第一种，SearchSysCache()和某些相关的函数允许你查询使用在系统目录上预定义的索引来查询系统目录。这是访问系统表的好方法，因为对cache的第一次访问将载入需要的行，并且未来的请求可以在不要访问基本表的前提下，返回结果。可获取的cache列表位于src/backend/util/cache/syscache.c。src/backend/util/cache/lsyscache.c包含了许多针对列cache的查找函数。
</p><p>返回的行是cache所拥有的版本。因此，你不能够修改或删除SearchSysCache()所返回的元组。当你使用完该函数后，你应该做的是用ReleaseSysCache释放它。这会告知cache，如果必要的话，它可以撤销掉该结果。如果你忘记调用ReleaseSysCache()，那么cache入口将会在cache上保持锁定状态，直到事务的结束，这在开发过程中是可以忍受的，但是不要认为在有意义的发行版代码上也是可以接受的。
</p><p>如果你不能使用系统cache，你将需要使用所有后端共享的缓存cache直接从堆上的表获取数据。后端会自动将行载入到缓存cache中。为了完成这个任务，用heap_open()打开表。你可以之后用heap_beginscan()开始进行一个表的扫描，接下来使用heap_getnext()，并且只要HeapTuplesValid()返回True，则就可以继续下去。之后运行heap_endscan()。可以给扫描分配键。因为没有索引被使用，所以全部的行都将会与键进行比较傲，只有有效的行会返回。
</p><p>你也可以通过块号或块偏移，用heap_fetch()获取行。虽然使用heap_fetch()进行扫描会自动的锁定/解锁来自缓存cache的行，但是你也必须传递一个Buffer指针，并且当完成扫描后，使用ReleaseBuffer()。
</p><p>当你获取到行之后，你可以仅仅通过访问HeapTuple结构体入口以获取对于所有元组来说都非常常见的数据，例如t_self和t_oid。如果你需要针对某一个表的特殊列，你应该拿到HeapTuple指针，并且使用GETSTRUCT()宏来访问元组中专有表的开头。接下来，如果你正在访问pg_proc表，你将使得这个指针扮演这Form_pg_proc指针；如果你正在访问pg_type表，你将使其扮演着Form_pg_type指针。这之后，你就可以通过这个结构体指针访问元组中的字段：
((Form_pg_class) GETSTRUCT(tuple))-&gt;relnatts
</p><p>然而，请注意，这只对于那些固定宽度并且永远不会为null的列，而且只当所有较早的列也同样是固定宽度和永远不会为null时有效。否则，列的位置是可变的，你必须使用heap_getattr()或者相关的函数来从元组中提取它。
</p><p>同样，避免直接存储至结构体字段来作为改变现场元组的方法。最好的方式是使用heao_modifytuple()，并且将其传递给最初的元组，再加上你想要改变的值。它将返回一个palloc'ed元组，你也将该元组传递给heap_update()。你可以通过传递元组的t_self给heap_delete()以删除元组。对于heap_update()，你也可以使用t_self。请记住，元组可以是系统cache上的副本，在使用ReleaseSysCache()后可能会被释放；也可以是从磁盘缓存中直接读取的，在heap_fetch()情形下，其将在使用heap_getnext()、heap_endscan或ReleaseBuffer()后被释放。再或者，元组也可能是一个palloc'ed元组，当结束时，你必须使用pfree()。
</p>
<h3> <span class="mw-headline" id=".E4.B8.BA.E4.BB.80.E4.B9.88.E8.A1.A8.E3.80.81.E5.88.97.E3.80.81.E7.B1.BB.E5.9E.8B.E3.80.81.E5.87.BD.E6.95.B0.E3.80.81.E8.A7.86.E5.9B.BE.E7.9A.84.E5.90.8D.E5.AD.97.E6.9C.89.E6.97.B6.E5.80.99.E4.BD.9C.E4.B8.BAName.E6.88.96.E8.80.85NameData.E5.BC.95.E7.94.A8.EF.BC.8C.E6.9C.89.E6.97.B6.E5.80.99.E5.8F.88.E4.BD.9C.E4.B8.BAchar_.2A.E6.9D.A5.E5.BC.95.E7.94.A8.EF.BC.9F"> 为什么表、列、类型、函数、视图的名字有时候作为Name或者NameData引用，有时候又作为char *来引用？ </span></h3>
<p>用Name类型的表、列、类型、函数和视图的名字是以存储在系统表中的。Name是固定长度的、NAMEDATALEN字节、以null结尾的类型。（NAMEDATALEN的默认值是64字节。）
</p>
<pre>  typedef struct nameData
   {
       char        data[NAMEDATALEN];
   } NameData;
   typedef NameData *Name;
</pre>
<p>通过用户查询进入后端的表、列、类型、函数和视图的名字是以以可变长度、以努力null结尾的字符串进行存储的。
</p><p>许多个函数的调用既使用函数的名字，也是用其类型。例如，heap_open()。因此Name类型是以null结尾的，将其传递给期望char *类型的函数是安全的。因为有许多情况下，磁盘上的名字（Name）需要与用户提供的名字(char *)相比较，并且也有许多情况，Name和char *是可以相互交替使用的。
</p>
<h3> <span class="mw-headline" id=".E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E4.BB.AC.E4.BD.BF.E7.94.A8Node.E5.92.8CList.E6.9D.A5.E4.BA.A7.E7.94.9F.E6.95.B0.E6.8D.AE.E7.BB.93.E6.9E.84.EF.BC.9F"> 为什么我们使用Node和List来产生数据结构？ </span></h3>
<p>我们这样做是因为这样允许一个一致的方式来灵活地传递后端内部的数据。每一个Node有一个NodeTag，其指明了Node内的数据类型。List是一组Node串在一起作为一个前向链表。List元素中的次序可能非常重要或不重要，这取决于对特定List的使用。
</p><p>下面是一些List操作命令：
</p>
<dl><dt>lfirst(i)
</dt><dt>lfirst_int(i)
</dt><dt>lfirst_oid(i)
</dt><dd>分别返回list单元i的指针、整数值和OID。
</dd></dl>
<dl><dt>lnext(i)
</dt><dd>返回i之后的下一个list单元。
</dd></dl>
<dl><dt>foreach(i, list)
</dt><dd>在list中循环，并将i赋值给每一个List单元。
</dd></dl>
<p>要注意，重要的是i为<code>ListCell *</code>，而不是List单元中的数据。你需要使用lfirst的一种变体来获取单元中的数据。
</p><p>这有一个典型的表示在List中循环的代码片段，其包含<code>Var *</code>单元和没对每个单元的处理过程。
</p>
<pre>           List        *list;
           ListCell    *i;
           ...
           foreach(i, list)
           {
               Var *var = (Var *) lfirst(i);
               ...
               /* process var here */
           }
</pre>
<dl><dt>lcons(node, list)
</dt><dd>在list的最前面添加一个Node，或以NIL开头创建一个新的list。
</dd></dl>
<dl><dt>lappend(list, node)
</dt><dd>在list的最后添加一个Node。
</dd></dl>
<dl><dt>list_concat(list1, list2)
</dt><dd>将list2连接至list1的最后。
</dd></dl>
<dl><dt>list_length(list)
</dt><dd>返回list的长度。
</dd></dl>
<dl><dt>list_nth(list, i)
</dt><dd>从0开始计数，返回list中的第i个单元。
</dd></dl>
<dl><dt>lcons_int, ...
</dt><dd>这些是整数版本的：lcons_int, lappend_int等。后面这些是OID版本的列表：lcons_oid, lappend_oid等。
</dd></dl>
<p>你可以在gdb内很容易地打印出这些node。首先，当你使用gdb的print命令时，禁止输出截断：
(gdb) set print elements 0
</p><p>你可以不使用gdb格式来打印值，而是使用下面的两个命令以一种详细的格式来打印我们的List，Node和结构体，使得所打印出的内容更加易于理解。List被展开成多个Node，并且Node被详细的打印出来。第一条命令以一种短格式来打印，第二条命令以一种长格式来打印：
</p>
<pre>(gdb) call print(any_pointer)
(gdb) call pprint(any_pointer)
</pre>
<p>输出结果会出现在你的服务器端日志文件中，或者如果你没有直接用一个postmaster来运行一个后端，则会出现在你的显示屏幕中。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E5.88.9A.E7.BB.99.E4.B8.80.E4.B8.AA.E7.BB.93.E6.9E.84.E4.BD.93.E6.B7.BB.E5.8A.A0.E4.BA.86.E4.B8.80.E4.B8.AA.E5.AD.97.E6.AE.B5.E3.80.82.E6.88.91.E8.BF.98.E9.9C.80.E8.A6.81.E5.81.9A.E5.93.AA.E4.BA.9B.E5.85.B6.E5.AE.83.E5.B7.A5.E4.BD.9C.3F"> 我刚给一个结构体添加了一个字段。我还需要做哪些其它工作? </span></h3>
<p>在解析器、重写器、优化器和执行器中传递的结构体需要相当多的支持。大多数结构体在src/backend/nodes中有支持例程用来创建、复制、读和输出那些结构体——特别是，大多书Node的类型需要在copyfuncs.c和equalfuncs.c文件中的支持，某些结构体也需要outfuncs.c或者readfuncs.c中的支持。确保你在这些文件中添加了对你的新字段的支持。找到其它任何需要对你的新字段进行编写代码的地方——对结构体已经存在的字段的搜索是完成该任务的一个好方法。mkid对于这个任务是有帮助的（请参见<a href="#What_tools_are_available_for_developers.3F">可用的工具</a>）。
</p>
<h3> <span class="mw-headline" id=".E4.B8.BA.E4.BB.80.E4.B9.88.E6.88.91.E4.BB.AC.E4.BD.BF.E7.94.A8palloc.28.29.E5.92.8Cpfree.28.29.E6.9D.A5.E5.88.86.E9.85.8D.E5.86.85.E5.AD.98.3F"> 为什么我们使用palloc()和pfree()来分配内存? </span></h3>
<p>palloc()和pfree()常用于替换malloc()和free()。因此我们发现当一个查询完成后，其更容易自动释放所有已分配的内存。这确保了我们所有已经分配的内存都能得到释放，即使我们丢失了对我们所分配内存的跟踪。内存也可能被分配给一些特殊的非查询上下文处。这些会影响后台在何时释放掉已分配的内存。
</p>
<h3> <span class="mw-headline" id="ereport.28.29.E6.98.AF.E4.BB.80.E4.B9.88.3F"> ereport()是什么? </span></h3>
<p>ereport()常用于给前端发送消息，并且也可以终止当前正在进行的查询。对于如何使用它的详细信息请参见<a rel="nofollow" class="external text" href="http://developer.postgresql.org/pgdocs/postgres/error-message-reporting.html">这里</a>。
</p>
<h3> <span class="mw-headline" id="CommandCounterIncrement.28.29.E6.98.AF.E4.BB.80.E4.B9.88.3F"> CommandCounterIncrement()是什么? </span></h3>
<p>一般而言，语句不会看见它们修改的行。这使得UPDATE命令的SET x = x + 1正确地工作。
</p><p>然而，有些情形下，一个事务需要查看该事务之前的部分对行所做出的影响。这是通过使用Command Counter来完成的。对计数器值的递增使得事务被分解为多片，每一片可以看出之前的片对行做出的修改。CommandCounterIncrement()将递增Command Counter，并且创建出一个事务的新片段。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E9.9C.80.E8.A6.81.E5.AF.B9.E6.9F.A5.E8.AF.A2.E8.A7.A3.E6.9E.90.E5.81.9A.E4.B8.80.E4.BA.9B.E6.9B.B4.E6.94.B9.E3.80.82.E4.BD.A0.E4.BB.AC.E5.8F.AF.E4.BB.A5.E8.B6.B3.E5.A4.9F.E8.AF.A6.E7.BB.86.E7.9A.84.E8.A7.A3.E9.87.8A.E8.A7.A3.E6.9E.90.E6.96.87.E4.BB.B6.E5.90.97.EF.BC.9F"> 我需要对查询解析做一些更改。你们可以足够详细的解释解析文件吗？ </span></h3>
<p>解析文件存放在'src/backend/parser'目录。
</p><p>scan.l定义了词法分析器，例如将一个字符串（包含的是一个SQL语句）分隔成一个符号流。一个符号通常是单个单词（例如，由空格分隔的），但是也可以是一个完整的单个或由双引号包含的字符串。词法分析器主要是由正则表达式来定义的，其描述了不同的符号类型。
</p><p>gram.y使用词法分析器产生的符号作为基本的构造块定义了SQL语句的文法（语法结构）。文法是由BNF符号定义的。BNF类似于正则表达式，但是其针对是符号层面上的，而不是字符。同样，有很多模式（在BNF中称作规则）被命名，而且可能是递归的。例如，使用它们本身作为子模式。
</p><p>实际的词法分析器是由一个叫作flex的工具通过scan.l产生的。你可以在http://flex.sourceforge.net/manual/上找到flex的手册。
</p><p>实际的语法分析器是由一个叫作bison的工具通过gram.y产生的。你可以在http://www.gnu.org/s/bison/上找到它bison的手册。
</p><p>不过需要注意，如果你之前从来没有使用过flex或者bison，你将会有一个相当长的学习路线等着你。
</p>
<h3> <span class="mw-headline" id=".E6.88.91.E5.BE.97.E5.88.B0.E4.BA.86shift.2Freduce.E5.86.B2.E7.AA.81.EF.BC.8C.E6.88.91.E4.B8.8D.E7.9F.A5.E9.81.93.E8.AF.A5.E5.A6.82.E4.BD.95.E5.A4.84.E7.90.86.E5.AE.83"> 我得到了shift/reduce冲突，我不知道该如何处理它 </span></h3>
<p>请参见<a href="/wiki/Fixing_shift/reduce_conflicts_in_Bison" title="Fixing shift/reduce conflicts in Bison">Fixing_shift/reduce_conflicts_in_Bison</a>。
</p>
<h3> <span class="mw-headline" id=".E5.93.AA.E4.BA.9B.E8.B0.83.E8.AF.95.E7.89.B9.E6.80.A7.E6.98.AF.E5.8F.AF.E7.94.A8.E7.9A.84.3F"> 哪些调试特性是可用的? </span></h3>
<p>首先，如果你正在调试较新的C代码，你应该一直使用<tt>--enable-cassert</tt>和<tt>--enable-debug</tt>选项来完成编译过程中的configure。允许断言将打开许多完整性检查选项。允许调试符号将支持使用调试器（例如gdb）来跟踪行为异常的代码。当在gcc上编译时，添加额外的<tt>-ggdb -Og</tt> cflags也是有意义的，因为它们详细得将尽可能多的调试信息插入进来；你可以像下面这样将这些传递给<tt>configure</tt>
</p>
<pre>   ./configure --enable-cassert --enable-debug CFLAGS="-ggdb -Og"
</pre>
<p>postgres服务器有一个<tt>-d</tt>选项，其使得详细的信息被日志记录起来（elog或ereport的输出）。-d选项使用一个数，其指定了调试等级。需要注意的是，高调试等级会产生很大的日志文件。当使用<tt>pg_ctl</tt>启动服务器时，这个选项是不可用的，但是你可以使用<tt>-o log_min_messages=debug4</tt>或类似的选项来代替。
如果postmaster正在运行，并且在一个窗口中启动了psql，那么可以使用<tt>SELECT pg_backend_pid()</tt>找出psql所用的postgres进程的PID。使用一个调试器连接至postgres的PID——<tt>gdb -p 1234</tt>或者对于一个正在运行的gdb，用<tt>attach 1234</tt>这样的方法。你可以在调试器里设置断点，并在此之后在psql会话中发起一个查询。
如果你正在寻找产生错误或日志消息的位置，那么就在<tt>errfinish</tt>处设置一个断点。这将会进入所有对所开启日志等级的<tt>elog</tt>和<tt>ereport</tt>调用，因此它将会被触发很多次。如果你只对ERROR/FATAL/PANIC感兴趣，那么请对<tt>errordata[errordata_stack_depth].elevel &gt;= 20</tt>的使用一个<a rel="nofollow" class="external text" href="http://blog.vinceliu.com/2009/07/gdbs-conditional-breakpoints.html">gdb条件断点</a>，或者用<tt>errfinish</tt>对PANIC、FATAL和ERROR的情况设置一个source-line断点。请注意，不是所有的错误都通过<tt>errfinish</tt>；特别地，权限检查的异常是单独抛出的。如果你的断点没有被触发，使用<tt>git grep</tt>获取你的错误文本，并查看它是从哪里产生的。
如果你正在调试某些在会话启动时的发生的事情，你可以设置<tt>PGOPTIONS="-W n"</tt>，之后启动psql。这会导致启动延迟n秒，因此你可以用的调试器连接至该进程，设置相应的断点，之后再继续启动过程。
</p><p>如果postmaster没有在运行，你实际上可以从命令行运行postgres后端，并且直接输入SQL语句。这一般来说一个槽糕的方式来完成这些任务，然而，由于这个使用环境并不如psql那么友好（对于实例来说，没有命令行输入的历史记录），并且也没有方法来研究并发行为。如果你破坏了initdb，你或许可以使用这个方法，但是除此之外，没有任何理由建议你这样做。
你也可以用带分析的编译以查看哪些函数在占用执行时间——使用<tt>--enable-profiling</tt>选项来进行configure，是设置这一功能所推荐的方法。（在研究性能问题时，你不应该使用<tt>--enable-cassert</tt>或<tt>-Og</tt>，因为这样所允许的一些检查并不是十分廉价的，不过使用<tt>gcc</tt>的时候带上<tt>--enable-debug</tt>选项还是可以的）来自服务器进程的分析文件将会被存放在<tt>pgsql/data</tt>目录下。诸如<tt>psql</tt>产生的来自客户端的分析文件将会被放在客户端的当前目录。
</p>


	</div>
	</div>
	</div>
</div>
