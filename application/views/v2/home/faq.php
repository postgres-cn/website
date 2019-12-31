<div class="well">
    <div class="page-header" >
        <h4><a href="/v2/faq"> 有问有答(FAQ)最新动态 <small class="pull-right">更多动态>> </small> </a></h4>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>问答标题</th>
                <th style="text-align: right;">提交者</th>
                <th style="width: 100px; text-align: center;">回复/浏览</th>
                <th style="width: 80px; text-align: right;">发布时间</th>
            </tr>
        </thead>
        <tbody>
		    <?php foreach ($faqs as $faq) { ?>
		    <tr>
                <td>
		            <a href="/v2/faq/viewone/1/<?php echo $faq['sysid'].'/'.$faq['comtclicks'].'/'.$faq['thetype'] ;?>"><?php echo $faq['thetitle'] ; ?></a>
                </td>
		        <td style="text-align: right;"><?php echo $faq['author']; ?></td>
		        <td style="text-align: center; font-family: monospace; white-space: pre;"><?php echo str_pad($faq['comtclicks'] ?: 0, 4, ' ', STR_PAD_LEFT); ?>/<?php echo str_pad($faq['viewclicks'], 4, ' ', STR_PAD_RIGHT); ?></td>
		        <td style="text-align: right;"><?php echo getTimeShow($faq['age']); ?></td>
            </tr>
		    <?php } ?>
        </tbody>
    </table>
</div>
