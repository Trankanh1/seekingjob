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
                            <div class="logo"><img src="{{$company->logo}}"> </div>
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
                       
                        <div class="btn-review url" data-url="{{ route('interviw-add', $company->id) }}"> <span class="icon">+ </span> Viết review phỏng vấn</div> 
 
                    </div>
                </div>
            </div>
            <div class="company-detail-content"> 
                <div class="content-left"> 
                    <div class="header">
                        <div class="title"> {{ $company->name }} Interviews</div> 
                    </div>

                    <div class="" id="reviews"> 
                        <div class="item">
                            <div class="time"> 
                                <span>August 12, 2020</span>
                            </div>
                            <div class="main"> 
                                <div class="logo"> 
                                    <span> <img src="https://media.glassdoor.com/sqls/2748726/ineo-fo-squarelogo-1582264429298.png"> </span>
                                </div>
                                <div class="interview-container"> 
                                    <div class="job-title"> Operations Associate Interview
                                    </div>
                                    <div class="employee_name">Anonymous Interview Candidate in Burlingame, CA </div>
                                    <div class="rating">
                                        <div class="offer col-lg-4">
                                            <span class="no-offer"> </span> 
                                            <span>Không được offer</span>
                                        </div>
                                        <div class="exper col-lg-4">
                                            <span class="normal"> </span> 
                                            <span> Trả nghiệm bìnhh thường</span>
                                        </div>
                                        <div class="difficulty col-lg-4">
                                            <span class="avg"> </span> 
                                            <span>Câu hỏi trung bình</span>
                                        </div>
                                    </div>
                                    <div class="interview-description"> 
                                        <div class="title"> Quá trình phỏng vấn</div>
                                    I applied online. The process took 6 weeks. I interviewed at Got It (Burlingame, CA) in August 2019.

                                    Interview
                                    
                                    The interview process was a 5-step process.
                                    
                                    1st: The Hiring manager did the phone screening
                                    2nd. Call with someone on the team / the only other Ops Associate in the Bay Area office
                                    3rd. Take-home exercise (2 part)
                                    4th. On-site Interview with 4 different people
                                    5th. Another on-site interview with the CEO and VP of Ops
                                    
                                    Throughout the entire interview process, I didn't talk to any recruiter, and again I don't think they have one.
                                    
                                    The hiring manager was very responsive all the way until the last round when he suddenly became very bad at responding or following-up. Knowing that I've been through a long and extensive interview process like that, I'd expect feedback on their decision, but nothing was presented. It felt like a trap to gather more ideas and information; they asked me about ideas improvement, my analysis on a situation they're currently having, metrics creation for their current operational processes, and so on.
                                    
                                    The largest (if not the 2nd largest) office is in Vietnam and it seems that they're just expanding the company overseas because it's cost-efficient. The product is great and the people I've met are very smart, but I think their focus is not on the right-spot for expanding their employee base. Just my opinion.
                                    
                                    Interview Questions
                                    
                                    Scenario-based question. What would you do in a situation if 'X' happens  
                                    Answer Question
                                    </div>
                                    <div class="interview-questions">
                                        <div class="title"> Câu hỏi phỏng vấn</div>
                                        <div class="question-row">
                                            What was the biggest mistake you made at work and how did you fix it ?  
                                        </div>
                                        <div class="question-row">
                                            What was the biggest mistake you made at work and how did you fix it ?  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sep-item"> </div>
                        <div class="item">
                            <div class="time"> 
                                <span>August 12, 2020</span>
                            </div>
                            <div class="main"> 
                                <div class="logo"> 
                                    <span> <img src="https://media.glassdoor.com/sqls/2748726/ineo-fo-squarelogo-1582264429298.png"> </span>
                                </div>
                                <div class="interview-container"> 
                                    <div class="job-title"> Operations Associate Interview
                                    </div>
                                    <div class="employee_name">Anonymous Interview Candidate in Burlingame, CA </div>
                                    <div class="rating">
                                        <div class="offer col-lg-4">
                                            <span class="no-offer"> </span> 
                                            <span>Không được offer</span>
                                        </div>
                                        <div class="exper col-lg-4">
                                            <span class="normal"> </span> 
                                            <span> Trả nghiệm bìnhh thường</span>
                                        </div>
                                        <div class="difficulty col-lg-4">
                                            <span class="avg"> </span> 
                                            <span>Câu hỏi trung bình</span>
                                        </div>
                                    </div>
                                    <div class="interview-description"> 
                                        <div class="title"> Quá trình phỏng vấn</div>
                                    I applied online. The process took 6 weeks. I interviewed at Got It (Burlingame, CA) in August 2019.

                                    Interview
                                    
                                    The interview process was a 5-step process.
                                    
                                    1st: The Hiring manager did the phone screening
                                    2nd. Call with someone on the team / the only other Ops Associate in the Bay Area office
                                    3rd. Take-home exercise (2 part)
                                    4th. On-site Interview with 4 different people
                                    5th. Another on-site interview with the CEO and VP of Ops
                                    
                                    Throughout the entire interview process, I didn't talk to any recruiter, and again I don't think they have one.
                                    
                                    The hiring manager was very responsive all the way until the last round when he suddenly became very bad at responding or following-up. Knowing that I've been through a long and extensive interview process like that, I'd expect feedback on their decision, but nothing was presented. It felt like a trap to gather more ideas and information; they asked me about ideas improvement, my analysis on a situation they're currently having, metrics creation for their current operational processes, and so on.
                                    
                                    The largest (if not the 2nd largest) office is in Vietnam and it seems that they're just expanding the company overseas because it's cost-efficient. The product is great and the people I've met are very smart, but I think their focus is not on the right-spot for expanding their employee base. Just my opinion.
                                    
                                    Interview Questions
                                    
                                    Scenario-based question. What would you do in a situation if 'X' happens  
                                    Answer Question
                                    </div>
                                    <div class="interview-questions">
                                        <div class="title"> Câu hỏi phỏng vấn</div>
                                        <div class="question-row">
                                            What was the biggest mistake you made at work and how did you fix it ?  
                                        </div>
                                        <div class="question-row">
                                            What was the biggest mistake you made at work and how did you fix it ?  
                                        </div>
                                    </div>
                                </div>
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

    

Company.interview.list();
Company.review.displayHeader();
$(".menu .nav .tab.interview").addClass("active");
</script>
@endsection