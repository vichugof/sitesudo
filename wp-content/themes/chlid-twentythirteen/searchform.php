<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php _x( 'Search for:', 'label' ); ?></span>
        <input type="search" class="search-field form-control" placeholder="<?php esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php get_search_query() ?>" name="s" title="<?php  _x( 'Search for:', 'label' ); ?>" />
    </label>
    <input type="submit" class="search-submit" value="<?php esc_attr_x( 'Search', 'submit button' ); ?>" />
</form>