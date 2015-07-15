var windowsize = $(window).width();
	
$(document).ready(function () {
    "use strict";
    windowsize = $(window).width();
    if (windowsize > 1200) {
		$('#-collapsible-list-group-1 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-2 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-3 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-4 a').removeAttr("data-toggle");
		// show cigna website panels
		$('#collapseListGroup1').collapse("show");
		$('#collapseListGroup2').collapse("show");
		$('#collapseListGroup3').collapse("show");
		$('#collapseListGroup4').collapse("show");
	} else if (windowsize > 992 || windowsize > 1199) {
		$('#-collapsible-list-group-1 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-2 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-3 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-4 a').removeAttr("data-toggle");
		// show cigna website panels
		$('#collapseListGroup1').collapse("show");
		$('#collapseListGroup2').collapse("show");
		$('#collapseListGroup3').collapse("show");
		$('#collapseListGroup4').collapse("show");
    } else if (windowsize > 768 || windowsize > 991) {
		$('#-collapsible-list-group-1 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-2 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-3 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-4 a').attr("data-toggle", "collapse");
		// show cigna website panels
		$('#collapseListGroup1').collapse("hide");
		$('#collapseListGroup2').collapse("hide");
		$('#collapseListGroup3').collapse("hide");
		$('#collapseListGroup4').collapse("show");
	} else {
		$('#-collapsible-list-group-1 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-2 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-3 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-4 a').attr("data-toggle", "collapse");
		// show cigna website panels
		$('#collapseListGroup1').collapse("hide");
		$('#collapseListGroup2').collapse("hide");
		$('#collapseListGroup3').collapse("hide");
		$('#collapseListGroup4').collapse("show");
	}
});

$(window).resize(function () {
    "use strict";
    windowsize = $(window).width();
    if (windowsize > 1200) {
		$('#-collapsible-list-group-1 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-2 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-3 a').removeAttr("data-toggle");
		$('#-collapsible-list-group-4 a').removeAttr("data-toggle");
		// show cigna website panels
		$('#collapseListGroup1').collapse("show");
		$('#collapseListGroup2').collapse("show");
		$('#collapseListGroup3').collapse("show");
		$('#collapseListGroup4').collapse("show");
	} else if (windowsize > 992 || windowsize > 1199) {
		$('#-collapsible-list-group-1 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-2 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-3 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-4 a').attr("data-toggle", "collapse");
		// show cigna website panels
		$('#collapseListGroup1').collapse("show");
		$('#collapseListGroup2').collapse("show");
		$('#collapseListGroup3').collapse("show");
		$('#collapseListGroup4').collapse("show");
    } else if (windowsize > 768 || windowsize > 991) {
		$('#-collapsible-list-group-1 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-2 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-3 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-4 a').attr("data-toggle", "collapse");
		// show cigna website panels
		$('#collapseListGroup1').collapse("hide");
		$('#collapseListGroup2').collapse("hide");
		$('#collapseListGroup3').collapse("hide");
		$('#collapseListGroup4').collapse("show");
	} else {
		$('#-collapsible-list-group-1 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-2 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-3 a').attr("data-toggle", "collapse");
		$('#-collapsible-list-group-4 a').attr("data-toggle", "collapse");
		// show cigna website panels
		$('#collapseListGroup1').collapse("hide");
		$('#collapseListGroup2').collapse("hide");
		$('#collapseListGroup3').collapse("hide");
		$('#collapseListGroup4').collapse("show");
	}
});