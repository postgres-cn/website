
<!--中间部分-->
<div class="container" style="margin-top: 60px">
    <!--左边导航栏-->
    <div class="col-md-3">
        <div class="well">
			<ul class="nav nav-pills nav-stacked">
                <li><a href="/v2/book">图书</a></li>
                <li><a href="/v2/document">文档资料</a></li>
                <li><a href="/v2/download">软件下载</a></li>
                <li class="active"><a href="/v2/community">关于中文社区</a></li>
            </ul>
        </div>

    </div>
    <!--右边内容部分-->
    <div class="col-md-9">
        <div class="well">
            <!--分级导航-->
            <ol class="breadcrumb">
                <li><a href="#">首页</a></li>
                <li><a href="#">相关资料</a></li>
                <li class="active"><a href="#">关于中文社区</a></li>
            </ol>
            <!--社区信息-->
            <div class="clearfix">
                <div class="col-md-6">
                    <p>自1993年起，热心网友何伟平（网名laser，现国内数据库专家，”去哪儿“网站首席架构师）开始独自翻译并研究PostgreSQL十余年，网上现仍可随处搜索到何伟平当时所翻译的PostgreSQL4.0---8.2等各版本的手册，尤其是那篇《<b><a href=/v2/news/viewone/1/52>PostgreSQL的昨天、今天和明天</a></b>》在网上广为流传，为广大中国IT开发人员了解PostgreSQL起到了重要的作用，在此我们也对何伟平所作的贡献表示由衷的敬意。</p>
                    <p>今天，随着众多使用和爱好PostgreSQL人员的加入，PostgreSQL在中国的应用呈快速发展之势。为进一步规范中文社区的发展，在今年2013杭州PostgreSQL用户大会上，经广大网友的一致讨论，我们正式成立注册的组织---PostgreSQL中国用户协会，并根据各位网友的特长和爱好，成立不同的事务处理小组和核心的管理委员会，来共同努力更好地为广大网友服务，在中国大力推广这一优秀的数据库软件。</p>
                    <p>最新注册用户 【<b><a href=/v2/community/typelist/1/ALL><?php echo $total_num ; ?></a></b> 】（此处仅为本网站注册的用户，一般也是PostgreSQL的最终用户）在各行业的分布图和在各个省份的分布图，见附图1和附图2。</p>
                </div>
                <div class="col-md-6">
                    <!--注册用户各行业最新分布图-->
					<div align=center id="container" style="height: 300px;"></div>
                </div>
            </div>
            <div>
                <!--网站注册用户各地区最新分布图-->
				<div align=center id="container2" style="height: 300px;margin:1 auto;"></div>
            </div>
            <div class="well well-sm">
                <h4><strong>协会管理委员分工情况...   任期:2016-01-01 ---- 2018-12-31 </strong></h4>
                <table class="table">
                    <tr>
                        <th>职责</th>
                        <th>名单</th>
                        <th>权利和义务</th>
                    </tr>
                    <tr>
                        <td align=center>主席</td>
                        <td>赵振平，副主席：唐成</td>
                        <td>
                            <li>职能：发展统筹，工作分配，整体进度跟踪</li>
                            <li>权利：1票否决权，但没有强制执行权；投票数+2（1票等于3票）</li>
                            <li>制约：常委过半数支持可弹劾发展统筹，工作分配，整体进度跟踪。</li>
                        </td>
                    </tr>
                    <tr>
                        <td align=center>副主席</td>
                        <td>唐成</td>
                        <td>
                            <li>职能：发展统筹，工作分配，整体进度跟踪</li>
                            <li>权利：1票否决权，但没有强制执行权；投票数+1（1票等于3票）</li>
                            <li>制约：常委过半数支持可弹劾发展统筹，工作分配，整体进度跟踪。</li>
                        </td>
                    </tr>

                    <tr>
                        <td align=center>委员核心组</td>
                        <td>萧少聪、周正中、汪洋、<br>
