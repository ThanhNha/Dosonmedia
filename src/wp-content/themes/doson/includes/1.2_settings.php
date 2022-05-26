<?php 
/**
 * Allow upload svg
 */
add_filter('upload_mimes', 'add_file_types_to_uploads');
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}


/**
 * Disable Autosave 
 */
add_action( 'admin_init', 'disable_autosave' );
function disable_autosave() {
    wp_deregister_script( 'autosave' );
}


/**
 * Adjustment the navigation
 */
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }    
    return $classes;
}


/*
 *  Add page slug to body class
 */
add_filter('body_class', 'shin_add_slug_to_body_class');
function shin_add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}


/*
 * Check the mobile device
if(isMobileDevice()):
    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
else :
    $size = 'large'; // (thumbnail, medium, large, full or custom size)
endif;
 */
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/**
 * Function Reading Time The  5 minute 
 */
function wp_reading_time() {
    // GET THE CONTENT OF THE WORDPRESS POST
    global $post;
    $content = get_post_field( 'post_content', $post->ID );
     
    // COUNT THE NUMBER OF WORDS
    $word_count = str_word_count( strip_tags( $content ) );
     
    // COUNT THE NUMBER OF IMAGES
    $image_count = substr_count( $content, '<img' );
     
    // READING TIME OF TEXTS - 200 WORDS PER MINUTE
    $reading_time = $word_count / 200;
     
    // READING TIME OF IMAGES - 10 SECONDS PER IMAGE
    $image_time = ( $image_count * 10 ) / 60;
     
    // ADD READING TIME OF TEXTS AND IMAGES
    $total_time = round( $reading_time + $image_time );
     
    // DETERMINE IF SINGULAR OR PLURAL
    if ( $total_time == 1 ) { $minute = " min"; }
    else { $minute = " minute"; }
     
    return $total_time . $minute;    
}