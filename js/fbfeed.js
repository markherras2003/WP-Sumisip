$(document).ready(function() {
 
    $("#owl").owlCarousel({
   
        navigation : true, // Show next and prev buttons
   
        slideSpeed : 900,
        paginationSpeed : 400,

        autoplay:true,
        autoplayTimeout:7000,
        loop: true,
   
        items : 1, 
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false
   
    });
   
  });
