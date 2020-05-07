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
                <div class="menu-tab active">
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
    <div class="containter-max-width  mr-auto"> 
        <div id="recent-search"> 
            <div class="title">Kết quả tìm kiếm gần đây </div>
            <div id="job-searches" class="d-flex flex-direction-row flex-wrap"> 
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="main col-lg-10"> 
                            <div class="job-title"> 
                                Software engineer 
                            </div>
                            <div class="job-location">ha noi </div>
                            <div class="filter"> <span> &lt; 10 Miles</span> <span> &lt; 10 Miles</span> </div>
                        </div>
                        <div class="icon col-lg-2"> 
                            <span class="SVGInline blueCaret"><svg class="SVGInline-svg blueCaret-svg" height="16" viewBox="0 0 16 16" width="16"><path d="M9.56 7.999L4.83 3.743a1 1 0 011.338-1.486l5.003 4.503c.685.616.74 1.67.124 2.354-.06.064-.06.064-.124.123L6.17 13.741a1 1 0 01-1.338-1.487z" fill="#1861bf" fill-rule="evenodd"></path></svg></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title"> 
                Job đã xem gần đây
            </div>
            <div id="job-vieweds" class="d-flex flex-direction-row flex-wrap"> 
                
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqll/985594/tek-experts-squarelogo-1443429808940.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> TikiVN</div>
                            <div class="job-title">Software engineer </div>
                            <div class="location"> Ha Noi</div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqll/985594/tek-experts-squarelogo-1443429808940.png">
                        </div>
                        <div class="main relative" onclick="Job.searchByRecent()"> 
                            <div class="company-name"> TikiVN</div>
                            <div class="job-title">Software engineer </div>
                            <div class="location"> Ha Noi</div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqll/985594/tek-experts-squarelogo-1443429808940.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> TikiVN</div>
                            <div class="job-title">Software engineer </div>
                            <div class="location"> Ha Noi</div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqll/985594/tek-experts-squarelogo-1443429808940.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> TikiVN</div>
                            <div class="job-title">Software engineer </div>
                            <div class="location"> Ha Noi</div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-3"> 
                    <div class="content d-flex align-item-center"> 
                        <div class="logo">
                            <img src="https://media.glassdoor.com/sqll/985594/tek-experts-squarelogo-1443429808940.png">
                        </div>
                        <div class="main relative"> 
                            <div class="company-name"> TikiVN</div>
                            <div class="job-title">Software engineer </div>
                            <div class="location"> Ha Noi</div>
                        </div>
                    </div>
                </div>
            </div>
 
    
        </div>
</div>

</div>
<script>
    Job.search.listRecent();
    Job.homePage.listViewed();
    Job.homePage.listRencentSearches();
</script>
@endsection