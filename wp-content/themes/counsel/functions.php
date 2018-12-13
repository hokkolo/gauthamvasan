<?php
/**
 * Counsel Theme functions and definitions
 * 
 * @package Counsel
 * @since 1.0
 */


/**
 * Counsel Theme Constants
 * 
 * @since 1.0
 */
define('COUNSEL_PRO', FALSE );
define('COUNSEL_GLOBAL_JS_URL', get_template_directory_uri() . '/assets/global/js/');
define('COUNSEL_GLOBAL_IMAGES_URL', get_template_directory_uri() . '/assets/global/images/');
define('COUNSEL_INCLUDES_DIR' , get_template_directory() . '/includes/' );



/**
 * Customizer call
 */
require_once COUNSEL_INCLUDES_DIR . 'customizer.php';



/**
 * Sets up theme defaults and registers support for various theme features
 * 
 * @since 1.0
 */
function counsel_setup() {
    
    global $content_width;
    
    /**
     * Primary content width according to the design and stylesheet.
     */
    if ( ! isset( $content_width ) ) { $content_width = 890; }
    
    /**
     * Makes counsel Theme ready for translation.
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain('counsel', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support('automatic-feed-links');
    
    /**
     * Add custom background.
     * @todo Put E7E7E7 in a variable and then change it according to the skin
     */
    add_theme_support('custom-background', array('default-color' => 'E7E7E7'));
    
    /**
     * Automatically adds title tag
     */
    add_theme_support('title-tag');

    /**
     * Adds supports for Theme menu.
     * Counsel uses wp_nav_menu() in a single location to diaplay one single menu.
     */
    register_nav_menu('primary', 'Primary Menu');

    /**
     * Add support for Post Thumbnails.
     * Defines a custom name and size for Thumbnails to be used in the theme.
     *
     * Note: In order to use the default theme thumbnail, add_image_size() must be removed
     * and 'counselThumb' value must be removed from the_post_thumbnail in the loop file.
     */
    add_theme_support('post-thumbnails');
    add_image_size('counselThumb', 175, 150, true);
	
	/**
	 * Adds editor style css file for TinyMCE
	 */
	add_editor_style('assets/admin/css/editor-style.css');
}
add_action( 'after_setup_theme', 'counsel_setup' );



/**
 * Defines menu values and call the menu itself.
 * The menu is registered using register_nav_menu function in the theme setup.
 * 
 * @since 1.0
 */
function counsel_nav() {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_id' => 'menu',
        'menu_class' => 'sf-menu counsel_menu',
        'menu_id' => 'counsel_menu',
        'fallback_cb' => 'counsel_nav_fallback' // Fallback function in case no menu item is defined.
    ));
}



/**
 * Displays a custom menu in case either no menu is selected or
 * menu does not contains any items or wp_nav_menu() is unavailable.
 * 
 * @since 1.0
 */
function counsel_nav_fallback() {
?>
    <div id="menu">
    	<ul class="sf-menu" id="counsel_menu">
            <?php
                $class = ''; $menu = '';
                if ( is_front_page() && !is_paged() ) {
                    $class = 'class="current_page_item"';
                }
                $menu .= '<li ' . $class . '><a href="' . home_url( '/' ) . '">' . __('Home','counsel') . '</a></li>';
                echo $menu;
            	wp_list_pages( 'title_li=&sort_column=menu_order&depth=3');
            ?>
        </ul>
    </div>
<?php
}



/**
 * Register sidebars one at right and three footer sidebars in a box.
 * 
 * @since 1.0
 */
