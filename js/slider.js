$(function(){
    $('#header_nav').data('size','big');
});

$(window).scroll(function(){
    if($(document).scrollTop() > 0)
    {
        if($('#header_nav').data('size') == 'big')
        {
            $("#header_nav").css({
              "background-color":"white",
              "box-shadow":"rgba(0, 0, 0, 0.75) -5px 5px 26px -12px"
            });
            $('#header_nav').data('size','small');
            $('#header_nav').stop().animate({
                height:'12%'
            });
//            $(".navbar-brand img").animate({
//                "margin-top":"px"
//            },600);
//			$(".menu ul").animate({
//                "margin-top":"-10px"
//            },600);
            $("#header_nav").animate({
                "padding-top":"5px"
            },600);
             /*----------media query--Jquery-------*/
             if (window.matchMedia('(max-width: 1142px)').matches) {
                 
                $('#header_nav').stop().animate({
                    height:'14%',
                    "padding-top":"0.5%"
                },300);
            }
            if (window.matchMedia('(max-width: 700px)').matches) {
                 
                $('#header_nav').stop().animate({
                    height:'13%',
                    "padding-top":"1%"
                },300);
            }
            if (window.matchMedia('(max-width: 600px)').matches) {
                
                
                $('.burger-container').stop().animate({
                    "margin-top":"20%"
                },600);
            }
             if (window.matchMedia('(max-width: 530px)').matches) {
                 
                $('#header_nav').stop().animate({
                    "height":"15%",
                    "padding-top":"3%"
                },600);
                $('.burger-container').stop().animate({
                    "margin-top":"40%"
                },600);
            }
            if (window.matchMedia('(max-width: 515px)').matches) {
                
                $('#header_nav').stop().animate({
                   "height":"15%",
                   "padding-top":"3.5%"
                },600);
            }
            if (window.matchMedia('(max-width: 470px)').matches) {
                
                $('#header_nav').stop().animate({
                   "height":"14%",
                },600);
            }
            if (window.matchMedia('(max-width: 460px)').matches) {
                
                $('#header_nav').stop().animate({
//                   "height":"14%",
                   "padding-top":"4%"
                },600);
            }
            if (window.matchMedia('(max-width: 430px)').matches) {
                
                $('#header_nav').stop().animate({
                   "height":"12%",
                   "padding-top":"3%"
                },600);
            }
            if (window.matchMedia('(max-width: 414px)').matches) {
                
                $('#header_nav').stop().animate({
                   "height":"13%",
                   "padding-top":"5%"
                },600);
            }
//            if (window.matchMedia('(max-width: 530px)').matches) {
//
//                $('#header_nav').stop().animate({
//                    height:'11%',
//                    "padding-top":"0%"
//                },300);
//                $('.burger-container').stop().animate({
//                    "margin-top":"40%"
//                },300);
//            }
            
            $(".menu ul li a").css({
                "color":"#414146"
            });
        }
    }
    else
    {
        if($('#header_nav').data('size') == 'small')
        {  
            $(".menu ul li a").css({
                "color":"#414146"
            });
             $("ul.sub-menu li a").css({
                "color":"#414146"
            });
//            $(".navbar-brand img").animate({
//                "margin-top":"10px"
//            },600);
//			$(".menu ul").animate({
//                "margin-top":"0px"
//            },600);
            
            $("#header_nav").css({
              "background-color":"transparent",
              "box-shadow":"rgba(0, 0, 0, 0.75) -5px 5px 26px -12px"
            });
            $('#header_nav').data('size','big');
//            $('#header_nav').stop().animate({
//                height:'13%',
//                "padding-top":"1%"
//            },600);
            
            $('#header_nav').stop().animate({
                height:'11%',
                "padding-top":"0%"
            },600);
            
            /*----------media query--Jquery-------*/
            if (window.matchMedia('(max-width: 1142px)').matches) {
                 
                $('#header_nav').animate({
                    height:'12.5%',
                    "padding-top":"0%"
                },600);
            }
            if (window.matchMedia('(max-width: 700px)').matches) {
                 
                $('#header_nav').stop().animate({
                    height:'12%',
                    "padding-top":"0.5%"
                },600);
            }
            if (window.matchMedia('(max-width: 600px)').matches) {
                
                
                $('.burger-container').stop().animate({
                    "margin-top":"2%"
                },600);
            }
            if (window.matchMedia('(max-width: 530px)').matches) {
                $('#header_nav').stop().animate({
                   "height":"13%",
                    "padding-top":"0%"
                },600);
                
                $('.burger-container').stop().animate({
                    "margin-top":"10%"
                },600);
            }
            if (window.matchMedia('(max-width: 517px)').matches) {
                //Stucked with 517px and 515px(above)..to be contiuned from here - 18-12-17
                $('#header_nav').stop().animate({
                   "height":"12%",
                   "padding-top":"0.3%"
                },600);
            }
            if (window.matchMedia('(max-width: 460px)').matches) {
                
                $('#header_nav').stop().animate({
                   "height":"12%",
                   "padding-top":"1%"
                },600);
            }
            if (window.matchMedia('(max-width: 430px)').matches) {
                
                $('#header_nav').stop().animate({
                   "height":"12%",
                   "padding-top":"2%"
                },600);
            }
             if (window.matchMedia('(max-width: 426px)').matches) {
                
                $('#header_nav').stop().animate({
//                   "height":"11%",
//                   "padding-top":"1%"
                },600);
            }
           
            
        }  
    }
});

//////////////STUCKED AT 414PX