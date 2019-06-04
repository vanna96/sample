@extends('master')
@section('style')
    <style>
        .site-title{
            color: blue
        }
        span{
            font-size:22px;
        }
    </style>
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-8">
    @if (count( $errors ) > 0)
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
            <h4 class=""><i class="fa fa-pencil" aria-hidden="true"></i>Category</h4>
            <hr>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form method="post" action="{{ url('category/store') }}">
                    {{csrf_field()}}             
                        <div class="form-group">
                            <label for="category">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="category_name" required value="{{ old('name') }}"  placeholder="Please fill name" required>
                        </div> 
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Save || Update</button>
                        </div>                       
                    </form>
                </div>       
            </div>
            
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
            $('.active-link').attr( "class", "" )
            // $('#create-product').click(function(){
            //     alert('sdfssdd');
            // });
        </script>
@endsection