@extends('admin._layout.admin')

@section('content')
    
    <div>  
        {{Form::open(array('route'=>array('admin.services'),'method'=>'post','class'=>'form'))}}
        
        <h2>Add a new Service</h2>
        
        @include('admin._blocks.services_form')
        
        <div style="margin-top:10px;">
            {{Form::submit('Add New Service',array('class'=>'button'))}}
        </div>
        
        {{Form::close()}}
    
    </div>
    </div>
    
    
        
@stop