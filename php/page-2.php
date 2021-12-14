<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
 <?php
echo do_shortcode('[smartslider3 slider=1]');
?>

        <section class="q">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-8 small-offset-2 end">
                        <h2 class="q__caption">Обратиться к карьерному консультанту или составить резюме самостоятельно?</h2>
                        <span class="q__text">Всем хорошо знакомо то волнение, который мы испытываем, когда возникает необходимость с одной стороны – интересно, с другой - деловито и содержательно, написать или рассказать о своих достоинствах, убедить,
что именно вы – самый лучший на свете.</span>
                        <span class="q__text">
                            Корни такой реакции кроятся в навязанной с детства установке «не хвастайся!», в неумении точно изложить свои мысли, в незнании потребностей работодателя.
                        </span>
                    </div>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-10 small-offset-1 end">
                        <div class="q__hard-text">
                            <h3 class="q__subcaption">Консультант, со своей профессиональной позиции извне, разрешает конкретные проблемы и позволяет вам достичь желанной цели:</h3>
                            <ul class="q__list">
                                <li class="q__item">
                                    Обращает внимание на конкретные ваши качества:  знания, умения, навыки, которые, вы может быть
                                    и не считаете своими достоинствами, но именно они дополняют общее представление о вас, и помогут
                                    в итоге получить то место, которое хочется.
                                </li>
                                <li class="q__item">
                                    Экономит кучу времени, которое тратится в пустую, в бесплодных попытках собраться с мыслями и что-то толковое написать.
                                </li>
                                <li class="q__item">
                                    Хвастается вами: подойди к работодателю с правильной стороны, чтобы систематично, и, главное, экологично, ненавязчиво, убедительно показать, что вы – самый лучший претендент на открытую вакансию.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cell small-12 text-center">
                        <h2 class="q__caption">
                            Лучшее предложение:
                        </h2>
                    </div>
                    
                    <div class="cell small-3">
                        <div class="blocki">
                        <button class="offer offer__button knopka2" data-price="<?php the_field('ss15', 'option');?>">
                       
                            <div class="offer__cont">
                                <div class="offer__picto pi1">
                                    <img src="/wp-content/themes/alexwlami/img/offer1.png"
                                         alt=""
                                         class="offer__img">
                                </div>
                                <span class="offer__caption">
                                   НАЧАЛО КАРЬЕРЬI
                                </span>
                                <span class="offer__description">
                                    < 2 лет опыта работы, <br>вы недавно получили диплом
                                </span>
                                    <span class="offer__text">
                                    Посредством психологического интервью и тестирования мы сначал раскроем, затем отразим
    в резюме как ваши приобретенные профессиональные знания, так
    и  индивидуальные способности.
    Несмотря на небольшой опыт, мотивация и ваш личностный потенциал помогут обратить внимание работодателя именно
    на вас.
                                </span>
                                <span class="offer__price offer__price--old">
                                    <?php the_field('ss15', 'option');?> P
                                </span>
                            </div>
                            <div class="knopka">Заказать</div>
                        </button></div>
                    </div>
                    
                    <div class="cell small-3">
                       <div class="blocki">
                        <button class="offer offer__button knopka2" data-price="<?php the_field('ss13', 'option');?>">
                            <div class="offer__cont">
                                <div class="offer__picto pi2">
                                    <img src="/wp-content/themes/alexwlami/img/offer2.png"
                                         alt=""
                                         class="offer__img">
                                </div>
                                <span class="offer__caption">
                                    Специалист
                                </span>
                                <span class="offer__description offer__description_one-line">
                                    > 2 лет опыта работы
                                </span>
                                <span class="offer__text">
                                    Этап приобретения опыта и завоевания  профессионального доверия завершён. Вы чувствуете,что выросли из начинающего специалиста,  готовы зарабатывать большие деньги. Через психологическое интервью мы найдем и выявим все ваши достижения (поверьте они у вас есть), зафиксируем круг вашей компетенции  и получившиеся резюме работодатель не оставит без внимания.
                                </span>
                                <span class="offer__price offer__price--old">
                                    <?php the_field('ss13', 'option');?> P
                                </span>
                            </div>
                            <div class="knopka">Заказать</div>
                        </button>
                        </div>
                    </div>
                    <div class="cell small-3">
                        <div class="blocki">
                        <button class="offer offer__button knopka2" data-price="<?php the_field('ss11', 'option');?>">
                            <div class="offer__cont">
                                <div class="offer__picto pi3">
                                    <img src="/wp-content/themes/alexwlami/img/offer3.png"
                                         alt=""
                                         class="offer__img">
                                </div>
                                <span class="offer__caption">
                                    ПРОФИ
                                </span>
                                    <span class="offer__description">
                                    > 5 лет опыта работы, готовность руководить
                                </span>
                                <span class="offer__text">
                                    Вы знаете кто вы.
    Это главный критерий отличающий профессионала от специалиста.
    Вам по зубам гораздо более сложные и прибыльные проекты.
    В принципе, вы можете обучить коллег и держать под контролем рабочий процесс.
                                </span>
                                    <span class="offer__price offer__price--old">
                                    <?php the_field('ss11', 'option');?> P
                                </span>
                            </div>
                            <div class="knopka">Заказать</div>
                        </button>
                        </div>
                    </div>
                    <div class="cell small-3">
                       <div class="blocki">
                        <button class="offer offer__button knopka2" data-price="<?php the_field('ss9', 'option');?>">
                            <div class="offer__cont">
                                <div class="offer__picto pi4">
                                    <img src="/wp-content/themes/alexwlami/img/offer4.png"
                                         alt=""
                                         class="offer__img">
                                </div>
                                <span class="offer__caption">
                                    топ
                                </span>
                                    <span class="offer__description">
                                    позиция, определяющая вектор развития бизнеса компании
                                </span>
                                <span class="offer__text">
                                    Вершина карьерного роста на текущем месте вами достигнута: вы сильный лидер, управленец, умеете руководить и добиваться результата от подчиненных.
    У вас есть конкретные результаты и вы готовы с гордостью рассказать о них. В резюме будут конкретизированы, точно
    и деловито отражены ваш уникальный карьерный рост, достижения и высоклассная управленческая компетенция.
                                </span>
                                    <span class="offer__price offer__price--old">
                                    <?php the_field('ss9', 'option');?> P
                                </span>
                            </div>
                            <div class="knopka">Заказать</div>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-6">
                        <div class="page">
                            <h3 class="page__caption">
                                Какими «секретными» знаниями обладает
                                карьерный консультант?
                            </h3>
                            <span class="page__description">
                                Почему карьерный консультант может дорого продать
                                меня работодателю, а я сам себя не могу?
                            </span>
                            <span class="page__text">
                                Секретные» знания отнюдь не мистичны, они крайне прозрачны,
                                а также –  осваиваемы.Они сводятся к доскональному
                                знанию общей психологии в целом и бизнес психологии в
                                частности, практического консультирования, а также (и
                                стоит отметить – в равной степени) социологии и маркетинга.
                            </span>
                            <span class="page__text">
                                Карьерный консультант не переписывает сухие факты красивыми, витиеватыми, но бессмысленными фразами.
                            </span>
                        </div>
                    </div>
                    <div class="cell small-6">
                        <div class="page">
                            <div class="page__caption">
                                Конкретные задачи карьерного консультанта:
                            </div>
                            <ul class="page__list">
                                <li class="q__item">
                                    Выявить какой конкретно запрос компании стоит за размещением вакантной должности
                                    предложить компании хороший продукт, т.е. предложить компании профессионализм кандидата, соответствующий этому запросу.
                                </li>
                                <li class="q__item">
                                    Подать этот продукт, подать кандидата в правильном сообщении – резюме. Рекрутер должен прочесть резюме и сразу понять, что этот кандидат должен быть приглашен на собеседование.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-12 text-center">
                        <h2 class="q__caption q__caption_banner">Авторское резюме специально для вас:</h2>
                        <div class="banner">
                            <ul class="banner__list">
                                <li data-item="slide1"  data-slide="1" class="banner__item banner__item_selected">
                                    Работа в иностранной компании
                                </li>
                                <li data-item="slide2"  data-slide="2" class="banner__item">
                                    Госслужба
                                </li>
                                <li data-item="slide3"  data-slide="3" class="banner__item">
                                    Фриланc/Творчество
                                </li>
                                <li data-item="slide4"  data-slide="4" class="banner__item">
                                    Перерыв в стаже
                                </li>
                                <li data-item="slide5"  data-slide="5" class="banner__item">
                                    Возраст 50+
                                </li>
                                <li data-item="slide6"  data-slide="6" class="banner__item">
                                    Смена профессии
                                </li>
                            </ul>
                            <div class="banner__slider">
                                <div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/work.jpg');" alt="Написание резюме для трудоустройства в иностранную компанию">
                                    <div class="slide__cont">
                                        <span class="slide__count">1/6</span>
                                        <span class="slide__name">Работа в иностранной <br>компании</span>
                                        <span class="slide__text">
                                        Существенный прирост в зарплате,
                                        дополнительное медицинское страхование, курсы иностранного
                                        языка, квартальные и годовые бонусы  - как правило, работа в
                                        иностранной компании является золотой жилой для профессионалов
                                        своего дела, знающих иностранный язык.
                                        <b class="slide__text_bold">Закажите профессиональное
                                        авторское резюме и попадите в число счастливчиков, приглашенных
                                            на собеседование.</b>
                                    </span>
                                        <button class="slide__button" data-price="<?php the_field('ss23', 'option');?>">Заказать</button>
                                        <span class="offer__price slide__price slide__price--old">
                                        <?php the_field('ss23', 'option');?> Р
                                    </span>
                                    </div>
                                </div>
                                <div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/gos.jpg');">
                                    <div class="slide__cont">
                                        <span class="slide__count">2/6</span>
                                        <span class="slide__name">Госслужба</span>
                                        <span class="slide__text">
                                        При любой власти и при любом кризисе будет существовать госслужба.
                                        Стабильность, уверенность в завтрашнем дне лишь одни из плюсов
                                        трудоустройства в этот сектор. Различные льготы, полное соблюдение
                                        трудового законодательства - ряд преимуществ подогревает желание
                                        устроится на вакантное место.<br>
                                        Но сделать это непросто - государственные службы
                                        неохотно разглашают информацию о наличии свободных мест.
                                        <b class="slide__text_bold">Обращайтесь ко мне, мы напишем профессиональное резюме, Вы получите ваш шанс успешно трудоустроиться</b>
                                    </span>
                                        <button class="slide__button" data-price="<?php the_field('ss21', 'option');?>">Заказать</button>
                                        <span class="offer__price slide__price slide__price--old">
                                        <?php the_field('ss21', 'option');?> P
                                    </span>
                                    </div>
                                </div>
                                <div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/design.jpg');">
                                    <div class="slide__cont">
                                        <span class="slide__count">3/6</span>
                                        <span class="slide__name">Фриланс/Творчество</span>
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
                                        <b class="slide__text_bold">Обращайтесь ко мне, и потенциальный клиент ваших услуг будет откликаться предложением о сотрудничестве.</b>
                                    </span>
                                        <button class="slide__button" data-price="<?php the_field('ss19', 'option');?>">Заказать</button>
                                        <span class="offer__price slide__price slide__price--old">
                                        <?php the_field('ss19', 'option');?> P
                                    </span>
                                    </div>
                                </div>
                                <div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/wait.jpg');">
                                    <div class="slide__cont">
                                        <span class="slide__count">4/6</span>
                                        <span class="slide__name">Перерыв в стаже</span>
                                        <span class="slide__text">
                                        К сожалению, часть работодателей стереотипно считает, что перерыв в трудовом стаже более 3-х месяце, говорит и низком профессионализме кандидата.Они уверены, что хороший кандидат легко найдет достойное место работы. На самом же деле причины для перерыва могут быть самые разные и они вовсе не обязательно связаны с компетентностью или некомпетентностью работника.
                                        <b class="slide__text_bold">Обратитесь ко мне и мы развеем сомнения работодателя. Вы именно тот, кого он ищет.</b>
                                    </span>
                                        <button class="slide__button" data-price="<?php the_field('ss3', 'option');?>">Заказать</button>
                                        <span class="offer__price slide__price slide__price--old">
                                        <?php the_field('ss3', 'option');?> P
                                    </span>
                                    </div>
                                </div>
                                <div class="banner__slide" style="background: url('/wp-content/themes/alexwlami/img/50y.jpg');">
                                    <div class="slide__cont">
                                        <span class="slide__count">5/6</span>
                                        <span class="slide__name">Возраст 50+</span>
                                        <span class="slide__text">
                                        Существует мнение, что трудоустройство после 45-50 лет чревато сложностями.
