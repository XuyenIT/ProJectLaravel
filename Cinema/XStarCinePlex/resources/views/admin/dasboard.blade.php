<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
	<title>soengsouy.com</title>
	  <!--favicon-->
	<link rel="icon" href="../dist/img/avatar/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- 	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/bootstrap/css/bootstrap.min.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/summernote/summernote-lite.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/modules/flag-icon-css/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/css/demo.css') }}">
	<link rel="stylesheet" href="{{ asset('font_end/Dasboard_Phuc/css/style.css') }}"> </head>

<body>
	<div id="app">
		<div class="main-wrapper">
             <!--Header nha--->
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
                <!---Thanh search nha-->
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
					</ul>
					<div class="search-element">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search">
						<button class="btn" type="submit"><i class="ion ion-search"></i></button>
					</div>
				</form>
                <!---Het Thanh search nha-->

                <!--Phan notification nha-->
				<ul class="navbar-nav navbar-right">
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right"> <a href="#">View All</a> </div>
							</div>
							<div class="dropdown-list-content">
								<a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
										<div class="time">10 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Soeng Souy</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
										<div class="time">16 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
										<div class="time">Yesterday</div>
									</div>
								</a>
							</div>
						</div>
					</li>
                    <!--het phan notification nha-->

                    <!--Phan logout nha-->
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg"> <i class="ion ion-android-person d-lg-none"></i>
							<div class="d-sm-none d-lg-inline-block">Hi, X-Start Admin</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="profile.html" class="dropdown-item has-icon"> <i class="ion ion-android-person"></i> Profile </a>
							<a href="#" class="dropdown-item has-icon"> <i class="ion ion-log-out"></i> Logout </a>
						</div>
					</li>
                    <!---Het phan logout nha-->
				</ul>
			</nav>
            <!--bat dau slidebar canh ben nha--->
			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand"> <a href="index.html"><img alt="image" src="{{ asset('font_end/Dasboard_Phuc/img/main-logo.png') }}" style="width:200px;height:150px;"></a> </div>
					<div class="sidebar-user">
					{{-- 	<div class="sidebar-user-picture"> <img alt="image" src="{{ asset('font_end/Dasboard_Phuc/img/main-logo.png') }}"> </div> --}}
					{{-- 	<div class="sidebar-user-details">
							<div class="user-name">Soeng Souy</div>
							<div class="user-role"> Administrator </div>
						</div> --}}
					</div>
                    <!--bat dau phan the cac canh ben nha-->
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>
						<li class="active"> <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>
						<li class="menu-header">Manager</li>
						<li> <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
							<ul class="menu-dropdown">
								<li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
								<li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
								<li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
								<li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
							</ul>
						</li>
						<li> <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
							<ul class="menu-dropdown">
								<li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
								<li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
								<li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
							</ul>
						</li>
						<li> <a href="{{ url('admin/account') }}"><i class="ion ion-clipboard"></i><span>Account</span></a> </li>
						<li> <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a> </li>
						<li> <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google Maps</span></a> </li>
						<li> <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
							<ul class="menu-dropdown">
								<li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
								<li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
								<li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
								<li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
								<li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
							</ul>
						</li>
						<li class="menu-header">More</li>
						<li> <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
							<ul class="menu-dropdown">
								<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
								<li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
									<ul class="menu-dropdown">
										<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
										<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
										<li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
											<ul class="menu-dropdown">
												<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
												<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
												<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
											</ul>
										</li>
										<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li> <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a> </li>
						<li> <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a> </li>
					</ul>
				</aside>
			</div>
        <!---header end nha--->


        <!---Content cua DashBoar nha-->
			<div class="main-content">
				<section class="section">
					<h1 class="section-header">
            <div>Dashboard</div>
          </h1>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-primary"> <i class="ion ion-person"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Admin</h4> </div>
									<div class="card-body"> 10 </div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-danger"> <i class="ion ion-ios-paper-outline"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>News</h4> </div>
									<div class="card-body"> 42 </div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-warning"> <i class="ion ion-paper-airplane"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Reports</h4> </div>
									<div class="card-body"> 1,201 </div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-success"> <i class="ion ion-record"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Online Users</h4> </div>
									<div class="card-body"> 47 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="float-right">
										<div class="btn-group"> <a href="#" class="btn active">Week</a> <a href="#" class="btn">Month</a> <a href="#" class="btn">Year</a> </div>
									</div>
									<h4>Statistics</h4> </div>
								<div class="card-body">
									<canvas id="myChart" height="158"></canvas>
									<div class="statistic-details mt-sm-4">
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span> 7%</small>
											<div class="detail-value">$243</div>
											<div class="detail-name">Today's Sales</div>
										</div>
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-danger"><i class="ion-arrow-down-b"></i></span> 23%</small>
											<div class="detail-value">$2,902</div>
											<div class="detail-name">This Week's Sales</div>
										</div>
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span>9%</small>
											<div class="detail-value">$12,821</div>
											<div class="detail-name">This Month's Sales</div>
										</div>
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span> 19%</small>
											<div class="detail-value">$92,142</div>
											<div class="detail-name">This Year's Sales</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Recent Activities</h4> </div>
								<div class="card-body">
									<ul class="list-unstyled list-unstyled-border">
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-1.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Farhan A Mujib</div> <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small> </div>
										</li>
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-2.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Soeng Souy</div> <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small> </div>
										</li>
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-3.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Rizal Fakhri</div> <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small> </div>
										</li>
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="../dist/img/avatar/avatar-4.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Alfa Zulkarnain</div> <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small> </div>
										</li>
									</ul>
									<div class="text-center"> <a href="#" class="btn btn-primary btn-round">
                      View All
                    </a> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-12 col-12 col-sm-12">
							<form method="post" class="needs-validation" novalidate="">
								<div class="card">
									<div class="card-header">
										<h4>Quick Draft</h4> </div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" name="title" class="form-control" required>
											<div class="invalid-feedback"> Please fill in the title </div>
										</div>
										<div class="form-group">
											<label>Content</label>
											<textarea class="summernote-simple"></textarea>
										</div>
									</div>
									<div class="card-footer">
										<button class="btn btn-primary">Save Draft</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-7 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="float-right"> <a href="#" class="btn btn-primary">View All</a> </div>
									<h4>Latest Posts</h4> </div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Title</th>
													<th>Author</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td> Introduction Laravel 5
														<div class="table-links"> in <a href="#">Web Development</a>
															<div class="bullet"></div> <a href="#">View</a> </div>
													</td>
													<td>
														<a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
													</td>
													<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
												</tr>
												<tr>
													<td> Laravel 5 Tutorial - Installation
														<div class="table-links"> in <a href="#">Web Development</a>
															<div class="bullet"></div> <a href="#">View</a> </div>
													</td>
													<td>
														<a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
													</td>
													<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
												</tr>
												<tr>
													<td> Laravel 5 Tutorial - MVC
														<div class="table-links"> in <a href="#">Web Development</a>
															<div class="bullet"></div> <a href="#">View</a> </div>
													</td>
													<td>
														<a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
													</td>
													<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
												</tr>
												<tr>
													<td> Laravel 5 Tutorial - Migration
														<div class="table-links"> in <a href="#">Web Development</a>
															<div class="bullet"></div> <a href="#">View</a> </div>
													</td>
													<td>
														<a href="#"><img src="../dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
													</td>
													<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
            <!--het content cua Dash Board nha-->

           <!--Bat dau footer nha-->
			<footer class="main-footer">
				<div class="footer-left"> Copyright &copy; X-Star Cineplex 2021
					<div class="bullet"></div> Design By <a href="#">X-Star</a> </div>
				<div class="footer-right"></div>
			</footer>

            <!--Het footer nha-->
		</div>
	</div>
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/jquery.min.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/popper.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/tooltip.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	{{-- <script src="{{ asset('font_end/Dasboard_Phuc/modules/bootstrap/js/bootstrap.min.js') }}"></script> --}}
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/js/sa-functions.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/chart.min.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/modules/summernote/summernote-lite.js') }}"></script>
	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			datasets: [{
				label: 'Statistics',
				data: [460, 458, 330, 502, 430, 610, 488],
				borderWidth: 2,
				backgroundColor: 'rgb(87,75,144)',
				borderColor: 'rgb(87,75,144)',
				borderWidth: 2.5,
				pointBackgroundColor: '#ffffff',
				pointRadius: 4
			}]
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						stepSize: 150
					}
				}],
				xAxes: [{
					gridLines: {
						display: false
					}
				}]
			},
		}
	});
	</script>
	<script src="{{ asset('font_end/Dasboard_Phuc/js/scripts.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/js/custom.js') }}"></script>
	<script src="{{ asset('font_end/Dasboard_Phuc/js/demo.js') }}"></script>
</body>

</html>
