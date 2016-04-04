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

}); //end ready
