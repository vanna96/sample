@extends('master')
@section('style')
    <link rel="stylesheet" href="{{asset('extents/product/css/product_index.css')}}">
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container">
        @include('messages.validate_errors')
        <div class="banner shadow p-3 mb-5 bg-white rounded">
            <div class="banner-image"></div>
            <div class="primary-wrapper">
            <h4 class=""><i class="fa fa-pencil" aria-hidden="true"></i>@lang('sample.category')</h4>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form method="post" action="{{ route('category.store') }}">
                    {{csrf_field()}}             
                        <div class="form-group">
                            <label for="category">@lang('sample.name')<span style="color:#a51818">*</span></label>
                            <input title="@lang('sample.name')" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="@lang('sample.fill_name')" oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">
                        </div> 
                        <div class="form-group" style="float: right;">
                            <a href="{{route('category.index')}}" class="btn btn-danger">
                                @lang('sample.cancel')
                            </a>
                            <button type="submit" class="btn btn-primary">
                            @lang('sample.save') || @lang('sample.update')</button>
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