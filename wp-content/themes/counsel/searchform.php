<?php
/*
 * Template for displaying Search Form.
 * 
 * @package Counsel
 */
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="search-box clearfix">
        <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search...', 'counsel') ?>" />
        <input type="submit" id="searchsubmit" value="<?php esc_attr_e('Go', 'counsel') ?>" />
    </div>
</form>