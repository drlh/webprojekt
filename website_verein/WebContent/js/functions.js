// JS - Script für eigene Funktionen

/**
 * Diese Funktion ermöglicht es beim Scrollen der Seite nach dem Bild die Navigation an den oberen Rand anzudocken
 */
$(document).ready(function() {
	
  var top = 280;
  $(window).scroll(function() {
    if($(this).scrollTop() > top) {
      $('.navbar').addClass('navbar-fixed-top');
    } else {
      $('.navbar').removeClass('navbar-fixed-top');
    }
  });
  
});