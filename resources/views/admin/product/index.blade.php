@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('extents/product/css/product_index.css')}}">
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container">
        @include('messages.massage_alert')
        <div class="banner shadow p-3 mb-5 bg-white rounded">            
            <div class="banner-image"></div> 
            <div class="primary-wrapper">    
            <h3 class=""><i class="fa fa-product-hunt" aria-hidden="true"></i> @lang('sample.products')</h3>
            <hr>  
            <a href="{{ route('product.create')}}">
                <button class="btn btn-primary">@lang('sample.add_new')</button> 
            </a>            
            <br> 
            <br> 
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">@lang('sample.profile')</th>
                        <th scope="col">@lang('sample.name')</th>
                        <th scope="col">@lang('sample.price')</th>                    
                        <th scope="col">@lang('sample.category')</th>
                        <th scope="col">@lang('sample.status')</th>
                        <th scope="col">@lang('sample.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($products) && count($products) > 0)
                            @foreach($products as $key=>$product)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td>
                                    @if(file_exists( public_path('storage/products/'). $product->profile))
                                    <a href="{{asset('storage/products/'.$product->profile)}}" target="_blank">
                                        <img src="{{asset('storage/products/'.$product->profile)}}" alt="" class="indexImg">
                                    </a>                                        
                                    @else
                                    @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td style="text-align: center;">${{ number_format($product->price, 2, '.', ',') }}</td>
                                    <td>{{ !empty($product->category)?$product->category->name:'' }}</td>
                                    <td style="text-align:center">
                                        @if($product->status == 0)
                                            <i class="fa fa-times" rel="@lang('sample.draf')" style="color:#ab1515; font-size: 20px;" ></i>
                                        @else
                                            <i class="fa fa-paper-plane-o" style="color:#111173; font-size: 20px;" rel="@lang('sample.publish')"></i>
                                        @endif
                                    </td>
                                    <td style="padding:10px; color: white;">
                                        <a  class="btn btn-default" style="background-color:#ada8a896; margin:2px" href="{{route('product.edit',[$product->id])}}" >
                                            @lang('sample.edit')
                                        </a>
                                        <a style="margin:2px" class="btn btn-danger" data-toggle="modal" id = "{{$product->id}}" data-target="#DeleteModal" onclick="dataDeleteProduct(this.id)">@lang('sample.delete')</a> 
                                    </td>
                                </tr>   
                            @endforeach
                        @endif                                     
                    </tbody>
                </table> 
            </div>
            <nav aria-label="Page navigation example" class="table-responsive mb-2">
                <ul class="pagination mb-0">
                    @if(isset($products) && count($products) > 0)
                        {{ $products->links() }}  
                    @else
                        <center><h5>@lang('sample.no_data')</h5></center>
                    @endif    
                </ul>
            </nav>                           
        </div>
    </div>
    <!-- DeleteModal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
        @include('messages.delete')
    </div>
@endsection
@section('script')
<script>
    $("#product-list").addClass('active');
</script>
@endsection
