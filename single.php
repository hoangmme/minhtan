<?php
/**
 * The template for displaying all single posts
 *
 * @package ihcu
 */

get_header();
?>

<main id="primary" class="site-main bg-white pt-32 pb-24">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <header class="max-w-[1000px] mx-auto px-5 md:px-10 mb-12 text-center">
                <div class="text-[14px] font-semibold text-labelGray uppercase tracking-wider mb-6">
                    <?php echo get_the_date(); ?>
                </div>
                
                <h1 class="text-[40px] md:text-[60px] font-light leading-tight tracking-ihc text-dark mb-8">
                    <?php the_title(); ?>
                </h1>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="max-w-[1400px] mx-auto px-5 md:px-10 mb-16">
                    <div class="w-full aspect-video overflow-hidden">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover sharp-img')); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="max-w-[800px] mx-auto px-5 md:px-10">
                <div class="entry-content prose prose-lg prose-headings:font-light prose-headings:text-dark prose-a:text-black prose-a:underline hover:prose-a:text-gray-600 prose-img:rounded-none max-w-none text-[#444]">
                    <?php
                    the_content();
                    
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ihcu' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </div>

        </article>

        <?php
    endwhile;
    ?>
</main>

<!-- Back to news button -->
<div class="bg-gray-50 py-16 text-center border-t border-gray-200">
    <a href="<?php echo esc_url( home_url( '/newsroom' ) ); ?>" class="inline-flex items-center gap-3 px-8 py-3 rounded-full border border-gray-300 text-black hover:bg-black hover:text-white transition-all">
        &lsaquo; Back to Newsroom
    </a>
</div>

<?php
get_footer();
