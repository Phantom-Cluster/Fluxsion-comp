$(window).scroll(function(){
       var wScroll = $(this).scrollTop();
        
        $('.header').css({
           'transform' : 'translate(0px, '+wScroll/1.5 +'px)' 
        });
    
        $('.logo-text').css({
           'transform' : 'translate(0px, -'+wScroll/2.8 +'px)' 
        });
                
        $('.logo-sub').css({
           'transform' : 'translate(0px, -'+wScroll/3.8 +'px)' 
        });
        
        $('.header-img').css({
           'transform' : 'translate(0px, -'+wScroll/3.8 +'px)' 
        });
        
        $('.logoowse').css({
           'transform' : 'translate(0px, -'+wScroll/5.8 +'px)' 
        });
    
        $('.logo-but-left').css({
           'transform' : 'translate( -'+wScroll/3.5 +'px, 0px)' 
        });
    
        $('.logo-but-right').css({
           'transform' : 'translate( '+wScroll/3.5 +'px, 0px)' 
        });
        
    });
    