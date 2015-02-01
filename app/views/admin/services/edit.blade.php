@extends('admin._layout.admin')

@section('content')
    
    <div style="float:right;vertical-align:top;">
      
        {{Form::model($service,array('route'=>array('admin.services.update',$service->id),'method'=>'put','class'=>'form'))}}
        
        <h2>Edit Service</h2>
        
        @include('admin._blocks.services_form')
        
        <div style="margin-top:10px;">
            {{Form::submit('Update',array('class'=>'button'))}}
        </div>
        
        {{Form::close()}}
    
    </div>
    
@foreach ($cats_list as $key=>$cat)
{{$cat}} : {{$key}}<br/>
@endforeach

<h2>Services</h2>

<br/><br/>
{{$service->service}} : £{{$service->price}}<br/>
{{var_dump($service->cats)}}


@stop