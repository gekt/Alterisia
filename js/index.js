	$(document).on('mouseover mousedown', 'a, img', function() {
	    return false;
	});

	$(".logo_serveur-1").on("mouseover", function() {
	    $(".hover-serveur-1").show();
	    $(".logo_serveur-1").hide();
	}).on("mouseout", function() {
	    $(".logo_serveur-1").show();
	    $(".hover-serveur-1").hide();
	});