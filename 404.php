<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package living-stone
 */

get_header('other');
?>

	<section class="section" id="for-partners" style="padding-bottom: 8rem">
    <div class="container">
        <h2 class="h2">Ошибка 404</h2>

        <p>Проверьте правильность адреса. <br> Возможно вы перешли по неверной ссылке</p>

		<div class="text-center">
			<a href="<?php echo get_home_url( null, '' ); ?>" class="btn btn-primary">Вернуться на главную</a>
		</div>
	</div>
	
</section>

<?php
get_footer();
