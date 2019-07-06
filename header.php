<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="header-wrapper clearfix">

        <header id="masthead" class="site-header" role="banner">
					<div class="container">
            <div class="site-branding container">
							<div class="row">
								<div class="col-md-8">
                <h1 class="site-title"><img src="/wp-content/uploads/2019/07/atlanta-north-dermatology-logo.png" /></h1>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
									</div>
									<div class="col-md-4">
										<h3 class="phone-top"> (770) 516-5199</h3>
<p>
	100 Stoneforest Dr #320, Woodstock, GA 30189
</p>
<button class="btn-green btn">Patient Portal</button>
									</div>
									</div>
            </div><!-- .site-branding -->
					</div><!-- end container for head section -->
            <div class="nav-wrapper">
            	<div class="nav-container container">
                <div class="menu-button">Menu</div>
                    <?php   wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 0,
                        'container'         => false,
                        'menu_class'        => 'flexnav',
						'items_wrap'		=>'<ul id="%1$s" class="%2$s" data-breakpoint="800">%3$s</ul>'
                        ));
                    ?>
                 </div><!--nav-container -->
            </div><!-- nav-wrapper -->
        </header><!-- #masthead -->
	</div><!-- header-wrapper -->

	<div id="content" class="site-content container">
    	<div class="row">
