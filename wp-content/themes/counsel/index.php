<?php
/**
 * The main template file.
 * 
 * @package Counsel
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        <?php if( have_posts() ) : ?>
            <div class="loop-container-section clearfix">
                <?php
                    // Here starts the loop
                    while (have_posts()): the_post();
                        get_template_part('loop', 'archive');
                    endwhile;
                ?>
            </div><!-- loop-container-section ends -->

            <?php counsel_archive_nav(); // Calls the 'Previous' and 'Next' Post Links. ?>

        <?php else : ?>

            <?php counsel_404_show(); // Function dedicated for handling empty queries. ?>

        <?php endif ?>
    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->
<?php get_footer() ?>