<header>
    <div id="logo" style="display:inline-block">
	<h1>Maries</h1>
	
    </div>
    <div style="display:inline-block;">
	<h1 style="font-family:Arimo !important;padding:0px 0px 0px 25px;">Dashboard</h1>
    </div>
</header>
    
 
    <div>
	<nav>
	    @if(Auth::check())
	    {{link_to_route('admin.home','Main Menu')}}
	    {{link_to_route('admin.users.index','Users')}}
	    {{link_to_route('admin.services.index','Services')}}
	    {{link_to_route('admin.categories.index','Categories')}}
	    {{link_to_route('admin.blocks','Blocks')}}
	    {{link_to_route('admin.logout','Logout')}}
	    @endif
	</nav>
	
    </div>
  