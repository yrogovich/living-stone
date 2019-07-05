<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package living-stone
 */

?>

<div class="section" id="pre-footer">
	<div class="container">
		<h3 class="h3">Подпишитесь на наши новости и акции</h3>
		<p class="short-width">Вы будете одними из первых узнавать о новых коллекциях, получать промо-коды для участия в акциях и распродажах</p>


		<form id="form-subscribe" action="javascript:" onsubmit="call('#form-subscribe')">
			<div class="input-wrapper">
				<input type="email" name="user_email" id="" placeholder="Адрес электронной почты" required>
			</div>
			<button class="btn btn-prefooter" type="submit">Подписаться на акции</button>
		</form>

		<div class="socials">
			<span>Мы в социальных сетях:</span>
			<div class="links">
				<a href="#" class="s-link">
					<img src="<?php bloginfo("template_url"); ?>/src/img/social/facebook.svg" alt="facebook">
				</a>
				<a href="#" class="s-link">
					<img src="<?php bloginfo("template_url"); ?>/src/img/social/vk.svg" alt="vk">
				</a>
				<a href="#" class="s-link">
					<img src="<?php bloginfo("template_url"); ?>/src/img/social/youtube.svg" alt="youtube">
				</a>
				<a href="#" class="s-link">
					<img src="<?php bloginfo("template_url"); ?>/src/img/social/inst.svg" alt="instagram">
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Mobile navbar -->
<div class="mobile-navbar">
	<div class="container">
		<div class="content">
			<?php wp_nav_menu( [
				'menu'            => 'menu-top', 
				'container'       => '', 
				'menu_class'      => 'menu menu-top-mobile', 
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
			] ); ?>

			<?php wp_nav_menu( [
				'menu'            => 'menu-bottom', 
				'container'       => '', 
				'menu_class'      => 'menu menu-bottom-mobile', 
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
			] ); ?>
		</div>
		<div class="footer">
			<a href="tel:79032522860" class="phone i-phone">+7 903 252-28-60</a>
		</div>
	</div>
</div>
<!-- mob-nav -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-1">
					<a class="logo" href="<?php echo get_home_url( null, '' ); ?>">
						<div class="logo-icon">
							<img src="<?php bloginfo("template_url"); ?>/src/img/logo.svg" alt="Живой камень">
						</div>
						<div class="logo-text">
							Живой Камень
						</div>
					</a>

					<p class="bold">ООО «Название компании»</p>
					<a href="modal" data-modal="get-call" class="btn btn-inverse">Бесплатная консультация</a>


					<a href="<?php echo get_home_url( null, 'privacy-policy/' ); ?>" class="link-2 privacy">Политика конфиденциальности</a>
					<span class="copyright">Copyright ©, 2005-2019 “Название компании” . Изделия из натурального камня на заказ с гарантией 30 лет.</span>
				</div>
				<!-- col-1 -->
				<div class="col-2">
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
				</div>
				<!-- /.col-2 -->
				<div class="col-3">
					<div class="title-gray">Наша компания</div>

					<?php wp_nav_menu( [
								'menu'            => 'menu-top', 
								'container'       => '', 
								'menu_class'      => 'menu menu-top-footer', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
							] ); ?>
				</div>
				<!-- /.col-3 -->
				<div class="col-4">
					<div class="title-gray">Наши услуги</div>

					<?php wp_nav_menu( [
								'menu'            => 'menu-bottom', 
								'container'       => '', 
								'menu_class'      => 'menu menu-bottom-footer', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
							] ); ?>
				</div>
				<!-- /.col-3 -->
			</div>
			<!-- row -->
		</div>
	</footer><!-- #colophon -->




