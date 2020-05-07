@extends('layouts.app')

@section('title', 'Page Title')
@section('header')
@section('sidebar')
    @parent
@endsection

@section('content')
<div class="d-flex mr-auto flex-direction-row job-content containter-max-width content-wrapper"> 
    
    <div class="col-lg-4 account">
        <div class="main">
            <div class="img"><span class="text">T</span></div>
            <div class="name">{{ session("user")["fullname"] }}</div>
            <div  class="title d-flex align-items-center"><span class="icon"><svg class="SVGInline-svg css-25qyin-svg css-170llpw-svg mr-xsm-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><rect id="prefix__job-c" width="6" height="1" rx=".5"></rect><path id="prefix__job-a" d="M5 3h10V2a1 1 0 00-1-1H6a1 1 0 00-1 1v1zm11 0h2a2 2 0 012 2v6a2 2 0 01-1 1.732V16a2 2 0 01-2 2H3a2 2 0 01-2-2v-3.268A2 2 0 010 11V5a2 2 0 012-2h2V2a2 2 0 012-2h8a2 2 0 012 2v1zM2 13v3a1 1 0 001 1h14a1 1 0 001-1v-3h-2.5l-.5 2H5l-.5-2H2zm3.78 1h8.44l.5-2H18a1 1 0 001-1V5a1 1 0 00-1-1H2a1 1 0 00-1 1v6a1 1 0 001 1h3.28l.5 2zm1.72-3h5a.5.5 0 110 1h-5a.5.5 0 110-1z"></path></defs><g fill="none" fill-rule="evenodd"><g transform="translate(2 3)"><mask id="prefix__job-b" fill="#fff"><use xlink:href="#prefix__job-a"></use></mask><use fill="#000" fill-rule="nonzero" xlink:href="#prefix__job-a"></use><g fill="#20262E" mask="url(#prefix__job-b)"><path d="M-2-3h24v24H-2z"></path></g></g><g transform="translate(9 14)"><mask id="prefix__job-d" fill="#fff"><use xlink:href="#prefix__job-c"></use></mask><use fill="#000" fill-rule="nonzero" xlink:href="#prefix__job-c"></use><g fill="#20262E" mask="url(#prefix__job-d)"><path d="M-9-14h24v24H-9z"></path></g></g></g></svg> </span>{{ session("user")["title"] }}</div>
            <div class="location  d-flex align-items-center"><span class="icon"> <svg class="SVGInline-svg css-25qyin-svg css-170llpw-svg mr-xsm-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 10a7 7 0 00-14 0c0 3.484 2.298 7.071 7 10.741 4.702-3.67 7-7.257 7-10.741zm-7 12c-5.333-4-8-8-8-12a8 8 0 1116 0c0 4-2.667 8-8 12zm0-10a2 2 0 110-4 2 2 0 010 4zm0 1a3 3 0 100-6 3 3 0 000 6z" fill="#20262E" fill-rule="evenodd"></path></svg></span>{{ session("user")["location"] }}</div>
            <div></div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="job-recommended">
            <div class="title"> 
                <h1>Việc làm được gợi ý</h1>
                <div class="tt">Những việc làm gợi ý được dựa trên thông tin cá nhân và hoạt động trên seekingjob. </div>
            </div>
            <div id="jobs"> 
                <div class="empty">Không có công việc nào được tìm thấy dựa trên profile của bạn </div>
            </div>
        </div>
        <div class="recent-research"> 
            <div class="title">Tìm kiếm gần đây</div>
            <div id="results">
                <div class="item">
                    <div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
                    <div class="main">
                        <div>Công việc gần hà nội</div>
                        <div>122 news</div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
                    <div class="main">
                        <div>Công việc gần hà nội</div>
                        <div>122 news</div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon-search"><span class="SVGInline css-25qyin"><svg class="SVGInline-svg css-25qyin-svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.854 16.147l5.002 5.002a.5.5 0 01-.707.707l-5.002-5.002a8.5 8.5 0 11.707-.707zM10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" fill="#858c94" fill-rule="evenodd"></path></svg></span></div>
                    <div class="main">
                        <div>Công việc gần hà nội</div>
                        <div>122 news</div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="sep-20"></div>
        <div class="sep-20"></div>
        <div class="sep-20"></div>
    </div>
    </div>
</div>
<script> 
    Job.listRecommened();
    Job.listRecentSearch();
</script>
@endsection