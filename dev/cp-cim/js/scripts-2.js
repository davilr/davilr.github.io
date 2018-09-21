$(function() {
  $(".switchboard .switch").click(function() { 
	  if ($(".switchboard .board").hasClass("active")) {
		$(".switchboard .board").removeClass("active");
	  } else {
		$(".switchboard .board").addClass("active");
	  }
	});
});