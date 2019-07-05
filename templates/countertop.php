<?php
    // Template name: Столешницы
    get_header();
?>

<header class="main-header stairs">
	<div class="container">
		<div class="row">
		<div class="col-left">	
			<navbar class="navbar">
				<div class="navbar-top">
					<a class="logo" href="<?php echo get_home_url( null, '' ); ?>">
						<div class="logo-icon">
							<img src="<?php bloginfo("template_url"); ?>/src/img/logo.svg" alt="Живой камень">
						</div>
						<div class="logo-text">
							Живой Камень
						</div>
					</a>

					<svg class="ham hamRotate" viewBox="0 0 100 100" width="60" onclick="this.classList.toggle('active')">
						<path
								class="line top"
								d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
						<path
								class="line middle"
								d="m 70,50 h -40" />
						<path
								class="line bottom"
								d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
					</svg>

					<?php wp_nav_menu( [
							'menu'            => 'menu-top', 
							'container'       => '', 
							'menu_class'      => 'menu menu-top', 
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						] ); ?>
				</div>
				<!-- /.navbar-top -->
				<div class="navbar-bottom">
					<?php wp_nav_menu( [
							'menu'            => 'menu-bottom', 
							'container'       => '', 
							'menu_class'      => 'menu menu-bottom', 
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						] ); ?>
				</div>
				<!-- /.navbar-bottom -->
			</navbar>

			<h1>Столешницы на заказ из натурального камня							
с гарантией 30 лет							
</h1>

			<ul class="style-1">
				<li>Работаем с 2001 года</li>
				<li>от 6000 руб./п.м.</li>
				<li>Собственное производство</li>
			</ul>

			<a href="modal" data-modal="get-calc" class="btn btn-primary">Рассчитать стоимость столешницы</a>
		</div>
		<!-- /.col-left -->

		<div class="col-right">
			<div class="right-navbar">
				<a href="modal" data-modal="get-call" class="btn btn-inverse">заказать звонок</a>
				<a href="tel:79032522860" class="phone i-phone">+7 903 252-28-60</a>
			</div>

			
		</div>
		<!-- /.col-right -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
	
	<img class="lazy bg-img" data-src="<?php bloginfo("template_url"); ?>/src/img/main-page/slider-image-2.jpg" alt="столешницы">
</header>

<section class="section gray" id="features">
    <div class="container">
        <div class="sub-title">
            <span>преимущества</span>
        </div>
        <h2 class="h2">Почему мы?</h2>

        <div class="features-row">
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
                <a href="<?php echo get_home_url( null, 'nashe-proizvodstvo/' ); ?>" class="link">Наше производство</a>
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



<section id="portfolio" class="section">
    <div class="container">
        <div class="sub-title">
            <span>портфолио</span>
        </div>
        <h2 class="h2">Наши работы</h2>

        <div class="gallery lighbox-1">
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-001.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-001.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-002.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-002.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-003.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-003.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-004.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-004.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-005.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-005.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-006.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-006.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-007.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-007.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-008.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-008.jpg" alt="item">
            </a>
            <a class="item" href="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/stoleshnicy-iz-kamnya-009.jpg">
				<img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/gallery/tabletop/thumbs/stoleshnicy-iz-kamnya-009.jpg" alt="item">
            </a>
            
        </div>
        <div class="text-center space">
            <a href="modal"  data-modal="get-call" class="btn btn-primary">получить консультацию</a>
            <a href="<?php echo get_home_url( null, 'nashi-raboty/' ); ?>" class="btn btn-outline">посмотреть еще наши работы</a>
        </div>
    </div>
</section>

