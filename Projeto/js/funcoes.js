/* OWL - Carousel */
$(document).ready(function() {
  var owl = $("#owl_Produtos");
  owl.owlCarousel({
      //autoPlay: 5000, //Set AutoPlay to 3 seconds

      items : 1, //1 item above 1000px browser width
      itemsDesktop : [5000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : [250,1] // itemsMobile disabled - inherit from itemsTablet option
 
  });

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
 
  $("#owl_Ingredientes").owlCarousel({
    //autoPlay: 5000, //Set AutoPlay to 3 seconds
    
    items : 1, //1 item above 1000px browser width
    itemsDesktop : [5000,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,1], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : [250,1] // itemsMobile disabled - inherit from itemsTablet option
  });

  $("#owl_Ingredientes02").owlCarousel({
    //autoPlay: 5000, //Set AutoPlay to 3 seconds

    items : 1, //1 item above 1000px browser width
    itemsDesktop : [5000,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,1], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : [250,1] // itemsMobile disabled - inherit from itemsTablet option
  });
 
});