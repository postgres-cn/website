<div class="well">
    <div class="page-header" >
        <h4><a href="/v2/news"> 社区大小事 <small class="pull-right">更多社区消息>> </small> </a></h4>
    </div>
    <table class="table table-sm">
        <thead>
        <tr>
            <th>新闻及活动标题</th>
            <th style="text-align: right;">作者</th>
            <th style="width: 100px; text-align: center;">回复/浏览</th>
            <th style="width: 80px; text-align: right;">发布时间</th>
        </tr>
        </thead>
        <tbody>
	        <?php foreach($tnewss as $tnews) : ?>
		    <tr>
                <td><a href=/v2/news/viewone/1/<?php echo $tnews['sysid'];?>><?php echo $tnews['thetitle'] ; ?></a></td>
		        <td style="text-align: right;"><small><?php echo isset($tnews['org_author']) && strlen($tnews['org_author'])>1 ? "<b>".( strpos($tnews['org_author'],'阿里云') >-1 ? "<a href='https://www.aliyun.com/product/rds/postgresql' target='_blank'>" : "").$tnews['org_author'] . "</a></b>" : $tnews['author'] ; ?></small></td>
		        <td style="white-space: pre; text-align: center;"><?php echo str_pad($tnews['comtclicks'], 4, '    ', STR_PAD_LEFT); ?>/<?php echo str_pad($tnews['viewclicks'], 4, '    ', STR_PAD_RIGHT); ?></td>
		        <td style="text-align: right;"><?php echo getTimeShow($tnews['age']) ; ?></td>
            </tr>
	        <?php endforeach ; ?>
        </tbody>
    </table>
</div>

