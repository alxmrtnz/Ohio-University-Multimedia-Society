$(document).ready(function(){


		var ua = navigator.userAgent.toLowerCase();
		var isAndroid = ua.indexOf("iPhone") > -1; //&& ua.indexOf("mobile");
		
		
		var isMobile = {
		    Android: function() {
		        return navigator.userAgent.match(/Android/i) ? true : false;
		    },
		    BlackBerry: function() {
		        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
		    },
		    iOS: function() {
		        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
		    },
		    Windows: function() {
		        return navigator.userAgent.match(/IEMobile/i) ? true : false;
		    },
		    any: function() {
		        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
		    }
		};
		
		if(isMobile.Android() || isMobile.BlackBerry() || isMobile.Windows()) {
			// Do something!
			// Redirect to Android-site?
			$('.three').addClass('greyBG');
			$('.five').addClass('greyBG');
			$('div.credit').css("color", "#ccc");
			$('div.credit a').css("color", "#ccc");
		}


        $('h1.title').delay( 300 ).fadeIn( 1000 );
        $('h2.subTitle').delay( 1300 ).fadeIn( 800 );
        $('.navItems').delay( 1300 ).fadeIn( 800 );
        $('.headerItems').delay( 1300 ).fadeIn( 800 );

    /*BEGIN PARALLAX EFFECT
                $('section[data-type="background"]').each(function(){
                    var $bgobj = $(this); // assigning the object

                    $(window).scroll(function() {
                        var yPos = -($(window).scrollTop() / $bgobj.data('speed'));

                        // Put together our final background position
                        var coords = '50% '+ yPos + 'px';

                        // Move the background
                        $bgobj.css({ backgroundPosition: coords });
                    });
                });

                $('section[data-type="BG"]').each(function(){
                    var $bgobj = $(this); // assigning the object

                    $(window).scroll(function() {
                        var yPos = -($(window).scrollTop() / $bgobj.data('speed')) + 300;

                        // Put together our final background position
                        var coords = '50% '+ yPos + 'px';

                        // Move the background
                        $bgobj.css({ backgroundPosition: coords });
                    });
                });

                $('section[data-type="BG3"]').each(function(){
                    var $bgobj = $(this); // assigning the object

                    $(window).scroll(function() {
                        var awesome = $('.five').offset().top;
                        console.log(awesome);
                        var yPos = -(($(window).scrollTop() / $bgobj.data('speed'))) + (awesome/5);

                        // Put together our final background position
                        var coords = '50% '+ yPos + 'px';

                        // Move the background
                        $bgobj.css({ backgroundPosition: coords });
                    });
                });
                

                END PARALLAX EFFECT*/
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                var navFlag = 1;
                var anchor_offset = 200;
                var navBar = $('.stickyBG');
                var logo = $('.title2');
                var logoClick = $('.clicky');
                var mobileMenu = $('.mobileNavItems');

                $(logoClick).click(function() {
                    $('html, body').animate({scrollTop:0}, 1000);

                });

                $(".whatIsOUMS").click(function() {
                    $('html, body').animate({
                        scrollTop: $(".two").offset().top
                    }, 1000);
                });

                $(".whatWeDo").click(function() {
                    $('html, body').animate({
                        scrollTop: $(".three").offset().top
                    }, 1000);
                });

                $(".whoWeAre").click(function() {
                    $('html, body').animate({
                        scrollTop: $(".four").offset().top
                    }, 1000);
                });

                $(".contact").click(function() {
                    $('html, body').animate({
                        scrollTop: $(".five").offset().top
                    }, 1000);
                });

                $(".contactInfoButton").click(function() {
                    $('html, body').animate({
                        scrollTop: $(".five").offset().top
                    }, 1000);
                });

                $(window).on('scroll', function() {
                    if ( $(window).scrollTop() > anchor_offset ){
                        $(navBar).show().stop().animate({ top: 0}, 100);
                        $(logo).show().stop().animate({ top: 0}, 100);
                    }
                    if ( $(window).scrollTop() < anchor_offset ){

                        $(navBar).animate({ top: -75}, 100, function() {
                            $(this).hide();
                        });
                        $(logo).animate({ top: -75}, 100, function() {
                            $(this).hide();
                        });
                    }

                });

                /*$('h1.title').one("mouseenter mouseleave", function(){
	                	$(this).ClassyWiggle('start');
	                	setTimeout(function(){$('h1.title').ClassyWiggle('stop');}, 400);
	                	
		          });*/
		           var mobileFlag = 1;
		          
		        
                $(".mobileNavActivator").click(function() {
                    $(this).toggleClass('navActive');
                    if(mobileFlag == 1){
	                    $(mobileMenu).show().stop().animate({ top: -17}, 300);
	                    mobileFlag = 2;
                    } else{
	                    $(mobileMenu).animate({ top: -480}, 300, function() {
                            $(this).hide();
                        });
                        mobileFlag = 1;
                    }
                    
                });
                
                $('.mobileNavItems li').click(function(){
                $('.mobileNavActivator').toggleClass('navActive');
                	$(mobileMenu).animate({ top: -480}, 300, function() {
                            $(this).hide();
                        });
                        mobileFlag = 1;
                });
                
                $('.clicky').click(function(){
                	if(mobileFlag == 2){
                		$('.mobileNavActivator').removeClass('navActive');
	                    $(mobileMenu).animate({ top: -480}, 300, function() {
                            $(this).hide();
                        });
                        mobileFlag = 1;
                    }

                });



            });