
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">个人资料</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="/v2/home">首页</a></li>
                <li><a href="#">用户注册</a></li>
            </ol>



<?php 

//echo form_open('act/register') ; 
echo form_open_multipart('v2/act/register');


$vad_info = validation_errors(); 

$extra_info = strlen($vad_info) > 10 ? "<TR><TD colspan=3 class='text-warning'> $vad_info </td></tr>" : "" ; 

?>

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
        } else {
            path = $(this).val();
            if (/"\w\W"/.test(path)) {
                path = path.slice(1,-1);
            }
            clip.attr("src",path);
        }
    });
});
</script>

<div align=center>
<TABLE class='table'><TBODY>

<?php echo $extra_info ; ?>

<TR >
<TD rowspan=13 valign=top>
<IMG id=img SRC='/images/users/null_pic.jpg'  width=150> <br><br>

<input type=file id="userfile" name="userfile"><br><br>
<br>
<span class='text-info'>不选择头像文件时，<br><br>您就是这个样，呵呵... ^_^</span>

 <br><br>
 <span class='text-info'>图片应为500K以内<br><br>长宽限制为1024X1024</span>


<TR>
	  
<TD  class='text-danger'>登录名称：
<td><input type="text" id="thename" name="thename" value="<?php echo set_value('thename'); ?>" class='form-control input-sm'>
 
<TR><TD class='text-danger'>昵称或实名：
<td><input type=text" id="realname" name="realname" value="<?php echo set_value('realname'); ?>" class='form-control input-sm'>

 <TR><TD class='text-danger'>所在地区：</td>
 <td><script> 
var token = '安徽,北京,天津,上海,重庆,黑龙江,吉林,辽宁,河北,河南,山东,山西,甘肃,宁夏,内蒙古,新疆,陕西,江西,湖北,湖南,浙江,江苏,福建,广东,海南,广西,云南,贵州,四川,西藏,青海' ; 
document.write(outSelectFromTokenString('theprovince',token,1,"<?php echo set_value('theprovince'); ?>")) ; </script>
 
 
 <tr><td>所在城市
 <td><input type=text id=thecity name=thecity  value="<?php echo set_value('thecity'); ?>"  class='form-control input-sm'>

 <TR><TD>所属行业：
 <td><script> 
var token = '制造,信息,房地产,基础服务,政府,金融,旅游,农业,其他' ; 
document.write(outSelectFromTokenString('industry',token,1,"<?php echo set_value('industry'); ?>")) ; </script>

 <TR><TD>QQ号码：<td><input type="text" id="qq" name="qq"   value="<?php echo set_value('qq');?>"  class='form-control input-sm'>
 <TR><TD>E-mail：
 <td><input type="text" id="email" name="email"   value="<?php echo set_value('email');?>" class='form-control input-sm'>

 <TR><TD>手机号码：
 <td><input type="text" id="phone" name="phone"   value="<?php echo set_value('phone');?>" class='form-control input-sm' >
 <TR><TD>登录密码：
 <td><input type=password name=passwd   value="<?php echo set_value('passconf');?>" class='form-control input-sm'>

 <TR><TD> 确认密码：
 <td><input type="password" name="passconf"   value="<?php echo set_value('passconf');?>" class='form-control input-sm'> 

<TR><TD>兴趣爱好：
<td><input type=text size=60 name=focused class='form-control input-sm' value="<?php echo set_value('focused');?>">

 <TR><TD>个性签名：
 <td><textarea name=cust_sig class='form-control input-sm' rows=3><?php echo set_value('cust_sig');?></textarea>

<TR><TD colspan=2> <INPUT TYPE=submit CLASS='btn btn-primary' VALUE="  提交注册  " >
 </TABLE>
</div>

</FORM>

</div>
</div>
</div>
</div>