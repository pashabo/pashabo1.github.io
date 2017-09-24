$(function() {

    $('a[href="#taraform"]').click(function(e){
        $('#m_theme').val(this.title);
        e.preventDefault();
    });

		$(function() {

	  $('select').styler();

	});

	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,

		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});

	$('.owl-carousel').owlCarousel({
			 items:1,
			 loop:false,
			 center:true,
			 margin:10,
			 URLhashListener:true,
			 autoplayHoverPause:true,
			 startPosition: 'one',
			 animateOut: 'slideOutDown',
			 autoplay:false,
	 });

	var isMobile = {
    Android:        function() { return navigator.userAgent.match(/Android/i) ? true : false; },
    BlackBerry:     function() { return navigator.userAgent.match(/BlackBerry/i) ? true : false; },
    iOS:            function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false; },
    Windows:        function() { return navigator.userAgent.match(/IEMobile/i) ? true : false; },
    any:            function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());  }
};

if ( !isMobile.any() ) {

	$(".main").onepage_scroll({
	 sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
	 easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
																		// "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	 animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
	 pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
	 updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
	 beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
	 afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
	 loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
	 keyboard: true,                  // You can activate the keyboard controls
	 responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
																		// you want the responsive fallback to be triggered. For example, set this to 600 and whenever
																		// the browser's width is less than 600, the fallback will kick in.
	 direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
});
}



	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$(".taraform").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за заказ! Мы перезвоним Вам в ближайшее время для уточнения деталей.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});


	$(".zakaz").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за заказ! Мы перезвоним Вам в ближайшее время для уточнения деталей.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	$(".callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за звонок! Мы перезвоним Вам в ближайшее время.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});
