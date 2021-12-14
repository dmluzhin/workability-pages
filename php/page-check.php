<?php
/**
 * Проверка резюме  (page-check.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Проверка резюме
 */
get_header(); // подключаем header.php ?>

<section class="q">
	<div class="slick-wrap large">
		<div class="hero-slider">
			<div class="hero-slider__slide large" style="background-image: url('/wp-content/uploads/2018/09/banner1.jpg')">
				<div class="hero-slider__container">
					<div class="hero-slider__title-2">Экспертная проверка вашего резюме за 24 часа</div>
					<ul class="hero-slider__list"> Проведу полный аудит вашего резюме:
							<li>проверю резюме по форме и по содержанию</li>
							<li>опишу допущенные ошибки в продаже вашего опыта</li>
							<li>приведу 3-5 примеров как усилить ваше резюме</li>
						</ul>
					<div class="hero-slider__subtitle">С 2016 года я помогаю грамотно презентовать себя работодателю. <br>Буду рад сотрудничеству с Вами.</div>
					<a class="prime__button show_form show_form" rel="form500" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</a>
				</div>
				<div class="hero-buttons is-left">
					<div class="hero-prev"></div>
					<div class="hero-next"></div>
				</div>
			</div>
			<div class="hero-slider__slide large" style="background-image: url('/wp-content/uploads/2018/09/bitmap2.jpg')">
				<div class="hero-slider__container">
					<div class="hero-slider__title">Продай свой опыт выгодно!</div>
					<form id="contact10" action="/wp-content/themes/alexwlami/send-mail-10.php" method="post" class="hero-slider__form mt-25">
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
								<a class="prime__button scroller__button" href="#section2">Заказать</a>
							</div>
						</div>
					</form>
				</div>
				<div class="hero-buttons is-left">
					<div class="hero-prev"></div>
					<div class="hero-next"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="grid-container mt-40">
		<div class="grid-x">
			<div class="cell large-12 medium-10 small-12 end text-center">
				<div class="q__caption" style="display: block">Услуга «Проверка резюме»</div>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-5 large-offset-1 medium-12 small-12 mt-30">
				<div class="cell__card">
					<span class="q__text text-center"><strong>Это экспертная оценка содержания и оформления <br> вашего резюме</strong>  на основе требований работодателей <br> к желаемой вами должности.</span>
				</div>
			</div>
			<div class="cell large-5 medium-12 small-12 mt-30">
				<div class="cell__card">
					<span class="q__text text-center"><strong>В услугу входит профессиональный аудит</strong> <br> вашего резюме под одну желаемую должность <br> на русском языке.</span>
				</div>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-6 medium-12 small-12 mt-30">
				<div class="resume-bg">
					<img src="/wp-content/uploads/2020/06/resume_1.png"/>
				</div>
			</div>
			<div class="cell large-6 medium-12 small-12 mt-30">
				<div class="grid-x">
					<div class="cell">
						<div class="resume-check-24">
							<div class="resume-check__info">
								<div class="resume-check__info--item">
									<p class="q__title ">В течение 24 часов <br>после заказа <u>Вы получаете:</u></p>
								</div>
								<div class="resume-check__info--button">
									<a class="resume-check__button" href="#cost">Заказать</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-x mb-30">
					<div class="cell large-5 medium-6 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-2" style="background-image: url('/wp-content/themes/alexwlami/img/icons/progress-bar-2.svg')"></div>
							<div class="preview-card__title">
								<span class="h_name__text mb-10"><u>Список ошибок</u></span>
								<div class="q__text">допущенных при составлении <br> резюме</div>
							</div>
						</div>
					</div>
					<div class="cell large-5 large-offset-1 medium-6 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-2" style="background-image: url('/wp-content/themes/alexwlami/img/bubbles.svg')"></div>
							<div class="preview-card__title">
								<span class="h_name__text mb-10"><u>Информацию</u></span>
								<div class="q__text">которую необходимо добавить <br> в Ваше резюме</div>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-x">
					<div class="cell large-5 medium-6 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-2" style="background-image: url('/wp-content/themes/alexwlami/img/star.svg')"></div>
							<div class="preview-card__title">
								<span class="h_name__text mb-10">3-5 конкретных <u>примеров</u></span>
								<div class="q__text">как необходимо описать ваш <br> функционал</div>
							</div>
						</div>
					</div>
					<div class="cell large-5 large-offset-1 medium-6 small-12">
						<div class="preview-card">
							<div class="preview-card__image image-2" style="background-image: url('/wp-content/themes/alexwlami/img/list.svg')"></div>
							<div class="preview-card__title">
								<span class="h_name__text mb-10">На чем сделать <u>фокус</u></span>
								<div class="q__text">чтобы заинтересовать <br> работодателя</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-gray section-resume">
		<div class="grid-container relative">
			<div class="grid-x mt-30 mb-30">
				<div class="cell large-9 medium-7 small-12">
					<div class="grid-x">
						<div class="cell large-4">
							<div class="block-banner">
								<div class="block-banner__count">
									<img src="http://workability.ru/wp-content/themes/alexwlami/img/assets/1.svg">
								</div>
								<div class="block-banner__content">
									<h3 class="q__caption--simple">1. Оформите заказ:</h3>
									<ul class="block-banner__list">
										<li class="block-banner__list--item">Оплатите проверку резюме;</li>
										<li class="block-banner__list--item">Отправьте мне ваше резюме;</li>
									</ul>
									<a href="#cost" class="resume-check__button mt-30">Стоимость</a>
								</div>
							</div>
						</div>
						<div class="cell large-5">
							<div class="block-banner">
								<div class="block-banner__count">
									<img src="http://workability.ru/wp-content/themes/alexwlami/img/assets/2.svg">
								</div>
								<div class="block-banner__content">
									<h3 class="q__caption--simple">2. В течение 24 часов <br> будни я пересылаю вам <br> на телефон:</h3>
									<ul class="block-banner__list">
										<li class="block-banner__list--item">аудит вашего резюме в формате <br> голосовых сообщений;</li>
										<li class="block-banner__list--item">в которых подробно рассказываю что и как <br> следует
											исправить.
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="cell large-3">
							<div class="block-banner">
								<div class="block-banner__count">
									<img src="http://workability.ru/wp-content/themes/alexwlami/img/assets/3.svg">
								</div>
								<div class="block-banner__content">
									<h3 class="q__caption--simple">3. Итог</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-3 medium-5 small-12">
					<div class="order-phone">
						<img src="/wp-content/uploads/2020/06/phone.png"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-12 medium-12 small-12 end text-center mb-60">
				<h2 class="q__caption">Что вы получите в результате?</h2>
			</div>
			<div class="cell large-4 medium-4 small-12">
				<div class="cell__card h100">
					<div class="cell__bg cell__bg--arrow-top"></div>
					<h5 class="q__caption q__caption--medium">Рекомендации <br> по форме</h5>
					<span class="q__title q__title--bold"></span>
					<ul class="cell__checklist paddingless">
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>объем и структура</strong>
						</li>
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>читабельность и восприятие</strong>
						</li>
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>общее впечатление</strong>
						</li>
					</ul>
					<div class="cell__block">
						<div class="cell__checklist--sublist">
							<div class="cell__checklist--sublist-item">
								<span class="glyph circle"></span>
								сильные стороны
							</div>
							<div class="cell__checklist--sublist-item">
								<span class="glyph circle"></span>
								следует усилить
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="cell large-4 medium-4 small-12">
				<div class="cell__card h100">
					<div class="cell__bg cell__bg--puzzle"></div>
					<h5 class="q__caption q__caption--medium">Рекомендации <br> по содержанию</h5>
					<span class="q__title q__title--bold"></span>
					<ul class="cell__checklist paddingless">
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>фотография</strong>
						</li>
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>контактные данные</strong>
						</li>
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>желаемая должность</strong>
						</li>
						<li class="cell__checklist--item">
							<span class="glyph check"></span>
							<strong>опыт работы</strong>
						</li>
					</ul>
					<div class="cell__block">
						<div class="cell__checklist--sublist">
							<div class="cell__checklist--sublist-item">
								<span class="glyph circle"></span>
								последнее место
							</div>
							<div class="cell__checklist--sublist-item">
								<span class="glyph circle"></span>
								целостность
							</div>
						</div>

						<div class="cell__checklist--sublist">
							<div class="cell__checklist--sublist-item">
								<span class="glyph circle"></span>
								сильные стороны
							</div>
							<div class="cell__checklist--sublist-item">
								<span class="glyph circle"></span>
								следует усилить
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="cell large-4 medium-4 small-12">
				<div class="cell__card h100">
					<div class="cell__bg cell__bg--check"></div>
					<h5 class="q__caption q__caption--medium">По повышению ценности <br> вашего опыта </h5>
					<span class="q__title q__title--bold"></span>
					<ul class="cell__checklist paddingless">
						<li class="cell__checklist--item">
							<span class="glyph check"></span>что добавить
						</li>
						<li class="cell__checklist--item">
							<span class="glyph check"></span>как переписать и продать <br> дороже ваш опыт
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section__resume-price" id="cost">
	<div class="resume-price__overlay"></div>
	<div class="grid-container resume-price">
		<h1 class="q__caption mb-60">Сколько стоит проверка резюме?</h1>
		<div class="resume-price__toggler">
			<div class="resume-price__toggler--item first active">
				<div class="tab__order--price mb-15">500 Р</div>
				<ul class="cell__checklist paddingless">
					<li class="cell__checklist--item mb-10">
						<span class="glyph check"></span>
						Опыт работы <br> менее 10 лет
					</li>
				</ul>
				<div class="resume-price__icon resume-price__icon--student"></div>
				<div class="resume-price__button">
					<button class="prime__button show_form" rel="form500">Заказать</button>
				</div>
			</div>
			<div class="resume-price__toggler--item second">
				<div class="tab__order--price mb-15">700 Р</div>
				<ul class="cell__checklist paddingless">
					<li class="cell__checklist--item mb-10">
						<span class="glyph check"></span>
						Опыт работы более 10 лет
					</li>
					<li class="cell__checklist--item mb-10">
						<span class="glyph check"></span>
						Вы претендуете на руководящую должность
					</li>
				</ul>
				<div class="resume-price__icon resume-price__icon--costume"></div>
				<div class="resume-price__button">
					<button class="prime__button show_form" rel="form700">Заказать</button>
				</div>
			</div>
		</div>
		<p class="resume-price__footnote"><span class="resume-price__footnote--star">*</span>&nbsp;При запросе на аудит в текстовом виде стоимость увеличивается на 2000 рублей</p>
	</div>
