@extends('master')
@section('style')
@endsection
@section('content') 
<div class="container">
    @include('messages.validate_errors')
    @include('messages.massage_alert')
    <div class="banner shadow p-3 mb-5 bg-white rounded">
        <div class="banner-image"></div>
        <div class="primary-wrapper">
            <h3 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>@lang('sample.category')</h3>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                        <div class="form-group">
                            <label for="category">@lang('sample.name')<span style="color:#a51818">*</span></label>
                            <input title="@lang('sample.name')" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name') ? old('name') : $category->name}}"  placeholder="@lang('sample.fill_name')" oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">
                        </div>
                        <div class="form-group" style="float: right;">
                            <a href="{{route('category.index')}}" class="btn btn-danger">
                            @lang('sample.cancel')
                            </a>
                            <button type="submit" class="btn btn-primary">
                            @lang('sample.update')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#category-list").addClass('active');
</script>
@endsection