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
            <h3 class=""><i class="fa fa-list-alt" aria-hidden="true"></i> @lang('sample.categories')</h3>
            <hr>  
            <a href="{{ route('category.create')}}">
                <button class="btn btn-primary">@lang('sample.add_new')</button> 
            </a>            
            <br> 
            <br>
            <div  class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" style="width:5%">#</th>
                        <th scope="col">@lang('sample.name')</th>
                        <th scope="col" style="width:30%">@lang('sample.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($categories) && count($categories) > 0)
                            @foreach($categories as $key=>$category)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>                                
                                    <td>{{ $category->name }}</td>
                                    <td class="center" style="color:white">
                                    <a class="btn btn-default" href="{{route('category.edit',[$category->id])}}" style="background-color:#ada8a896; margin:2px">
                                        @lang('sample.edit')
                                    </a>
                                    @if(count($category->products) > 0)
                                        <!-- <a class="btn btn-danger" data-toggle="modal" id = "{{$category->id}}" data-target="#DeleteModal" onclick="dataDeleteCategory(this.id)"  style="margin:2px">@lang('sample.delete')</a> -->
                                        <button class="btn btn-danger" style="margin:2px" disabled="true">
                                            @lang('sample.delete')
                                        </button>                                        
                                    @else
                                        <a class="btn btn-danger" data-toggle="modal" id = "{{$category->id}}" data-target="#DeleteModal" onclick="dataDeleteCategory(this.id)" style="margin:2px">@lang('sample.delete')</a>                                  
                                    @endif
                                    </td>
                                </tr>   
                            @endforeach
                        @endif                                     
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example" class="table-responsive mb-2">
                <ul class="pagination mb-0">
                    @if(isset($categories) && count($categories) > 0)
                        {{ $categories->links() }}  
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
    $("#category-list").addClass('active');
</script>
@endsection