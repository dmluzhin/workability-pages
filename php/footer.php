<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<footer class="footer">
	<div class="footer__top">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-3 medium-3 small-12 footer-item">
					<div class="footer__image-cont">
						<img src="/wp-content/themes/alexwlami/img/footer1.png" class="footer__image">
					</div>
					<span class="footer__text">прямая ответственность </span>
					<span class="footer__text">прозрачная репутация </span>
					<span class="footer__text">личный контакт</span>
				</div>
				<div class="cell large-3 medium-3 small-12 footer-item">
					<div class="footer__image-cont">
						<img src="/wp-content/themes/alexwlami/img/footer2.png" class="footer__image">
					</div>
					<span class="footer__text"><span class="footer__text_bold">более 120 клиентов ежегодно</span></span>
					<span class="footer__text">статистика частной практики</span>
					<span class="footer__text">с 2016 года</span>
				</div>
				<div class="cell large-3 medium-3 small-12 footer-item">
					<div class="footer__image-cont">
						<img src="/wp-content/themes/alexwlami/img/footer3.png" class="footer__image">
					</div>
					<span class="footer__text"><span class="footer__text_bold">МГППУ </span></span>
					<span class="footer__text">Консультативная психология </span>
					<span class="footer__text">2017</span>
				</div>
				<div class="cell large-3 medium-3 small-12 footer-item">
					<div class="footer__image-cont">
						<img src="/wp-content/themes/alexwlami/img/footer4.png" class="footer__image">
					</div>
					<span class="footer__text"><span class="footer__text_bold">МИФИ</span></span>
					<span class="footer__text">E-commerce </span>
					<span class="footer__text">2011</span>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__mid">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-5 medium-5 small-12">
					<span class="footer__caption">Андрей Гунявин</span>
					<span class="footer__info">
                                Карьерный наставник & <br>
                                консультативный бизнес психолог
                            </span>
					<span class="footer__info">Русский, английский, французский языки.</span>
					<div class="footer__social">
						<!--<a href="https://www.facebook.com/andrey.maybe.1" class="footer__social-link" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>-->
						<!--<a href="https://vk.com/id327237317" class="footer__social-link" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>-->
						<!--<a href="https://vk.com/id327237317" class="footer__social-link"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>-->
						<!--<a href="https://vk.com/id327237317" class="footer__social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
						<!--<a href="https://vk.com/id327237317" class="footer__social-link"><i class="fa fa-telegram" aria-hidden="true"></i></a>-->
						<!--<a href="#" class="footer__social-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a>-->
						<!--<a href="#" class="footer__social-link"><i class="fa fa-google-plus" aria-hidden="true"></i></a>-->
					</div>
				</div>
				<div class="cell large-3 medium-3 small-12">
					<div class="footer__call">
						<a href="#" class="call__link">
							<i class="fa fa-phone" aria-hidden="true"></i>
							+7 (916) 955-29-26
						</a>
						<a href="#" class="call__link">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							info@workability.ru
						</a>
						<!--<a href="#" class="call__link">-->
						<!--<i class="fa fa-skype" aria-hidden="true"></i>-->
						<!--skypename-->
						<!--</a>-->
					</div>
				</div>
				<div class="cell large-3 medium-3 small-12 large-offset-1 medium-offset-1 end">
					<img src="/wp-content/uploads/2018/09/В-подвал-мин-размер.jpg" class="footer__photo">
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="grid-container">
			<div class="grid-x">
				<span class="footer__year">2017-2021 г.</span>
			</div>
		</div>
	</div>
</footer>


<div rel="form1" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box"></a>
		<div class="form_form">
			<div class="subscribe-form grid-container">
				<?php echo do_shortcode( '[contact-form-7 id="320" title="Большая контактная форма"]' ); ?>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form7" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="55" title="Контактная форма с прикриплением файлов"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form1800" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="380" title="Контактная форма - 1800"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form2500" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="381" title="Контактная форма - 2500"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form3000" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="382" title="Контактная форма - 3000"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form8000" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="440" title="Контактная форма - 8000"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="order" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="441" title="Заказать резюме"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="formSpec" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="383" title="Контактная форма - Резюме специалиста"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form500" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="428" title="Проверка резюме - 500"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form700" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="429" title="Проверка резюме - 700"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="formExamples" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="384" title="Контактная форма - Запросить примеры"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="interview3500" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="385" title="Контактная форма - 3500 - собеседование"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="interview4500" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="386" title="Контактная форма - 4500 - собеседование"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="interview5000" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставьте заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="387" title="Контактная форма - 5000 - собеседование"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->


<!--Окно успеха-->
<div class="black" id="succs">
	<div class="flexbox">
		<div class="modal-success">
			<a class="a_close_box"></a>
			<div class="modal__caption modal__header">
				Спасибо
			</div>
			<span class="modal__description">Спасибо за доверие.<br>Я свяжусь с Вами в течение часа.</span>
		</div>
	</div>
</div>
<!--Окно успеха-->
<!--Форма со слайдером-->

