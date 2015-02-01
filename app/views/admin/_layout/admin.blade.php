<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Admin - Maries of Ludlow </title>
        
    {{ HTML::style('css/main.css') }}
    {{ HTML::script('libs/js/jquery-1.10.1.min.js')}}
    {{ HTML::script('libs/js/page.js')}}
    {{ HTML::script('ckeditor/ckeditor.js')}}
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    {{HTML::script('libs/js/page.js')}}
</head>
<body>
@include('admin._blocks.header')

<main id="main">
    @yield('content')
</main>

@include('_blocks.footer')

</body>
</html>