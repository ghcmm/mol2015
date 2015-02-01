@extends('admin._layout.admin')
<style>
    .main_menu
    {
        font-size:20px;
        text-decoration:none;
        background-color:#600;
        color:#fff;
        padding:5px 25px;
        border-radius:10px;
        display:block;
        position:realtive;
        width:350px;
        text-align:center;
        margin:5px auto;
    }
    
    main
    {
        text-align:center;
    }
</style>
@section('content')
    <h1>Website Back Office</h1>
        <h2 style="margin-top:15px;"> Welcome {{Auth::user()->username}}. You are now logged in</h2>
            <br/>
            <br/>
            {{link_to_route('admin.users','Users Maintanance',null,array('class'=>'main_menu'))}}
            {{link_to_route('admin.services','Services Maintanance',null,array('class'=>'main_menu'))}}
            {{link_to_route('admin.categories','Categories Maintanance',null,array('class'=>'main_menu'))}}
            {{link_to_route('admin.blocks','Blocks Maintanance',null,array('class'=>'main_menu'))}}
   
    
@stop