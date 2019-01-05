
<!--中间部分-->
<div class="container-fluid" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/release">所有版本列表</a></li>
            </ul>
        </div>
    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li class="active"><a href="#">新版本发布声明</a>
				<?php
	$username = $this->session->userdata('username');
	if ( strstr( $editors,$username)  != FALSE ) 
			echo "  <a href=/v2/release/create><img src=/images/new2.gif border=0></img></a>" ; 

		?>
 </li>
 </ol>

<?php

$typeArr = array() ; 
$html = "" ; 
$count = 0 ; 
foreach($vers as $ver) :
	$mainver = trim($ver['mainver']); 
	if ( ! in_array($mainver, $typeArr,TRUE)) { 
			array_push($typeArr,$mainver); 
			
			$html = $html."<TR><th colspan=4 ><span class='btn-success btn-sm'>PostgreSQL ".$mainver."系列</span></th>" ; 
			$count = $count + 1 ; 
	}
	$html = $html . "<tr><td><b>".$ver['theversion']. "</td>" ; 
	$html = $html . "<td>". substr($ver['reltime'],0,10) . "</td>" ; 
	$html = $html . "<td>". $ver['thetype'] . " </td>" ; 
	$html = $html . "<td><a href=/v2/release/v/".$ver['sysid'].">发布声明</a></td></tr>" ; 

endforeach ;


echo "<div>\n　　主版本：<a  class='btn btn-primary btn-sm' role='button' href=/v2/release>不限</a>　\n" ; 
 while (list($key,$val) = each($typeArr)) {   
	echo "<a class='btn btn-primary btn-sm' role='button' href=/v2/release/index/$val> $val 系列 </a>\n";   
 }    

echo "</div><br>" ; 
echo "<table class='table table-condensed table-hover'>"; 
echo $html ; 
echo "</table>" ; 

?>
	
</div>
</div>
</div>
</div>