<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package headphone-shop
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'headphone-shop' ); ?></a>

	<header id="masthead" class="site-header vw-100">

		<div class="container pt-2 pb-2">
			<div class="row align-items-center ">
				

				<div class="col site-header_logo d-flex justify-content-center justify-content-md-start pd-2 img-fluid">
					<?php the_custom_logo(); ?>
				</div>

				<div class="col-md-6">
					<?php aws_get_search_form( true ); ?>
				</div>


				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center pd-2">
					<i class="bi bi-bag p-2"></i>			
					<a href="<?php echo wc_get_cart_url(); ?>">
				</a>	
				
				

					<a 
						class="cart-customlocation" 
						href="<?php echo wc_get_cart_url(); ?>" 
						title="<?php _e( 'View your shopping cart' ); ?>"
					>
						<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?>
					</a>

				</div>

			</div>

		</div>

		<div class="site-branding">
			<?php
			
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$headphone_shop_description = get_bloginfo( 'description', 'display' );
			if ( $headphone_shop_description || is_customize_preview() ) :
				?>
				<p class="site-description">
					<?php echo $headphone_shop_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->










		<nav id="site-navigation" class="main-navigation bg-primary">
			<div class="container d-flex justify-content-center">

				<div class="row">
					<div class="col-12 d-flex justify-content-center ">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
						</svg>
							<?php esc_html_e( '', 'headphone-shop' ); ?>
						</button>
					</div>

					<div class="col-12 text-center">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>

			</div>

		</nav><!-- #site-navigation -->










	</header><!-- #masthead -->
