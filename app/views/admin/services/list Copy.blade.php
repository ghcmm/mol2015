@extends('admin._layout.admin')

@section('content') 
        <div class="header-link-box">
            <div class="heading">SERVICES</div>
            <div class="link">{{link_to_route('admin.services.create','Add a new service')}}</div>
        </div>

        @if(count($services)>0) 
        <div class="table-box">
            <table>
                <tr style="text-align:left"><th>Service</th><th>Price</th><th>Main Category</th><th>Sub Category</th></tr>
                @foreach($services as $service)
                    <tr>
                        <td style="padding-right:15px;">{{$service->service_name}}</td>
                        <td style="padding-right:15px;text-align:right">£{{number_format($service->price,2)}}</td>
                        <td style="padding-right:15px;">{{$service->cats->name}}</td>
                        @if($service->subcats['id']>0)
                            <td style="padding-right:15px;">{{$service->subcats->name}}</td>
                        @else
                            <td style="padding-right:15px;">Not set</td>
                        @endif     
                        <td class="butcol">
                            {{link_to_route('admin.services.edit','Edit',array($service->id),array('class'=>'buttons'))}}
                            
                            {{ Form::open(array('route'=>array('admin.services.destroy',$service->id), 'method'=>'delete','class'=>'del-butt-form')) }}
                            {{ Form::submit('Delete',array('class'=>'del-button')) }}
                            {{ Form::close() }}
                        </td>
            
                    </tr>
                @endforeach
            </table>
        </div>
        @else
            <h2>No services Found</h2>
        @endif
        
        
        <script>
            $(document).on('submit',function(){
                return confirm('Are you sure delete this entery?');
            });
        </script>
@stop