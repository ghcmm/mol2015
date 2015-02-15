@extends('_layout.default')

@section('content')        
    <main>
        <img src="images/shop.jpg" alt="picture of shop" class="image-wrapper cream-faded-bg" style="float:left;width:350px;"/>
        <div style="margin-left:400px;">
            <article class="cream-faded-bg">
                @if(count($blocks)>0)
                    @foreach($blocks as $block)
                        @if($block->notice==1)
                             <div class="display_block">
                        @else
                           <div style="margin:35px 0px;">
                        @endif
                            {{$block->block_text;}}    
                        </div>
                    @endforeach
                @endif
            </article>
        </div>
    </main>
    
@stop
