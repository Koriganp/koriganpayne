$(document).ready(function() {

	//Home Page

	// Activate heading animations on scroll
	$('#web').waypoint(function() {
		$('#web').addClass('zoomIn');
	}, {offset: '80%'});

	$('#design').waypoint(function() {
		$('#design').addClass('zoomIn');
	}, {offset: '80%'});

	$('#stand').waypoint(function() {
		$('#stand').addClass('bounceInDown');
	}, {offset: '95%'});

	//Portfolio Page

	//Activate heading animations on scroll

	$('#multi').waypoint(function() {
		$('#multi').addClass('zoomIn');
	}, {offset: '95%'});

	$('#static').waypoint(function() {
		$('#static').addClass('zoomIn');
	}, {offset: '95%'});

	$('#para').waypoint(function() {
		$('#para').addClass('zoomIn');
	}, {offset: '95%'});

	$('#seo').waypoint(function() {
		$('#seo').addClass('zoomIn');
	}, {offset: '95%'});

	// hide elements on page load

	$('#wordPressText').css('opacity', 0);

	$('#wordPress').css('opacity', 0);

	$('#law').css('opacity', 0);

	$('#lawText').css('opacity', 0);

	$('#landscapeText').css('opacity', 0);

	$('#landscape').css('opacity', 0);

	$('#restaurant').css('opacity', 0);

	$('#restaurantText').css('opacity', 0);

	$('#csquareText').css('opacity', 0);

	$('#csquare').css('opacity', 0);


	//Animate objects as they appear on screen

	$('#wordPressText').waypoint(function() {
		$('#wordPressText').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#wordPress').waypoint(function() {
		$('#wordPress').addClass('fadeInRight');
	}, {offset: '80%'});

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

	$('#csquareText').waypoint(function() {
		$('#csquareText').addClass('fadeInLeft');
	}, {offset: '80%'});

	$('#csquare').waypoint(function() {
		$('#csquare').addClass('fadeInRight');
	}, {offset: '80%'});

});