</section>

<section class="section section__check-resume">
	<div class="grid-container check-resume">
		<div class="grid-x grid-margin-x">
			<div class="cell large-12 medium-12 small-12 end text-center mb-60">
				<h3 class="q__caption">Кому не подойдёт услуга «Проверка резюме»</h3>
			</div>
		</div>

		<div class="grid-x grid-margin-x">
			<div class="cell large-8 medium-8 small-12">
				<div class="grid-x grid-margin-x">
					<div class="cell large-6 medium-6 small-12 mb-40">
						<div class="check-resume__item">
							<div class="check-resume__icon check-resume__graph"></div>
							<div class="check-resume__text">большое <b>количество переходов</b> со сменой сферы или позиции (более 1)</div>
						</div>
					</div>
					<div class="cell large-6 medium-6 small-12 mb-40">
						<div class="check-resume__item">
							<div class="check-resume__icon check-resume__office"></div>
							<div class="check-resume__text"><b>длительный пробел</b> после последнего место работы</div>
						</div>
					</div>
					<div class="cell large-6 medium-6 small-12 mb-40">
						<div class="check-resume__item">
							<div class="check-resume__icon check-resume__time"></div>
							<div class="check-resume__text"><b>продолжительные перерывы</b> в карьере</div>
						</div>
					</div>
					<div class="cell large-6 medium-6 small-12 mb-40">
						<div class="check-resume__item">
							<div class="check-resume__icon check-resume__runner"></div>
							<div class="check-resume__text"><b>более 3-х мест работы</b> с продолжительностю менее 2 лет</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cell large-4 medium-4 small-12">
				<div class="grid-x grid-margin-x">
					<div class="cell large-12 medium-12 small-12 mb-40">
						<div class="check-resume__item">
							<div class="check-resume__icon check-resume__rockstar"></div>
							<div class="check-resume__text">вы <b>переходите в другую сферу</b>, <br> в новую профессию</div>
						</div>
					</div>
					<div class="cell large-12 medium-12 small-12">
						<div class="check-resume__question">
							<p class="h_name__text">Почему?</p>
							<p class="h_name__desc">Необходима дополнительная консультация для выяснения ситуации и разработки содержания резюме, способного разрешить эти проблемы.</p>
							<p class="h_name__desc"><strong>Такие случаи рассматриваются в рамках услуги</strong> "Составление резюме на заказ".</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section__resume-diff">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell large-12 medium-12 small-12 end text-center mb-40">
				<h4 class="q__caption is-borderless">Чем составление резюме отличается от проверки резюме?</h4>
			</div>
		</div>
	</div>
	<div class="resume-diff">
		<div class="resume-diff__table">
			<div class="resume-diff__table--left">
				<div class="resume-diff__table--head">
					<div class="resume-diff__table--title">Составление резюме на заказ</div>
				</div>
				<div class="resume-diff__table--body">
					<div class="resume-diff__table--content">
						<p class="resume-diff__table--item">Разрабатываю и составляю резюме с нуля под <br> желаемую вами должность.</p>
						<p class="resume-diff__table--item">Перед составлением резюме я провожу 1 часовое интервью с вами и собираю информацию  о вашей карьерной биографии.</p>
						<p class="resume-diff__table--item">Вы получаете готовое резюме <br> через 2-3 рабочих дня. </p>
						<p class="resume-diff__table--item">В зависимости от тарифа возможен диалог <br> и дополнителþные вопросы.</p>
						<p class="resume-diff__table--item">Стоимость услуги: <br> от 1800 до 3000 рублей. </p>
					</div>
				</div>
			</div>
			<div class="resume-diff__divider">
				<div class="resume-diff__circle star"></div>
				<div class="resume-diff__circle video"></div>
				<div class="resume-diff__circle time"></div>
				<div class="resume-diff__circle question"></div>
				<div class="resume-diff__circle rouble"></div>
			</div>
			<div class="resume-diff__table--right">
				<div class="resume-diff__table--head">
					<div class="resume-diff__table--title">Проверка резюме</div>
				</div>
				<div class="resume-diff__table--body">
					<div class="resume-diff__table--content">
						<p class="resume-diff__table--item">Проверяю содержание <br> и структуру вашего резюме.</p>
						<p class="resume-diff__table--item">Нет интервью. После оплаты услуги проверка резюме я высылаю вам аудит в течение 24 часов* голосовыми сообщениями на ваш телефон.</p>
						<p class="resume-diff__table--item">Вы получаете подробные развернутые рекомендации в формате <br> голосовых сообщений в течение 24 часов*. </p>
						<p class="resume-diff__table--item">Диалог и созвон с клиентом <br> не предусмотрен.</p>
						<p class="resume-diff__table--item">Стоимость услуги: <br> 500 или 700 рублей.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-container">
			<div class="resume-diff__table--footer">
				<p class="q__text"><span class="resume-price__footnote--star">*</span>все услуги оказываются в рабочие дни в соответствии с государственным рабочим календарем, т.е. в выходные и официальные праздничные дни услуги не оказываются.</p>
			</div>
		</div>
	</div>
</section>

<section class="section section-gray mg-none">
	<div class="grid-container">
		<div class="grid-x grid-margin-x form-container">
			<div class="cell small-12 text-center">
				<h2 class="q__caption mt-60">Остались вопросы?</h2>
				<p class="q__text">Напишите мне и я отвечу Вам по email или свяжусь с Вами по телефону</p>
				<?php echo do_shortcode( '[contact-form-7 id="327" title="Контактная форма без прикрепления файлов - не попап"]' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); // подключаем footer.php ?>