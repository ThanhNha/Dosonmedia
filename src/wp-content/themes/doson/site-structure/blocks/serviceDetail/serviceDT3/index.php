<section id="serviceDetail-section-3" class="serviceDetail-section-3">
    <div class="wrapper-video-animation">
        <video id="video" autoplay muted playsinline loop>
            <source src=" <?php the_field('service_detail_3_video');?> " type="video/mp4" />
        </video>
    </div>
    <div class="container">
        <div class="serviceDetail-section3-title">
            <h1 class=" h2 fade-right">
                <?php if ( get_field('service_detail_3_title') ) : ?>
                <p><?php echo get_field('service_detail_3_title'); ?></p>
                <?php endif; ?>
            </h1>
            <div class="line my-md-4 my-2"></div>
        </div>
        <div class="animation-wrapper">
            <div class="row">
                <?php if ( have_rows('service_detail_3_repeater') ) : ?>

                <?php while( have_rows('service_detail_3_repeater') ) : the_row(); ?>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="serviceDetail-section3-box animation-item">
                        <span class="p1"> <?php the_sub_field('title'); ?></span>
                        <p class="description"><?php the_sub_field('description'); ?></p>
                    </div>
                </div>

                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>



    </div>
    </div>

</section>