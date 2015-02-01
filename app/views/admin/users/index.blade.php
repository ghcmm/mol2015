@extends('admin._layout.admin')

@section('content')
    <h2 style="display:inline-block;margin-right:15px;">Users</h2>{{link_to_route('admin.users.create','Add a new user',NULL,array('class'=>'buttons'))}}
        
    @if(count($users)>0)
    <table>
        <tr style="text-align:left"><th>User Name</th><th>Email</th></tr>
        @foreach($users as $user)
            <tr>
                <td style="padding-right:15px;width:120px;">{{$user->username}}</td>
                <td style="padding-right:15px;">{{$user->email}}</td>
                <td>
    
                    {{link_to_route('admin.users.edit','Edit',array($user->id),array('class'=>'buttons'))}}

                    
                    {{ Form::open(array('route'=>array('admin.users.destroy',$user->id), 'method'=>'delete','style'=>'display:inline-block')) }}
                    {{ Form::submit('Delete',array('class'=>'buttons')) }}
                    {{ Form::close() }}
  
                </td>
            </tr>
        @endforeach
        
        
    </table>    
    
    
    @else
        <h2>No User Found</h2>
    @endif

    
@stop