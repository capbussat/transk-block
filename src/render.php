<!-- translation dashboard block -->
<div <?php echo get_block_wrapper_attributes(); ?>>
<?php
if ( function_exists( 'transk_get_settings' ) ) {
	$transk_post_id = get_the_ID();
	$options = transk_get_settings();
	if ( strlen( $options['title_prefix'] ) > 1 ) {
		echo esc_html( $options['title_prefix'] ) . ' ' . wp_kses( transk_title_translations_links( $transk_post_id ), 'post' );
	} else {
		echo '<span class="transk-title-icon dashicons dashicons-admin-site-alt"></span><span class="transk-title-text">' . wp_kses( transk_title_translations_links( $transk_post_id ), 'post' ) . '</span>';
	}
} else {
	echo '<span class="dashicons dashicons-admin-site-alt"></span><span title="Check if Translation Dashboard is active">Translation Dashboard block</span>';
}
?>
</div>
<!-- translation dashboard block -->