张文升、陈河堆、朱贤文、<br>
李海龙、周到京、白国华、<br>
姜明俊、谭峰、胡辉、<br>
王硕、陈华军、秦红胜、<br>
刘泉、胡怡文、彭煜玮、<br>
胡森、姚延栋
                        </td>
                        <td>
                            <li>权利：能参加所有核心级会议，并行使投票权</li>
                            <li>制约：6个月不在重要会议出现自动免职，来年再进行推选</li>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="well well-sm">
                <h4><strong>事务小组分工情况</strong></h4>
                <ul>
                    <li>象牙塔校长：周正中、彭煜伟</li>
                    <li>文档翻译组：刘嫒嫒、陈建军</li>
                    <li>网站建设组：周到京、张泽鹏</li>
                    <li>微信建设组：刘嫒嫒、张文升</li>
                    <li>微博建设组：谭峰、唐成、徐鹏飞、刘泉</li>
                    <li>帐目管理组：萧少聪、赵振平</li>
                    <li>大象会筹划：胡怡文、Wind、唐成</li>
                    <li>活动报名组：胡怡文、张茜</li>
                </ul>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: { text: '<span style="font-size:12px;color:#990000">注册用户各行业最新分布图</span>' },
        tooltip: {  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
					style: {color:'#330000',fontWeight:'plain'},
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: '网站注册用户行业占比',
			style: {color:'#333333',fontWeight:'plain'},
            data: [

					['信息' , <?php echo $it_num; ?> ],
//	                    sliced: true,
//	                    selected: true
					['制造' ,  <?php echo $manu_num; ?> ],
					['房地产', <?php echo $ast_num; ?>],
					['政府' ,  <?php echo $gov_num; ?>],
					['金融' ,  <?php echo $fin_num; ?>],
					['基础服务',<?php echo $base_num; ?>],
					['旅游' ,<?php echo $trav_num; ?>],
					['农业' ,<?php echo  $agr_num; ?>],
					['其他' ,<?php echo  $oth_num; ?>]
            ]
        }]
    });
});



$(function () {
    // Create the chart
    $('#container2').highcharts({
        chart: {  type: 'column' },
        title: {  text: '<span style="font-size:12px;color:#990000">网站注册用户各地区最新分布图</span>' },
        subtitle: {  texxxt: 'Click the columns to view versions. ' },
        xAxis: {  type: 'category',
					style: {fontSize: '12px',color:'#330000',fontWeight:'plain'}
					},
        yAxis: { titlxxe: { text: 'Total share'	 },
                 style: {fontSize: '12px',color:'#330000',fontWeight:'plain'}

	    },
        legend: { enabled: false },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
					style: {'fontSize': '9px','color':'#330000','fontWeight':'plain'},
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of <?php echo $total_num ; ?><br/>'
        },

        series: [{
            name: "网站注册用户数量：",
            colorByPoint: true,
            data: [
				  { name: '皖',y: <?php echo $n_ah; ?> },
				  { name: '京',y: <?php echo $n_bj; ?> },
				  { name: '津',y: <?php echo $n_tj; ?> },
				  { name: '沪',y: <?php echo $n_sh; ?> },
				  { name: '渝',y: <?php echo $n_cq; ?> },
				  { name: '黑',y: <?php echo $n_hlj; ?> },
				  { name: '吉',y: <?php echo $n_jl; ?> },
				  { name: '辽',y: <?php echo $n_ll; ?> },
				  { name: '豫',y: <?php echo $n_hn; ?> },
				  { name: '冀',y: <?php echo $n_hb; ?> },
				  { name: '鲁',y: <?php echo $n_sd; ?> },
				  { name: '晋',y: <?php echo $n_sx; ?> },
				  { name: '陕',y: <?php echo $n_shx; ?> },
				  { name: '湘',y: <?php echo $n_hun; ?> },
				  { name: '鄂',y: <?php echo $n_hub; ?> },
				  { name: '苏',y: <?php echo $n_js; ?> },
				  { name: '浙',y: <?php echo $n_zj; ?> },
				  { name: '赣',y: <?php echo $n_jx; ?> },
				  { name: '粤',y: <?php echo $n_gd; ?> },
				  { name: '闽',y: <?php echo $n_fj; ?> },
				  { name: '桂',y: <?php echo $n_gx; ?> },
				  { name: '滇',y: <?php echo $n_yn; ?> },
				  { name: '黔',y: <?php echo $n_gz; ?> },
				  { name: '川',y: <?php echo $n_sc; ?> },
				  { name: '未知',y: <?php echo $n_other; ?> }
				]
        }] //End of series
    }); //End of containers
});	//End of functions


		</script>


<script src="/js/highcharts.js"></script>
<script src="/js/highcharts-3d.js"></script>
<script src="/js/exporting.js"></script>
