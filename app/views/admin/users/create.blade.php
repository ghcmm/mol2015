@extends('admin._layout.admin')

@section('content')
    <h1>Create a  Users Account</h1>
        
    {{Form::open(array('route'=>array('admin.users'),'method'=>'post','class'=>'form'))}}
   
    @include('admin._blocks.users_form')
    
    
    {{Form::submit('Add user',array('class'=>'button'))}}
    {{Form::close()}}
    
@stop