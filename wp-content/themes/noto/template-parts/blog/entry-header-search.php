<?php
/**
 * The template part used for displaying the entry header for search results pages.
 *
 * This template part can be overridden by copying it to a child theme or in the same theme
 * by putting it in the root `/template-parts/entry-header-search.php` or in `/template-parts/blog/entry-header-search.php`.
 *
 * @see pixelgrade_locate_component_template_part()
 *
 * HOWEVER, on occasion Pixelgrade will need to update template files and you
 * will need to copy the new files to your child theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://pixelgrade.com
 * @author     Pixelgrade
 * @package    Components/Blog
 * @version    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="c-noto__item  entry-header">
	<h2 class="entry-title  u-page-title-color  h2">
		<?php /* translators: %s: search query */
        printf( '<span class="archive-title__pre-title">' . esc_html__( 'Search Results for: %s', 'noto' ), '</span><span>' . get_search_query() . '</span>' ); ?>
	</h2>
</div>
