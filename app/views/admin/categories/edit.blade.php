@extends('admin._layout.admin')

@section('content')
    
   <div class="green-box" style="width:350px;margin:100px auto 0px  auto;">
      
        {{Form::model($category,array('route'=>array('admin.categories.update',$category->id),'method'=>'put','class'=>'form'))}}
        
        <h2>Edit Service</h2>
    
        @include('admin._blocks.cats_form')
        
        <div style="margin-top:10px;">
            {{Form::submit('Update',array('class'=>'button'))}}
        </div>
        
        {{Form::close()}}
    
    </div>
@stop