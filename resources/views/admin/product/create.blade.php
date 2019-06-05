@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('extents/product/css/product_create.css')}}">
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
            
            <h4 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>Create Product</h4>
            <hr>
            <form method="post" action="{{route('product_store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="product_id" value="{{@$product->id}}">
                <input type="hidden"  id="category_id_selected" value="{{@$product->category_id}}">
                <input type="hidden"  id="status_id_selected" value="{{@$product->status}}">
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="name">Name <span style="color:#a51818">*</span> </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ @$product?$product->name:old('name') }}" required placeholder="Please fill name">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">                        
                        <label for="category">Category <span style="color:#a51818">*</span></label>
                        <select class="form-control" name="category" required id="category_selected">
                            <option value="" disabled selected>Please select categroy</option>
                            @if(isset($categories) && count($categories) > 0)
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>                    
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="price">Price <span style="color:#a51818">*</span></label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" step="any" name="price" value="{{ @$product?$product->price:old('price') }}" maxlength = 10 required placeholder="Please fill price">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="status" >Status <span style="color:#a51818">*</span></label>
                        <select class="form-control" name="status" id="status_selected" required>
                            <option value="" disabled selected>Please select Status</option>                            
                            <option value="0" >Draft</option>
                            <option value="1" >Publish</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">Profile 
                            @if(@$product)
                            @else
                                <span style="color:#a51818">*</span>
                            @endif
                        </label>
                        @if(@$product)
                            <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror">
                        @else
                            <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror" required>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">Description <span style="color:#a51818">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10" required placeholder="Please fill description">{{@$product?$product->description:old('description') }}</textarea>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <button type="submit"  class="btn btn-primary pull-right">Save || Update</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    <!-- ProductModal -->
    <div class="modal fade" id="ProductModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
        @include('admin.modal.product_modal')
    </div>
    <!-- ProductModal -->
    <div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="CategoryModalLabel" aria-hidden="true">
        @include('admin.modal.category_modal')
    </div>
@endsection
@section('script')
<script src="{{asset('extents/product/script/product_create.js')}}"></script>
@endsection