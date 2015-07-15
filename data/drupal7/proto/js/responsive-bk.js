
	responsive = function() {
		
	if ($(window).width() > 992 || $(window).width() > 1199) {
	//  $('#footer #links').css("background-color","red");
	  //disables h4 link
	  $('#-collapsible-list-group- a').attr("data-toggle","").css("cursor", "default").css("text-decoration", "none");
	  // opens panels
	  $('div[id^="collapseListGroup"]').addClass("in");
	  // show h4 link
	  $('#collapseListGroupHeading4').css("display","block");
	  // show cigna website panel
	  $('#collapseListGroup4').addClass("in");

	  $('.last ul.list-unstyled').css("margin-bottom","20px");

	  $('.last .col-lg-8.col-md-6.col-xs-6').css("padding-top","0px").css("padding-bottom","0px");
	  	$('#links .col-md-4').css("padding-left","auto");
	  	$('.col-md-9.col-sm-6').css("padding-left","auto");
	  
		$('.row.center-block.text-center').css("display", "none");
		$('span.copyRight').css("display", "inline-block");
		$('div.copyRight').css("display", "none");
	  
	}

	else if ($(window).width() > 768 || $(window).width() > 991) {
	//	$('#footer #links').css("background-color","blue");
		//re-enables h4 link
	  $('#-collapsible-list-group- a').attr("data-toggle","collapse").css("text-decoration", "underline");
	  	// closes panels
	  	$('div[id^="collapseListGroup"]').removeClass("in").attr("border-bottom","1px solid white");
	  	// hides h4 alink
	  	$('#collapseListGroupHeading4').css("display","none");
	  	// show cigna website panel
	  	$('#collapseListGroup4').addClass("in");
	  
	  	$('#links .panel-group').css("margin-bottom","0px");
	  	$('.panel-default>.panel-heading').css("border-bottom","1px solid white");
	  	$('#links .col-md-4 a').css("font-size","14px").css("line-height","1.42857143");
	  	//$('#links .col-md-4').css("padding-left","15px");
	  	//$('.col-md-9.col-sm-6').css("padding-left","0");
		
		$('#bottomNav').removeClass("pull-left").addClass("center-block text-center").css("padding-top", "20px").css("padding-bottom", "0px");
		$('.row.center-block.text-center').css("margin-bottom", "0px").css("padding-bottom", "0px").css("display", "none");
		$('span.copyRight').css("display", "none");
		$('div.copyRight').css("display", "block");
		$('#designCredit').removeClass("pull-right text-right").addClass("center-block text-center");
		
	}

	else {
	   //re-enables h4 link
	  $('#-collapsible-list-group- a').attr("data-toggle","collapse").css("cursor", "hand").css("text-decoration", "none");
	  // reinstates underline on hover
	  $('#-collapsible-list-group- a:hover').css("text-decoration", "underline");
	  // closes panels
	  $('div[id^="collapseListGroup"]').removeClass("in").css("border-bottom","1px solid white");
	  // hides h4 alink
	  $('#collapseListGroupHeading4').css("display","none");
	  // show cigna website panel
	  $('#collapseListGroup4').addClass("in");
	  	$('#links .col-md-4').css("padding-left","auto");
	  	$('.col-md-9.col-sm-6').css("padding-left","auto");
	  
	  	$('#links .panel-group').css("margin-bottom","0px");
	  	$('.panel-default>.panel-heading').css("border-bottom","1px solid white");
	  	$('#links .col-md-4 a').css("font-size","14px").css("line-height","1.42857143");
		
		$('#bottomNav').removeClass("pull-left").addClass("center-block text-center").css("padding-top", "20px").css("padding-bottom", "0px");
		$('.row.center-block.text-center').css("margin-bottom", "0px").css("padding-bottom", "0px").css("display", "block");
		$('span.copyRight').css("display", "none");
		$('div.copyRight').css("display", "block");
		$('#designCredit').removeClass("pull-right text-right").addClass("center-block text-center");
	}
};
	
	// function onLoad
	$(document).ready(responsive);
	
	//function when resized
  	$(window).resize(responsive);