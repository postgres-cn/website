

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
<?php

//echo $sql ; 
//echo "req = ". $key ; 

if ( $keyshort === 1 ) 
	echo "<br><p align=center>所给的关键字太短【 $key 】，至少需两个字以上！</p>" ; 
else {

	$r = chr(13).chr(10) ; 
	echo " $r <p><b>搜索关键字【 $key 】</b></p><br/> " ; 
	echo " $r <div><OL>" ; 
	if ( $recs != NULL ) {
		foreach($recs as $rec) :
			echo "$r <LI style='padding:6px'>" ; 
			echo "<a href=/".$rec['type'].$rec['sysid'].">"; 
			echo $rec['ctype']." ... " . $rec['theclass'] . " ... " . $rec['thetitle'] . " ... " . $rec['pubtime']. "</a>"; 
		endforeach ;
	}else {
			echo "$r <LI style='padding:6px'>未搜索到指定关键字的内容!" ; 
	}
	echo "</OL></div>" ;
}


?>
	
</div>
</div>
</div>
</div>

