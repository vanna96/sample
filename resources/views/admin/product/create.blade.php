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
    </style>
@endsection
@section('content')
@include('layouts.header') 

@foreach ($errors->all() as $message)
        {{ $message}}
@endforeach
    <br> 
    <br>  
    <div class="container col-sm-6">
        <div class="banner">
            
            <div class="banner-image"></div>
            
            <div class="primary-wrapper">
            
            <h4 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>Create Product</h4>
            <hr>
            <form method="post" action="{{url('product/store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="category">Category</label>
                        <select class="form-control" name="category">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" step="any" name="price" value="{{ old('price') }}" maxlength = 10 required>
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ old('description') }}</textarea>
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
        </script>
@endsection