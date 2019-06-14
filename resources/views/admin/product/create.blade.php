@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('extents/product/css/product_create.css')}}">
<style>
    .select2-container--bootstrap4 .select2-selection {
        height: 39px !important;
        font-size: 18px;
    }
    .select2-container .select2-selection--single .select2-selection__rendered {
        font-size: 16px;
    }
    .select2-results__option {
        font-size: 16px;
    }
</style>
@endsection
@section('content')
@include('layouts.header')
    <br> 
    <br>  
    <div class="container col-sm-8">
        @include('messages.massage_alert')
        @include('messages.validate_errors')
        <div class="banner">
            <div class="banner-image"></div>
            <div class="primary-wrapper">
            <h4 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>@lang('sample.create_product')</h4>
            <hr>
            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="name">@lang('sample.name') <span style="color:#a51818">*</span> </label>
                        <input type="text" title="@lang('sample.name')" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="@lang('sample.fill_name')" oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">                        
                        <label for="category">@lang('sample.category') <span style="color:#a51818">*</span></label>
                        <div class="input-group">
                            <select class="form-control @error('category') is-invalid @enderror" title="@lang('sample.category')" name="category" id="category_selected" oninvalid="this.setCustomValidity('@lang('sample.required_select')')" oninput="setCustomValidity('')">
                                <option value="" disabled selected>@lang('sample.required_select')</option>
                                @if(isset($categories) && count($categories) > 0)
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="input-group-append">
                                <a style="background-color: #e8e4e4; width: 36px;"><center><i class="fa fa-pencil" aria-hidden="true" style="font-size:35px;"></i></center></a>
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="price">@lang('sample.price') <span style="color:#a51818">*</span></label>
                        <input type="number" title="@lang('sample.price')" class="form-control @error('price') is-invalid @enderror" step="any" name="price" value="{{ old('price') }}" maxlength = 10 placeholder="@lang('sample.fill_price')" oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="status" >@lang('sample.status') <span style="color:#a51818">*</span></label>
                        <select class="form-control @error('status') is-invalid @enderror" title="@lang('sample.status')" name="status" id="status_selected" oninvalid="this.setCustomValidity('@lang('sample.required_select')')" oninput="setCustomValidity('')">
                            <option value="" disabled selected>@lang('sample.required_select')</option>                            
                            <option value="0" >@lang('sample.draf')</option>
                            <option value="1" >@lang('sample.publish')</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">@lang('sample.profile') 
                                <span style="color:#a51818">*</span>
                        </label>
                        <input type="file" title="@lang('sample.profile')" name="profile" class="form-control @error('profile') is-invalid @enderror"  oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">
                        
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">@lang('sample.description') <span style="color:#a51818">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" title="@lang('sample.description')" name="description" id="" cols="30" rows="10"  placeholder="@lang('sample.fill_description')" oninvalid="this.setCustomValidity('@lang('sample.required_input')')" oninput="setCustomValidity('')">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <button type="submit"  class="btn btn-primary pull-right" id="submit">@lang('sample.save') || @lang('sample.update')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ProductModal -->
    <div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="CategoryModalLabel" aria-hidden="true">
        @include('admin.modal.category_modal')
    </div>
@endsection
@section('script')
<script src="{{asset('extents/product/script/product_create.js')}}"></script>
<script>
    // select old value
    var StatusOldValue = '{{ old('status') }}';
    var CategoryOldValue = '{{ old('category') }}';
    if(StatusOldValue !== '') {
        $('#status_selected').val(StatusOldValue).trigger('change');
    }
    if(CategoryOldValue !== '') {
        $('#category_selected').val(CategoryOldValue).trigger('change');
    }
</script>
@endsection