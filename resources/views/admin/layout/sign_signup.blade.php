
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('admin_asset/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/css/custom.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin_asset/css/app.v2.css')}}" type="text/css" />
   </head>

<body >
   @yield('content')
    <footer id="footer">
        <div class="text-center padder clearfix">
            <p> <small>&copy; {{env('APP_NAME')}}</small>
            </p>
        </div>
    </footer> <!-- / footer -->
    <!-- Bootstrap -->
    <!-- app -->
    <script src="{{asset('admin_asset/js/app.v2.js')}}"></script>
    <script src="{{asset('admin_asset/js/jquery.validate.min.js')}}"></script>    
    <script src="{{asset('admin_asset/js/custom.js')}}"></script>
</body>

</html>