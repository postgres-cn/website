<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/about">概要介绍</a></li>
                <li><a href="/v2/about/index/advantages">主要优点</a></li>
                <li class="active"><a href="/v2/about/index/matrix">核心功能表</a></li>
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
                <li class="active"><a href="#">主要优点</a>... (更新于: <?php echo $last_modified; ?>)</li>
            </ol>
            <!--文章内容-->


<p>下表列出了各个版本中不同功能的支持情况。将光标移至每一个功能名称上时会显示该功能更详细的解释。</p>
<ul>

 <li><a href="#backend">后台处理类</a></li>

 <li><a href="#performance">性能类</a></li>

 <li><a href="#security">安全类</a></li>

 <li><a href="#network">网络类</a></li>

 <li><a href="#internationalisation">多字节/国际化类</a></li>

 <li><a href="#platforms">平台类</a></li>

 <li><a href="#datatypes">数据类型</a></li>

 <li><a href="#functions-and-triggers">函数和触发器类</a></li>

 <li><a href="#procedural-languages">过程语言类</a></li>

 <li><a href="#contrib-modules">扩展模块类</a></li>

</ul>



<div align=center>
<table border="01"  class='table table-sm' >

 <tr>
  <th class="colFirst"><a name="backend">后台处理类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Large objects are now 64-bit and can now be up to 4TB where before it ...">
   
    <a href="detail/232/">64-bit large objects</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/explicit-locking.html#ADVISORY-LOCKS">
   
    <a href="http://www.postgresql.org/docs/current/static/explicit-locking.html#ADVISORY-LOCKS">Advisory locks</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Many objects now support IF EXISTS clauses on ALTER statements, such as tables, foreign tables, ...">
   
    <a href="detail/228/">ALTER object IF EXISTS</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This allows a primary key or unique constraint to be defined using an existing unique ...">
   
    <a href="detail/213/">ALTER TABLE ... ADD UNIQUE/PRIMARY KEY USING INDEX</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/routine-vacuuming.html#AUTOVACUUM">
   
    <a href="http://www.postgresql.org/docs/current/static/routine-vacuuming.html#AUTOVACUUM">Autovacuum enabled by default</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Standbys can now stream to other standbys, reducing replication load on the primary server.">
   
    <a href="detail/219/">Cascading streaming replication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows online changes of a column datatype to a different one">
   
    <a href="detail/63/">Changing column types (ALTER TABLE .. ALTER COLUMN TYPE)</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Clusters can now be created with checksums on pages to detect and report page corruption.">
   
    <a href="detail/243/">Checksum on data pages</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows specification of granular column-level permissions in addition to table level grants">
   
    <a href="detail/151/">Column level permissions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Support for SQL standard WITH and WITH RECURSIVE">
   
    <a href="detail/132/">Common Table Expressions (WITH RECURSIVE)</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Advanced locking for concurrent modification of GiST indexes">
   
    <a href="detail/118/">Concurrent GiST indexes</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="COPY and psql&#39;s \copy now support piping from and to STDIN and STDOUT respectively.">
   
    <a href="detail/248/">COPY from/to STDIN/STDOUT</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-copy.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-copy.html">COPY with arbitrary SELECT </a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="WAL support for GiST">
   
    <a href="detail/51/">Crash-safe GiST indexes</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    CREATE TABLE ... (LIKE) with foreign tables, views and composite types
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-copy.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-copy.html">CSV support for COPY</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Background worker processes can now be added that can attach to PostgreSQL&#39;s shared memory.">
   
    <a href="detail/241/">Custom background workers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the specification of default permissions for objects">
   
    <a href="detail/166/">Default permissions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows unique constraint checking to be deferred until the end of the transaction">
   
    <a href="detail/163/">Deferrable unique constraints</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="replaces the shared memory fixed size free space map with an on-disk implemenation">
   
    <a href="detail/140/">Disk based FSM</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Dollar Quoting
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-commands.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-commands.html">DROP object IF EXISTS</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="generalizes the concept of uniqueness to support any indexable commutative operator, not just equality">
   
    <a href="detail/179/">Exclusion constraints</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="adds the ability to show buffer-usage statistics for a query">
   
    <a href="detail/181/">EXPLAIN (BUFFERS) support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Extensions simplify packaging of additions to PostgreSQL which include contrib modules. Extensions are controlled by ...">  
    <a href="detail/211/">Extension package installation</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Foreign data wrappers allow access to external data for querying.">
   
    <a href="detail/238/">Foreign data wrappers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This allows data stored outside the database to be used like native PostgreSQL-stored data.">
   
    <a href="detail/212/">Foreign Tables</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Full code coverage generation support
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="simplifies permission management by allowing mass changes of GRANTS">
   
    <a href="detail/168/">GRANT/REVOKE ON ALL TABLES/SEQUENCES/FUNCTIONS</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-declare.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-declare.html">Holdable cursors</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allow read only connections during recovery">
   
    <a href="detail/188/">Hot Standby</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="New operators and functions to extract values from JSON data strings, JSON data strings can ...">
   
    <a href="detail/249/">Improved set of JSON functions and operators</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-insert.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-insert.html">INSERT/UPDATE/DELETE RETURNING</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/routine-vacuuming.html#AUTOVACUUM">
   
    <a href="http://www.postgresql.org/docs/current/static/routine-vacuuming.html#AUTOVACUUM">Integrated autovacuum daemon</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Join removal support
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="SQL-standard LATERAL option for FROM-clause subqueries and function calls.">
   
    <a href="detail/231/">LATERAL clause</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows plugins to augment or even replace the planner (like for providing an index advisor)">
   
    <a href="detail/27/">Loadable plugin infrastructure for monitoring the planner</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Support for CREATE MATERIALIZED VIEW.">
   
    <a href="detail/236/">Materialized views</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the autovacuum daemon to operate on multiple tables concurrently">
   
    <a href="detail/12/">Multiple autovacuum workers </a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows aggregates with multiple input arguments">
   
    <a href="detail/43/">Multiple input aggregates</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-values.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-values.html">Multirow VALUES</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="makes CLUSTER a MVCC safe operation">
   
    <a href="detail/114/">MVCC safe CLUSTER</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Create a named point for performing restore using pg_create_restore_point">
   
    <a href="detail/207/">Named restore points</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-createtable.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-createtable.html">ON COMMIT clause for CREATE TEMPORARY TABLE</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-select.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-select.html">ORDER BY NULLS FIRST/LAST</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="pg_dump now has a --jobs option to dump tables in parallel.">
   
    <a href="detail/235/">Parallel pg_dump</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="payload support for LISTEN/NOTIFY">
   
    <a href="detail/190/">Payload support for LISTEN/NOTIFY</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows for setting seq_page_cost and random_page_cost on a per tablespace level">
   
    <a href="detail/191/">Per tablespace support for GUCs</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="provides for per user/database server configuration settings">
   
    <a href="detail/170/">Per user/database server configuration settings</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="pg_basebackup is a tool to take a base backup of a PostgreSQL cluster">
   
    <a href="detail/206/">Pg_basebackup tool</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/9.2/static/app-pgreceivexlog.html">
   
    <a href="http://www.postgresql.org/docs/9.2/static/app-pgreceivexlog.html">pg_receivexlog tool</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/continuous-archiving.html">
   
    <a href="http://www.postgresql.org/docs/current/static/continuous-archiving.html">Point-in-Time Recovery</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Prefix support for text search synonym dictionary
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Row-wise comparison
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-savepoint.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-savepoint.html">Savepoints</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="These prevent non-key-field row updates from locking foreign key rows.">
   
    <a href="detail/242/">SELECT FOR NO KEY UPDATE/SELECT FOR KEY SHARE lock modes</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This implements true serializable snapshot isolation. Previously, asking for serializable isolation guaranteed only that a ...">
   
    <a href="detail/209/">Serializable Snapshot Isolation</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="GiST and SP-GiST indexes can be created for table columns of range types.">
   
    <a href="detail/247/">SP-GiST indexes for range types</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    SQLDA support for ECPG
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/information-schema.html">
   
    <a href="http://www.postgresql.org/docs/current/static/information-schema.html">SQL-standard information schema</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    SQL standard interval handling
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Cascading replication previously required that an xlog archive be available in order for a standbys ...">
   
    <a href="detail/244/">Streaming-only cascading replication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Integrated replication support based on streaming WAL data">
   
    <a href="detail/192/">Streaming Replication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Previously sizing shared memory often required adjusting kernel parameters to accommodate the change. This is ...">
   
    <a href="detail/240/">Support for anonymous shared memory</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This allows the primary to wait for a standby to write the transaction information to ...">
   
    <a href="detail/205/">Synchronous replication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="SQL standard shorthand version for: SELECT * FROM...">
   
    <a href="detail/146/">TABLE statement</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the creation of temporary VIEWs">
   
    <a href="detail/56/">Temporary VIEWs</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-prepare-transaction.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-prepare-transaction.html">Two Phase commit</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="functions to query the transaction ids used by the current session">
   
    <a href="detail/115/">Txid functions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Adds support for syntax: CREATE TABLE name OF type">
   
    <a href="detail/189/">Typed tables</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="unnesting of arrays">
   
    <a href="detail/139/">UNNEST/array_agg</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Simple views can now have UPDATE/INSERT/DELETE performed against them.">
   
    <a href="detail/234/">Updatable views</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-declare.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-declare.html">Updateable cursors</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows psql to work while talking to older backends">
   
    <a href="detail/154/">Version aware psql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows for partial vacuuming of tables">
   
    <a href="detail/158/">Visibility map</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="crash safe B-Tree Indexes">
   
    <a href="detail/76/">WAL-safe B-Tree Indexes</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/warm-standby.html">
   
    <a href="http://www.postgresql.org/docs/current/static/warm-standby.html">Warm Standby</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="provides basic support for SQL-2008 window functions">
   
    <a href="detail/148/">Window functions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Allows INSERT/UPDATE/DELETE in WITH clauses which can be used in conjunction with a RETURNING clause ...">
   
    <a href="detail/208/">Writable Common Table Expressions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="The foreign data wrapper infrastructure now supports INSERT/DELETE/UPDATE operations which individual FDWs can now add ...">
   
    <a href="detail/237/">Writable Foreign Data Wrappers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="Adds XML, JSON and YAML output to EXPLAIN to help with automatic processing of plans">
   
    <a href="detail/165/">XML, JSON and YAML output for EXPLAIN</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="performance">性能类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Delays writes to WAL for committed transactions">
   
    <a href="detail/8/">Asynchronous Commit</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="automatic invalidation of cached exceutions plans">
   
    <a href="detail/34/">Automatic plan invalidation</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Originally the background writer held responsibility for writing checkpoints, but it has now been moved ...">
   
    <a href="detail/227/">Background Checkpointer</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/runtime-config-resource.html">
   
    <a href="http://www.postgresql.org/docs/current/static/runtime-config-resource.html">Background Writer</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows hashing to be used across compatible but not identical datatypes">
   
    <a href="detail/111/">Cross datatype hashing support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="automatic smoothening of checkpoints to reduce sudden I/O spikes">
   
    <a href="detail/11/">Distributed checkpointing</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This introduces a new option to the creation of foreign keys called NOT VALID, which ...">
   
    <a href="detail/214/">Foreign keys marked as NOT VALID</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/textsearch.html">
   
    <a href="http://www.postgresql.org/docs/current/static/textsearch.html">Full Text Search</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/gin.html">
   
    <a href="http://www.postgresql.org/docs/current/static/gin.html">GIN (Generalized Inverted Index) Indexes</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/8.4/static/gin-implementation.html#GIN-PARTIAL-MATCH">
   
    <a href="http://www.postgresql.org/docs/8.4/static/gin-implementation.html#GIN-PARTIAL-MATCH">GIN indexes partial match</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/gist.html">
   
    <a href="http://www.postgresql.org/docs/current/static/gist.html">GiST (Generalized Search Tree) Indexes</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows hashing to be used in query plans involving DISTINCT/UNION/EXCEPT/INTERSECT">
   
    <a href="detail/135/">Hashing support for DISTINCT/UNION/INTERSECT/EXCEPT</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows FULL OUTER JOIN to be implemented as a hash join, and allow either side ...">
   
    <a href="detail/202/">Hashing support for FULL OUTER JOIN, LEFT OUTER JOIN and RIGHT OUTER JOIN</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows hashing to be used with the NUMERIC datatype">
   
    <a href="detail/30/">Hashing support for NUMERIC </a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="optimization for heavily updated tables">
   
    <a href="detail/4/">Heap Only Tuples (HOT)</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/indexes-expressional.html">
   
    <a href="http://www.postgresql.org/docs/current/static/indexes-expressional.html">Indexes on expressions</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Also known as &quot;covering indexes&quot;, allows data in indexes to satisfy queries where all columns ...">
   
    <a href="detail/217/">Index-only scans</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows index usage with IS NULL expressions">
   
    <a href="detail/110/">Index support for IS NULL</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the planner to inline most SQL functions into the whole query">
   
    <a href="detail/68/">Inlining of SQL-functions</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="enabled the planner to combine multiple indexes using an in-memory bitmap">
   
    <a href="detail/50/">In-memory Bitmap Indexes</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows nearest-neighbor support to contrib/pg_trgm and contrib/btree_gist">
   
    <a href="detail/200/">K-nearest neighbor GiST support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="dramatically reduces transaction id consumption on heavy read-only workloads">
   
    <a href="detail/5/">Lazy XID allocation</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Improve concurrent read-only workloads on multi-core servers. Previously this had limited scalability offering performance benefits ...">
   
    <a href="detail/218/">Multi-core scalability for read-only workloads</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows multiple tablespaces to be defined for temporary operations">
   
    <a href="detail/28/">Multiple temporary tablespaces</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="online index creation without locking the table">
   
    <a href="detail/39/">Non-blocking CREATE INDEX</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="enables the query planner to reorder out joins">
   
    <a href="detail/42/">Outer Join reordering</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows pg_restore to restore data from custom format dumps in parallel">
   
    <a href="detail/152/">Parallel restore</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="optimizes sort operations for ORDER BY x LIMIT ionsy like operat">
   
    <a href="detail/24/">Partial sort capability (top-n sorting)</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    SELECT ... FOR UPDATE/SHARE NOWAIT
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="significantly improves planning of queries containing EXISTS and NOT EXISTS clauses">
   
    <a href="detail/155/">Semi- and Antijoins</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="reduces deadlock scenarios with foreign keys">
   
    <a href="detail/53/">Shared row level locking</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/9.2/static/spgist.html">
   
    <a href="http://www.postgresql.org/docs/9.2/static/spgist.html">Space-Partitioned GiST Indexes</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="enabled sequential scans to piggyback on concurrently running scans">
   
    <a href="detail/26/">Synchronized sequential scanning</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/ddl-partitioning.html">
   
    <a href="http://www.postgresql.org/docs/current/static/ddl-partitioning.html">Table partitioning</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-createtablespace.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-createtablespace.html">Tablespaces</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Such tables provide better update performance than regular tables, but are not crash-safe: their contents ...">
   
    <a href="detail/201/">Unlogged tables</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="wal_buffers is now auto-tuned by default based on the size of shared_buffers">
   
    <a href="detail/204/">WAL Buffer auto-tuning</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="security">安全类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/auth-methods.html#GSSAPI-AUTH">
   
    <a href="http://www.postgresql.org/docs/current/static/auth-methods.html#GSSAPI-AUTH">GSSAPI support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Access controls on large objects">
   
    <a href="detail/183/">Large object access controls</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/auth-methods.html#AUTH-LDAP">
   
    <a href="http://www.postgresql.org/docs/current/static/auth-methods.html#AUTH-LDAP">Native LDAP authentication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="adds support for authentictaing against a RADIUS server">
   
    <a href="detail/193/">Native RADIUS authentication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows restrictions on the number of connections a given user or database will be allowed ...">
   
    <a href="detail/55/">Per user/database connection limits</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="replaces user and group concept by a more generalizes role based concept">
   
    <a href="detail/49/">ROLES</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Allows searching for the user in the directory first, and then binds with the DN ...">
   
    <a href="detail/184/">Search+bind mode operation for LDAP authentication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This prevents security_barrier views from being moved into other scopes, preventing possible leakage of view-prohibited ...">
   
    <a href="detail/230/">security_barrier option on views</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="full integration with the native authentication framework in Microsoft Windows">
   
    <a href="detail/108/">Security Service Provider Interface (SSPI)</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="certificate validation in libpq">
   
    <a href="detail/144/">SSL certificate validation in libpq</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows authentication of clients by the use of an SSL certificate">
   
    <a href="detail/147/">SSL client certificate authentication</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="allows Unix-based GSSAPI clients to do SSPI authentication with Windows servers.">
   
    <a href="detail/203/">SSPI authentication via GSSAPI</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="network">Network</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/ssl-tcp.html">
   
    <a href="http://www.postgresql.org/docs/current/static/ssl-tcp.html">Full SSL support</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Full Support for IPv6">
   
    <a href="detail/67/">IPv6 Support</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="obsoleted client protocol interface">
   
    <a href="detail/117/">V2 client protocol</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/protocol.html">
   
    <a href="http://www.postgresql.org/docs/current/static/protocol.html">V3 client protocol</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="internationalisation">多字节/国际化类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Previously collation could only be set at database creation. Collation can now be set per ...">
   
    <a href="detail/210/">Column-level collation support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Support for different collation order and character categories on a per database level">
   
    <a href="detail/133/">Database level Collation</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    EUC_JIS_2004/ SHIFT_JIS_2004 support
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="full support for using UTF8 and other multibyte encodings">
   
    <a href="detail/119/">Multibyte encoding support, incl. UTF8</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://pgtranslation.projects.postgresql.org/status.html">
   
    <a href="http://pgtranslation.projects.postgresql.org/status.html">Multiple language support</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows specification of unicode string literals and identifiers using code points">
   
    <a href="detail/157/">Unicode string literals and identifiers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="full support for using UTF8 on microsoft windows">
   
    <a href="detail/100/">UTF8 support on Windows</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="platforms">平台类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the backend to be compiled with Microsoft Visual Studio">
   
    <a href="detail/35/">Microsoft Visual C++ Support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Native Port to the Microsoft Windows Platform">
   
    <a href="detail/59/">Native Windows Port</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="s_lock support for the SuperH CPU">
   
    <a href="detail/176/">Spinlock support for the SuperH hardware platform</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="support for compiling PostgreSQL using the Sun Studio compiler on Linux">
   
    <a href="detail/161/">Sun Studio compiler on Linux</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="support for compiling PostgreSQL as a 64bit binary on Microsoft Windows">
   
    <a href="detail/195/">Windows x64 support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="datatypes">数据类型</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the creation of arrays of arbitrary complex compound types">
   
    <a href="detail/29/">Arrays of compound types</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/arrays.html">
   
    <a href="http://www.postgresql.org/docs/current/static/arrays.html">Array support</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/datatype-enum.html">
   
    <a href="http://www.postgresql.org/docs/current/static/datatype-enum.html">ENUM data type</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/datatype-uuid.html">
   
    <a href="http://www.postgresql.org/docs/current/static/datatype-uuid.html">GUID/UUID data type</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="support for the interval syntax specified in ISO8601">
   
    <a href="detail/160/">IS0 8601 interval syntax</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/9.2/static/datatype-json.html">
   
    <a href="http://www.postgresql.org/docs/9.2/static/datatype-json.html">JSON data type</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="array elements can contain NULL">
   
    <a href="detail/38/">NULLs in Array</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/9.2/static/rangetypes.html">
   
    <a href="http://www.postgresql.org/docs/9.2/static/rangetypes.html">Range types</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="A serial data type that uses smallint (2 byte integer) as its base type, giving ...">
   
    <a href="detail/223/">smallserial type</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows user defined datatypes to specify a type modifier">
   
    <a href="detail/112/">Type modifier support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/datatype-xml.html">
   
    <a href="http://www.postgresql.org/docs/current/static/datatype-xml.html">XML data type</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="functions-and-triggers">函数和触发器类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows for disabling and enabling a specific or all triggers on a given table">
   
    <a href="detail/58/">ALTER TABLE ENABLE/DISABLE TRIGGER</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sql-altertable.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sql-altertable.html">ALTER TABLE / ENABLE REPLICA TRIGGER/RULE</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="adds support for SQL standard column level trigger support, by allowing triggers to only fire ...">
   
    <a href="detail/162/">Column level triggers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Support for creating triggers for DDL events.">
   
    <a href="detail/233/">Event triggers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Function argument names
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows controlling the order of values fed into an aggregate function">
   
    <a href="detail/180/">ORDER BY support within aggregates</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Server configuration parameters can now be set on a per-function basis">
   
    <a href="detail/20/">Per function GUC settings</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="runtime statistics for user-defined functions">
   
    <a href="detail/141/">Per function statistics</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows for returning the result of a dynamically generated query">
   
    <a href="detail/142/">RETURN QUERY EXECUTE</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="SQL standard RETURNS TABLE clause for CREATE FUNCTION">
   
    <a href="detail/136/">RETURNS TABLE</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Triggers that fire on a per statement level instead of a per row level">
   
    <a href="detail/73/">Statement level triggers</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Trigger support for TRUNCATE">
   
    <a href="detail/128/">Statement level TRUNCATE triggers</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This adds support for INSTEAD OF triggers on views which can be used to implement ...">
   
    <a href="detail/215/">Triggers on views</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Allows a variable number of function parameters">
   
    <a href="detail/137/">Variadic functions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="adds support for a boolean expression to be checked if a trigger should be fired ...">
   
    <a href="detail/178/">WHEN clause for CREATE TRIGGER</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="procedural-languages">过程语言类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the use of CASE as a conditional expression in addition to IF-THEN">
   
    <a href="detail/130/">CASE in pl/pgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    CONTINUE statement for PL/pgSQL
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the execution of anonymous code blocks in pl/perl">
   
    <a href="detail/186/">DO statement for pl/perl</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the execution of anonymous code blocks in pl/pgsql">
   
    <a href="detail/167/">DO statement for pl/pgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="full exception handling support in pl/pgsql">
   
    <a href="detail/84/">EXCEPTION support in PL/pgSQL</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    EXECUTE USING in PL/pgSQL
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="This is more efficient and readable than previous methods of iterating through the elements of ...">
   
    <a href="detail/216/">FOREACH IN ARRAY in pl/pgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    IN/OUT/INOUT parameters for pl/pgsql and PL/SQL
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows the use of named parameters in pl/pgsql">
   
    <a href="detail/83/">Named parameters</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="database owners can now create trusted languages">
   
    <a href="detail/113/">Non-superuser language creation</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="maximum number of arguments a function can be declared to receive by default. The limit ...">
   
    <a href="detail/86/">Number of function arguments increased to 100</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="pl/pgsql is now installed by default in all newly created database">
   
    <a href="detail/185/">pl/pgsql installed by default</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Polymorphic functions
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="support for Python 3 in pl/python">
   
    <a href="detail/187/">Python 3 support for pl/python</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Qualified function parameters 
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="simply way to return the result of an arbitrary query in pl/pgsql">
   
    <a href="detail/78/">RETURN QUERY in pl/pgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="CPU costs and the number of expected rows can now be specified for procedural functions ...">
   
    <a href="detail/14/">ROWS and COST specification for functions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="support for scroll- and updatable cursors in pl/pgsql functions">
   
    <a href="detail/13/">Scrollable and updatable cursor support for pl/pgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows simple access to the SQL error state and the associated error text if an ...">
   
    <a href="detail/15/">SQLERRM/SQLSTATE for pl/pgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" >
   
    Unicode object support in PL/python
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="allows to generate user defined exceptions through RAISE">
   
    <a href="detail/138/">User defined exceptions</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="compile time validation of pl/pgsql code">
   
    <a href="detail/82/">Validator function for pl/perl</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 

 <tr>
  <th class="colFirst"><a name="contrib-modules">扩展模块类</a></th>
  
  <th >8.0</th>
  
  <th >8.1</th>
  
  <th >8.2</th>
  
  <th >8.3</th>
  
  <th >8.4</th>
  
  <th >9.0</th>
  
  <th >9.1</th>
  
  <th >9.2</th>
  
  <th class="colLast">9.3</th>
  
 </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/adminpack.html">
   
    <a href="http://www.postgresql.org/docs/current/static/adminpack.html">contrib/adminpack</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="auth_delay causes the server to pause briefly before reporting authentication failure, to make brute-force attacks ...">
   
    <a href="detail/198/">contrib/auth_delay</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Automatic logging of the plans of slow-running queries">
   
    <a href="detail/145/">contrib/autoexplain</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/8.4/static/btree-gin.html">
   
    <a href="http://www.postgresql.org/docs/8.4/static/btree-gin.html">contrib/btree_gin</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/8.3/static/btree-gist.html">
   
    <a href="http://www.postgresql.org/docs/8.3/static/btree-gist.html">contrib/btree_gist</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="case insensitive text datatype">
   
    <a href="detail/134/">contrib/citext</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/dblink.html">
   
    <a href="http://www.postgresql.org/docs/current/static/dblink.html">contrib/dblink</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Add the ability to retrieve asynchronous notifications using dblink">
   
    <a href="detail/175/">contrib/dblink asyncronous notification support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="addon to get the on-disk size of various database objects, built in since 8.1">
   
    <a href="detail/18/">contrib/dbsize</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="The file_fdw module provides the foreign-data wrapper file_fdw, which can be used to access data ...">
   
    <a href="detail/199/">contrib/file_fdw</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="provides support for levenshtein/soundex/metaphone">
   
    <a href="detail/107/">contrib/fuzzystrmatch</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/hstore.html">
   
    <a href="http://www.postgresql.org/docs/current/static/hstore.html">contrib/hstore</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="increased limits on keys and values, support for GROUP BY and DISTINCT and better conversion ...">
   
    <a href="detail/173/">contrib/hstore improvements</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/intarray.html">
   
    <a href="http://www.postgresql.org/docs/current/static/intarray.html">contrib/intarray</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/isn.html">
   
    <a href="http://www.postgresql.org/docs/current/static/isn.html">contrib/isn (ISBN)</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/ltree.html">
   
    <a href="http://www.postgresql.org/docs/current/static/ltree.html">contrib/ltree</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pageinspect.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pageinspect.html">contrib/pageinspect</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://developer.postgresql.org/pgdocs/postgres/passwordcheck.html">
   
    <a href="http://developer.postgresql.org/pgdocs/postgres/passwordcheck.html">contrib/passwordcheck</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="automatic vacuum daemon - moved into the backend">
   
    <a href="detail/99/">contrib/pg_autovacuum</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pgbench.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pgbench.html">contrib/pgbench</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pgbuffercache.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pgbuffercache.html">contrib/pg_buffercache</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pgfreespacemap.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pgfreespacemap.html">contrib/pg_freespacemap</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pgstandby.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pgstandby.html">contrib/pg_standby</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/8.4/static/pgstatstatements.html">
   
    <a href="http://www.postgresql.org/docs/8.4/static/pgstatstatements.html">contrib/pg_stat_statements</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="pg_stat_statements now aggregates similar queries so that such data is no longer confined to just ...">
   
    <a href="detail/226/">contrib/pg_stat_statements improvements</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pgstattuple.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pgstattuple.html">contrib/pgstattuple</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/pgtrgm.html">
   
    <a href="http://www.postgresql.org/docs/current/static/pgtrgm.html">contrib/pg_trgm</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Regular expressions can now be indexed using GIN in contrib/pg_trgm.">
   
    <a href="detail/246/">contrib/pg_trgm regular expressions indexing</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="pg_upgrade (formerly called pg_migrator) allows data stored in PostgreSQL data files to be migrated to ...">
   
    <a href="detail/196/">contrib/pg_upgrade</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="Displays a human-readable rendering of the write-ahead log of a PostgreSQL database cluster.">
   
    <a href="detail/245/">contrib/pg_xlogdump</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="A writable foreign data wrapper to connect to PostgreSQL databases.">
   
    <a href="detail/239/">contrib/postgres_fdw</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/seg.html">
   
    <a href="http://www.postgresql.org/docs/current/static/seg.html">contrib/seg</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="sepgsql is a loadable module which supports label-based mandatory access control (MAC) based on SELinux ...">
   
    <a href="detail/197/">contrib/sepgsql</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/sslinfo.html">
   
    <a href="http://www.postgresql.org/docs/current/static/sslinfo.html">contrib/sslinfo</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/tablefunc.html">
   
    <a href="http://www.postgresql.org/docs/current/static/tablefunc.html">contrib/tablefunc</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/9.2/static/tcn.html">
   
    <a href="http://www.postgresql.org/docs/9.2/static/tcn.html">contrib/tcn</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/tsearch2.html">
   
    <a href="http://www.postgresql.org/docs/current/static/tsearch2.html">contrib/tsearch2</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="compatibility wrapper for migrating from contrib/tsearch2 to the integrated full text search in 8.3">
   
    <a href="detail/127/">contrib/tsearch2 compat wrapper</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="UTF8 support for the contributed tsearch2 full text search engine">
   
    <a href="detail/17/">contrib/tsearch2 UTF8 support</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="http://developer.postgresql.org/pgdocs/postgres/unaccent.html">
   
    <a href="http://developer.postgresql.org/pgdocs/postgres/unaccent.html">contrib/unaccent</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="advisory lock support - moved into the backend">
   
    <a href="detail/98/">contrib/userlocks</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  </tr>
 
  <tr valign="top" >
  <td class="colFirst" title="set of functions to generate UUIDs">
   
    <a href="detail/88/">contrib/uuid-ossp</a>
   
  </td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_no></td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  </tr>
 
  <tr valign="top" class="lastrow">
  <td class="colFirst" title="http://www.postgresql.org/docs/current/static/xml2.html">
   
    <a href="http://www.postgresql.org/docs/current/static/xml2.html">contrib/xml2</a>
   
  </td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_yes>Y</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  <td class=fm_obs>废弃</td>
  
  </tr>
 

</table>
</div>
</div>
        </div>
    </div>
</div>



