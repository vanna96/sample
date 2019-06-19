@extends('master')
@section('style')
@endsection
@section('content')
@include('layouts.header') 
<br> 
<br>  
<div class="container">
<div class="banner shadow p-3 mb-5 bg-white rounded">
    <div class="banner-image"></div>
    <div class="primary-wrapper">
        <h3 class="">@lang('sample.welcome_to_dashboard')</h3>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6" >
                        <div class="card">
                            <div class="card-body" style="background-color:#f39c12;
                                color:white;">
                                <div class="row">
                                    <div class="col-sm-7 col-xs-7">
                                        <center>
                                            <h2 class="card-title">{{ count(@$products) }} 
                                                <br>
                                                @if(count(@$products) > 1)
                                                <span style="font-size: 26px">@lang('sample.products')</span>
                                            </h2>
                                            @else
                                            <span style="font-size: 26px">@lang('sample.product')</span></h2>
                                            @endif
                                        </center>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <center>
                                            <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
                                <center>
                                    <a href="{{ route('product.index' )}}" class="btn btn-default">@lang('sample.more_info') 
                                    <i class="fa fa-arrow-right"></i>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <div class="card" style="width:100%">
                            <div class="card-body" style="background-color:#328c4a;
                                color:white;">
                                <div class="row">
                                    <div class="col-sm-7 col-xs-7">
                                        <center>
                                            <h2 class="card-title">{{ count(@$categories) }} 
                                                <br>
                                                @if(count(@$categories) > 1)
                                                <span style="font-size: 26px">@lang('sample.categories')</span>
                                            </h2>
                                            @else
                                            <span style="font-size: 26px">@lang('sample.category')</span></h2>
                                            @endif                                
                                        </center>
                                    </div>
                                    <div class="col-sm-5 col-xs-5">
                                        <center>
                                            <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #d0c8c854">
                                <center>
                                    <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
                                    <i class="fa fa-arrow-right"></i>
                                    </a>
                                    </a>
                                </center>
                            </div>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#dashboard-list").addClass('active');
</script>
@endsection