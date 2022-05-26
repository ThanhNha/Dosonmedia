<?php 
/**
 * Registers an editor stylesheet for the theme.
 */
add_action( 'admin_init', 'register_editor_stylesheet' );
function register_editor_stylesheet() {
    add_editor_style( 'assets/main/main.css' );
}


/*
 *  Removing Items From the Admin Bar
 */
add_action('wp_before_admin_bar_render', 'shin_wp_admin_bar_remove', 0);
function shin_wp_admin_bar_remove() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('updates');
    $wp_admin_bar->remove_menu('comments');
    
	// $wp_admin_bar->remove_menu('customize');
	// $wp_admin_bar->remove_menu('customize-background');
	// $wp_admin_bar->remove_menu('customize-header');
}


/*
 * Change Footer Text in Admin
 */
add_filter('admin_footer_text', 'shin_change_footer_text');
function shin_change_footer_text() {
    echo "Core developed by <a href='https://www.facebook.com/nhathanh024/' target='_blank'>shin</a>";
}


/*
 *  Change login logo & url in WP Admin
 */
add_action('login_head', 'shin_custom_login_logo');
function shin_custom_login_logo() {
    echo "<style type='text/css'>
        body.login {}

        .login h1 a {
            background-image: url('" . THEME_URL . "/images/login-logo.png');
            background-size: 280px 78px;
            width: 280px;
            height: 78px;
        }
        .login form {}
        .login label {}
        #backtoblog, #nav {}

    </style>";
}


/*
 * Add theme Support
 */
if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // add_theme_support('wp-block-styles');
    add_theme_support('align-wide');

    add_theme_support( 'editor-styles');
    add_editor_style( 'editor-styles.css' );
}


/*
 *  Localisation Support
 */
load_theme_textdomain('shin', THEME_DIR . '/');