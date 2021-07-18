$(function () {
	"use strict";
	$(window).on("scroll", function() {
		   if($(window).scrollTop() > 0) {
			$("#header-fix").addClass("active");
				} else {
			$("#header-fix").removeClass("active");
		  }
		});
	
	
	
});



$(".c_course").click(function (){
   window.location.href = $(this).data("url")
})


$(document).ready(() => {

	lightGallery(document.getElementById('lightgallery'), {
	});

});