<div rel="form10" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-3.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-коммерческого-директора-стр-3.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Резюме коммерческого директора</div>
						<div class="modal__price text-left">3500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form11" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-руководителя-охраны-труда-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-руководителя-охраны-труда-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-руководителя-охраны-труда-стр-3.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-руководителя-охраны-труда-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-руководителя-охраны-труда-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-руководителя-охраны-труда-стр-3.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Резюме начальника охраны труда</div>
						<div class="modal__price text-left">3500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form12" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-ведущего-менеджера-по-закупкам-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-ведущего-менеджера-по-закупкам-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-ведущего-менеджера-по-закупкам-стр-3.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-ведущего-менеджера-по-закупкам-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-ведущего-менеджера-по-закупкам-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-ведущего-менеджера-по-закупкам-стр-3.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Резюме менеджера по маркетингу на английском языке</div>
						<div class="modal__price text-left">2500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form13" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2018/09/Бухгалтер-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2018/09/Бухгалтер-2.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2018/09/Бухгалтер-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2018/09/Бухгалтер-2.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Резюме бухгалтера</div>
						<div class="modal__price text-left">2500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form14" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-3.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-менеджера-по-логистике-стр-3.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Резюме менджера по логистике</div>
						<div class="modal__price text-left">2500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form15" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-юриста-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-юриста-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-юриста-стр-3.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-юриста-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-юриста-стр-2.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-юриста-стр-3.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Резюме юриста (корпоративное право)</div>
						<div class="modal__price text-left">2500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="form16" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-личного-водителя-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-личного-водителя-стр-2.jpg">
								</div>
							</div>
							<div class="resume-slider__nav text-center">
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-личного-водителя-стр-1.jpg">
								</div>
								<div class="slide">
									<img src="/wp-content/uploads/2020/07/Пример-резюме-личного-водителя-стр-2.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Личный водитель</div>
						<div class="modal__price text-left">2500 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Шаблон сайта HeadHunter -самый удобный способ для мгновенной публикации и поиска работы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Единый последовательный сюжет вашего профессионального становления</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Правильная терминология, соответствующая вашей профессии</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Точно найденные и правильно расставленные акценты на ваших достижениях и компетенциях</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Подобранные ключевые слова внутри резюме, чтобы ваше резюме чаще появлялось в поисковой выдаче hh.ru, superjob,ru</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="formCheckResume" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставить заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="444" title="Проверка вашего резюме"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="russian" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img
											src="/wp-content/uploads/2021/08/primer-soprovoditelnogo-pisma-specialist-po-tenderam-scaled.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Пример сопроводительного письма</div>
						<div class="modal__price text-left">1000 руб</div>
						<div class="modal__subcaption text-left">Ваше письмо включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Идеального объема в 800-1000 знаков</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>HR тратит только 10 секунд на прочтение и именно в эти 10 секунд вы будете успешно презентованы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Уникально. HR никогда не читал такого сопроводительного письма или похожего на ваше.</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Предлагает HR обратиться к резюме, заинтересовывает вами</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Побуждает позвонить Вам</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="french" class="black">
	<div class="big_box_close"></div>
	<div class="form_box form_contact">
		<a class="a_close_box close__form"></a>
		<div class="form_form text-center">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div class="cell large-5 medium-5 small-12">
						<div class="resume-slider__container">
							<div class="resume-slider">
								<div class="slide">
									<img
											src="/wp-content/uploads/2021/08/primer-soprovoditelnogo-pisma-manager-po-rabote-s-klientami-scaled.jpg">
								</div>
							</div>
						</div>
					</div>
					<div class="cell large-6 large-offset-1 medium-6 medium-offset-6 small-12 text-left">
						<div class="modal__caption modal__header text-left">Пример сопроводительного письма</div>
						<div class="modal__price text-left">1000 руб</div>
						<div class="modal__subcaption text-left">Ваше резюме включает:</div>
						<ul class="offer__list modal__offer-list">
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Идеального объема в 800-1000 знаков</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>HR тратит только 10 секунд на прочтение и именно в эти 10 секунд вы будете успешно презентованы</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Уникально. HR никогда не читал такого сопроводительного письма или похожего на ваше.</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Предлагает HR обратиться к резюме, заинтересовывает вами</span>
							</li>
							<li class="offer__list--item">
								<span class="glyph check"></span>
								<span>Побуждает позвонить Вам</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->

<div rel="formCreateResume" class="black">
	<div class="big_box_close"></div>
	<div class="form_box">
		<a class="a_close_box"></a>
		<div class="form_form text-center">
			<span class="modal__caption modal__header">Оставить заявку</span>
			<div class="subscribe-form">
				<div id="note7"></div>
				<div id="fields7">
					<?php echo do_shortcode( '[contact-form-7 id="443" title="Составление проф. резюме"]' ); ?>
				</div>
			</div>
		</div><!--form_form-->
	</div><!--form_box-->
</div><!--black-->
<script>
	window.fbAsyncInit = function () {
		FB.init({
			xfbml: true,
			version: 'v3.1'
		});
	};
	(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {
			return;
		}
		js = d.createElement(s);
		js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<!--Форма со слайдером-->
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>

</body>
</html>
