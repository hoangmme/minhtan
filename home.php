<?php
/**
 * The template for displaying the blog/news archive
 *
 * @package ihcu
 */

get_header(); ?>

<main id="primary" class="site-main bg-white pt-32 pb-24">
    <div class="max-w-[1400px] mx-auto px-5 md:px-10">
        
        <header class="page-header mb-16">
            <h1 class="text-[48px] md:text-[72px] font-light leading-ihcTitle tracking-ihc text-dark">
                <?php single_post_title(); ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="block">
                        <article class="group cursor-pointer">
                            <div class="w-full aspect-[4/3] overflow-hidden mb-6">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700')); ?>
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/600x400" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700">
                                <?php endif; ?>
                            </div>
                            <div class="text-[14px] font-semibold text-labelGray uppercase tracking-wider mb-3">
                                <?php echo get_the_date(); ?>
                            </div>
                            <h3 class="text-[24px] font-light leading-snug tracking-ihc text-dark group-hover:text-mediumGray transition-colors">
                                <?php the_title(); ?>
                            </h3>
                        </article>
                    </a>
                    <?php
                endwhile;
                ?>
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&lsaquo; Previous', 'ihcu' ),
                    'next_text' => __( 'Next &rsaquo;', 'ihcu' ),
                    'class'     => 'tailwind-pagination',
                ) );
                ?>
            </div>
            
            <style>
                /* Tailwind-ish styling for WP Pagination */
                .tailwind-pagination .nav-links {
                    display: flex;
                    gap: 10px;
                }
                .tailwind-pagination .page-numbers {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    border: 1px solid #e5e5e5;
                    color: #000;
                    text-decoration: none;
                    transition: all 0.3s ease;
                }
                .tailwind-pagination .page-numbers.current {
                    background-color: #000;
                    color: #fff;
                    border-color: #000;
                }
                .tailwind-pagination .page-numbers:hover:not(.current) {
                    background-color: #f5f5f5;
                }
                .tailwind-pagination .prev, .tailwind-pagination .next {
                    width: auto;
                    padding: 0 15px;
                    border-radius: 30px;
                }
            </style>

        <?php else : ?>
            <p>No news found.</p>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
