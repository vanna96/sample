<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('logo01.png')}}">
    <title>Sample</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/extents/links/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/extents/links/css/animate.min.css')}}">
    <script src="{{asset('extents/links/script/db552c2642.js')}}"></script>
    <link href="{{asset('/extents/links/css/select2.min.css')}}" rel="stylesheet" />

    <!-- select2-bootstrap4-theme -->
    <link href="{{asset('/extents/links/css/select2-bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new/css/main.css')}}">
    @if (App::isLocale('en'))
    @else
      <style type="text/css">
          /* @font-face {
              font-family: KhmerOS !important;
              src: url('{{ asset("cambodianfonts/Unicode/KhmerOS/KhmerOS.ttf") }}');
          } */
      </style>
    @endif
    
    @yield('style')
  </head>
  <body>
    @yield('content')
    <!-- Optional JavaScript -->

    <script src="{{asset('new/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('extents/links/script/jquery.min.js')}}"></script>
    <script src="{{asset('extents/links/script/popper.min.js')}}"></script>
    <script src="{{asset('extents/links/script/bootstrap.min.js')}}"></script>
    <script src="{{asset('extents/links/script/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('new/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('new/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('new/js/nouislider.min.js')}}"></script>
    <script src="{{asset('new/js/jquery.magnific-popup.min.js')}}"></script>    
    <script src="{{asset('extents/links/script/select2.min.js')}}"></script>
    <script src="{{asset('new/js/main.js')}}"></script>
    <script>
        $('select').each(function () {
            $(this).select2({
                theme: 'bootstrap4',
                width: 'style',
                height:'auto',
                placeholder: $(this).attr('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        });
        // save change click modal
        $('#save_change').click(function(){
            var categoryModalvalue = $('#categoryModalId').val();
            if (categoryModalvalue == '' && categoryModalvalue.trim() == '') {
                $('#categoryModalId').css('border-color', 'red');
                $.notify({
                    // options
                    title: "<strong>@lang('sample.error')</strong>",
                    message: "<br>@lang('sample.category') @lang('sample.required_input')",
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
                    type: "post",
                    url: "{{ url('category/ajax') }}",
                    data: {
                        name: categoryModalvalue,
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.message == 1) {
                            $('#close_modal').trigger( "click" );
                            $('#categoryModalId').val('');
                            $('#category_selected').append('<option value='+response.data.id+' selected>'+response.data.name+'</option>');
                            $.notify({
                                // options
                                title: "<strong>@lang('sample.success')</strong>",
                                message: "<br>@lang('sample.successfully')",
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
                                z_index: 9999,
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
                        }else if(response.message == 0){
                            $.notify({
                                // options
                                title: "<strong>@lang('sample.whoop')</strong>",
                                message: "<br>@lang('sample.already_exist')",
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
                                z_index: 9999,
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
                            $('#category_selected').val(response.data.id).trigger('change');
                            $('#close_modal').trigger( "click" );
                        }else{
                            $.notify({
                                // options
                                title: "<strong>@lang('sample.whoop')</strong>",
                                message: "<br>@lang('sample.len')",
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
                                z_index: 9999,
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
    @stack('script')
  </body>
</html>