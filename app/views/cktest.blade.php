@extends('_layout.default')

@section('content')
    
    
    
    <h2>CK Editor</h2>
        
    {{Form::label('lastname','Last Name * '.$errors->first('lastname','Required'))}}
    {{Form::text('lastname',null,array('size'=>26))}}<br/>
    
    
    {{Form::label('address','Address')}}
    
    {{Form::textarea('address',null,array('rows'=>5,'cols'=>40,'class'=>'ckeditor'))}}
   
    <div> 
        {{ Form::submit('Submit your message',array('class'=>'button'))}}
        {{ Form::reset('Clear form',array('class'=>'button'))}}
    </div>
@stop