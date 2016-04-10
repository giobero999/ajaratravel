$(document).ready(function(){
  $('.categories').owlCarousel ({
    items:7,
    margin:10,
    navText:false,
    touchDrag:true,
    mouseDrag:true,
    autoplay:true,
    lazyLoad:false,
    dots:false,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
            loop:true
        }
    }
  });
  $(".top-tours-slider").owlCarousel({
    nav:'false',
    loop:true,
    margin:15,
    mouseDrag:false,
    dots:true,
    autoHeight: false,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    autoHeightClass: 'owl-height',
    responsiveClass:true,
    touchDrag:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:true,
            lazyLoad:true
        }
    }
  });

  $('.continental').owlCarousel ({
    items:7,
    margin:10,
    navText:false,
    touchDrag:true,
    mouseDrag:true,
    dots:false,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
  });





  $("#ion-default, #ion-left").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "$"
  });

  $("#ion-advanced").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "$"
  });

  $('.select').select2({
    minimumResultsForSearch: -1
  });

    $( ".from-date" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( ".to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( ".to-date" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( ".from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });

  $('.tool').hover(function(){
    console.log("hover");
    $(this).tooltip('show');
  });

  $('.favorite').on('click', function() {
    $(this).toggleClass("fa-heart-o");
  });


  $(".burger").on('click', function() {
    $(".mobile-menu").animate({"right":0},300).removeClass("hidden");
    $('body').css({"overflow":"hidden"});
  });

  $(".close-mobile-menu").click(function() {
    $(".mobile-menu").animate({"right":"-300px"},300).addClass("hidden");
    $('body').css({"overflow":"scroll"});
  });


  $(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});



      $('.fullscreenbanner').revolution({
         delay:9000,
         startwidth:960,
         startheight:500,
         startWithSlide:0,
         hideThumbs:0,
         parallax:"mouse",
         thumbWidth:100,
         thumbHeight:50,
         thumbAmount:3
      });

      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: false,
        itemWidth: 120,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
      });


      









}); //end ready
