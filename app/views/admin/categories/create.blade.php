@extends('admin._layout.admin')

@section('content')
    
    <div>
      
        {{Form::open(array('route'=>array('admin.categories.store'),'method'=>'post','class'=>'form'))}}
        
        <h2>Add a new Category</h2>
        
        @include('admin._blocks.cats_form')
        
        <div style="margin-top:10px;">
            {{Form::submit('Add New Category',array('class'=>'button'))}}
        </div>
        
        {{Form::close()}}
    </div> 
@stop