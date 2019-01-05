<script type="text/javascript" src='/js/my_procs.js'></script>
<div class=banner>首页 --> 社区新闻发布</div><br><br>

<?php

//echo form_open('news/create') ;
echo form_open_multipart('news/create');

$vad_info = validation_errors();

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=2><div class=banner> $vad_info </div>" : "" ;

?>


<div align=center>
<TABLE  width=98% cellspacing=0 border=01 style="border-collapse:collapse" cellpadding=4><TBODY>

<?php echo $extra_info ; ?>


<input type="hidden" id="author" name="author"   value="<?php echo$this->session->userdata('username'); ?>"  size=20 class=mytxtr read only>


<tr bgcolor=#f0f0f0><td>发布时间：<td><input type=text id="pubtime" name="pubtime" value="<?php echo date('Y-m-d H:i:s'); ?>"  size=15  read only class=mytxtr>
 
原创者：<input type=text id="org_author" name="org_author" value="-"  size=10  read only class=mytxtr> 
源发布时间：<input type=text id="org_author" name="org_pubtime" value="<?php echo date('Y-m-d H:i:s'); ?>"  size=15  read only class=mytxtr>

 <TR><TD>新闻类别：
 <td>

<script>
var token = '每周新闻综述,社区活动,热点话题,新版发布,技术讨论,新书快递,案例介绍,精品收集,强人随笔,问题解答,商业活动,其他' ;
document.write(outSelectFromTokenString('theclass',token,1,"<?php echo set_value('theclass'); ?>")) ; </script>

<span class=redc>*</span>

<TR bgcolor=#f0f0f0><TD>新闻标题：
<td><input type=text size=50 name=thetitle value="<?php echo set_value('thetitle'); ?>" class=mytxt> <span class=redc>*</span>


 <TR><TD>在首页显示
 <td> <select name=topshow>
 <option value=1>显示
 <option value=0>不显示
 </select>
　　　<a href=### on click=changetoCN()><i mg src=/images/fw.gif border=0></img></a>
　<a href=### title='Often used codes...' onclick=refTxt()>.</a> 　<a href=### title='Preview...' onclick=prev()>.</a>


</td></tr>


 <TR><TD>新闻概要：<br>(400以内)
 <td><textarea name=brief_info class=memofd rows=5 style='width:100%'><?php echo set_value('brief_info');?></textarea>


 <TR><TD>新闻内容：
 <td valign=top><textarea id=editor_id name=content rows=45 style='width:100%;height:500px;'><?php echo set_value('content');?></textarea>



 <TR bgcolor=#f0f0f0><TD>附件1描述：
 <td><input type="text" id="aux_pic_info1" name="aux_pic_info1"   value="<?php echo set_value('aux_pic_info1');?>"  size="50" class=mytxt> <input type=file name="file1" id="file1" > (1024 X 768, 500K以内)

 <TR><TD>附件2描述：
 <td><input type="text" id="aux_pic_info2" name="aux_pic_info2"   value="<?php echo set_value('aux_pic_info2');?>"  size="50" class=mytxt> <input type=file name="file2" id="file2" > (1024 X 768, 500K以内)

 <TR bgcolor=#f0f0f0><TD> 附件3描述：
 <td><input type="text" id="aux_pic_info3" name="aux_pic_info3"   value="<?php echo set_value('aux_pic_info3');?>"  size="50"  class=mytxt> <input type=file name="file3" id="file3" > (1024 X 768, 500K以内)

  <TR><TD><TD> <INPUT TYPE=submit CLASS=mybtn  VALUE="  提交保存  " >



</FORM>

 </TABLE>
</div>

<script>


function confirmit() {
	html = editor.html();

	editor.sync();
	html = document.getElementById('editor_id').value; // 原生API
	if ( html.length < 1 ){
		alert('内容为空，不必提交!') ; return false ;
	}
	alert ('确认提交内容：' + html) ;
	return true;
}

