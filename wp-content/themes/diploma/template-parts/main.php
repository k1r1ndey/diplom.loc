<?php
/*
    Template Name: Главная страничка
 *
 *
 * Created by PhpStorm.
 * User: PC
 * Date: 03.12.2019
 * Time: 21:50
 */
get_header();
?>
<?php while( have_posts() ) : the_post();?>
    <div class="row">
        <div class="col-sm-8">
            <?php the_title(); // эта функция выводит заголовок ;?>
        </div>
    </div> <!--Заголовки -->

    <div class="row">
        <div class="test-class col-sm">
            <div class="test-class2 col-sm-2">
                Кто мы такие ?
            </div>
            <?php
                $more = 1; // отображаем полностью всё содержимое поста
                the_content(); // выводим контент
            endwhile; ?>
        </div>
    </div>
<?php get_footer()?>