<section class="section gray" id="stone-types">
    <div class="container">
        <div class="sub-title">
            <span>ассортимент</span>
        </div>
        <h2 class="h2">В наличии более 250 видов натурального камня 
            <span class="block small">с месторождений России, стран СНГ, Европы, Индии, Африки, Китая и Бразилии</span></h2>
        
        <div class="stone-types">
            <div class="stone-type">
                <div class="img-container">
                    <img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/stone-types/granite.jpg" alt="granite">
                </div>
                <div class="content">
                    <h3 class="title">Гранит</h3>
                    <p>Включая различные традиционные серые / белые мраморы наряду с более драматическими мраморными оттенками, эквивалентный диапазон мраморной плитки невозможно найти в другом месте.</p>
                </div>
            </div>
            <!-- stone-type -->
            <div class="stone-type">
                <div class="img-container">
                    <img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/stone-types/marble.jpg" alt="marble">
                </div>
                <div class="content">
                    <h3 class="title">Мрамор</h3>
                    <p>Включая различные традиционные серые / белые мраморы наряду с более драматическими мраморными оттенками, эквивалентный диапазон мраморной плитки невозможно найти в другом месте.</p>
                </div>
            </div>
            <!-- stone-type -->
            <div class="stone-type">
                <div class="img-container">
                    <img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/stone-types/onix.jpg" alt="onix">
                </div>
                <div class="content">
                    <h3 class="title">Оникс</h3>
                    <p>Включая различные традиционные серые / белые мраморы наряду с более драматическими мраморными оттенками, эквивалентный диапазон мраморной плитки невозможно найти в другом месте.</p>
                </div>
            </div>
            <!-- stone-type -->
            <div class="stone-type">
                <div class="img-container">
                    <img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/stone-types/travertine.jpg" alt="travertine">
                </div>
                <div class="content">
                    <h3 class="title">Травертин</h3>
                    <p>Включая различные традиционные серые / белые мраморы наряду с более драматическими мраморными оттенками, эквивалентный диапазон мраморной плитки невозможно найти в другом месте.</p>
                </div>
            </div>
            <!-- stone-type -->
            <div class="stone-type">
                <div class="img-container">
                    <img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/stone-types/quartzite.jpg" alt="quartzite">
                </div>
                <div class="content">
                    <h3 class="title">Кварцит</h3>
                    <p>Включая различные традиционные серые / белые мраморы наряду с более драматическими мраморными оттенками, эквивалентный диапазон мраморной плитки невозможно найти в другом месте.</p>
                </div>
            </div>
            <!-- stone-type -->
            <div class="stone-type">
                <div class="img-container">
                    <img class="lazy" data-src="<?php bloginfo("template_url"); ?>/src/img/stone-types/labradorite.jpg" alt="labradorite">
                </div>
                <div class="content">
                    <h3 class="title">Лабрадорит</h3>
                    <p>Включая различные традиционные серые / белые мраморы наряду с более драматическими мраморными оттенками, эквивалентный диапазон мраморной плитки невозможно найти в другом месте.</p>
                </div>
            </div>
            <!-- stone-type -->
        </div>

        <div class="text-center">
            <a href="<?php bloginfo("template_url"); ?>/src/pdf/catalog.pdf" target="_blank" class="btn btn-primary">Скачать весь каталог камней</a>
        </div>
    </div>
</section>

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

<section class="section" id="services">
    <div class="container">
        <div class="sub-title">
            <span>НАШИ УСЛУГИ</span>
        </div>
        <h2 class="h2">Полный цикл работ под ключ</h2>

        <div class="features-row inverse">
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/services/service-1.svg" alt="Замер и проект">
                </div>
                <h4 class="title">Замер и проект</h4>
                <p>Замер и проект входит в стоимость конечного изделия, поэтому вы ничего не теряете</p>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/services/service-2.svg" alt="Доставка и монтаж">
                </div>
                <h4 class="title">Доставка и монтаж</h4>
                <p>Уже на 6-й день после договора ваше изделие приедет на ваш объект для монтажа</p>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/services/service-3.svg" alt="Изготовление">
                </div>
                <h4 class="title">Изготовление</h4>
                <p>Срок изготовления изделия от 5 до 15 рабочих дней, в зависимости от сложности и объема изделия</p>
            </div>
            <div class="feature">
                <div class="icon">
                    <img src="<?php bloginfo("template_url"); ?>/src/img/services/service-4.svg" alt="Гарантии">
                </div>
                <h4 class="title">Гарантии</h4>
                <p>В течение 30 лет мы обслуживаем ваше изделие по гарантии в случае возникновения дефектов</p>
            </div>
        </div>
        <div class="text-center">
            <a href="modal" data-modal="get-call" class="btn btn-primary">консультация специалиста</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>