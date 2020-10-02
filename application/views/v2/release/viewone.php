
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
                <li><a href="#">新版本发布声明</a></li>
				<li>PostgreSQL <?php echo $ver['theversion']; ?>版本发布说明</li>
 </ol>


翻译：<b><?php echo $ver['author']; ?></b> ... 新闻稿采编：<b><?php echo $ver['inputtime']; ?> </b><br><br>

<h4><strong>软件发布：<?php echo substr($ver['reltime'],0,10); ?> </strong></h4>

<div id="rel_content">
	<?php 
		if ( $ver['sysid'] <= 33 ) 
			echo $ver['thecontent']; 
	?>
</div>

<div id="md_content_zone" style="display:none">
<?php 
	if ( $ver['sysid'] > 33 ) 
		echo "<textarea id='mdx_content' rows=20>" . $ver['thecontent'] . "</textarea>" ;  
?>
</div>

<UL><b><?php echo $ver['thememo']; ?></b>  
</UL>

</div>
</div>
</div>
</div>


<script language="javascript">
function showMarkdown() {
	var converter = new showdown.Converter({
		tables: true,
		tasklists: true,
		simplifiedAutoLink:true,
		literalMidWordUnderscores:true,
		parseImgDimensions: true, //foo.jpg = 100x80 or 100x*  or 80%x*
		excludeTrailingPunctuationFromURLs: true
	});

    md_text = document.getElementById('mdx_content').value; ;
    htmlTxt = converter.makeHtml(md_text);
    htmlTxt = htmlTxt.replace(/table/g,'table class="table table-bordered table-condensed"') ; 

    document.getElementById("rel_content").innerHTML=htmlTxt ; 
 }

</script>    
<?php 
		if ( $ver['sysid'] > 33 ) 
			echo "<script language='javascript'> showMarkdown(); </script>" ; 
?>
