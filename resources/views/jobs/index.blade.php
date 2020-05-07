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
            <div class="title">Tìm vệc làm... </div>
            <form>
                <input class="job-title" aria-placeholder="Nhập" placeholder="Nhập tên công việc hoặc tên công ty">
                <input class="location" placeholder="Địa điểm">
                <button>Tìm kiếm</button>
            </form>
        </div>
        <img class="background-img" src="{{ asset('images/image-search.jpeg') }}">
    </div>
</div>
@endsection