@extends('admin._layout.admin')

@section('content')
<style>
    .form
    {
        width:90%;
    }
</style>
<h2>Add you text block below</h2>
<div>
{{Form::open(array('route'=>array('admin.blocks'),'method'=>'post','class'=>'form'))}}
@include('admin._blocks.blocks_form')
<div style="margin:10px 0px 0px 0px;">
{{Form::submit('Add Block',array('class'=>'button'))}}
{{Form::reset('Clean Form',array('class'=>'button'))}}
</div>
{{Form::close()}}
</div>

@stop
