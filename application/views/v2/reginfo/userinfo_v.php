

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

<div class=banner>首页 --> 注册用户可公开信息浏览</div><br><br>

<TABLE  class="table table-bordered" ><TBODY>
 <TR >
 <TD rowspan=10 style="border-right:1px dotted red" valign=top>
 <div align=center>
 <?php
$picname = $user['picture'] ; 

if ( is_file(dirname(__FILE__).'/../../../images/users/'.$picname) ) 
	 echo "<IMG id=img SRC='/images/users/".$picname."'  width=150>"; 
else
	 echo "<IMG id=img SRC='/images/users/null_pics.jpg' hspace=10 width=150>" ; 

?>
</div>


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

 </TD>


		  
<TD style="border-top:1px dotted red">登录名称：
<td style="border-top:1px dotted red"><?php echo $user['thename'] ; ?>  

<TR bgcolor=#f0f0f0><TD>注册时间<td><?php echo $user['regtime'] ; ?>

 
<TR bgcolor=#f0f0f0><TD>昵称或实名：<td><?php echo $user['realname'] ; ?>

 <TR><TD>所在地区：<td><?php echo $user['theprovince'] ; ?>


  　　城市：<?php echo $user['thecity'] ; ?>

 <TR bgcolor=#f0f0f0><TD>所属行业：
 <td><?php echo $user['industry'];?>

 <TR><TD>QQ号码：<td><?php echo $user['qq'];?>
 <TR bgcolor=#f0f0f0><TD>E-mail：
 <td><?php echo $user['email'];?>

 
<TR><TD>兴趣爱好：
<td><?php echo $user['focused'];?>

 <TR bgcolor=#f0f0f0><TD>个性签名：
 <td ><pre><?php echo $user['cust_sig'];?></pre>

 </TABLE>

</FORM>

</div>
</div>
</div>
</div>

