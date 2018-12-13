<?php
/*
 * Template for displaying the loop
 * 
 * @package Counsel
 */
?>
<div class="loop-section-col grid-col-33 grid-float-left">
    <div id="post-<?php the_ID() ?>" <?php post_class( array( 'loop-section' ) ) ?>>
        <div class="loop-post-title">
            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title_attribute() ?>"><?php the_title() ?></a></h1>
        </div>
        <div class="loop-post-meta">
            <span><?php _e( 'Written on', 'counsel' ) ?> </span><span class="loop-meta-date"><?php echo get_the_time( 'M, d, Y' ) ?></span>
            <span><?php _e( 'by', 'counsel' ) ?> </span><span class="loop-meta-author"><?php the_author_posts_link() ?></span>
        </div>
        <div class="loop-post-excerpt clearfix">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="loop-post-text grid-col-16">
                    <div class="loop-thumbnail grid-col-6"><?php the_post_thumbnail( 'counselThumb' ) ?></div>
                    <?php the_excerpt() ?>
                </div>
            <?php } else { ?>
                <div class="loop-post-text grid-col-16"><?php the_excerpt() ?></div>
            <?php } ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'counsel' ) . '</span>', 'after' => '</div>' ) ) ?>
        </div>
    </div>
</div>