<main id="pageCategory">
    <?php $page_object = get_queried_object(); ?>
    <?php
        $args = array(  
            'cat'      => $page_object->term_id ,
            'post_status'    => 'publish',
            'posts_per_page' => 8, 
            'orderby'        => 'title', 
            'order'          => 'ASC', 
        );
        $loop = new WP_Query( $args );
    ?>
    <section class="section service-2">
        <div class="container">
            <div class="row">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="blog-item blog-card">
                        <a href="<?php the_permalink();?>" class="blog-thumb">
                            <?php 
                                    $image = get_post_thumbnail_id();
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image,'large', "", array( "class" => "img-fluid" ) );
                                    } 
                                ?>
                        </a>

                        <div class="blog-item-content">
                            <div class="blog-item-meta mb-lg-3 mb-2 mt-lg-4 mt-2">
                                <!-- <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5
                                        Comments</span> -->
                                <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>
                                    <?php echo get_the_date( 'D M j, Y' );?></span>
                            </div>

                            <h2 class="mt-3 mb-3"><a href="<?php the_permalink($loop->ID)?>"><?php the_title();?></a>
                            </h2>

                            <p class="mb-4 blog-description"><?php $excerpt = get_the_excerpt(); echo $excerpt; ?>
                            </p>

                        </div>
                    </div>
                </div>

                <?php endwhile;
                    wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
</main>