<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Title</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<style>
		body {
			opacity: 0;
			overflow-x: hidden;
		}

		html {
			background-color: #fff;
		}
	</style>


</head>

<body>
	<!-- HEADER -->
		<a href="#" class="top-top-nav hidden-lg hidden-md">Наверх</a>
	<header>
		<div class="top_line">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-3">
						<div class="logo_top">
							<a href="#">
								<img src="img/logo.png" alt="Южный ветер">
							</a>
						</div>
					</div>
					<div class="col-lg-7 col-md-9 hidden-sm hidden-xs">
						<nav class="main-mnu">
							<ul>
								<li><a href="#mnu1">Преимущества</a></li>
								<li><a href="#mnu2">Услуги</a></li>
								<li><a href="#mnu3">Схема работы</a></li>
								<li><a href="#mnu4">Типы домов</a></li>
								<li><a href="#mnu5">Этапы работы</a></li>
								<li><a href="#mnu6">Калькулятор</a></li>
								<li><a href="#mnu7">Контакты</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-3 col-md-12">
						<div class="top_contacts">
							<div class="phone_top">
								<img src="img/phonetop.png" alt="ph">+7 812 98 999 58</div> <a href="#callback" class="button callback_top popup-with-move-anim">Перезвоните мне</a>
							<p>СПб, ул. Рижская, д.3, оф. 306 БЦ “Наутилус”</p>
						</div>
					</div>
				</div>
			</div>

        <a href="#" class="toggle-mnu hidden-lg hidden-md"><span></span></a>
        <!-- device mnu -->
      <div class="hidden-lg hidden-md">
        <nav class="main-mnu hidden-mnu">
          <ul>
            <li><a href="#mnu1">Преимущества</a></li>
            <li><a href="#mnu2">Услуги</a></li>
            <li><a href="#mnu3">Схема работы</a></li>
            <li><a href="#mnu4">Типы домов</a></li>
            <li><a href="#mnu5">Этапы работы</a></li>
            <li><a href="#mnu6">Калькулятор</a></li>
            <li><a href="#mnu7">Контакты</a></li>
          </ul>
        </nav>
      </div>

		</div>
		<div class="header_content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="offer">
							<h1>ГРАДОСТРОИТЕЛЬСТВО</h1>
							<p>проект планировки по лучшей цене</p>
							<div class="figura-headera hidden-sm hidden-xs">
								<img src="img/header_line.png" alt=""> </div>
						</div>
						<div class="map">
							<img src="img/map.png" alt="" class="hidden-xs"> Работаем по всей России</div>
					</div>
					<div class="col-md-12">
						<form class="header_form">
							<h2>Заказать срочную консультацию</h2>


							<!-- Hidden Required Fields -->
							<input type="hidden" name="project_name" value="Заявка с лендинга Южный ветер">
							<input type="hidden" name="admin_email" value="mail@southwind.su">
							<input type="hidden" name="form_subject" value="Форма на первом экране">
							<!-- END Hidden Required Fields -->
							<input type="text" name="Name" placeholder="Ваше имя" required>
							<input type="text" name="Phone" id="maskinpitnum" placeholder="Ваш телефон" required>
							<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
							<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
							<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
							<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
							<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
							<button>Заказать</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- HEADER END -->
	<div id="mnu1"></div>
	<section class="advantages">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Преимущества</h2>
				</div>
			</div>
			<div class="row wow fadeInDown" data-wow-duration="1s" data-wow-offset="100">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-1.png" alt=""> </div>
						<p class="adv-text"> Сделаем изыскание со скидкой 30% </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-2.png" alt=""> </div>
						<p class="adv-text"> Сопровождаем проект на Градостроительном совете </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-3.png" alt=""> </div>
						<p class="adv-text"> Информационное сопровождение </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-4.png" alt=""> </div>
						<p class="adv-text"> Бесплатно анализируем документы за 1 час </p>
					</div>
				</div>
			</div>
			<div class="row wow fadeInDown" data-wow-duration="1s" data-wow-offset="100">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-5.png" alt=""> </div>
						<p class="adv-text"> Уже разработано 5000Га территории </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-6.png" alt=""> </div>
						<p class="adv-text"> Гарантируем соблюдение сроков </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					<div class="adv_wrap">
						<div class="adv-ico">
							<img src="img/adv-ico-7.png" alt=""> </div>
						<p class="adv-text"> 8 лет на рынке </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="perebivka" data-speed="10" data-type="background">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Берем на себя всю ответственность, выполняем всю работу за вас!</h2>
				</div> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
		</div>
	</section>
	<div id="mnu2"></div>
	<section class="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Виды услуг</h2>
				</div>
			</div>
			<!-- Текст слева -->
			<div class="service_wrap">
				<div class="row">
					<div class="mob-img-css hidden-lg hidden-md hidden-sm col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<img src="img/service-img-1.jpg" alt="">
					</div>

					<div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
						<h3>Проект планировки и проект межевания территории</h3>
						<p class="hidden-xs">Основной документ градостроительного проектирования устанавливающий элементы планировочной структуры, границы территории общего пользования и границы зон планируемого размещения объектов капитального строительства. .</p>
						<div class="button_serv">
						<a href="#callback" class="button popup-with-move-anim wow bounceIn" data-wow-delay="0.4s" data-wow-duration="1s">Заказать</a> </div>
					</div>
				</div>
				<div class="hidden-xs servimg right_img1 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
					<img src="img/service-img-1.jpg" alt=""> </div>
			</div>
			<!-- /Текст слева -->
			<!-- Текст справа -->
			<div class="service_wrap">
				<div class="row">
					<div class="mob-img-css hidden-lg hidden-md hidden-sm col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<img src="img/service-img-2.jpg" alt="">
					</div>
					<div class="col-md-6 hidden-xs">
						<div class="servimg left_img1 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
							<img src="img/service-img-2.jpg" alt=""> </div>
					</div>
					<div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<h3>Проект планировки и проект межевания линейного объекта</h3>
						<p class="hidden-xs">Основной документ градостроительного проектирования устанавливающий элементы планировочной структуры, границы территории общего пользования и границы зон планируемого размещения объектов капитального строительства. тут я придумаю какой-нибудь еще
							текст </p>
						<div class="button_serv"> <a href="#callback" class="button popup-with-move-anim wow bounceIn" data-wow-delay="0.4s" data-wow-duration="1s">Заказать</a> </div>
					</div>
				</div>
			</div>
			<!-- /Текст  справа -->
			<!-- Текст слева -->
			<div class="service_wrap">
				<div class="row">
					<div class="mob-img-css hidden-lg hidden-md hidden-sm col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<img src="img/service-img-3.jpg" alt="">
					</div>
					<div class="col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
						<h3>проект организации застройки ДНП (СНТ)</h3>
						<p class="hidden-xs">Необходимый документ для дачного или садового товарищества. Этим проектом устанавливаются границы земельных участков и территорий общего пользования. Утверждается на местном (или) районном уровне.</p>
						<div class="button_serv"> <a href="#callback" class="button popup-with-move-anim wow bounceIn" data-wow-delay="0.4s" data-wow-duration="1s">Заказать</a> </div>
					</div>
					<div class="hidden-xs col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<div class="servimg right_img1 right_img1minus">
							<img src="img/service-img-3.jpg" alt=""> </div>
					</div>
				</div>
			</div>
			<!-- /Текст слева -->
			<!-- Текст справа -->
			<div class="service_wrap">
				<div class="row">
					<div class="mob-img-css hidden-lg hidden-md hidden-sm col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<img src="img/service-img-4.png" alt="">
					</div>
					<div class="hidden-xs col-md-6">
						<div class="servimg left_img1 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
							<img src="img/service-img-4.png" alt=""> </div>
					</div>
					<div class="col-md-6 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-offset="100">
						<h3>Правила землепользования и застройки (ПЗЗ) </h3>
						<p class="hidden-xs">Документ территориального планирования отображающий территориальные зоны и виды разрешенного использования на каждом земельном участке. Возможно внесение изменений в ПЗЗ на поселение, населенный пункт или часть территории.</p>
						<div class="button_serv">
						<a href="#callback" class="button popup-with-move-anim wow bounceIn" data-wow-delay="0.4s" data-wow-duration="1s">Заказать</a> </div>
					</div>
				</div>
			</div>
			<!-- /Текст  справа -->
		</div>
	</section>
	<section class="perebivka">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Делаем под ключ: <br> изыскание - ПРОЕКТ - КАДАСТРОВЫЙ УЧЕТ</h2>
				</div> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
		</div>
	</section>
	<div id="mnu3"></div>
	<section class="sxema">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Схема работы</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="sxema-ico-wrap wow fadeInLeft" data-wow-delay="0s" data-wow-offset="150">
						<div class="sxema-ico">
							<img src="img/sxema-ico-1.png" alt=""> </div>
						<div class="sxema-txt"> Техническое задание </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="sxema-ico-wrap wow fadeInLeft" data-wow-delay="0.4s" data-wow-offset="150">
						<div class="sxema-ico">
							<img src="img/sxema-ico-2.png" alt=""> </div>
						<div class="sxema-txt"> Разработка <br> градостроительной <br> документации </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="sxema-ico-wrap wow fadeInLeft" data-wow-delay="0.8s" data-wow-offset="150">
						<div class="sxema-ico">
							<img src="img/sxema-ico-3.png" alt=""> </div>
						<div class="sxema-txt"> Согласование <br>на местном уровне </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="sxema-ico-wrap wow fadeInLeft" data-wow-delay="0s" data-wow-offset="150">
						<div class="sxema-ico">
							<img src="img/sxema-ico-4.png" alt=""> </div>
						<div class="sxema-txt"> Согласование с Комитетом по Архитектуре и Градостроительства Ленинградской области </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="sxema-ico-wrap wow fadeInLeft" data-wow-delay="0.4s" data-wow-offset="150">
						<div class="sxema-ico">
							<img src="img/sxema-ico-5.png" alt=""> </div>
						<div class="sxema-txt"> Проведение<br>публичных слушаний </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="sxema-ico-wrap wow fadeInLeft" data-wow-delay="0.8s" data-wow-offset="150">
						<div class="sxema-ico">
							<img src="img/sxema-ico-6.png" alt=""> </div>
						<div class="sxema-txt"> Утверждение<br>проекта </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="mnu4"></div>
	<section class="type_home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Типы домов</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="cart-home-wrap">
						<div class="home-img">
							<img src="img/tip-home-1.jpg" alt=""> </div>
						<div class="home-price"> Цена от 15000 руб. </div>
						<div class="home-button"> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="cart-home-wrap">
						<div class="home-img">
							<img src="img/tip-home-1.jpg" alt=""> </div>
						<div class="home-price"> Цена от 15000 руб. </div>
						<div class="home-button"> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="cart-home-wrap">
						<div class="home-img">
							<img src="img/tip-home-1.jpg" alt=""> </div>
						<div class="home-price"> Цена от 15000 руб. </div>
						<div class="home-button"> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="cart-home-wrap">
						<div class="home-img">
							<img src="img/tip-home-1.jpg" alt=""> </div>
						<div class="home-price"> Цена от 15000 руб. </div>
						<div class="home-button"> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="cart-home-wrap">
						<div class="home-img">
							<img src="img/tip-home-1.jpg" alt=""> </div>
						<div class="home-price"> Цена от 15000 руб. </div>
						<div class="home-button"> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="cart-home-wrap">
						<div class="home-img">
							<img src="img/tip-home-1.jpg" alt=""> </div>
						<div class="home-price"> Цена от 15000 руб. </div>
						<div class="home-button"> <a href="#callback" class="button popup-with-move-anim">Заказать</a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="mnu5"></div>
	<section class="steps">
		<div class="container">
			<div class="row">
				<h2>Этапы нашей работы</h2>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-2 hidden-xs hidden-sm">
					<div class="step-img">
						<img src="img/step-bg.jpg" alt=""> </div>
				</div>
				<div class="col-md-6 col-sm-10 col-xs-12">
					<div class="steps-ul">
						<ol>
							<li>Эскиз с 3D моделированием</li>
							<li>Индивилуальные проекты домов под ваши пожелания</li>
							<li>Разработка архитектурно-строительной части</li>
							<li>Разработка проектов инженерных сетей</li>
							<li>Подбор материалов</li>
							<li>Авторский надзор за строительством</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="mnu6"></div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="sddfdsf">Рассчитайте стоимость проекта<br> вашего дома</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="calculator">


				<div class="calc-left hidden-xs">
					<div class="text-calc">
						<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
							amet mauris. </p>
						<div class="calc-text-img">
							<img src="img/calc-img.jpg" alt=""> </div>
					</div>
				</div>

				<div class="calc-center">
					<div class="form-calc">
						<form id="calcforpsp" method="post">
									<label>Количество этажей:</label>
							<p> <select name="floors" required>
					            <option value="1">1</option>
					            <option value="2">2</option>
					        </select></p>
									<label>Площадь:</label>
							<p> <select name="area" required>
					            <option value="100">100</option>
					            <option value="150">150</option>
					            <option value="200">200</option>
					            <option value="250">250</option>
					            <option value="300">300</option>
					            <option value="400">400</option>
					            <option value="500">500</option>
					        </select> </p>
									<label>Материалы стен:</label>
							<p> <select name="material" required>

					            <option value="Кирпичный дом">Кирпичный дом</option>
					            <option value="Газобетон">Газобетон</option>
					            <option value="Деревянный дом">Деревянный дом</option>
					            <option value="Каркасный дом">Каркасный дом</option>
					        </select> </p>
									<label>Состав проекта:</label>
							<p><select name="composition" required>
					            <option value="Эскиз">Эскиз</option>
					            <option value="АР+КР">АР+КР</option>
					            <option value="АР+КР+ВК+ОВ+ЭС">АР+КР+ВК+ОВ+ЭС</option>
					            <option value="Под ключ">Под ключ</option>
					        </select> </p>
							<p class="siiiika">
								<input type="submit" value="Рассчитать" class="submcals"> </p>
						</form>
					</div>
				</div>

	</section>
	<div id="mnu7"></div>
	<section class="map-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<div class="map-contact-wrap">
						<div class="zagolovok-map">
							<div class="row">
								<div class="col-sm-6 col-xs-12">Контакты</div>
								<div class="col-sm-6 col-xs-12">
									<div class="logo-map-ct"><img src="img/logofooter.png" alt=""></div>
								</div>
							</div>
						</div>
						<div class="adresa-i-map">
							 <div class="number">+7 812 98 999 58</div>
							 <ul>
							 	<li class="ma-map-map-img"><img src="img/map-ckeck.png" alt="">Спб, ул. Рижская, д.3, <br>
