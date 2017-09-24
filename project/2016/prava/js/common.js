$(function() {

	//через 15 сек событие
	$(document).ready(function() {
		function func() {
  		alert('Hello'); //заменить эту строчку на событие
		}
		setTimeout(func, 15000);
	});

	//Метрика Цели
		//На кнопку заказать звонок в верхнем меню
		$("a.call_top_btn").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Отправка формы с первого экрана
		$(".one_scren_frm").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Отправка формы с блока "Итог нашей работы"
		$(".itog_frm").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Кнопка c Наши услуги "Бесплатная консультация"
		$("a.price_btn1").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Кнопка c Наши услуги "Юридическое сопровождение"
		$("a.price_btn2").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Кнопка c Наши услуги "Банкротство"
		$("a.price_btn3").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Отправка формы "Получите скидку"
		$(".salebtn").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Кнопка блока Остались вопросы? "Заказать звонок"
		$(".voprosbtn").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

		//Отправка всплывающей формы !ВНИМАНИЕ ! всплывающая форма одна и та же для всех кнопок, поэтому советую использовать состаыне цели
		$(".popupbtn").submit(function(event){
	  	yaCounter11111111.reachGoal('order'); //код счетчика и название цели
		});

	//Метрика цели Конец

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

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(".main_mnu").slideToggle();
		return false;
	});

	$('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
		items:1,
		navText: '',
		mouseDrag: false,
	})

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("#callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".success").addClass("visible");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
				$(".success").removeClass("visible");
				$.magnificPopup.close();
			}, 3000);
		});
		return false;
	});

	$(".formaotvrapva").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за заявку! Мы свяжемся с Вами.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
