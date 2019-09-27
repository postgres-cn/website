
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/v2/about">概要介绍</a></li>
                <li><a href="/v2/about/index/advantages">主要优点</a></li>
                <li><a href="/v2/about/index/matrix">核心功能表</a></li>
                <li><a href="/v2/about/index/license">版权声明</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="/v2/about">了解PostgreSQL</a></li>
                <li class="active"><a href="#">概要介绍</a></li>
            </ol>
            <!--文章内容-->
            <div>
                <p>PostgreSQL是一个功能强大的开源数据库系统。经过长达15年以上的积极开发和不断改进，PostgreSQL已在可靠性、稳定性、数据一致性等获得了业内极高的声誉。目前PostgreSQL可以运行在所有主流操作系统上，包括Linux、Unix（AIX、BSD、HP-UX、SGI IRIX、Mac OS X、Solaris和Tru64）和Windows。PostgreSQL是完全的事务安全性数据库，完整地支持外键、联合、视图、触发器和存储过程（并支持多种语言开发存储过程）。它支持了大多数的SQL:2008标准的数据类型，包括整型、数值型、布尔型、字节型、字符型、日期型、时间间隔型和时间型，它也支持存储二进制的大对像，包括图片、声音和视频。PostgreSQL对很多高级开发语言有原生的编程接口，如C/C++、Java、.Net、Perl、Python、Ruby、Tcl 和ODBC以及其他语言等，也包含各种文档。</p>
                <p>作为一种企业级数据库，PostgreSQL以它所具有的各种高级功能而自豪，像多版本并发控制(MVCC)、按时间点恢复(PITR)、表空间、异步复制、嵌套事务、在线热备、复杂查询的规划和优化以及为容错而进行的预写日志等。它支持国际字符集、多字节编码并支持使用当地语言进行排序、大小写处理和格式化等操作。它也在所能管理的大数据量和所允许的大用户量并发访问时间具有完全的高伸缩性。目前已有很多PostgreSQL的系统在实际生产环境下管理着超过4TB的数据。一些PostgreSQL系统的极限值如下表所列：</p>
                <h5><strong>极限值：</strong></h5>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>最大单个数据库大小</td>
                        <td>不限</td>
                        <td rowspan="7">
                            <img src="/image/pg_logo.png" width="120"></td>
                    </tr>
                    <tr>
                        <td>最大数据单表大小</td>
                        <td>32 TB</td>
                    </tr>
                    <tr>
                        <td>单条记录最大</td>
                        <td>1.6 TB</td>
                    </tr>
                    <tr>
                        <td>单字段最大允许</td>
                        <td>1 GB</td>
                    </tr>
                    <tr>
                        <td>单表允许最大记录数</td>
                        <td>不限
                        </td>
                    </tr>
                    <tr>
                        <td>单表最大字段数</td>
                        <td>250 - 1600 (取决于字段类型)
                        </td>
                    </tr>
                    <tr>
                        <td>单表最大索引数</td>
                        <td>不限
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>由于PostgreSQL的优异性能，它已赢得最终用户和业内的多次大奖，包括Linux新媒体（Linux New Media）的最佳数据库奖和5次Linux期刊编辑选出的最佳数据库奖。</p>
                <h4><strong>众多功能和标准兼容性</strong></h4>
                <p>PostgreSQL对SQL标准高度兼容，它实现的功能完全遵守于ANSI-SQL:2008标准。目前完全支持子查询（包括在FROM中的子查询）、授权读取和可序列化的事务隔离级别。同时PostgreSQL也具有完整的关系数据库系统的目录功能，它支持单数据库的多模式功能，每一个目录可通过SQL标准中定义的字典信息模式进行访问。</p>
                <p>Data集成性功能包括（复合）主键、含有严格约束或级联更新和删除功能的外键、录入检查约束、唯一性约束和非空约束。</p>
                <p>PostgreSQL也具有很多扩展模块和更高级的功能。其中有为方便使用的通过序列实现的自增字段、 允许返回部分记录集的LIMIT/OFFSET选项，也支持复合、唯一、部分和函数式索引，索引并支持B-Tree、R-Tree、Hash或GiST存储方式。</p>
                <p>GiST (通用搜索树) 索引是一种高级系统算法，它将不同的排序算法与包含B-Tree、B+-Tree、R-Tree、部分汇总树、可加权的B+-Tree以及其他多种搜索逻辑结合在一起，它也提供了接口允许创建用户数据类型和扩展的查询方法。这样，GiST提供了用户指定存储和定义新方法进行查询的灵活性---它大大超越了标准B-Tree、R-Tree和其他通用搜索逻辑所能提供的功能。</p>
                <p>GiST现在也成为很多其他使用PostgreSQL公共项目的基础，如OpenFTS和PostGIS项目。 OpenFTS（开源全文搜索引擎）项目提供在线索引和数据库搜索的相当权重评分。 PostGIS项目给PostgreSQL增加了地理信息管理功能，允许用户将PostgreSQL作为GIS空间地理信息数据库使用，这和专业的ESRI公司的SDE系统以及Oracle的空间地理扩展模块功能相同。</p>
                <p>其他高级功能包括表继承、规则和数据库事件响应功能等。表继承功能可以按原来的一个表创建一个有关系的新表，这样允许数据库设计人员可以将一个表作为基表，从基表派生出新表。并且PostgreSQL甚至可以使用此方式实现单级或多级的继承。</p>
                <p>规则功能是用来调用查询的重算功能，允许数据库设计人员根据不同的表或视图来创建规则，以实现动态改变数据库原操作为新的操作的功能。</p>
                <p>事件响应功能是一个内部通讯功能，它将系统信息或事件在用户使用的LISTEN和NOTIFY两条指令后进行传递，允许 简要的点对点通讯或是对指定数据库事件的定点通讯。由于信息可以从触发器或是存储过程中发出，PostgreSQL的用户可以监控类似更新、新增或是删除的数据库事件。</p>
                <h4><strong>高度可定制性</strong></h4>
                <p>PostgreSQL的存储过程开发可以使用众多的程序语言，包括Java、Perl、Python、Ruby、Tcl、C/C++和自带的PL/pgSQL，其中的PL/pgSQL与Oracle的PL/SQL很相似，内置了数百个函数，功能从基本的算术计算和字符串处理到加密逻辑计算并与Oracle有高度兼容性。触发器和存储过程可以使用C语言开发并可以作为内部库文件加载至数据库内部，开发上的巨大灵活性扩展了数据库能力。相应地，PostgreSQL也包括一套框架允许开发人员定义和创建他们自己的可在函数中使用数据类型，也可以定义操作符新的处理方式，具有了这样的能力后，PostgreSQL现已具有了各种高级数据类型，包括几何图形、空间地理、网络地址甚至于ISBN/ISSN（国际标准书号/国际标准序列号），这些都可以加入至系统中。</p>
                <p>由于有很多的存储过程语言可以使用，这样也产生了很多的库接口，这样允许各种编译型或是解释型的语言在PostgreSQL进行使用，包括Java(JDBC)、ODBC、Perl、Python、Ruby、C、C++、PHP、Lisp、Scheme和Qt等。</p>
                <p style="color: #990000">最重要的一点，PostgreSQL的源代码可以自由获取，它的授权是在非常自由的开源授权下，这种授权允许用户在各种开源或是闭源项目中使用、修改和发布PostgreSQL的源代码。用户对源代码的可以按用户意愿进行任何修改、改进。因此，PostgreSQL不仅是一个强大的企业级数据库系统，也是一个用户可以开发私用、网络和商业软件产品的数据库开发平台。</p>
            </div>
        </div>
    </div>
</div>

