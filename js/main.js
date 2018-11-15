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
			$('.main-nav .navbar-nav a').bind('click', function(event) {
			        var $anchor = $(this);
			        $('html, body').stop().animate({
			            scrollTop: $($anchor.attr('href')).offset().top
			        }, 1500, 'easeInOutExpo');
			        event.preventDefault();
			    });			
			$('.main-nav .navbar-nav a').bind('click', function(event) {
				$('.hamburger').toggleClass('is-active');
		    });			
		},
		formContact: function () {
			$( "#contact-form" ).on( "submit", function( event ) {
			  event.preventDefault();
			  console.log( $( this ).serializeArray() );
			  var mailArray =  $( this ).serializeArray();
			  $.ajax({
		           type: "POST", 
		           url: "contact-mailer.php",
		           dataType: "json",
		           data: mailArray,
		           success: function (msg) {
		           		if (msg.success) {
		           			console.log('enviado');
		           			$('#contact-form')[0].reset();
		           			$('#contact-form').prepend('<p class="paragraph-1">'+msg.msj+'</p>');

		           		} else {
		           			console.log('fail');
		           		}
		           },

   			  });
			});
		},	
		modalStatic: function() {
			$('#referencias .modal').modal({
			  backdrop: false
			})
		},
		formRRHH: function () {
			$( "#cv-form" ).on( "submit", function( event ) {
			  event.preventDefault();
			  console.log( $( this ).serializeArray() );
			  var mailArray =  $( this ).serializeArray();
			  var data = new FormData($('#cv-form')[0]);
			  console.log(data);
			  $.ajax({
		           type: "POST", 
		           method: 'POST',
		           url: "rrhh-mailer.php",
		           // dataType: "json",
		           data: data,
		           cache: false,
				   contentType: false,
				   processData: false,   
		           success: function (msg) {
		           		msg = jQuery.parseJSON(msg);
		           		console.log(msg);
		           		if (msg.success) {
		           			console.log('enviado');
		           			$('#cv-form')[0].reset();
		           			$('#cv-form .col-md-8').prepend('<p class="paragraph-1">'+msg.msj+'</p>');
		           		} else {
		           			console.log('fail');
		           		}
		           },

   			  });
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
			App.formContact();
			App.formRRHH();
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
