<P>
<div class=banner>首页 --> 案例介绍 --> 【<b><?php echo $case['thetitle']  ; ?></b>】</div>


	<br/>

	<div class=blockzonex>
		<UL>【<b>案例基本资料</b>】<br/><br/>
			<LI>案例类别：<b><?php echo $case['theclass'] ; ?></b>
			<LI>收集日期：<b><?php echo $case['inputdate']  ; ?></b>
			<LI>项目上线：<b><?php echo $case['project_online']  ; ?></b>
			<LI>PostgreSQL：<b><?php echo $case['pg_info']  ; ?></b>
			<LI>OS系统：<b><?php echo $case['os_info']  ; ?></b>
			<LI>应用服务器：<b><?php echo $case['app_info']  ; ?></b>
			<LI>硬件：<b><?php echo $case['hardware']  ; ?></b>
			<LI>网络：<b><?php echo $case['network']  ; ?></b>
			<LI>联系人： <b><?php echo $case['contact_info']  ; ?></b>
		</UL>
	</div>


	<br/>

	<div class=blockzone>
		<UL>【<b>案例应用资料</b>】<br/><br/>
			<LI>应用简介：<font color=#006600><?php echo $case['proj_descr']  ; ?></font>
			<LI>用户信息：<b><?php echo $case['users_info']  ; ?></b>
			<LI>数据库信息：<b><?php echo $case['db_info']  ; ?></b>
		</UL>
	</div>


	<br/>

	<div class=blockzonex>
		<UL>【<b>相关图例</b>】<br/><br/>
<?php
$sysid = $case['sysid'] ; 
if ( file_exists('./images/cases/'.$sysid.'_1.jpg') )
		echo "<LI>附图1：". $case['aux_pic_info1']."<br><img src=/images/cases/".$sysid."_1.jpg width=640 border=1>\n" ; 

if ( file_exists('./attachments/cases/'.$sysid.'_1.rar') )
		echo "<LI>附件说明：". $case['aux_pic_info1']."  --> <a href=/attachments/cases/".$sysid."_1.rar>按此下载</a>\n" ; 


if ( file_exists('./images/cases/'.$sysid.'_11.jpg') )
		echo "<LI>附图2：". $case['aux_pic_info2']."<br><img src=/images/cases/".$sysid."_11.jpg width=640 border=1>\n" ; 
if ( file_exists('./images/cases/'.$sysid.'_12.jpg') )
		echo "<LI>附图3：". $case['aux_pic_info3']."<br><img src=/images/cases/".$sysid."_12.jpg width=640 border=1>\n" ; 


?>
		</UL>
	</div>
