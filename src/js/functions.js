$(document).ready(function(){

  // category scrolling
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
  });// end category scrolling

  // popular tours scrolling
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
  });// popular tours scrolling end

  // continet scrolling start
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
  });// continet scrolling end


  //price ranger start
  $("#ion-default, #ion-left").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "Gel "
  });

  $("#ion-advanced").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    prefix: "Gel "
  }); //price ranger end

  // select2 plugin, this is a select design changing plugin
  $('.select').select2({
    minimumResultsForSearch: -1
  });//end select2

  // jqueryui plugin, datepicker
  $( "#date" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
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
  }); //end datepicker

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
	});



  $('.fullscreenbanner').revolution({
     delay:6000,
     transition:"fade",
     startwidth:960,
     startheight:500,
     startWithSlide:0,
     hideThumbs:0,
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


  new WOW().init();


  $(".video").on('click', function(){
    $("#myVideo").modal("show");
  });

  $("#navigation").sticky({topSpacing:0});


}); //end ready

$( window ).load(function() {
  $("#loader-wrapper").fadeOut();
  $('body').fadeIn();
});
