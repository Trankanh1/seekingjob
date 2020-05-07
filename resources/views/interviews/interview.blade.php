@extends('layouts.app')

@section('title', 'Page Title')
@section('header')
@section('sidebar')
    @parent
@endsection
@section('content')

<div class="page-wrapper">
    <div id="page-content">
        <div class="content d-flex">
            <div class="content-left">
                <div class="count-result">
                    <div class="title">
                    </div>
                </div>
                <div id="js-companies">
                    <div class="no-found"> Không tìm thấy kết quả tìm kiếm</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script> 
    Company.interview.listSearchResultInterview();
  
    Job.getParams();
    $(".count-result .title").html(`Kết quả tìm kiếm phỏng vấn cho <b>${__(Client.pageData.params.keyword)} </b>tại <b>${__(Client.pageData.params.location)}</b>`);
</script>
@endsection