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
    <div class="title">Company profile </div>
    <div class="d-flex company-profile"> 
        <div class="logo col-lg-2"><img src="{{ $company->logo }}"> </div>
        <div id="update-profile" class="col-lg-8">
            <form  method="post" enctype="multipart/form-data" action="{{route('employer-update-profile')}}">
                <div class="row">
                    <label>Cập nhật tên công ty</label>
                    <div><input type="text" name="name" value="{{ $company->name }}"> </div>
                </div>
                <div class="row">
                    <label>Logo</label>
                    <div> <input type="file" name="logo"> </div>
                </div>
                <div class="row">
                    <label>Tên web site</label>
                    <div> <input type="text" name="website" value="{{ $company->website }}"> </div>
                </div>
                <div class="row">
                    <label>Head quarter</label>
                    <div><input type="text" name="head_quarter" value="{{ $company->head_quarter }}"> </div>
                </div>
                <div class="row">
                    <label>Found</label>
                    <div><input type="text" name="found" value="{{ $company->found }}">
                </div>
                <div class="row">
                    <label>Industry</label>
                    <div><input type="text" name="industry" value="{{ $company->industry }}"> </div>
                </div>
                <div class="row">
                    <label>Size</label>
                    <div><input type="text" name="size" value="{{ $company->size }}"> </div>
                </div>
                <div class="row">
                    <label>Mô tả</label>
                    <div class="description">  <textarea id="description" name="description"> </textarea></div>
                </div>
                <div class="row">
                    <input type="hidden" name="company_id" value="{{ $company->id }}">
                    <button type="submit" class="btn-update-profile"> Cập nhật</div>
                </div>
            <form>
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
        CKEDITOR.replace( 'description' );
        CKEDITOR.instances['description'].setData(Client.pageData.company.description);
</script>
@endsection