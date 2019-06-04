@extends('master')
@section('style')
    <style>
        .site-title{
            color: blue
        }
        span{
            font-size:22px;
            text-al
        }
        .inline{
            display: inline-block;
        }
    </style>
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="banner">
            
            <div class="banner-image"></div>
            
            <div class="primary-wrapper">
            
            <h4 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>Create Product</h4>
            <hr>
            <form method="post" action="{{url('product/store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="name">Name <span style="color:#a51818">*</span> </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Please fill name">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">                        
                        <label for="category">Category <span style="color:#a51818">*</span></label>
                        <select class="form-control" name="category" required>
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
                        <input type="number" class="form-control @error('price') is-invalid @enderror" step="any" name="price" value="{{ old('price') }}" maxlength = 10 required placeholder="Please fill price">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="status">Status <span style="color:#a51818">*</span></label>
                        <select class="form-control" name="status" required>
                            <option value="" disabled selected>Please select Status</option>                            
                            <option value="0">Draft</option>
                            <option value="1">Publish</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">Profile <span style="color:#a51818">*</span></label>
                        <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror" required>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">Description <span style="color:#a51818">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10" required placeholder="Please fill description">{{ old('description') }}</textarea>
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
        <script type="text/javascript">
            $('.active-link').attr('class', '');
            $('#active-pro').attr('class', 'classWhite');
            $('#active-pro-create').attr('class', 'classWhite');
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
@endsection