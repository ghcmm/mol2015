@extends('admin._layout.admin')

@section('content')
   
    
    <div class="green-box" style="width:350px;margin:100px auto 0px  auto;">
        {{Form::open(array('route'=>array('admin.users'),'method'=>'post','class'=>'form'))}}
        
        <h2>Create a  Users Account</h2>
        
        @include('admin._blocks.users_form')
        
        {{Form::submit('Add user',array('class'=>'button'))}}
        {{Form::close()}}
    </div>
    
@stop