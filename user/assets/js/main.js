/*=====================================================
Template Name   : Gifto
Description     : Gifts Shop HTML5 Template
Author          : Themesland
Version         : 1.0
=======================================================*/


(function ($) {
    
    "use strict";

    // preloader
    $(window).on('load', function () {
        $(".preloader").fadeOut("slow");
    });


    // navbar fixed top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass("fixed-top");
        } else {
            $('.navbar').removeClass("fixed-top");
        }
    });


    // category all 
    $('.category-btn').on('click',function(){
        $(".main-category").toggle();
    });


    // header Search
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function () {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function () {
            $('body').removeClass('search-active');
        });
    }


    // multi level dropdown menu
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass('show');
        });
        return false;
    });

    // navbar dropdown-right
    $(window).resize(function() {
        let ndr = $('.navbar-nav .nav-item.dropdown').slice(-2);
        if ($(window).width() > 991 && $(window).width() < 1199){
            ndr.addClass("dropdown-right");
        }else{
            ndr.removeClass("dropdown-right");
        }
    });
    


    // data-background    
    $(document).on('ready', function () {
        $("[data-background]").each(function () {
            $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
        });
    });


    // wow init
    new WOW().init();


    // hero slider
    $('.hero-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        margin: 0,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        items: 1,
        navText: [
            "<i class='far fa-angle-left'></i>",
            "<i class='far fa-angle-right'></i>"
        ],

        onInitialized: function(event) {
        var $firstAnimatingElements = $('.hero-slider .owl-item').eq(event.item.index).find("[data-animation]");
        doAnimations($firstAnimatingElements);
        },

        onChanged: function(event){
        var $firstAnimatingElements = $('.hero-slider .owl-item').eq(event.item.index).find("[data-animation]");
        doAnimations($firstAnimatingElements);
        }
    });

    //hero slider do animations
    function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationDuration = $this.data('duration');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay,
                'animation-duration': $animationDuration,
                '-webkit-animation-duration': $animationDuration,
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}


    // product slider
    $('.product-slider').owlCarousel({
        items: 5,
        loop: true,
        margin: 25,
        smartSpeed: 400,
        nav: true,
        autoplay: false,
        autoplayHoverPause: true,
        dots: false,
        navText: [
            "<i class='far fa-angle-left'></i>",
            "<i class='far fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 2
            },
            1000:{
                items: 3
            },
            1200:{
                items: 5
            }
        }
    });


    // product slider 2
    $('.product-slider2').owlCarousel({
        items: 3,
        loop: true,
        margin: 20,
        smartSpeed: 400,
        nav: true,
        autoplay: false,
        autoplayHoverPause: true,
        dots: false,
        navText: [
            "<i class='far fa-angle-left'></i>",
            "<i class='far fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 2
            },
            1000:{
                items: 3
            },
            1200:{
                items: 3
            }
        }
    });


    
    // testimonial slider
    $('.testimonial-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });


    // brand slider
    $('.brand-slider').owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });


    // category slider
    $('.category-slider').owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        dots: false,
        autoplay: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 5
            },
            1400: {
                items: 5
            }
        }
    });


    // instagram-slider
    $('.instagram-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    


    // fun fact counter
    $('.counter').countTo();
    $('.counter-box').appear(function () {
        $('.counter').countTo();
    }, {
        accY: -100
    });


    // magnific popup init
    $(".popup-gallery").magnificPopup({
        delegate: '.popup-img',
        type: 'image',
        gallery: {
            enabled: true
        },
    });

    $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    // scroll to top
    $(window).scroll(function () {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            $("#scroll-top").addClass('active');
        } else {
            $("#scroll-top").removeClass('active');
        }
    });

    $("#scroll-top").on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });


    // countdown
    $('[data-countdown]').each(function() {
        let finalDate = $(this).data('countdown');
        $(this).countdown(finalDate, function(event) {
            $(this).html(event.strftime(
                '<div class="row"><div class="col countdown-item"><h2>%-D</h2><h5>Day%!d</h5></div><div class="col countdown-item"><h2>%H</h2><h5>Hours</h5></div><div class="col countdown-item"><h2>%M</h2><h5>Minutes</h5></div><div class="col countdown-item"><h2>%S</h2><h5>Seconds</h5></div></div>'
            ));
        });
    });


    // copywrite date
    let date = new Date().getFullYear();
    $("#date").html(date);


    // nice select
    $('.select').niceSelect();


    // price range slider
	if($(".price-range").length){
        $( ".price-range" ).slider({
            range: true,
            min: 0,
            max: 5000,
            values: [500, 2000],
            slide: function( event, ui ){$( "#price-amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );}
        });
        $( "#price-amount" ).val( "$" + $( ".price-range" ).slider( "values", 0 ) + " - $" + $( ".price-range" ).slider( "values", 1 ) );
    }


    //cart quantity
    $(".plus-btn").on("click", function () {
        var i = $(this).closest(".shop-cart-qty").children(".quantity").get(0).value++,
            c = $(this).closest(".shop-cart-qty").children(".minus-btn");
        i > 0 && c.removeAttr("disabled");
    }),
    $(".minus-btn").on("click", function () {
        2 == $(this).closest(".shop-cart-qty").children(".quantity").get(0).value-- && $(this).attr("disabled", "disabled");
    })


    // flexslider
    if ($('.flexslider-thumbnails').length) {
        $('.flexslider-thumbnails').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
        });
    }


    // bootstrap tooltip enable
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-tooltip="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })


    // profile image btn
    $(".profile-img-btn").on('click', function () {
        $(".profile-img-file").click(); 
    });
    
    
    // message bottom scroll
    if ($('.message-content-info').length) {
        $(function () {
            var chatbox = $('.message-content-info');
            var chatheight = chatbox[0].scrollHeight;
            chatbox.scrollTop(chatheight);
        });
    }


    // modal popup banner
    $(window).on('load', function () {
        setTimeout(function () {
            $("#popup-banner").modal("show");
        }, 3000)
    });


    // invoice print
    $('.invoice-print-btn').click(function(){
        $('.invoice-print-btn').hide();
        $('.invoice-container').removeClass('not-print');
        window.print();
        $('.invoice-container').addClass('not-print');
        $('.invoice-print-btn').show();
   });


})(jQuery);










