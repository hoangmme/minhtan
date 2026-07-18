</main></div><!--$--><!--$--><!--/$--><!--/$-->
<script>
document.addEventListener("DOMContentLoaded", function() {
    if (typeof Swiper !== 'undefined') {
        new Swiper('.swiper-social-media', {
            slidesPerView: 2,
            spaceBetween: 24,
            navigation: {
                nextEl: '.social-n',
                prevEl: '.social-p'
            },
            breakpoints: {
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 }
            }
        });
        
        new Swiper('.swiper-is-news-room', {
            slidesPerView: 1.2,
            spaceBetween: 24,
            breakpoints: {
                768: { slidesPerView: 2.2 },
                1024: { slidesPerView: 3.2 }
            }
        });

        new Swiper('.heroSwiper', {
            slidesPerView: 1,
            autoplay: { delay: 5000 },
            loop: true
        });
    }

    // Force visibility for scroll animations
    const animatedElements = document.querySelectorAll('.sa-section, .sa-card, .custom-label, .custom-heading, .custom-description, .custom-image, [data-custom-bullet]');
    animatedElements.forEach(el => {
        el.classList.add('sa-visible');
    });
});
</script>

<?php wp_footer(); ?>
</body></html>