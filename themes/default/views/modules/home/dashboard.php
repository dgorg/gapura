
							<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
								<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
								<li class="active">Dashboard</li>
							</ul>
							<div class="m-b-md">
								<h3 class="m-b-none">Dashboard</h3>  <small>Welcome back, Administrator</small> 
							</div>
							<section class="panel panel-default">
								<div class="row m-l-none m-r-none bg-light lter">
									<div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-male fa-stack-1x text-white"></i> </span> 
										<a class="clear" href="#"> <span class="h3 block m-t-xs"><strong><?php echo $total_anggota; ?></strong></span>  <small class="text-muted text-uc">ANGGOTA</small> 
										</a>
									</div>
									<div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i class="fa fa-group fa-stack-1x text-white"></i> </span>
										<a
										class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="bugs"><?php echo $total_majelis; ?></strong></span>  <small class="text-muted text-uc">MAJELIS</small> 
											</a>
									</div>
									<div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-thumb-tack fa-stack-1x text-white"></i> <!--<span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="3000" data-target="#firers" data-update="5000"></span>--> </span>
										<a
										class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="firers"><?php echo $total_cabang; ?></strong></span>  <small class="text-muted text-uc">CABANG</small> 
											</a>
									</div>
									<div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x icon-muted"></i> <i class="fa fa-briefcase fa-stack-1x text-white"></i> </span> 
										<a class="clear" href="#"> <span class="h3 block m-t-xs"><strong><?php echo $total_tpl; ?></strong></span>  <small class="text-muted text-uc">TPL</small> 
										</a>
									</div>
								</div>
							</section>
							<div class="row">
								<div class="col-md-8">
									<section class="panel panel-default">
										<header class="panel-heading font-bold">Statistics</header>
										<div class="panel-body">
											<div id="flot-1ine" style="height:210px"></div>
										</div>
										<footer class="panel-footer bg-white no-padder">
											<div class="row text-center no-gutter">
												<div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">5,860</span>  <small class="text-muted m-b block">Orders</small> 
												</div>
												<div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">10,450</span>  <small class="text-muted m-b block">Sellings</small> 
												</div>
												<div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">21,230</span>  <small class="text-muted m-b block">Items</small> 
												</div>
												<div class="col-xs-3"> <span class="h4 font-bold m-t block">7,230</span>  <small class="text-muted m-b block">Customers</small> 
												</div>
											</div>
										</footer>
									</section>
								</div>
								<div class="col-md-4">
									<section class="panel panel-default">
										<header class="panel-heading font-bold">Data graph</header>
										<div class="bg-light dk wrapper"> <span class="pull-right">Friday</span>  <span class="h4">$540<br> <small class="text-muted">+1.05(2.15%)</small> </span> 
											<div class="text-center m-b-n m-t-sm">
												<div class="sparkline" data-type="line" data-height="65" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true" values="280,320,220,385,450,320,345,250,250,250,400,380"></div>
												<div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="6" data-bar-color="#65bd77">10,9,11,10,11,10,12,10,9,10,11,9,8</div>
											</div>
										</div>
										<div class="panel-body">
											<div> <span class="text-muted">Total:</span>  <span class="h3 block">$2500.00</span> 
											</div>
											<div class="line pull-in"></div>
											<div class="row m-t-sm">
												<div class="col-xs-4"> <small class="text-muted block">Market</small>  <span>$1500.00</span> 
												</div>
												<div class="col-xs-4"> <small class="text-muted block">Referal</small>  <span>$600.00</span> 
												</div>
												<div class="col-xs-4"> <small class="text-muted block">Affiliate</small>  <span>$400.00</span> 
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<h4 class="m-t-none">Todos</h4> 
									<ul class="list-group gutter list-group-lg list-group-sp sortable">
										<li class="list-group-item box-shadow">
											<a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> 
											</a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-1" data-toggle="class:text-lt text-success" class="active"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span> 
											<div
											class="clear text-success text-lt" id="todo-1">Browser compatibility</div>
								</li>
								<li class="list-group-item box-shadow">
									<a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> 
									</a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-2" data-toggle="class:text-lt text-danger"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-danger"></i> </a> </span> 
									<div
									class="clear" id="todo-2">Looking for more example templates</div>
							</li>
							<li class="list-group-item box-shadow">
								<a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> 
								</a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-3" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span> 
								<div
								class="clear" id="todo-3">Customizing components</div>
							</li>
							<li class="list-group-item box-shadow">
								<a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> 
								</a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-4" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span> 
								<div
								class="clear" id="todo-4">The fastest way to get started</div>
							</li>
							<li class="list-group-item box-shadow">
								<a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> 
								</a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-5" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span> 
								<div
								class="clear" id="todo-5">HTML5 doctype required</div>
							</li>
							<li class="list-group-item box-shadow">
								<a href="#" class="pull-right" data-dismiss="alert"> <i class="fa fa-times icon-muted"></i> 
								</a> <span class="pull-left media-xs"> <i class="fa fa-sort icon-muted fa m-r-sm"></i> <a href="#todo-6" data-toggle="class:text-lt"> <i class="fa fa-square-o fa-fw text"></i> <i class="fa fa-check-square-o fa-fw text-active text-success"></i> </a> </span> 
								<div
								class="clear" id="todo-6">LessCSS compiling</div>
							</li>
							</ul>
							</div>
							<div class="col-md-4">
								<section class="panel b-light">
									<header class="panel-heading bg-primary dker no-border"><strong>Calendar</strong>
									</header>
									<div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"></div>
									<div class="list-group">
										<a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-danger">7:30</span> Meet a friend</a>
										<a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-success">9:30</span> Have a kick off meeting with .inc company</a>
										<a href="#" class="list-group-item text-ellipsis"> <span class="badge bg-light">19:30</span> Milestone release</a>
									</div>
								</section>
							</div>
							</div>