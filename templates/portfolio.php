<?php
    // Template name: Наши работы
    get_header('other');
?>

<section class="section" id="our-job">
    <div class="container">
        <div class="h2">Наши готовые изделия из натурального камня:</div>
        <div class="row">
            <div class="sidebar">
                <div class="title">Отображать:</div>
                <ul class="with-borders">
                    <li class="filter" data-filter="all">Все изделия</li>
                    <li class="filter" data-filter=".category-stairs">Лестницы</li>
                    <li class="filter" data-filter=".category-tabletop">Столешницы</li>
                    <li class="filter" data-filter=".category-windowsill">Подоконники</li>
                </ul>
                <a href="modal" data-modal="get-call" class="btn btn-primary btn-sm">получить консультацию</a>
            </div>
            <div class="job-container gallery lighbox-1">
                <?php for ($i=1; $i <= 8; $i++) { ?>
                    <a class="item mix category-windowsill" href="<?php bloginfo("template_url"); ?>/src/img/gallery/windowsill/podokonniki-iz-kamnya-0<?php printf("%02d", $i) ?>.jpg">
                        <img src="<?php bloginfo("template_url"); ?>/src/img/gallery/windowsill/thumbs/podokonniki-iz-kamnya-0<?php printf("%02d", $i) ?>.jpg" alt="item">
                    </a>
                <?php } ?>
                <?php for ($i=1; $i <= 11; $i++) { ?>
                    <a class="item mix category-tabletop" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-0<?php printf("%02d", $i) ?>.jpg">
                        <img src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-0<?php printf("%02d", $i) ?>.jpg" alt="item">
                    </a>
                <?php } ?>
                <?php for ($i=1; $i <= 10; $i++) { ?>
                    <a class="item mix category-stairs" href="<?php bloginfo("template_url"); ?>/src/img/gallery/stairs/lestnicy-iz-kamnya-0<?php printf("%02d", $i) ?>.jpg">
                        <img src="<?php bloginfo("template_url"); ?>/src/img/gallery/stairs/thumbs/lestnicy-iz-kamnya-0<?php printf("%02d", $i) ?>.jpg" alt="item">
                    </a>
                <?php } ?>
                
            </div>
        </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script>
    var mixer = mixitup('.job-container');
</script>

<?php get_footer(); ?>