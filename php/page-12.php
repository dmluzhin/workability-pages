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
<link rel="stylesheet" href="https://codengineering.ru/uploads/posts/33/css/jquery.gallery.min.css">



 <?php
echo do_shortcode('[smartslider3 slider=1]');
?>


    <section class="cases">
        <div class="caption__cont">
        
            <h1 class="caption caption__cases" id="mod" name="mod">Кейсы клиентов</h1>
             <a name="mod" id="mod"></a>
        </div>
        
<!-- 
<div class="grid-container">
            <div class="grid-x">
                <div class="small-12">
                    <nav class="cases-nav">
                        <ul class="cases-menu">
                            <li class="cases-menu__item cases-menu__item_selected">Резюме</li>
                            <li class="cases-menu__item">Собеседование</li>
                            <li class="cases-menu__item">Самоопределение</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
 -->

<div class="grid-container">
<div class="grid-x">
    <div class="tab-box">
        <div class="grid-container">
            <div class="grid-x">
                <div class="small-3">
                    <ul class="cases-types tab-nav">    
<br/>
                        <li class="cases-types__item"><a href="#t1">Начало карьеры</a></li>
                        <li class="cases-types__item"><a href="#t2">Специалист</a></li>
                        <li class="cases-types__item"><a href="#t3">Профи</a></li>
                        <li class="cases-types__item"><a href="#t4">Топ</a></li>
                        <li class="cases-types__item"><a href="#t5">Работа в иностранной компании</a></li>
                        <li class="cases-types__item"><a href="#t6">Госслужба</a></li>
                        <li class="cases-types__item"><a href="#t7">Фриланc/Творчество</a></li>
                        <li class="cases-types__item"><a href="#t8">Перерыв в стаже</a></li>
                        <li class="cases-types__item"><a href="#t9">Возраст 50+</a></li>

                    </ul>
                </div>
                <div class="small-9">
                    <div class="cases-cont">
                        <div class="tab-panels">
                            <div id="t1">
                                
                                <span class="iis"></span>
                                <h2 style="text-align:center" class="h22">Начало карьеры</h2>
                                
                                <?php
                                $i1=1;
                                $ui1=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                         <?php if( get_sub_field('cats') == '1' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-1-<?php echo $ui1++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    
                                                    
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?>
</div>
                
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss15', 'option');?>">Заказать резюме</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
 
                                        
                                        <?php else :  ?>
                       <?php endif; ?>
                                       
                                     
                                        <?php endwhile;
                                     else : 
                                       
                                endif;
                                ?>   
                            </div>
                            <div id="t2"><span class="iis"></span>
                     
                            <h2 style="text-align:center" class="h22">Специалист</h2>
                                <?php
                                $ui2=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '2' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-2-<?php echo $ui2++ ?>">
                                            <div class="case-image">
                                               <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?></div>
                
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss13', 'option');?>">Заказать резюме</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php endif; ?>
                                     
                                        <?php endwhile;
                                    else :
                                        
                                endif;
                                ?> 
                            </div>
                            <div id="t3"><span class="iis"></span>
                            <h2 style="text-align:center" class="h22">Профи</h2>
                                <?php
                                $ui3=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '3' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>">
                                            <div class="simple_img_gallery-3-<?php echo $ui3++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
<div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?>
</div>                                            
                                            
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss11', 'option');?>">Заказать резюме</a>
                                                    </div>    
                                                    
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php 
                                       else :
                                        
                                        endif; ?>
                                     
                                        <?php endwhile;
                                    else :
                                       
                                endif;
                                ?>     
                            </div>
                            <div id="t4"><span class="iis"></span>
                            <h2 style="text-align:center" class="h22">Топ</h2>
                                <?php
                                $ui4=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '4' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-4-<?php echo $ui4++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?></div>
                
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss9', 'option');?>">Заказать резюме</a>
                                                </div>    
                                                    
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php 
                                        
                                        endif; ?>
                                    
                                     
                                        <?php endwhile;
                                    else :
                                        
                                      
                                endif;
                                ?> 
                            </div>
                            <div id="t5"><span class="iis"></span>
                            <h2 style="text-align:center" class="h22">Работа в иностранной компании</h2>
                                <?php
                                   $ui5=1;
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '5' ) { ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-5-<?php echo $ui5++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?>
</div>
                
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss23', 'option');?>">Заказать резюме</a>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php } else {  } ?>
                                     
                                        <?php endwhile;
                                  
                                
                                ?> 
                            </div>
                            <div id="t6"><span class="iis"></span>
                            <h2 style="text-align:center" class="h22">Госслужба</h2>
                                <?php
                                $ui6=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '6' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-6-<?php echo $ui6++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?></div>
                
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss22', 'option');?>">Заказать резюме</a>
                                                    
                                           </div>         
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php endif; ?>
                                     
                                        <?php endwhile;
                                    else :
                                       
                                endif;
                                ?> 
                            </div>
                            <div id="t7"><span class="iis"></span>
                            <h2 style="text-align:center" class="h22">Фриланc/Творчество</h2>
                                <?php
                                $ui7=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '7' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-7-<?php echo $ui7++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                   <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?>
</div>  
                
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss19', 'option');?>">Заказать резюме</a>
                                               </div>     
                                                    
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php endif; ?>
                                     
                                        <?php endwhile;
                                    else :
                                        
                                endif;
                                ?> 
                            </div>
                            <div id="t8"><span class="iis"></span>
                            <h2 style="text-align:center" class="h22">Перерыв в стаже</h2>
                                <?php
                                $ui8=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '8' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-8-<?php echo $ui8++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?>
</div> 
                                                    
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss3', 'option');?>">Заказать резюме</a>
                                   </div>                 
                                                    
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php endif; ?>
                                     
                                        <?php endwhile;
                                    else :
                                        
                                endif;
                                ?> 
                            </div>
                            <div id="t9">
                                <span class="iis"></span>
                                <h2 style="text-align:center" class="h22">Возраст 50+</h2>
                                <?php
                                $ui9=1;
                                    if( have_rows('rez') ):
                                        while ( have_rows('rez') ) : the_row();  ?>
                                
                                        <?php if( get_sub_field('cats') == '9' ): ?>
                                        
                                        
                                        <div class="case <?php if( get_sub_field('otk') ): ?>case_locked<?php endif; ?>"><div class="simple_img_gallery-9-<?php echo $ui9++ ?>">
                                            <div class="case-image">
                                                <a href="<?php the_sub_field('pr'); ?>" class="slim">
                	                               <?php if( get_sub_field('pr') ): ?>
                                                    	<img src="<?php the_sub_field('pr'); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="case-text">
                                                <span class="case-text__caption">
                                                    <?php the_sub_field('zag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                    Стаж: <?php the_sub_field('stag') ?>
                                                </span>
                                                <span class="case-text__about">
                                                     Мест работы: <?php the_sub_field('mest') ?>
                                                </span>
                                                <hr class="case-text__line">
                                                <span class="case-text__info">Стоимость написания резюме: <?php the_sub_field('stoim') ?></span>
                                                <span class="case-text__info">Сроки исполения: <?php the_sub_field('srok') ?></span>
                                                <span class="case-text__info">Дата: <?php the_sub_field('data') ?></span>
                                                <div class="case-text__buttons-cont">
                                                    <div class="sus">
<?php if( get_sub_field('img-1') ): ?>
	<a href="<?php the_sub_field('img-1'); ?>"><div class="case-text__btn case-text__btn_more">Посмотреть</div></a>
<?php endif; ?>
<?php if( get_sub_field('img-2') ): ?>
	<a href="<?php the_sub_field('img-2'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-3') ): ?>
	<a href="<?php the_sub_field('img-3'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-4') ): ?>
	<a href="<?php the_sub_field('img-4'); ?>"></a>
<?php endif; ?>
<?php if( get_sub_field('img-5') ): ?>
	<a href="<?php the_sub_field('img-5'); ?>"></a>
<?php endif; ?>
</div>      
                                                    <button class="offer offer__button case-text__btn" data-price="<?php the_field('ss5', 'option');?>">Заказать резюме</a>
                                         </div>           
                                                    
                                                </div>
                                            </div>
                                        </div>
                        
                                        <?php endif; ?>
                                     
                                        <?php endwhile;
                                    else :
                                        
                                endif;
                                ?> 
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









<!-- Стили и скрипт табов -->

<script>
$(function(){
  $('.tab-nav li:first').addClass('select');                // Первой вкладке добавляетсякласс select
  $('.tab-panels>div').hide().filter(':first').show();      // Скрываются все блоки с описанием вкладок кроме первого
  $('.tab-nav a').click(function(){                         // При клике на вкладку
    $('.tab-panels>div').hide().filter(this.hash).show();   // - показывается блок с описанием текущей вкладки
    $('.tab-nav li').removeClass('select');                 // - удаляется класс 'select' у активной ранее вкладки
    $(this).parent().addClass('select');                    // - добавляется класс 'select' для выбранной вкладки
    return (false);                                         // - прерывается обработка события onClick
  })
})
</script>  
<style> 
.tab-box:after{
  clear:both; 
  content:""; 
  display:block;
}
.tab-nav{
  margin:0;
  padding:0;
  list-style:none;
}
.tab-nav li{
  margin-bottom:1px;
  display:block;
  width:100%;
}
.tab-nav li a{
  display:block;
  padding:10px 10px;
  font:normal 12px Arial, Helvetica, sans-serif;
  color:#000;
  text-decoration:none;
}
.tab-nav li a:hover{
  color: #000;
  text-decoration:none;
  background: #f7f7f7;
font-weight: 500;
}
.tab-nav li.select a{
  background: #f7f7f7;
}
.tab-nav .active{
  display:inline-block;
  padding:5px;
}
.tab-box>div{
  margin:0;
}
.tab-nav .select {background: #f7f7f7;}

.fa-caret-left {
    position:relative;
    top:45%;
}
.fa-caret-right {
    position:relative;
    top:45%;
}
.simple_img_gallery {display:inline-block;}
.sus {display:inline-block;}
</style>

<!-- Стили и скрипт табов -->

<script type="text/javascript" src="https://codengineering.ru/uploads/posts/33/js/__jquery.gallery.min.js"></script>

<script>
$(function() {	$('.simple_img_gallery-1-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-1-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-2-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-2-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-3-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-3-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-4-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-4-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-5-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-5-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-6-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-6-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-7-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-7-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-8-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-8-10').createSimpleImgGallery(); });

$(function() {	$('.simple_img_gallery-9-1').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-2').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-3').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-4').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-5').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-6').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-7').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-8').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-9').createSimpleImgGallery(); });
$(function() {	$('.simple_img_gallery-9-10').createSimpleImgGallery(); });
</script>


<?php get_footer(); // подключаем footer.php ?>