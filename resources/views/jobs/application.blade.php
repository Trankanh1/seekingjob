@extends('layouts.app')

@section('title', 'Page Title')
@section('header')
@section('sidebar')
    @parent
@endsection

@section('content')
<div class="menu-wrapper"> 
    <div class="containter-max-width  mr-auto"> 
        <nav class="d-flex align-item-center"> 
            <a href="{{ route('job-home') }}"> 
                <div class="menu-tab">
                Gần đây
                </div>
            </a> 
       
            <a href="{{ route('job-saved') }}">
                <div class="menu-tab" data-url="saved"> 
                Đã lưu
            </div>
            </a> 
      
            <div class="menu-tab url" data-url="applied"> Applications</div>
        </nav>
    </div>
</div>
<div class="wrapper">
    <div class="containter-max-width  mr-auto"> 
        <div id="recent-search"> 
            <div class="title">Đơn ứng tuyển đã nộp </div>
            <div id="job-vieweds" class="d-flex flex-direction-row flex-wrap">     
                <div class="item url col-lg-3" onclick="Job.homePage.continueViewDetail(71)"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqll/985594/tek-experts-squarelogo-1443429808940.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> FPT Software</div>
                            <div class="job-title">Solution Architect (DevOps)</div>
                            <div class="location"> 191 Bà Triệu, Hai Ba Trung, Ha Noi</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>
<script>
      $(".menu-tab[data-url='applied']").addClass("active");
      $(".menu .tab[data-url='/jobs/hom']").addClass("active");
      Member.job.listApplied();
</script>
@endsection