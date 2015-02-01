<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Maries of Ludlow </title>
        
    {{ HTML::style('css/main.css') }}
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
	$(document).load(function(){setPage();});
	$(document).ready(function(){
		setPage();
		if(navigator.userAgent.match(/msie/i))
		{
			$('head').append('<style>header h1,.title{font-family:maries_eot;}</style>');
		}
	});
	$(window).resize(function(){setPage();});
	
	function setPage(){
		var hh=$('#header').height();
		var wh=$(window).height();
		var fh=$('footer').height();
		var boxHeight=wh-(hh+fh+70);
		$("#main").css('height',boxHeight+'px');
	};
    </script>
</head>
<body>
@include('_particle.header')

<main class="container">
    @yield('content')
</main>

<footer>	
    <img src="http://www.mariesofludlow.co.uk/images/template/barogue_bl.png" height="80px" style="float:left" alt=""/>
    <img src="http://www.mariesofludlow.co.uk/images/template/barogue_br.png" height="80px" style="float:right" alt=""/>        <strong style="display:block;padding:35px 120px 0px 155px;font-size:0.8em;text-align: right;">
	&copy; 2012
	<a href="http://www.crusade-multimedia.co.uk" target="_blank")>Crusade Multimedia</a>
    </strong>
</footer>

</body>
</html>