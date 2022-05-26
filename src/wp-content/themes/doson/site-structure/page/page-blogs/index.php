<main id="page-news">

    <section id="section-banner-news" class="section-banner-news">
        <div class="banner-img">
            <?php 
           $image_banner = get_field('page_news_image_animation');
           $size = 'large';
           if($image_banner){
            echo wp_get_attachment_image( $image_banner, $size, "", array( "class" => "img-banner" ) );
           }
           ?>
        </div>
        <div class="banner-news">
            <video id="video" autoplay muted playsinline loop>
                <source src="<?php the_field('page_news_video_banner');?>" type="video/mp4" />
            </video>
        </div>


    </section>
    <section id="section-main-news" class="section-main-news">
        <div class="container">
            <div class="wrapper-title ">
                <div class="section-title justify-content-start">
                    <div class="title">
                        <h1 class="uppercase font-boild h2">Tin</h1>
                        <div class="divider "></div>
                    </div>
                    <span class="h2 font-boild uppercase">Nổi bật</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <?php 
                            $ar = array(  
                                'post_status'    => 'publish',
                                'posts_per_page' => 1, 
                                'orderby'        => 'date', 
                                'order'          => 'DESC', 
                            );
                        $postHots = get_posts( $ar);
                            if( $postHots) : ?>
                    <?php foreach( $postHots as $postHot) : ?>
                    <div class="card-news-hot">
                        <div class="news-image">
                            <a href="<?php echo get_the_permalink($postHot->ID);?>">
                                <?php 
                                            $image = get_post_thumbnail_id($postHot->ID);
                                            $size = 'large';
                                            if( $image ) {
                                                echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                                            }
                                        ?>
                            </a>
                        </div>
                        <div class="news-title">
                            <a href="<?php echo get_the_permalink($postHot->ID);?>"
                                class="p1 font-boild"><?php echo get_the_title($postHot->ID); ?></a>
                        </div>
                        <div class="news-description">
                            <p><?php echo get_the_excerpt($postHot->ID);?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="wrapper-card-news">
                        <div class="row">
                            <div class="col-lg-12 col-6">
                                <div class="card-news">
                                    <div class="news-image">
                                        <a href="#"> <img src="./assets/image/news/news-2.jpg" alt=""></a>
                                    </div>
                                    <div class="news-title">
                                        <a href="#" class="sub-heading font-boild">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Repellat,
                                            ipsam?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6">
                                <div class="card-news">
                                    <div class="news-image">
                                        <a href="#"> <img src="./assets/image/news/news-1.jpg" alt=""></a>
                                    </div>
                                    <div class="news-title">
                                        <a href="#" class="sub-heading font-boild">Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Repellat,
                                            ipsam?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper-news-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Begin category 1 -->
                    <div class="wrapper-title">
                        <div class="section-title justify-content-start">
                            <div class="title pt-lg-2 pt-0">
                                <h1 class="font-boild h3">Tin chính</h1>
                                <div class="divider "></div>
                            </div>
                        </div>
                    </div>
                    <section id="section-news animation-wrapper" class="section-news">
                        <?php
                        $args = array(  
                            'post_status'    => 'publish',
                            'posts_per_page' => 8, 
                            'orderby'        => 'title', 
                            'order'          => 'ASC', 
                        );
                        $loop = new WP_Query( $args );
                        ?>
                        <?php $count= 0;?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php $count++;
                            echo $count;
                        ?>
                        <div
                            class="wrapper-news animation-item <?php if($count % 2 > 0){echo '';}else{echo 'reverse';}?>">
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
                                            <a href="<?php the_permalink();?>"
                                                class="p1 font-boild"><?php the_title();?></a>
                                        </div>
                                        <div class="news-description">
                                            <p><?php echo get_the_excerpt($postHot->ID);?>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <?php endwhile;
                                wp_reset_postdata(); ?>
                    </section>
                    <!-- End category 1 -->
                    <!-- Load more button -->
                    <div class="wrapper-load-more">
                        <div id="load-more-news" class="btn btn-outline-red">
                            <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                <div class="btn-fill"></div>
                                <span class="btn-text">
                                    <a class="btn-text-inner change" href="">Đọc thêm</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bar news -->
                <div class="col-lg-4 col-md-12 col-12 position-relative">
                    <div class="wrapper-bar">
                        <div class="wrapper-title">
                            <div class="section-title justify-content-start">
                                <div class="title pt-lg-2 pt-0">
                                    <h1 class="font-boild p1">Đọc nhiều</h1>
                                    <div class="divider my-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-card-news-hot">
                            <div class="card-news-hot">
                                <div class="news-image">
                                    <a href="#"> <img src="./assets/image/news/news-hot.jpg" alt=""></a>
                                </div>
                                <div class="news-title">
                                    <a href="#" class="sub-heading font-boild">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing
                                        elit.
                                        Repellat,
                                        ipsam?</a>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-card-new">
                            <div class="card-news-horizontal">
                                <div class="row">
                                    <div class="col-5 col-md-5 col-12">
                                        <div class="news-image">
                                            <a href="#"> <img src="./assets/image/news/news-hot.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-7 col-12 mt-md-0 mt-3">
                                        <div class="news-title">
                                            <a href="#" class="sub-title font-boild">Lorem ipsum dolor sit amet
                                                consectetur
                                                adipisicing
                                                elit.
                                                Repellat,
                                                ipsam?</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-news-horizontal">
                                <div class="row">
                                    <div class="col-5 col-md-5 col-12">
                                        <div class="news-image">
                                            <a href="#"> <img src="./assets/image/news/news-hot.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-7 col-12 mt-md-0 mt-3">
                                        <div class="news-title">
                                            <a href="#" class="sub-title font-boild">Lorem ipsum dolor sit amet
                                                consectetur
                                                adipisicing
                                                elit.
                                                Repellat,
                                                ipsam?</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>