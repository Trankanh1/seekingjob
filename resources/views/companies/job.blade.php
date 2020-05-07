@extends('layouts.app')

@section('title', 'Page Title')
@section('header')
@section('sidebar')
    @parent
@endsection

@section('content')
<div class="page-wrapper">
    <div id="page-content"> 
        <div id="company-detail"> 
            <div class="wrapper">
                <div class="common-info"> 
                    <div class="relative">
                        <div class="background"> 
                            <img src="https://www.glassdoor.com/app/static/img/banners/default-ei-banner.jpg?v=b803424i5" class="banner blur" id="BlurredHero" alt="">
                        </div>
                        <div> 
                            <div class="logo"><img src="{{ $company->logo }}"> </div>
                            <div class="main">
                                <div class="name">{{ $company->name }}
                                    <span class="icon"><i class="fa fa-star" aria-hidden="true"></i></span>
                                </div>
                                <div class="location"> {{ $company->head_quarter }}</div>
                            </div>
                        </div>
                        
                    </div>
                <div class="menu d-flex">
                    <div class="nav col-lg-9"> 
                        
                        
                    </div>
                    <div class="action col-lg-3">
                       
                        <div class="btn-review url" data-url="{{ route('company-review', $company->id) }}"> <span class="icon">+ </span> Viết đánh giá</div>    
                    </div>
                </div>
            </div>
            <div class="company-detail-content"> 
                <div class="content-left"> 
                    <div class="header">
                        <div class="title"> {{$company->name}} jobs</div> 
                    </div>

                    <div class="" id="company-jobs"> 
                        <div class="item">
                            <div class="item-left"> 
                                <div class="logo"> <img src="{{ $company->logo }}">  </div>
                                <div class="main">
                                    <div class="title"> Software Engineering Intern</div>
                                    <div class="company_name"> Got It </div> - <div class="location">Hà nội </div>
                                 </div>
                            </div>
                           
                            <div class="item-right">
                                <span class="time">67 days ago </span>    
                            </div>
                        </div>
                        <div class="sep-item"> </div>
                    
                    </div>
                </div>
                <div class="content-right">

                </div>
            </div>
        </div>
    </div>
</div>
<script> 

Company.job.list();
Company.review.displayHeader();
$(".menu .nav .tab.job").addClass("active");
</script>
@endsection