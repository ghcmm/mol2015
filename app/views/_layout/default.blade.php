<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$data->header}} Maries of Ludlow</title>
    {{ HTML::style('css/main.css') }}
    {{ HTML::script('libs/js/jquery-1.10.1.min.js')}}
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
   
<body>
    @include('_blocks.header')

    @yield('content')
   
    @if ($data->title=="Home page")
        @include('_blocks.footer')
    @endif

</body>
</html>