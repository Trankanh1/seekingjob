
<head>
    <title>Seekingjob - @yield('title')</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!--//tags -->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/company.css') }}" rel="stylesheet">
    <link href="{{ asset('css/job.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <!--<link href="//fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">-->
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- js -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/svg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/common/ap.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{ asset('js/home/guest.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/circles.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"> </script>
</head>
<body>
    <div id="post-job">
        <div class="header-container">
            <nav class="header d-flex"> 
                <div class="content-left col-lg-8 d-flex align-item-center url" data-url="{{ route("member-home") }}">
                   <span class="brand"> Seeking job </span>đăng tin tuyển dụng
                </div>
                <div class="content-right col-lg-4 d-flex align-item-center justify-flex-end">
                    <svg class="SVGInline-svg Profile__hoverOnly-svg" style="width: 28px;height: 28px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 7a3 3 0 103 3 3 3 0 00-3-3zm0 9a6 6 0 00-5.33 3.25 9 9 0 0010.66 0A6 6 0 0012 16zm0-14A10 10 0 112 12 10 10 0 0112 2z" fill="currentColor" fill-rule="evenodd"></path></svg>

                <span class="email"> {{ session("user")["email"] }} </span>
                </div>
            </nav>
        </div>
        <div class="main-container"> 
            <form id="post-job-fx" method="post" action="{{ route('post-job') }}">
            <div class="content">
                <div class="title">
                    Đăng tin tuyển dụng
                </div>
                <div class="company-name">
                    <label>Tên công ty *
                                    
                                </label><div> <input placeholder="Company name" name="company_name"></div>
                </div>
                <div class="job-location"> 
                    <label>Hết hạn sau (ngày)</label>
                    <div> <input placeholder="Thời gian tuyển dụng" name="expire_time"> </div>
                </div>
                <div class="job-location"> 
                    <label>Mức lương</label>
                    <div> <input placeholder="Mức lương cho vị trí này (để trống nếu theo thoả thuận)" name="salary"> </div>
                </div>
                <div class="job-location"> 
                    <label>Địa điểm</label>
                    <div> <input placeholder="Job location" name="location"> </div>
                </div>
                <div class="job-title"> 
                    <label> Tên công việc </label>
                <div>
                <input placeholder="Job title" name="title">
                </div>
                    </div>
                                <div class="job-description"> 
                    <label>Mô tả công việc </label>
                    
                <div>   
                    
                </div> 
                <textarea id="description" name="description"> </textarea></div>
                <div> 
                    <button class="btn-continue">Đăng tin </button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'description' );
        AP.redirecToUrl();
    </script>
</body>
