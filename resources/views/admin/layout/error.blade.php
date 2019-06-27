<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}}</title>   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('admin_asset/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/css/app.v2.css')}}" type="text/css" />
   
 </head>

<body>
    <!-- header -->
    <!-- header -->  <!-- header end -->
    
    <!-- nav -->

    <!-- / nav -->
  @yield('content')
    <!-- footer -->
    @include('admin.include.footer') <!-- / footer --> <!-- Bootstrap --> <!-- app --> <script src="{{asset('js/app.v2.js')}}"></script></body>

</html>