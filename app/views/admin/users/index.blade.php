@extends('admin._layout.admin')

@section('content')
        <div class="header-link-box">
            <div class="heading">USERS</div>
            <div class="link">{{link_to_route('admin.users.create','Add a new user')}}</div>
        </div>
            
        @if(count($users)>0)
        <div class="table-box">
            <table>
                <thead>
                    <tr style="text-align:left;">
                        <th>User Name</th><th>Email</th><th></th>
                    </tr>
                </thead>
                @foreach($users as $user)
                    
                    <tr>
                        <td name="username" style="padding-right:15px;width:120px;">{{$user->username}}</td>
                        <td style="padding-right:15px;">{{$user->email}}</td>
                        <td class="butcol">
            
                            {{link_to_route('admin.users.edit','Edit',array($user->id),array('class'=>'buttons'))}}
                            {{ Form::open(array('route'=>array('admin.users.destroy',$user->id), 'method'=>'delete','class'=>'del-butt-form')) }}
                            {{ Form::submit('Delete',array('class'=>'buttons del-button')) }}
                            {{ Form::close() }}
          
                        </td>
                    </tr>
                        
                @endforeach
                
                
            </table>    
        </div>
        @else
            <h2>No Users Found</h2>
        @endif
        
        <script>
            $(document).ready(function(){
            
                $(document).on('submit',function(){
                    return confirm('Are you sure delete this entery?')
                });
                
                 $("table").dataTable({
                    "columnDefs":
                    [
                        {"orderable":false,"targets":2}
                    ]
                });
            });
        </script>
    
@stop