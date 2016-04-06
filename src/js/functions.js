$(document).ready(function(){
  $(".top-tours").owlCarousel({
    nav:true,
    margin:15,
    mouseDrag:false,
    dots:true,
    autoHeight: false,
    autoHeightClass: 'owl-height',
    responsiveClass:true,
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
            items:3,
            nav:true,
            loop:false
        }
    }
  });

  $('.continental').owlCarousel ({
    items:7,
    margin:10,
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
            items:3,
            nav:true,
            loop:false
        }
    }
  });

  $('.carousel').carousel({
		interval: 3000
	});


  var mql = window.matchMedia("screen and (max-width: 800px)");
  if (mql.matches){ // if media query matches
   $('.wrapper, header, footer, .slider, .filter').addClass('container');
  }
  else{
   $('.wrapper, header, footer, .slider .filter').removeClass('container');
  }

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

}); //end ready
