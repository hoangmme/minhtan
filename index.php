<?php
/**
 * The main template file
 *
 * @package ihcu
 */

get_header();
?>

<main id="primary" class="site-main">

	<header class="news-header">
		<div class="container">
			<h1 class="page-title">IHC</h1>
		</div>
	</header>

	<section class="section" style="background-color: #f9f9f9;">
		<div class="container">
			<div class="grid grid-3">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('news-card'); ?>>
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large', array( 'class' => 'news-card-img' ) ); ?>
								<?php else : ?>
									<!-- Fallback image -->
									<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/cf7660c7-f2d0-48ca-8733-bdb85abc3a00" alt="<?php the_title_attribute(); ?>" class="news-card-img">
								<?php endif; ?>
							</a>
							<div class="news-card-content">
								<span class="news-date"><?php echo get_the_date(); ?></span>
								<h2 class="news-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="news-card-excerpt">
									<?php echo wp_trim_words( get_the_excerpt(), 25, '...' ); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="read-more">Read Full Story</a>
							</div>
						</article>
						<?php
					endwhile;
					the_posts_navigation();
				else :
					echo '<p>No content found.</p>';
				endif;
				?>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
