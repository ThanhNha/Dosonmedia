<section id="serviceDetail-section-2" class="serviceDetail-section-2">
    <div class="container">
        <div class="wrapper-description">
            <?php if ( get_field('service_detail_2_sub_title') ) : ?>
            <p class="description fade-left"><?php echo get_field('service_detail_2_sub_title'); ?></p>
            <?php endif; ?>
        </div>
        <div class="serviceDetail-section-title">
            <h1 class=" h2 fade-right">
                <?php if ( get_field('service_detail_2_title') ) : ?>
                <?php echo get_field('service_detail_2_title'); ?>
                <?php endif; ?>

            </h1>
            <div class="line my-md-4 my-2"></div>
            <div class="serviceDetail-description">
                <p class="description fade-left">
                    <?php if ( get_field('service_detail_2_description') ) : ?>
                <p><?php echo get_field('service_detail_2_description'); ?></p>
                <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="wrapper-items">
        <div class="container">
            <div class="animation-wrapper">
                <div class="row">
                    <?php if ( have_rows('service_detail_2_repeater') ) : ?>
                    <?php $count = 0;?>
                    <?php while( have_rows('service_detail_2_repeater') ) : the_row(); ?>
                    <?php $count++?>
                    <div class="col-lg-4 <?php if($count === 3 ){echo 'col-md-12' ;}else{echo'col-md-6';}?> col-12">
                        <div class="contact-item animation-item">
                            <div class="item-icon">
                                <div class="icon">
                                    <?php
                                if ( get_sub_field('icon') ) {
                                    $attachment_id = get_sub_field('icon');
                                    $size = "full"; // (thumbnail, medium, large, full or custom size)
                                   echo wp_get_attachment_image( $attachment_id, $size );
                                }
                                ?>

                                </div>
                            </div>
                            <div class="line my-3"></div>
                            <div class="item-name">
                                <span class="p1 uppercase font-boild"> <?php the_sub_field('title'); ?></span>
                            </div>
                            <div class="item-description">
                                <p> <?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

</section>