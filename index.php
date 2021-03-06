<?php include "./Header.php"?>
<?php include "./Menus.php"?>
	<div id="content-wrapper">
		<ul class="breadcrumb breadcrumb-page">
			<div class="breadcrumb-label text-light-gray">You are here: </div>
			<li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Home</a></li>
			<li class="active"><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Dashboard</a></li>
		</ul>
		<div class="page-header">
			
			<div class="row">
				<!-- Page header, center on small screens -->
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Dashboard</h1>

				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<!-- "Create project" button, width=auto on desktops -->
						<div class="pull-right col-xs-12 col-sm-auto"><a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-primary btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Create project</a></div>

						<!-- Margin -->
						<div class="visible-xs clearfix form-group-margin"></div>

						<!-- Search field -->
						<form action="" class="pull-right col-xs-12 col-sm-6">
							<div class="input-group no-margin">
								<span class="input-group-addon" style="border:none;background: #fff;background: rgba(0,0,0,.05);"><i class="fa fa-search"></i></span>
								<input type="text" placeholder="Search..." class="form-control no-padding-hr" style="border:none;background: #fff;background: rgba(0,0,0,.05);">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> <!-- / .page-header -->


		<div class="row">
			<div class="col-md-8">

<!-- 5. $UPLOADS_CHART =============================================================================

				Uploads chart
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						var uploads_data = [
							{ day: '2014-03-10', v: 20 },
							{ day: '2014-03-11', v: 10 },
							{ day: '2014-03-12', v: 15 },
							{ day: '2014-03-13', v: 12 },
							{ day: '2014-03-14', v: 5  },
							{ day: '2014-03-15', v: 5  },
							{ day: '2014-03-16', v: 20 }
						];
						Morris.Line({
							element: 'hero-graph',
							data: uploads_data,
							xkey: 'day',
							ykeys: ['v'],
							labels: ['Value'],
							lineColors: ['#fff'],
							lineWidth: 2,
							pointSize: 4,
							gridLineColor: 'rgba(255,255,255,.5)',
							resize: true,
							gridTextColor: '#fff',
							xLabels: "day",
							xLabelFormat: function(d) {
								return ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov', 'Dec'][d.getMonth()] + ' ' + d.getDate(); 
							},
						});
					});
				</script>
				<!-- / Javascript -->

				<div class="stat-panel">
					<div class="stat-row">
						<!-- Small horizontal padding, bordered, without right border, top aligned text -->
						<div class="stat-cell col-sm-4 padding-sm-hr bordered no-border-r valign-top">
							<!-- Small padding, without top padding, extra small horizontal padding -->
							<h4 class="padding-sm no-padding-t padding-xs-hr"><i class="fa fa-cloud-upload text-primary"></i>&nbsp;&nbsp;Uploads</h4>
							<!-- Without margin -->
							<ul class="list-group no-margin">
								<!-- Without left and right borders, extra small horizontal padding, without background, no border radius -->
								<li class="list-group-item no-border-hr padding-xs-hr no-bg no-border-radius">
									Documents <span class="label label-pa-purple pull-right">34</span>
								</li> <!-- / .list-group-item -->
								<!-- Without left and right borders, extra small horizontal padding, without background -->
								<li class="list-group-item no-border-hr padding-xs-hr no-bg">
									Audio <span class="label label-danger pull-right">128</span>
								</li> <!-- / .list-group-item -->
								<!-- Without left and right borders, without bottom border, extra small horizontal padding, without background -->
								<li class="list-group-item no-border-hr no-border-b padding-xs-hr no-bg">
									Videos <span class="label label-success pull-right">12</span>
								</li> <!-- / .list-group-item -->
							</ul>
						</div> <!-- /.stat-cell -->
						<!-- Primary background, small padding, vertically centered text -->
						<div class="stat-cell col-sm-8 bg-primary padding-sm valign-middle">
							<div id="hero-graph" class="graph" style="height: 230px;"><svg height="230" version="1.1" width="688" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="24.5" y="193" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#ffffff" d="M37,193H663" stroke-opacity="0.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="24.5" y="151" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5</tspan></text><path fill="none" stroke="#ffffff" d="M37,151H663" stroke-opacity="0.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="24.5" y="109" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10</tspan></text><path fill="none" stroke="#ffffff" d="M37,109H663" stroke-opacity="0.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="24.5" y="67" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15</tspan></text><path fill="none" stroke="#ffffff" d="M37,67H663" stroke-opacity="0.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="24.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text><path fill="none" stroke="#ffffff" d="M37,25H663" stroke-opacity="0.5" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="663" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 16</tspan></text><text x="558.6666666666666" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 15</tspan></text><text x="454.3333333333333" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 14</tspan></text><text x="350" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 13</tspan></text><text x="245.66666666666666" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 12</tspan></text><text x="141.33333333333331" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 11</tspan></text><text x="37" y="205.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar 10</tspan></text><path fill="none" stroke="#ffffff" d="M37,25C63.08333333333333,46,115.24999999999999,103.75,141.33333333333331,109C167.41666666666666,114.25,219.58333333333331,69.1,245.66666666666666,67C271.75,64.9,323.9166666666667,81.69999999999999,350,92.19999999999999C376.0833333333333,102.69999999999999,428.25,143.65,454.3333333333333,151C480.41666666666663,158.35,532.5833333333333,166.75,558.6666666666666,151C584.75,135.25,636.9166666666666,56.5,663,25" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="37" cy="25" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="141.33333333333331" cy="109" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="245.66666666666666" cy="67" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="350" cy="92.19999999999999" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="454.3333333333333" cy="151" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="558.6666666666666" cy="151" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="663" cy="25" r="4" fill="#ffffff" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 612px; top: 35px;"><div class="morris-hover-row-label">2014-03-16</div><div class="morris-hover-point" style="color: #fff">
  Value:
  20
