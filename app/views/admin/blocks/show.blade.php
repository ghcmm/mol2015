@extends('admin._layout.admin')

@section('content')
    <h1>Display Block Preview</h1>
        <br>
    <h2 style="font-weight:normal">Block Name : {{'<strong>'.$block->block_title.'</strong>'}}</h2>
    <div class="display_block">
        {{$block->block_text}}
    </div>
    
@stop