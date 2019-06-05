@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('extents/product/css/product_index.css')}}">
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-8">
        @include('messages.massage_alert')
        <div class="banner">            
            <div class="banner-image"></div> 
            <div class="primary-wrapper">    
            <h4 class="site-title">Categories</h4>
            <hr>  
            <a href="{{ route('category_create')}}">
                <button class="btn btn-primary">Add new</button> 
            </a>            
            <br> 
            <br> 
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" style="width:20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($categories) && count($categories) > 0)
                        @foreach($categories as $key=>$category)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>                                
                                <td>{{ $category->name }}</td>
                                <td class="center">
                                <a href="{{route('category_edit',[$category->id])}}">
                                    <button class="btn btn-default" style="background-color:#ada8a896">Edit</button>
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" id = "{{$category->id}}" data-target="#DeleteModal" onclick="dataDelete(this.id)">Delete</button>
                                </td>
                            </tr>   
                        @endforeach
                    @endif                                     
                </tbody>
            </table> 
            @if(isset($categories) && count($categories) > 0)
                {{ $categories->links() }}  
            @endif                
        </div>
    </div>
    <!-- DeleteModal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
        @include('messages.delete')
    </div>
@endsection
@section('script')
<script src="{{asset('extents/category/script/category_index.js')}}"></script>
@endsection