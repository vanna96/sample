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
            <h4 class=""><i class="fa fa-product-hunt" aria-hidden="true"></i>  @lang('sample.products')</h4>
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
                        <th scope="col">@lang('sample.description')</th>
                        <th scope="col">@lang('sample.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($products) && count($products) > 0)
                            @foreach($products as $key=>$product)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td style="text-align: center;">
                                    @if(file_exists( public_path('storage/products/'). $product->profile))
                                    <a href="{{asset('storage/products/'.$product->profile)}}" target="_blank">
                                        <img src="{{asset('storage/products/'.$product->profile)}}" alt="">
                                    </a>                                        
                                    @else
                                    @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>${{ $product->price }}</td>
                                    <td>{{ !empty($product->category)?$product->category->name:'' }}</td>
                                    <td style="text-align:center">
                                        @if($product->status == 0)
                                            <i class="fa fa-times" rel="@lang('sample.draf')" style="color:#ab1515; font-size: 20px;" ></i>
                                        @else
                                            <i class="fa fa-paper-plane-o" style="color:#111173; font-size: 20px;" rel="@lang('sample.publish')"></i>
                                        @endif
                                    </td>
                                    <td id="Stringdescription">{{ $product->description}}</td>
                                    <td class="center">
                                    <a href="{{route('product.edit',[$product->id])}}">
                                        <button class="btn btn-default" style="background-color:#ada8a896">@lang('sample.edit')</button>
                                    </a>
                                    <button class="btn btn-danger" data-toggle="modal" id = "{{$product->id}}" data-target="#DeleteModal" onclick="dataDelete(this.id)">@lang('sample.delete')</button>
                                    </td>
                                </tr>   
                            @endforeach
                        @endif                                     
                    </tbody>
                </table> 
            </div>
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
<script>
    // delete product
    function dataDelete(id){
        var product_id = id;
        $("#deleteItem").attr("action", "{{url('product/')}}/"+product_id);
    }
</script>
@endsection
