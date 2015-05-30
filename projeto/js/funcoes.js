/* OWL - Carousel */
$(document).ready(function() {
  var owl = $("#owl_Produtos");
  owl.owlCarousel({
      //autoPlay: 5000, //Set AutoPlay to 3 seconds
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
 
  $("#wl_Ingredientes").owlCarousel({
      //autoPlay: 5000, //Set AutoPlay to 3 seconds
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1]
 
  });
 
});