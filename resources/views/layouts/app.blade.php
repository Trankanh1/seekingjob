<html>
    <head>
		<title>App Name - @yield('title')</title>
	
		<link href="{{ assetUrl('css/global.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ assetUrl('css/layout.css') }}" rel="stylesheet" type="text/css" media="all" />
        	<!--//tags -->
		<link href="{{ assetUrl('css/menu.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/interview.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/company.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/job.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/search.css') }}" rel="stylesheet">
        <link href="{{ assetUrl('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ assetUrl('css/home.css') }}" rel="stylesheet">
        <link href="{{ assetUrl('css/font-awesome.css') }}" rel="stylesheet">
        <!-- //for bootstrap working -->
        <!--<link href="//fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">-->
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
            rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<!-- js -->
		<script type="text/javascript" src="{{ assetUrl('js/jquery-3.5.0.min.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/svg.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/common/ap.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/helper/helper.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/home/guest.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/circles.min.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/job/job.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/job/home.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/job/search.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/company/company.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/company/job.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/company/interview.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/company/review.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/review/review.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/member/member.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/member/job.js') }}"></script>
		<?php echo \App\Models\ClientModel::init()?>
		<?php echo \App\Models\ClientModel::getData()?>
		</head>
    <body>
		@section('header')
			@include('layouts.header')
		@show
		<nav class="nav-menu">
			<div id="pmenu" class="mr-auto containter-max-width ">
				<div>
					<h2 class="title">Tìm kiếm và phát phá cơ hội mới ngay hôm nay</h2>
					<div class="menu d-flex"> 
						<div class="col-lg-8 d-flex"> 
							<div class="tab url" data-url="/jobs/home">
								<span> <svg class="SVGInline-svg d-flex-svg IconStyles__colorDefault-svg -svg" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-jobs-1" d="M16 4H8a1 1 0 00-1 1v1h10V5a1 1 0 00-1-1zm-1.5 10a.5.5 0 01.09 1H9.5a.5.5 0 010-1zM20 7H4a1 1 0 00-1 1v6a1 1 0 001 1h3.28l.5 2h8.44l.5-2H20a1 1 0 001-1V8a1 1 0 00-1-1zM6.5 16H4v3a1 1 0 001 1h14a1 1 0 001-1v-3h-2.5l-.5 2H7zM16 3a2 2 0 012 2v1h2a2 2 0 012 2v6a2 2 0 01-1 1.73V19a2 2 0 01-2 2H5a2 2 0 01-2-2v-3.27A2 2 0 012 14V8a2 2 0 012-2h2V5a2 2 0 012-2z"></path></g></svg></span>
								<span> Jobs</span>
								
							</div>
							<div class="tab mopt relative url" data-url="/companies/index">
								<span> <svg class="SVGInline-svg d-flex-svg IconStyles__colorDefault-svg -svg" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-companies-1" d="M13.5 6.5a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1A.5.5 0 0112 8V7a.5.5 0 01.5-.5zm4 0a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1A.5.5 0 0116 8V7a.5.5 0 01.5-.5zm-4 4a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5zm4 0a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5zm-1 5h-3a.49.49 0 00-.5.5v3.5h4V16a.5.5 0 00-.5-.5zm4-11h-11A.5.5 0 009 5v14.5h3v-4a1 1 0 011-1h4a1 1 0 011 1v4h3V5a.5.5 0 00-.5-.5zm.5-1a1 1 0 011 1v16H8v-16a1 1 0 011-1zm-15 5v1H3.5a.5.5 0 00-.5.5v9.5h3v1H2v-11a.91.91 0 01.78-1z"></path></g></svg></span>
								Công ty
								<div class="opts" style="top: 34px;">
									<div class="opt" data-url="{{ route('company-index') }}">Khám phá công ty</div>
									<div class="opt">Viết review</div>
								</div>
							</div>
							
							<div class="tab mopt relative url">
								<span> <svg class="SVGInline-svg d-flex-svg IconStyles__colorDefault-svg -svg" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-interview-1" d="M17 10a1 1 0 11-1 1 1 1 0 011-1m-4.5 0a1 1 0 11-1 1 1 1 0 011-1M8 10a1 1 0 11-1 1 1 1 0 011-1m4.5-6C7.78 4 4 7 4 10.66s3.78 6.65 8.5 6.65a.47.47 0 01.39.2l.38.4a8.08 8.08 0 003 1.84A7.26 7.26 0 0116 17a.53.53 0 01.31-.4c2.88-1.14 4.69-3.43 4.69-5.94C21 7 17.22 4 12.5 4m0-1c5.23 0 9.5 3.4 9.5 7.66 0 2.87-2 5.43-5 6.75a6.7 6.7 0 00.47 2.9.5.5 0 01-.57.68 9.12 9.12 0 01-3-1.31 8.91 8.91 0 01-1.3-1.06 4.16 4.16 0 01-.3-.31h-.36a.44.44 0 01-.16.14 7.19 7.19 0 01-3.27 1 4.87 4.87 0 01-.92.78A5.48 5.48 0 015.7 21a.5.5 0 01-.58-.66 3.32 3.32 0 00.1-1.43C3.27 18.15 2 16.65 2 14.94a3.76 3.76 0 011.2-2.69 6.54 6.54 0 01-.2-1.59C3 6.4 7.27 3 12.5 3M3 14.94c0 1.31 1.09 2.53 2.81 3.12a.49.49 0 01.33.35 4.65 4.65 0 01.1 1.36 5.08 5.08 0 00.76-.42 3.91 3.91 0 00.81-.71.47.47 0 01.41-.23 7.34 7.34 0 001.58-.23h-.11a8.74 8.74 0 01-6.22-4.67A2.56 2.56 0 003 14.94"></path></g></svg></span>
								Phỏng vấn
								<div class="opts mopt" style="top: 34px;">
									<div class="opt" data-url="{{ route('interview-index') }}">Khám phá phỏng vấn</div>
									<div class="opt">Viết review phỏng vấn</div>
								</div>
							</div>
						</div>
					
						
						<div class="d-flex justify-flex-end align-items-center col-lg-4">
							<div class="for-employer ponter" data-url="/employer/dashboard">Employeers</div>
							<div class="d-flex post-job ponter"><svg class="SVGInline-svg d-flex-svg icon__IconStyles__colorDefault-svg mr-xsm-svg" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 4H8a1 1 0 00-1 1v1h10V5a1 1 0 00-1-1zm-1.5 10a.5.5 0 01.09 1H9.5a.5.5 0 010-1zM20 7H4a1 1 0 00-1 1v6a1 1 0 001 1h3.28l.5 2h8.44l.5-2H20a1 1 0 001-1V8a1 1 0 00-1-1zM6.5 16H4v3a1 1 0 001 1h14a1 1 0 001-1v-3h-2.5l-.5 2H7zM16 3a2 2 0 012 2v1h2a2 2 0 012 2v6a2 2 0 01-1 1.73V19a2 2 0 01-2 2H5a2 2 0 01-2-2v-3.27A2 2 0 012 14V8a2 2 0 012-2h2V5a2 2 0 012-2z" fill="currentColor" fill-rule="evenodd"></path></svg>
								<a href="{{ route('post-job-view') }}"> <span class="title">Tạo job </span></a></div>
						</div>
					</div>
				</div>
				
				<div> </div>
			</div>
		</nav>
		
			@section('content')
			<div class="containter-max-width d-flex mr-auto flex-direction-row job-content">
				<div class="col-lg-4 account">
					<div class="main">
						<div class="img"><span class="text">T</span></div>
						<div class="name">Tran Thi Kim Anh</div>
						<div>Software engineer</div>
						<div>HaNoi</div>
						<div></div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="job-recommended">
						<div class="title"> 
							<h1>Việc làm được gợi ý</h1>
							<div class="tt">Những việc làm gợi ý được dựa trên thông tin cá nhân và hoạt động trên seekingjob. </div>
						</div>
						<div id="jobs"> 
							<div class="item">
								<div class="common-info d-flex flex-direction-row">
									<div class="logo"> <img src="https://media.glassdoor.com/sqlm/217351/fortna-squarelogo-1484076543270.png"> </div>
									<div class="main">
										<div class="company-name"> company name</div>
										<div class="job-title"> job title</div>
										<div class="location">location </div>
									</div>
									<div class="extra-action relative">
										<div class=""> Save	</div>
										<div class="absolute time">Since </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="common-info d-flex flex-direction-row">
									<div class="logo"> <img src="https://media.glassdoor.com/sqlm/217351/fortna-squarelogo-1484076543270.png"> </div>
									<div class="main">
										<div class="company-name"> company name</div>
										<div class="job-title"> job title</div>
										<div class="location">location </div>
									</div>
									<div class="extra-action relative">
										<div class=""> <span><svg class="SVGInline-svg job-alert-icon-svg css-1mgba7-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.66 11.864a4.626 4.626 0 000-6.51 4.569 4.569 0 00-6.491 0L12 6.53l-1.169-1.178a4.569 4.569 0 00-6.492 0 4.626 4.626 0 000 6.511L12 19.581l7.66-7.717zM12 5.111l.66-.654a5.569 5.569 0 017.71.192 5.626 5.626 0 010 7.92L12 21l-8.37-8.431a5.626 5.626 0 010-7.92 5.569 5.569 0 017.71-.192l.66.654z" fill="#00f" fill-rule="evenodd"></path></svg></span>	</div>
										<div class="absolute time">Since </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="common-info d-flex flex-direction-row">
									<div class="logo"> <img src="https://media.glassdoor.com/sqlm/217351/fortna-squarelogo-1484076543270.png"> </div>
									<div class="main">
										<div class="company-name"> company name</div>
										<div class="job-title"> job title</div>
										<div class="location">location </div>
									</div>
									<div class="extra-action relative">
										<div class=""> <span><svg class="SVGInline-svg job-alert-icon-svg css-1mgba7-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.66 11.864a4.626 4.626 0 000-6.51 4.569 4.569 0 00-6.491 0L12 6.53l-1.169-1.178a4.569 4.569 0 00-6.492 0 4.626 4.626 0 000 6.511L12 19.581l7.66-7.717zM12 5.111l.66-.654a5.569 5.569 0 017.71.192 5.626 5.626 0 010 7.92L12 21l-8.37-8.431a5.626 5.626 0 010-7.92 5.569 5.569 0 017.71-.192l.66.654z" fill="#00f" fill-rule="evenodd"></path></svg></span>	</div>
										<div class="absolute time">Since </div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="common-info d-flex flex-direction-row">
									<div class="logo"> <img src="https://media.glassdoor.com/sqlm/217351/fortna-squarelogo-1484076543270.png"> </div>
									<div class="main">
										<div class="company-name"> company name</div>
										<div class="job-title"> job title</div>
										<div class="location">location </div>
									</div>
									<div class="extra-action relative">
										<div class=""> Save	</div>
										<div class="absolute time">Since </div>
									</div>
								</div>
							</div>	
						</div>
						<div class="more"> 
							<a href="">
								<span class="text">Xem tất cả</span>
								<span class="icon">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="recent-research"> 
						<div class="title">Tìm kiếm gần đây</div>
						<div id="results">
							<div class="item">
								<div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
								<div class="main">
									<div>Công việc gần hà nội</div>
									<div>122 news</div>
								</div>
							</div>
							<div class="item">
								<div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
								<div class="main">
									<div>Công việc gần hà nội</div>
									<div>122 news</div>
								</div>
							</div>
							<div class="item">
								<div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
								<div class="main">
									<div>Công việc gần hà nội</div>
									<div>122 news</div>
								</div>
							</div>
							
						</div>
						<div class="more"> 
							<a href="">
								<span class="text">Xem tất cả</span>
								<span class="icon">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="sep-20"></div>
					<div class="sep-20"></div>
					<div class="sep-20"></div>
				</div>
			</div>
				@show()
		@section('footer')
			@include('layouts.footer')
		@show
		<div id="apdialog"> 
		
		</div>
	<script> 
	AP.redirecToUrl();
	Job.getParams();
	$(".noti .icon").on("click", function(){
		$(".notifications").toggleClass("active");
	})

	$(".metatype .opts .opt").on("click", function(){
		var type = $(this).data("search");
		var text = $(this).text();
		$(".search-fm").attr("action", "/"+type+"/search-result");
		$("input[name='metatype']").val(text);
	})
	// Review.list();
	// <div class="tab mopt relative" >
	// 						<span> <svg class="SVGInline-svg d-flex-svg IconStyles__colorDefault-svg -svg" style="width: 24px;height: 24px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-salaries-1" d="M12 9a2 2 0 102 2 2 2 0 00-2-2zm0-1a3 3 0 11-3 3 3 3 0 013-3zm8 10a1 1 0 01-1 1H5a1 1 0 01-1-1zm1-13H3.05a1 1 0 00-1 1v10a1 1 0 001 1.05H21A1 1 0 0022 16V6.05A1 1 0 0021 5zM3 6.5a.5.5 0 01.5-.5h1.56A2.06 2.06 0 013 8.06zm.5 9.5a.5.5 0 01-.5-.5v-1.56A2.06 2.06 0 015.06 16zm17.5-.5a.5.5 0 01-.5.5h-1.56A2.06 2.06 0 0121 13.94zm0-2.56A3.06 3.06 0 0017.94 16H6.06A3.06 3.06 0 003 12.94V9.06A3.06 3.06 0 006.06 6h11.88A3.06 3.06 0 0021 9.06zm0-4.88h-.1a1.74 1.74 0 01-2-2.07h1.6a.5.5 0 01.5.5z"></path></g></svg></span>
	// 						Lương
	// 						<div class="opts" style="top: 14px;"> 
	// 							<div class="opt" data-url="{{ route('salary-index') }}">Khám phá lương</div>
	// 							<div class="opt">Viết review lương</div>
	// 						</div>
	// 					</div>
	</script>

	</body>

</html>