<br>
Якобы в этом возрасте кандидаты уже менее ориентированы на достижения, у них богатый жизненный опыт и на
<br>
мякине сверхурочных работ взрослого человека не проведешь. Кандидату же следует применить более утонченные уловки, адресуя свое резюме в те сегменты рынка труда, где солидный возраст будет преимуществом, а не недостатком.
                                        <b class="slide__text_bold">Не волнуйтесь. Обращайтесь ко мне, вопрос трудойстройства перестанет быть для Вас головной болью.</b>
                                    </span>
                                        <button class="slide__button" data-price="<?php the_field('ss5', 'option');?>">Заказать</button>
                                        <span class="offer__price slide__price slide__price--old">
                                        <?php the_field('ss5', 'option');?> P
                                    </span>
                                    </div>
                                </div>
                                <div class="banner__slide banner__slide_show" style="background: url('/wp-content/themes/alexwlami/img/change.jpg');">
                                    <div class="slide__cont">
                                        <span class="slide__count">6/6</span>
                                        <span class="slide__name">Смена профессии</span>
                                        <span class="slide__text">Существенный прирост в зарплате, дополнительное медицинское страхование, курсы иностранного языка, квартальные и годовые бонусы  - как правило, работа в иностранной компании является золотой жилой для профессионалов своего дела, знающих иностранный язык. Закажите профессиональное авторское резюме и попадите в число счастливчиков, приглашенных на собеседование.</span>
                                        <button class="slide__button" data-price="<?php the_field('ss1', 'option');?>">Заказать</button>
                                        <span class="offer__price slide__price slide__price--old">
                                        <?php the_field('ss1', 'option');?> P
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="banner__dots">

                            </div>
                        </div>
                    </div>
                    <div class="cell small-12">
                        <div class="how text-center">
                            <h2 class="q__caption q__caption__how">Как происходит разработка и написание вашего резюме?</h2>
                            <div class="how__subcaption">Готовое резюме: от 1 до 4 дней</div>
                            <div class="how__wrap">
                                <div class="how__cont">
                                    <div class="how__count">
                                        1
                                    </div>
                                    <div class="how__arrow">
                                        <img src="/wp-content/themes/alexwlami/img/how-arrow.png">
                                    </div>
                                    <div class="how__text">
                                        Оставьте заявку
                                        или позвоните мне
                                    </div>
                                </div>
                                <div class="how__cont">
                                    <div class="how__count">
                                        2
                                    </div>
                                    <div class="how__arrow">
                                        <img src="/wp-content/themes/alexwlami/img/how-arrow.png">
                                    </div>
                                    <div class="how__text">
                                        Я провожу интервью
                                        с вами (40-90 минут)
                                    </div>
                                </div>
                                <div class="how__cont">
                                    <div class="how__count">
                                        3
                                    </div>
                                    <div class="how__arrow">
                                        <img src="/wp-content/themes/alexwlami/img/how-arrow.png">
                                    </div>
                                    <div class="how__text">
                                        Я разрабатываю резюме
                                        и высылаю вам
                                        предварительную версию
                                    </div>
                                </div>
                                <div class="how__cont">
                                    <div class="how__count">
                                        4
                                    </div>
                                    <div class="how__arrow">
                                        <img src="/wp-content/themes/alexwlami/img/how-arrow.png">
                                    </div>
                                    <div class="how__text">
                                        Если нравится -
                                        вы оплачиваете работу
                                    </div>
                                </div>
                                <div class="how__cont">
                                    <div class="how__count">
                                        5
                                    </div>
                                    <div class="how__text">
                                        После оплаты вы получаете
                                        полную версию вашего
                                        профессионального резюме
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-x">
                    <div class="cell small-6">
                        <div class="enter">
                            <div class="q__subcaption q__subcaption_enter">
                                Я не гонюсь за количеством.
                            </div>
                            <div class="q__subcaption q__subcaption_enter">
                                Не люблю стресс и мультизадачность.
                            </div>
                            <div class="q__subcaption q__subcaption_enter">
                                Я получаю удовольствие от процесса моей работы.
                                Поэтому, как правило, работаю с одним - двумя
                                клиентами в день.
                            </div>
                            <div class="enter__text">
                                Не откладывайте на потом: запишитесь сейчас и через 2-3 дня вы получите ваше индивидуальное профессиональное резюме.
                            </div>
                        </div>
                    </div>
                    <div class="cell small-4 small-offset-1">
                        <div class="quest text-center">
                            <h2 class="q__caption q__caption_quest">Остались вопросы?</h2>
                            <span class="quest__subcaption">Напишите мне и я отвечу Вам по email<br> или свяжусь с Вами по телефону</span>
                            
