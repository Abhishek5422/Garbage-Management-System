<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{url('Admin/css/bootstrap.css')}}">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{url('Admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='{{url('Admin///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url('Admin/css/font.css')}}" type="text/css"/>
<link href="{{url('Admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{url('Admin/js/jquery2.0.3.min.js')}}"></script>
<script src="{{url('Admin/js/modernizr.js')}}"></script>
<script src="{{url('Admin/js/jquery.cookie.js')}}"></script>
<script src="{{url('Admin/js/screenfull.js')}}"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="{{url('Admin/js/raphael-min.js')}}"></script>
<script src="{{url('Admin/js/morris.js')}}"></script>
<link rel="stylesheet" href="{{url('Admin/css/morris.css')}}">
<!-- //charts -->
<!--skycons-icons-->
<script src="{{url('Admin/js/skycons.js')}}"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Category
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="buttons.html">
					Add Category
					</a>
					</li>
					<li>
					<a class="subnav-text" href="grids.html">
					Manage Category
					</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="charts.html">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
						User Request
					</span>
				</a>
			</li>
			
			<li>
				<a href="charts.html">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">
						Booking Details
					</span>
				</a>
			</li>
			<li>
				<a href="charts.html">
					<i class="fa fa-map-marker"></i>
					<span class="nav-text">
						User Details
					</span>
				</a>
			</li>
			<li>
				<a href="charts.html">
					<i class="fa fa-list-ul"></i>
					<span class="nav-text">
						My Profile
					</span>
				</a>
			</li>
	
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="login.html">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.html"><img src="{{url('Admin/images/logo.png')}}" alt="" />Colored</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
									   <div class="user_img"><img src="{{url('Admin/images/1.png')}}" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="{{url('Admin/images/2.png')}}" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									</a></li>
									<li><a href="#">
									   <div class="user_img"><img src="{{url('Admin/images/3.png')}}" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div> 
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="{{url('Admin/images/2.png')}}" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="{{url('Admin/images/1.png')}}" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="{{url('Admin/images/3.png')}}" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>
							</li>	
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending tasks</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>	
										</div>
									   <div class="progress progress-striped active">
											 <div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending tasks</a>
										</div> 
									</li>
								</ul>
							</li>	
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			
			<div class="social grid">
					<div class="grid-info">
						<div class="col-md-3 top-comment-grid">
							<div class="comments likes">
								<div class="comments-icon">
									<i class="fa fa-facebook"></i>
								</div>
								<div class="comments-info likes-info">
									<h3>95K</h3>
									<a href="#">Likes</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments">
								<div class="comments-icon">
									<i class="fa fa-comments"></i>
								</div>
								<div class="comments-info">
									<h3>12K</h3>
									<a href="#">Comments</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments tweets">
								<div class="comments-icon">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="comments-info tweets-info">
									<h3>27K</h3>
									<a href="#">Tweets</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments views">
								<div class="comments-icon">
									<i class="fa fa-eye"></i>
								</div>
								<div class="comments-info views-info">
									<h3>557K</h3>
									<a href="#">Views</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			
			<div class="agile-grids">
				<div class="col-md-4 charts-right">
					<!-- area-chart -->
					<div class="area-grids">
						<div class="area-grids-heading">
							<h3>Area charts</h3>
						</div>
						<div id="graph4"></div>
						<script>
							Morris.Donut({
							  element: 'graph4',
							  data: [
								{value: 70, label: 'foo', formatted: 'at least 70%' },
								{value: 15, label: 'bar', formatted: 'approx. 15%' },
								{value: 10, label: 'baz', formatted: 'approx. 10%' },
								{value: 5, label: 'A really really long label', formatted: 'at most 5%' }
							  ],
							  formatter: function (x, data) { return data.formatted; }
							});
						</script>

					</div>
					<!-- //area-chart -->
				</div>
				<div class="col-md-8 chart-left">
					<!-- updating-data -->
					<div class="agile-Updating-grids">
						<div class="area-grids-heading">
							<h3>Updating data</h3>
						</div>
						<div id="graph1"></div>
						<script>
						var nReloads = 0;
						function data(offset) {
						  var ret = [];
						  for (var x = 0; x <= 360; x += 10) {
							var v = (offset + x) % 360;
							ret.push({
							  x: x,
							  y: Math.sin(Math.PI * v / 180).toFixed(4),
							  z: Math.cos(Math.PI * v / 180).toFixed(4)
							});
						  }
						  return ret;
						}
						var graph = Morris.Line({
							element: 'graph1',
							data: data(0),
							xkey: 'x',
							ykeys: ['y', 'z'],
							labels: ['sin()', 'cos()'],
							parseTime: false,
							ymin: -1.0,
							ymax: 1.0,
							hideHover: true
						});
						function update() {
						  nReloads++;
						  graph.setData(data(5 * nReloads));
						  $('#reloadStatus').text(nReloads + ' reloads');
						}
						setInterval(update, 100);
						</script>

					</div>
					<!-- //updating-data -->
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="agile-bottom-grids">
				<div class="col-md-6 agile-bottom-right">
					<div class="agile-bottom-grid">
						<div class="area-grids-heading">
							<h3>Stacked Bars chart</h3>
						</div>
						<div id="graph6"></div>
						<script>
						// Use Morris.Bar
						Morris.Bar({
						  element: 'graph6',
						  data: [
							{x: '2011 Q1', y: 0},
							{x: '2011 Q2', y: 1},
							{x: '2011 Q3', y: 2},
							{x: '2011 Q4', y: 3},
							{x: '2012 Q1', y: 4},
							{x: '2012 Q2', y: 5},
							{x: '2012 Q3', y: 6},
							{x: '2012 Q4', y: 7},
							{x: '2013 Q1', y: 8}
						  ],
						  xkey: 'x',
						  ykeys: ['y'],
						  labels: ['Y'],
						  barColors: function (row, series, type) {
							if (type === 'bar') {
							  var red = Math.ceil(255 * row.y / this.ymax);
							  return 'rgb(' + red + ',0,0)';
							}
							else {
							  return '#000';
							}
						  }
						});
						</script>
					</div>
				</div>
				<div class="col-md-6 agile-bottom-left">
					<div class="agile-bottom-grid">
						<div class="area-grids-heading">
							<h3>Stacked Bars chart</h3>
						</div>
						<div id="graph5"></div>
						<script>
						// Use Morris.Bar
						Morris.Bar({
						  element: 'graph5',
						  data: [
							{x: '2011 Q1', y: 3, z: 2, a: 3},
							{x: '2011 Q2', y: 2, z: null, a: 1},
							{x: '2011 Q3', y: 0, z: 2, a: 4},
							{x: '2011 Q4', y: 2, z: 4, a: 3}
						  ],
						  xkey: 'x',
						  ykeys: ['y', 'z', 'a'],
						  labels: ['Y', 'Z', 'A'],
						  stacked: true
						});
						</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agile-last-grids">
				<div class="col-md-4 agile-last-left">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Daylight savings time</h3>
						</div>
						<div id="graph7"></div>
						<script>
						// This crosses a DST boundary in the UK.
						Morris.Area({
						  element: 'graph7',
						  data: [
							{x: '2013-03-30 22:00:00', y: 3, z: 3},
							{x: '2013-03-31 00:00:00', y: 2, z: 0},
							{x: '2013-03-31 02:00:00', y: 0, z: 2},
							{x: '2013-03-31 04:00:00', y: 4, z: 4}
						  ],
						  xkey: 'x',
						  ykeys: ['y', 'z'],
						  labels: ['Y', 'Z']
						});
						</script>

					</div>
				</div>
				<div class="col-md-4 agile-last-left agile-last-middle">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Daylight savings time</h3>
						</div>
						<div id="graph8"></div>
						<script>
						/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
						var day_data = [
						  {"period": "2012-10-01", "licensed": 3407, "sorned": 660},
						  {"period": "2012-09-30", "licensed": 3351, "sorned": 629},
						  {"period": "2012-09-29", "licensed": 3269, "sorned": 618},
						  {"period": "2012-09-20", "licensed": 3246, "sorned": 661},
						  {"period": "2012-09-19", "licensed": 3257, "sorned": 667},
						  {"period": "2012-09-18", "licensed": 3248, "sorned": 627},
						  {"period": "2012-09-17", "licensed": 3171, "sorned": 660},
						  {"period": "2012-09-16", "licensed": 3171, "sorned": 676},
						  {"period": "2012-09-15", "licensed": 3201, "sorned": 656},
						  {"period": "2012-09-10", "licensed": 3215, "sorned": 622}
						];
						Morris.Bar({
						  element: 'graph8',
						  data: day_data,
						  xkey: 'period',
						  ykeys: ['licensed', 'sorned'],
						  labels: ['Licensed', 'SORN'],
						  xLabelAngle: 60
						});
						</script>
					</div>
				</div>
				<div class="col-md-4 agile-last-left agile-last-right">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Daylight savings time</h3>
						</div>
						<div id="graph9"></div>
						<script>
						var day_data = [
						  {"elapsed": "I", "value": 34},
						  {"elapsed": "II", "value": 24},
						  {"elapsed": "III", "value": 3},
						  {"elapsed": "IV", "value": 12},
						  {"elapsed": "V", "value": 13},
						  {"elapsed": "VI", "value": 22},
						  {"elapsed": "VII", "value": 5},
						  {"elapsed": "VIII", "value": 26},
						  {"elapsed": "IX", "value": 12},
						  {"elapsed": "X", "value": 19}
						];
						Morris.Line({
						  element: 'graph9',
						  data: day_data,
						  xkey: 'elapsed',
						  ykeys: ['value'],
						  labels: ['value'],
						  parseTime: false
						});
						</script>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agile-two-grids">
				<div class="col-md-6 count">
						<div class="count-grid">
							<h3 class="title">Countdown</h3>
							<ul id="example">
								<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
								<li class="seperator">:</li>
								<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
								<li class="seperator">:</li>
								<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
							</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 18:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
						</div>
				</div>
				<div class="col-md-6 weather">
					<div class="weather-right">
						<div class="weather-heading">
							<h3>Weather Report</h3>
						</div>
								<ul>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
										</figure>
										<h3>25 °C</h3>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="clear-day" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>WED</h4>
											<h5>27 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="snow" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>THR</h4>
											<h5>13 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-night" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>FRI</h4>
											<h5>18 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="cloudy" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SAT</h4>
											<h5>15 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="fog" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SUN</h4>
											<h5>11 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								<script>
									 var icons = new Skycons({"color": "#fcb216"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#000"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="{{url('Admin/js/bootstrap.js')}}"></script>
	<script src="{{url('Admin/js/proton.js')}}"></script>
</body>
</html>
