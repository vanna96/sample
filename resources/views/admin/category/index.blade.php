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
            <h4 class=""><i class="fa fa-list-alt" aria-hidden="true"></i> @lang('sample.categories')</h4>
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
                        <th scope="col">#</th>
                        <th scope="col">@lang('sample.name')</th>
                        <th scope="col" style="width:40%">@lang('sample.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($categories) && count($categories) > 0)
                            @foreach($categories as $key=>$category)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>                                
                                    <td>{{ $category->name }}</td>
                                    <td class="center">
                                    <a href="{{route('category.edit',[$category->id])}}">
                                        <button class="btn btn-default" style="background-color:#ada8a896">@lang('sample.edit')</button>
                                    </a>
                                    @if(count($category->products) > 0)
                                        <button class="btn btn-danger" data-toggle="modal" id = "{{$category->id}}" data-target="#DeleteModal" onclick="dataDelete(this.id)" disabled="true">@lang('sample.delete')</button>
                                        </td>
                                    @else
                                        <button class="btn btn-danger" data-toggle="modal" id = "{{$category->id}}" data-target="#DeleteModal" onclick="dataDelete(this.id)">@lang('sample.delete')</button>
                                        </td>
                                    @endif
                                    
                                </tr>   
                            @endforeach
                        @endif                                     
                    </tbody>
                </table>
            </div>
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
<script>
    // delete category
    function dataDelete(id){
        var category_id = id;
        $("#deleteItem").attr("action", "{{url('category/')}}/"+category_id);
    }
</script>
@endsection