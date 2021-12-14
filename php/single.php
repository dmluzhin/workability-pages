<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
   <section class="article">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12">
                    <div class="article__photo" style="background-image: url('<?php if( get_field('img') ): ?><?php the_field('img'); ?><?php endif; ?>')"></div>
                </div>
            </div>
        </div>
        <div class="article__cont">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell small-10 small-offset-1">
                        <div class="article-text">
                            <div class="article-data">
                                <span class="article-date"><?php the_time(get_option('date_format')); ?></span>
                                <span class="article-views">0</span>
                            </div>
                            <h1 class="article__caption">
                                <?php the_title(); // заголовок поста ?>
                            </h1>
                            
                            <p class="article__text">
                                <?php the_content(); // контент ?>
                            </p>
                            
                            <div class="article__nav">
                                <div class="article__prev">
                                    <?php previous_post_link('%link', 'Предыдущий пост', TRUE); ?> 
                                </div>
                                <div class="article__next">
                                    <?php next_post_link('%link', 'Следующий пост', TRUE); ?>
                                </div>
                            </div>
                            <div class="article__share">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // конец цикла ?>



<?php get_footer(); // подключаем footer.php ?>
