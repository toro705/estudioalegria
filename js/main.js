var App = function () {
	return {
		WOW: function () {
			new WOW().init();
		},

		hamburger: function() {
			$('.hamburger').click(function(){
				$(this).toggleClass('is-active');
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
		navScroll: function() {
			$( window ).scroll(function(){
				var $cabecera = $('.main-nav');
				if( $(window).scrollTop() > 20){
					$cabecera.addClass('scroll');
				}else{
					$cabecera.removeClass('scroll');
				}
			});
		},
		onload: function () {
			App.preloader();
		},	
		onResize: function()	{

		},
		init: function () {
			App.hamburger();
			App.WOW();
			App.navScroll();
		}
	}
}();
jQuery(document).ready(function (){
	App.init();
})
 window.onload = function () {
	App.onload();
};
