<main id="single">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-wrapper mt-2">
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<div class="breadcrumb" id="breadcrumbs">','</div>' );
                        }
                    ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-lg-5 mb-md-3 mb-2">
                            <div class="single-blog-item">
                                <?php 
                                    $image = get_post_thumbnail_id();
                                    $size = 'large';
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                                    }
                                ?>

                                <div class="blog-item-content mt-lg-5 mt-md-3 mt-2">
                                    <div class="blog-item-meta mb-lg-3 mb-2">
                                        <span class="text-color-2 text-capitalize mr-3"><i
                                                class="icofont-book-mark mr-2"></i>
                                            <?php 
                                                $category = get_the_category( $post->ID );
                                                echo $category[0]->cat_name;
                                            ?>
                                        </span>
                                        <span class="text-muted text-capitalize mr-3"><i
                                                class="icofont-comment mr-2"></i>5 Comments</span>
                                        <span class="text-black text-capitalize mr-3"><i
                                                class="icofont-calendar mr-2"></i>
                                            <?php  $post_date = get_the_date( 'D M j, Y' ); echo $post_date;?></span>
                                    </div>

                                    <h2 class="mb-4 text-md"><a><?php the_title() ;?></a></h2>

                                    <p class="lead mb-4"><?php the_excerpt()?></>

                                        <?php the_content(); ?>

                                    <blockquote class="quote">
                                        A brand for a company is like a reputation for a person. You earn reputation by
                                        trying to do hard things well.
                                    </blockquote>


                                    <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience
                                        the emotional sensation of stress from our first instances of social rejection
                                        ridicule. We quickly learn to fear and thus automatically.</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae
                                        repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis
                                        itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p>

                                    <div class="mt-lg-5 mt-md-3 mt-2 clearfix">
                                        <ul class="float-right list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a id="share-facebook"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"
                                                    target="_blank"><i class="icofont-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-twitter" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-pinterest" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                                        class="icofont-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 pt-lg-5 pt-md-3 pt-2 pt-lg-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="sidebar-widget latest-post mb-lg-3 mb-2">
                                    <h5>Popular Posts</h5>
                                    <?php
                                    $query = array(  
                                        'post_status'    => 'publish',
                                        'posts_per_page' => 3, 
                                        'orderby'        => 'date', 
                                        'order'          => 'ASC', 
                                    );
                                $results = get_posts($query);
                                
                                if( $results) : ?>
                                    <?php foreach( $results as $result) : ?>
                                    <?php
                                        $result_title = get_the_title($result->ID);
                                        $result_date = get_the_date( 'D M j,Y', $result->ID )
                                    ?>
                                    <div class="py-2">
                                        <span class="text-sm text-muted"><?php echo $result_date ;?></span>
                                        <h6 class="my-2"><a
                                                href="<?php echo get_permalink($result->ID)?>"><?php echo $result_title;?></a>
                                        </h6>
                                    </div>

                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="sidebar-widget category mb-lg-3 mb-2">
                                    <h5 class="mb-4">Categories</h5>
                                    <ul class="list-unstyled">
                                        <?php
                                        $categories = get_categories();
                                        $name__category = ''; 
                                        foreach($categories as $category) {
                                            $name__category = $category->name; 
                                        ?>
                                        <li class="align-items-center">
                                            <a
                                                href="<?php echo get_category_link($category->term_id) ;?>"><?php echo $category->name ;?></a>
                                            <span>( <?php echo count_cat_post( $name__category);?> )</span>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags mb-lg-3 mb-2">
                            <h5 class="mb-4">Tags</h5>
                            <?php $tags = get_the_tags(); 
                            if( $tags ) foreach( $tags as $tag ) { ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                            <?php break; } ?>
                        </div>
                        <div class="sidebar-widget schedule-widget mb-lg-3 mb-2">
                            <h5 class="mb-4">Time Schedule</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Monday - Friday</span>
                                    <span>9:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Saturday</span>
                                    <span>9:00 - 16:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Urgent Help?</p>
                                <a class="h3" href="tel: 0966514360 "> 0966514360</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="blog-detail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-title">
                            <h2>Bài viết liên quan</h2>
                            <div class="divider my-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-12 blog-wrapper-3">
                        <?php
                        $args = array(  
                            // 'post_type'      => 'artist',
                            'post_status'    => 'publish',
                            'posts_per_page' => 8, 
                            'orderby'        => 'title', 
                            'order'          => 'ASC', 
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="blog-item">
                            <a href="<?php the_permalink();?>" class="blog-thumb">
                                <?php 
                                    $image = get_post_thumbnail_id();
                                    $size = 'large';
                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                                    }
                                ?>
                            </a>

                            <div class="blog-item-content">
                                <div class="blog-item-meta mb-lg-3 mb-2 mt-4">
                                    <span class="text-color-2 text-capitalize mr-3"><i
                                            class="icofont-book-mark mr-2"></i><?php $cate = get_the_category($loop->ID); echo $cate[0]->cat_name;?>
                                    </span>
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>
                                        <?php echo get_the_date( 'D M j, Y' );?></span>
                                </div>

                                <h2 class="mt-3 mb-lg-3 mb-2 blog-title"><a
                                        href="<?php the_permalink();?>"><?php the_title();?></a>
                                </h2>

                                <p class="mb-4 blog-description"><?php echo get_the_excerpt($loop->ID);?> </p>

                            </div>
                        </div>


                        <?php endwhile;
                        wp_reset_postdata(); ?>


                    </div>
                </div>
            </div>

        </section>
    </div>
</main>