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
                                    <div class="stage stage_second stage_selected">
                                        <span class="stage__text">Приглашение на собеседование</span>
                                    </div>
                                </div>
                                <div class="cell small-4">
                                    <a href="/prohozhdenie-sobesedovanija-legko-i-prosto/">
                                        <div class="stage stage_third">
                                            <span class="stage__text">Прохождение собеседования</span>
                                        </div>
                                    </a>
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
                        <h2 class="service-little-caption caption">Цель 2-го этапа: получить приглашение на собеседование</h2>
                    </div>
                    <p class="service-text">
                        Довольно часто происходит так, что кандидат подходит по всем формальным параметрам,
                        но работодатель, просмотрев резюме, молчит и не откликается. Если вы менеджер по подбору персонала – вы знаете возможные причины такого молчания и почему на некоторые вакансии работодатель умышленно использует подобную стратегию. Если вы соискатель – подобное поведение вызывает у вас тревогу и сомнение в своих силах, при том, что причина не всегда заключается в вашем резюме.
                    </p>
                    <p class="service-text service-text_bold service-text_centered">
                        Запомните, молчание работодателя не означает, что вы не подошли!<br>
                        Обращайтесь ко мне и вы получите приглашение на собеседование в течении 2-х рабочих дней<br>
                        или я верну вам деньги.
                    </p>
                    <div class="caption__cont">
                        
                        <br/><br/>
                    
                    <a href="#" rel="form9" class="show_form show_form2">Заказать услугу «Приглашение на собеседование»</a>    
                        
                        
                    </div>
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