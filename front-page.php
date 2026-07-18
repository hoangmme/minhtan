<?php
/**
 * Template Name: Trang chủ IHC
 *
 * @package ihcu
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Hero Section -->
	<section class="hero" style="background-image: url('https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/4ddc9e41-16e6-4796-9f83-6e58740cfed3');">
		<div class="container hero-content">
			<h1>Shaping the Future <br>Through Strategic Investments</h1>
			<p>International Holding Company is a fast-growing diversified holding company that is redefining the global marketplace.</p>
			<a href="<?php echo esc_url( home_url( '/who-we-are' ) ); ?>" class="btn">Discover Our Journey</a>
		</div>
	</section>

	<!-- About Section -->
	<section class="section about-section">
		<div class="container">
			<div class="grid grid-3 align-center">
				<div class="about-text" style="grid-column: span 2;">
					<h2 class="section-title" style="text-align: left;">Driving Economic Growth & Diversification</h2>
					<p style="font-size: 1.1rem; color: #555; margin-bottom: 20px;">
						At IHC, we are committed to building long-term value for our shareholders by investing in a diversified portfolio of innovative and dynamic businesses across key sectors of the economy.
					</p>
					<a href="<?php echo esc_url( home_url( '/what-we-do' ) ); ?>" class="read-more">Learn more about what we do &rarr;</a>
				</div>
				<div class="about-image">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/79a55e3e-331f-4cc7-8721-4b1dc85808b0" alt="IHC Building" style="width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
				</div>
			</div>
		</div>
	</section>

	<!-- Latest News Section -->
	<section class="section latest-news-section" style="background-color: #fff;">
		<div class="container">
			<h2 class="section-title">Latest Updates</h2>
			<div class="grid grid-3">
				<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 3,
				);
				$news_query = new WP_Query( $args );

				if ( $news_query->have_posts() ) :
					while ( $news_query->have_posts() ) :
						$news_query->the_post();
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
								<h3 class="news-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="news-card-excerpt">
									<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
							</div>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					echo '<p>No news found.</p>';
				endif;
				?>
			</div>
			<div style="text-align: center; margin-top: 40px;">
				<a href="<?php echo esc_url( home_url( '/newsroom' ) ); ?>" class="btn">View All News</a>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