</div></div></div>
						</div>
					</div>
				</div> <!-- /.stat-panel -->
<!-- /5. $UPLOADS_CHART -->

<!-- 6. $EASY_PIE_CHARTS ===========================================================================

				Easy Pie charts
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						// Easy Pie Charts
						var easyPieChartDefaults = {
							animate: 2000,
							scaleColor: false,
							lineWidth: 6,
							lineCap: 'square',
							size: 90,
							trackColor: '#e5e5e5'
						}
						$('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
					});
				</script>
				<!-- / Javascript -->

				<div class="row">
					<div class="col-xs-4">
						<!-- Centered text -->
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-globe"></i>&nbsp;&nbsp;BANDWIDTH
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="43" id="easy-pie-chart-1">
										<div class="pie-chart-label">12.3TB</div>
									<canvas height="90" width="90"></canvas></div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
					<div class="col-xs-4">
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-flash"></i>&nbsp;&nbsp;PICK LOAD
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="93" id="easy-pie-chart-2">
										<div class="pie-chart-label">93%</div>
									<canvas height="90" width="90"></canvas></div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
					<div class="col-xs-4">
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-cloud"></i>&nbsp;&nbsp;USED RAM
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="75" id="easy-pie-chart-3">
										<div class="pie-chart-label">12GB</div>
									<canvas height="90" width="90"></canvas></div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
				</div>
			</div>
<!-- /6. $EASY_PIE_CHARTS -->

			<div class="col-md-4">
				<div class="row">

<!-- 7. $EARNED_TODAY_STAT_PANEL ===================================================================

					Earned today stat panel
-->
					<div class="col-sm-4 col-md-12">
						<div class="stat-panel">
							<!-- Danger background, vertically centered text -->
							<div class="stat-cell bg-danger valign-middle">
								<!-- Stat panel bg icon -->
								<i class="fa fa-trophy bg-icon"></i>
								<!-- Extra large text -->
								<span class="text-xlg"><span class="text-lg text-slim">$</span><strong>147</strong></span><br>
								<!-- Big text -->
								<span class="text-bg">Earned today</span><br>
								<!-- Small text -->
								<span class="text-sm"><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">See details in your profile</a></span>
							</div> <!-- /.stat-cell -->
						</div> <!-- /.stat-panel -->
					</div>