оф. 306 БЦ «Наутилус»</li>
								<li>пн-пт: с 10.00 до 18.00</li>
								<li>E-mail: mail@southwind.su</li>
							 </ul>
						</div>
						<div id="map"></div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<section class="footer-final">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<p>Оставьте заявку на расчет стоимости работ, или звоните самостоятельно</p>
					<p class="number"> +7 812 98 999 58</p>
				</div>
				<div class="col-md-4 col-sm-5">
					<a href="#callback" class="button popup-with-move-anim">Оставить заявку</a>
				</div>
			</div>
		</div>
	</section>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="logo-footer">
						<img src="img/logofooter.png" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="copyright hidden-sm hidden-xs">
						copyright@2017. All Rights Reserved.
					</div>
				</div>
				<div class="col-md-3 co-sm-4">
					<div class="social-footer">
						<a href="#"><img src="img/inst.png" alt=""></a>
						<a href="#"><img src="img/vk.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<div class="hidden">

		<form class="popup-form callback zoom-anim-dialog" id="callback">


				<div class="success2">Спасибо за заявку! <br>Мы свяжемся с вами в ближайшее время.</div>

			<div class="step2form">
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Заявка с лендинга Южный ветер">
				<input type="hidden" name="admin_email" value="mail@southwind.su"> <!-- mail@southwind.su -->
				<input type="hidden" name="form_subject" value="Всплывающая форма">

				<!-- END Hidden Required Fields -->

				<h3>Форма заявки</h3>
				<label>
					<input class="form_name" type="text" name="Имя" placeholder="Ваше имя" required>
				</label> <br>
				<label>
					<input class="form_email" type="text" id="maskinpitnum2" name="Тел." placeholder="Ваш телефон:" required>
				</label><br>
				<label>
					<input class="form_phone" type="text" name="майл" placeholder="Ваш e-mail">
				</label><br>
				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
				<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
				<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
				<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
				<button class="buttonform">Отправить</button>
			</div>


		</form>

	</div>

	<div class="hidden">
		<div class="hidden-popup-calc zoom-anim-dialog" id="hidden-popup-calc">
			<div class="success2">Спасибо за заявку! <br>Мы свяжемся с вами в ближайшее время.</div>
			<form class="calculator-form">
				<div class="stoimosttext">Cтоимость проекта вашего дома:</div>
			<div id="response">

			</div>
				<!-- Hidden Required Fields -->
				<input type="hidden" name="project_name" value="Заявка с лендинга Южный Ветер">
				<input type="hidden" name="admin_email" value="mail@southwind.su">
				<input type="hidden" name="form_subject" value="Новая заявка с калькулятора в лендинге">
				<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
				<!-- END Hidden Required Fields -->
				<div class="clear"></div>
				<div class="special-pre">
					<h4>Спецпредложение! Оставьте заявку и получите скидку на проект 30%</h4>
					<input type="text" name="Телефон" id="maskinpitnum3" placeholder="Ваш телефон..." required>
					<input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
					<input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
					<input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
					<input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
					<input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
					<button>Оставить заявку</button>
				</div>
			</form>
		</div>
	</div>


		<div class="step1form">
			<div class="success1">Спасибо за заявку! <br>Мы свяжемся с вами в ближайшее время.</div>
		</div>



	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6iXOW_JOwBdxgHRj-z5cyUHw-l1YLY9M&callback=initMap"></script>
	<script src="js/map.js"></script>

	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>




</body>

</html>
