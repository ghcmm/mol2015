@extends('admin._layout.admin')

@section('content')
 
 <div class="green-box" style="width:200px;margin:100px auto 0px auto;">
    
    {{Form::open(array('route'=>'admin.login.post'))}}
    <h2>Please Login</h2><br/>
    {{Form::label('username','User Name')}}
    @if($errors->first('username'))
        {{$errors->first('username').'<br/>'}}
    @endif
    {{Form::text('username')}}
    {{Form::label('password','Password')}}
    @if($errors->first('password'))
        {{$errors->first('password').'<br/>'}}
    @endif
    {{Form::password('password')}}
    <br/><br/>
    {{Form::submit('Log in',array('style'=>'width:100%'))}}
    {{Form::close()}}
 </div> 


@stop