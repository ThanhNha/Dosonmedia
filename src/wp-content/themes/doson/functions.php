<?php
/*
 * Define Variables
 */
if (!defined('THEME_DIR'))
    define('THEME_DIR', get_template_directory());
if (!defined('THEME_URL'))
    define('THEME_URL', get_template_directory_uri());


/*
 * Include framework files
 */
foreach (glob(THEME_DIR . "/includes/*.php") as $file_name) {
    require_once ( $file_name );
}
// function add new by shin
function count_cat_post($category) {
    if(is_string($category)) {
        $catID = get_cat_ID($category);
    }
    elseif(is_numeric($category)) {
        $catID = $category;
    } else {
        return 0;
    }
    $cat = get_category($catID);
    return $cat->count;
    }

    