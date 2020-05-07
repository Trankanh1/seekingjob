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
 
            <div class="menu-tab"  data-url="{{ route('job-applied') }}"> Applications</div>
        </nav>
    </div>
</div>
<div class="wrapper">
    <div class="containter-max-width d-flex mr-auto flex-direction-row job-content">
        <div style="width:100%" id="saved-job">
            <div class=" d-flex">
                <section id="js-jobs" class="col-lg-5">
                    <div class="job-results">
                        <div class="item">
                            <div class="logo"> <img src="https://media.glassdoor.com/sqls/692775/gotit-squarelogo-1496437992577.png"></div>
                            <div class="main">
                                <div class="company-name">Company name</div>
                                <div class="job-title">Job title </div>
                                <div class="location">Location </div>
                            </div>
                            <div class="relative">
                                <div> <span><svg class="SVGInline-svg job-alert-icon-svg css-1mgba7-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.66 11.864a4.626 4.626 0 000-6.51 4.569 4.569 0 00-6.491 0L12 6.53l-1.169-1.178a4.569 4.569 0 00-6.492 0 4.626 4.626 0 000 6.511L12 19.581l7.66-7.717zM12 5.111l.66-.654a5.569 5.569 0 017.71.192 5.626 5.626 0 010 7.92L12 21l-8.37-8.431a5.626 5.626 0 010-7.92 5.569 5.569 0 017.71-.192l.66.654z" fill="#00f" fill-rule="evenodd"></path></svg></span></div>
                                <div class="info">8d </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="job-detail col-lg-5">
                    <div class="header">
                        <div class="main d-flex">
                            <div class="content-left col-lg-5">
                                <div class="company-name">Company name</div>
                                <div class="job-title">Job title </div>
                                <div class="location"> Location</div>
                            </div>
                            <div class="content-right d-flex col-lg-5"> 
                                <div class="btn-apply">
                                    <span class="icon"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
                                     Apply now</div>
                                <div class="btn-remove"><span class="svg"><svg class="SVGInline-svg heart-svg save-svg margRtXs-svg css-zve8bc-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd"><path id="prefix__icon-save-1" d="M12 5.11l.66-.65a5.56 5.56 0 017.71.19 5.63 5.63 0 010 7.92L12 21l-8.37-8.43a5.63 5.63 0 010-7.92 5.56 5.56 0 017.71-.19zm7.66 6.75a4.6 4.6 0 00-6.49-6.51L12 6.53l-1.17-1.18a4.6 4.6 0 10-6.49 6.51L12 19.58z"></path></g></svg></span> Remove</div>
                                <div class="btn-more"><span class="svg"> <svg class="SVGInline-svg moreIcon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="36" viewBox="0 0 36 36"><defs><path id="prefix__aMoreDropdown" d="M7.8 20.8a2.8 2.8 0 110-5.6 2.8 2.8 0 010 5.6zm10.2 0a2.8 2.8 0 110-5.6 2.8 2.8 0 010 5.6zm10.2 0a2.8 2.8 0 110-5.6 2.8 2.8 0 010 5.6z"></path></defs><g fill="none" fill-rule="evenodd"><mask id="prefix__bMoreDropdown" fill="#fff"><use xlink:href="#prefix__aMoreDropdown"></use></mask><use fill="#1861bf" xlink:href="#prefix__aMoreDropdown"></use><g mask="url(#prefix__bMoreDropdown)"><path d="M0 0h36v36H0z"></path></g></g></svg></span></div>
                            </div>
                        </div>
                        <nav class="nav">
                            <div class="tab js-menu-tab url active" data-section="job-info"><span>Job</span> </div>
                            <div class="tab js-menu-tab url" data-section="company-overview"><span>Công ty </span></div>
                            <div class="tab js-menu-tab url" data-section="rating-overview"><span> Đánh giá</span></div>
                            <div class="tab js-menu-tab url" data-section="salary-overview"><span>Lương </span></div>
                            <div class="tab js-menu-tab url" data-section="review-overview"><span>Bình luận</span></div>
                            <div class="tab js-menu-tab url" data-section="benefit-overview"><span>Phúc lợi</span></div>
                        </nav>
                        <div>
                        </div>
                    </div>
                    <div class="content"> 
                        <section class="job-info">
                            Do you want to join a Silicon Valley based hot startup to develop the world’s first Knowledge as a Service platform used by millions of users around the globe? We are looking for excellent Software Engineers to join our talented team of software engineers, research engineers, product managers, and QA in Hanoi.
                            like sports, games, algorithms, piano, etc.
                        </section>
                        <section class="company-overview">
                           <div class="title">Overview </div>
                           <div class="info d-flex">
                               <div class="row"><label> Headquarter</label><span> sOld Greenwich, CT</span></div>
                               <div class="row"><label> Size</label><span> 501 to 1000 employees</span></div>
                               <div class="row"><label> Founded</label><span> 2007</span></div>
                               <div class="row"><label> Type</label><span> sOld Greenwich, CT</span></div>
                               <div class="row"><label> Industry</label><span> Investment</span></div>
                               <div class="row"><label> Sector</label><span>Finance</span></div>
                               <div class="row"><label> Revenue</label><span> Unknown</span></div>
                            </div>
                            <div class="link-web"> 
                                <a href="">Xem link website</a>
                            </div>
                            <div class="title-photo"> WorldQuant Photos</div>
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
                        <section class="rating-overview">
                            <div>
                                <div class="title">WorldQuant rating </div>
                                <div class="overview">
                                    <div class="star-container">
                                        <span class="num">2.5</span>
                                        <span class="stars">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                    </div>  
                                    <div class="chart">
                                        <div class="circle-recommened col-lg-4" ><div id="circles-1"></div> <span> Giới thiệu cho bạn bè</span> </div> 
                                        <div class="circle col-lg-4"> <div  id="circles-2"></div> Được duyệt</div>
                                    </div>
                                </div>
                                <div class="rating-trend"> 
                                    <div class="review-title">Ratings and Trends    </div>
                                    <div class="wrapper d-flex"> 
                                        <div class="content-left nopad col-lg-6 "> 
                                            <div class="overall"> 
                                                <span>Overall </span>
                                                <span class="right"> 
                                                    <span class="stars">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="num">  5.5 </span>
                                                </span>
                                            </div>
                                            <div> 
                                                <span>Comp & Benefits   </span>
                                                <span class="right"> 
                                                    <span class="stars">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="num">5.5 </span>
                                                </span>
                                            </div>
                                            
                                            <div> 
                                                <span>Culture & Values   </span>
                                                <span class="right"> 
                                                    <span class="stars">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="num">5.5 </span>
                                                </span>
                                            </div>
                                           
                                            <div> 
                                                <span>Career Opportunities
                                                </span>
                                                <span class="right"> 
                                                    <span class="stars">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="num">5.5 </span>
                                                </span>
                                            </div>
                                            <div> 
                                                <span>Work/Life Balance
                                                </span>
                                                <span class="right"> 
                                                    <span class="stars">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="num">5.5 </span>
                                                </span>
                                            </div>
                                            <div> 
                                                <span>Senior Management
                                                </span>
                                                <span class="right"> 
                                                    <span class="stars">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="num">5.5 </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="conent-right col-lg-6">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                        <section class="review-overview"> 
                            <div class="" id="reviews"> 
                                <div class="item">
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
                                <div class="sep-item"> </div>
                                <div class="item">
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
                        </section>
                        <section class="benefit-overview">
                            <div>
                                <div class="title">WorldQuant rating </div>
                                <div class="overview">
                                    <div class="star-container">
                                        <span class="num">2.5</span>
                                        <span class="stars">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </span>
                                    </div>                                 
                                </div>
                                <div class="rating-trend"> 
                                </div>
                            </div>
                            <div>
                                <div class="h4 text-title">Employee Benefit Reviews </div>
                                <div id="review-benefits">
                                    <div class="item">
                                        <div>Jan 30, 2019 </div>
                                        <div>
                                            <span class="stars">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                            <span class="job-title"> Former Employee in Old Greenwich, Connecticut </span>
                                        </div> 
                                        <div class="review">Excellent medical benefits. Minimal 401K match.</div>
                                    </div>
                                    <div class="item">
                                        <div>Jan 30, 2019 </div>
                                        <div>
                                            <span class="stars">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </span>
                                            <span class="job-title"> Former Employee in Old Greenwich, Connecticut </span>
                                        </div> 
                                        <div class="review">Excellent medical benefits. Minimal 401K match.</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="salary-overview">
                            <div class="title">Other Salaries at WorldQuant</div>
                            <div class="salary-header d-flex"> 
                                <span class="job-title-col col-lg-6"> Tên job</span>
                                <span class="salary-avg-col col-lg-3"> Lương trung bình</span>
                                <div class="range-bar d-flex col-lg-3">
                                    <span class="low"> Thấp</span>
                                    <span class="hight">Cao</span>
                                </div>
                              
                            </div>
                            <div class="salaries">
                                <div class="item d-flex"> 
                                    <div class="job-name col-lg-6">
                                        <div class="job-title">Portfolio Manager</div>
                                       <div class="total-review"> 19 Salaries</div>
                                    </div>
                                    <div class="avg-num col-lg-3"> 
                                        $176,393
                                    </div>
                                    <div class="low-hight col-lg-3 ">
                                        <div class="bar"></div>
                                        <div class="num">
                                            <div> $154K</div>
                                            <div>$215K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    $(".menu-tab[data-url='saved']").addClass("active");
    $(".js-menu-tab").on("click", function(){
        $(".js-menu-tab").removeClass('active');
        $('.content section').removeClass('active');

        var section = $(this).data("section");
        $('.'+section).addClass('active');
        $(this).addClass('active');
    })

    var cycle_recommened = Circles.create({
                            id:                  'circles-1',
                            radius:              40,
                            value:               43,
                            maxValue:            100,
                            width:               10,
                            text:                function(value){return value + '%';},
                            colors:              ['#ccc', '#0caa41'],
                            duration:            300,
                            wrpClass:            'circles-wrp',
                            textClass:           'circles-text',
                            valueStrokeClass:    'circles-valueStroke',
                            maxValueStrokeClass: 'circles-maxValueStroke',
                            styleWrapper:        true,
                            styleText:           true
                            });
        

        var cycle_ceo_approved = Circles.create({
                            id:                  'circles-2',
                            radius:              40,
                            value:               43,
                            maxValue:            100,
                            width:               10,
                            text:                function(value){return value + '%';},
                            colors:              ['#ccc', '#0caa41'],
                            duration:            300,
                            wrpClass:            'circles-wrp',
                            textClass:           'circles-text',
                            valueStrokeClass:    'circles-valueStroke',
                            maxValueStrokeClass: 'circles-maxValueStroke',
                            styleWrapper:        true,
                            styleText:           true
                            });


</script>
<script>
    Job.listSaved();
</script>

@endsection