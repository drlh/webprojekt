// JS - Script für eigene Funktionen

$(document).ready(function() {

	/**
	 * Diese Funktion ermöglicht es beim Scrollen der Seite nach dem Bild die
	 * Navigation an den oberen Rand anzudocken
	 */
	var top = 200;
	$(window).scroll(function() {
		if ($(this).scrollTop() > top) {
			$('.navbar').addClass('navbar-fixed-top');
		} else {
			$('.navbar').removeClass('navbar-fixed-top');
		}
	});
	
	
	/**
	 * Diese Funktion setzt einen Evnethandler wenn ein bestimmter Button gedrückt wird und blendet das 
	 * nachfolgende Attribut ein
	 */
	$('#about-leo-btn').click( function() {
		$("#about-leo").slideToggle();
	});
	$('#about-yannick-btn').click( function() {
		$("#about-yannick").slideToggle();
	});
});

