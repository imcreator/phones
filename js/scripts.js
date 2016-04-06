$(document).ready(function() {
	// Appending search to dynamic menu
	$('#primary-menu').append('<li class="hidden-xs"><a id="search" href="#"><span class="glyphicon glyphicon-search"></span></a></li>');
	// Initialize slider
	$('.my-slider').unslider({
		autoplay: true,
		arrows: false
	});
	// Search Show/Hide
	$('#search').click(function() {
		$('#search-form').toggleClass('show-search');
	});
	// Member description show
	$('.team_member').on('click', function() {
		$(this).children().last().fadeToggle(500);
	});
	// Scroll detection
	$( window ).scroll(function() {
	  if ( $(document).scrollTop() < 1 ) {
	  	$('#main-menu').css('top', '36px');
	  } else {
	  	$('#main-menu').css('top', '0');
	  }
	});
	$('.menu-item > a').on('click', function(event){     
	    event.preventDefault();
	    $('html,body').animate({scrollTop:$(this.hash).offset().top - 90}, 1200);
	});
})

