<script type="text/javascript">
    window.location="#mod"
</script>
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



    <section class="service" id="mod" name="mod">
        <a name="mod" id="mod"></a>
        <div class="staging">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="small-8 small-offset-2 cell">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell small-4">
                                    <a href="/usluga-napisanie-rezjume/">
                                        <div class="stage">
                                            <span class="stage__text">Отправка резюме</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="cell small-4">
                                    <a href="/priglashenie-na-sobesedovanie/">
                                        <div class="stage stage_second">
                                            <span class="stage__text">Приглашение на собеседование</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="cell small-4">
                                    <div class="stage stage_third stage_selected">
                                        <span class="stage__text">Прохождение собеседования</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-8 small-offset-2">
                    <div class="caption__cont caption__cont_stage2">
                        <h2 class="service-little-caption caption">Цель 3-го этапа:ответить на вопросы работодателя<br>
                            и презентовать себя таким образом, чтобы вас приняли на работу</h2>
                    </div>
                    <p class="service-text">
                        Нет такого человека, который не нервничает перед собеседованием. Нет такого человека, который уверенно отвечает на каверзные вопросы работодателя. Нет такого человека, которые умеет без подготовки себя преподать и рассказать о своих достоинствах так, чтобы это внушало уважение
                        и не звучало пустословствием или хвастовством. Но таким: уверенным, ведущим диалог собеседования
                        по существу, продавливающим свою кандидатуру в интервью, вы можете стать.
                    </p>
                    <p class="service-text service-text_bold service-text_centered">
                        Готовы ли вы потратить 2-3 свободных вечера,чтобы пройти успешно собеседование<br>
                        на работу вашей мечты ?<br>
                        Ровно 3 сессии со мной по 60-90 минут и вы проходите на конкретную вакансию.
                    </p>
                    <div class="caption__cont">

                        
                        <br/><br/><a href="#" rel="form9" class="show_form show_form2">Заказать услугу «Успешное прохождение собеседования»</a>

                </div>
            </div>
        </div>
    </section>
    <section class="service-form">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-8 small-offset-2">
                    <div class="caption__cont">
                        <h1 class="caption caption__service-form">Кликните по интересующему вас виду резюме:</h1>
                        <h2 class="service-form__subcaption">Напишите мне и я отвечу Вам по email или свяжусь с Вами по телефону</h2>
                    </div>

                    
                    
<form id="contact5" action="/wp-content/themes/alexwlami/send-mail-5.php" method="post" class="service-form-cont subscribe-form">
<div id="note5"></div>
<div id="fields5">
	<input type="text" class="empty-input" name="name" placeholder="Ваше имя" required>
	<input type="text" class="empty-input" name="phone" placeholder="Телефон" required data-mask="0(000)000-00-00">
	<input type="text" class="empty-input empty-input_last" name="email" placeholder="E-mail">
	<textarea name="message" class="quest__area" placeholder="Сообщение"></textarea>
	<label>
        <input type="checkbox"> Я даю <a href="/soglasie-na-obrabotku-personalnyh-dannyh/" target="_blank">согласие на обработку персональных данных</a>
    </label>
	<p><button type="submit" id="submit" class="modal__button">Задать вопрос</button></p>
</div>
</form>                        
                    
                    
                </div>
            </div>
        </div>
    </section>







<?php get_footer(); // подключаем footer.php ?>