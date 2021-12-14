<?php
/**
 * Проверка резюме  (psamostoyatelnaya-proverka.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Самостоятельная проверка
 */
get_header(); // подключаем header.php ?>

<section class="q">
	<div class="slick-wrap large">
		<div class="hero-slider">
			<div class="hero-slider__slide large" style="background-image: url('/wp-content/themes/alexwlami/img/self.png')">
				<div class="hero-slider__container">
					<h1 class="hero-slider__hero">Самостоятельная <br>проверка резюме</h1>

					<div class="hero-slider__subtitle">Вы можете проверить резюме самостоятельно, <br> а можете заказать проверку.</div>
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
</section>

<section class="section">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-12 medium-12 small-12 end text-center">
					<h2 class="q__caption">В каких случаях необходимо проверить правильность написания резюме?</h2>
				</div>
				<div class="cell large-4 medium-4 small-12">
					<div class="cell__card h100">
						<div class="cell__bg cell__bg--puzzle-outline"></div>
						<h5 class="q__caption q__caption--medium">Вы составляете резюме</h5>
						<span class="q__title q__title--bold"><strong>Вы хотите понять как сделать современное резюме:</strong></span>
						<ul class="cell__checklist paddingless">
							<li class="cell__checklist--item">
								<span class="glyph puzzle"></span>
								<span>что нужно добавить?</span>
							</li>
							<li class="cell__checklist--item">
								<span class="glyph pencil"></span>
								<span>что изменить?</span>
							</li>
							<li class="cell__checklist--item">
								<span class="glyph bucket"></span>
								<span>что следует удалить из резюме?</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="cell large-4 medium-4 small-12">
					<div class="cell__card h100">
						<div class="cell__bg cell__bg--briefcase"></div>
						<h5 class="q__caption q__caption--medium">Вы составили резюме</h5>
						<span class="q__title q__title--bold"><strong>Вы сомневаетесь в его качестве:</strong></span>
						<ul class="cell__checklist paddingless">
							<li class="cell__checklist--item">
								<span class="glyph book"></span>
								<span>насколько грамотно резюме?</span>
							</li>
							<li class="cell__checklist--item">
								<span class="glyph briefcase"></span>
								<span>привлечет ли резюме <br> работодателя?</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="cell large-4 medium-4 small-12">
					<div class="cell__card h100">
						<div class="cell__bg cell__bg--close-circle"></div>
						<h5 class="q__caption q__caption--medium">Вы отправили резюме</h5>
						<span class="q__title q__title--bold"><strong>Вы ожидаете реакцию работодателя:</strong></span>
						<ul class="cell__checklist paddingless">
							<li class="cell__checklist--item">
								<span class="glyph uncheck"></span>
								<span>ваше резюме не просматривают</span>
							</li>
							<li class="cell__checklist--item">
								<span class="glyph uncheck"></span>
								<span>просматривают и не приглашают <br> на собеседование</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__approach">
		<div class="grid-container">
			<div class="cell large-12 medium-12 small-12 end text-center">
				<h1 class="q__caption mb-40">Начните с проверки правильного оформления вашего резюме</h1>
			</div>
			<div class="cell large-8 medium-8 small-12">
				<p class="paragraph"><strong>Ниже самая полная инструкция <br>
					по проверке вашего резюме: проверка по оформлению и по содержанию.</strong></p>
			</div>
		</div>
		<div class="grid-container approach__container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-4 medium-6 small-12 mb-20">
					<div class="approach__card">
						<div class="approach__card--header">
							<div class="approach__title">Проверка резюме <br> по форме</div>
							<div class="approach__icon">
								<img src="/wp-content/themes/alexwlami/img/icons/doc1.svg"/>
							</div>
						</div>
						<div class="approach__card--content">
							<ul class="approach__list">
								<li><span class="glyph check"></span>объем резюме</li>
								<li><span class="glyph check"></span>стиль и форматирование</li>
								<li><span class="glyph check"></span>грамматические ошибки</li>
								<li><span class="glyph check"></span>главнейшие разделы резюме</li>
								<li><span class="glyph check"></span>описание цели и мотивация</li>
							</ul>
							<div class="approach__content--subtitle">
								<span class="glyph bonus"></span>
								Бонус: проверка по содержанию
							</div>
							<ul class="approach__list">
								<li><span class="glyph dot"></span>проверка фото</li>
								<li><span class="glyph dot"></span>контактные данные</li>
							</ul>
						</div>
						<div class="approach__card--footer">
							<a href="#read" class="prime__button">Читать</a>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-6 small-12 mb-20">
					<div class="approach__card">
						<div class="approach__card--header">
							<div class="approach__title">Проверка резюме <br> по содержанию</div>
							<div class="approach__icon">
								<img src="/wp-content/themes/alexwlami/img/icons/doc2.svg"/>
							</div>
						</div>
						<div class="approach__card--content">
							<ul class="approach__list">
								<li><span class="glyph check"></span>проверка фото</li>
								<li><span class="glyph check"></span>контактные данные</li>
								<li><span class="glyph check"></span>желаемую должность</li>
								<li><span class="glyph check"></span>опыт работы</li>
								<li><span class="glyph check"></span>информацию об образовании</li>
							</ul>
						</div>
						<div class="approach__card--footer">
							<a class="prime__button" href="#check">Заказать проверку</a>
						</div>
					</div>
				</div>
				<div class="approach__resume">
					<img src="/wp-content/themes/alexwlami/img/resume__2.png"/>
				</div>
			</div>
		</div>
		<div class="approach__overlay"></div>
	</section>

	<div class="section section__check" id="read">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-12 medium-12 small-12 end text-center">
					<h1 class="q__caption">Объем резюме</h1>
					<p class="mb-40"><strong>Объем резюме должен составлять:</strong></p>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell large-4 medium-12 small-12 mb-30">
					<div class="check__card">
						<div class="check__card--title">1,5 - 2</div>
						<div class="check__card--content">
							<p><strong>страницы</strong> для начинающего <br>
								специалиста опытом работы <br><strong>до 5 лет</strong></p>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-12 small-12 mb-30">
					<div class="check__card">
						<div class="check__card--title">2,5 - 3</div>
						<div class="check__card--content">
							<p><strong>страницы</strong> для профессионала
								стаж работы <strong>от 7 - 10 лет</strong></p>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-12 small-12">
					<div class="check__card is-transparent">
						<div class="check__card--bg"></div>
						<div class="check__card--title">Почему</div>
						<div class="check__card--content">
							<p><strong>У большинства рекрутеров  нет времени</strong> на изучение деталей вашей жизни.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell large-12 medium-12 small-12 end text-left">
					<h1 class="q__caption" style="width: 100%; text-align: left">Ваша задача:</h1>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell large-5 medium-6 small-12">
					<div class="cell__card">
						<ul class="cell__checklist">
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								<h3 class="q__caption--simple mb-0">Минимальным количеством слов</h3>
								<p>рассказать максимально ёмко и целостно о вашем профессиональном опыте.</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="cell large-7 medium-6 small-12">
					<div class="cell__card">
						<ul class="cell__checklist">
							<li class="cell__checklist--item">
								<span class="glyph uncheck"></span>
								<h3 class="q__caption--simple mb-0">Кратко — значит без лишних слов, но не в ущерб смыслу.</h3>
								<p>Благодаря краткости из резюме пропадает мусор, рекрутер тратит меньше времени
									на чтение и быстрее сформирует впечатление.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="grid-container">
				<div class="resume__bg3">
					<img src="/wp-content/themes/alexwlami/img/resume__3.png"/>
					<div class="resume__gradient-right"></div>
				</div>
			</div>
		</div>
	</div>

	<section class="section section__formcheck">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-12 medium-12 small-12 end text-center mb-60">
					<h3 class="q__caption">Стиль и форматирование в резюме</h3>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell large-8">
					<div class="formcheck__card">
						<div class="formcheck__glyph person"></div>
						<div class="formcheck__card--title">Ваше резюме предопределит <br> вопросы к вам на собеседовании</div>
						<div class="formcheck__card--content">
							<ul class="cell__checklist">
								<li class="cell__checklist--item">
									<span class="glyph dot"></span>
									<span>Работодатель тратит меньше 1 минуты, чтобы ознакомиться с вашим резюме. За это время рекрутер хочет собрать все, что ему нужно знать о вас - ваш опыт, навыки и пригодность.</span>
								</li>
								<li class="cell__checklist--item">
									<span class="glyph dot"></span>
									<span>Цвета, картинки и прочие декоративные элементы требуют от рекрутера усилий - разобрать информацию. Вместо этого рекрутер закрывает ваше резюмеи переходит к следующему.</span>
								</li>
								<li class="cell__checklist--item">
									<span class="glyph dot"></span>
									Красивое резюме не нужно, нужно читабельное резюме.
								</li>
							</ul>
						</div>
					</div>

					<div class="formcheck__card">
						<div class="formcheck__glyph star"></div>
						<div class="formcheck__card--title">Совет</div>
						<div class="formcheck__card--content">
							<ul class="cell__checklist">
								<li class="cell__checklist--item">
									<span class="glyph check"></span>
									<span>Используете шаблон сайта HH.ru</span>
								</li>
							</ul>
						</div>
					</div>

					<div class="formcheck__card">
						<div class="formcheck__glyph question-mark"></div>
						<div class="formcheck__card--title">Почему</div>
						<div class="formcheck__card--content">
							<ul class="cell__checklist">
								<li class="cell__checklist--item">
									<span class="glyph check"></span>
									<span>95% вакансий публикуется на этом сайте. Рекрутеры привыкли к его формату, быстрее ориентируются в содержании. Главное в сильном резюме - забота о читателе, забота о рекрутере.</span>
								</li>
								<li class="cell__checklist--item">
									<span class="glyph check"></span>
									<span>HH использует линейный формат разметки, несущий:легкость восприятия, логичность изложения и стандартность шрифтов.</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-12 small-12">
					<img class="formcheck__img" src="/wp-content/themes/alexwlami/img/resume__4.png"/>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__grey">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-12 medium-12 small-12 end text-center mb-60">
					<h3 class="q__caption">Главные разделы резюме</h3>
					<p class="paragraph">Ваше резюме должно выглядеть как бизнес предложение. Ничего лишнего. <br>
						Каждый раздел должен вас продавать и нести свой смысл. </p>
					<h6 class="paragraph mt-20"><strong>Каковы главные ошибки, совершаемые кандидатами в самых важных блоках?</strong></h6>
				</div>
			</div>

			<div class="grid-x">
				<div class="cell large-12 medium-12 small-12">
					<div class="formcheck__card is-borderless">
						<div class="grid-x grid-margin-x">
							<div class="cell large-6 medium-12 small-12">
								<div class="formcheck__box">
									<div class="formcheck__card--title title-2">Название желаемой должности</div>
									<p class="paragraph">Более половины моих клиентов не знают на какую должность они претендуют.</p>
									<p class="paragraph"><strong>Кандидаты забывают об этом разделе, пропускают его. Незнание ответа на вопрос “кем быть?” это ваша головная боль.</strong> Неуказывая название желаемой должности или указывая несколько желаемых должностей вы перекладываете вашу неопределенность, вашу головную боль на рекрутера. Будто, рекрутер должен понять под какую вакансию вас лучше приспособить.</p>
									<p class="paragraph">Выбор всегда будет в пользу кандидат, который описывает свой опыт в контексте требований работодателя к той должности на которую кандидат претендует.</p>
								</div>
								</div>
							<div class="cell large-6 medium-12 small-12">
								<div class="formcheck__container">
									<div class="formcheck__resume">
										<div class="formcheck__resume--icon glyph uncheck"></div>
										<div class="formcheck__resume--header">
											<div class="formcheck__resume--img">
												<img src="/wp-content/themes/alexwlami/img/icons/person-yellow.svg"/>
											</div>
											<div class="formcheck__resume--description">
												<p>Мужчина, 40 лет родился 25 мая 1979</p>
												<p>Москва, готов к переезду готов к командировкам</p>
											</div>
										</div>
										<div class="formcheck__resume--content">
											<p class="formcheck__resume--title">Менеджер/специалист/водитель</p>
											<p>Продажи: <br>
												- менеджер по работе с клиентами</p>
											<p>Занятость - полная занятость</p>
											<p>График работы - полный день</p>
										</div>
									</div>

									<div class="formcheck__resume">
										<div class="formcheck__resume--icon glyph check"></div>
										<div class="formcheck__resume--header">
											<div class="formcheck__resume--img">
												<img src="/wp-content/themes/alexwlami/img/icons/person-yellow.svg"/>
											</div>
											<div class="formcheck__resume--description">
												<p>Мужчина, 40 лет родился 25 мая 1979</p>
												<p>Москва, готов к переезду готов к командировкам</p>
											</div>
										</div>
										<div class="formcheck__resume--content">
											<p>Желаемая должность</p>
											<div class="formcheck__resume--divider"></div>
											<p class="formcheck__resume--title">Менеджер по развитию бизнеса (EPR-системы)</p>
											<p>Информационные технологии, интернет, телеком</p>
											<ul>
												<li><span class="glyph dot"></span>Продажи</li>
												<li><span class="glyph dot"></span>Системы управления предприятием</li>
												<li><span class="glyph dot"></span>Управление проектами</li>
											</ul>
											<p>Занятость - полная занятость <br> График работы - полный день</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="formcheck__card is-borderless">
						<div class="grid-x grid-margin-x">
							<div class="cell large-5 medium-12 small-12">
								<div class="formcheck__box">
									<div class="formcheck__resume">
										<div class="formcheck__resume--icon glyph uncheck"></div>
										<div class="formcheck__resume--content">
											<p><strong>Обо мне:</strong></p>
											<p>Инициативность Аккуратность Ответственность <br>
												Имею вид на жительство с 2017 по 2022 <br>
												ИНН 123456789012345<br>
												Есть водительское удостоверение категории В-С (hyundai elantra 2019) знание Москвы и МО<br>
												Свободное владение русским и турецким языком</p>
											<p><strong>Портфолио:</strong></p>
											<div class="formcheck__resume--divider"></div>
											<div class="formcheck__row">
												<div class="formcheck__row--icon">
													<img src="/wp-content/themes/alexwlami/img/icons/person-icon-gr100.svg"/>
												</div>
												<div class="formcheck__row--icon">
													<img src="/wp-content/themes/alexwlami/img/icons/smile-grey.svg"/>
												</div>
											</div>
											<div class="formcheck__resume--divider"></div>
											<p><strong>Образование:</strong></p>
											<p>Среднее образование</p>
										</div>
									</div>

									<div class="formcheck__resume">
										<div class="formcheck__resume--icon glyph check" style="left: auto"></div>
										<div class="formcheck__resume--content">
											<p><strong>Среднее специальноре образование:</strong></p>
											<div class="formcheck__resume--divider"></div>
											<div class="formcheck__row">
												<ul>
													<li><span class="glyph dot"></span> 1987</li>
												</ul>
												<p class="paragraph">Медицинский колледж №1 <br>
													Сестринское дело</p>
											</div>
											<p><strong>Знание языков</strong></p>
											<div class="formcheck__resume--divider"></div>
											<div class="formcheck__row">
												<ul>
													<li><span class="glyph dot"></span>Русский - родной</li>
												</ul>
											</div>
											<p><strong>Повышение квалификации, курсы</strong></p>
											<div class="formcheck__row">
												<ul>
													<li><span class="glyph dot"></span>2015</li>
												</ul>
												<p>Медицинский массаж <br>
													РУДН, массажист</p>
											</div>

											<div class="formcheck__row">
												<ul>
													<li><span class="glyph dot"></span>2014</li>
												</ul>
												<p>Массаж и гимнастика для детей <br>
													Институт профессионального массажа, массажист</p>
											</div>

											<div class="formcheck__row">
												<ul>
													<li><span class="glyph dot"></span>2010</li>
												</ul>
												<p>Методики и техники массажа <br>
													Институт профессионального массажа, массажист</p>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="cell large-7 medium-12 small-12">
									<div class="formcheck__card--title title-2">Образование</div>
									<p class="paragraph">Ваше образование отражает проделанный вами путь навстречу профессии. Расставьте верно акценты.</p>

									<div class="formcheck__card--title title-2">Опыт работы</div>
									<p class="paragraph">Как вы в делили первый круг обязанностей? Что в􏰃ставили на основной план, что оказалось вторичным? Соответствуют ли они компетенциям, которые ожидает от вас работодатель?</p>

									<div class="formcheck__card--title title-2">Личные качества</div>
									<p class="paragraph">Имеют ли перечисленные вами персональные качества отношение к профессии? Какое влияние имеют указанные вами личные􏰂качества на исполнение обязанностей той должности, на которую вы претендуете?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-grammar">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-12 medium-12 small-12 end text-center mb-60">
					<h3 class="q__caption">Проверка резюме по форме: грамматические ошибки</h3>
					<p class="paragraph"><strong>Проверьте на ошибки ваше резюме открыв его в MS Word.</strong></p>
					<p class="paragraph">Ms Word выделит грамматические ошибки и предложит варианты для их исправления.</p>
					<h5><strong>Почему? Сравните резюме:</strong></h5>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell large-6 medium-6 small-12">
					<div class="formcheck__card" style="padding: 30px 15px 30px 35px; font-size: 14px;">
						<div class="grid-x">
							<div class="cell large-6 medium-6 small-6">
								<p class="paragraph">Желаемая должность</p>
								<div class="divider yellow"></div>
								<p class="paragraph mb-0"><strong>Учитель руского языка</strong></p>
								<p class="paragraph">Наука, образование</p>
								<ul>
									<li><span class="glyph dot"></span>Гуманитарные науки</li>
									<li><span class="glyph dot"></span>Преподавание</li>
								</ul>
								<p class="paragraph">Занятость: полная занятость <br>График работы: полный день</p>
							</div>
							<div class="cell large-6 medium-6 small-12">
								<p class="paragraph">Опыт работы - 44 года</p>
								<div class="divider grey"></div>
								<p class="paragraph"><strong>Сентябрь 2004 - наст. время <br> 15 лет 8 месяцев</strong></p>
								<ul>
									<li><span class="glyph dot"></span>щкола</li>
									<li><span class="glyph dot"></span>Образовательные учреждения</li>
								</ul>
								<p class="paragraph"><strong>учитель русского языка </strong> <br>учитель русского языка</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-6 medium-6 small-12">
					<div class="formcheck__card" style="padding: 30px 15px 30px 35px; font-size: 14px; border-color: #FF0000;">
						<div class="grid-x">
							<div class="cell large-6 medium-6 small-6">
								<p class="paragraph">Желаемая должность</p>
								<div class="divider yellow"></div>
								<p class="paragraph mb-0"><strong>Учитель <span class="mistake">руского</span> языка</strong></p>
								<p class="paragraph">Наука, образование</p>
								<ul>
									<li><span class="glyph dot"></span>Гуманитарные науки</li>
									<li><span class="glyph dot"></span>Преподавание</li>
								</ul>
								<p class="paragraph">Занятость: полная занятость <br>График работы: полный день</p>
							</div>
							<div class="cell large-6 medium-6 small-12">
								<p class="paragraph">Опыт работы - 44 года</p>
								<div class="divider grey"></div>
								<p class="paragraph"><strong>Сентябрь 2004 - наст. время <br> 15 лет 8 месяцев</strong></p>
								<ul>
									<li><span class="glyph dot"></span><span class="mistake">щкола</span></li>
									<li><span class="glyph dot"></span>Образовательные учреждения</li>
								</ul>
								<p class="paragraph"><strong>учитель русского языка </strong> <br>учитель русского языка</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-bonus">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-12 medium-12 small-12 end text-center mb-60">
					<h3 class="q__caption">Бонус: проверка по содержанию: фото в резюме</h3>
					<p class="paragraph">Фото в резюме должно закреплять прочную ассоциацию с вашей профессиональной деятельностью.</p>
					<p class="paragraph"><strong>Требования к фотографии:</strong></p>
					<div class="bonus__icons">
						<div class=""></div>
					</div>
				</div>
			</div>

			<div class="bonus">
				<div class="grid-x grid-margin-x">
					<div class="cell large-3 medium-6 small-6">
						<div class="bonus__card">
							<img src="/wp-content/themes/alexwlami/img/icons/bonus-4.svg" class="bonus__card--img mb-20"/>
							<h6><strong>Жанр фото: </strong></h6>
							<p class="paragraph">портрет - снимок, передающий <br>
								черты внешности и внутреннего характера человека.
							</p>
						</div>
					</div>
					<div class="cell large-3 medium-6 small-6">
						<div class="bonus__card">
							<img src="/wp-content/themes/alexwlami/img/icons/bonus-1.svg" class="bonus__card--img mb-20"/>
							<h6><strong>Кадрирование</strong></h6>
							<p class="paragraph">голова и плечи. <br>
								Если за рабочим столом: голова-плечи-грудь
							</p>
						</div>
					</div>
					<div class="cell large-3 medium-6 small-6">
						<div class="bonus__card">
							<img src="/wp-content/themes/alexwlami/img/icons/bonus-2.svg" class="bonus__card--img mb-20"/>
							<h6><strong>Фон: </strong></h6>
							<p class="paragraph">желательно использовать спокойный фон, например, обычная офисная стена или фон фотостудии;</p>
						</div>
					</div>
					<div class="cell large-3 medium-6 small-6">
						<div class="bonus__card">
							<img src="/wp-content/themes/alexwlami/img/icons/bonus-3.svg" class="bonus__card--img mb-20"/>
							<h6><strong>Лицо: </strong></h6>
							<p class="paragraph">расслабленное, добрый/приветливый взгляд и легкая улыбка - уголками рта, без демонстрации зубов, т.к. зубы воспринимаются как проявление агрессии (хищник).</p>
						</div>
					</div>
				</div>
			</div>

			<div class="grid-x grid-margin-x">
				<div class="cell large-4 medium-6 small-12">
					<div class="bonus__profile">
						<div class="bonus__profile--image">
							<img src="/wp-content/themes/alexwlami/img/bonus-pr-1.png"/>
						</div>
						<div class="bonus__profile--content">
							<div class="bonus__profile--icon glyph uncheck"></div>
							<div class="bonus__profile--title">Водитель экспедитор B-C</div>
							<div class="bonus__profile--price">50.000Р</div>
							<div class="divider"></div>
							<p class="paragraph"><strong>Мужчина, 28 лет, стаж 8 лет, <br>
								среднее специальное образование</strong></p>
							<div class="bonus__profile--row">
								<p class="paragraph">2014-2018</p>
								<p class="paragraph">Водитель такси <br>
									ООО Супертакси, Москва</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-6 small-12">
					<div class="bonus__profile">
						<div class="bonus__profile--image">
							<img src="/wp-content/themes/alexwlami/img/bonus-pr-2.png"/>
						</div>
						<div class="bonus__profile--content">
							<div class="bonus__profile--icon glyph uncheck"></div>
							<div class="bonus__profile--title">Руководитель на производство</div>
							<div class="bonus__profile--price">60.000Р</div>
							<div class="divider"></div>
							<p class="paragraph"><strong>Женщина, 44 года, стаж 5 лет, <br>
								среднее специальное образование</strong></p>
							<div class="bonus__profile--row">
								<p class="paragraph">2017-2019</p>
								<p class="paragraph">Начальник цеха <br>
									ПФК Ресурсыроссии</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-6 small-12">
					<div class="bonus__profile">
						<div class="bonus__profile--image">
							<img src="/wp-content/themes/alexwlami/img/bonus-pr-3.png"/>
						</div>
						<div class="bonus__profile--content">
							<div class="bonus__profile--icon glyph uncheck"></div>
							<div class="bonus__profile--title">Главный бухгалтер</div>
							<div class="bonus__profile--price">Зарплата не указана</div>
							<div class="divider"></div>
							<p class="paragraph"><strong>Женщина, 45 лет, стаж 25 лет, <br>
								высшее образование</strong></p>
							<div class="bonus__profile--row">
								<p class="paragraph">2000-Н.В</p>
								<p class="paragraph">Главный бухгалтер <br> ООО Аудит</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-6 small-12">
					<div class="bonus__profile">
						<div class="bonus__profile--image">
							<img src="/wp-content/themes/alexwlami/img/bonus-pr-4.png"/>
						</div>
						<div class="bonus__profile--content">
							<div class="bonus__profile--icon glyph check"></div>
							<div class="bonus__profile--title">Водитель B-C</div>
							<div class="bonus__profile--price">40.000Р</div>
							<div class="divider"></div>
							<p class="paragraph"><strong>Мужчина, 50 лет, стаж 30 лет, <br>
								среднее специальное образование</strong></p>
							<div class="bonus__profile--row">
								<p class="paragraph">2015-2016</p>
								<p class="paragraph">Водитель такси <br>ООО Некси Такси, Москва</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-6 small-12">
					<div class="bonus__profile">
						<div class="bonus__profile--image">
							<img src="/wp-content/themes/alexwlami/img/bonus-pr-5.png"/>
						</div>
						<div class="bonus__profile--content">
							<div class="bonus__profile--icon glyph check"></div>
							<div class="bonus__profile--title">Руководитель на производство</div>
							<div class="bonus__profile--price">Зарплата не указана</div>
							<div class="divider"></div>
							<p class="paragraph"><strong>Мужчина, 44 года, стаж 5 лет, <br>
								среднее специальное образование</strong></p>
							<div class="bonus__profile--row">
								<p class="paragraph">2016-2018</p>
								<p class="paragraph">Начальник цеха граненных опор <br>
									ПФК Профснабресурс</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cell large-4 medium-6 small-12">
					<div class="bonus__profile">
						<div class="bonus__profile--image">
							<img src="/wp-content/themes/alexwlami/img/bonus-pr-6.png"/>
						</div>
						<div class="bonus__profile--content">
							<div class="bonus__profile--icon glyph check"></div>
							<div class="bonus__profile--title">Главный бухгалтер</div>
							<div class="bonus__profile--price">Зарплата не указана</div>
							<div class="divider"></div>
							<p class="paragraph"><strong>Женщина, 40 лет, стаж 20 лет, <br>
								высшее образование</strong></p>
							<div class="bonus__profile--row">
								<p class="paragraph">2000-2019</p>
								<p class="paragraph">Главный бухгалтер <br>
									ООО ГлавУчет</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__bonus-check">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-12 medium-12 small-12 end text-center mb-60">
					<h3 class="q__caption">Бонус: проверка по содержанию: контактные данные</h3>
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<div class="cell large-7 medium-12 small-12">
					<div class="bonus-check__card">
						<div class="bonus-check__card--item">
							<p class="paragraph"><strong>Ваши контактные данные должны быть расположены в самом верху</strong> <br> на первой странице вашего резюме.</p>
						</div>
						<div class="bonus-check__card--item">
							<p class="paragraph"><strong>Обратите внимание: резюме это официальный документ.</strong><br>Ваши контактные данные должны быть частью вашего профессионального образа. Забудьте адреса электронной почты, которые вы заводили для регистрации на сайтах знакомств или в социальных сетях.</p>
						</div>
						<div class="bonus-check__card--item">
							<p class="paragraph"><strong>Более того, многие работодатели будут искать ваши онлайн-профили в соц.сетях именно по контактным данным.</strong> Так что сейчас самое подходящее время для очистки ваших социальных сетей. Удалите все, что может показаться спорным или непрофессиональным, и не забудьте просмотреть настройки конфиденциальности, чтобы иметь полный контроль над тем, кто что видит.</p>
						</div>
					</div>
				</div>
				<div class="cell large-5 medium-12 small-12">
					<div class="bonus-check__card">
						<div class="bonus-check__card--image">
							<img src="/wp-content/themes/alexwlami/img/resume__5.png"/>
						</div>
						<div class="bonus-check__overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-key">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-12 medium-12 small-12 end text-center">
					<h2 class="q__caption">Ключевые выводы</h2>
				</div>
				<div class="cell large-6 medium-6 small-12">
					<div class="cell__card h100">
						<div class="cell__bg cell__bg--puzzle"></div>
						<p class="paragraph"><strong>Резюме это рабочий инструмент.</strong><br>Резюме должно помочь работодателю сделать вывод относительно пригодности именно вашей кандидатуры.</p>
						<p class="paragraph"><strong>Главное в сильном резюме:</strong></p>
						<ul class="cell__checklist">
							<li class="cell__checklist--item"><span class="glyph dot"></span>забота о читателе: <br> HR/рекрутере/работодателе</li>
						</ul>
					</div>
				</div>

				<div class="cell large-6 medium-6 small-12">
					<div class="cell__card h100">
						<div class="cell__bg cell__bg--star"></div>
						<p class="paragraph"><strong>Составляя резюме думайте не о том, что вы хотите</strong> от работодателя. Составляя резюме думайте о том, что вы можете предложить работодателю.</p>
						<p class="paragraph"><strong>Резюме должно:</strong></p>
						<ul class="cell__checklist">
							<li class="cell__checklist--item">
								<span class="glyph dot"></span>
								быть структурированным, <br>
								кратким и легко читаемым.
							</li>
							<li class="cell__checklist--item">
								<span class="glyph dot"></span>
								акцентировать внимание работодателя на ваших преимуществах.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-4 medium-4 small-12">
					<div class="preview-card">
						<div class="preview-card__image image-21"></div>
						<h5 class="preview-card__title">Объем резюме</h5>
						<ul class="cell__checklist">
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								1 - 2 страницы для начинающего специалиста - опытом работы до 5 лет
							</li>
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								2,5 - 3 страницы для профессионала стаж работы от 7 - 10 лет
							</li>
						</ul>
					</div>
				</div>
				<div class="cell large-4 medium-4 small-12">
					<div class="preview-card">
						<div class="preview-card__image image-22"></div>
						<h5 class="preview-card__title">Стиль и форматирование</h5>
						<ul class="cell__checklist">
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								структурированная информация
							</li>
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								удобный шаблон
							</li>
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								компьютерная􏰁 разметка
							</li>
						</ul>
					</div>
				</div>
				<div class="cell large-4 medium-4 small-12">
					<div class="preview-card">
						<div class="preview-card__image image-23"></div>
						<h5 class="preview-card__title">Фото</h5>
						<ul class="cell__checklist">
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								доброжелательное выражение лица;
							</li>
							<li class="cell__checklist--item">
								<span class="glyph check"></span>
								однотонный фон
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__resume-price" style="margin-bottom: 0;" id="check">
		<div class="resume-price__overlay"></div>
		<div class="grid-container resume-price">
			<h1 class="q__caption mb-60">Проверка резюме специалистом</h1>
			<p class="paragraph"><strong>Невозможно написать хорошее не затратив время и не приложив усилий.</strong> <br>
				Если вы постарались и считаете, что ваше резюме достойно внимание работодателя. <br>
				Вы можете обезопасить себя заказав комплексный аудит вашего резюме.</p>
			<p class="paragraph mb-40"><strong>Стоимость проверки резюме: от 500 до 700 рублей</strong></p>
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
							Опыт работы менее 10 лет
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
			<a href="/usluga-proverka-ili-audit-rezjume" class="resume-check__button mt-40">Узнать больше</a>
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