
var $ = jQuery.noConflict();

$(document).ready(function(){
  /* Home Card Function*/
  $('.home-description-card').on('hover', function(){
    $(this).children('.click-more').toggle( "fade", 500 );
  });

  /* Nav Sub-Menu Function*/
  $('#menu-item-31').on('hover', function(e){

    e.stopPropagation();

    var $item = $(this);
    var $subMenu = $item.children('.sub-menu');

    $subMenu.stop().slideToggle('slow');
  });

  /*SMOOTH SCROLL LANDING PAGE*/
  $('#landing_top').click( function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0}, 'slow');
      return false;
  });
});

