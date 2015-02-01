@extends('_layout.default')

@section('content')
    <main>
        <article>
            <h1 class="title">Our Services</h1>
            <p>Below is a list of our services and with prices. If what your are looking for is not listed, please do not hesitate to contacts us with your requirements.</p>   
            <div class="services" style="margin-left:25px;">
                
                <?php $maincat=0; $subcat=0; ?>
                
                @foreach($services as $service)
                @if ($service->cat_id<>$maincat)
                    <?php $maincat=$service->cat_id; ?>
                    <h2 class="title" style="margin:25px 0px 5px 0px;">{{$service->cats->name}}</h2>
                @endif
                
                @if ($service->subcat_id<>$subcat)
                    @if($service->subcat_id!=0)
                        <?php $subcat=$service->subcat_id; ?>
                        <h3 class="title" style="margin:10px 0px 5px 30px;">{{$service->subcats->name}}</h3>
                    @else
                        <?php $subcat=0; ?>
                    @endif
                @endif
                
                    <span style="display:inline-block;margin-left:60px;width:200px;">{{$service->service_name}}</span>
                    <span>£</span>
                    <span style="display:inline-block;width:60px;text-align:right;">{{number_format($service->price,2)}}</span>
                    <br/>
               @endforeach 
            </div>
        </article>
    </main>
@stop
