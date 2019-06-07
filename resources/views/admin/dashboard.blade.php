@extends('master')
@section('style')
    <style>
        .site-title{
            color: blue
        }
        span{
            font-size:22px;
        }
        .notifyjs-bootstrap-base{
            padding: "5px";
        }
    </style>
@endsection
@section('content')
@include('layouts.header') 
    <br> 
    <br>  
    <div class="container col-sm-6">
        <div class="banner">
            
            <div class="banner-image"></div>
            
            <div class="primary-wrapper">
            
            <h4 class="site-title">@lang('sample.welcome_to_dashboard')</h4>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-xs-6" >
                    <div class="card" style="width:100%">
                        <div class="card-body">
                            <center>
                                <h2 class="card-title">{{ count(@$products) }} 
                                @if(count(@$products) > 1)
                                    <span>@lang('sample.products')</span></h2>
                                @else
                                    <span>@lang('sample.product')</span></h2>
                                @endif
                                
                            </center>                            
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="{{ route('product_index' )}}#" class="btn btn-primary">@lang('sample.more_info')</a>
                            </center>
                        </div>
                    </div>
                </div>      
                <div class="col-sm-6 col-xs-6">
                    <div class="card" style="width:100%">
                        <div class="card-body">
                            <center>
                                <h2 class="card-title">{{ count(@$categories) }} 
                                @if(count(@$categories) > 1)
                                    <span>@lang('sample.categories')</span></h2>
                                @else
                                    <span>@lang('sample.category')</span></h2>
                                @endif                                
                            </center>                          
                        </div>
                        <div class="card-footer">
                            <center>
                                <a href="{{ route('category_index' )}}" class="btn btn-primary">@lang('sample.more_info')</a>
                            </center>
                        </div>
                    </div>
                </div>          
            </div>
            
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
    <script>
      $("#save_change").click(function() {
            var category_name = $('#category_name').val();
            if(category_name == '' || category_name.trim() == ''){
                $.notify("This field name is required", "error");
            }else{
                $.ajax({
                    type: "POST",
                    url: "category/store",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'name': category_name
                    },
                    dataType: "json",
                    success: function(data){
                        $.notify("Category created succesfully", "success");
                        $('#category_name').val('');
                    },
                    failure: function(errMsg) {
                        alert(errMsg);
                    }
                });
            };
      });
    </script>
@endsection