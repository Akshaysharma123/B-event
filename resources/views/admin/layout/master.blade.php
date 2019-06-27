<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}}</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('admin_asset/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/css/app.v2.css')}}" type="text/css" />
     <link rel="stylesheet" href="{{asset('admin_asset/css/toastr.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin_asset/css/custom.css')}}" type="text/css" />
    @yield('externalcss')
 </head>

<body>
    <!-- header -->
   @include('admin.include.header')
    <!-- nav -->
    @include('admin.include.sidebar')
    <!-- / nav -->
  @yield('content')
    <!-- footer -->
    @include('admin.include.footer')
    <a href="#" class="hide slide-nav-block" data-toggle="class:slide-nav slide-nav-left" data-target="body"></a>
   
    <script src="{{asset('admin_asset/js/app.v2.js')}}"></script>
    
    <script src="{{asset('admin_asset/js/datepicker/bootstrap-datepicker.js')}}"></script> 
    <script src="{{asset('admin_asset/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/toastr.min.js')}}"></script>  
    <script src="{{asset('admin_asset/js/jquery.uploadPreview.js')}}"></script>
    @yield('externaljs')   
    <script src="{{asset('admin_asset/js/custom.js')}}"></script>
   </body>

</html>