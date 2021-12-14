<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Главная
 */
get_header(); // подключаем header.php ?>

<?php
echo do_shortcode('[smartslider3 slider=1]');
?>
	<section class="q">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 end">
					<div class="text-center">
						<h2 class="q__caption">Обратиться к карьерному консультанту или составить резюме
						самостоятельно?</h2>
					</div>
					<br>
					<p class="q__text">Всем хорошо знакомо то волнение, которое мы испытываем, когда возникает
						необходимость написать или рассказать о своих достоинствах:</p>
					<ul class="list">
						<li>с одной стороны – интересно</li>
						<li>с другой – деловито и содержательно</li>
					</ul>
					<p class="q__text">Убедить, что именно вы – самый лучший кандидат. Причины такой реакции кроятся в
						навязанной с детства установке «не хвастайся!», в неумении точно изложить свои мысли, в незнании
						потребностей работодателя.</p>
				</div>
			</div>
		</div>
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell large-10 large-offset-1 small-12 end">
					<div class="q__hard-text  mg-0">
						<h3 class="q__subcaption">Консультант, со своей профессиональной позиции извне, разрешает
							конкретные проблемы и позволяет вам достичь желанной цели:</h3>
						<ul class="q__list">
							<li class="q__item">
								Обращает внимание на определенные ваши качества: знания, умения, навыки.
								Может быть, вы и не считаете своими достоинствами, но именно они дополняют общее
								представление о вас и помогут в итоге получить желаемую должность.
							</li>
							<li class="q__item">
								Экономит кучу времени, которое тратится в пустую, в бесплодных попытках собраться с
								мыслями и что-то толковое написать.
							</li>
							<li class="q__item">
								Хвастается вами: подойди к работодателю с правильной стороны, чтобы систематично, и,
								главное, экологично, ненавязчиво, убедительно показать, что вы – самый лучший претендент
								на открытую вакансию.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--Слайлер все услуг-->
	<section class="section">
		<div class="fluid__container">
			<div class="grid-x">
				<div class="cell small-12 text-center">
					<h2 class="q__caption">Все услуги</h2>
					<div class="banner">
						<ul class="banner__list">
							<li data-item="slide1" data-slide="1" class="banner__item banner__item_selected">
								Составление резюме
							</li>
							<li data-item="slide2" data-slide="2" class="banner__item">
								Сопроводительное письмо
							</li>
							<li data-item="slide3" data-slide="3" class="banner__item">
								Приглашение на собеседование
							</li>
							<li data-item="slide4" data-slide="4" class="banner__item">
								Прохождение собеседования
							</li>
							<li data-item="slide5" data-slide="5" class="banner__item">
								Профориентация
							</li>
							<li data-item="slide6" data-slide="6" class="banner__item">
								Трудоустройство под ключ
							</li>
						</ul>
						<div class="banner__slider">
							<div class="banner__slide" style="background: url('/wp-content/uploads/2018/10/resume.jpg');" alt="Составление резюме">
								<div class="slide__cont">
									<span class="slide__count">1/6</span>
									<div class="grid-x grid-margin-x">
										<div class="cell large-8 medium-12 small-12">
											<span class="slide__name">Составление резюме на заказ это:</span>
										</div>
										<div class="cell large-4 medium-12 small-12 text-right">
											<!--<span class="slider-price" id="sliderprice">
												1900 Р</span>-->
										</div>
									</div>
                                        <span class="slide__text">
											<ul class="list">
												<li>эффективная* продажа ваших компетенций и опыта;</li>
												<li>выгодные инвестиции в себя</li>
											</ul>
											<p>разработка резюме составляет от 5 до 8 часов работы, включает обязательно интервью с вами и готовое <strong>резюме действительно продаёт</strong>* вас на желаемую должность</p>
											<p><strong>Я выявляю что скрывается за запросами компаний в кандидате на желаему вами должность.<br>Я предложу именно того кандидата, в вашем лице, который им нужен.</strong></p>
                                        </span>
									<div class="slide__footer">
										<a href="/usluga-napisanie-rezjume/" class="prime__button" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;" style="width: 220px;">
											Подробнее
										</a>
										<div class="mt-15">
											<span class="text-muted">* все мои клиенты трудоустроены (на сентябрь 2018г)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/gos.jpg');">
								<div class="slide__cont">
									<span class="slide__count">2/6</span>
									<div class="grid-x grid-margin-x">
										<div class="cell large-8 medium-12 small-12">
											<span class="slide__name">Профессиональное сопроводительное письмо:</span>
										</div>
										<div class="cell large-4 medium-12 small-12 text-right">
												<span class="slider-price" id="sliderprice1">
													1900 Р</span>
										</div>
									</div>
                                        <span class="slide__text">
											<ul class="list">
												<li>привлекает внимание рекрутера;</li>
												<li>заинтересовывает вашей кандидатурой;</li>
												<li>побуждает к продолжению диалога с вами.</li>
											</ul>
											<p><strong>Не отправляйте шаблонные сопроводительный письма!</strong><br>
												Проще, быстрее и самое главное эффективнее* заказать профессиональное написание сопроводительного письма. <br><strong>Тем более, что это доступно:</strong></p>
											<p>
												<strong>400 рублей за 1 письмо.</strong>
											</p>
										</span>
									<div class="slide__footer">
										<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
											Заказать
										</button>
										<div class="mt-15">
											<span class="text-muted">* все мои клиенты трудоустроены (на сентябрь 2018г)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="banner__slide" style="background: url('/wp-content/uploads/2018/10/invite.jpg');">
								<div class="slide__cont">
									<span class="slide__count">3/6</span>
									<div class="grid-x grid-margin-x">
										<div class="cell large-8 medium-12 small-12">
											<span class="slide__name">Приглашение на собеседование</span>
										</div>
										<div class="cell large-4 medium-12 small-12 text-right">
										</div>
									</div>
                                        <span class="slide__text">
										Вы отправляете резюме, а работодатель их не просматривает?
                                        <br>
                                        Или просматривает, но не отвечает?
										<br>
										Вам надоело тешить себя надеждой, что завтра обязательно пригласят на собеседование? Надоело ждать?
										<br>
										В конце концов, вы опасаетесь упустить открытую «вакансию вашей мечты» ?
										<br>
										<p>Обращайтесь: я обеспечу приглашение на собеседование в конкретную компанию на конкретную должность.<br>Оплата после результата!<br>Если я не в силах вам помочь,я не возьму заказ в работу и объясню почему.</p>
                                    </span>
									<div class="slide__footer">
										<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
											Заказать
										</button>
									</div>
								</div>
							</div>
							<div class="banner__slide" style="background: url('/wp-content/uploads/2018/10/sobes.jpg');">
								<div class="slide__cont">
									<span class="slide__count">4/6</span>
									<div class="grid-x grid-margin-x">
										<div class="cell large-8 medium-12 small-12">
											<span class="slide__name">Прохождение собеседования.</span>
										</div>
										<div class="cell large-4 medium-12 small-12 text-right">
										</div>
									</div>
                                        <span class="slide__text">
                                        <p>Подготовка к прохождению собеседования:</p>
										<ul class="list">
											<li>вы будете готовы к любым вопросам и HR, и руководителя;</li>
											<li>вы дадите правильные ответы фокусируя внимание на том, что работодатель хочет услышать;</li>
											<li>согласно статистике клиентов, которых я подготовил, вы точно* трудоустроитесь.</li>
										</ul>
										<p>Собеседование это переговоры, а не экзамен. Успешно презентуйте себя и договаривайтесь продавая свой труд.<br> Подробнее за достойную заработную плату!</p>
                                    </span>
									<div class="slide__footer">
										<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
											Заказать
										</button>
										<div class="mt-15">
											<span class="text-muted">* все мои клиенты трудоустроены (на сентябрь 2018г)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="banner__slide" style="background: url('/wp-content/uploads/2018/10/proforientation.jpg');">
								<div class="slide__cont">
									<span class="slide__count">5/6</span>
									<div class="grid-x grid-margin-x">
										<div class="cell large-8 medium-12 small-12">
											<span class="slide__name">Профессиональное самопределение:</span>
										</div>
										<div class="cell large-4 medium-12 small-12 text-right">
										</div>
									</div>
                                        <span class="slide__text">
                                        <ul class="list">
											<li><strong>вы мечтаете о смене деятельности</strong>, но не знаете в какой области сможете преуспеть</li>
											<li>у вас <strong>продолжительный перерыв в работе</strong> и сложно начать новую жизнь</li>
											<li>вы достигли предела и <Strong>не знаете куда двигаться дальше</Strong></li>
											<li><strong>работа</strong> вам не то, что надоела - <strong>осточертела</strong></li>
											<li>вы чувствуете, что <strong>развития нет</strong>, пользы не приносите, <strong>вас не ценят</strong>.</li>
										</ul>
											<p>В ходе профориентационных сессий c вами я произведу анализ вашей личности, интеллекта, склонностей, ценностей и целей. Сопоставляя с потребностями рынка труда подберу для вас вакансии с работой, которая будет вам действительно интересна</p>
                                    	</span>
									<div class="slide__footer">
										<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
											Заказать
										</button>
									</div>
								</div>
							</div>
							<div class="banner__slide banner__slide_show" style="background: url('/wp-content/uploads/2018/10/work.jpg');">
								<div class="slide__cont">
									<span class="slide__count">6/6</span>
									<div class="grid-x grid-margin-x">
										<div class="cell large-8 medium-12 small-12">
											<span class="slide__name"></span>
										</div>
										<div class="cell large-4 medium-12 small-12 text-right">

										</div>
									</div>
										<span class="slide__text">
											<p>Зачастую у моих клиентов <strong>тысячи причин</strong>, почему они продолжают <strong>работать на работе</strong>, которая им совершенно <strong>не нравится</strong>. Кому-то не хватает смелости, кто-то не знает в чём он мог бы себя реализовать, но большинству банально не хватает времени, чтобы составить грамотное резюме, прозондировать рынок, написать сопроводительные письма и т.д.</p>
											<p>Моя услуга «Трудоустройство под ключ» позволяет клиентам без малейших временных трат уверенно менять работу. Созваниваясь в удобное для вас время, например, пока вы едите с работы домой или гуляете с собакой, я согласовываю с вами каждый шаг вашего трудоустройства и прохожу его за вас.</p>
											<p>Обращайтесь, буду рад вам помочь!</p>
										</span>
									<div class="slide__footer">
										<button class="prime__button show_form" rel="form7" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">
											Заказать
										</button>

									</div>
								</div>
							</div>
						</div>
						<div class="banner__dots">

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="q__caption">Зачем обращаются к карьерному консультанту ?</div>
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell large-6 small-12">
							<div class="page">
								<h3 class="page__caption">
									Почему карьерный консультант может дорого продать
									меня работодателю, а я сам себя не могу?
								</h3>
                            <p class="page__text">
								Объясню на примере: почти 90% моих клиентов на
								момент обращения ко мне находятся в ситуации
								неудовлетворенности текущим положением дел. Они
								нацелены как можно быстрее найти работу, повысить
								уровень заработной платы, обрести любимое дело.
								Подобная концентрация на своих проблемах сужает
								картину мира клиента. Клиент фокусируясь только на
								себе, часто не отдаёт отчет, что ключ к его благополучию
								это взгляд в абсолютно противоположную сторону:
                            </p>
								<ul class="page__list">
									<li class="q__item">в чём нуждается рынок труда? </li>
									<li class="q__item">как тем, чем я умею и люблю заниматься,
										заинтересовать Другого -работодателя, потенциального
										потребителя моих услуг?</li>
								</ul>
								<br>
								<p class="page__text">
									Я, будучи карьерным консультантом, ставлю себя в точку
									пересечения интересов вас, т.е. моего клиента, а также
									рынка труда и бизнеса. Поэтому я обладаю:
								</p>
								<ul class="page__list">
									<li class="q__item">экспертной оценкой рынка труда;</li>
									<li class="q__item">психологическими подходами для выявления у моего
										клиента максимального количества ценных для рынка
										труда качеств;</li>
									<li class="q__item">предпринимательским взглядом как на желания
										клиента, так и на потребности рынка, позволяющим мне
										правильно позиционировать и продавать работодателю
										моего клиента.</li>
								</ul>
							</div>
						</div>
						<div class="cell large-6 small-12">
							<div class="page">
								<div class="page__caption">
									Конкретные задачи карьерного консультанта:
								</div>
								<ol class="page__list numbered">
									<li class="q__item"><strong>Определить проблему и сформулировать с
										вами запрос.</strong> Как известно: тому, кто сумеет
										лучше всех определить проблему, скорей всего
										удастся её решить.</li>
									<li class="q__item"><strong>Выявить ваши ценные знания и умениядля
										текущего состояния рынка труда.</strong> Нельзя
										предлагать и продавать кандидата, не зная чего
										хочет рынок труда.</li>
									<li class="q__item"><strong>Воспроизвести ценность уникального
										предложения в вашем лице,</strong> т.е создать из
										имеющихся данных моего клиента ценное
										предложение – уникального кандидата,
										которого не смогут превзойти другие
										кандидаты.</li>
									<li class="q__item"><strong>Привлечь внимание к вам</strong>,
										т.е. подготовить продающее резюме, составить
										грамотное и деловое сопроводительное
										письмо, выйти на связь с работодателем.</li>
									<li class="q__item"><strong>Выгодно вас продать</strong>, превратив
										потенциального работодателя в реального.
										Это этап подготовки к собеседованию и
										успешного его прохождения.</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-gray">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 text-center">
					<h2 class="q__caption mt-60">Схема сотрудничества</h2>
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
						Мы проводим предварительное знакомство и согласовываем задачу
						(15-30 минут) по телефону, Whatsapp, Skype.
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
						Я приступаю к выполнению, попутно координируя с вами исполнение
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
						Я разрабатываю текст самопрезентации и высылаю её вам
					</div>
				</div>
				<div class="how__cont hovered">
					<div class="how__title">
						<span class="q__title">Лишь на этом этапе вы оплачиваете работу:</span>
					</div>
					<div class="how__image">
						<img src="/wp-content/themes/alexwlami/img/assets/icon-4.svg"/>
					</div>
					<div class="how__count">4</div>
					<div class="how__arrow">
						<img src="/wp-content/themes/alexwlami/img/assets/line-4.svg">
					</div>
					<div class="how__text">
						У вас есть впечатление от нашего сотрудничества и промежуточный результат.
					</div>
				</div>
				<div class="how__cont">
					<div class="how__image">
						<img src="/wp-content/themes/alexwlami/img/assets/icon-5.svg"/>
					</div>
					<div class="how__count">5</div>
					<div class="how__text">
						После оплаты мы продолжаем работу и доводим до успешного результата.
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="q__caption">Обо мне</div>
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell large-6 small-12">
							<div class="page">
								<h3 class="page__caption">
									Как я стал карьерным консультантом
								</h3>
								<p class="page__text">
									Моё профессиональное становление проходило под крылом
									западных компаний: знание английского и французского языков, а
									также сильные коммерческие компетенции позволяли занимать
									ключевые должности в иностранном бизнесе. Основной моей
									сферой деятельности являлся pre-sale: разработка плана
									презентации, как правило, ИТ решений и проведение переговоров
									на уровне как руководителей отделов (70%), так и генеральных
									директоров (30%) крупнейших российских компаний.
								</p>
								<p class="page__text">Однако, мне
									всегда хотелось быть полезным не столько крупному бизнесу,
									сколько обычным людям. И точно также я мечтал работать на
									себя. И однажды, судьба мне предоставила такой шанс: меня
									пригласили на проект разработки методологии тестирования
									кандидатов при приёме на работу, которая легла в основу
									создания первого в России HR-бота на базе искусственного
									интеллекта. </p>
								<p class="page__text"> Для этого я изучил область подбора персонала «от» и
									«до»: я лично нанимал соискателей и провел десятки
									собеседований с соискателями, которые и двух слов не могли
									связать или же отвечали однообразными заученными фразами.</p>
								<p class="page__text">Толковые грамотные люди просто не умели себя продать:
									огромное количество людей обладая массой достоинств жутко
									скромничали и не умели в нужное время (на собеседовании !) и
									нужном месте заявить о себе. Ещё не умели точно описывать
									собственные достижения, профессиональный опыт. А я умел. </p>
								<p class="page__text">Таково было моё предназначение на тот момент: выжимать
									самый сок из продвигаемого продукта и ярко его представлять.
									Почему же этот принцип не перенести на продвижение людей?
									Тем более что искусство демонстрации собственных достоинств на
									пост-советском пространстве до сих уступает европейскому в
									мастерстве. </p>
								<p class="page__text">Так я стал предлагать свои услуги сначала среди знакомых, затем
									по сарафанному радио стало появляться большее количество
									заказов и тогда я создал свой собственный проект «Workability».</p>

							</div>
						</div>
						<div class="cell large-6 small-12">
							<div class="page">
								<div class="page__caption">
									Принципы моей работы
								</div>
								<p class="page__text">Я не гонюсь за количеством.
									Не люблю стресс и мультизадачность.
									Я получаю удовольствие от процесса моей работы. Поэтому, как
									правило, работаю с одним - двумя клиентами в день.</p>
								<p class="page__text">Те, клиенты, что со мной уже работали, рекомендуют меня и
									появляются новые, доверяющие мне клиенты.
									Другая часть клиентов приходит по интернет рекламе,
									или прочитав мою статью. В таком случае, мы оказываемся как бы
									не знакомы, поэтому почти все мои услуги без предоплаты. <br>
									Оплата производится лишь тогда, когда работа выполнена
									полностью или большей частью.</p>
								<p class="page__text">Считаю, что стоимость моих услуг должна быть доступна
									большинству россиян, поэтому ценник крайне доступный и ниже
									рынка.</p>
								<p class="page__text">Буду рад помочь, просто обращайтесь.</p>
							</div>
						</div>
					</div>
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
<section>
	<div class="buy">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell large-6 small-12 large-offset-3 end">
					<div class="buy__cont">
						<h2 class="q__caption q__caption_buy">Способы оплаты</h2>
						<div class="grid-x">
							<div class="cell large-4 medium-4 small-12 buy-img">
								<img src="/wp-content/themes/alexwlami/img/sber.png"
								 alt="sberbank"
								 class="buy__item">
							</div>
							<div class="cell large-4 medium-4 small-12 buy-img">
								<img src="/wp-content/themes/alexwlami/img/yandex.png"
								 alt="yandex"
								 class="buy__item">
							</div>
							<div class="cell large-4 medium-4 small-12 buy-img">
								<img
								src="/wp-content/themes/alexwlami/img/visa.png"
								alt="visa"
								class="buy__item">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); // подключаем footer.php ?>