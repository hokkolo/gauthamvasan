<?php
/**
 * Theme Customizer Options
 *
 * @since 1.0.0
 */

require_once 'customizer_constants.php';
require_once 'customizer_extended.php';

/**
 * Contains options array for theme customizer
 * 
 * @param string $type
 * @return array
 */
function counsel_customizer_options($type){
    
    $options = array();
    $sections = array();
    $panels = array();
    $num_by_hundred = array('100'=>'100', '200'=>'200', '300'=>'300', '400'=>'400', '500'=>'500', '600'=>'600', '700'=>'700', '800'=>'800', '900'=>'900', '1000'=>'1000', '1100'=>'1100', '1200'=>'1200', '1300'=>'1300', '1400'=>'1400', '1500'=>'1500', '1600'=>'1600', '1700'=>'1700', '1800'=>'1800', '1900'=>'1900', '2000'=>'2000', '2100'=>'2100', '2200'=>'2200', '2300'=>'2300', '2400'=>'2400', '2500'=>'2500', '2600'=>'2600', '2700'=>'2700', '2800'=>'2800', '2900'=>'2900', '3000'=>'3000', '3100'=>'3100', '3200'=>'3200', '3300'=>'3300', '3400'=>'3400', '3500'=>'3500', '3600'=>'3600', '3700'=>'3700', '3800'=>'3800', '3900'=>'3900', '4000'=>'4000', '4100'=>'4100', '4200'=>'4200', '4300'=>'4300', '4400'=>'4400', '4500'=>'4500', '4600'=>'4600', '4700'=>'4700', '4800'=>'4800', '4900'=>'4900', '5000'=>'5000', '5100'=>'5100', '5200'=>'5200', '5300'=>'5300', '5400'=>'5400', '5500'=>'5500', '5600'=>'5600', '5700'=>'5700', '5800'=>'5800', '5900'=>'5900', '6000'=>'6000', '6100'=>'6100', '6200'=>'6200', '6300'=>'6300', '6400'=>'6400', '6500'=>'6500', '6600'=>'6600', '6700'=>'6700', '6800'=>'6800', '6900'=>'6900', '7000'=>'7000', '7100'=>'7100', '7200'=>'7200', '7300'=>'7300', '7400'=>'7400', '7500'=>'7500', '7600'=>'7600', '7700'=>'7700', '7800'=>'7800', '7900'=>'7900', '8000'=>'8000', '8100'=>'8100', '8200'=>'8200', '8300'=>'8300', '8400'=>'8400', '8500'=>'8500', '8600'=>'8600', '8700'=>'8700', '8800'=>'8800', '8900'=>'8900', '9000'=>'9000', '9100'=>'9100', '9200'=>'9200', '9300'=>'9300', '9400'=>'9400', '9500'=>'9500', '9600'=>'9600', '9700'=>'9700', '9800'=>'9800', '9900'=>'9900', '10000'=>'10000');
    
    $panels[] = array(
        'id' => 'counsel_panel_general',
        'title' => __('General','counsel'),
        'description' => '',
        'priority' => 20,
    );

    $panels[] = array(
        'id' => 'counsel_panel_header',
        'title' => __('Header','counsel'),
        'description' => '',
        'priority' => 40,
    );

    $sections[] = array(
        'id' => 'counsel_section_header_logo',
        'title' => __('Site Logo','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_header',
        'priority' => 100,
        'shortname' => 'section_header_logo',
    );

    $options[] = array(
        'id' => 'logo_img',
        'default' => false,
        'label' => __('Site Logo','counsel'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_header_logo',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'counsel_panel_slideshow',
        'title' => __('Slideshow','counsel'),
        'description' => '',
        'priority' => 60,
    );

    $sections[] = array(
        'id' => 'counsel_section_slideshow_1',
        'title' => __('Slide #1','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_slideshow',
        'priority' => 100,
        'shortname' => 'section_slideshow_1',
    );

    $options[] = array(
        'id' => 'featured_slide_img_1',
        'default' => COUNSEL_GLOBAL_IMAGES_URL . 'forest.jpg',
        'label' => __('Slideshow Image #1','counsel'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_1',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_head_1',
        'default' => __('Elegant and Stylish Theme', 'counsel'),
        'label' => __('Slideshow Heading #1', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_1',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_text_1',
        'default' => __('Beautiful and Attractive Layout with Theme Options to configure settings easily.', 'counsel'),
        'label' => __('Slideshow Text #1', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_1',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_button_1',
        'default' => __('Get Premium', 'counsel'),
        'label' => __('Slideshow Button #1', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_1',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_button_url_1',
        'default' => COUNSEL_UPGRADE_URL,
        'label' => __('Slideshow Button #1 (URL)', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_slideshow_1',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_slideshow_2',
        'title' => __('Slide #2','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_slideshow',
        'priority' => 120,
        'shortname' => 'section_slideshow_2',
    );

    $options[] = array(
        'id' => 'featured_slide_img_2',
        'default' => false,
        'label' => __('Slideshow Image #2','counsel'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_2',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_head_2',
        'default' => '',
        'label' => __('Slideshow Heading #2', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_2',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_text_2',
        'default' => '',
        'label' => __('Slideshow Text #2', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_2',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_button_2',
        'default' => '',
        'label' => __('Slideshow Button #2', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_2',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_button_url_2',
        'default' => '',
        'label' => __('Slideshow Button #2 (URL)', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_slideshow_2',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_slideshow_3',
        'title' => __('Slide #3','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_slideshow',
        'priority' => 140,
        'shortname' => 'section_slideshow_3',
    );

    $options[] = array(
        'id' => 'featured_slide_img_3',
        'default' => false,
        'label' => __('Slideshow Image #3','counsel'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_3',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_head_3',
        'default' => '',
        'label' => __('Slideshow Heading #3', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_3',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_text_3',
        'default' => '',
        'label' => __('Slideshow Text #3', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_3',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_button_3',
        'default' => '',
        'label' => __('Slideshow Button #3', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_slideshow_3',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_button_url_3',
        'default' => '',
        'label' => __('Slideshow Button #3 (URL)', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_slideshow_3',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_slideshow_settings',
        'title' => __('Settings','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_slideshow',
        'priority' => 140,
        'shortname' => 'section_slideshow_settings',
    );

    $options[] = array(
        'id' => 'slide_speed',
        'default' => '5000',
        'label' => __('Slideshow Speed','counsel'),
        'description' => '',
        'type' => 'select',
        'choices' => $num_by_hundred,
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'slide_ani_speed',
        'default' => '700',
        'label' => __('Slideshow Animation Speed','counsel'),
        'description' => '',
        'type' => 'select',
        'choices' => $num_by_hundred,
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'disable_slide_nav',
        'default' => false,
        'label' => __('Hide Navigation','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_smooth_height',
        'default' => true,
        'label' => __('Smooth Height','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_animation_type',
        'default' => 'fade',
        'label' => __('Animation Type','counsel'),
        'description' => '',
        'type' => 'select',
        'choices' => array('fade' => 'fade', 'slide' => 'slide'),
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'slide_dir',
        'default' => 'horizontal',
        'label' => __('Slideshow Direction','counsel'),
        'description' => '',
        'type' => 'select',
        'choices' => array('horizontal' => 'horizontal', 'vertical' => 'vertical'),
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $panels[] = array(
        'id' => 'counsel_panel_layout',
        'title' => __('Layout','counsel'),
        'description' => '',
        'priority' => 80,
    );

    $sections[] = array(
        'id' => 'counsel_section_layout_global',
        'title' => __('Global','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_layout',
        'priority' => 100,
        'shortname' => 'section_layout_global',
    );
    
    $options[] = array(
        'id' => 'layout',
        'default' => 'boxed',
        'label' => __('Select Layout','counsel'),
        'description' => '',
        'type' => 'select',
        'choices' => array(
            'wide' => __('Full Screen', 'counsel'),
            'boxed' => __('Boxed Mode', 'counsel'),
        ),
        'sanitize_type' => 'select',
        'section' => 'section_layout_global',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'counsel_section_layout_header',
        'title' => __('Header','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_layout',
        'priority' => 110,
        'shortname' => 'section_layout_header',
    );

    $options[] = array(
        'id' => 'disable_header',
        'default' => false,
        'label' => __('Hide Header','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_header',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'disable_site_desc',
        'default' => false,
        'label' => __('Hide Site Description','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_header',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_layout_footer',
        'title' => __('Footer','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_layout',
        'priority' => 120,
        'shortname' => 'section_layout_footer',
    );

    $options[] = array(
        'id' => 'footer_name',
        'default' => '',
        'label' => __('Company Name', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_layout_footer',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_footer',
        'default' => false,
        'label' => __('Hide Footer','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_footer',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'show_copyright',
        'default' => true,
        'label' => __('Show Copyright','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_footer',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_layout_menu',
        'title' => __('Menu','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_layout',
        'priority' => 130,
        'shortname' => 'section_layout_menu',
    );

    $options[] = array(
        'id' => 'disable_menu',
        'default' => false,
        'label' => __('Hide Menu','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_menu',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_layout_slideshow',
        'title' => __('Slideshow','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_layout',
        'priority' => 140,
        'shortname' => 'section_layout_slideshow',
    );

    $options[] = array(
        'id' => 'disable_featured_section',
        'default' => false,
        'label' => __('Hide Featured Section','counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_slideshow',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_layout_social',
        'title' => __('Social','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_layout',
        'priority' => 150,
        'shortname' => 'section_layout_social',
    );

    $options[] = array(
        'id' => 'disable_social_section',
        'default' => true,
        'label' => __('Disable Social Section', 'counsel'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_social',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'counsel_panel_colors',
        'title' => __('Colors','counsel'),
        'description' => '',
        'priority' => 100,
    );

    $sections[] = array(
        'id' => 'counsel_section_colors_global',
        'title' => __('Global','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_colors',
        'priority' => 100,
        'shortname' => 'section_colors_global',
    );

    $sections[] = array(
        'id' => 'counsel_section_colors_skin',
        'title' => __('Skins','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_colors',
        'priority' => 110,
        'shortname' => 'section_colors_skin',
    );

    $options[] = array(
        'id' => 'skin',
        'default' => 'cadet_blue',
        'label' => __('Select Skin','counsel'),
        'description' => '',
        'type' => 'select',
        'choices' => array(
            'white' => __('Classic White', 'counsel'),
            'cadet_blue' => __('Cadet Blue', 'counsel'),
            'feather_blue' => __('Feather Blue', 'counsel'),
        ),
        'sanitize_type' => 'select',
        'section' => 'section_colors_skin',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'counsel_section_colors_custom_css',
        'title' => __('Custom CSS','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_colors',
        'priority' => 120,
        'shortname' => 'section_colors_custom_css',
    );

    $options[] = array(
        'id' => 'custom_css',
        'default' => '',
        'label' => __('Custom CSS', 'counsel'),
        'description' => '',
        'type' => 'textarea',
        'sanitize_type' => 'nohtml',
        'section' => 'section_colors_custom_css',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'counsel_panel_social',
        'title' => __('Social','counsel'),
        'description' => '',
        'priority' => 120,
    );

    $sections[] = array(
        'id' => 'counsel_section_social_profiles',
        'title' => __('Social Profiles','counsel'),
        'description' => '',
        'panel' => 'counsel_panel_social',
        'priority' => 100,
        'shortname' => 'section_social_profiles',
    );

    $options[] = array(
        'id' => 'telephone_text',
        'default' => 'Contact us 99999-9999',
        'label' => __('Telephone Number', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'html',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'facebook',
        'default' => '',
        'label' => __('Facebook', 'counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'twitter',
        'default' => '',
        'label' => __('Twitter','counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'linkedin',
        'default' => '',
        'label' => __('Linkedin','counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'youtube',
        'default' => '',
        'label' => __('YouTube','counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'rss',
        'default' => '',
        'label' => __('RSS','counsel'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'counsel_section_about',
        'title' => __('About Counsel Theme','counsel'),
        'description' => '',
        'panel' => '',
        'priority' => 120,
        'shortname' => 'section_about',
    );

    $options[] = array(
        'id' => 'important_links',
        'default' => '',
        'label' => __('','counsel'),
        'description' => '',
        'type' => 'important_links',
        'sanitize_type' => 'none',
        'section' => 'section_about',
        'extended_class' => 'Counsel_Customize_Important_Links_Control',
        'transport' => 'refresh'
    );


    switch($type):
        case 'panels':
            return $panels;
        case 'sections':
            return $sections;
        case 'options':
            return $options;
        default:
            return;
    endswitch;
}

/**
 * Build Theme Customizer Options
 * 
 * @param type $wp_customize
 */
function counsel_customizer_setup($wp_customize) {
    
    /**
     * Exit if $wp_customize does not exist.
     */
    if( !isset($wp_customize)) {
        return;
    }
    
    $panels = counsel_customizer_options('panels');
    $sections = counsel_customizer_options('sections');
    $options = counsel_customizer_options('options');
    
    foreach($panels as $panel) {
        $wp_customize->add_panel($panel['id'], array(
            'title' => $panel['title'],
            'description' => $panel['description'],
            'theme_supports' => '',
            'capability' => 'edit_theme_options',
            'priority' => $panel['priority'],
        ));
    }
    
    foreach($sections as $section) {
        $wp_customize->add_section($section['id'], array(
            'title' => $section['title'],
            'description' => $section['description'],
            'panel' => $section['panel'],
            'priority' => $section['priority'],
        ));
    }
    
    foreach($options as $option) {
        $wp_customize->add_setting('counsel_theme_lite['.$option['id'].']', array(
            'type' => 'option',
            'default' => $option['default'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => counsel_get_sanitize_filter($option['sanitize_type']),
            'transport' => $option['transport'],
        ));

        if (!$option['extended_class']) {
            $wp_customize->add_control('counsel_theme_lite[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'type' => $option['type'],
                'section' => counsel_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => array_key_exists('choices', $option) ? $option['choices'] : false,
            ));
        } else {
            $wp_customize->add_control(new $option['extended_class'](
                $wp_customize, 'counsel_theme_lite[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'section' => counsel_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => array_key_exists('choices', $option) ? $option['choices'] : false,
                )
            ));
        }
    }
	
    // WP Defaults
    $wp_customize->get_section('title_tagline')->panel = 'counsel_panel_general';
    $wp_customize->get_section('static_front_page')->panel = 'counsel_panel_general';
    $wp_customize->get_control('background_color')->section = 'counsel_section_colors_global';
    $wp_customize->get_control('background_image')->section = 'counsel_section_colors_global';
    $wp_customize->remove_section('background_image');
}
add_action( 'customize_register', 'counsel_customizer_setup' );



/**
 * Enqueue Customizer Live Preview Scripts
 * 
 * @todo complete this
 */
function counsel_live_preview_scripts(){
    wp_enqueue_script('counsel-themecustomizer-live-preview', COUNSEL_ADMIN_JS_URL . 'customizer.js', array('jquery', 'customize-preview'),'', true);
}
add_action('customize_preview_init','counsel_live_preview_scripts');



/**
 * Enqueue admin panel CSS - (Primarily for customizer)
 *
 * @since 1.0
 */
function counsel_admin_panel_style() {
    wp_enqueue_style('counsel-admin-panel-css', COUNSEL_ADMIN_CSS_URL . 'admin.css');
    wp_enqueue_script('counsel-admin-panel-js', COUNSEL_ADMIN_JS_URL . 'admin.js', array('jquery'), '1.0.0', TRUE);
}
add_action( 'admin_enqueue_scripts', 'counsel_admin_panel_style' );



/**
 * Gets the value of an option.
 * Also sets caching for default options.
 * 
 * @global array $counsel_options Options cache.
 * @param string $id Option ID
 * @return string Option Value
 */
function counsel_get_option($id = NULL) {
    global $counsel_options;
    
    // Global array exists. Get value from memory
    if($counsel_options && array_key_exists($id, $counsel_options)) {
        return $counsel_options[$id];
    } else {
        
        // No value in Memory. Try fetching from DB
        $saved_options = get_option('counsel_theme_lite');
        
        if($saved_options && array_key_exists($id, $saved_options)){
            
            $counsel_options = $saved_options;
            return $counsel_options[$id];
            
        } else {
            
            // No value in Memory or DB. Get it from default options.
            $sane_options = counsel_customizer_options('options');
            $counsel_options = array();
            
            foreach($sane_options as $options) {
                if($id == $options['id'] ){
                    $counsel_options[$options['id']] = $options['default'];
                    break;
                }                
            }

            return $counsel_options[$id];

        }
    }
}


/**
 * Returns sanitization filter functions
 * 
 * @param string $type The type of input to be sanitized
 * @return string Sanitization function name
 */
function counsel_get_sanitize_filter($type){
    $filters = array(
        'html' => 'counsel_sanitize_html',
        'nohtml' => 'counsel_sanitize_nohtml', // Only Text
        'url' => 'counsel_sanitize_url',
        'checkbox' => 'counsel_sanitize_checkbox',
        'select' => 'counsel_sanitize_select',
        'color' => 'counsel_sanitize_hex_color',
        'media_upload' => 'counsel_sanitize_media_upload',
        'none' => 'counsel_sanitize_none'
    );

    return $filters[$type];
}


/**
 * Returns the section based on shortname
 * 
 * @param string $shortname
 * @return string
 */
function counsel_get_sections($shortname) {
    $sections = counsel_customizer_options('sections');
    foreach ($sections as $section) {
        if($section['shortname'] == $shortname){
            return $section['id'];
        }
    }
}


/**
 * Sanitization Function for No HTML content (only text)
 *
 * @param string $nohtml
 * @return string
 */
function counsel_sanitize_nohtml($nohtml) {
    return wp_filter_nohtml_kses( $nohtml );
}


/**
 * Sanitization Function for only HTML content
 *
 * @param string $html
 * @return string
 */
function counsel_sanitize_html($html) {
    return wp_filter_post_kses( $html );
}


/**
 * Sanitization Function for URL
 * 
 * @param string $url
 * @return string
 */
function counsel_sanitize_url($url){
    return esc_url_raw($url);
}


/**
 * Sanitization Function for Checkbox
 * 
 * @param boolean $checked
 * @return boolean
 */
function counsel_sanitize_checkbox($checked){
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


/**
 * Sanitization Function for Select
 * 
 * @param string $input
 * @param WP_Customize_Setting $input
 * @return string
 */
function counsel_sanitize_select($input, $setting){
    
    // Sanitizes input
    $input = sanitize_key( $input );
    
    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;
    
    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    
}
/**
 * Sanitization Function for Hex Colors
 * 
 * @param string HEX color to sanitize
 * @param WP_Customize_Setting Setting instance
 */
function counsel_sanitize_hex_color($hex_color, $setting){
    // Sanitize $input as a hex value without the hash prefix.
    $hex_color = sanitize_hex_color($hex_color);

    // If $input is a valid hex value, return it; otherwise, return the default.
    return ( ( $hex_color ) ? $hex_color : $setting->default );
}

/**
 * Sanitization Function for Image Upload via Media Manager
 * 
 * @param string Image filename
 * @param WP_Customize_Setting Setting instance
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function counsel_sanitize_media_upload( $image, $setting ) {

    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );

    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}


/**
 * Sanitizes nothing (Used for Theme Upgrade Text)
 */
function counsel_sanitize_none(){
    return;
}