<?php
/**
 * Template for displaying the standard search forms
 *
 * @package Moka
 * @since Moka 1.0
 */
?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="text" class="field" name="s" id="s" placeholder="<?php echo esc_attr_x( 'Type to Search &hellip;', 'placeholder', 'moka' ); ?>" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'moka' ); ?>" />
</form>