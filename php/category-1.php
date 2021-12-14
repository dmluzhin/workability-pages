<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 




<section class="blog">
        <div class="search"></div>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-5 medium-12 small-12">
                    <div class="blog-theme">
                        <a href="/istorii-klientov/" style="display:block">
                        <span class="blog-theme__caption">Истории клиентов:</span>
                        <p class="blog-theme__text">трудоустройство с повышением,<br>
                            смена профессиональной деятельности,<br>
                            существенное увеличение заработной платы.</p>
                        </a>
                    </div>
                    <div class="blog-theme">
                        <a href="/uspeshnoe-trudoustrojstvo/" style="display:block">
                        <span class="blog-theme__caption">Успешное трудоустройство:</span>
                        <p class="blog-theme__text">профессиональные советы по написанию резюме,<br>
                            рекомендации по успешному прохождению<br>
                            собеседования.</p>
                            </a>
                    </div>
                    <div class="blog-theme">
                        <a href="/psihologija-pozicionirovanija-i-ubezhdenija/" style="display:block">
                        <span class="blog-theme__caption">Психология позиционирования:</span>
                        <p class="blog-theme__text">авторские приемы убеждения,<br>
                            техники влияния,<br>
                            самопрезентация построенная на внушении.</p>
                            </a>
                    </div>
                </div>
                <div class="cell large-7 medium-12 small-12">
                    <div class="blog-popular">


<?php
query_posts('cat=4');
if( have_posts() ){ 
	  while( have_posts() ){ 
		   the_post();
?>		   
                        <div class="blog-popular__image" style="background:url(<?php if( get_field('img-c') ): ?><?php the_field('img-c'); ?><?php endif; ?>)"></div>
                        <div class="blog-popular__text">
                            <span class="blog-popular__caption"><?php the_title(); ?></span>
                            <p class="blog-theme__text"><?php the_content(''); // пост превью, до more ?></p>
                            <div class="post__nav">
                                <a href="<?php the_permalink(); ?>" class="post__nav-link post__nav-link_blog-popular">Посмотреть</a>
                            </div>
                        </div>
                        
<?php
	  }
	  wp_reset_query();
} else {
   echo 'Записи нет!';
}
?>                        
                        

                    </div>
                </div>
            </div>
        </div>
        
        <br/><br/><br/>
        <div class="blog-author">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell large-5 large-offset-1 medium-12 small-12">
                        <h2 class="caption caption_white">
                            От автора о блоге
                        </h2>
                        <p class="blog-author__text">
                            Всем хорошо знакомо то волнение, который мы испытываем, когда возникает необходимость с одной стороны – интересно,
                            с другой - деловито и содержательно, написать или рассказать
                            о своих достоинствах.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
<section class="theme theme-stories">
        <div class="search"></div>
        <div class="caption__cont">
            <h1 class="caption theme-caption vvv">Истории клиентов</h1>
        </div>

        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <?php
query_posts('cat=5');
if( have_posts() ){ 
	  while( have_posts() ){ 
		   the_post();
?>
                <div class="cell large-3 medium-3 small-12">
                    <div class="post">
                        <img src="<?php if( get_field('img-c') ): ?><?php the_field('img-c'); ?><?php endif; ?>" alt="" class="post__img">
                        <div class="post__text">
                            <span class="post__date"><?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></span>
                            <span class="post__caption"><?php the_title(); ?></span>
                            <div class="post__nav">
                                <a href="<?php the_permalink(); ?>" class="post__nav-link">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php
	  }
	  wp_reset_query();
} else {
   echo 'Записи нет!';
}
?>      
            </div>
        </div>
    </section>    
    
    
    
    
    
<section class="theme theme_success">
        <div class="search"></div>
        <div class="caption__cont">
            <h1 class="caption theme-caption vvv">Успешное трудоустройство:</h1>
            <span class="theme-subcaption">Написание резюме, прохождение собеседования</span>
        </div>

        <div class="grid-container">
            <div class="grid-x grid-margin-x">

                <?php
query_posts('cat=6');
if( have_posts() ){ 
	  while( have_posts() ){ 
		   the_post();
?>                
                <div class="cell large-3 medium-3 small-12">
                    <div class="post">
                        <img src="<?php if( get_field('img-c') ): ?><?php the_field('img-c'); ?><?php endif; ?>" alt="" class="post__img">
                        <div class="post__text">
                            <span class="post__date"><?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></span>
                            <span class="post__caption"><?php the_title(); ?></span>

                            <div class="post__nav">
                                <a href="<?php the_permalink(); ?>" class="post__nav-link">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
	  }
	  wp_reset_query();
} else {
   echo 'Записи нет!';
}
?>        
            </div>
        </div>
    </section>










<section class="theme theme-psicho">
        <div class="search"></div>
        <div class="caption__cont">
            <h1 class="caption theme-caption vvv">Психология позиционирования и убеждения</h1>
        </div>
        <br/>

        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                
                                <?php
query_posts('cat=7');
if( have_posts() ){ 
	  while( have_posts() ){ 
		   the_post();
?>   

                <div class="cell large-6 medium-12 small-12">
                    <div class="blog-popular">
                        <div class="blog-popular__image" style="background:url(<?php if( get_field('img-c') ): ?><?php the_field('img-c'); ?><?php endif; ?>)"></div>
                        <div class="blog-popular__text">
                            <span class="blog-popular__caption"><?php the_title(); ?></span>
                            <div class="post__nav">
                                <a href="<?php the_permalink(); ?>" class="post__nav-link post__nav-link_blog-popular">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
                            <?php
	  }
	  wp_reset_query();
} else {
   echo 'Записи нет!';
}
?>      
                <div class="cell large-6 medium-12 small-12">
                    <div class="blog-theme">
                        <span class="blog-theme__caption">Истории клиентов:</span>
                        <p class="blog-theme__text">трудоустройство с повышением,<br>
                            смена профессиональной деятельности,<br>
                            существенное увеличение заработной платы.</p>
                    </div>
                    <div class="blog-theme">
                        <span class="blog-theme__caption">Успешное трудоустройство:</span>
                        <p class="blog-theme__text">профессиональные советы по написанию резюме,<br>
                            рекомендации по успешному прохождению<br>
                            собеседования.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>






<?php get_footer(); // подключаем footer.php ?>