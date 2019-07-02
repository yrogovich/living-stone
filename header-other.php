<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package living-stone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

<header class="main-header other-pages">
    <div class="border-bottom">
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
            </div>

            <div class="col-right">
                <div class="right-navbar">
                    <a href="#get-call" rel="modal:open" class="btn btn-inverse">заказать звонок</a>
                    <a href="tel:79032522860" class="phone i-phone">+7 903 252-28-60</a>
                </div>
            </div>
            <!-- /.col-right -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
<!-- border-bottom -->
</header>
