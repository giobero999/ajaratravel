$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    nav:true,
    margin:10,
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
            items:3,
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

  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });

  $(function() {
    $( "#left-from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#left-to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });

}); //end ready
