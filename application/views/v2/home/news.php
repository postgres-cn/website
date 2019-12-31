<div id="home-news">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="height:420px">
                <img src="/image/timg1.jpg" width="242" height="160">
                <div class="caption">
                    <h4><a href="javascript:void(0)">PostgreSQL<?php echo $trel['theversion']."发布"; ?></a></h4>
                    <p><?php echo $trel['thecontent']; ?> </p>
                    <span><a href="/v2/release/v/<?php echo $trel['sysid']; ?>" class="btn btn-primary btn-sm" role="button">详细内容</a> <a href="/v2/download" class="btn btn-default btn-sm" role="button">下载新版本</a></span>
                </div>
            </div>
        </div>
		<?php foreach($onen2 as $onen) : ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="height:420px">
                <?php
                $sysid = $onen['sysid'];
                $year = substr($onen['pubtime'], 0, 4);
                $r_path = '/images/news/' . $year . '/' . $sysid . '_1.jpg';
                $path = '.' . $r_path;
                if (file_exists($path)) {
                    echo '<img src="' . $r_path . '" width="242" height="160"/>';
	            } else {
                    echo '<img src="/image/timg1.jpg" width="242" height="160"/>';
		        }
	            ?>
                <div class="caption">
                    <h4><a href="javascript:void(0);"><?php echo isset($onen['thetitle'])? $onen['thetitle'] : '' ; ?></a></h4>
                    <p><?php echo $onen['brief_info']; ?></p>
                    <span><a href="/v2/news/viewone/1/<?php echo isset($onen['sysid'])? $onen['sysid'] : '0' ; ?>" class="btn btn-primary btn-sm" role="button">详细内容</a></span>
                </div>
            </div>
        </div>
		<?php endforeach ; ?>
    </div>
</div>
<script>
    $('#home-news .thumbnail').each(function () {
        var $p = $(this).find('p');
        $p.height(160 - $(this).find('h4').height());
        var p = $p[0]
        if (p.scrollHeight == p.clientHeight) {
            $p.addClass('noafter');
        }
    });
</script>
<style>
    #home-news h4 {
        line-height: 20px;
    }
    #home-news p.noafter::after {
        content: none;
    }
</style>
