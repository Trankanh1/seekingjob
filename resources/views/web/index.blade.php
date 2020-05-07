<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!--//tags -->
	<link href="{{ assetUrl('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ assetUrl('css/golbal.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ assetUrl('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ assetUrl('css/home.css') }}" rel="stylesheet">
	<link href="{{ assetUrl('css/font-awesome.css') }}" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="box-modal">
	<!-- header -->
	<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-signal" aria-hidden="true"></span> Seeking job <label> Agency</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html" class="effect-3">Trang chủ</a></li>
								<!-- <li class="dropdown">
									<a href="services.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Services <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="services.html">Services 2</a></li>
										<li class="divider"></li>
										<li><a href="services.html">Services 3</a></li>
										<li class="divider"></li>
										<li><a href="codes.html">Codes</a></li>
										<li class="divider"></li>
										<li><a href="icons.html">Icons</a></li>
										<li class="divider"></li>
										<li><a href="services.html">One more separated link</a></li>
									</ul>
								</li> -->
								<li>
									<a onclick="Guest.signIn()" >Đăng nhập</a>
							
								</li>
								<li><a onclick="Guest.signUp()" >Đăng ký</a></li>

								<li><a href="professional.html" class="effect-3">Employer</a></li>
								<li><a href="contact.html" class="effect-3">Liên hệ</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Cải thiện không gian <span>Hiệu quả công việc.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Xem thêm »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Truyền cảm hứng lãnh đaọ<span>cải tiến.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Xem thêm »</a>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Improving workplace <span>Productivity.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Xem thêm »</a>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Inspiring leadership <span>innovation.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg scroll" href="#welcome" role="button">Xem thêm »</a>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->


	<!--//search_form -->
	<div class="banner-bottom">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Về chúng tôi</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-6 banner_bottom_left">
					<h4>Kế hoạch tuyển dụng <span>Chuyên nghiệp</span></h4>
					Chúng tôi cung cấp thông tin tuyển dụng nhanh chóng và chính xác, các thông tin cần thiết để ứng viên có thể tìm được công việc phù hợp nhất và nhà tuyển tụng tiếp cận ứng viên tiềm năng dễ dàng nhất.
					<ul class="some_agile_facts">
						<li><span class="fa fa-briefcase" aria-hidden="true"></span><label>80</label> Chương trình hợp tác</li>
						<li><span class="fa fa-graduation-cap" aria-hidden="true"></span><label>49</label> Chương trình tuyển dụng</li>
						<li><span class="fa fa-user" aria-hidden="true"></span><label>88</label> Kế hoạch tuyển dụng</li>
						<li><span class="fa fa-line-chart" aria-hidden="true"></span><label>436</label> Công ty tuyển dụng nhân sự</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="images/ab.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //banner-bottom -->
	<div class="team_work_agile">
		<h4>
			Cho dù chúng tôi đóng một vai trò lớn hay nhỏ, bằng cách làm việc cùng nhau, chúng tôi sẽ luôn đạt được mục tiêu của mình.</h4>
	</div>
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Lựa chọn giai đoạn</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-3 services-left">
					<div class="services-left-top">

						<h5>Mô tả các thông tin cần thiết và chi tiết cho công việc.</h5>

					</div>
					<div class="services-left-top services-left-top1">

						<h5>Kế hoạch tuyển dụng</h5>

					</div>
				</div>
				<div class="col-md-6 services-middle">
					<div class="services-middle-img">
						<img src="images/process.jpg" alt="" />
					</div>
					<div class="services-middle-grids">
						<div class="col-md-6 services-middle-left">
							<div class="services-left-top">

								<h5>Nguồn lục & quảng cáo</h5>

							</div>
						</div>
						<div class="col-md-6 services-middle-left">
							<div class="services-left-top">

								<h5>Tìm kiếm và liên hệ ứng viên</h5>

							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 services-left">
					<div class="services-left-top">

						<h5>Cơ hội việc làm cho sinh viên parttime</h5>

					</div>
					<div class="services-left-top services-left-top1">

						<h5>Onboarding thành công</h5>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- /mid-services -->
	<div class="mid_services">

		<div class="col-md-6 according_inner_grids">
			<h3 class="agile_heading two">Nhận thông tin tuyển dụng</h3>
			<div class="according_info">
				<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Nhà tuyển dụng sẽ xem profile cửa ứng viên và tìm ra những điểm phù hợp sau đó sẽ liên hệ với bạn.
							</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
								Thông tin được mô tả chính xác và chi tiết giúp bạn hình dung được vị trí phù hợp để apply.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Thu hút nhà tuyển dụng
							</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								Thông qua các thông tin trong profile, nhà tuyển dũng sẽ nhìn thấy điểm tương đồng giữa bạn và công ty. Vì vậy hãy hoàn thiện profile và skill set tốt nhất.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry qui
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								Thông qua các thông tin trong profile, nhà tuyển dũng sẽ nhìn thấy điểm tương đồng giữa bạn và công ty. Vì vậy hãy hoàn thiện profile và skill set tốt nhất.

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Nhanh chóng liên hệ
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								Thông qua các thông tin trong profile, nhà tuyển dũng sẽ nhìn thấy điểm tương đồng giữa bạn và công ty. Vì vậy hãy hoàn thiện profile và skill set tốt nhất.

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-6 mid_services_img">
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //testimonials -->
	<div class="testimonials_section">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Đội ngũ nhân viên</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div id="Carousel" class="carousel slide two">

					<ol class="carousel-indicators second">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>

					<!-- Carousel items -->
					<div class="carousel-inner">

						<div class="item active">
							<div class="testimonials_grid_wthree">
								<img src="images/test1.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Thông tin tuyển dụng trên trang web rất phù hợp với những người mới ra trường và ít kinh nghiệp như tôi. Thông qua website tuyển dụng tôi đã tìm được việc làm tốt, mức lương khá.</h4>
								<h5>Trần Mai Anh</h5>

							</div>

						</div>
						<!--.item-->
						<div class="item">
							<div class="testimonials_grid_wthree">
								<img src="images/test2.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Thông tin tuyển dụng trên trang web rất phù hợp với những người mới ra trường và ít kinh nghiệp như tôi.</h4>
								<h5>Quân Nguyễn</h5>

							</div>
						</div>
						<!--.item-->

						<div class="item">
							<div class="testimonials_grid_wthree">
								<img src="images/test3.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Thông tin tuyển dụng trên trang web rất phù hợp với những người mới ra trường và ít kinh nghiệp như tôi.</h4>
								<h5>Trần Mai Anh</h5>

							</div>
						</div>
						<!--.item-->

					</div>
					<!--.carousel-inner-->

				</div>
				<!--.Carousel-->

			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>Về chúng tôi</h3>
				<p>Chúng tôi cung cấp thông tin tuyển dụng nhanh chóng và chính xác, các thông tin cần thiết để ứng viên có thể tìm được công việc phù hợp nhất và nhà tuyển tụng tiếp cận ứng viên tiềm năng dễ dàng nhất.
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Latest News</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html" >Trang chủ </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html" >Tất cả công việc</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html" >Về chúng tôi</a> </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html" >Liên hệ</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html" >FAQ </a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>12, Chùa Bộc <span>Hà Nội.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">nhom24@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="footer_grids">
				<div class="col-md-4 footer_grid_left">
					<h3>Đăng ký nhận email khi có việc làm phù hợp</h3>
				</div>
				<div class="col-md-8 footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div id="apdialog"> 
		
	</div>

	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- js -->
	<script src="js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="js/svg.js"></script>
	<script src="js/common/ap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/home/guest.js"></script>
</body>

</html>
