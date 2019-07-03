<?php
    // Template name: Контакты
    get_header('other');
?>

<section class="section" id="contacts">
    <div class="container">
        <h2 class="h2">Контакты</h2>

        <div class="row">
            <div class="left-side">
                <a class="logo medium" href="<?php echo get_home_url( null, '' ); ?>">
                    <div class="logo-icon">
                        <img src="<?php bloginfo("template_url"); ?>/src/img/logo.svg" alt="Живой камень">
                    </div>
                    <div class="logo-text">
                        Живой Камень
                    </div>
                </a>

                <div class="company-name">ООО "Живой камень"</div>
                <p class="description">Производство изделий из натурального камня</p>

                <hr>

                <div class="title-gray">Контакты</div>

                <a href="tel:+79032522860" class="with-icon i-phone">+7 903 252-28-60</a>
                <a href="mailto:zakaz@alive-stone.ru" class="with-icon i-email">zakaz@alive-stone.ru</a>
                <p class="with-icon i-point m0">Шоурумы в Москве:</p>
                    <ol>
                        <li>Выставочный центр "Росстройэкспо". Фрунзенская наб. д.30, павильон 13-а, стенд 3.</li>
                        <li>ЦДиИ Экспострой Нахимовский п-кт 24, п-он 2, стенд 139</li>
                    </ol>
                <p class="with-icon i-point m0">Адрес производства:</p>
                    <ol>
                        <li>Моск. обл., г.Дубна, ул. Дружбы д.19</li>
                    </ol>

                <a href="modal" data-modal="get-call" class="btn btn-inverse">Бесплатная консультация</a>
            </div>
            <!-- left -->
            <div class="right-side">
                <div id="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A88674aa80c39adf7bd4bd67fc405722c9e9fcf04edefef2406d722f435008887&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
            </div>
            <!-- /.right-side -->
            
        </div>

       

    </div>
</section>

<?php get_footer(); ?>