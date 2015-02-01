@extends('admin._layout.admin')

@section('content') 
    <div>
    
        <div>
            <h2 style="display:inline-block;margin-right:15px;">Available Services</h2>
            {{link_to_route('admin.services.create','Add a new service',NULL,array('class'=>'buttons'))}}
        </div>
        <br/>
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
                    <td>
                        {{link_to_route('admin.services.edit','Edit',array($service->id),array('class'=>'buttons'))}}
                    </td>
                    <td>
                        
                        {{ Form::open(array('route'=>array('admin.services.destroy',$service->id), 'method'=>'delete')) }}
                        {{ Form::submit('Delete',array('class'=>'buttons')) }}
                        {{ Form::close() }}
                    </td>
        
                </tr>
            @endforeach
        </table>
    </div>
        
@stop