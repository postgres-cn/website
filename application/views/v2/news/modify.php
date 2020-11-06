<script type="text/javascript" src='/js/my_procs.js'></script>

<!--中间部分-->
<div class="container-fluid" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/news">全部</a></li>
                <li><a href="/v2/news/typelist/1/%E7%A4%BE%E5%8C%BA%E6%B4%BB%E5%8A%A8">社区活动</a></li>
                <li><a href="/v2/news/typelist/1/%e6%8a%80%e6%9c%af%e8%ae%a8%e8%ae%ba">技术讨论</a></li>
                <li><a href="/v2/news/typelist/1/%E6%AF%8F%E5%91%A8%E6%96%B0%E9%97%BB%E7%BB%BC%E8%BF%B0">新闻综述</a></li>
                <li><a href="/v2/news/typelist/1/%E5%BC%BA%E4%BA%BA%E9%9A%8F%E7%AC%94">强人随笔</a></li>
                <li><a href="/v2/news/typelist/1/%E4%BC%9A%E8%AE%AE%E8%B5%84%E6%96%99">会议资料</a></li>
                <li><a href="/v2/news/typelist/1/%E5%85%B6%E4%BB%96">其他</a></li>
            </ul>
        </div>
    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li class="active"><a href="#">社区新闻修改</a></li>

			</ol>


<?php

//echo form_open('/v2/news/modify/'.$sysid.'/') ;
echo '<form action="/index.php/v2/news/modify/'. $sysid .'" method="post" accept-charset="utf-8">' ;

$vad_info = validation_errors();

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=2><div class=banner> $vad_info </div>" : "" ;

?>


<div align=center>
<TABLE  class="table table-bordered table-sm"><TBODY>

<?php echo $extra_info ; ?>


<input type=hidden id="sysid" name="sysid" value="<?php echo $sysid ; ?>" >

<tr><td>发布时间：<td><input type=text id="pubtime" name="pubtime" value="<?php echo $vnews['pubtime'] ; ?>"  class='form-control input-sm'></td></tr>
<tr><td>原创者：<td><input type=text id="org_author" name="org_author" value="<?php echo $vnews['org_author']; ?>"  class='form-control input-sm'></td></tr>


 <TR><TD>新闻类别： <td>
 <script>
var token = '每周新闻综述,社区活动,技术讨论,新书快递,强人随笔,商业活动,会议资料,其他' ;
document.write(outSelectFromTokenString('theclass',token,1,"<?php echo $vnews['theclass']; ?>")) ; </script>
 
  &nbsp; &nbsp;  <input type=radio name=topshow value=1>在首页显示 <input type=radio name=topshow value=0>不显示
</td></tr>


<TR><TD>新闻标题：<td><input type=text name=thetitle value="<?php echo $vnews['thetitle']; ?>" class='form-control input-sm'></td></tr>


 <TR><TD>新闻概要：<br>(400字以内)
 <td><textarea name=brief_info class='form-control input-sm' rows=5><?php echo $vnews['brief_info'];?></textarea>


 <TR><TD>新闻内容：  <td> <INPUT TYPE=submit class='btn btn-primary btn-sm' VALUE="  提交保存  " >  &nbsp;&nbsp;
<a href=### title='Often used codes...' onclick=refTxt()>.</a> &nbsp; &nbsp;
<a href=### onclick="prev_htm()"> h </a> &nbsp; &nbsp;
<a href=/test/mdhelp.html target=_blank> ? </a> &nbsp; &nbsp;
<a href=### onclick="window.open('/act/Upload_any','UPload File','top=100,left=200,width=500,height=380');"> U </a>
</td></tr>
<tr><td colspan=2>
<textarea id=editor_id class='form-control input-sm' name=content rows=30 onkeyup="refresh()" >
<?php echo $vnews['thecontent']; ?>
</textarea>

 <TR><TD align=center colspan=2 bgcolor=#6666ff>页面预览</TD></TR>
 <TR height=50><TD colspan=2 id="prevzone"></TD></TR>


</TABLE>
</FORM>

</div>
</div>
</div>

<script language="javascript">

refresh();

function refresh() {

var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

    md_text   = document.getElementById('editor_id').value; ;
    html      = converter.makeHtml(md_text);

    html = html.replace(/<table/g,'<table class="table table-bordered table-condensed"') ;
    //alert(html) ;

    document.getElementById("prevzone").innerHTML=html ;

}

function prev_htm() {
var htmlVal = document.getElementById('prevzone').innerHTML ;
htmlVal = htmlVal.replace(/</g,"&lt;").replace(/>/g,"&gt;");

//htmlVal = htmlVal.replace('\>' '&gt;') ;

var prevWin=window.open('','','top=100,left=200,height=800,width=880,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css></head>") ;
prevWin.document.write("<body>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</body></html>') ;
prevWin.document.close();
}



function prev() {

var htmlVal = document.getElementById('editor_id').value; ;

var prevWin=window.open('','','top=50,left=100,height=880,width=1100,scrollbars=yes');
prevWin.opener = null ;
prevWin.document.write("<html><head><link rel=stylesheet type=text/css href=/css/style.css><link rel=stylesheet type=text/css href=/css/extra.css></head>") ;
prevWin.document.write("<body><p>") ;
prevWin.document.write(htmlVal);
prevWin.document.write('</p><br><br></body></html>') ;
prevWin.document.close();
}

function refTxt(){
var refHTML = '<pre>' +
'\n' +
'&lt;div  class=alc&gt;\n' +
'# 聊一聊双十一背后的技术 毫秒分词算啥, 试试正则和相似度 \n' +
'### 作者: digoa / 2017-06-21 \n' +
'&lt;P style="color:#333399"&gt;欢迎大家踊跃投稿，投稿信箱：&lt;font color="#993333"&gt; press@postgres.cn&lt/font&gt;&lt;/P&gt;\n' +

'\n' +
'&lt;p&gt;2016 Postgres大象会官方报名通道：&lt;a target=_blank href=http://www.huodongxing.com/event/8352217821400&gt; 点此报名&lt;/a&gt;&lt;/p&gt;\n' +
'&lt;br&gt;&lt;img src=/images/news/2016/pgconf2016_title.jpg&gt;&lt;/img&gt;\n' +
'&lt;/div&gt;\n' +
'\n' +
'\n' +
'## 背景\n' +
'\n' +
'\n' +
'## 嘉宾简介\n' +

' style="width:800px;line-height:24px;"&gt;\n' +
'&lt;img style="float:left;margin-right:15px;" width=190 \n' +
 'src=/images/news/2016/175_1.jpg&gt;&lt;/img&gt;\n' +
'王鹏冲，2007年加入中国平安集团信息管理中心（现平安科技），Oracle 10g OCP，平安科技年度优秀原创数据库课程获得者，\n' +
'&lt;/p&gt;\n' +
'&lt;br&gt;&lt;br&gt;\n' +
'\n' +
'## 演讲主题：《从ACID的D看三种主流关系型数据库》\n' +
'\n' +
'![PIC_TITLE](/images/news/2016/pg_bot_banner.jpg=100x80 / 80%x*) \n' +
'\n' +
'----\n' +
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



</script>