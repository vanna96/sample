@extends('master')
@section('style')
<link rel="stylesheet" href="{{asset('extents/product/css/product_create.css')}}">
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-8">
        @include('messages.validate_errors')
        <div class="banner">
            
            <div class="banner-image"></div>
            
            <div class="primary-wrapper">
            
            <h4 class="site-title"><i class="fa fa-pencil" aria-hidden="true"></i>Create Product</h4>
            <hr>
            <form method="post" action="{{route('product_store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="product_id" value="{{@$product->id}}">
                <input type="hidden"  id="category_id_selected" value="{{@$product->category_id}}">
                <input type="hidden"  id="status_id_selected" value="{{@$product->status}}">
                <div class="row">
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="name">Name <span style="color:#a51818">*</span> </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ @$product?$product->name:old('name') }}" required placeholder="Please fill name">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">                        
                        <label for="category">Category <span style="color:#a51818">*</span></label>
                        <div class="input-group">
                            <select class="form-control" name="category" required id="category_selected">
                                <option value="" disabled selected>Please select categroy</option>
                                @if(isset($categories) && count($categories) > 0)
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="input-group-append">
                                <a style="background-color: #e8e4e4; width: 36px;"><center><i class="fa fa-pencil" aria-hidden="true" style="font-size:35px;"></i></center></a>
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="price">Price <span style="color:#a51818">*</span></label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" step="any" name="price" value="{{ @$product?$product->price:old('price') }}" maxlength = 10 required placeholder="Please fill price">
                    </div>
                    <div class="form-group col-sm-6 col-xs-6">
                        <label for="status" >Status <span style="color:#a51818">*</span></label>
                        <select class="form-control" name="status" id="status_selected" required>
                            <option value="" disabled selected>Please select Status</option>                            
                            <option value="0" >Draft</option>
                            <option value="1" >Publish</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">Profile 
                            @if(@$product)
                            @else
                                <span style="color:#a51818">*</span>
                            @endif
                        </label>
                        @if(@$product)
                            <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror">
                        @else
                            <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror" required>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <label for="status">Description <span style="color:#a51818">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10" required placeholder="Please fill description">{{@$product?$product->description:old('description') }}</textarea>
                    </div>
                    <div class="form-group col-sm-12 col-xs-12">
                        <button type="submit"  class="btn btn-primary pull-right">Save || Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ProductModal -->
    <div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="CategoryModalLabel" aria-hidden="true">
        @include('admin.modal.category_modal')
    </div>
@endsection
@section('script')
<script src="{{asset('extents/product/script/product_create.js')}}"></script>
<script>
// save change click modal
$('#save_change').click(function(){
    var categoryModalvalue = $('#categoryModalId').val();
    if (categoryModalvalue == '' && categoryModalvalue.trim() == '') {
        $('#categoryModalId').css('border-color', 'red');
        $.notify({
            // options
            title: '<strong>Whoop!!!</strong>',
            message: "<br>Category name field is required",
            icon: 'glyphicon glyphicon-ok',
            url: '#',
            target: '_blank'
        },{
            // settings
            element: 'body',
            //position: null,
            type: "danger",
            //allow_dismiss: true,
            //newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutRight'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }else{
        $('#categoryModalId').css('border-color', '');
        $.ajax({
            type: "GET",
            url: "{{ url('category/ajax') }}",
            data: {name: categoryModalvalue},
            dataType: 'json',
            success: function (response) {
                if (response.message == '1') {
                    $('#close_modal').trigger( "click" );
                    $('#categoryModalId').val('');
                    $('#category_selected').append('<option value='+response.data.id+'>'+response.data.name+'</option>');
                    $.notify({
                        // options
                        title: '<strong>Success</strong>',
                        message: "<br>Category name has create successfully",
                        icon: 'glyphicon glyphicon-ok',
                        url: '#',
                        target: '_blank'
                    },{
                        // settings
                        element: 'body',
                        //position: null,
                        type: "success",
                        //allow_dismiss: true,
                        //newest_on_top: false,
                        showProgressbar: false,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 3300,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutRight'
                        },
                        onShow: null,
                        onShown: null,
                        onClose: null,
                        onClosed: null,
                        icon_type: 'class',
                    });
                }else{
                    $.notify({
                        // options
                        title: '<strong>Whoop!!!</strong>',
                        message: "<br>Category name already exist",
                        icon: 'glyphicon glyphicon-ok',
                        url: '#',
                        target: '_blank'
                    },{
                        // settings
                        element: 'body',
                        //position: null,
                        type: "danger",
                        //allow_dismiss: true,
                        //newest_on_top: false,
                        showProgressbar: false,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 3300,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutRight'
                        },
                        onShow: null,
                        onShown: null,
                        onClose: null,
                        onClosed: null,
                        icon_type: 'class',
                    });
                }
            }
        });
    }
});
</script>
@endsection