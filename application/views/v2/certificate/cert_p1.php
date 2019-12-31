
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-2">
        <div class="well">
			<ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/certificate">一期名单</a></li>
                <li><a href="/v2/certificate/phase2">二期名单</a></li>
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
                <li class="active"><a href="#">一期通过认证人员</a></li>
            </ol>
            <!--社区信息-->
            <div class="clearfix">
                <div class="col-sm-4">
					<img src="/images/certs/phase1/窦培19092218111.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/冯超19090432105.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/高永超19091510106.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>

                <div class="col-sm-4">
					<img src="/images/certs/phase1/何敏19096732108.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/李敬财19095912115.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/马文豪19091239104.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
			
                <div class="col-sm-4">
					<img src="/images/certs/phase1/彭占元19095126102.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/秦将华19092510109.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/邱文辉19093517107.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
			
                <div class="col-sm-4">
					<img src="/images/certs/phase1/舒正英19098513112.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/孙雅艺19096065107.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/唐林19095516114.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>

			    <div class="col-sm-4">
					<img src="/images/certs/phase1/于成智1909619110.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/于天恒19096018116.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
                <div class="col-sm-4">
					<img src="/images/certs/phase1/张肖飞19094575113.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>

			
			    <div class="col-sm-4">
					<img src="/images/certs/phase1/赵云龙19096615103.jpg" onclick="window.open(this.src)" class="img-responsive img-rounded"  style="cursor:pointer;height:240px;"></img>
                </div>
			
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
