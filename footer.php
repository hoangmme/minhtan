	<footer id="colophon" class="site-footer">
		<div class="container">
            <div class="footer-grid">
                <div class="footer-widget">
                    <h4>About IHC</h4>
                    <p>A fast-growing diversified holding company that is redefining the global marketplace.</p>
                </div>
                <div class="footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/who-we-are' ) ); ?>">Who We Are</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/what-we-do' ) ); ?>">What We Do</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>">Portfolio</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/investor-relations' ) ); ?>">Investor Relations</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/newsroom' ) ); ?>">Newsroom</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/media-centre' ) ); ?>">Media Centre</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h4>Connect</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
                        <li><a href="https://www.linkedin.com/company/ihc-uae" target="_blank" rel="noopener">LinkedIn</a></li>
                        <li><a href="https://x.com/ihc__official" target="_blank" rel="noopener">Twitter / X</a></li>
                    </ul>
                </div>
            </div>
			<div class="footer-bottom">
				&copy; <?php echo date( 'Y' ); ?> International Holding Company. All rights reserved.
			</div><!-- .footer-bottom -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// Simple sticky header script
window.addEventListener('scroll', function() {
    var header = document.querySelector('.site-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
</script>

</body>
</html>
