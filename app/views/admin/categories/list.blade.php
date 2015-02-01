@extends('admin._layout.admin')

@section('content')
    
    <div>
        <div style="margin-bottom:15px;">
            <h2 style="display:inline-block;margin-right:15px;">Available Categories</h2>
            {{link_to_route('admin.categories.create','Add a category',null,array('class'=>'buttons'))}}
        </div>
        <table>
        @foreach($cats as $cat)
            <tr>
                <td style="padding-right:15px;">{{$cat->name}}</td>
                <td>
                    {{link_to_route('admin.categories.edit','Edit',array($cat->id),array('class'=>'buttons'))}}
                </td>
                <td>
                    
                    {{ Form::open(array('route'=>array('admin.categories.destroy',$cat->id), 'method'=>'delete')) }}
                    {{ Form::submit('Delete',array('class'=>'buttons')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    
   
@stop