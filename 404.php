<?php
/**
 * The template for displaying 404 error pages.
 *
 * @package Moka
 * @since Moka 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content" role="main">

			<article id="post-0" class="page no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'moka' ); ?></h1>
				</header><!--end .entry-header -->

				<div class="entry-content clearfix">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try another search term?', 'moka' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- end .entry-content -->
			</article><!-- end #post-0 -->

		</div><!-- end #primary -->

<?php get_footer(); ?>