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
    <div class="container col-sm-6">
        <br>
        <h3>{{$product->name}}</h3>
        <center>
            <h2>
                <img src="{{asset('storage/products/'.$product->profile)}}" alt="" style="width:150px; height:150px;">
            </h2>
        </center>
        <p>{{ $product->description }}</p>
        <hr>
        <p style="color:gray">You are receiving this email at the account because you are subscribed to receive daily product for the following our shop.
        <p>
    </div>
@endsection
@section('script')
@endsection