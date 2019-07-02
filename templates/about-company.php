<?php
    // Template name: О компании
    get_header('other');
?>

<section class="section" id="about-company">
    <div class="container">
        <h2 class="h2">О компании</h2>

        <a class="logo big" href="<?php echo get_home_url( null, '' ); ?>">
            <div class="logo-icon">
                <img src="<?php bloginfo("template_url"); ?>/src/img/logo.svg" alt="Живой камень">
            </div>
            <div class="logo-text">
                Живой Камень
            </div>
        </a>

        <div class="company-name">ООО "Живой камень"</div>
        <p class="description">Производство изделий из натурального камня</p>

    </div>
</section>

<div class="section gray" id="company-digits">
    <div class="container">
        <div class="row">
            <div class="digit">
                <img src="<?php bloginfo("template_url"); ?>/src/img/digits/digit-1.svg" alt="18 лет">
                <p>Работаем с 2001 года. Огромный опыт и профессиональная команда позволяют решать самые сложные и не стандартные задачи.</p>
            </div>
            <div class="digit">
                <img src="<?php bloginfo("template_url"); ?>/src/img/digits/digit-2.svg" alt="2000 изделий">
                <p>Более 2000 изделий изготовлено за годы работы.</p>
            </div>
            <div class="digit">
                <img src="<?php bloginfo("template_url"); ?>/src/img/digits/digit-3.svg" alt="10 специалистов">
                <p>Более 10 специалистов в штате компании. Собственный производственный цех с профессиональным оборудованием.</p>
            </div>
        </div>
    </div>
</div>


<section class="section shapes" id="video">
    <div class="container">
        <div class="sub-title">
            <span>видеопрезентация</span>
        </div>
        <h2 class="h2">Главное о компании "Живой камень" - за 43 секунды</h2>

        <div class="video-container">
            <div class="youtube" data-embed="zxoMA2R4H0o">
                <div id="play-video" class="video-play-button">
                    <span></span>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="" id="seo-text">
    <div class="container">
        <h2 class="h2">СЕО текст о компании</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Пока его тут нету</p>
        <?php endif; ?>
    </div>
</section>

<section class="section" id="features">
    <div class="container">
        <div class="sub-title">
            <span>преимущества</span>
        </div>
        <h2 class="h2">Почему мы?</h2>

        <div class="features-row inverse">
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/features/feature-1.svg" alt="Приятная ценовая политика">
                </div>
                <h4 class="title">Приятная ценовая политика</h4>
                <p>Наличие прямых дистрибьюторских контрактов позваляет делать для наших клиентов лучшие цены на камень и давать дополнительные скидки до 10%.</p>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/features/feature-2.svg" alt="Профессиональное оборудование">
                </div>
                <h4 class="title">Профессиональное оборудование</h4>
                <p>Профессиональное оборудование для гидроабразивной резки камня. Отрезные мостовые станки.</p>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/features/feature-3.svg" alt="Более 250 сортов камня">
                </div>
                <h4 class="title">Более 250 <span class="block">сортов камня</span></h4>
                <p>Из Италии, Испании, Бразилии, Индии, Африки, Китая, России и СНГ.</p>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/features/feature-4.svg" alt="Быстрая доставка">
                </div>
                <h4 class="title">Быстрая <span class="block">доставка</span></h4>
                <p>На собственном автопарке по Москве и Московской области.	</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>