<!-- /7. $EARNED_TODAY_STAT_PANEL -->


<!-- 8. $RETWEETS_GRAPH_STAT_PANEL =================================================================

					Retweets graph stat panel
-->
					<div class="col-sm-4 col-md-12">
						<!-- Javascript -->
						<script>
							init.push(function () {
								$("#stats-sparklines-3").pixelSparkline([275,490,397,487,339,403,402,312,300], {
									type: 'line',
									width: '100%',
									height: '45px',
									fillColor: '',
									lineColor: '#fff',
									lineWidth: 2,
									spotColor: '#ffffff',
									minSpotColor: '#ffffff',
									maxSpotColor: '#ffffff',
									highlightSpotColor: '#ffffff',
									highlightLineColor: '#ffffff',
									spotRadius: 4,
									highlightLineColor: '#ffffff'
								});
							});
						</script>
						<!-- / Javascript -->

						<div class="stat-panel">
							<div class="stat-row">
								<!-- Purple background, small padding -->
								<div class="stat-cell bg-pa-purple padding-sm">
									<!-- Extra small text -->
									<div class="text-xs" style="margin-bottom: 5px;">RETWEETS GRAPH</div>
									<div class="stats-sparklines" id="stats-sparklines-3" style="width: 100%"><canvas width="497" height="45" style="display: inline-block; width: 497px; height: 45px; vertical-align: top;"></canvas></div>
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, horizontally centered text -->
								<div class="stat-counters bordered no-border-t text-center">
									<!-- Small padding, without horizontal padding -->
									<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
										<!-- Big text -->
										<span class="text-bg"><strong>312</strong></span><br>
										<!-- Extra small text -->
										<span class="text-xs text-muted">TWEETS</span>
									</div>
									<!-- Small padding, without horizontal padding -->
									<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
										<!-- Big text -->
										<span class="text-bg"><strong>1000</strong></span><br>
										<!-- Extra small text -->
										<span class="text-xs text-muted">FOLLOWERS</span>
									</div>
									<!-- Small padding, without horizontal padding -->
									<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
										<!-- Big text -->
										<span class="text-bg"><strong>523</strong></span><br>
										<!-- Extra small text -->
										<span class="text-xs text-muted">FOLLOWING</span>
									</div>
								</div> <!-- /.stat-counters -->
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
<!-- /8. $RETWEETS_GRAPH_STAT_PANEL -->

<!-- 9. $UNIQUE_VISITORS_STAT_PANEL ================================================================

					Unique visitors stat panel
-->
					<div class="col-sm-4 col-md-12">
						<!-- Javascript -->
						<script>
							init.push(function () {
								$("#stats-sparklines-2").pixelSparkline(
									[275,490,397,487,339,403,402,312,300,294,411,367,319,416,355,416,371,479,279,361,312,269,402,327,474,422,375,283,384,372], {
									type: 'bar',
									height: '36px',
									width: '100%',
									barSpacing: 2,
									zeroAxis: false,
									barColor: '#ffffff'
								});
							});
						</script>
						<!-- / Javascript -->

						<div class="stat-panel">
							<div class="stat-row">
								<!-- Warning background -->
								<div class="stat-cell bg-warning">
									<!-- Big text -->
									<span class="text-bg">11% more</span><br>
									<!-- Small text -->
									<span class="text-sm">Unique visitors today</span>
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Warning background, small padding, without top padding, horizontally centered text -->
								<div class="stat-cell bg-warning padding-sm no-padding-t text-center">
									<div id="stats-sparklines-2" class="stats-sparklines" style="width: 100%"><canvas width="478" height="36" style="display: inline-block; width: 478px; height: 36px; vertical-align: top;"></canvas></div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
				</div>
			</div>
		</div>
<!-- /9. $UNIQUE_VISITORS_STAT_PANEL -->

		<!-- Page wide horizontal line -->
		<hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">

		<div class="row">

<!-- 10. $SUPPORT_TICKETS ==========================================================================

			Support tickets
