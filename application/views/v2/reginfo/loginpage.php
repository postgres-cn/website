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
                <li><a href="#">用户登录</a></li>
            </ol>

<br><br>

			<div align=center>
			<b>登录系统：</b>
			<br/><br/><form action=/v2/act/login method=post>
				<div class="form-group row">
			　　	<label for="username" class="col-sm-2 col-form-label">用户：</label>
					<div class="col-sm-10">
						<input type=text  class='form-control' name=username id=username>
					</div>
				</div>
					<br/><br/>
				<div class="form-group row">
					<label for="passwd" class="col-sm-2 col-form-label">密码：</label>
					<div class="col-sm-10">
						<input type=password class='form-control' name=passwd id=passwd> 
					</div>
				</div>
<?php
$this_url = $_SERVER["PHP_SELF"] ; 
if ( substr($this_url,0,10) === "/index.php")  
		$this_url = substr($this_url,10) ; 

?>
						<input type=hidden name=to_url value='<?php echo $this_url  ; ?>'>

<br>
			　<input type=submit class='btn btn-primary' value='登录'>　 <a class='btn btn-success' role='button' href=/v2/act/register>注册</a>
				</form>
			</div>


		<br/>


</div>
</div>
</div>
</div>