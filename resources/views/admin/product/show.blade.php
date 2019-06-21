@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('extents/product/css/product_index.css')}}">
<style>
    
</style>
@endsection
@section('content')
<div class="container">
    <div class="banner shadow p-3 mb-5 bg-white rounded">
        <div class="banner-image"></div>
        <div class="primary-wrapper">
            <h3 class=""><i class="fa fa-product-hunt" aria-hidden="true"></i> @lang('sample.product_detail')</h3>
            <hr>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4" style="margin-bottom: 10px;">
                    @if(file_exists( public_path('storage/products/'). $product->profile))
                            <a href="{{asset('storage/products/'.$product->profile)}}" target="_blank">
                            <img src="{{asset('storage/products/'.$product->profile)}}" style="width:100%">
                            </a>                                        
                        @else
                        @endif
                </div>
                <div class="col-sm-7">
                    <h4 style="word-break: break-word;">@lang('sample.name') : {{ $product->name }}</h4>
                    <h4>
                        @lang('sample.status') : 
                        @if($product->status == 0)
                        @lang('sample.draf')
                        @else
                        @lang('sample.publish')
                        @endif
                    </h4>
                    <h4>@lang('sample.price') : ${{ number_format($product->price, 2, '.', ',') }}</h4>
                    <h4 style="word-break: break-word;">@lang('sample.category') : {{ !empty($product->category)?$product->category->name:'' }}</h4>
                </div>
                <hr>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-11">           
                    <ul class="nav nav-tabs">
                        <li class="active"><h4>@lang('sample.description')</h4></li>
                    </ul>
                    {{$product->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#product-list").addClass('active');
</script>
@endsection
