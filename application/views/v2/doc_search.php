<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/home">返回首页</a></li>
            </ul>
        </div>
    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
				<li>搜索结果</li>
            </ol>
            <div style="margin-bottom: 10px;">
                <form method="GET" action="/v2/doc_search" class="form-inline">
                    <input type="hidden" name="u" value="<?php echo htmlspecialchars($u); ?>"/>
                    <input type="text" name="q" value="<?php echo htmlspecialchars($q); ?>" class="form-control"/>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
            </div>
            <?php if (count($list)) { ?>
            <div style="margin: 10px 15px;">
                <?php echo $count; ?> 个结果中的
                <?php echo ($p - 1) * 20 + 1; ?>-<?php echo ($p - 1) * 20 + count($list); ?>
            </div>
            <div style="margin: 10px 15px;" class="doc-search-pagination">
                <?php echo $pagination; ?>
            </div>
            <ul class="list-group" style="border: 0; padding: 0">
                <?php foreach ($list as $i => $rec) { ?>
			        <li class="list-group-item doc-search-pagination">
                        <a href="<?php echo $rec['theurl']; ?>">
                            <span><?php echo ($p - 1) * 20 + 1 + $i ?>.</span>
                            <span><?php echo $rec['thetitle']; ?></span>
                            <span>[<?php echo $rec['r']; ?>]</span>
                        </a>
                        <br>
                        <span><?php echo $rec['headline']; ?></span>
                        <br>
                        <a href="<?php echo $rec['theurl']; ?>">
                            <?php echo $rec['theurl']; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div style="margin: 10px 15px;" class="doc-search-pagination">
                <?php echo $pagination; ?>
            </div>
            <?php } else { ?>
                <div class="alert alert-warning">没有找到匹配的结果</div>
            <?php } ?>
        </div>
    </div>
</div>
<style>
    .doc-search-pagination a {
        color: #990000;
    }
    .doc-search-pagination a:hover {
        text-decoration: underline;
    }
</style>

