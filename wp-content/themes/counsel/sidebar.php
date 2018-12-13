<?php
/**
 * Primary sidebar section of Counsel theme
 * 
 * @since 1.0.0
 * 
 * @package Counsel
 */
?>
<div id="sidebar-primary-section" class="sidebar-primary-section grid-float-left">    
    <?php if ( !dynamic_sidebar( 'primary_sidebar' ) ): ?>
        <aside class="widget widget_recent_entries">
            <h4 class="widget-title font-secondary"><?php _e( 'Recent Posts', 'counsel' ); ?></h4>
            <ul><?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5, 'format' => 'html' ) ); ?></ul>
        </aside>
        <aside class="widget widget_search">
            <h4 class="widget-title font-secondary"><?php _e( 'Search', 'counsel' ); ?></h4>
            <?php get_search_form(); ?>
        </aside>
    <?php endif ?>
</div>