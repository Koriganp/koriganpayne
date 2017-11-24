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

});
