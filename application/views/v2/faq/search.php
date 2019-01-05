<!--中间部分-->
<div class="container-fluid" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/faq">全部</a></li>
                <li><a href="/v2/faq/typelist/1/Bug">Bug</a></li>
                <li><a href="/v2/faq/typelist/1/使用技巧">使用技巧</a></li>
                <li><a href="/v2/faq/typelist/1/内容问题">内容问题</a></li>
                <li><a href="/v2/faq/typelist/1/建议">建议</a></li>
                <li><a href="/v2/faq/typelist/1/系统安装">系统安装</a></li>
                <li><a href="/v2/faq/typelist/1/集群复制">集群复制</a></li>
                <li><a href="/v2/faq/typelist/1/其他">其他</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="/v2/faq">有问有答(FAQ)</a></li>
				<li>搜索结果</li>
            </ol>

<?php

 echo "<div style='display:none'>".$sql."</div>" ; 
//echo "req = ". $key ; 

if ( $keyshort === 1 ) 
	echo "<br><p class=hint align=center>所给的关键字太短【 $key 】，至少需两个字以上！</div>" ; 
else {

	$r = chr(13).chr(10) ; 
	echo " $r <p><b>搜索关键字【 $key 】</b></p><br/> " ; 
	echo " $r <OL>" ; 
	if ( $recs != NULL ) {
		foreach($recs as $rec) :
			echo "$r <LI>" ; 
			echo "<a class='btn btn-info' role='button' href=/v2/faq/viewone/1/".$rec['sysid'].">"; 
			echo  $rec['author']." ... " . $rec['thetitle'] . " ... " . $rec['creation_time']. "</a><br><br>"; 
		endforeach ;
	}else {
			echo "$r <LI style='padding:6px'>未搜索到指定关键字的内容!" ; 
	}
	echo "</OL>" ; 
}


?>
	
	</div>
</div>
</div>
</div>

