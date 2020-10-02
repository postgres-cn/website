

<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/book">图书</a></li>
                <li><a href="/v2/document">文档资料</a></li>
                <li><a href="###">软件下载<span class="badge pull-right">*</span></a></li>
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
                <li class="active"><a href="#">软件下载</a></li>
            </ol>
            <!--下载列表-->
            <div class="well well-sm">
                <h4><strong>已编译的二进制版本</strong></h4>
                <table class="table table-hover table-striped">

			<?php foreach($bURLs as $bURL) : ?>
				<tr>
				<td><?php echo $bURL['platform_or_title'] ; ?></td>
				<td><?php echo $bURL['is32_64'] ; ?></td>
				<td><?php echo $bURL['isinstall_zip'] ; ?></td>
				<td><a href=<?php echo strpos($bURL['theurl'], 'http') === 0 ? $bURL['theurl']. " target=_blank" : $bURL['theurl'] ; ?>><?php echo $bURL['theversion'] ; ?>...按此下载</a></td>
				<td><?php echo $bURL['thememo'] ; ?></td>
				</tr>
			<?php  endforeach ; ?>
                </table>
            </div>

            <div class="well well-sm">
                <h4><strong>源代码</strong></h4>
                <ul>
                    <li><a href=http://ftp.postgresql.org/pub/source/v13.0/postgresql-13.0.tar.bz2>按此下载postgresql
                        13.0版本最新源代码 </a></li>
                    <li><a href=http://ftp.postgresql.org/pub/source/v12.2/postgresql-12.2.tar.bz2>按此下载postgresql
                        12.2版本最新源代码 </a></li>
                    <li><a href=http://ftp.postgresql.org/pub/source/v11.7/postgresql-11.7.tar.bz2>按此下载postgresql
                        11.7版本最新源代码 </a></li>
                    <li><a href=http://ftp.postgresql.org/pub/source/v10.10/postgresql-10.12.tar.bz2>按此下载postgresql
                        10.12版本源代码 </a></li>
                    <li><a href=http://ftp.postgresql.org/pub/source/v9.6.17/postgresql-9.6.17.tar.bz2>按此下载postgresql
                        9.6版本源代码 </a></li>
                    <li>源码安装指导
                        <ul type=square>
							<li>Linux平台编译安装的快捷参考(Centos平台/Pg12.2为例)：
									<OL>
									<LI>wget https://ftp.postgresql.org/pub/source/v12.2/postgresql-12.2.tar.bz2 </li>
									<LI>tar xjvf postgresql*.bz2	#解压至一个目录</li>
									<LI>cd potgresql-12.2</li>
									<LI>./configure --prefix=/opt/pgsql #拟安装至/opt/pgsql</li>
									<LI>make world			   </li>
									<LI>make install-world		</li>
									<LI>adduser postgres		#增加新用户，系统提示要给定新用户密码</li>
									<LI>mkdir /opt/pgsql/data	#创建数据库目录</li>
									<LI>chown -R postgres:postgres /opt/pgsql/data</li>
									<LI>su - postgres			#使用postgres帐号操作</li>
									<LI>/opt/pgsql/bin/initdb -D /opt/pgsql/data #初始化数据库</LI>
									<LI>/opt/pgsql/bin/pg_ctl -D /opt/pgsql/data -l logfile start  #启动数据库</LI>
									<LI>/opt/pgsql/bin/createdb genericdb   #假定数据库名为gerericdb)</LI>
									<LI>/opt/pgsql/bin/psql genericdb	# (进入数据库内部)</li>
									</OL>
								</li>
                            <li><a target=_blank href="#">Linux平台从源码编译过程文档</a></li>
                            <li><a target=_blank href="#">Windows平台从源码编译过程文档</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="well well-sm">
                <h4><strong>其他相关工具或驱动</strong></h4>
                <ul>
                    <li><a target=_blank href=https://www.postgresql.org/ftp/pgadmin/pgadmin4/v4.26>开源工具软件PgAdmin4 V4.26</a></li> 
                    <li><a target=_blank href=http://www.sqlmanager.net/en/products/studio/postgresql/download/>EMS SQL Manager Studio for PostgreSQL v1.3</a></li>
                    <li><a target=_blank href=http://pgsql.navicat.com/>Navicat PostgreSQL GUI v15</a></li>
                    <li><a target=_blank href=http://jdbc.postgresql.org/download.html>JDBC驱动下载</a></li>
                    <li><a target=_blank href=http://initd.org/psycopg/tarballs/>Python语言驱动</a></li>
                    <li><a target=_blank href=https://www.postgresql.org/ftp/odbc/versions/msi/>ODBC驱动 </a></li>
                    <li><a target=_blank href=https://bitbucket.org/ged/ruby-pg/downloads/>Ruby语言驱动  </a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

