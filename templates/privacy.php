<?php
    // Template name: Privacy
    get_header('other');
?>

<section class="section article" >
    <div class="container">
       
    <?php while( have_posts() ) : the_post();
        $more = 1; // отображаем полностью всё содержимое поста
        //the_title(); // эта функция выводит заголовок
        the_content(); // выводим контент
    endwhile; ?>

    </div>
</section>

<?php get_footer(); ?>