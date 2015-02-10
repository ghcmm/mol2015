@extends('admin._layout.admin')

@section('content')
    
    <div class="green-box" style="width:350px;margin:100px auto 0px  auto;">
              
        <h2>Edit User</h2>
        
        {{Form::model($user,array('route'=>array('admin.users.update_username',$user->id),'method'=>'put','class'=>'form'))}}
        @include('admin._blocks.users_username_form')
        {{Form::submit('Update',array('class'=>'button'))}}
        {{Form::close()}}
        
        {{Form::model($user,array('route'=>array('admin.users.update_email',$user->id),'method'=>'put','class'=>'form'))}}
        @include('admin._blocks.users_email_form')
        {{Form::submit('Update',array('class'=>'button'))}}
        {{Form::close()}}
        
        {{Form::model($user,array('route'=>array('admin.users.update_password',$user->id),'method'=>'put','class'=>'form'))}}
        @include('admin._blocks.users_password_form')
        {{Form::submit('Update',array('class'=>'button'))}}
        {{Form::close()}}
        
    </div>
    
@stop