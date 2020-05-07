@extends('layouts.employer')

@section('title', 'Page Title')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection

@section('content')
<div class="content-wrapper"> 
    <div class="title">Ứng viên </div>
    <div id="candicates" class="d-flex"> 
        <div class="js-candicades col-lg-4">
            <div class="item d-flex">
                <div class="item-left col-lg-4 relative"> 
                    <span class="status"> </span>
                    <div class="content">
                        <div class="job-title">Datascientist  </div>
                    <div class="location">Chicago it</div>
                    </div>
                </div>
                <div class="item-right col-lg-8 text-right relative"> 
                    <div class="status-title"> Need review</div>
                    <div class="time"> Mar 2019</div>
                </div>
            </div>
            <div class="item d-flex active">
                <div class="item-left col-lg-4 relative"> 
                    <span class="status"> </span>
                    <div class="content">
                        <div class="job-title">Datascientist  </div>
                    <div class="location">Chicago it</div>
                    </div>
                </div>
                <div class="item-right col-lg-8 text-right relative"> 
                    <div class="status-title"> Need review</div>
                    <div class="time"> Mar 2019</div>
                </div>
            </div>
            <div class="item d-flex">
                <div class="item-left col-lg-4 relative"> 
                    <span class="status"> </span>
                    <div class="content">
                        <div class="job-title">Datascientist  </div>
                    <div class="location">Chicago it</div>
                    </div>
                </div>
                <div class="item-right col-lg-8 text-right relative"> 
                    <div class="status-title"> Need review</div>
                    <div class="time"> Mar 2019</div>
                </div>
            </div>
            <div class="item d-flex">
                <div class="item-left col-lg-4 relative"> 
                    <span class="status"> </span>
                    <div class="content">
                        <div class="job-title">Datascientist  </div>
                    <div class="location">Chicago it</div>
                    </div>
                </div>
                <div class="item-right col-lg-8 text-right relative"> 
                    <div class="status-title"> Need review</div>
                    <div class="time"> Mar 2019</div>
                </div>
            </div>
            <div class="item d-flex">
                <div class="item-left col-lg-4 relative"> 
                    <span class="status"> </span>
                    <div class="content">
                        <div class="job-title">Datascientist  </div>
                    <div class="location">Chicago it</div>
                    </div>
                </div>
                <div class="item-right col-lg-8 text-right relative"> 
                    <div class="status-title"> Need review</div>
                    <div class="time"> Mar 2019</div>
                </div>
            </div>  
        </div>
        <div class="resume-detail col-lg-8"> 
            <header> </header>
            <main> 
              <div class="resume-wrapper"> 
                <div class="header"> 
                    <div class="title"> Công việc đã đăng </div>
                    <div class="job-title">Data Scientist . <span class="location">Chicago</span> </div>
                    <div class="time">Ứng tuyển 122 ngày trước </div>
                </div>
                <div class="resume-main-content"> 
                    <div class="header d-flex">
                        <div class="col-lg-10"> 
                            <div class="title">Resume </div>
                            <div class="file-name"> Cv Name</div>
                        </div>
                        
                    </div>
                    <div>
                        <iframe src="https://data-devtest.basecdn.net/8f/d2/5b/9e/32/2d0d2931043e1e70051f13beb5088d01/7a6e55bd342c4dc65a8a2a6140ef914b_164668_KTLRB2HEAQQV2.pdf"> 
    
                        </iframe>
                    </div>
                </div>
              </div>
            </main>
          
        </div>
    </div>

    <div class="sep-20"> </div>
    <div class="sep-20"> </div>
    <div class="sep-20"> </div>
    <div class="sep-20"> </div>
    <div class="sep-20"> </div>
    <div class="sep-20"> </div>

</div>
<script> 
Employer.candidate.list();
</script>
@endsection