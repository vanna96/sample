@extends('master')
@section('style')
    <style>
        .site-title{
            color: blue
        }
        .center{
            text-align:center;
        }
        img{
            width: 50px;
            height: 38px;
            border-radius: 4px;
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
    <div class="container col-sm-8">
        <div class="banner">
            
            <div class="banner-image"></div>
            
            <div class="primary-wrapper">
            
            <h4 class="site-title">Products</h4>
            <hr>  
            <a href="{{ url('product/create')}}">
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
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($products) && count($products) > 0)
                        @foreach($products as $key=>$product)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td style="text-align: center;"><img src="{{asset('storage/products/'.$product->profile)}}" alt=""></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->status }}</td>
                                <td>Otto</td>
                                <td class="center">
                                <a href="{{url('product/edit',$product->id)}}">
                                    <button class="btn btn-default" style="background-color:#ada8a896">Edit</button>
                                </a>
                                <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>   
                        @endforeach
                    @endif                                     
                </tbody>
            </table>  
            {{ $products->links() }}      
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
            $('#active-pro-list').attr('class', 'classWhite');
        </script>
@endsection