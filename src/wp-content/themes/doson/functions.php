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

//load more
add_action('wp_ajax_loadmore_update', 'get_update_loadmore');
add_action('wp_ajax_nopriv_loadmore_update', 'get_update_loadmore');
function get_update_loadmore()
{
    $offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 1; // get a number of the article was display from the client send up
    
    $args = array(  
        'post_status'    => 'publish',
        'orderby' => 'DESC',
        'paged' => $offset,
        'posts_per_page' => 4, 
    );
    $loop = new WP_Query( $args );
    ?>
<?php $count= 0;?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php $count++;?>
<div class="wrapper-news animation-item <?php if($count % 2 > 0){echo '';}else{echo 'reverse';}?>">
    <div class="line"></div>
    <div class="card-news-horizontal animation-item ">
        <div class="row">
            <div class="col-5 col-md-5 col-12">
                <div class="news-image">
                    <a href="<?php the_permalink();?>">
                        <?php 
                            $image = get_post_thumbnail_id();
                            $size = 'large';
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                            }
                        ?>
                    </a>
                </div>
            </div>
            <div class="col-7 col-md-7 col-12 mt-md-0 mt-3">
                <div class="news-title">
                    <a href="<?php the_permalink();?>" class="p1 font-boild"><?php the_title();?></a>
                </div>
                <div class="news-description">
                    <p><?php echo get_the_excerpt($postHot->ID);?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php
die();
}