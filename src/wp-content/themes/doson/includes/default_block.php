<?php 
/**
 * Get the default block for Customs Post Type
 */
add_filter( 'default_content', 'my_editor_content', 10, 2 );
function my_editor_content( $content, $post ) {
    switch( $post->post_type ) {
        case 'post-type-name':
            $content = '
            <!-- wp:acf/spacing/-->

            ';
        break;
        case 'services':
            $content = '
            <!-- wp:acf/spacing/-->

            ';
        break;
    }
    return $content;
}