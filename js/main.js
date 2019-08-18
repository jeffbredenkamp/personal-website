$(document).ready(function($) {

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });
	});

});

$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		$('section').each(function(i) {
				if ($(this).position().top <= scrollDistance) {
						$('nav ul li a.active').removeClass('active');
						$('nav ul li a').eq(i).addClass('active');
				}
		});
}).scroll();