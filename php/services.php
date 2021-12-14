<?php
/**
 *  Разработка Сопроводительное письмо (services.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Услуги
 */
get_header(); // подключаем header.php ?>
	<div class="q">
		<div class="hero-slider">
			<div class="hero-slider__slide" style="background-image: url('/wp-content/uploads/2018/09/banner1.jpg')">
				<div class="overlay"></div>
				<div class="hero-slider__container">
					<div class="hero-slider__title">Индивидуальное <br> составление резюме</div>
					<div class="hero-slider__subtitle">Гарантированное трудоустройство, только индивидуальные клиенты,
						оплата после результата
					</div>
					<button class="prime__button show_form show_form2 show_form3" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
					<div class="hero-buttons">
						<div class="hero-prev" id="prev"></div>
						<div class="hero-next" id="next"></div>
					</div>
				</div>
			</div>
			<div class="hero-slider__slide" style="background-image: url('/wp-content/uploads/2018/09/bitmap2.jpg')">
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
								<button type="submit" id="submit" class="prime__button show-modal btn-block centered" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Узнать как!</button>
							</div>
						</div>
					</form>
					<div class="hero-buttons">
						<div class="hero-prev"></div>
						<div class="hero-next"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="separated__container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-9">
					<section class="section" id="resume">
						<div class="fluid__container">
							<div class="grid-x grid-margin-x">
								<h2 class="q__caption">Составление резюме на заказ</h2>
								<div class="cell small-12">
									<div class="tab">
										<ul class="tabs" style="">
											<li class=""><a href="#">Составление</a></li>
											<li class="relative">
												<a href="#">Перевод</a>
									<span class="glyph__group">
										<span class="glyph britan"></span>
										<span class="glyph germany"></span>
										<span class="glyph france"></span>
									</span>
											</li>
											<li class=""><a href="#">Корректировка</a></li>
											<!--<li class="half-tab"><a href="#">Все услуги</a></li>-->
										</ul>
										<div class="tab__content wide" style="height: 1000px;">
											<div class="tabs__item" style="display: block">
												<div class="grid-x grid-margin-x">
													<div class="cell small-4">
														<div class="offer offer__small">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Эконом</span>
																	<span class="subtitle">начинающие специалисты</span><br>
																	<span class="subtitle">профессии исполнительного характера</span>
																</div>
																<div class="offer__price">
																	<span>900 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Интервью: 30 минут</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Объем: 1,5-2 страницы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Доп. правки: 0</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Часов работы: 2-3</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="cell small-4">
														<div class="offer offer__small">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Специалист</span>
																	<span class="subtitle">> 2 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>1900 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Интервью: 40 минут</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Объем: 1-2 страницы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Доп. правки: 0</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Часов работы: 4</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="grid-x grid-margin-x">
													<div class="cell small-4">
														<div class="offer offer__small">
															<div class="offer-tag">Популярное</div>
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Профи</span>
																	<span class="subtitle">> 5 лет опыта работы, готовность руководить</span>
																</div>
																<div class="offer__price">
																	<span>2400 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Интервью: 60 минут</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Объем: 2-2,5 страницы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Доп. правки: 1</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Часов работы: 6</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="cell small-4">
														<div class="offer offer__small">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Руководитель</span>
																	<span class="subtitle">позиция, определяющая вектор развития бизнеса компании</span>
																</div>
																<div class="offer__price">
																	<span>2800 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Интервью: 90 минут</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Объем: 3 страницы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Доп. правки: 2</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Часов работы: 8</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>


											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12">
														<p>Оставьте ваш номер телефона / email. Также можете прикрепить ваше резюме для перевода. Я произведу оценку работу и свяжусь с Вами для согласования выполнения.</p>
														<p>Ориентировочный порядок цен: от 900 до 1500 рублей.</p>
													</div>
													<div class="cell small-12 text-center">
														<?php echo do_shortcode( '[contact-form-7 id="319" title="Контактная форма с прикриплением файлов - не попап"]' ); ?>

													</div>
												</div>
											</div>


											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12">
														<p>Оставьте ваш номер телефона / email. Также можете прикрепить ваше резюме для корректировки. Я произведу оценку работу и свяжусь с Вами для согласования выполнения.</p>
														<p>Ориентировочный порядок цен: от 900 до 1500 рублей.</p>
													</div>
													<div class="cell small-12 text-center">
														<?php echo do_shortcode( '[contact-form-7 id="319" title="Контактная форма с прикриплением файлов - не попап"]' ); ?>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section" id="letter">
						<div class="fluid__container">
							<div class="grid-x grid-margin-x">
								<h2 class="q__caption">Помощь в составлении сопроводительного письма</h2>
								<div class="cell small-12">
									<div class="tab">
										<ul class="tabs">
											<li class=""><a href="#">К 1-ой вакансии</a></li>
											<li class="relative">
												<a href="#">К 5-ти вакансиям</a>
											</li>
											<li class="relative"><a href="#">На иностранном языке</a>
												<!--<span class="glyph__group">
													<span class="glyph britan"></span>
													<span class="glyph germany"></span>
													<span class="glyph france"></span>
												</span>	-->
											</li>
											<!--<li class="half-tab"><a href="#">Все услуги</a></li>-->
										</ul>
										<div class="tab__content">
											<div class="tabs__item" style="display: block">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12">
														<p class="h6">Составлю сопроводительное письмо к 1-ой вакансии.</p>
														<p><strong>Объём:</strong><br>800 - 1000 знаков (идеальный размер для сопроводительного письма).</p>
														<p><strong>Внимание:</strong><br>универсальных сопроводительных писем не существует!<br><strong>Сопроводительное письмо пишется под конкретную должность в конкретную компанию.</strong></p>
														<p>Стоимость услуги: <strong>500 рублей</strong>.<br>Время исполнения: <strong>2 часа.</strong><br>Оставьте ваш телефон и email и я свяжусь с вами для согласования выполнения.</p>
													</div>
													<div class="cell small-12 text-center">
														<?php echo do_shortcode( '[contact-form-7 id="342" title="Контактная форма - простейшая"]' ); ?>

													</div>
												</div>
											</div>


											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12">
														<p class="h6">Составлю безупречное сопроводительное письмо<br> уникальное для каждой вакансии.</p>
														<p><strong>Объём:</strong><br> 800 - 1000 знаков (идеальный размер для сопроводительного письма).</p>
														<p><strong>Внимание:</strong><br>универсальных сопроводительных писем не существует!<br><strong>Сопроводительное письмо пишется под конкретную должность в конкретную компанию.</strong></p>
														<p>Стоимость услуги: <strong>2000 рублей</strong>.<br>Услуга действует в течение 3-х недель с момента оплаты. Вы высылаете мне вакансию, я подготавливаю сопроводительное письмо. И так 5 раз.<br>Оставьте ваш телефон и email и я свяжусь с вами для согласования выполнения.</p>
													</div>
													<div class="cell small-12 text-center">
														<?php echo do_shortcode( '[contact-form-7 id="342" title="Контактная форма - простейшая"]' ); ?>

													</div>
												</div>
											</div>


											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12">
														<p class="h6">Составление сопроводительного письма <br> на английском или французском языке на заказ</p>
														<p>Составлю сопроводительное письмо на иностранном языке для трудоустройства или мотивационное письмо для поступления в учебное заведение.<br><strong>Внимание:</strong><br>универсальных сопроводительных писем не существует!<br><strong>Сопроводительное письмо пишется под конкретный запрос (вакансия компании или учебное заведение)</strong></p>
														<p>Стоимость услуги: <strong>от 900 до 2000 руб.</strong><br>Оставьте ваш телефон и email и я свяжусь с вами для согласования выполнения.</p>
													</div>
													<div class="cell small-12 text-center">
														<?php echo do_shortcode( '[contact-form-7 id="342" title="Контактная форма - простейшая"]' ); ?>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section" id="help">
						<div class="fluid__container">
							<div class="grid-x grid-margin-x">
								<h2 class="q__caption">Помощь в подготовке к прохождению собеседования</h2>
								<div class="cell small-12">
									<div class="tab">
										<ul class="tabs">
											<li class=""><a href="#">Подготовка к собеседованию</a></li>
											<li class="relative">
												<a href="#">Подготовка на иностранном языке</a>
											</li>
											<li class="relative"><a href="#">Экспресс подготовка<br> (1 ночь до собеседования)</a>
												<!--<span class="glyph__group">
													<span class="glyph britan"></span>
													<span class="glyph germany"></span>
													<span class="glyph france"></span>
												</span>	-->
											</li>
											<!--<li class="half-tab"><a href="#">Все услуги</a></li>-->
										</ul>
										<div class="tab__content">

											<div class="tabs__item" style="display: block">
												<div class="grid-x grid-margin-x">
													<div class="cell small-4">
														<div class="offer">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Специалист</span>
																	<span class="subtitle">> 2 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>1800 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Продолжительность подготовки: <strong>2 часа</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>текст самопрезентации + ответы на вопросы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>тренировок: <strong>1 шт</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>трудозатраты: <strong>3 часа</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="cell small-4">
														<div class="offer">
															<div class="offer-tag">Профи</div>
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Профи</span>
																	<span class="subtitle">> 5 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>2500 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Продолжительность подготовки: <strong>3 часа</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>текст самопрезентации + ответы на вопросы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>тренировок: <strong>2 шт</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>трудозатраты: <strong>5 часов</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="cell small-4">
														<div class="offer">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Руководитель</span>
																	<span class="subtitle">> 5 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>3500 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Продолжительность подготовки: <strong>4 часа</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>текст самопрезентации + ответы на вопросы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>тренировок: <strong>3 шт</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>трудозатраты: <strong>7 часов</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-4">
														<div class="offer">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Специалист</span>
																	<span class="subtitle">> 2 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>2500 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Продолжительность совместной <strong>2 часа</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>текст самопрезентации + ответы на вопросы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>тренировок: <strong>1 шт</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>общее время: <strong>4 часа</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="cell small-4">
														<div class="offer">
															<div class="offer-tag">Профи</div>
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Профи</span>
																	<span class="subtitle">> 5 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>4500 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Продолжительность совместной работы: <strong>4 часа</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>текст самопрезентации + ответы на вопросы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>тренировок: <strong>2 шт</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check">тренировок: <strong>2 шт</strong></span>
																		<span>общее время: <strong>6 часов</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="cell small-4">
														<div class="offer">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Руководитель</span>
																	<span class="subtitle">> 5 лет опыта работы</span>
																</div>
																<div class="offer__price">
																	<span>5500 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать</button>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Продолжительность подготовки: <strong>4 часа</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>текст самопрезентации + ответы на вопросы</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>тренировок: <strong>3 шт</strong></span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>общее время: <strong>8 часов</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>


											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12">
														<p class="h5">Помощь в подготовке к прохождению собеседования</p>
														<p>Оставьте ваш номер телефона и email. Я свяжусь с Вами максимально быстро.</p> 													<p>Длительность подготовки: от 3-х до 5-ти часов в любое время.<br>
															Ориентировочный порядок цен срочной подготовки к собеседованию:<br>
															<strong>от 4.500 рублей (специалистам) до 7.500 рублей (руководителям)</strong></p>
													</div>
													<div class="cell small-12 text-center">
														<?php echo do_shortcode( '[contact-form-7 id="342" title="Контактная форма - простейшая"]' ); ?>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section" id="determination">
						<div class="fluid__container">
							<div class="grid-x grid-margin-x">
								<h2 class="q__caption">Профессиональное самоопределение</h2>
								<div class="cell small-12">
									<div class="tab">
										<ul class="tabs">
											<li class="relative"><a href="#">Начало карьеры</a></li>
											<li class="relative"><a href="#">Специалист</a></li>
											<li class="relative"><a href="#">Профессионал</a></li>
											<li class="relative"><a href="#">Предприниматель</a></li>
										</ul>
										<div class="tab__content high">

											<div class="tabs__item" style="display: block">
												<div class="grid-x grid-margin-x">
													<div class="cell small-10">
														<div class="offer offer__wide">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Начало карьеры. Начало новой жизни</span>
																	<ul class="list">
																		<li>у вас продолжительный перерыв в работе и сложно начать новую жизнь</li>
																		<li>вы только начинаете профессиональную деятельность и сомневаетесь в выбранном пути</li>
																	</ul>
																</div>
																<div class="offer__price">
																	<span>1 500 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать профориентацию</button>
																<ul class="offer__simple-list">
																	<li>2 сессии глубинного психологического исследования по 60 мин</li>
																	<li>2 домашних задания для самостоятельной работы и их последующий анализ</li>
																</ul>
																<p class="offer__separator">В результате:</p>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>выявляем предрасположенность и конкурентные преимущества</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>формируем план развития новых сфер реализации</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>подбираем конкретные вакансии на которых вы с интересом окунётесь в работу</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span><strong>Понимание того, что вам нужно от работы</strong></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-10">
														<div class="offer offer__wide">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Специалист</span>
																	<ul class="list">
																		<li>вы уже работаете по специальности, но ещё не закрепились в профессии</li>
																		<li>вы не уверены, что чем вы сейчас занимаетесь - это ваше</li>
																		<li>вы сомневаетесь: остаться в профессии или начать другую карьеру</li>
																	</ul>
																</div>
																<div class="offer__price">
																	<span>2000 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать профориентацию</button>
																<ul class="offer__simple-list">
																	<li>2 сессии глубинного психологического исследования по 60 мин</li>
																	<li>2 домашних задания для самостоятельной работы и их последующий анализ</li>
																</ul>
																<p class="offer__separator">В результате:</p>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>вы точно определитесь с направлениями и сферами деятельности в соответствии с вашими интересами: персональная карта ваших возможностей с рекомендациями по выбору должности, сферы деятельности</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>анализ и сопоставление ваш потребностей с потребностями рынка труда: вы получаете 5-10 конкретных вакансий.</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>Понимание того, что вам нужно от работы</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-10">
														<div class="offer offer__wide">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Профи</span>
																	<ul class="list">
																		<li>вы уже работаете по специальности, но ещё не закрепились в профессии</li>
																		<li>вы не уверены, что чем вы сейчас занимаетесь - это ваше</li>
																		<li>вы сомневаетесь: остаться в профессии или начать другую карьеру</li>
																	</ul>
																</div>
																<div class="offer__price">
																	<span>1800 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать профориентацию</button>
																<ul class="offer__simple-list">
																	<li>2 сессии глубинного психологического исследования по 90 мин</li>
																	<li>2 домашних задания для самостоятельной работы</li>
																</ul>
																<p class="offer__separator">В результате:</p>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>сформированный план развития новых сфер реализации</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>примеры конкретных вакансий на которые вы сразу можете откликаться</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>вы выгодно продадите имеющиеся навыки в новую область, профессию</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>ваш карьерный капитал, конкурентные преимущества, ваше предназначение</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tabs__item" style="display: none">
												<div class="grid-x grid-margin-x">
													<div class="cell small-10">
														<div class="offer offer__wide">
															<div class="offer__body">
																<div class="offer__title">
																	<span class="title">Предприниматель</span>
																	<ul class="list">
																		<li>вы желаете открыть свой бизнес, однако, до сих пор вы не начали активно действовать</li>
																		<li>потому что вам кажется, что вы ничего не понимаете в бизнесе</li>
																		<li>или же вы боитесь оказаться некомпетентным</li>
																		<li>а может быть вас посещает чувство «самозванца»: мол вы не справитесь и все поймут, что вы обманщик</li>
																	</ul>
																</div>
																<div class="offer__price">
																	<span>2000 Р</span>
																</div>
															</div>
															<div class="offer__footer">
																<button class="prime__button centered show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Заказать профориентацию</button>
																<ul class="offer__simple-list">
																	<li>2 сессии глубинного психологического исследования по 90 мин</li>
																	<li>2 домашних задания для самостоятельной работы</li>
																</ul>
																<p class="offer__separator">В результате:</p>
																<ul class="offer__list">
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>вы определите ваши навыки и способности, позволяющие делать то, что другие не станут или не смогут делать самостоятельно</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>определение направлений и сфер деятельности ваших интересов, возможностей. ваш потребности и потребности общества</span>
																	</li>
																	<li class="offer__list--item">
																		<span class="glyph check"></span>
																		<span>вы перестанете тратить время на борьбу со страхами: вы осознаете как ваши собственные ресурсов, так ограничивающие вас убеждения</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</section>
				</div>
				<div class="cell small-3">
					<div class="sidebar__container">
						<ul class="sidebar__list">
							<li class="sidebar__list--item"><a href="#resume" class="sidebar__list--link">Составление резюме</a></li>
							<li class="sidebar__list--item"><a href="#letter" class="sidebar__list--link">Сопроводительное письмо</a></li>
							<li class="sidebar__list--item"><a href="#help" class="sidebar__list--link">Подготовка к собеседованию</a></li>
							<li class="sidebar__list--item"><a href="#determination" class="sidebar__list--link">Профориентация</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
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
	</div>
<?php get_footer(); // подключаем footer.php ?>