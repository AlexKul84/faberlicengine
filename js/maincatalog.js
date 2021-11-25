//Use Strict Mode
(function($) {
  "use strict";

//======= Run on Window Load ============
$(window).load(function(){ 



  //Owl Carousel
  $("#about-team").owlCarousel({
   	navigation : false, // Show next and prev buttons
    	slideSpeed : 300,
    	paginationSpeed : 400,
    	responsiveRefreshRate : 200,
  	responsiveBaseWidth: window,
  	items : 3,
  	itemsMobile : [479,1],
  	//autoPlay: 6000,
  	stopOnHover: true,
  	pagination: true,
  	//singleItem: true,
  	navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"]
  });

 $("#testimonial-carousel").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    pagination: true,
    singleItem: true,
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],
  });

  $("#blog-itens-container").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
    pagination: true,
    singleItem: false,
    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],
 	items : 3,
  });

  $("#sponsors-carousel").owlCarousel({
	    navigation : false, // Show next and prev buttons
	    slideSpeed : 300,
	    paginationSpeed : 400,
	    items : 4,
    	itemsCustom : false,
	    itemsDesktop : [1199,4],
	    itemsDesktopSmall : [980,3],
	    itemsTablet: [768,2],
	    itemsMobile : [479,1],
      pagination: true,
	    responsiveRefreshRate : 200,
    	responsiveBaseWidth: window,
	    navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],
	      // "singleItem:true" is a shortcut for:
	      // items : 1,
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	});



  //WAYPOINTS
  $('#main-carousel').waypoint(function(direction) {
      if (direction === 'down') {
        $('#header').addClass( 'header-stick');
      }
      else {
        $('#header').removeClass( 'header-stick');
      }
    },
    {
     offset: '-20px'
  });

  //Runs on window Resize
  $(window).resize(function() {
    windowHeight = $(window).height();
    adjustViewport();
    adjustProgressBar();
  });

});


//End - Use Strict mode
})(jQuery);