( function( $ ) {
$(document).ready(function () {
	$(".mobile-menu-catagories").hover( function (){
		// Hide everything first
		$(".mobile-menu-expand").css("display", "none");

		$idToShow = "#" + $(this).attr("id") + "-expand";
		// console.log($idToShow);
		$($idToShow).css({"display" : "flex", "flex-direction" : "column"})
	});

	$(".hamburger").click(function(){
		$('.hamburger').toggleClass("is-active");
		// Show menu
		if ($('.hamburger').hasClass('is-active')){
			$('.overlay').css("height", "100%");
		}
		else{
			$('.overlay').css("height", "0%");
		}

	});

	/***
	 * Event handler for overlay-catagories class. Gets id
	 * of specific catagory hovered and display corresponding sub-list
	 */
	 $(".overlay-catagories").hover(function (){
	 	// initially set everything to display:none; to hide other menu items
		$(".hamburger-hover-list").css("display", "none");

	 	// console.log($(this).attr("id") + " class hover function");
	 	$listToShowID = "#list-" + $(this).attr("id");
	 	$($listToShowID).css({"display" : "flex", "flex-direction" : "column"});
	 });
});
} )( jQuery );
