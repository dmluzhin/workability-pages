<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 


    <section class="theme">
        <div class="search"></div>
        <div class="caption__cont">
            <h1 class="caption theme-caption vvv">Успешное трудоустойство</h1>
        </div>
        
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                
                <?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
				
                <div class="cell small-3">
                    <div class="post">
                        <img src="<?php if( get_field('img-c') ): ?><?php the_field('img-c'); ?><?php endif; ?>"
                             alt=""
                             class="post__img">
                        <div class="post__text">
                            <span class="post__date"><?php the_time(get_option('date_format')); ?></span>
                            <span class="post__caption"><?php the_title(); ?></span>
                            <div class="post__nav">
                                <a href="<?php the_permalink(); ?>"
                                   class="post__nav-link">Читать</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>


            </div>
            
            	<br/>
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>
				
        </div>
    </section>


<?php get_footer(); // подключаем footer.php ?>