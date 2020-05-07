
<head>
    <title>App Name - @yield('title')</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!--//tags -->
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/interview.css') }}" rel="stylesheet">
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
    <div id="add-review">
        <div class="header"> 
            <div class="content"> 
                <div class="logo">Seekingjob </div>
            </div>
        </div>
        <div class="main-container"> 
            <div class="title">Đánh giá công ty</div>
            <div class="content-wrapper">
                <form action="{{ route('company-add-review', $company->id) }}" method="post"> 
                    <div class="d-flex"> 
                        <div class="logo"> 
                            <img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png" alt="FPT Logo" class="square-logo sm " data-original="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png">
                        </div>
                        <div> 
                            <div class="employer-info"> 
                                <div> Tên công ty</div>
                                <input type="text" name="company_name" value="{{ $company->name }}">
                                <input type="hidden" name="company_id" value="{{ $company->id }}">
                            </div>
                            <div class="rate-company"><div class="title">
                                    Đánh giá  <input type="hidden" name="rate" value="">
                                </div>
                                <div class="rate"> 
                                    <div><span class="star" data-num="1"> <i class="fa fa-star" aria-hidden="true"></i></i></span> </div>
                                    <div><span class="star" data-num="2"> <i class="fa fa-star" aria-hidden="true"></i></span> </div>
                                    <div><span class="star" data-num="3"> <i class="fa fa-star" aria-hidden="true"></i></span> </div>
                                    <div><span class="star" data-num="4"> <i class="fa fa-star" aria-hidden="true"></i></span> </div>
                                    <div><span class="star" data-num="5"> <i class="fa fa-star" aria-hidden="true"></i></span> </div>
                                </div>
                            </div>
                            <div class="job-title">
                                <div class="title"> Tên công việc</div>
                                <input name="job_title" type="text" placeholder="Nhập tên công việc">
                            </div>
                            <div class="job-title">
                                <div class="title"> Đánh giá chung</div>
                                <input name="headline" type="text" placeholder="Đánh giá chung về công ty">
                            </div>
                            <div class="desc-interview-process"> 
                                <div class="title">Bình luận và đánh giá</div>
                            
                            </div>
                            <div class="interview-question"> 
                                <div class="questions"> 
                                    <div class="row"> 
                                        <div class="question"> 
                                            <textarea name="pros" style="width: 600px" placeholder="Những đánh giá tích cực về công ty" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="answer"> 
                                            <textarea name="cons"  style="width: 600px" placeholder="Góp ý những hạn chế của công ty " id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                            <div class="btn-submit"> <button type="submit"> Submit review</button></div>
                        </div>
                    </div>
                    
                
                </form>
            </div>
            
        </div>
    </div>
<script> 
    $(".rate-company .star").on("click", function(){
        var number = $(this).data("num");
        $("input[name='rate']").val(number);
        $(".rate-company .star").removeClass("selected");
        $(".rate-company .star").each(function(i,e){
            if (i < number) {
                $(e).addClass("selected");
            }
           
        })
    })
</script>
</body>