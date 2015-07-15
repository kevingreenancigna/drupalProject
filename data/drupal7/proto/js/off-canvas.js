$(document).ready(function() {
	"use strict";
	//$('.row-offcanvas').toggleClass('active');
	//$('.showhide').toggle();

	$('[data-toggle=offcanvas]').click(function() {
		$('.row-offcanvas').toggleClass('active');
		//$('.showhide').toggle();
	});
});