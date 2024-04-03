<?php
/**
 * Displays the searchform
 *
 * @package Theme Freesia
 * @subpackage Cocktail
 * @since Cocktail 1.0
 */
?>
<form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
	<?php
		$cocktail_settings = cocktail_get_theme_options();
		$cocktail_search_form = $cocktail_settings['cocktail_search_text'];?>
		<label class="screen-reader-text"><?php echo esc_html($cocktail_search_form);?></label>
		<input type="search" name="s" class="search-field" placeholder="<?php echo esc_attr($cocktail_search_form); ?>" autocomplete="off" />
		<button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form> <!-- end .search-form -->