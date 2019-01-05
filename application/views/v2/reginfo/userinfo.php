<script type="text/javascript" src='/js/jquery.min.js'></script>
<script type="text/javascript" src='/js/my_procs.js'></script>
<script type="text/javascript"> 
$(function() {
    var path,  clip = $("#img"),   FileReader = window.FileReader;

    $("#userfile").change(function() {
        if (FileReader) {
            var reader = new FileReader(),
                file = this.files[0];
            reader.onload = function(e) {
                clip.attr("src", e.target.result);
            };
            reader.readAsDataURL(file);
        }
        else {
            path = $(this).val();
            if (/"\w\W"/.test(path)) {
                path = path.slice(1,-1);
            }
            clip.attr("src",path);
        }
    });
});
  </script>

<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">个人资料修改</a></li>
                <li><a href="#">晋级之路</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="#">个人资料修改</a></li>
            </ol>

<table class='table' >
<tr><td valign=top>

<?php echo form_open_multipart('v2/upload_reg/do_upload');?>

<TABLE  cellspacing=0 border=0 cellpadding=8><TBODY>
<TR><TD>
 <?php
$picname = $user['picture'] ; 
//echo "<br>Found: " . $picname ; 
//echo "<br>Path: " . dirname(__FILE__).'/../../../images/users/'.$picname ; 

if ( is_file(dirname(__FILE__).'/../../../../images/users/'.$picname) ) 
	 echo "<IMG id=img SRC='/images/users/".$picname."'  width=150>"; 
else
	 echo "<IMG id=img SRC='/images/users/null_pics.jpg' hspace=10 width=150>" ; 

?>
 <br><br>
<input type=file id="userfile" name="userfile"><br>　
 <input type=submit value='更换头像' class='btn btn-success btn-sm'>

<input type="hidden" name="upload_path"  value="/var/www/html/images/users/" />  
<input type="hidden" name="upload_fname" value="<?php echo $user['sysid'] ; ?>" />

<!--
 <br><br>
 　当前级别：<font color=#993333><b><?php echo $user['thelevel'] ; ?></b></font>
 <br><br>
 　奉献指数：<font color=#993333><b><?php echo $user['thepoint'] ; ?></b></font>
  <br><br>

　　  <a href=/trail/index/1/<?php echo $user['sysid'] ; ?>

title='晋级计分方式：
1，每次登录得1分，每天仅计一次；
2，发新闻一次得30分；
3，发应用案例一次得100分；
4，每次对新闻发表评论得3分；
5，对新闻顶或赞一次得1分，同一条新闻仅计一次有效；
6，每10000分升级一次，共分为“初涉江湖”、“青涩少侠”、“笑傲江湖”、“天地任我行”、“东方不败”、“九九归一”
'
> <img src=/images/upgrade_s.gif border=0 width=40>晋级之路</img></a>

 

 -->
  <br><br>
 <span class='text-warning'>图片应为500K以内<br>长宽限制为1024X1024</span>

 </TD></tr>
 </table>

</FORM>

<td>

<?php


$vad_info = isset($vaderr) ? $vaderr : "" ; 

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=2><div class=banner> $vad_info </div>" : "" ; 


?>

<FORM NAME="myform" method="POST" action="/v2/act/update" >

<input type="hidden" name="sysid" value="<?php echo $user['sysid'] ; ?>" />

<TABLE class='table'><TBODY>

<?php echo $extra_info ; ?>

<TR>
<TD>登录名称：
<td><?php echo $user['thename'] ; ?>  
 

<TR><TD>昵称或实名：<td>
<input type="text" id="realname" name="realname"  class='form-control input-sm' value="<?php echo $user['realname'] ; ?>" >

 <TR><TD>所在地区：<td><script> 
var token = '安徽,北京,天津,上海,重庆,黑龙江,吉林,辽宁,河北,河南,山东,山西,甘肃,宁夏,内蒙古,新疆,陕西,江西,湖北,湖南,浙江,江苏,福建,广东,海南,广西,云南,贵州,四川,西藏,青海' ; 
document.write(outSelectFromTokenString('theprovince',token,1,"<?php echo $user['theprovince']; ?>")) ; </script>

<tr><td>所在城市：<td><input type=text id=thecity name=thecity   value="<?php echo $user['thecity'] ; ?>" class='form-control input-sm'></td></tr>

 <TR><TD>所属行业：
 <td><script> 
var token = '制造,信息,房地产,基础服务,政府,金融,旅游,农业,其他' ; 
document.write(outSelectFromTokenString('industry',token,1,"<?php echo $user['industry']; ?>")) ; </script>
</td></tr>

 <TR><TD>QQ号码：</td>
 <td><input type="text" id="qq" name="qq" class='form-control input-sm'  value="<?php echo $user['qq'];?>" >
 </td></tr>

 <TR><TD>E-mail：</td>
 <td><input type="text" id="email" name="email" class='form-control input-sm'  value="<?php echo $user['email'];?>">
</td></tr>

 <TR><TD>手机号码：
 <td><input type="text" id="phone" name="phone" class='form-control input-sm'  value="<?php echo $user['phone'];?>">

 <TR><TD>登录密码：
 <td><input type=password name=passwd  class='form-control input-sm' value=""><br>
 <span class=hint>为空表示不修改密码，录入新内容则为更新密码</span></td></tr>

 <TR><TD> 确认密码：<td><input type="password" name="passconf"  class='form-control input-sm' value=""> </td></tr>

<TR><TD>兴趣爱好：
<td><input type=text name=focused class='form-control input-sm' value="<?php echo $user['focused'];?>">

 <TR><TD>个性签名：
 <td><textarea name=cust_sig class='form-control input-sm' rows=5><?php echo $user['cust_sig'];?></textarea>

  <TR><TD><TD> <INPUT TYPE=submit CLASS='btn btn-sm btn-primary'  VALUE="  提交变更  " >
 </TABLE>

</FORM>

</td>
</tr>
</table>

</div>
</div>
</div>
</div>


