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
  $(".top-tours").owlCarousel({
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



    $('#slippry-demo').slippry({
      captions:false,
      speed:3000,
    });



  // var mql = window.matchMedia("screen and (max-width: 800px)");
  // if (mql.matches){ // if media query matches
  //  $('.wrapper, header, footer, .slider, .filter').addClass('container');
  // }
  // else{
  //  $('.wrapper, header, footer, .slider .filter').removeClass('container');
  // }

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
    $(".mobile-menu").animate({"right":"-280px"},300).addClass("hidden");
    $('body').css({"overflow":"scroll"});
  });

}); //end ready
