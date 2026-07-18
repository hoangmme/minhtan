<?php
/**
 * The template for displaying all single posts
 *
 * @package ihcu
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header class="single-news-header">
				<div class="container">
					<div class="news-date"><?php echo get_the_date(); ?></div>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			</header>

			<div class="section" style="background-color: #fff;">
				<div class="container">
					<div class="single-content">
						<?php
						if ( has_post_thumbnail() ) {
							echo '<div class="post-thumbnail">';
							the_post_thumbnail( 'full', array( 'style' => 'width:100%; border-radius: 8px; margin-bottom: 40px;' ) );
							echo '</div>';
						}

						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ihcu' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .single-content -->
				</div>
			</div>

		</article><!-- #post-<?php the_ID(); ?> -->

		<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
