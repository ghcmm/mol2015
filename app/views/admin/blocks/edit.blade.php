@extends('admin._layout.admin')

@section('content')
<style>
.form
{
    width:90%;
}
</style>

<h2>Edit Block</h2>
<div>
{{Form::model($block,array('route'=>array('admin.blocks.update',$block->id),'method'=>'put','class'=>'form'))}}
@include('admin._blocks.blocks_form')
<div style="margin:10px 0px 0px 0px;">
{{Form::submit('Update Block',array('class'=>'button'))}}
{{Form::reset('Clean Form',array('class'=>'button'))}}
</div>
{{Form::close()}}
</div>
@stop