-->
			<!-- Javascript -->
			<script>
				init.push(function () {
					$('#dashboard-support-tickets .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
				})
			</script>
			<!-- / Javascript -->

			<div class="col-md-6">
				<div class="panel panel-success widget-support-tickets" id="dashboard-support-tickets">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i>Support Tickets</span>
						<div class="panel-heading-controls">
							<div class="panel-heading-text"><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">15 new tickets</a></div>
						</div>
					</div> <!-- / .panel-heading -->
					<div class="panel-body tab-content-padding">
						<!-- Panel padding, without vertical padding -->
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> today
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-warning ticket-label">Pending</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Denise Steiner</a> 2 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-info ticket-label">In progress</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">
									<i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
								</a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Robert Jang</a> 3 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-danger ticket-label">Rejected</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Robert Jang</a> 4 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Timothy Owens</a> 5 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> today
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-warning ticket-label">Pending</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Denise Steiner</a> 2 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-info ticket-label">In progress</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">
									<i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
								</a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Robert Jang</a> 3 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-danger ticket-label">Rejected</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Robert Jang</a> 4 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Timothy Owens</a> 5 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> today
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-warning ticket-label">Pending</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Denise Steiner</a> 2 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-info ticket-label">In progress</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">
									<i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
								</a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Robert Jang</a> 3 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-danger ticket-label">Rejected</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Robert Jang</a> 4 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#">Timothy Owens</a> 5 days ago
								</span>
							</div> <!-- / .ticket -->
						</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 93.55509355509356px; background: rgb(136, 136, 136);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
					</div> <!-- / .panel-body -->
				</div> <!-- / .panel -->
			</div>
<!-- /10. $SUPPORT_TICKETS -->

<!-- 11. $RECENT_ACTIVITY ==========================================================================

			Recent activity
-->
			<!-- Javascript -->
			<script>
				init.push(function () {
					$('#dashboard-recent .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
				})
			</script>
			<!-- / Javascript -->

			<div class="col-md-6">
	
				
				<div class="panel panel-warning" id="dashboard-recent">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-fire text-danger"></i>Recent</span>
						<ul class="nav nav-tabs nav-tabs-xs">
							<li class="active">
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#dashboard-recent-comments" data-toggle="tab">Comments</a>
							</li>
							<li>
								<a href="http://infinite-woodland-5276.herokuapp.com/index.html#dashboard-recent-threads" data-toggle="tab">Forum threads</a>
							</li>
						</ul>
					</div> <!-- / .panel-heading -->
					<div class="tab-content">

						<!-- Comments widget -->

						<!-- Without padding -->
						<div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-recent-comments">
							<!-- Panel padding, without vertical padding -->
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">
								<div class="comment">
									<img src="Images/5.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Denise Steiner</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/3.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Michelle Bortz</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/2.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/5.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Denise Steiner</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/3.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Michelle Bortz</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/2.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/2.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="Images/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> commented on <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->
							</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 112.64080100125156px; background: rgb(136, 136, 136);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
						</div> <!-- / .widget-comments -->

						<!-- Threads widget -->

						<!-- Without padding -->
						<div class="widget-threads panel-body tab-pane no-padding fade" id="dashboard-recent-threads">
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="panel-padding no-padding-vr" style="overflow: hidden; width: auto; height: 300px;">
								<div class="thread">
									<img src="Images/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/3.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Michelle Bortz</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/4.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/5.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Denise Steiner</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/3.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Michelle Bortz</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/4.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/5.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Denise Steiner</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->
								<div class="thread">
									<img src="Images/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/3.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Michelle Bortz</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/4.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Timothy Owens</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/5.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Denise Steiner</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="Images/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Robert Jang</a> in <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->
							</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background: rgb(136, 136, 136);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
						</div> <!-- / .panel-body -->
					</div>
				</div> <!-- / .widget-threads -->
			</div>
<!-- /11. $RECENT_ACTIVITY -->
		</div>

		<!-- Page wide horizontal line -->
		<hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">

		<div class="row">

<!-- 12. $NEW_USERS_TABLE ==========================================================================

			New users table
-->
			<div class="col-md-7">
				<div class="panel panel-dark panel-light-green">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i>New users</span>
						<div class="panel-heading-controls">
							<ul class="pagination pagination-xs">
								<li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">«</a></li>
								<li class="active"><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">1</a></li>
								<li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">2</a></li>
								<li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">3</a></li>
								<li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#">»</a></li>
							</ul> <!-- / .pagination -->
						</div> <!-- / .panel-heading-controls -->
					</div> <!-- / .panel-heading -->
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Full Name</th>
								<th>E-mail</th>
								<th></th>
							</tr>
						</thead>
						<tbody class="valign-middle">
							<tr>
								<td>1</td>
								<td>
									<img src="Images/2.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@rjang</a>
								</td>
								<td>Robert Jang</td>
								<td>rjang@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>2</td>
								<td>
									<img src="Images/3.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@mbortz</a>
								</td>
								<td>Michelle Bortz</td>
								<td>mbortz@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>3</td>
								<td>
									<img src="Images/4.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@towens</a>
								</td>
								<td>Timothy Owens</td>
								<td>towens@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>4</td>
								<td>
									<img src="Images/5.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@dsteiner</a>
								</td>
								<td>Denise Steiner</td>
								<td>dsteiner@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>5</td>
								<td>
									<img src="Images/2.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@rjang</a>
								</td>
								<td>Robert Jang</td>
								<td>rjang@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>6</td>
								<td>
									<img src="Images/3.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@mbortz</a>
								</td>
								<td>Michelle Bortz</td>
								<td>mbortz@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>7</td>
								<td>
									<img src="Images/4.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" title="">@towens</a>
								</td>
								<td>Timothy Owens</td>
								<td>towens@example.com</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div> <!-- / .panel -->
			</div>
<!-- /12. $NEW_USERS_TABLE -->

<!-- 13. $RECENT_TASKS =============================================================================

			Recent tasks
-->
			<div class="col-md-5">
				<!-- Javascript -->
				<script>
					init.push(function () {
						$('.widget-tasks .panel-body').pixelTasks().sortable({
							axis: "y",
							handle: ".task-sort-icon",
							stop: function( event, ui ) {
								// IE doesn't register the blur when sorting
								// so trigger focusout handlers to remove .ui-state-focus
								ui.item.children( ".task-sort-icon" ).triggerHandler( "focusout" );
							}
						});
						$('#clear-completed-tasks').click(function () {
							$('.widget-tasks .panel-body').pixelTasks('clearCompletedTasks');
						});
					});
				</script>
				<!-- / Javascript -->

				<div class="panel widget-tasks panel-dark-gray">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-tasks"></i>Recent tasks</span>
						<div class="panel-heading-controls">
							<button class="btn btn-xs btn-primary btn-outline dark" id="clear-completed-tasks"><i class="fa fa-eraser text-success"></i> Clear completed tasks</button>
						</div>
					</div> <!-- / .panel-heading -->
					<!-- Without vertical padding -->
					<div class="panel-body no-padding-vr ui-sortable">

						<div class="task">
							<span class="label label-warning pull-right">High</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">A very important task<span>1 hour left</span></a>
						</div> <!-- / .task -->

						<div class="task completed">
							<span class="label label-warning pull-right">High</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">A very important task<span>58 minutes left</span></a>
						</div> <!-- / .task -->

						<div class="task completed">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<span class="label pull-right">Low</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">An unimportant task</a>
						</div> <!-- / .task -->

						<div class="task">
							<span class="label pull-right">Low</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">An unimportant task</a>
						</div> <!-- / .task -->

						<div class="task">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<span class="label pull-right">Low</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="task-title">An unimportant task</a>
						</div> <!-- / .task -->
					</div> <!-- / .panel-body -->
				</div> <!-- / .panel -->
			</div>
<!-- /13. $RECENT_TASKS -->

		</div>
	</div> <!-- / #content-wrapper -->
	<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->
<?php include "./Footer.php"?>