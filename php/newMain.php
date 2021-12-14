<?php
/**
 *  Разработка новой главной (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: New Main
 */
get_header(); // подключаем header.php ?>
<!-- Event snippet for Покупка conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-797956453/76G9CI3hmvgCEOWyv_wC',
      'event_callback': callback
  });
  return false;
}
</script>

	<section class="q">
		<div class="slick-wrap">
			<div class="hero-slider">
				<div class="hero-slider__slide" style="background-image: url('/wp-content/uploads/2018/09/banner1.jpg')">
					<div class="hero-slider__container">
						<div class="hero-slider__title-2">Индивидуальное составление резюме</div>
						<ul class="hero-slider__list"> 3 главных принципа моей работы с Вами:
							<li>гарантированное трудоустройство</li>
							<li>только индивидуальные клиенты</li>
							<li>оплата после результата</li>
						</ul>
						<div class="hero-slider__subtitle">
							Ваше настоящее и ваше будущее в ваших руках.<br>
							<b>Занимайтесь любимым делом, зарабатывайте достойно.</b><br>
							Буду рад вам помочь в достижении этой цели.<br>
						</div>
						<a href="#section2" class="prime__button scroller__button" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Узнать
							больше</a>
					</div>
					<div class="hero-buttons">
						<div class="hero-prev"></div>
						<div class="hero-next"></div>
					</div>
				</div>
				<div class="hero-slider__slide" style="background-image: url('/wp-content/uploads/2018/10/6.jpg')">
					<div class="hero-slider__container">
						<div class="hero-slider__title">Фундаментальная помощь в трудоустройстве:</div>
						<ul class="hero-slider__list">
							<li>составление и редактирование резюме</li>
							<li>написание сопроводительного письма</li>
							<li>подготовка к прохождению собеседования</li>
							<li>самоопределение в профессии и призвании</li>
						</ul>
						<div class="hero-slider__subtitle text-left">
							Выбирайте сами где и с кем работать.<br>
							Все остальные заботы вы можете доверить мне.<br>
							<span class="yellow-link show_form show_form2 show_form3" rel="form7">Свяжитесь со мной</span>
						</div>
						<a href="#section2" class="prime__button scroller__button" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Узнать
							больше</a>
						<!--<form id="contact10" action="/wp-content/themes/alexwlami/send-mail-10.php" method="post" class="hero-slider__form mt-25">
							<div id="fields" class="grid-x grid-margin-x">
								<div class="cell small-12">
									<input type="text" class="quest__input" name="salary" placeholder="Сколько вы хотите зарабатывать?" required>
								</div>
								<div class="cell small-12">
									<input type="text" class="quest__input" name="profession" placeholder="Ваша профессия" required>
								</div>
								<div class="cell small-12">
									<input type="text" class="quest__input" name="exp" placeholder="Ваш стаж работы">
								</div>
								<div class="cell small-12">
									<input type="text" class="quest__input" name="contact" placeholder="Ваш email или телефон">
								</div>
								<div class="cell small-12 text-left mt-20">
									<button type="submit" id="submit" class="prime__button show-modal btn-block centered" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Узнать как!</button>
								</div>
							</div>
						</form>-->
					</div>
					<div class="hero-buttons">
						<div class="hero-prev"></div>
						<div class="hero-next"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-container no-pad" id="section2">
			<div class="grid-x">
				<div class="cell small-10 small-offset-1 end text-center">
					<h2 class="q__caption">Обратиться к карьерному консультанту или составить резюме
						самостоятельно?</h2>
					<div class="responsive-caption">
						<span class="q__text"><b>Сколько стоит</b> написать профессиональное резюме на заказ?</span>
					<span class="q__text">Из чего складывается <b>цена</b> на резюме?</span>
					<span class="q__text"><b>Как происходит составление</b> резюме на заказ?</span>
					<span class="q__text"><b>За что конкретно вы платите</b> при составлении резюме на заказ?</span>
					</div>
				</div>
			</div>
		</div>
		<section class="section">
			<div class="grid-container container-bordered" style="overflow: hidden;">
				<div class="grid-x grid-margin-x how__wrap">
					<div class="cell large-4 medium-4 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-1"></div>
							<div class="preview-card__title">
								<span>1. Интервью с Вами</span>
								<div class="preview-card__subtitle">Сбор информации</div>
							</div>
							<ul class="preview-card__list preview-card__list--has-circle">
								<li class="preview-card__list-item">Пн - пт | 10:00 - 22:00</li>
								<li class="preview-card__list-item">WhatsApp, Skype, телефон</li>
								<li class="preview-card__list-item">1 час</li>
							</ul>
						</div>
					</div>
					<div class="cell large-4 medium-4 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-2"></div>
							<div class="preview-card__title">
								<span>2. Анализ рынка труда</span>
								<div class="preview-card__subtitle">Что от вас ожидают работодатели?</div>
							</div>
							<ul class="preview-card__list preview-card__list--has-circle">
								<li class="preview-card__list-item">Я провожу анализ рынка труда</li>
								<li class="preview-card__list-item">1 час</li>
							</ul>
						</div>
					</div>
					<div class="cell large-4 medium-4 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-3"></div>
							<div class="preview-card__title">
								<span>3. Составление</span>
								<div class="card__subtitle">Разработка и написание резюме</div>
							</div>
							<ul class="preview-card__list preview-card__list--has-circle">
								<li class="preview-card__list-item">Я приступаю к разработке резюме</li>
								<li class="preview-card__list-item">4 часа</li>
							</ul>
						</div>
					</div>
					<div class="cell large-4 medium-4 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-4"></div>
							<div class="preview-card__title">
								<span>4. Обратная связь</span>
								<div class="preview-card__subtitle">От Вас - хотите ли что-то подкорректировать?</div>
							</div>
							<ul class="preview-card__list preview-card__list--has-circle">
								<li class="preview-card__list-item">Вы проверяете резюме</li>
								<li class="preview-card__list-item">высказываете пожелания</li>
								<li class="preview-card__list-item">30 минут</li>
							</ul>
						</div>
					</div>
					<div class="cell large-4 medium-4 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-5"></div>
							<div class="preview-card__title">
								<span>5. Финальные правки</span>
								<div class="preview-card__subtitle">На основе ваших комментариев</div>
							</div>
							<ul class="preview-card__list preview-card__list--has-circle">
								<li class="preview-card__list-item">Я обдумываю пожелания</li>
								<li class="preview-card__list-item">вношу коррективы</li>
								<li class="preview-card__list-item">1 час</li>
							</ul>
						</div>
					</div>
					<div class="cell large-4 medium-4 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-6"></div>
							<div class="preview-card__title">
								<span>6. Готовое резюме</span>
								<div class="preview-card__subtitle">8 часов конкретной работы</div>
							</div>
							<ul class="preview-card__list preview-card__list--has-circle">
								<li class="preview-card__list-item">Я высылаю вам готовое резюме</li>
								<li class="preview-card__list-item">остаюсь с вами на связи</li>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<!--<section class="section" id="section3">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<h2 class="q__caption">Составление резюме на заказ</h2>
					<div class="cell small-12">
						<div class="tab tab__order" style="height: 550px;">
							<ul class="tabs">
								<li>
									<a href="#">
										<span class="tab__order--circle paper"></span>
										<span class="tab__order--price">1800&nbsp;₽</span>
										<span class="tab__order--text"><span class="glyph check"></span>Письменный контакт</span>
										<span class="prime__button show_form tab__order--btn" rel="form1800" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="tab__order--circle bubble"></span>
										<span class="tab__order--price">2000&nbsp;₽</span>
										<span class="tab__order--text"><span class="glyph check"></span>Устный контакт</span>
										<span class="prime__button show_form tab__order--btn" rel="form2500" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="tab__order--circle paper" style="right: 80px"></span>
										<span class="tab__order--circle bubble" style="right: 14px"></span>
										<span class="tab__order--price">2500&nbsp;₽</span>
										<span class="tab__order--text"><span class="glyph check"></span>Устные контакт + <br> консультация</span>
										<span class="prime__button show_form tab__order--btn" rel="form3000" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</span>
									</a>
								</li>
							</ul>
							<div class="tab__content">
								<div class="tabs__item" style="display: block">
									<table class="table__styled">
										<tr>
											<td class="table__styled--head" colspan="2">1. Подготовка</td>
										</tr>
										<tr>
											<td><strong>Вы заполняете заявку</strong> на создание резюме</td>
											<td><strong>Я высылаю вам анкету </strong> с вопросами по вашей карьерной биографии</td>
										</tr>
										<tr>
											<td class="table__styled--head" colspan="2">2. Составление</td>
										</tr>
										<tr>
											<td><strong>Вы отвечаете на вопросы анкеты</strong> и пересылаете её мне</td>
											<td><strong>Я составляю резюме</strong> и направляю вам для комментариев</td>
										</tr>
										<tr>
											<td class="table__styled--head" colspan="2">3. Дополнительные правки</td>
										</tr>
										<tr>
											<td><strong>Вы комментируете резюме</strong>,  отмечаете любые ваши пожелания</td>
											<td><strong>Я вношу правки</strong> соответствии с вашими комментариями</td>
										</tr>
									</table>
								</div>
								<div class="tabs__item" style="display: none">
									<table class="table__styled">
										<tr>
											<td class="table__styled--head" colspan="2">1. Подготовка</td>
										</tr>
										<tr>
											<td><strong>Вы заполняете заявку</strong> на создание резюме</td>
											<td><strong>Я созваниваюсь с вами</strong> - мы договариваемся о дате и времени для часового интервью</td>
										</tr>
										<tr>
											<td class="table__styled--head" colspan="2">2. Составление</td>
										</tr>
										<tr>
											<td><strong>Мы проводим часовое интервью</strong> по телефону, WhatsApp, Skype</td>
											<td><strong>Я составляю резюме</strong> и направляю вам для комментариев</td>
										</tr>
										<tr>
											<td class="table__styled--head" colspan="2">3. Дополнительные правки</td>
										</tr>
										<tr>
											<td><strong>Вы комментируете резюме</strong>, отмечаете любые ваши пожелания</td>
											<td><strong>Я вношу правки</strong> в соответствии с вашими комментариями</td>
										</tr>
									</table>
								</div>
								<div class="tabs__item" style="display: none">
									<table class="table__styled">
										<tr>
											<td class="table__styled--head" colspan="2">1. Подготовка</td>
										</tr>
										<tr>
											<td><strong>Вы заполняете заявку</strong> на создание резюме</td>
											<td><strong>Я созваниваюсь с вами</strong> - мы договариваемся о дате и времени для часового интервью</td>
										</tr>
										<tr>
											<td class="table__styled--head" colspan="2">2. Составление</td>
										</tr>
										<tr>
											<td><strong>Мы проводим часовое интервью</strong> по телефону, WhatsApp, Skype</td>
											<td><strong>Я составляю резюме</strong> и направляю вам для комментариев</td>
										</tr>
										<tr>
											<td class="table__styled--head" colspan="2">3. Дополнительные правки  + 30 минутная консультация</td>
										</tr>
										<tr>
											<td><strong>Мы созваниваемся: вы задаете вопросы, обсуждаем ваши пожелания</strong></td>
											<td><strong>Я консультирую вас по возникающим вопросам</strong></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<section class="section" id="section-3">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<h2 class="q__caption">Составление резюме на заказ</h2>
				<div class="fluid__container flex flex-dir-row mobile-scroller">
					<div class="flex flex-dir-column flex-child-auto">
						<div class="resume-to-order">
							<div class="resume-to-order__container">
								<div class="resume-to-order__card active" id="card1">
									<div class="resume-to-order__mask" style="background-image: url('/wp-content/themes/alexwlami/img/group-of-people.png')"></div>
									<div class="resume-to-order__background" style="background-image: url('/wp-content/themes/alexwlami/img/icons/star-outline.svg')"></div>
									<div class="resume-to-order__header">
										<div class="resume-to-order__title text-center">Резюме руководителя</div>
									</div>
									<div class="resume-to-order__content">
										<p class="resume-to-order__subtitle">После <u>часового</u> телефонного <u>интервью</u>  <br>с Вами:</p>
										<ul class="resume-to-order__list">
											<li class="resume-to-order__item">Я составляю резюме и направляю его Вам</li>
											<li class="resume-to-order__item">Вы <b>проверяете</b> и если возникают комментарии, адресуете их мне</li>
											<li class="resume-to-order__item">Я обдумываю и вношу <b>дополнительные правки</b></li>
										</ul>
									</div>
									<div class="resume-to-order__price">
										<span class="resume-to-order__number">3500&nbsp;₽</span>
										<span class="resume-to-order__text">
											<span class="glyph check"></span>&nbsp;1-2 рабочих дня
										</span>
									</div>
									<div class="resume-to-order__footer">
										<button class="button expanded prime__button show_form button__leaf" rel="formCreateResume" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return gtag_report_conversion(); return true;">Заказать</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="flex flex-dir-column flex-child-auto">
						<div class="resume-to-order">
							<div class="resume-to-order__container">
								<div class="resume-to-order__card" id="card2">
									<div class="resume-to-order__mask" style="background-image: url('/wp-content/themes/alexwlami/img/group-of-people.png')"></div>
									<div class="resume-to-order__background" style="background-image: url('/wp-content/themes/alexwlami/img/icons/question-mark.svg')"></div>
									<div class="resume-to-order__header">
										<div class="resume-to-order__title text-center">Резюме исполнителя</div>
									</div>
									<div class="resume-to-order__content">
										<p class="resume-to-order__subtitle">После <u>заполнения</u> Вами специальной <u>анкеты</u>:</p>
										<ul class="resume-to-order__list" style="margin-bottom: 22px;">
											<li class="resume-to-order__item">Мы проводим 30 минутный созвон</li>
											<li class="resume-to-order__item">Я составляю резюме</li>
											<li class="resume-to-order__item">Пересылаю его Вам</li>
										</ul>
									</div>
									<div class="resume-to-order__price">
										<span class="resume-to-order__number">2500&nbsp;₽</span>
										<span class="resume-to-order__text">
											<span class="glyph check"></span>&nbsp;1 день
										</span>
									</div>
									<div class="resume-to-order__footer">
										<button class="button expanded prime__button show_form button__leaf" rel="formCheckResume" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<!--<section class="section section-gray">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 text-center">
						<h2 class="q__caption mt-60">Примеры работ</h2>
					</div>
					<div class="cell large-6 medium-6 small-12 resume">
						<div class="resume__container">
							<span class="q__title">Резюме специалиста</span>
							<div class="resume__main show_form show__resume" rel="form13">
								<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-1.jpg"/>
							</div>
							<div class="resume__side">
								<div class="resume__side--item show_form show__resume" rel="form14">
									<div class="resume__slide--text">Менеджер по логистике</div>
								</div>
								<div class="resume__side--item show_form show__resume" rel="form15">
									<div class="resume__slide--text">Юрист (корпоративное право)</div>
								</div>
								<div class="resume__side--item show_form show__resume" rel="form16">
									<div class="resume__slide--text">Личный водитель</div>
								</div>
							</div>
						</div>
						<button class="prime__button show_form" rel="formSpec" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
							Заказать резюме
						</button>
					</div>
					<div class="cell large-6 medium-6 small-12 resume">
						<div class="resume__container">
							<span class="q__title">Резюме руководителя</span>
							<div class="resume__main show_form show__resume" rel="form10">
								<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-1.jpg"/>
							</div>
							<div class="resume__side">
								<div class="resume__side--item show_form show__resume" rel="form10">
									<div class="resume__slide--text">Резюме коммерческого директора</div>
								</div>
								<div class="resume__side--item show_form show__resume" rel="form11">
									<div class="resume__slide--text">Резюме начальника охраны труда</div>
								</div>
								<div class="resume__side--item show_form show__resume" rel="form12">
									<div class="resume__slide--text">Резюме ведущего менеджера по закупкам</div>
								</div>
							</div>
						</div>
						<button class="secondary__button show_form" rel="formExamples" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
							Запросить другие примеры
						</button>
					</div>
				</div>
			</div>
		</section>-->
		
		<section class="section section-gray">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 text-center">
				<h2 class="q__caption mt-60">Примеры работ</h2>
			</div>
		</div>
	</div>

	<div class="swipe-slider">
		<div class="swiper-container two">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="swiper-header">Менеджер по логистике</div>
					<div class="slider-image">
						<img src="http://workability.ru/wp-content/uploads/2020/07/%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5-%D0%BC%D0%B5%D0%BD%D0%B5%D0%B4%D0%B6%D0%B5%D1%80%D0%B0-%D0%BF%D0%BE-%D0%BB%D0%BE%D0%B3%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B5-%D1%81%D1%82%D1%80-1.jpg" alt="slide 1">
					</div>
					<div class="swiper-footer">
						<button class="prime__button button__full show_form show__resume" rel="form14">Подробнее о резюме</button>
						<button class="secondary__button button__full show_form" rel="order">Заказать резюме</button>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-header">Юрист</div>
					<div class="slider-image">
						<img src="http://workability.ru/wp-content/uploads/2020/07/%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5-%D1%8E%D1%80%D0%B8%D1%81%D1%82%D0%B0-%D1%81%D1%82%D1%80-1.jpg" alt="slide 2">
					</div>
					<div class="swiper-footer">
						<button class="prime__button button__full show_form show__resume" rel="form15">Подробнее о резюме</button>
						<button class="secondary__button button__full show_form" rel="order">Заказать резюме</button>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-header">Личный водитель</div>
					<div class="slider-image">
						<img src="http://workability.ru/wp-content/uploads/2020/07/%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5-%D0%BB%D0%B8%D1%87%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F-%D1%81%D1%82%D1%80-1.jpg" alt="slide 3">
					</div>
					<div class="swiper-footer">
						<button class="prime__button button__full show_form show__resume" rel="form16">Подробнее о резюме</button>
						<button class="secondary__button button__full show_form" rel="order">Заказать резюме</button>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-header">Коммерческий директор</div>
					<div class="slider-image">
						<img src="http://workability.ru/wp-content/uploads/2020/07/%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5-%D0%BA%D0%BE%D0%BC%D0%BC%D0%B5%D1%80%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0-%D1%81%D1%82%D1%80-1.jpg" alt="slide 4">
					</div>
					<div class="swiper-footer">
						<button class="prime__button button__full show_form show__resume" rel="form10">Подробнее о резюме</button>
						<button class="secondary__button button__full show_form" rel="order">Заказать резюме</button>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-header">Начальник охраны труда</div>
					<div class="slider-image">
						<img src="http://workability.ru/wp-content/uploads/2020/07/%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5-%D1%80%D1%83%D0%BA%D0%BE%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F-%D0%BE%D1%85%D1%80%D0%B0%D0%BD%D1%8B-%D1%82%D1%80%D1%83%D0%B4%D0%B0-%D1%81%D1%82%D1%80-1.jpg" alt="slide 5">
					</div>
					<div class="swiper-footer">
						<button class="prime__button button__full show_form show__resume" rel="form11">Подробнее о резюме</button>
						<button class="secondary__button button__full show_form" rel="order">Заказать резюме</button>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-header">Менеджер по маркетингу</div>
					<div class="slider-image">
						<img src="http://workability.ru/wp-content/uploads/2020/07/%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80-%D1%80%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5-%D0%B2%D0%B5%D0%B4%D1%83%D1%89%D0%B5%D0%B3%D0%BE-%D0%BC%D0%B5%D0%BD%D0%B5%D0%B4%D0%B6%D0%B5%D1%80%D0%B0-%D0%BF%D0%BE-%D0%B7%D0%B0%D0%BA%D1%83%D0%BF%D0%BA%D0%B0%D0%BC-%D1%81%D1%82%D1%80-1.jpg" alt="slide 5">
					</div>
					<div class="swiper-footer">
						<button class="prime__button button__full show_form show__resume" rel="form12">Подробнее о резюме</button>
						<button class="secondary__button button__full show_form" rel="order">Заказать резюме</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		
		<section class="section">
		<div class="grid-container">
			<div class="grid-x grid-margin-x responsive-caption">
				<div class="cell large-12 medium-12 small-12 end text-center">
					<h2 class="q__caption">Комплексная помощь в трудоустройстве</h2>
				</div>
				<div class="cell large-4 medium-12 small-12">
					<div class="comlex-help">
						<div class="complex-help__container">
							<div class="complex-help__header">
								<div class="complex-help__title text-center">Профориентация</div>
							</div>
							<div class="complex-help__body">
								<div class="complex-help__content">
									<ul class="complex-help__list">
										<li class="complex-help__item"><strong>Определение карьерного капитала:</strong>
											ваших знаний, умений и навыков на которые можно сделать ставку прямо сейчас;
										</li>
										<li class="complex-help__item">
											<strong>5-7 вакансии раскрывающих ваш потенциал</strong> и несущих материальное благополучие
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="cell large-4 medium-12 small-12">
					<div class="comlex-help">
						<div class="complex-help__container">
							<div class="complex-help__header">
								<div class="complex-help__title text-center">Составление резюме</div>
							</div>
							<div class="complex-help__body">
								<div class="complex-help__content">
									<ul class="complex-help__list">
										<li class="complex-help__item"><strong>Безупречная репутация</strong></li>
										<li class="complex-help__item"><strong>Имидж профессионала</strong></li>
										<li class="complex-help__item"><strong>Интерес работодателей</strong></li>
										<li class="complex-help__item"><strong>Приглашение Вас на собеседование</strong></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="cell large-4 medium-12 small-12">
					<div class="comlex-help">
						<div class="complex-help__container">
							<div class="complex-help__header">
								<div class="complex-help__title text-center">Прохождение собеседования</div>
							</div>
							<div class="complex-help__body">
								<div class="complex-help__content">
									<ul class="complex-help__list">
										<li class="complex-help__item"><strong>Уверенная презентация</strong> ваших знаний, умений и навыков;</li>
										<li class="complex-help__item"><strong>Правильные ответы</strong> на любые вопросы HR</li>
										<li class="complex-help__item"><strong>Успешно прохождение Вами собеседования</strong></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="complex-help-hero">
			<div class="complex-help-hero__bg"></div>
			<div class="grid-container complex-help-hero__container">
				<div class="grid-x grid-margin-x">
					<div class="cell text-center">
						<div class="complex-help-hero__card">
							<div class="complex-help-hero__prices">
								<div class="complex-help-hero__item">3000&nbsp;₽</div>
								<div class="complex-help-hero__item">2500&nbsp;₽</div>
								<div class="complex-help-hero__item">3500&nbsp;₽</div>
							</div>
							<div class="complex-help-hero__title">Пакетное предложение <br> со скидкой 25%</div>
							<div class="complex-help-hero__timeline">
								<div class="complex-help-hero__line"></div>
								<div class="complex-help-hero__timeline-item">Профориентация</div>
								<div class="complex-help-hero__timeline-item">Составление резюме</div>
								<div class="complex-help-hero__timeline-item">Собеседование</div>
							</div>
							<div class="complex-help-hero__old-price">
								<span>12000</span>
							</div>
							<div class="complex-help-hero__price">
								<span class="glyph check" style="margin-right: 0;"></span>
								<span style="margin-right: 24px;">9000</span>
							</div>
							<div class="complex-help-hero__button">
								<button class="button prime__button show_form" rel="form8000" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
		<!--<section class="section section__feedback section__pd">
			<div class="feedback__container">
				<div class="feedback__title">
					<h2 class="q__caption">Отзывы клиентов</h2>
				</div>
				<div class="feedback__switcher">
					<div class="feedback__switch">
						<span class="switch-label active" id="l1">Аудио-отзывы</span>
						<input class="switch" type="checkbox" id="border-1"/>
						<label for="border-1" id="switcher"></label>
						<span class="switch-label" id="l2">Отзывы из соц.сетей</span>
					</div>
					<div class="feedback__content slick-feedback" style="display: block;">
						<div class="feedback__item">
							<div class="feedback__item--image">
								<span class="feedback__item--header">Услуга &laquo;Резюме&raquo;</span>
								<span class="feedback__item--title">30.08.2018</span>
							</div>
							<div class="feedback__item--body">
								<span class="feedback__item--name">Наталья</span>
								<span class="feedback__item--post">Коммерческий директор</span>
								<div class="feedback__audio">
									<span class="audiofile" onclick="yaCounter48849560.reachGoal('SOCSETI'); return true;">
										<?php echo do_shortcode("[player id=288]"); ?>
									</span>
								</div>
							</div>
						</div>

						<div class="feedback__item">
							<div class="feedback__item--image">
								<span class="feedback__item--header">Услуга &laquo;Резюме&raquo;</span>
								<span class="feedback__item--title">02.08.2018</span>
							</div>
							<div class="feedback__item--body">
								<span class="feedback__item--name">Ксения</span>
								<span class="feedback__item--post">Эксперт по тендерно-договорной работе</span>
								<div class="feedback__audio">
									<span class="audiofile" onclick="yaCounter48849560.reachGoal('SOCSETI'); return true;">
										<?php echo do_shortcode("[player id=290]"); ?>
									</span>
								</div>
							</div>
						</div>

						<div class="feedback__item">
							<div class="feedback__item--image">
								<span class="feedback__item--header">Услуга &laquo;Резюме&raquo;</span>
								<span class="feedback__item--title">06.02.2017</span>
							</div>
							<div class="feedback__item--body">
								<span class="feedback__item--name">Сергей</span>
								<span class="feedback__item--post">Инженер по тестированию</span>
								<div class="feedback__audio">
									<span class="audiofile" onclick="yaCounter48849560.reachGoal('SOCSETI'); return true;">
										<?php echo do_shortcode("[player id=289]"); ?>
									</span>
								</div>
							</div>
						</div>

						<div class="feedback__item">
							<div class="feedback__item--image">
								<span class="feedback__item--header">Услуга &laquo;100% трудоустройство&raquo;</span>
								<span class="feedback__item--title">07.06.2018</span>
							</div>
							<div class="feedback__item--body">
								<span class="feedback__item--name">Наталья</span>
								<span class="feedback__item--post">Руководитель внутренних коммуникаций</span>
								<div class="feedback__audio">
									<span class="audiofile" onclick="yaCounter48849560.reachGoal('SOCSETI'); return true;">
										<?php echo do_shortcode("[player id=291]"); ?>
									</span>
								</div>
							</div>
						</div>

					</div>
					<div class="feeback__content fb__feedback" style="display: none;">
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/20531316728/posts/10210199004526245/" data-width="500"></div>
						</div>
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=901037856746628&id=100005212657329&substory_index=0" data-width="500"></div>
						</div>
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=2090801871159521&id=100006891853653&substory_index=0" data-width="500"></div>
						</div>
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/CELTA2017/posts/2013064475411073" data-width="500"></div>
						</div>
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=2091402247846872&id=100009313508877&substory_index=0" data-width="500"></div>
						</div>
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/slavon.sharky/posts/497609784007180:0" data-width="500"></div>
						</div>
						<div class="fb__feedback--item">
							<div class="fb-post" data-href="https://www.facebook.com/permalink.php?story_fbid=2105931009480064&id=100001895571177&substory_index=0" data-width="500"></div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		
		<section class="section section-gray">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 text-center">
						<h2 class="q__caption mt-60">Как происходит разработка и написание вашего резюме?</h2>
						<p class="q__text">Готовое резюме: от 1 до 2-х дней. <br> Оплата после результата</p>
					</div>
				</div>
				<div class="how__wrap">
					<div class="how__cont">
						<div class="how__image">
							<img src="/wp-content/themes/alexwlami/img/assets/icon-1.svg"/>
						</div>
						<div class="how__count">1</div>
						<div class="how__arrow">
							<img src="/wp-content/themes/alexwlami/img/assets/line-4.svg">
						</div>
						<div class="how__text">
							Оставьте заявку <br/>
							или позвоните мне
						</div>
					</div>
					<div class="how__cont">
						<div class="how__image">
							<img src="/wp-content/themes/alexwlami/img/assets/icon-2.svg"/>
						</div>
						<div class="how__count">2</div>
						<div class="how__arrow">
							<img src="/wp-content/themes/alexwlami/img/assets/line-4.svg">
						</div>
						<div class="how__text">
							Я провожу интервью <br/>
							с вами (40-90 минут)
						</div>
					</div>
					<div class="how__cont">
						<div class="how__image">
							<img src="/wp-content/themes/alexwlami/img/assets/icon-3.svg"/>
						</div>
						<div class="how__count">3</div>
						<div class="how__arrow">
							<img src="/wp-content/themes/alexwlami/img/assets/line-4.svg">
						</div>
						<div class="how__text">
							Я разрабатываю резюме <br/>
							и высылаю вам <br/>
							предварительную версию
						</div>
					</div>
					<div class="how__cont hovered">
						<div class="how__title">
							<span class="q__title">Никаких рисков для вас</span>
						</div>
						<div class="how__image">
							<img src="/wp-content/themes/alexwlami/img/assets/icon-4.svg"/>
						</div>
						<div class="how__count">4</div>
						<div class="how__arrow">
							<img src="/wp-content/themes/alexwlami/img/assets/line-4.svg">
						</div>
						<div class="how__text">
							Оплачиваете работу – <br/>
							по готовности
						</div>
					</div>
					<div class="how__cont">
						<div class="how__image">
							<img src="/wp-content/themes/alexwlami/img/assets/icon-5.svg"/>
						</div>
						<div class="how__count">5</div>
						<div class="how__text">
							После оплаты вы получаете <br/>
							полную версию вашего <br/>
							профессионального резюме
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="stages stages-one">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 text-center">
						<h2 class="q__caption mt-40">Помощь на всех этапах карьерного пути </h2>
					</div>
				<div class="cell large-4 medium-4 small-12 mb-35">
					<div class="stages-card">
						<div class="stages-card__header">
							<span class="stages-card__title">Профориентация</span>
						</div>
						<div class="stages-card__body">
							<div class="stages-card__bg">1</div>
							<ul class="stages-card__list">
								<li class="stages-card__item"><strong>Определение карьерного капитала:</strong>
									ваших знаний, умений и навыков на которые можно сделать ставку прямо сейчас;</li>
								<li class="stages-card__item"><strong>5-7 вакансии раскрывающих ваш потенциал</strong> и несущих материальное благополучие</li>
							</ul>
							<div class="stages-card__divider"></div>
							<div class="stages-card__footer">
								<div class="stages-card__subtitle">Когда это нужно?</div>
								<ul class="cell__checklist paddingless">
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вы не знаете в чем ваша сила</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вас не устраивает текущая работа</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph check"></span>
										<span>Вы хотите развития</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="cell large-4 medium-4 small-12 mb-35">
					<div class="stages-card">
						<div class="stages-card__header">
							<span class="stages-card__title">Составление резюме</span>
						</div>
						<div class="stages-card__body">
							<div class="stages-card__bg">2</div>
							<ul class="stages-card__list">
								<li class="stages-card__item"><strong>Безупречная репутация;</strong></li>
								<li class="stages-card__item"><strong>Имидж профессионала;</strong></li>
								<li class="stages-card__item"><strong>Интерес работодателей;</strong></li>
								<li class="stages-card__item"><strong>Приглашение Вас на собеседование</strong></li>
							</ul>
							<div class="stages-card__divider"></div>
							<div class="stages-card__footer">
								<div class="stages-card__subtitle">Когда это нужно?</div>
								<ul class="cell__checklist paddingless">
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вы никогда не составляли резюме</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вы составили, но нет приглашений</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph check"></span>
										<span>Вы хотите усилить резюме</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="cell large-4 medium-4 small-12 mb-35">
					<div class="stages-card">
						<div class="stages-card__header">
							<span class="stages-card__title">Собеседование</span>
						</div>
						<div class="stages-card__body">
							<div class="stages-card__bg">3</div>
							<ul class="stages-card__list">
								<li class="stages-card__item"><strong>Уверенная презентация</strong> ваших знаний, умений и навыков;</li>
								<li class="stages-card__item"><strong>Правильные ответы</strong> на любые вопросы HR</li>
								<li class="stages-card__item"><strong>Успешно прохождение Вами собеседование</strong></li>
							</ul>
							<div class="stages-card__divider"></div>
							<div class="stages-card__footer">
								<div class="stages-card__subtitle">Когда это нужно?</div>
								<ul class="cell__checklist paddingless">
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вам отказывают в трудоустройстве</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вы хотите продать свой опыт дороже</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вы не умете хвастаться собой и своими результатами</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="stages stages-two">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-4 medium-4 small-12 mb-35">
					<div class="stages-card">
						<div class="stages-card__header">
							<span class="stages-card__title">Адаптация на новом месте</span>
						</div>
						<div class="stages-card__body">
							<div class="stages-card__bg">4</div>
							<ul class="stages-card__list">
								<li class="stages-card__item"><strong>Равновесная позиция</strong> в новом коллективе;</li>
								<li class="stages-card__item"><strong>Доверительные отношения</strong> с руководством.</li>
								<li class="stages-card__item"><strong>Авторитетный статус в служебной иерархии</strong></li>
							</ul>
							<div class="stages-card__divider"></div>
							<div class="stages-card__footer">
								<div class="stages-card__subtitle">Когда это нужно?</div>
								<ul class="cell__checklist paddingless">
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вас не замечают в коллективе</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вам сложно проявить себя среди коллег</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Повышение вечно ускользает из ваших рук</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="cell large-4 medium-4 small-12 mb-35">
					<div class="stages-card">
						<div class="stages-card__header">
							<span class="stages-card__title">Безопасное увольнение</span>
						</div>
						<div class="stages-card__body">
							<div class="stages-card__bg">5</div>
							<ul class="stages-card__list">
								<li class="stages-card__item"><strong>Сохранение профессиональных связей</strong> с бывшими коллегами и руководством;</li>
								<li class="stages-card__item"><strong>Положительная характеристика</strong> ваших компетенций.</li>
								<li class="stages-card__item"><strong>Закрепление имиджа профессионала</strong> и поощрение новых предложений. </li>
							</ul>
							<div class="stages-card__divider"></div>
							<div class="stages-card__footer">
								<div class="stages-card__subtitle">Когда это нужно?</div>
								<ul class="cell__checklist paddingless">
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вы опасаетесь заговорить об увольнении</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Репутация на текущем месте не идеальна</span>
									</li>
									<li class="cell__checklist--item">
										<span class="glyph uncheck"></span>
										<span>Вам необходимо сохранить за собой место при увольнении</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="cell large-4 medium-4 small-12 mb-35">
					<div class="stages-buttons">
						<button class="prime__button button__full show_form" rel="order" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать резюме</button>
						<button class="secondary__button button__full show_form" rel="form1">Задать вопрос</button>
					</div>
				</div>
			</div>
		</div>
	</section>
		
		<!--<section class="section">
			<div class="fluid__container">
				<div class="grid-x">
					<div class="cell small-12 text-center">
						<h2 class="q__caption q__caption_banner">Авторское резюме специально для вас:</h2>
						<div class="banner">
							<ul class="banner__list">
								<li data-item="slide1" data-slide="1" class="banner__item banner__item_selected">
									Работа в иностранной компании
								</li>
								<li data-item="slide2" data-slide="2" class="banner__item">
									Госслужба
								</li>
								<li data-item="slide3" data-slide="3" class="banner__item">
									Фриланc/Творчество
								</li>
								<li data-item="slide4" data-slide="4" class="banner__item">
									Перерыв в стаже
								</li>
								<li data-item="slide5" data-slide="5" class="banner__item">
									Возраст 50+
								</li>
								<li data-item="slide6" data-slide="6" class="banner__item">
									Смена профессии
								</li>
							</ul>
							<div class="banner__slider">
								<div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/work.jpg');" alt="Написание резюме для трудоустройства в иностранную компанию">
									<div class="slide__cont">
										<span class="slide__count">1/6</span>
										<div class="grid-x grid-margin-x">
											<div class="cell small-8">
												<span class="slide__name">Работа в иностранной компании</span>
											</div>
											<div class="cell small-4 text-right">
												<span class="slider-price" id="sliderprice"></span>
											</div>
										</div>
                                        <span class="slide__text">
                                        Существенный прирост в зарплате,
                                        дополнительное медицинское страхование, курсы иностранного
                                        языка, квартальные и годовые бонусы  - как правило, работа в
                                        иностранной компании является золотой жилой для профессионалов
                                        своего дела, знающих иностранный язык. Закажите профессиональное
																					авторское резюме и попадите в число счастливчиков, приглашенных
																					на собеседование</span>
										<div class="slide__footer">
											<div class="slider__form">
												<div class="slider__selector">
													<label class="control control--radio">
														Специалист
														<input type="radio" id="specialist" name="radio" class="control--radiobtn" checked/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Профи
														<input type="radio" id="pro" name="radio" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Руководитель
														<input type="radio" id="top" name="radio" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
												</div>
											</div>
											<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
												Заказать
											</button>
											<span class="offer__price slide__price"><?php the_field('ss23', 'option'); ?> Р</span>
										</div>
									</div>
								</div>
								<div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/gos.jpg');">
									<div class="slide__cont">
										<span class="slide__count">2/6</span>
										<div class="grid-x grid-margin-x">
											<div class="cell small-8">
												<span class="slide__name">Госслужба</span>
											</div>
											<div class="cell small-4 text-right">
												<span class="slider-price" id="sliderprice1"></span>
											</div>
										</div>
                                        <span class="slide__text">
                                        При любой власти и при любом кризисе будет существовать госслужба.
                                        Стабильность, уверенность в завтрашнем дне лишь одни из плюсов
                                        трудоустройства в этот сектор. Различные льготы, полное соблюдение
                                        трудового законодательства - ряд преимуществ подогревает желание
                                        устроится на вакантное место.<br>
                                        Но сделать это непросто - государственные службы
                                        неохотно разглашают информацию о наличии свободных мест.
                                        Обращайтесь ко мне, мы напишем профессиональное
																					резюме, Вы получите ваш шанс успешно трудоустроиться
                                    </span>
										<div class="slide__footer">
											<div class="slider__form">
												<div class="slider__selector">
													<label class="control control--radio">
														Специалист
														<input type="radio" id="specialist1" name="radio1" class="control--radiobtn" checked/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Профи
														<input type="radio" id="pro1" name="radio1" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Руководитель
														<input type="radio" id="top1" name="radio1" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
												</div>
											</div>
											<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
												Заказать
											</button>
											<span class="offer__price slide__price"><?php the_field('ss23', 'option'); ?> Р</span>
										</div>
										<span class="offer__price slide__price"><?php the_field('ss21', 'option'); ?> P</span>
									</div>
								</div>
								<div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/design.jpg');">
									<div class="slide__cont">
										<span class="slide__count">3/6</span>
										<div class="grid-x grid-margin-x">
											<div class="cell small-8">
												<span class="slide__name">Фриланс/Творчество</span>
											</div>
											<div class="cell small-4 text-right">
												<span class="slider-price" id="sliderprice2"></span>
											</div>
										</div>
                                        <span class="slide__text">
                                        Чем отличается резюме фрилансера, индивидуального предпринимателя или специалиста творческой профессии от обычных резюме ?
                                        <br>
                                        Во-первых, биографический стиль повествования заменяется функциональным.
                                        <br>
                                        Во-вторых, ссылки на портфолио должны быть структурированы и оформлены лаконичным образом.
                                        <br>
                                        В-третьих, частной практике сопутствуют рекомендации.
                                        <br>
                                        Эти и ряд доп-ых правил обязательны.
                                        Обращайтесь ко мне, и потенциальный клиент ваших
																					услуг будет откликаться предложением о сотрудничестве.
                                    </span>
										<div class="slide__footer">
											<div class="slider__form">
												<div class="slider__selector">
													<label class="control control--radio">
														Специалист
														<input type="radio" id="specialist2" name="radio2" class="control--radiobtn" checked/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Профи
														<input type="radio" id="pro2" name="radio2" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Руководитель
														<input type="radio" id="top2" name="radio2" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
												</div>
											</div>
											<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
												Заказать
											</button>
											<span class="offer__price slide__price"><?php the_field('ss23', 'option'); ?> Р</span>
										</div>
										<span class="offer__price slide__price"><?php the_field('ss19', 'option'); ?> P</span>
									</div>
								</div>
								<div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/wait.jpg');">
									<div class="slide__cont">
										<span class="slide__count">4/6</span>
										<div class="grid-x grid-margin-x">
											<div class="cell small-8">
												<span class="slide__name">Перерыв в стаже</span>
											</div>
											<div class="cell small-4 text-right">
												<span class="slider-price" id="sliderprice3"></span>
											</div>
										</div>
                                        <span class="slide__text">
                                        К сожалению, часть работодателей стереотипно считает, что перерыв в трудовом стаже более 3-х месяце, говорит и низком профессионализме кандидата.Они уверены, что хороший кандидат легко найдет достойное место работы. На самом же деле причины для перерыва могут быть самые разные и они вовсе не обязательно связаны с компетентностью или некомпетентностью работника.
                                        <b class="slide__text_bold">Обратитесь ко мне и мы развеем сомнения
											работодателя. Вы именно тот, кого он ищет.</b>
                                    </span>
										<div class="slide__footer">
											<div class="slider__form">
												<div class="slider__selector">
													<label class="control control--radio">
														Специалист
														<input type="radio" id="specialist3" name="radio3" class="control--radiobtn" checked/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Профи
														<input type="radio" id="pro3" name="radio3" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Руководитель
														<input type="radio" id="top3" name="radio3" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
												</div>
											</div>
											<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
												Заказать
											</button>
											<span class="offer__price slide__price"><?php the_field('ss23', 'option'); ?> Р</span>
										</div>
										<span class="offer__price slide__price"><?php the_field('ss3', 'option'); ?> P</span>
									</div>
								</div>
								<div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/50y.jpg');">
									<div class="slide__cont">
										<span class="slide__count">5/6</span>
										<div class="grid-x grid-margin-x">
											<div class="cell small-8">
												<span class="slide__name">Возраст 50+</span>
											</div>
											<div class="cell small-4 text-right">
												<span class="slider-price" id="sliderprice4"></span>
											</div>
										</div>
                                        <span class="slide__text">
                                        Существует мнение, что трудоустройство после 45-50 лет чревато сложностями.
