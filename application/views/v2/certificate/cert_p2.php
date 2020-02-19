
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
			<ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/certificate">2019名单</a></li>
                <li><a href="/v2/certificate/p2020">2020名单</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-10">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="#">首页</a></li>
                <li><a href="#">培训认证</a></li>
                <li class="active"><a href="#">2020年度通过认证人员</a></li>
            </ol>
            <!--社区信息-->
            <div class="clearfix">
				<h5>暂无人员</h5>	



			</div>


        </div>

    </div>

	<div id="window.openModal" class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm"  style="display: inline-block; width: auto;">
			<div class="modal-content">
				<div class="modal-body">
					<img src="" id="bigImg"/>
				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script>
function imgZoom(source){
	console.log("Get:", source);
    $("#bigImg").attr('src',source);
    $("#bigImg").attr("data-toggle","modal");
    $("#bigImg").attr("data-target","#window.openModal");
    $("#bigImg").css("height",800);
    $("#window.openModal").show();
}

</script>
