<?php
/**
 * The frontpage file.
 * 
 * @package Counsel
 */
if( get_option( 'show_on_front' ) == 'page' ) {
    
    get_template_part( 'page' );
    
} elseif( counsel_is_home() ) {
    
    get_template_part( 'home' );
    
} else {

get_header();
counsel_cta_section_show() ?>
            
<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        <?php if( have_posts() ) : ?>
            <div class="loop-container-section clearfix">
            <?php
                // Here starts the loop
                while( have_posts() ): the_post();
                    get_template_part( 'loop', 'home' );
                endwhile;
            ?>
            </div>
            <?php counsel_archive_nav(); // Calls the 'Previous' and 'Next' Post Links. ?>

        <?php else : ?>

            <?php counsel_404_show(); // Function dedicated for handling empty queries. ?>

        <?php endif;?>
    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->
<?php get_footer() ?>
<?php } ?>