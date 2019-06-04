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
    <div class="container col-sm-6">
    @if($errors->has())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
        <div class="banner">
            <div class="banner-image"></div>
            <div class="primary-wrapper">
            <h4 class=""><i class="fa fa-pencil" aria-hidden="true"></i>Category</h4>
            <hr>
            <div class="row">       
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