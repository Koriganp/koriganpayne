$(document).ready(function() {

	$('#web').waypoint(function() {
		$('#web').addClass('zoomIn');
	}, {offset: '80%'});

	$('#design').waypoint(function() {
		$('#design').addClass('zoomIn');
	}, {offset: '80%'});

	$('#stand').waypoint(function() {
		$('#stand').addClass('jello');
	}, {offset: '70%'});

});
