<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	
	<meta name="yandex-verification" content="857b793658d4d5eb" />
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1,user-scalable=no">
	 <link rel="icon" href="/wp-content/uploads/2018/06/favicon.png" type="image/x-icon" />
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118820892-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118820892-1');
</script>
	<!-- Global site tag (gtag.js) - Google Ads: 797956453 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-797956453"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-797956453');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48849560 = new Ya.Metrika({
                    id:48849560,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48849560" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body>
	<!--<div class="preloader" id="preloader">
	<span class="spinner"></span>
</div>-->
	<div class="sticky-header" id="sticky">
		<div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-3">
                    <a href="/" class="h_logo">
                        <img src="/wp-content/uploads/2018/06/Новый-логотип-1.png" alt="" class="h_logo-image">
                    </a>
                </div>
                <div class="cell small-3">
                    <div class="secondary__menu">
                        <a href="/usluga-napisanie-rezjume/" class="secondary__menu--item one active">Составление резюме</a>
                        <a href="/pomoshch-v-sostavlenii-soprovoditelnogo-pisma-k-rezyume/" class="secondary__menu--item two">Прохождение собеседования</a>
                        <a href="/professionalnoe-samoopredelenie/" class="secondary__menu--item three">Профессиональное самоопределение</a>
                    </div>
                </div>
                <div class="cell small-3 small-offset-1">
                    <div class="h_fb mt-15">
                        <a href="tel:+79169552926" class="h_phone phone-big text-right"><!--<i class="fa fa-phone" aria-hidden="true"></i>-->+7 (916) 955-29-26</a>
                    </div>
                </div>
                <div class="cell small-2 text-right">
                    <!-- Small modal -->
                    <button rel="form1" class="prime__button show_form show_form2 show_form3 mt-15" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Напишите мне</button>
                    <!-- Small modal -->
                </div>
            </div>
        </div>
	</div>
<div class="wrap">
    <header class="h">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-3 medium-12 small-12">
                    <a href="/" class="h_logo">
                        <img src="/wp-content/uploads/2018/06/Новый-логотип-1.png" alt="" class="h_logo-image">
                    </a>
                </div>
                <div class="cell large-3 medium-3 small-12 break-1">
                    <div class="secondary__menu">
                         <a href="/usluga-napisanie-rezjume/" class="secondary__menu--item one active">Составление резюме</a>
                        <a href="/pomoshch-v-sostavlenii-soprovoditelnogo-pisma-k-rezyume/" class="secondary__menu--item two">Прохождение собеседования</a>
                        <a href="/professionalnoe-samoopredelenie/" class="secondary__menu--item three">Профессиональное самоопределение</a>
                    </div>
                </div>
                <div class="cell large-3 medium-3 small-12 break-1">
                    <div class="h_fb">
                        <a href="tel:+79169552926" class="h_phone text-right"><!--<i class="fa fa-phone" aria-hidden="true"></i>-->+7 (916) 955-29-26 </a>
                        <!--<a href="mailto:info@workability.ru" class="h_mail text-right">
                        -->info@workability.ru</a>
                    </div>
                </div>
                <div class="cell large-3 medium-3 small-6 break-1 text-right">
                    <!-- Small modal -->
                    <button href="#" rel="form1" class="prime__button float-right show_form show_form2 show_form3" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Напишите мне</button>
                    <!-- Small modal -->
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="grid-container" style="">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12">
					<div class="menu-toggler">
						<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="m animate__animated animate__fadeIn">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
					<div class="hidden-info">
						<div>
							<button rel="form1" class="prime__button show_form show_form2 show_form3 mb-15" onclick="yaCounter48849560.reachGoal('ZAKAZ'); return true;">Напишите мне</button>
						</div>
						<div>
							<a href="tel:+79169552926" class="h_phone text-center">+7 (916) 955-29-26 </a>
						</div>
						<div>
							<p class="text-center">info@workability.ru</p>
						</div>
					</div>
					</div>
                </div>
            </div>
        </div>
		<div class="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
    </header>	    
