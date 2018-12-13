<?php
/*
 * Template for displaying footer.
 * 
 * @package Counsel
 */
get_sidebar('footer');

if( !counsel_get_option( 'disable_footer' ) ): ?>
<div class="footer-bg-section grid-col-16 clearfix">
    <div id="footer-section" class="footer-section grid-col-16">
        <?php if( counsel_get_option( 'show_copyright' ) ): ?>
            <div id="copyright"><?php _e( 'Copyright', 'counsel' ) ?> &#169; <?php echo date( 'Y' ) ?> <?php if( counsel_get_option('footer_name') ) { echo esc_html( counsel_get_option('footer_name') ); } ?> | <?php _e( 'Powered by', 'counsel' ) ?> <a href="http://www.wordpress.org">WordPress</a> | <?php _e( 'Counsel theme by', 'counsel' ) ?> <a href="http://www.mudthemes.com/" target="_blank">mudThemes</a></div>
        <?php endif ?>
    </div>
</div>
<?php endif; ?>
</div><!-- wrapper ends -->
</div><!-- parent-wrapper ends -->
<?php wp_footer(); ?>
</body>
</html>