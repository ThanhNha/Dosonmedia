<section id="section-blogs" class="section-blogs">
    <div class="container">
        <div class="wrapper-title-banner">
            <div class="section-title">
                <h1 class="uppercase font-boild h2 fade-right">Tin tức</h1>
                <div class="divider mx-auto"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrapper-blogs">
            <?php
                $args = array(  
                    'post_status'    => 'publish',
                    'posts_per_page' => 8, 
                    'orderby'        => 'title', 
                    'order'          => 'ASC', 
                );
            $loop = new WP_Query( $args );?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <!-- do something -->
            <?php
             $size = 'large';
            $image = get_post_thumbnail_id();
            $title_blog = get_the_title($loop->ID);
            ?>
            <!-- Code html in here -->
            <div class="card-blog">
                <a href="<?php the_permalink($loop->ID)?>" class="blog-thumb animation__image">
                    <?php 
                    if( $image ) {
                            echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                        }
                    ?>
                </a>
                <div class="blog-title">
                    <a href="<?php the_permalink($loop->ID)?>">
                        <p><?php echo $title_blog; ?></p>
                    </a>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>