<?php
/**
 * Contains Customizer Extended Controls
 *
 * @since 1.0
 */
 

if (class_exists('WP_Customize_Control')):

    /**
     * Counsel Customize Important Links Control
     *
     * Controls Important Links for the Theme
     */
    class Counsel_Customize_Important_Links_Control extends WP_Customize_Control {

        public function render_content() {
            echo '<p><a href="' . COUNSEL_DOCS_URL . '" target="_blank">' . __('Theme Documentation', 'counsel') . '</a></p>';
            echo '<p><a href="' . COUNSEL_CONTACT_URL . '" target="_blank">' . __('Contact us', 'counsel') . '</a></p>';
        }

    }

endif;