<!-- modal-call -->
<div id="get-call" class="modal" >
  <div class="m-title">Свяжитесь с нами через удобный мессенджер или закажите звонок, заполнив форму</div>

  <div class="m-social">
	  <a href="#"><img src="<?php bloginfo("template_url"); ?>/src/img/social/whatsapp.svg" alt="whatsapp"></a>
	  <a href="#"><img src="<?php bloginfo("template_url"); ?>/src/img/social/viber.svg" alt="viber"></a>
	  <a href="#"><img src="<?php bloginfo("template_url"); ?>/src/img/social/telegram.svg" alt="telegram"></a>
  </div>

  <form id="get-call-form" action="javascript:" onsubmit="call('#get-call-form')" method="POST">
	<div class="pair">
		<div class="input-wrapper">
			<input type="text" name="user_name" placeholder="Введите Ваше имя" required>
		</div>
		<div class="input-wrapper">
			<input type="text" name="user_phone" placeholder="Введите Ваш телефон" required>
		</div>
	</div>
  	 
	  <button class="btn btn-primary" type="submit">Отправить</button>
  </form>

  <div class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url( null, 'privacy-policy/' ); ?>" class="">Политики конфиденциальности</a></div>
</div>
<!-- modal-calc -->
<div id="get-calc" class="modal" >
  <div class="m-title">Закажите расчет стоимости наших работ</div>
  <p>Оставьте свои контактные данные, и мы свяжемся с вами в ближайшее время</p>

  <form id="get-calc-form" action="javascript:" onsubmit="call('#get-calc-form')" method="POST">
	<div class="pair">
		<div class="input-wrapper">
			<input type="text" name="user_name" placeholder="Введите Ваше имя" required>
		</div>
		<div class="input-wrapper">
			<input type="text" name="user_phone" placeholder="Введите Ваш телефон" required>
		</div>
	</div>
  	 
	  <button class="btn btn-primary" type="submit">Отправить</button>
  </form>

  <div class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url( null, 'privacy-policy/' ); ?>" class="">Политики конфиденциальности</a></div>
</div>
<!-- modal-calc -->
<div id="get-price-list" class="modal" >
  <div class="m-title">Оставьте свои контактные данные, чтобы получить оптовый прайс-лист</div>

  <form id="get-price-list-form" action="javascript:" onsubmit="call('#get-price-list-form')" method="POST">

	<div class="input-wrapper">
		<input type="text" name="user_name" placeholder="Введите Ваше имя" required>
	</div>
	<div class="input-wrapper">
		<input type="text" name="user_phone" placeholder="Введите Ваш телефон" required>
	</div>
	<div class="input-wrapper">
		<input type="text" name="user_email" placeholder="Введите Ваш Email" required>
	</div>
  	 
	  <button class="btn btn-primary" type="submit">Запросить прайс-лист</button>
  </form>

  <div class="privacy-text">Нажимая на кнопку “Отправить”, Вы принимаете условия <a href="<?php echo get_home_url( null, 'privacy-policy/' ); ?>" class="">Политики конфиденциальности</a></div>
</div>


<!-- madal-thx -->
<div id="thx-modal" class="modal" >
	<div class="m-title">Спасибо за заявку!</div>
  <p style="margin-bottom: 5rem;">Наши специалисты свяжутся с вами в ближайшее время.</p>
  <a href="#" rel="modal:close" class="btn btn-primary">Закрыть</a>
</div>

<!-- Обработчик форм -->
<script>
	function call(form) {
		console.log('form func is running');
		var  msg = jQuery(form).serialize();
		jQuery.ajax({
			type: 'POST',
			url: '<?php bloginfo("template_url"); ?>/src/send.php',
			data: msg,
			success: function(data) {
				console.log('form ok');
				jQuery.modal.close();
				//window.location.replace("<?php // echo get_home_url(null, '/thanks'); ?>");
				jQuery("#thx-modal").modal({
					fadeDuration: 200
				});
				return false;
			},
			error: function () {
				console.log('form error');
				jQuery.modal.close();
			}
		});
	}
</script>

<?php wp_footer(); ?>

</body>
</html>
