@extends('master')
@section('style')
    <link rel="stylesheet" href="{{asset('extents/product/css/product_index.css')}}">
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-8">
        @include('messages.validate_errors')
        <div class="banner">
            <div class="banner-image"></div>
            <div class="primary-wrapper">
            <h4 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>@lang('sample.category')</h4>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form method="post" action="{{ route('category_store') }}">
                    {{csrf_field()}}         
                        <input type="hidden" name="category_id" value="{{@$category->id}}">    
                        <div class="form-group">
                            <label for="category">@lang('sample.name')<span style="color:#a51818">*</span></label>
                            <input title="@lang('sample.name')" type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="category_name" required value="{{ @$category?$category->name:old('name') }}"  placeholder="@lang('sample.fill_name')" required oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">
                        </div> 
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">@lang('sample.save') || @lang('sample.update')</button>
                        </div>                       
                    </form>
                </div>       
            </div>
            
        </div>
    </div>
@endsection
@section('script')
<script src="{{asset('extents/category/script/category_create.js')}}"></script>
@endsection