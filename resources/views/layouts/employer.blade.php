<html>
    <head>
		<title>App Name - @yield('title')</title>
	
		<link href="{{ assetUrl('css/global.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ assetUrl('css/layout.css') }}" rel="stylesheet" type="text/css" media="all" />
			<!--//tags -->
		<link href="{{ assetUrl('css/employer.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/dashboard.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/candicate.css') }}" rel="stylesheet">
		<link href="{{ assetUrl('css/menu.css') }}" rel="stylesheet">
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
		<script type="text/javascript" src="{{ assetUrl('js/job/search.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/employer/employer.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/employer/job/job.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/employer/job/form.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/employer/candicate/candicate.js') }}"></script>
		<script type="text/javascript" src="{{ assetUrl('js/employer/review/review.js') }}"></script>
		<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"> </script>
		<?php echo \App\Models\ClientModel::init()?>
		<?php echo \App\Models\ClientModel::getData()?>
		</head>
    <body>
		@section('header')
		@include('layouts.employer_header')
	@show()
		<div class="container d-flex"> 
		
			@section('sidebar')
			@include('layouts.sidebar')
			@show
		
			@section('content')

				@show()
			@section('footer')
	
			@show
		</div>
		<div id="apdialog"> 
		
		</div>
	<script> 
		AP.redirecToUrl();
	</script>
	</body>

</html>