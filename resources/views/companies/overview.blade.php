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

                    <div class="job-detail" id="reviews"> 
                        
                        <section class="company-overview active" style="margin-left:20px">
                            <div class="title">Overview </div>
                            <div class="info d-flex">
                                <div class="row"><label> Headquarter</label><span> sOld Greenwich, CT</span></div>
                                <div class="row"><label> Size</label><span> 501 to 1000 employees</span></div>
                                <div class="row"><label> Founded</label><span> 2007</span></div>
                                <div class="row"><label> Type</label><span> sOld Greenwich, CT</span></div>
                                <div class="row"><label> Industry</label><span> Investment</span></div>
                                <div class="row"><label> Sector </label><span>Finance</span></div>
                                <div class="row"><label> Revenue</label><span> Unknown</span></div>
                             </div>
                             <div class="link-web"> 
                                 <a href="{{$company->website }}" style="color: blue">Xem link website</a>
                             </div>
                             <div class="title-photo"> {{$company->name }} Photos</div>
                             <div class="photos d-flex flex-wrap"> 
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                                 <div class="item">
                                     <img src="https://media.glassdoor.com/lst/01/40/e6/54/seoul-team-outing-laser-tag.jpg">
                                 </div>
                             </div>
                         </section>
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
$(".menu .nav .tab.overview").addClass("active");
</script>
@endsection