
<div class=banner>首页 --> PostgreSQL 9.3.1更新版本发布说明</div><br><br>

<br><b> 2013-10-10 </b><br>

PostgreSQL全球开发组宣布对所有当前可支持的版本发布补丁修正版，包括9.3.1版、9.2.5版、 9.1.10版、 9.0.14版和8.4.18版。
这些新发布的版本修正了近六个月来很多通过社区汇报上来的小问题。所有用户可考虑在所用数据库进行正常周期性维护时进行升级。

<UL>对最新发布的9.3版本的修正包括：
	<LI>更新 hstore 扩展模块，增加了JSON功能；
	<LI>Prevent memory leak when creating range indexes
	<LI>Fix libpq SSL deadlock bug
</UL>

<UL>In addition to the above, there are a few dozen minor bug fixes for older versions. These patches were already included in 9.3.0 when released. Among them are:
	<LI>Guarantee transmission of all WAL files before replica failover
	<LI>Prevent downcasing of non-ASCII identifiers
	<LI>Fix several minor memory leaks
	<LI>Correct overcommit behavior when using more than 24GB of work memory
	<LI>Improve planner cost estimates for choosing generic plans
	<LI>Fix estimates of NULL rows in boolean columns
	<LI>Make UNION ALL and inheritance query plans recheck parameterized paths
	<LI>Correct pg_dump bugs for foreign tables, views, and extensions
	<LI>Prevent a parallel pg_restore failure on certain indexes
	<LI>Make REINDEX revalidate constraints
	<LI>Prevent two deadlock issues in SP-GIST and REINDEX CONCURRENTLY
	<LI>Prevent GiST index lookup crash
	<LI>Fix several regular expression failures
	<LI>Allow ALTER DEFAULT PRIVILEGES to work on all schemas
	<LI>Loosen restrictions on keywords
	<LI>Allow various spellings of infinity
	<LI>Expand ability to compare rows to records and arrays
	<LI>Prevent psql client crash on bad PSQLRC file
	<LI>Add spinlock support for ARM64
</UL>

<div >Note that users of the hstore extension on version 9.3 must take an additional, post upgrade step of running "ALTER EXTENSION hstore UPDATE" in each database after update.
</div>

<div>
As with other minor releases, users are not required to dump and reload their database or use pg_upgrade in order to apply this update release; you may simply shut down PostgreSQL and update its binaries. Users who have skipped multiple update releases may need to perform additional, post-update steps; see the Release Notes for details.
</div>

<UL><b>主版本发布说明链接：</b>
<LI><a href=/releases/v/9_3>9.3版本发布说明</a>

</UL>

