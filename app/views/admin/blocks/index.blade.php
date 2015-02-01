@extends('admin._layout.admin')

@section('content')
<style>
    th{text-align:left}
    td{padding-right:20px;}
    td{border-top:1px solid #600;} 
    
</style>
    <h2 style="display:inline-block;margin-right:15px;">Available Display Blocks</h2>
        {{link_to_route('admin.blocks.create','Add a new Display Block',NULL,array('class'=>'buttons'))}}
    
@if(count($blocks)>0)
    <table>
        <tr><th>Block Name</th><th>Block Contents</th><th>Visable</th><th></th><th></th></tr>
        @foreach($blocks as $block) 
            <tr>
                <td>{{link_to_route('admin.blocks.show',$block->block_title,$block->id)}}</td>
                <td>{{{$block->block_text}}}</td>
                <td>
                @if($block->block_active==1)
                    {{'Yes'}}
                @else
                    {{'No'}}
                @endif
                </td>
                
                <td>
                    {{link_to_route('admin.blocks.edit','Edit',array($block->id),array('class'=>'buttons'))}}
                </td>
                <td>
                    
                    {{ Form::open(array('route'=>array('admin.blocks.destroy',$block->id), 'method'=>'delete')) }}
                    {{ Form::submit('Delete',array('class'=>'buttons')) }}
                    {{ Form::close() }}
                </td>
                    
            </tr>
        @endforeach
    </table>
@else
    <h2>No Blocks found</h2>
@endif

@stop