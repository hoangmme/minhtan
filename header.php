<!DOCTYPE html>
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ihcu' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container flex justify-between align-center">
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <!-- Static logo path from IHC -->
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/46ad4e43-53a5-4a92-8576-af23fa5cb6c6" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<ul>
                    <li><a href="<?php echo esc_url( home_url( '/who-we-are' ) ); ?>">Who We Are</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/what-we-do' ) ); ?>">What We Do</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">Portfolio</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/investor-relations' ) ); ?>">Investor Relations</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/newsroom' ) ); ?>">Newsroom</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                </ul>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
