<?php
/*
 * Template for displaying search queries.
 * 
 * @package Counsel
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        <?php if( have_posts() ) : ?>
            <div class="archive-meta-container">
                <div class="archive-head">
                    <h1><?php printf( __( ' Search Result for: %s', 'counsel' ), '<span>' . get_search_query() . '</span>' ) ?></h1>
                </div>
            </div><!-- Archive Meta Container ends -->
            <div class="loop-container-section clearfix">
                <?php
                    // Here starts the loop
                    while (have_posts()): the_post();
                        get_template_part('loop', 'archive');
                    endwhile;
                ?>
            </div><!-- loop-container-section ends -->
                    
            <?php counsel_archive_nav() // Calls the 'Previous' and 'Next' Post Links. ?>

        <?php else : ?>

            <?php counsel_404_show() // Function dedicated for handling empty queries. ?>

        <?php endif;?>
    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->
<?php get_footer() ?>