<br>
Якобы в этом возрасте кандидаты уже менее ориентированы на достижения, у них богатый жизненный опыт и на
<br>
мякине сверхурочных работ взрослого человека не проведешь. Кандидату же следует применить более утонченные уловки, адресуя свое резюме в те сегменты рынка труда, где солидный возраст будет преимуществом, а не недостатком.
                                        Не волнуйтесь. Обращайтесь ко мне, вопрос
																					трудойстройства перестанет быть для Вас головной болью.
                                    </span>
										<div class="slide__footer">
											<div class="slider__form">
												<div class="slider__selector">
													<label class="control control--radio">
														Специалист
														<input type="radio" id="specialist4" name="radio4" class="control--radiobtn" checked/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Профи
														<input type="radio" id="pro4" name="radio4" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Руководитель
														<input type="radio" id="top4" name="radio4" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
												</div>
											</div>
											<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
												Заказать
											</button>
											<span class="offer__price slide__price"><?php the_field('ss23', 'option'); ?> Р</span>
										</div>
										<span class="offer__price slide__price"><?php the_field('ss5', 'option'); ?> P</span>
									</div>
								</div>
								<div class="banner__slide banner__slide_show" style="background: url('/wp-content/themes/alexwlami/img/change.jpg');">
									<div class="slide__cont">
										<span class="slide__count">6/6</span>
										<div class="grid-x grid-margin-x">
											<div class="cell small-8">
												<span class="slide__name">Смена профессии</span>
											</div>
											<div class="cell small-4 text-right">
												<span class="slider-price" id="sliderprice5"></span>
											</div>
										</div>
										<span class="slide__text">Существенный прирост в зарплате, дополнительное медицинское страхование, курсы иностранного языка, квартальные и годовые бонусы  - как правило, работа в иностранной компании является золотой жилой для профессионалов своего дела, знающих иностранный язык. Закажите профессиональное авторское резюме и попадите в число счастливчиков, приглашенных на собеседование.</span>
										<div class="slide__footer">
											<!--<div class="slider__form">
												<div class="slider__selector">
													<label class="control control--radio">
														Специалист
														<input type="radio" id="specialist5" name="radio5" class="control--radiobtn" checked/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Профи
														<input type="radio" id="pro5" name="radio5" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
													<label class="control control--radio">
														Руководитель
														<input type="radio" id="top5" name="radio5" class="control--radiobtn"/>
														<div class="control__indicator"></div>
													</label>
												</div>
											</div>
											<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
												Заказать
											</button>
											<span class="offer__price slide__price"><?php the_field('ss23', 'option'); ?> Р</span>
										</div>
										<span class="offer__price slide__price"><?php the_field('ss1', 'option'); ?> P</span>
									</div>
								</div>
							</div>
							<div class="banner__dots">

							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="section section-gray mg-none">
			<div class="grid-container">
				<div class="grid-x grid-margin-x form-container">
					<div class="cell small-12 text-center">
						<h2 class="q__caption mt-60">Остались вопросы?</h2>
						<p class="q__text">Напишите мне и я отвечу Вам по email или свяжусь с Вами по телефону</p>
						<!--<form id="contact" action="/wp-content/themes/alexwlami/send-mail-1.php" method="post" class="subscribe-form">
							<div id="note"></div>
							<div id="fields" class="grid-x grid-margin-x">
								<div class="cell small-4">
									<input type="text" class="quest__input" name="name" placeholder="Ваше имя" required>
								</div>
								<div class="cell small-4">
									<input type="text" class="quest__input" name="phone" placeholder="Телефон" required data-mask="0(000)000-00-00">
								</div>
								<div class="cell small-4">
									<input type="text" class="quest__input" name="email" placeholder="E-mail">
								</div>
								<div class="cell small-12">
									<textarea name="message" class="quest__area" placeholder="Сообщение"></textarea>
								</div>
								<div class="cell small-12 text-left">
									<button type="submit" id="submit" class="prime__button centered" onclick="yaCounter48849560.reachGoal('NAPISAT'); return true;">Задать вопрос
									</button>
								</div>
							</div>
						</form>-->
						<?php echo do_shortcode('[contact-form-7 id="327" title="Контактная форма без прикрепления файлов - не попап"]'); ?>
					</div>
				</div>
			</div>
		</section>

		<div class="buy">
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell small-6 small-offset-3 end">
						<div class="buy__cont">
							<h2 class="q__caption q__caption_buy">Способы оплаты</h2>
							<!--Расскоментировать при переносе на WP-->
							<!--<div class="buy__cont">

								<img src="img/sber.png"
										 alt="sberbank"
										 class="buy__item">
								<img src="img/yandex.png"
										 alt="yandex"
										 class="buy__item">
								<img
										src="img/visa.png"
										alt="visa"
										class="buy__item">
							</div>-->
							<!--Расскоментировать при переносе на WP-->

							<div class="grid-x">
								<div class="cell large-4 medium-4 small-12 buy-img">
									<img src="/wp-content/themes/alexwlami/img/sber.png" alt="sberbank" class="buy__item">
								</div>
								<div class="cell large-4 medium-4 small-12 buy-img">
									<img src="/wp-content/themes/alexwlami/img/yandex.png" alt="yandex" class="buy__item">
								</div>
								<div class="cell large-4 medium-4 small-12 buy-img">
									<img src="/wp-content/themes/alexwlami/img/visa.png" alt="visa" class="buy__item">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); // подключаем footer.php ?>