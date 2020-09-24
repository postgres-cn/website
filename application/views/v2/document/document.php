
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/book">图书</a></li>
                <li class="active"><a href="###">文档资料<span class="badge pull-right">*</span></a></li>
                <li><a href="/v2/download">软件下载</a></li>
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
                <li><a href="/v2/home">首页</a></li>
                <li><a href="#">相关资料</a></li>
                <li class="active"><a href="#">文档资料</a></li>
            </ol>
			<div  class="well well-sm">
                <form method="GET" action="/v2/doc_search" class="form-inline">
                    <input type="text" name="q" value="" placeholder="关键字1 关键字2" class="form-control"/>
					<select name="u" class="form-control">
						<option value="/">不限版本</option>
						<option value="/docs/12">只限12版本</option>
						<option value="/docs/11">只限11版本</option>
						<option value="/docs/10">只限10版本</option>
						<option value="/docs/9.6">只限9版本</option>
					</select>
					  
                    <button type="submit" class="btn btn-default">文档搜索</button>

                </form>
            </div>

            <!--文档列表-->
            <div class="well well-sm" >
                <h4><a target=_blank href="/docs/12/">PostgreSQL 12.2 版本在线手册 ...(中文版本)</a></h4>
                <p>感谢翻译小组(车岩磊、赵宇、徐小春、陈华军、彭金金、齐瑞强等)的辛苦工作。</p>
                <img src="/image/new_mark.jpg" width="50" style="position: absolute;right: -3px;top: -3px;"><!--新的内容右角标-->
            </div>            
            <div class="well well-sm" >
                <h4><a target=_blank href="/docs/11/">PostgreSQL 11.2 版本在线手册 ...(中文版本)</a></h4>
            </div>            
            <div class="well well-sm" >
                <h4><a target=_blank href="/docs/10/">PostgreSQL 10.1 版本在线手册 ...(中文版本)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="/docs/9.6/index.html">PostgreSQL 9.6.0 版本在线手册 ...(中文版本) ... (英文原版)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="/docs/9.5/index.html">PostgreSQL 9.5.3 版本在线手册 ... (中文版本) ... (英文原版)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="/docs/9.4/index.html">PostgreSQL 9.4.4 版本在线手册 ... (中文版本) ... (英文原版)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a href="/v2/news/typelist/1/会议资料">PostgreSQL 历年大会资料汇总</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="https://postgres-cn.github.io/pgbouncer-doc/">pgbouncer 1.7.2版本在线手册 ...(中文版本)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="https://gp-docs-cn.github.io/docs/">Greenplum 数据库中文文档</a></h4>
                <p>感谢武汉大学 彭煜玮，邰凌翔，韩珂，兰海 翻译。 感谢 VitesseData/迅讯科技 提供支持。</p>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="/v2/document/faq"> 一般常见问题汇总(FAQ)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="/v2/document/dev_faq">开发人员常见问题汇总(DEV_FAQ)</a></h4>
            </div>
            <div class="well well-sm">
                <h4><a target=_blank href="/v2/document/win_faq">Windows平台安装PostgreSQL常见问题及解答</a></h4>
            </div>

        </div>

    </div>
</div>
