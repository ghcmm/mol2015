@extends('_layout.default')

@section('content')        
    <main>
        <img src="images/shop.jpg" alt="picture of shop" class="image-wrapper cream-faded-bg" style="float:left;width:350px;"/>
        <div style="margin-left:400px;">
            <article class="cream-faded-bg">
                <p>	
                    <h2 class="title" style="padding-bottom:0px;margin-bottom:0px;">Welcome to Maries of Ludlow</h2>
                    <p style="margin:0px;font-size:1.3em;font-weight:bold;">Clothing alteration services and Haberdashery  in Ludlow and  the surrounding areas.</p>
                </p>
                @if(count($blocks)>0)
                    @foreach($blocks as $block)
                    <div class="display_block">
                        {{$block->block_text;}}    
                    </div>
                    @endforeach
                @endif
                <div style="text-align: center;margin-top:15px;">
                    <h3>Our Opening hour are</h3><br/>
                    <h3>Monday to Friday</h3>
                    <h2>9.15am to 5.00pm</h2>
                        <br>
                    <h3>Saturday</h3>
                    <h2>10.00am to 4.00pm</h2>
                </div>
                <br/>
            </article>
        </div>
    </main>
    
@stop
