$(document).load(function(){setPage();});
$(document).ready(function(){  
       
        setPage();
        if(navigator.userAgent.match(/msie/i))
        {
                $('head').append('<style>header h1,.title{font-family:maries_eot;}</style>');
        }
});
$(window).resize(function(){setPage();});

function setPage(){
        var hh=$('header').height();
        var wh=$(window).height();
        var fh=$('footer').height();
        var boxHeight=wh-(hh+fh+70);
        $('main').css('height',boxHeight+'px');
};