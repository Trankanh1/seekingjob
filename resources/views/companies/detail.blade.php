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
                            <div class="logo"><img src="https://media.glassdoor.com/sqlm/780684/fpt-squarelogo-1447678981694.png"> </div>
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
                        <div class="d-flex col-lg-10 align-item-center">
                            <div class="tab col-lg-2"> <span>Overview </span> </div>
                            <div class="sep-cell"> </div>
                            <div class="tab col-lg-2 review"> <span class="number">34  </span> <span class="title"> Reviews </span></div>
                            <div class="sep-cell"> </div>
                            <div class="tab col-lg-2"> <span  class="number"> 434</span> <span  class="title">Jobs </span></div>
                            <div class="sep-cell"> </div>
                            <div class="tab col-lg-2"> <span  class="number">343 </span> <span  class="title">Lương </span> </div>
                            <div class="sep-cell"> </div>
                            <div class="tab col-lg-2"> <span  class="number">343  </span>  <span  class="title">Phỏng vấn </span></div>
                            <div class="sep-cell"> </div>
                            <div class="tab col-lg-2"> <span  class="number">3434  </span>  <span  class="title">Phúc lợi </span></div>
                        </div>
                        
                    </div>
                    <div class="action col-lg-3">
                       
                        <div class="btn-review url" data-url="{{ route('company-review', $company->id) }}"> <span class="icon">+ </span> Viết đánh giá</div>    
                    </div>
                </div>
            </div>
            <div class="company-detail-content"> 
                <div class="content-left"> 
                    <div class="header">
                        <div class="title">Reviews {{ $company->name }}  <span> </span></div> 
                    </div>

                    <div class="" id="reviews"> 
                            <div class="time"> 
                                <span>August 12, 2020</span>
                                <span>2 likes, 3 dislike </span>
                            </div>
                            <div class="main"> 
                                <div class="logo"> 
                                    <span> <img src="https://media.glassdoor.com/sqls/2748726/ineo-fo-squarelogo-1582264429298.png"> </span>
                                </div>
                                <div class="review"> 
                                    <h3>"Good place to work for"</h3>
                                    <div class="">
                                        <span class="rating"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                        <span> Current employee - Software engineer</span>
                                    </div>
                                    <div> 
                                        Working time
                                    </div>
                                    <div class="pros"> 
                                        <div>Pros </div>
                                        Goog compensatioon, every thing is faire
                                    </div>
                                    <div class="cons"> 
                                        <div>Cons </div>
                                        Too much compensatioon, every thing is faire
                                    </div>
                                </div>
                                <div class="action">
                                    <div class="vote">
                                        <span class="btn-like"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>                                
                                        <span class="btn-dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right">

                </div>
            </div>
        </div>
    </div>
</div>
<script> 

Company.review.list();
Company.review.displayHeader();
$(".menu .nav .tab.review").addClass("active");
</script>
@endsection