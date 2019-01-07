$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$("header").addClass("small");
    // aside add class
    $("#left-col").addClass("change");
	} else {
		$("header").removeClass("small");
    $("#left-col").removeClass("change");
	}
	
});