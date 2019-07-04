<?php
    // Template name: Партнерам
    get_header('other');
?>

<section class="section" id="for-partners">
    <div class="container">
        <h2 class="h2">Станьте нашим партнером</h2>

        <p>Компания "Живой Камень" успешно работает на рынке изделий из натурального и искусственного камня с 2001 года. За большой и насыщенный опыт работы мы наработали большую команду наших партнеров, среди которых и мебельные фабрики, дизайнеры инетерьеров, мебельные салоны, архитекторы, строительные компании и другие.</p>

        <p>В процессе сотрудничесва мы предлагаем своим парнерам уникальные выгодные условия, как по обслуживанию, так и в ценовой политике.</p>

        <p class="bold">Главная цель - быть полезными для Вас и для Ваших клиентов.	</p>
    </div>
</section>

<section class="section gray" id="features">
    <div class="container">
        <div class="sub-title">
            <span>кому</span>
        </div>
        <h2 class="h2">Для кого интересно предложение</h2>

        <div class="features-row small-features style-2">
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/for-who/icon-1.svg" alt="Архитекторы">
                </div>
                <h4 class="title">Архитекторы</h4>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/for-who/icon-2.svg" alt="Дизайнеры">
                </div>
                <h4 class="title">Дизайнеры</h4>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/for-who/icon-3.svg" alt="Мебельные салоны">
                </div>
                <h4 class="title">Мебельные <span class="block">салоны</span></h4>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/for-who/icon-4.svg" alt="Мебельные фабрики">
                </div>
                <h4 class="title">Мебельные <span class="block">фабрики</span></h4>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/for-who/icon-5.svg" alt="Строительные компании">
                </div>
                <h4 class="title">Строительные <span class="block">компании</span></h4>
            </div>
        </div>
    </div>
</section>

<section class="section" id="why">
    <div class="container">
        <div class="sub-title">
            <span>для чего</span>
        </div>
        <h2 class="h2">Чем интересно предложение</h2>

        <div class="reasons">
            <div class="reason">
                <img src="<?php bloginfo("template_url"); ?>/src/img/interesting-proposals/image-1.jpg" alt="Предоставляем выставочные образцы и рекламные материалы">
                <div class="content">
                    <p>Предоставляем выставочные образцы и рекламные материалы</p>
                </div>
            </div>
            <!-- /.reason -->
            <div class="reason inverse">
                <img src="<?php bloginfo("template_url"); ?>/src/img/interesting-proposals/image-2.jpg" alt="Быстрая первоочередная доставка партнерских заказов">
                <div class="content">
                    <p>Быстрая первоочередная доставка партнерских заказов</p>
                </div>
            </div>
            <!-- /.reason -->
            <div class="reason">
                <img src="<?php bloginfo("template_url"); ?>/src/img/interesting-proposals/image-3.jpg" alt="Отсрочки платежей ВИП партнерам">
                <div class="content">
                    <p>Отсрочки платежей ВИП партнерам</p>
                </div>
            </div>
            <!-- /.reason -->
            <div class="reason inverse primary-content">
                <img src="<?php bloginfo("template_url"); ?>/src/img/interesting-proposals/image-4.jpg" alt="Система партнерских скидок до 30%">
                <div class="content">
                    <p>Система партнерских скидок до 30%</p>
                </div>
            </div>
            <!-- /.reason -->

        </div>
        <!-- reasons -->

        <div class="text-center">
            <a href="modal" data-modal="get-call" class="btn btn-primary">Запросить оптовый прайс-лист по изделиям</a>
        </div>
    </div>
</section>

<section class="section" id="collaboration">
    <div class="container">
        <div class="sub-title">
            <span>сотрудничество</span>
        </div>
        <h2 class="h2">По вопросам оптового сотрудничества <span class="block">
связывайтесь с нами по телефону</span></h2>

        <div class="social-btns">
            <a href="tel:29032522860" class="social-btn i-phone"> 8 (903) 252-28-60</a>
            <a href="modal" class="social-btn i-whatsapp">Написать в WhatsApp</a>
            <a href="modal" class="social-btn i-telegram">Написать в Telegram</a>

        </div>
    </div>
</section>

<?php get_footer(); ?>