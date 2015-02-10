@extends('admin._layout.admin')

@section('content')

    <div class="green-box" style="width:90%;margin:100px auto 0px  auto;">

        {{Form::open(array('route'=>array('admin.blocks'),'method'=>'post','class'=>'form'))}}
        <h2>Add you text block below</h2>
        @include('admin._blocks.blocks_form')
        
        {{Form::submit('Add Block',array('class'=>'button'))}}
        {{Form::reset('Clean Form',array('class'=>'button'))}}
    
        {{Form::close()}}
    </div>

@stop
