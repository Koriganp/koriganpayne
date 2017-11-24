$(document).ready(function() {

	$('#web').waypoint(function() {
		$('#web').addClass('zoomIn');
	}, {offset: '80%'});

	$('#design').waypoint(function() {
		$('#design').addClass('zoomIn');
	}, {offset: '80%'});

	$('#stand').waypoint(function() {
		$('#stand').addClass('bounceInDown');
	}, {offset: '95%'});

	$('#law').waypoint(function() {
		$('#law').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#lawText').waypoint(function() {
		$('#lawText').addClass('fadeInRight');
	}, {offset: '80%'});

	$('#landscapeText').waypoint(function() {
		$('#landscapeText').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#landscape').waypoint(function() {
		$('#landscape').addClass('fadeInRight');
	}, {offset: '80%'});

	$('#restaurant').waypoint(function() {
		$('#restaurant').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#restaurantText').waypoint(function() {
		$('#restaurantText').addClass('fadeInRight');
	}, {offset: '80%'});

});
