@extends('layouts.app')

@section('title', 'Page Title')
@section('header')
@section('sidebar')
    @parent
@endsection

@section('content') 
    <div class="no-result"> <span> Không tìm thấy kết quả tìm kiếm </span></div>
    
@endsection