<form id="contact" action="/wp-content/themes/alexwlami/send-mail-1.php" method="post" class="subscribe-form">
<div id="note"></div>
<div id="fields">
	<input type="text" class="quest__input" name="name" placeholder="Ваше имя" required>
	<input type="text" class="quest__input" name="phone" placeholder="Телефон" required data-mask="0(000)000-00-00">
	<input type="text" class="quest__input" name="email" placeholder="E-mail">
	<textarea name="message" class="quest__area" placeholder="Сообщение"></textarea>
	<label>
                    <input type="checkbox"> Я даю <a href="/soglasie-na-obrabotku-personalnyh-dannyh/" target="_blank">согласие на обработку персональных данных</a>
                </label>
	<p><button type="submit" id="submit" class="modal__button">Задать вопрос</button></p>
</div>
</form>                            
                            
                            
                            <div class="modal__success" style="
            /* opacity: 1; */
            /* display: block; */
            position: absolute;
            left: 50%;
            top: 50%;
            width: 350px;
            margin-left: -175px;
            margin-top: -56px;
        ">
                                <i class="fa fa-check-circle-o" aria-hidden="true" style="
            font-size: 40px;
        "></i>

                                <span class="modal__thanks" style="
            display: block;
        ">Спасибо за доверие.</span>
                                <span class="modal__thanks">Я свяжусь с вами в течение 2-х часов.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy">
                <div class="grid-container">
                    <div class="grid-x">
                        <div class="cell small-6 small-offset-3 end">
                            <div class="buy__cont">
                                <h2 class="q__caption q__caption_buy">Способы оплаты</h2>
                                <div class="buy__cont">
                                    <img src="/wp-content/themes/alexwlami/img/sber.png"
                                         alt="sberbank"
                                         class="buy__item">
                                    <img src="/wp-content/themes/alexwlami/img/yandex.png"
                                         alt="yandex"
                                         class="buy__item">
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
        </section>








<?php get_footer(); // подключаем footer.php ?>