@extends('_layout.default')

@section('content')
    <main>
        {{ HTML::image('images/logo/shop512x579_drawing2.png','Mareis of Ludlow', array('class'=>'logo1')) }}
        <div>
            <article id="textbox" style="text-align: center;padding:25px 0px 0px 0px;margin-left:350px;">
                <p>	
                    <h2 class="title" style="padding-bottom:0px;margin-bottom:0px;">Welcome to Maries of Ludlow</h2>
                    <p style="margin:0px;font-size:1.3em;font-weight:bold;">Clothing alteration services and Haberdashery  in Ludlow and  the surrounding areas.</p>
                </p>
                @if(count($blocks)>0)
                    @foreach($blocks as $block)
                    <div class="display_block" style="margin:0px 0px 5px 0px;">
                        {{$block->block_text;}}    
                    </div>
                    @endforeach
                @endif
                <p>
                    <h3>Monday to Friday</h3>
                    <h2>9.15am to 5.00pm</h2>
                    <h3>Saturday</h3>
                    <h2>10.00am to 4.00pm</h2>
                </p>
                <br/>
            </article>
        </div>
    </main>
    
@stop
