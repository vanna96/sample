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
            <h4 class="site-title">Products</h4>
            <hr>  
            <a href="{{ route('product_create')}}">
                <button class="btn btn-primary">Add new</button> 
            </a>            
            <br> 
            <br> 
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile</th>
                    <th scope="col">name</th>
                    <th scope="col">Price</th>                    
                    <th scope="col">Category</th>
                    <th scope="col">status</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($products) && count($products) > 0)
                        @foreach($products as $key=>$product)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td style="text-align: center;">
                                 @if(file_exists( public_path('storage/products/'). $product->profile))
                                    <img src="{{asset('storage/products/'.$product->profile)}}" alt="">
                                 @else

                                 @endif
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ !empty($product->category)?$product->category->name:'' }}</td>
                                <td style="text-align:center">
                                    @if($product->status == 0)
                                        <i class="fa fa-times" rel="Draff" style="color:#ab1515; font-size: 20px;" ></i>
                                    @else
                                        <i class="fa fa-paper-plane-o" style="color:#111173; font-size: 20px;" rel="Publish"></i>
                                    @endif
                                </td>
                                <td id="Stringdescription">{{ $product->description}}</td>
                                <td class="center">
                                <a href="{{route('product_edit',[$product->id])}}">
                                    <button class="btn btn-default" style="background-color:#ada8a896">Edit</button>
                                </a>
                                <button class="btn btn-danger" data-toggle="modal" id = "{{$product->id}}" data-target="#DeleteModal" onclick="dataDelete(this.id)">Delete</button>
                                </td>
                            </tr>   
                        @endforeach
                    @endif                                     
                </tbody>
            </table> 
            @if(isset($products) && count($products) > 0)
                {{ $products->links() }}  
            @endif                
        </div>
    </div>
    <!-- DeleteModal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
        @include('messages.delete')
    </div>
@endsection
@section('script')
<script src="{{asset('extents/product/script/product_index.js')}}"></script>
@endsection
