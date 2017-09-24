$(document).ready(function() {
	
	var $container = $('#masonry');
	// Инициализация Масонри, после загрузки изображений
	$container.imagesLoaded( function() {
	  $container.masonry({
		  	itemSelector: ".masonry-item",
		  	columnWidth: ".masonry-item"
		});
	});
	
	/*фиксация меню*/
	$(".header-menu_outer").sticky({topSpacing:0});
	
	$('input, textarea').focus(function(){
	   $(this).data('placeholder',$(this).attr('placeholder'))
	   $(this).attr('placeholder','');
	 });
	 $('input, textarea').blur(function(){
	   $(this).attr('placeholder',$(this).data('placeholder'));
	 });
	
	$(".header-menu a, .header-menu-mobile a, .to-catalog").click(function () {
		var elementClick = $(this).attr("href")
		var destination = $(elementClick).offset().top;
		jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1000);
		return false;
	});
	
	$(".fancybox").fancybox({
		padding: 0,
	});
	
	$(".fancybox-button, .photo-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		padding: 10,
		helpers		: {
			buttons	: {}
		}
	});
	
	$(".pen-color a").click(function(e){
		e.preventDefault();
		var $searchId = $( $(this).attr("href") );
		var $searchop = $(this).attr("href") + '-popup';
		var $searchIdPopap = $( $searchop );
		$class = $(this).attr('class');
		$color = $(this).attr('name');
		var list = document.getElementsByClassName($class);
		for(var i = 0; i < list.length; i++) {
        $(list[i]).parent().siblings("li").removeClass("active-color");
        $(list[i]).parent().addClass("active-color");
        $(list[i]).parents(".catalog-info").find(".pen-photo img").not($searchId).fadeOut(0);
        $(list[i]).parents(".popup-content").find('.input-color').val($color);
        $(list[i]).parents(".catalog-popup").find('.input-color').val($color);
        $(list[i]).parents(".catalog-popup").find('.popup-pen-photo img').not($searchIdPopap).fadeOut(0);
    }
		$searchId.fadeIn(0);
		$searchIdPopap.fadeIn(0);
	});

	$("form").submit(function() {
		var th = $(this);

        if($('input[name=form_subject]').val() == "Заказ звонка") {
            send_crm(th.find('input[name=Имя]').val(), th.find('input[name=Телефон]').val(), 'phone', 'Заявка с формы "Заказать звонок" на странице https://3dlion.ru/gyroscooter/index.html');
        } else {
            send_crm(th.find('input[name=Имя]').val(), th.find('input[name=Телефон]').val(), 'landing-page', 'Цвет: ' + th.find('input[name=Цвет]').val() + ' Товар: ' + th.find('input[name=Товар]').val() + ' Заявка с формы "'+$('input[name=form_subject]').val()+'" на странице https://3dlion.ru/gyroscooter/index.html');
        }
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: th.serialize()
		}).done(function() {
			window.location.href = 'ok-ny17.html';
		});
		return false;
	});
	
	/*модалка*/
	$('.popup-open').magnificPopup({
	  removalDelay: 300, 
	  callbacks: {
	    beforeOpen: function() {
	       this.st.mainClass = this.st.el.attr('data-effect');
	    }
	  },
	  midClick: true 
	});
	
	if(window.screen.width > 1090) {
		$(".phone-mask").inputmask({"mask": "+7 (999) 999-99-99"}).attr("pattern", "[^0-9][^_]{10,20}");
		
	}else{
		$(".phone-mask").attr("pattern", "[0-9]{10,11}");
	}

	
	$('.catalog-list').matchHeight();
	
	$(".buter").click(function(e){
		$(this).toggleClass("open-buter");
		$(".header-menu-mobile").slideToggle(300);
	});
	
	var mobileSearch = $(".header-menu-mobile");	
	$(document).mouseup(function (e) {	
	    if (!mobileSearch.is(e.target) && mobileSearch.has(e.target).length === 0 ){
	        mobileSearch.slideUp(300);
	        $(".buter").removeClass("open-buter");
	    }
	});
	
});

$(window).load(function() {	
    $('.condition-block, .delivery-block, .pay-block, .review-text, .work-block').matchHeight(); 
});

function send_crm(name, phone, type, comment) {
    $.ajax({
        method: 'GET',
        async: false,
        url: "https://3dlion.ru/send_crm.php",
        data: {'firstName': name, 'phone': phone, 'orderMethod': type, 'customFields': {'roistat' : window.roistat.visit}, customerComment: comment}
    }).done(function( msg ) {
        console.log(msg);
    });
}