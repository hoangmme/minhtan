<?php
/**
 * Template Name: Trang chủ IHC
 *
 * @package ihcu
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. Hero Slider Section -->
	<section class="hero-slider">
		<div class="swiper heroSwiper">
			<div class="swiper-wrapper">
				<!-- Slide 1 -->
				<div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1920&auto=format&fit=crop');">
					<div class="hero-overlay"></div>
					<div class="container hero-content">
						<h1>Shaping the Future <br>Through Strategic Investments</h1>
						<p>A fast-growing diversified holding company that is redefining the global marketplace.</p>
						<a href="<?php echo esc_url( home_url( '/who-we-are' ) ); ?>" class="btn">Discover Our Journey</a>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=1920&auto=format&fit=crop');">
					<div class="hero-overlay"></div>
					<div class="container hero-content">
						<h1>Driving Economic <br>Growth & Resilience</h1>
						<p>Investing across sectors to build a sustainable future.</p>
						<a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn">View Portfolio</a>
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Navigation -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>

	<!-- 2. Our Purpose / About Section -->
	<section class="section purpose-section">
		<div class="container">
			<div class="grid grid-2 align-center">
				<div>
					<h2 class="section-title" style="text-align: left;">Our Purpose</h2>
					<p class="purpose-text">
						We create sustainable value for our stakeholders by investing in dynamic and resilient businesses. Our focus is on fostering innovation, empowering communities, and driving economic growth across the region and beyond.
					</p>
				</div>
				<div>
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/79a55e3e-331f-4cc7-8721-4b1dc85808b0" alt="IHC Purpose" style="width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
				</div>
			</div>
		</div>
	</section>

	<!-- 3. Key Stats / Financial Highlights -->
	<section class="section stats-section">
		<div class="container">
			<h2 class="section-title" style="color: #fff;">Financial Highlights 2026</h2>
			<div class="grid grid-3">
				<div class="stat-item">
					<h3>31.4 B</h3>
					<p>Revenue (AED)</p>
				</div>
				<div class="stat-item">
					<h3>8.2 B</h3>
					<p>Net Profit (AED)</p>
				</div>
				<div class="stat-item">
					<h3>900+</h3>
					<p>Subsidiaries</p>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. Our Portfolio -->
	<section class="section">
		<div class="container">
			<h2 class="section-title">Our Diverse Portfolio</h2>
			<p class="section-subtitle">Spanning across critical sectors of the economy, our portfolio is built for resilience and long-term growth.</p>
			
			<div class="grid grid-3">
				<!-- Portfolio Card 1 -->
				<a href="#" class="portfolio-card">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/c4e4d1ab-809a-426f-a316-72204e3c49e0" alt="Real Estate">
					<div class="portfolio-overlay">
						<h3 class="portfolio-title">Real Estate & Construction</h3>
					</div>
				</a>
				
				<!-- Portfolio Card 2 -->
				<a href="#" class="portfolio-card">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/39e16323-f3c0-4df8-9b06-9025b84a4621" alt="Healthcare">
					<div class="portfolio-overlay">
						<h3 class="portfolio-title">Healthcare</h3>
					</div>
				</a>
				
				<!-- Portfolio Card 3 -->
				<a href="#" class="portfolio-card">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/da01c133-ef68-49e9-88b9-76165f7a6f26" alt="Food & Agriculture">
					<div class="portfolio-overlay">
						<h3 class="portfolio-title">Food & Agriculture</h3>
					</div>
				</a>
				
				<!-- Portfolio Card 4 -->
				<a href="#" class="portfolio-card">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/79f73d18-e6df-422d-b5eb-c38a7e5d7d88" alt="Technology">
					<div class="portfolio-overlay">
						<h3 class="portfolio-title">Technology</h3>
					</div>
				</a>
				
				<!-- Portfolio Card 5 -->
				<a href="#" class="portfolio-card">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/5dc4b8ea-2d85-46aa-8bee-d8aff8c2e180" alt="Marine">
					<div class="portfolio-overlay">
						<h3 class="portfolio-title">Marine & Dredging</h3>
					</div>
				</a>
				
				<!-- Portfolio Card 6 -->
				<a href="#" class="portfolio-card">
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/b09fddb6-8854-491d-9d1e-2c3e323554dd" alt="Capital">
					<div class="portfolio-overlay">
						<h3 class="portfolio-title">Capital & Investments</h3>
					</div>
				</a>
			</div>
			
			<div style="text-align: center; margin-top: 50px;">
				<a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn">Explore All Sectors</a>
			</div>
		</div>
	</section>

	<!-- 5. Leadership Message -->
	<section class="section leadership-section">
		<div class="container">
			<div class="grid grid-2 align-center">
				<div style="padding-right: 40px;">
					<p class="leadership-quote">
						"Our unwavering commitment to excellence and strategic vision continues to drive our momentum. As we expand our global footprint, we remain dedicated to creating value that transcends borders."
					</p>
					<p class="leadership-author">H.H. Sheikh Tahnoon bin Zayed Al Nahyan</p>
					<p class="leadership-title">Chairman of IHC</p>
				</div>
				<div>
					<img src="https://pub-a30c952d0179457fbf8fc3c73b51d5cf.r2.dev/image/7e0fe71d-e6b5-42dd-9a57-f46a056f682f" alt="Chairman" style="width: 100%; border-radius: 8px;">
				</div>
			</div>
		</div>
	</section>

	<!-- 6. Latest News Section -->
	<section class="section latest-news-section">
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
								<a href="<?php the_permalink(); ?>" class="read-more">Read More &rarr;</a>
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
			<div style="text-align: center; margin-top: 50px;">
				<a href="<?php echo esc_url( home_url( '/newsroom' ) ); ?>" class="btn">View All News</a>
			</div>
		</div>
	</section>

</main><!-- #main -->

<script>
document.addEventListener('DOMContentLoaded', function () {
	if (typeof Swiper !== 'undefined') {
		var heroSwiper = new Swiper('.heroSwiper', {
			loop: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			}
		});
	}
});
</script>

<?php
get_footer();
