@extends('admin._layout.admin')

@section('content')

    
     <div class="green-box" style="width:90%;margin:100px auto 0px  auto;">
        {{Form::model($block,array('route'=>array('admin.blocks.update',$block->id),'method'=>'put','class'=>'form'))}}
        <h2>Edit Block</h2>
        @include('admin._blocks.blocks_form')
        <div style="margin:10px 0px 0px 0px;">
        {{Form::submit('Update Block',array('class'=>'button'))}}
        {{Form::reset('Clean Form',array('class'=>'button'))}}
        </div>
        {{Form::close()}}
    </div>
@stop