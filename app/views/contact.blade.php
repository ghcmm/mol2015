@extends('_layout.default')

@section('content')
    <main>
        <div style="float:left;">
            
            {{Form::open(array('route'=>array('form.validation'),'method'=>'put','class'=>'form','id'=>'contact'))}}
            
            @include('_blocks.form')
            
            {{Form::close()}}
        </div>
        <article class="contactus" style="margin-left:420px;">
            <h2 class="title">How to contact</h2>
            <p>You can contact Marie on any of the following. If you prefer you can also contact Marie by filling out the online form on the left of this page</p>
            <div style="text-align: center">
            <br/>	
                    <h2 class="title">TELEPHONE:</h2>
                    <h2>01584 318185</h2>
                <br/>
                <br/>
                    <h2 class="title">MOBILE:</h2>
                    <h2>07967 447935</h2>

                <br/>
                <br/>

                    <h2 class="title">EMAIL ADDRESS:</h2>
                    <h2><a href="mailto:marie@mariesofludlow.co.uk">marie@mariesofludlow.co.uk</a></h2>
                <br/>
                <br/>
                    <h2 class="title">ADDRESS:</h2>
                    <h2>
                        Maries<br/>
                        The Stables<br/>
                        Station Drive<br/>
                        Ludlow<br/>
                        Shropshire SY8 2PG<br/>
                        <br/>
                        <span style="font-size:.7em;">( You can find us next door to Aldis)</span><br/>
                </h2>

            </div>
        </article>
    </main>
    
@stop