function counsel_sidebars() {

    // Primary Sidebar
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'counsel'),
        'id' => 'primary_sidebar',
        'description' => __('The Primary Sidebar of Counsel Theme', 'counsel'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #1
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #1', 'counsel'),
        'id' => 'footerbox_sidebar_1',
        'description' => __('Footerbox Sidebar #1', 'counsel'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #2
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #2', 'counsel'),
        'id' => 'footerbox_sidebar_2',
        'description' => __('Footerbox Sidebar #2', 'counsel'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #3
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #3', 'counsel'),
        'id' => 'footerbox_sidebar_3',
        'description' => __('Footerbox Sidebar #3', 'counsel'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
}
add_action( 'widgets_init', 'counsel_sidebars' );



/**
 * Enqueue CSS and JS files
 * 
 * @since 1.0
 */
function counsel_enqueue() {
    
    wp_enqueue_style('counsel-roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic');
    wp_enqueue_style('counsel-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');
    wp_enqueue_style('counsel-font-awesome', COUNSEL_ADMIN_CSS_URL . 'font-awesome.4.7.0.css', false, '4.7.0');
    wp_enqueue_style('counsel-stylesheet', get_stylesheet_uri(), false, '1.0.7.3', 'all' );
    wp_add_inline_style('counsel-stylesheet', wp_filter_nohtml_kses(counsel_get_option('custom_css')));
    
    // Enqueue (comment-reply )Javascript in case of threaded comments.
    if (is_singular() && comments_open() && get_option('thread_comments')) :
        wp_enqueue_script('comment-reply');
    endif;
    
    wp_enqueue_script('counsel-flexslider', COUNSEL_GLOBAL_JS_URL . 'jquery.flexslider-min.js', array( 'jquery' ), '2.1.0', true);
    wp_localize_script('counsel-flexslider', 'counsel_slide_vars', array(
        'slideshowSpeed' => counsel_get_option('slide_speed'),
        'animationSpeed' => counsel_get_option('slide_ani_speed'),
        'directionNav' => (bool) counsel_get_option('disable_slide_nav') ? '' : 'true',
        'smoothHeight' => (bool) counsel_get_option('disable_smooth_height') ? '' : 'true',
        'animation' => counsel_get_option('slide_animation_type'),
        'direction' => counsel_get_option('slide_dir'),
        ));
    wp_enqueue_script('counsel-superfish', COUNSEL_GLOBAL_JS_URL . 'superfish.min.js', array( 'jquery' ), '1.4.8', true);
    wp_enqueue_script('jquery-color');
    wp_enqueue_script('counsel-custom', COUNSEL_GLOBAL_JS_URL . 'custom.min.js', array( 'jquery' ), '1.0.7.3', true);
}
add_action( 'wp_enqueue_scripts', 'counsel_enqueue');



/**
 * Hooks respond.js for IE in the wp_head hook.
 * 
 * @since 1.0
 */
function counsel_enqueue_ie_script() {
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo COUNSEL_GLOBAL_JS_URL ?>respond.min.js'></script><![endif]--><?php
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo COUNSEL_GLOBAL_JS_URL ?>html5shiv.min.js'></script><![endif]--><?php
    echo "\n";
}
add_action('wp_head', 'counsel_enqueue_ie_script');



/**
 * Defines the number of characters for post excerpts
 * and is added to excerpt_length filter.
 * 
 * @since 1.0
 */
function counsel_excerpt_length( $length ) {
	return 43;
}
add_filter( 'excerpt_length', 'counsel_excerpt_length' );



/**
 * Defines the text for the (read more) link for post excerpts
 * and is added to excerpt_more filter.
 * 
 * @since 1.0
 */
function counsel_auto_excerpt_more( $more ) {
	return '&hellip;' ;
}
add_filter( 'excerpt_more', 'counsel_auto_excerpt_more' );



/**
 * Used to return body classes
 * 
 * @param array $classes
 * @return array
 * @since 1.0
 */
function counsel_body_class($classes) {
    
    if(is_single()):
        
        $classes[] = 'single-template';
        $classes[] = 'post-template';
    
    elseif(is_page()):
        
        $classes[] = 'page-template';
        $classes[] = 'post-template';

    elseif(is_front_page()):
        
        $classes[] = 'home-template';
    
    elseif(is_home()):
        
        $classes[] = 'home-template';
        $classes[] = 'blog-template';
    
    elseif (is_archive()):
        
        $classes[] = 'archive-template';
    
    elseif(is_404()):
        
        $classes[] = 'archive-template';
    
    elseif(is_search()):
        
        $classes[] = 'archive-template';
        $classes[] = 'search-template';
    
    endif;
    
        $classes[] = counsel_get_option('skin');
        $classes[] = 'theme-' . counsel_get_option('layout');
    
    return $classes;
}
add_filter('body_class', 'counsel_body_class');



/**
 * Display slideshow only if any slideshow image exists.
 * 
 * @since 1.0
 * @todo Check HTML structure and CSS classes.
 */
function counsel_carousel_featured_slideshow_show(){
    
    for($i = 1; $i <= 3; $i++){
        $slides[$i]['img'] = counsel_get_option('featured_slide_img_' . $i);
        $slides[$i]['head'] = counsel_get_option('featured_slide_head_' . $i);
        $slides[$i]['text'] = counsel_get_option('featured_slide_text_' . $i);
        $slides[$i]['button'] = counsel_get_option('featured_slide_button_' . $i);
        $slides[$i]['button_url'] = counsel_get_option('featured_slide_button_url_' . $i);
    }
        
    $error = array_filter($slides); // Check if array is empty.
        
        if(!empty($error)): ?>
            <div id = "featured-container" class = "slider">
                <div class = "flexslider">
                    <ul class = "slides">
                        <?php
                            if(is_array($slides)):
                                foreach ($slides as $slides):
                                    if(!empty($slides['img'])):
                                        ?>
                                        <li>
                                            <img src="<?php echo esc_url( $slides['img'] ) ?>" />
                                            <div class="flex-caption">
                                                <div class="featured-heading">
                                                    <span><?php echo esc_html( $slides['head'] ) ?></span>
                                                </div>
                                                <div class="featured-content">
                                                    <span><?php echo esc_html( $slides['text'] ) ?></span>
                                                </div>
                                                <div class="featured-button">
                                                    <span><a href="<?php echo esc_url($slides['button_url']) ?>" title="<?php echo esc_html( $slides['button'] ) ?>"><?php echo esc_html( $slides['button'] ) ?></a></span>
                                                </div>

                                            </div>
                                        </li>
                                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                </div>
            </div>
        <?php endif;
}



/**
 * Used to display CTA section
 * 
 * @since 1.0
 */
function counsel_cta_section_show(){
    ?>
    <?php if(!counsel_get_option('disable_featured_section')): ?>
        <div id="cta-bg-section" class="cta-bg-section grid-col-16 clearfix">
            <div id="cta-section" class="cta-section grid-col-16 clearfix">
                <div id="cta-content-section" class="cta-content-section grid-col-16">
                    <div class="cta-image-section"><?php counsel_carousel_featured_slideshow_show() ?></div>
                </div>
            </div> <!-- cta section ends -->
        </div>
    <?php endif; ?>

<?php }



/**
 * Checks whether the all the content sections are disabled or not.
 * 
 * @since 1.0
 */
function counsel_is_home() {
    
    if(counsel_get_option('disable_featured_section') && (get_option('show_on_front') == 'posts')){
        add_filter('counsel_blog_template_heading_filter', 'counsel_is_blog_heading_text', 20);
        return TRUE;
    } else {
        return FALSE;
    }
}



/**
 * Adds text to counsel_blog_template_heading_filter used on home.php
 * 
 * @return string
 */
function counsel_is_blog_heading_text(){
    return '';
}



/**
 * Used to display social section
 * 
 * @since 1.0
 */
function counsel_social_section_show() {
    
    if(!counsel_get_option('disable_social_section')):

    $output = false;
    ?>            
                
                <?php if(counsel_get_option('telephone_text')): ?>
                <?php $output .= '
                <div class="telephone-text">
                    <span>' . counsel_get_option('telephone_text') . '</span>
                </div>' ?>
                <?php endif ?>

                <?php if(counsel_get_option('facebook')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(counsel_get_option('facebook')).'" title="Facebook"><i class="mdf mdf-facebook"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if(counsel_get_option('twitter')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(counsel_get_option('twitter')).'" title="Twitter"><i class="mdf mdf-twitter"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if(counsel_get_option('linkedin')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(counsel_get_option('linkedin')).'" title="Linkedin"><i class="mdf mdf-linkedin"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if(counsel_get_option('youtube')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(counsel_get_option('youtube')).'" title="YouTube"><i class="mdf mdf-youtube-play"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if(counsel_get_option('rss')): ?>
                <?php $output .= '
                <div class="social-icons">
                    <a href="'.esc_url(counsel_get_option('rss')).'" title="RSS Feed"><i class="mdf mdf-rss"></i></a>
                </div>' ?>
                <?php endif ?>
                
                <?php if($output !== false): ?>
                <div id="social-section" class="social-section clearfix">
                    <?php echo $output ?>
                </div>
                <?php endif ?>
            
            <div class="socialicons-mi"></div><div class="socialicons-mo"></div>

<?php
    endif;
}



/**
 * Displays the content in case of 404 page, empty search query
 * and any other query which does not output any result.
 * 
 * Both heading and content of the page will be displayed with a
 * search form. Any modification to this module will effect only
 * 404 error or related pages.
 * 
 * @since 1.0
 */
function counsel_404_show(){
?>
        <div class="archive-meta-container">
            <div class="archive-head">
                <?php if (is_404()) : ?>
                    <h1><?php _e('Ooops! Nothing Found', 'counsel'); ?></h1>
                <?php elseif (is_search()) : ?>
                    <h1><?php printf(__('Nothing found for: %s', 'counsel'), get_search_query()); ?></h1>
                <?php else : ?>
                    <h1><?php printf(__('Nothing found for: %s', 'counsel'), single_term_title('', false)); ?></h1>
                <?php endif; ?>
            </div>
        </div><!-- Archive Meta Container ends -->
        
        <div class="archive-loop-container archive-empty">
            <div class="archive-excerpt">
                <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'counsel'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
<?php }



/**
 * Decides and returns the accurate 'text' to be displayed.
 * 
 * @return string
 * @since 1.0
 */
function counsel_date_text() {
    if (is_date()):
        if (is_day()):
            $date_text = __('Day', 'counsel');
        elseif (is_month()):
            $date_text = __('Month', 'counsel');
        elseif (is_year()):
            $date_text = __('Year', 'counsel');
        else:
            $date_text = __('Period', 'counsel');
        endif;

        return $date_text;

    endif;
}



/**
 * Displays the navigation links for the archive pages. Is only
 * applicable if the total number of pages is more than 'one'.
 * 
 * @since 1.0
 */
function counsel_archive_nav() {
    
    global $wp_query;

    if ($wp_query->max_num_pages > 1): ?>
        
        <div class="archive-nav grid-col-16">
            <div class="nav-next"><?php previous_posts_link('<span class="meta-nav">&larr;</span> ' . __('Newer posts', 'counsel')); ?></div>
            <div class="nav-previous"><?php next_posts_link(__('Older posts', 'counsel') . ' <span class="meta-nav">&rarr;</span>'); ?></div>
        </div>
        
<?php endif;
}



/**
 * Displays the navigation links for the posts and pages.
 * 
 * @since 1.0
 */
function counsel_post_nav() {
?>
    <div class="post-nav">
        <div class="nav-previous"><?php previous_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Previous post link', 'counsel' ) . '</span>' ) ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Next post link', 'counsel' ) . '</span> %title' ) ?></div>
    </div>
<?php
}



/**
 * Display site title/description or logo
 * 
 * @since 1.0
 */
function counsel_logo() {
    
    
    $logo_img = counsel_get_option('logo_img');
    
        if( empty($logo_img)): ?>
        
        <div id="site-title" class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name', 'display' )) ?></a>
            </div>
            <?php if(!counsel_get_option('disable_site_desc')): ?>
                <div id="site-description" class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ) ?></div>
            <?php endif; ?>
        <?php else: ?>
        
            <div id="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ?>" rel="home"><img src="<?php echo esc_url( counsel_get_option('logo_img') ) ?>"/></a>
            </div>

        <?php endif;
}



/**
 * Template for comments and pingbacks.
 * 
 * @since 1.0
 */
function counsel_comment_callback( $comment, $args, $depth ) {

  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ):

         case '' :
		 // Proceed with normal comments.
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <?php if ($comment->comment_approved == '0') : ?><div class="comment-awaiting"><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'counsel'); ?></em></div><?php endif; ?>
        <?php $counsel_get_comment_ID = get_comment_ID() ?>
        <?php $counsel_is_comment_reply = get_comment($counsel_get_comment_ID)->comment_parent ?>
        <?php $counsel_the_comment_author = get_comment_author(get_comment($counsel_get_comment_ID)->comment_parent) ?>
        <?php if($counsel_is_comment_reply != 0 ) printf('<div class="comment-parent-author"><span>Replied to %s</span></div>', $counsel_the_comment_author ) ?>
      <div id="comment-<?php comment_ID(); ?>" class="comment-block-container grid-float-left grid-col-16">
          
          
                     <div class="comment-info-container grid-col-4 grid-float-left">
                          <div class="comment-author vcard">
                              <div class="comment-author-avatar-container"><?php echo get_avatar($comment, 100); ?></div>
                              <div class="comment-author-info-container">
                                  <div class="comment-author-name"><?php printf('%s <span class="says"></span>', sprintf('<cite class="fn">%s</cite>', get_comment_author_link())) ?></div>
                              </div>
                          </div><!-- .comment-author .vcard -->
                     </div>
          
                     <div class="comment-body-container grid-col-12 grid-float-left">
                        <div class="comment-body"><?php comment_text(); ?></div>
                        <div class="comment-meta commentmetadata"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s at %2$s', 'counsel'), get_comment_date(), get_comment_time()); ?></a></div>
                        <div class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
                        <?php edit_comment_link(__('(Edit)', 'counsel'), '<div class="comment-edit">', '</div>');?>
                     </div>

      </div><!-- #comment-##  -->

<?php
         break;

         case 'pingback' :
         case 'trackback' :
		 // Display trackbacks differently than normal comments.
  ?>

  <li class="post pingback">
      <p><?php _e( 'Pingback:', 'counsel' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'counsel' ), ' ' ); ?></p>

  <?php
         break;

  endswitch;
}



/**
 * Adds text to counsel_blog_template_heading_filter used on home.php
 * 
 * @return string
 * @since 1.0
 */
function counsel_blog_template_heading_text() {
    return '<h1>' . get_bloginfo('name') . ' ' . __('Blog', 'counsel') . '</h1>';
}
add_filter('counsel_blog_template_heading_filter', 'counsel_blog_template_heading_text', 10);