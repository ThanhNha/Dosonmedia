<main id="single-post">
    <div class="row">
        <div class="container-fluid">
            <div class="single-img">
                <?php 
                $image = get_post_thumbnail_id();
                $size = 'large';
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                }
            ?>
            </div>
            <div class="container">
                <div class="wrapper-main-single">
                    <div class="title-post-detail">
                        <h1 class="h2 uppercase"><?php the_title() ;?></h1>
                        <div class="line my-4"></div>
                        <div class="post-excerpt"><?php the_excerpt() ;?></div>
                    </div>
                    <div class="prose">

                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="wrapper-post-relate my-lg-5 my-mb-4 my-2">
                    <div class="post-relate-title">
                        <h2 class="title h2 font-boild">Bài viết liên quan</h2>
                        <div class="line"></div>
                    </div>
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
            </div>

        </div>
    </div>


</main>