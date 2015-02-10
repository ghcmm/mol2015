@extends('admin._layout.admin')

@section('content')
    <div class="box">
        <h2 style="margin-top:5px;padding:6px 10px;"> Welcome {{Auth::user()->username}}. You are now logged in</h2>
    </div>
    <br/>
    <br/>
    {{link_to_route('admin.users','Users Maintanance',null,array('class'=>'main_menu'))}}
    {{link_to_route('admin.services','Services Maintanance',null,array('class'=>'main_menu'))}}
    {{link_to_route('admin.categories','Categories Maintanance',null,array('class'=>'main_menu'))}}
    {{link_to_route('admin.blocks','Blocks Maintanance',null,array('class'=>'main_menu'))}}
   
    
@stop