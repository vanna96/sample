<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/extents/links/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/extents/links/css/animate.min.css')}}">
    <script src="{{asset('extents/links/script/db552c2642.js')}}"></script>
    <link href="{{asset('/extents/links/css/select2.min.css')}}" rel="stylesheet" />

    <!-- select2-bootstrap4-theme -->
    <link href="{{asset('/extents/links/css/select2-bootstrap4.min.css')}}" rel="stylesheet">
    <title>Sample</title>
    <link rel="stylesheet" href="{{asset('extents/style.css')}}">
    @if (App::isLocale('en'))
    @else
      <style type="text/css">
          @font-face {
              font-family: KhmerOS !important;
              src: url('{{ asset("cambodianfonts/Unicode/KhmerOS/KhmerOS.ttf") }}');
          }
      </style>
    @endif
    
    @yield('style')
  </head>
  <body>
    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('extents/links/script/jquery.min.js')}}"></script>
    <script src="{{asset('extents/links/script/popper.min.js')}}"></script>
    <script src="{{asset('extents/links/script/bootstrap.min.js')}}"></script>
    <script src="{{asset('extents/links/script/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('extents/links/script/select2.min.js')}}"></script>
    <script>
      $(".alert-success").delay(2000).slideUp('slow');
      $(".danger_slideup").delay(2000).slideUp('slow');
      $('select').each(function () {
        $(this).select2({
          theme: 'bootstrap4',
          width: 'style',
          height:'auto',
          placeholder: $(this).attr('placeholder'),
          allowClear: Boolean($(this).data('allow-clear')),
        });
      });
    </script>
    @yield('script')
  </body>
</html>