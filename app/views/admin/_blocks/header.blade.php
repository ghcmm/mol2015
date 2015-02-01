<header>
    <img src="http://www.mariesofludlow.co.uk/images/template/barogue_tl.png" height="80px" style="float:left" alt=""/>
    <img src="http://www.mariesofludlow.co.uk/images/template/barogue_tr.png" height="80px" style="float:right" alt=""/>
    <div id="logo" align="center">
	<img src="http://www.mariesofludlow.co.uk/images/template/logo.png" height="80px" alt=""/>
	<h1 style="display:inline;">Maries of Ludlow</h1>
    </div>
    @if(Auth::check())
    <div>
	<span id="navbaroque" ">
	    <img src="http://www.mariesofludlow.co.uk/images/template/baroque_small_left.png" style="float:left;margin-right:35px" alt=""/>
	    <img src="http://www.mariesofludlow.co.uk/images/template/baroque_small_right.png" style="float:right" alt=""/>
	</span>
	<nav>
	
	
	    {{link_to_route('admin.home','Main Menu')}}
	    {{link_to_route('admin.users.index','Users')}}
	    {{link_to_route('admin.services.index','Services')}}
	    {{link_to_route('admin.categories.index','Categories')}}
	    {{link_to_route('admin.blocks','Blocks')}}
	    {{link_to_route('admin.logout','Logout')}}
	</nav>
	
    </div>
    @endif
    <script>
	$(document).ready(function(){setLayout();});
	$(window).resize(function(){setLayout();});
	function setLayout(){
	    var hh=$('header').height();
	    var fh=$('footer').height();
	    var iw=$("logo1").width();
	    $('#textbox').css('margin-left',iw+'px');
	};
    </script>
	
</header>
    