function refTxt(){
var refHTML = '<pre>' + 
'&lt;table cellpadding=4 cellspacing=0 style="border-collapse:collapse" border=1&gt;\n' +
'&lt;tr align=center bgcolor=#eeeeee&gt;&lt;th&gt;Column name&lt;/th&gt;&lt;th&gt;Column type&lt;/th&gt;&lt;th&gt;Description&lt;/th&gt;&lt;/tr&gt;\n' +
'&lt;tr&gt;&lt;td&gt;1343&lt;td&gt;中国人民&lt;/td&gt;&lt;/td&gt;&lt;/tr&gt;\n' +
'&lt;/table&gt;\n' +
'\n' +
'&lt;div  class=alc&gt;\n' +
'&lt;h2&gt;聊一聊双十一背后的技术 毫秒分词算啥, 试试正则和相似度&lt;/h2&gt;\n' + 
'&lt;h4&gt;作者: digoa / 2017-06-21 &lt;/h4&gt;\n' + 
'&lt;P style="color:#333399"&gt;欢迎大家踊跃投稿，投稿信箱：&lt;font color="#993333"&gt; press@postgres.cn&lt/font&gt;&lt;/P&gt;\n' + 

'\n' +
'&lt;p&gt;2016 Postgres大象会官方报名通道：&lt;a target=_blank href=http://www.huodongxing.com/event/8352217821400&gt; 点此报名&lt;/a&gt;&lt;/p&gt;\n' +
'&lt;br&gt;&lt;img src=/images/news/2016/pgconf2016_title.jpg&gt;&lt;/img&gt;\n' +
'&lt;/div&gt;\n' +
'\n' +
'&lt;h3&gt;作者: digoal&lt;/h3&gt;\n' +
'&lt;h3&gt;日期: 2016-11-20&lt;/h3&gt;\n' +
'&lt;h3&gt;标签: PostgreSQL , 分词 , 全文索引 , rum , 搜索引擎 , 双十一 , tsvector , tsquery &lt;/h3&gt;\n' +
'\n' +
'&lt;hr size=1 color=red&gt;\n' +
'\n' +
'&lt;h2&gt;背景&lt;/h2&gt;\n' +
'\n' +
'\n' +
'&lt;h2&gt;嘉宾简介&lt;/h2&gt;\n' +
'&lt;p style="width:800px;line-height:24px;"&gt;\n' +
'&lt;img style="float:left;margin-right:15px;" width=190 \n' +
 'src=/images/news/2016/175_1.jpg&gt;&lt;/img&gt;\n' +
'王鹏冲，2007年加入中国平安集团信息管理中心（现平安科技），Oracle 10g OCP，平安科技年度优秀原创数据库课程获得者，\n' +
'&lt;/p&gt;\n' +
'&lt;br&gt;&lt;br&gt;\n' +
'\n' +
'&lt;h2&gt;演讲主题：《从ACID的D看三种主流关系型数据库》&lt;/h2&gt;\n' +
'&lt;P style="width:800px"&gt;多数关系型数据库使用预写日志协议（Write-Ahead Logging protocol ，WAL）来处理事一定的指导。\n' +
'&lt;/P&gt;\n' +
'\n' +
'&lt;blockquote&gt;\n' +
'\n' +
'&lt;/blockquote&gt;\n' +
'\n' +
'\n' +
'&lt;div class=alc&gt;&lt;img src=/images/news/2016/pg_concept_p4.png&gt;&lt;/img&gt;&lt;/div&gt;\n' +
'\n' +
'&lt;p class=alc&gt;&lt;img src=/images/news/2016/pg_bot_banner.jpg alt="pg_bot_banner.jpg"&gt;&lt;/img&gt;&lt;/p&gt;\n' +
'\n' +
'&lt;hr size=1 color=red&gt;\n' +
'&lt;p&gt;2016 Postgres大象会官方报名通道：\n' + 
'&lt;a target=_blank href=http://www.huodongxing.com/event/8352217821400&gt;http://www.huodongxing.com/event/8352217821400&lt;/a&gt;\n' +
'&lt;p&gt;扫描报名&lt;/p&gt;\n' +
'&lt;p class=alc&gt;&lt;img src=/images/news/2016/pgconf2016_qrcode.jpg alt="pgconf2016_qrcode.jpg"&gt;&lt;/img&gt;&lt;/p&gt;\n' +
'&lt;p class=alc&gt;&lt;img src=/images/news/2016/pgconf2016_plus_logo_cn.png alt="pgconf2016_plus_logo_cn.png"&gt;&lt;/img&gt;&lt;/p&gt;\n' +
'</pre>' ;


var prevWin=window.open('','','top=50,left=100,height=880,width=1100,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css><link rel=stylesheet type=text/css href=/css/extra.css></head>") ;
prevWin.document.write("<body><p>") ;
prevWin.document.write(refHTML);
prevWin.document.write('</p><br><br></body></html>') ;
prevWin.document.close();

}


function prev() {
editor.sync();
var htmlVal = document.getElementById('editor_id').value; ;

var prevWin=window.open('','','top=50,left=100,height=880,width=1100,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css><link rel=stylesheet type=text/css href=/css/extra.css></head>") ;
prevWin.document.write("<body><p>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</p><br><br></body></html>') ;
prevWin.document.close();
}

</script>