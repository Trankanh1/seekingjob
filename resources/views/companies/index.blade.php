@extends('layouts.app')

@section('title', 'Page Title')
@section('header')
@section('sidebar')
    @parent
@endsection

@section('content') 
<div class="containter-max-width d-flex mr-auto flex-direction-row job-content">
    <div class="searh-area-wrapper">
        <div class="search-box"> 
            <div class="title">Tìm kiếm công ty và đánh giá, nhận xét ...</div>
            <form method="get" action="{{ route("review-search-result") }}">
                <input class="job-title" aria-placeholder="Nhập" name="keyword" placeholder="Nhập tên công việc hoặc tên công ty">
                <input class="location" placeholder="Địa điểm" name="location">
                <button>Tìm kiếm</button>
            </form>
        </div>
        <img class="background-img" src="{{ asset('images/image-search.jpeg') }}">
    </div>
</div>
@endsection