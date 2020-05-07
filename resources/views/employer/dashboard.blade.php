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
    <div class="title">Trang chủ </div>
    <div id="overview" class="d-flex flex-wrap justify-content-space-between">
        <div class="box">
            <div class="icon"> 
                <i class="fa fa-columns" aria-hidden="true"></i>
            </div>
            <div class="title">Jobs </div>
            <div class="subtitle">Xem, sửa vào tạo job trên seekingjob </div>
            <div class="number relative">{{ $data["total_job"] }} <span class="text"> đã được đăng</span></div>
            
        </div>
        <div class="box url" data-url="{{ route("employer-list-candicate") }}">
            <div class="icon"> 
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="title">Ứng tuyển </div>
            <div class="subtitle">Xem đơn ứng tuyển, theo dõi trong quá trình tuyển dụng</div>
            <div class="number relative">{{ $data["total_candicate"] }} <span class="text">người đã ứng tuyển </span> </div>
           
        </div>
        <div class="box url" data-url="{{ route("employer-profile") }}">
            <div class="icon"> 
                <i class="fa fa-building-o" aria-hidden="true"></i>
            </div>
            <div class="title">Employer profile </div>
            <div class="subtitle">Cập nhật thông tin công ty tuyển dụng, thu hút ứng viên ứng tuyển.</div>
        </div>
        <div class="box url" data-url="{{ route("employer-list-review") }}">
            <div class="icon"> 
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
            </div>
            <div class="title">Community reviews </div>
            <div class="subtitle">Xem, trả lời và bình luận (update version) </div>
            <div class="number relative">{{ $data["total_review"] }} <span class="text">bình luận về công ty </span> </div>
           
        </div>
           
        <div class="box url" data-url="{{ route("employer-list-job") }}">
            <div class="icon"> 
                <i class="fa fa-line-chart" aria-hidden="true"></i>
            </div>
            <div class="title">Analytics </div>
            <div class="subtitle">Xem, sửa vào tạo job trên seekingjob </div>
        </div>
        <div class="box url" data-url="{{ route("employer-list-job") }}">
            <div class="icon"> 
                <i class="fa fa-line-chart" aria-hidden="true"></i>
            </div>
            <div class="title">Analytics </div>
            <div class="subtitle">Xem, sửa vào tạo job trên seekingjob </div>
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
    $(".content-wrapper").css("background", "#f5f6f7");
</script>
@endsection