<?php
/*
 * Plugin Name: Easy Digital Downloads - Show Featured Image With Purchase Link
 * Description: Shows a download's featured image with the purchase link
 * Author: Andrew Munro, Sumobi
 * Author URI: http://sumobi.com/
 * Version: 1.0
 */

function sumobi_edd_purchase_link_show_featured_image( $download_id ) {
	echo get_the_post_thumbnail( $download_id, 'thumbnail' );
}
add_action( 'edd_purchase_link_top', 'sumobi_edd_purchase_link_show_featured_image' );