// JS - Script f�r eigene Funktionen

$(document).ready(function() {

	/**
	 * Diese Funktion erm�glicht es beim Scrollen der Seite nach dem Bild die
	 * Navigation an den oberen Rand anzudocken
	 */
	var top = 150;
	$(window).scroll(function() {
		if ($(this).scrollTop() > top) {
			$('.navbar').addClass('navbar-fixed-top').removeClass("mainmenu");
		} else {
			$('.navbar').removeClass('navbar-fixed-top').addClass("mainmenu");
		}
	});
	
	
	/**
	 * Diese Funktion setzt einen Evnethandler wenn ein bestimmter Button gedr�ckt wird und blendet das 
	 * nachfolgende Attribut ein
	 */
	$('#about-leo-btn').click( function() {
		$("#about-leo").slideToggle();
	});
	$('#about-yannick-btn').click( function() {
		$("#about-yannick").slideToggle();
	});
});

