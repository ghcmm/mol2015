@extends('admin._layout.admin')

@section('content')
    
    <div class="header-link-box">
        <div class="heading"> CATEGORIES</div>
        <div class="link">{{link_to_route('admin.categories.create','Add a category')}}</div>
    </div>
    
    @if(count($cats)>0)
    <div class="table-box">
        <table>
            <thead>
                <tr style="text-align:left"><th>Category Name</th></tr>
            </thead>
            @foreach($cats as $cat)
                <tr>
                    <td style="padding-right:15px;">{{$cat->name}}</td>
                    <td cass="butcol">
                        {{link_to_route('admin.categories.edit','Edit',array($cat->id),array('class'=>'buttons'))}}
                        
                        {{ Form::open(array('route'=>array('admin.categories.destroy',$cat->id), 'method'=>'delete','class'=>'del-butt-form')) }}
                        {{ Form::submit('Delete',array('class'=>'del-button')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
        
    @else
        <h2>No Categories Found</h2>
    @endif
    
     <script>
            $(document).ready(function(){
            
                $(document).on('submit',function(){
                    return confirm('Are you sure delete this entery?')
                });
                
                 $("table").dataTable({
                    "columnDefs":
                    [
                        {"orderable":false,"targets":1}
                    ]
                });
            });   
    </script>
@stop