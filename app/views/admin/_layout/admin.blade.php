<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin - Maries of Ludlow </title>
    {{ HTML::style('css/admin.css') }}
    {{ HTML::style('css/jquery.dataTables.css')}}
    {{ HTML::script('libs/js/jquery-1.10.1.min.js')}}
    {{ HTML::script('libs/js/jquery.dataTables.min.js')}}
    {{ HTML::script('ckeditor/ckeditor.js')}}
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
@include('admin._blocks.header')

<main id="main">
    @yield('content')
</main>

</body>
</html>