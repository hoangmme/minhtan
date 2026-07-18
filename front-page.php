<?php
/**
 * Template Name: Trang chủ IHC
 *
 * @package ihcu
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- 1. Hero Section (Video Background) -->
	<section class="hero-video-section">
		<div class="video-background">
			<iframe src="https://player.vimeo.com/video/1156402689?h=d91c9cb20b&badge=0&autopause=0&player_id=0&app_id=58479&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="hero-overlay-gradient"></div>
		
		<div class="container hero-video-content">
			<h1 class="hero-main-title">Building Dynamic<br>Value Networks.</h1>
		</div>

		<div class="hero-bottom-bar container">
			<div class="hero-ticker">
				<iframe src="https://tools.eurolandir.com/tools/ticker/html/?companycode=ae-asmak&v=static1&lang=en-gb" width="200" height="25" frameborder="0" scrolling="no"></iframe>
			</div>
			<div class="hero-news-excerpt">
				<p>Adani Enterprises and IHC Group Company IRH to form a 50:50 Joint Venture for USD 11.5 Billion Aluminium Project, Positioning Odisha in the Global Aluminium Supply Chain</p>
			</div>
			<div class="hero-news-thumb">
				<img src="https://images.unsplash.com/photo-1556761175-5973dc0f32d7?q=80&w=300&auto=format&fit=crop" alt="News Thumbnail">
			</div>
		</div>
		
		<div class="hero-slider-dots">
			<span class="dot-num">02</span>
			<span class="dot-line"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>
	</section>

	<!-- 2. About Section (One of the world's...) -->
	<section class="section about-hero-section">
		<div class="container">
			<h2 class="about-hero-title">One of the world's largest investment<br>companies</h2>
			
			<div class="about-grid">
				<div class="about-col-left">
					<p class="about-label">• Who We Are</p>
				</div>
				<div class="about-col-mid">
					<p class="about-text">
						Since its founding in 1999, IHC has become one of the largest investment companies in the world. But IHC is far more - we are a forward-thinking, proactive investment leader, creating dynamic value networks that go beyond the traditional holding company model, to represent a new generation of investors.
					</p>
					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn-outline">About Us &nbsp; &rsaquo;</a>
				</div>
				<div class="about-col-right">
					<img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop" alt="IHC Building" class="about-building-img">
				</div>
			</div>

			<div class="stats-row">
				<div class="stat-block">
					<p class="stat-label">Market Capitalization</p>
					<h3 class="stat-value">AED 855 bn</h3>
				</div>
				<div class="stat-block">
					<p class="stat-label">Subsidiaries</p>
					<h3 class="stat-value">1,300+</h3>
				</div>
				<div class="stat-block">
					<p class="stat-label">JVs & Associates</p>
					<h3 class="stat-value">85+</h3>
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
