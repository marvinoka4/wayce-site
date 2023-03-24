<?php
/**
 * The template for displaying search form
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
            <input type="search" class="search-field form-control"
                   placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                   value="<?php echo get_search_query() ?>" name="s"
                   title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
</form>
