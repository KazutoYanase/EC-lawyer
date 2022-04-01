<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="検索ワード..." value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<button type="submit" id="searchsubmit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>