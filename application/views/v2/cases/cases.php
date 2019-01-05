
<div class=banner style="padding:4px;border-bottom:1px dotted gray">首页 --> 案例介绍 
<?php
	$username = $this->session->userdata('username');
	if ( strstr( $editors,$username)  != FALSE ) 
			echo " 　　　　<a href=/cases/create><img src=/images/new2.gif border=0></img></a>" ; 

?>
</div>

<?php

$typeArr = array() ; 
$html = "" ; 
$count = 0 ; 
foreach($cases as $case) :
	if ( ! in_array($case['theclass'], $typeArr,TRUE)) { 
			array_push($typeArr, $case['theclass'] ); 
			if ( $count > 0 ) 
				$html = $html . "</UL>\n	</div><br/>" ; 
			$html = $html."\n<a name=v". $count . "></a>\n<div class=blockzone>\n" ; 
			$html = $html."<UL>【<b>".$case['theclass']."</b>】相关案例<br/><br/>\n" ; 
			$count = $count + 1 ; 
	}
	$html = $html . "\n<LI><a href=/cases/viewone/".$case['sysid'].">".$case['thetitle']. "</a>  ... ". $case['inputdate'] ; 
	$html = $html . "... <a target=_blank href='". (strstr($case['rel_website'],'http') ? "" : "http://") . $case['rel_website']."'>相关网站</a>\n" ; 
endforeach ;


echo "<div style='padding:12px'>\n" ; 
echo "<div style='padding:3px'>\n　　行业：\n" ; 

while (list($key,$val) = each($typeArr)) {   
	echo "<a href=#v$key> $val  </a>　|　\n";   
 }    

echo "</div>\n	" ; 

echo $html ; 

?>
	
	