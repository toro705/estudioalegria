var App = function () {
	return {
		WOW: function () {
			new WOW().init();
		},

		hamburger: function() {
			$('.hamburger').click(function(){
				$(this).addClass('active');
			});
			$('.dropdown-toggle').click(function(){
				$(this).parent().toggleClass('open');
			});

		},

		preloader: function() {
                $('.preloader-container').css('opacity', 0, 100);
				setTimeout(function(){
			        $('.preloader-container').remove();
    			}, 200);		
		},		

		onload: function () {
			App.preloader();
		},	
		onResize: function()	{

		},
		init: function () {
			App.hamburger();
			// App.WOW();
			// App.navActive();
		}
	}
}();
jQuery(document).ready(function (){
	App.init();
})
 window.onload = function () {
	App.onload();
};

	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
		});
	});