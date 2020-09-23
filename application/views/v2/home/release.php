<div class="well">
    <div class="page-header" >
        <h4><a href="/v2/release"> 版本信息 <small class="pull-right">更多发版列表>> </small> </a></h4>
    </div>
    <table class="table">
        <!--
        <thead>
            <tr>
                <th>版本信息</th>
                <th>时间</th>
                <th>发布声明</th>
            </tr>
        </thead>
        -->
        <tbody>
            <?php foreach ($pgvers as $pgver ) { ?>
	        <tr>
                <td>
                    <a href="/v2/release/v/<?php echo $pgver['sysid']; ?>">
                        <b>PostgreSQL <?php echo $pgver['theversion']; ?></b>
                    </a>
                </td>
                <td style="text-align: right;"><?php echo $pgver['reltime2']; ?></td>
                <td style="width: 180px; text-align: right;">
                    <a href="/v2/release/v/<?php echo $pgver['sysid']; ?>">发布声明</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


