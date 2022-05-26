<?php 
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Stop WordPress loading jQuery-migrate
 */
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate($scripts){
    if(!is_admin() && !empty($scripts->registered['jquery'])){
        $jquery_dependencies = $scripts->registered['jquery']->deps;
        $scripts->registered['jquery']->deps=array_diff($jquery_dependencies,array('jquery-migrate'));
    }
}


// add async and defer attributes to enqueued scripts
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
function add_defer_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_defer = array('main-scripts-js', '');
	
	foreach($scripts_to_defer as $defer_script) {
	   if ($defer_script === $handle) {
		  return str_replace(' src', ' defer src', $tag);
	   }
	}
	return $tag;
}

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
function add_async_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_async = array('formidable-js', '');
	
	foreach($scripts_to_async as $async_script) {
	   if ($async_script === $handle) {
		  return str_replace(' src', ' async src', $tag);
	   }
	}
	return $tag;
}

function shin_add_column( $columns ){
	$columns['shin_post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'shin_add_column', 5);

/**
 * Fills the column content
 *
 * @param string $column ID of the column
 * @param integer $id Post ID
 */
function shin_column_content( $column, $id ){
	if( $column === 'shin_post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'shin_column_content', 5, 2);

//Minify HTML When site release open this
// function sanitize_output($buffer) {

//     $search = array(
//         '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
//         '/[^\S ]+\</s',     // strip whitespaces before tags, except space
//         '/(\s)+/s',         // shorten multiple whitespace sequences
//         '/<!--(.|\s)*?-->/' // Remove HTML comments
//     );

//     $replace = array(
//         '>',
//         '<',
//         '\\1',
//         ''
//     );

//     $buffer = preg_replace($search, $replace, $buffer);

//     return $buffer;
// }

// ob_start("sanitize_output");