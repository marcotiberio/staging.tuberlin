<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="S;" value="<?php echo get_search_query(); ?>">
</form>