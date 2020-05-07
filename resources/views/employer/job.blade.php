@extends('layouts.employer')

@section('title', 'Page Title')
@section('sidebar')
    @parent
@endsection

@section('content')
<div class="content-wrapper"> 
    <div class="title">Tất cả job đã đăng </div>
    <div class="subtitle">Xem, sửa, quản lý tất cả job đã trên seekingjob</div>
    <div class="js-all-job"> 
        <table class="js-jobs "> 
            <thead> 
                <th class="text-left">Job</th>
                <th class="text-left">Địa điểm</th>
                <th class="text-left"> Mức lương</th>
                <th class="text-center"> Ngày tạo</th>
                <th class="text-centr"> Trạng thái</th>
                <th class="text-centr"></th>
            </thead>
            <tbody> 

            </tbody>
        </table>
        <div class="sep-20"> </div>
        <div class="sep-20"> </div>
        <div class="sep-20"> </div>
        <div class="sep-20"> </div>
        <div class="sep-20"> </div>
        <div class="sep-20"> </div>
    </div>
</div>
<script>
    Employer.job.list();
 </script>
@endsection