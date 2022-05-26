<section id="recruit-section-2" class="recruit-section-1">
    <div class="container">
        <div class="recruit-section-title ">
            <h1 class=" h2 fade-right">
                <?php the_field('recruit_section_2_title');?>
            </h1>
            <div class="line my-md-4 my-2"></div>
            <div class="recruit-description fade-left">
                <?php if ( get_field('recruit_section_2_sub_title') ) : ?>
                <p class="description"> <?php echo get_field('recruit_section_2_sub_title'); ?> </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="wrapper-items animation_wrapper">
        <div class="wrapper-image">
            <video id="video" autoplay muted playsinline loop>
                <source src="<?php the_field('recruit_section_2_video_left_background');?>" type="video/mp4" />
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                </div>
                <div class="col-lg-7">
                    <div class="row animation-wrapper">
                        <?php if ( have_rows('recruit_section_2_repeater') ) : ?>

                        <?php while( have_rows('recruit_section_2_repeater') ) : the_row(); ?>

                        <div class="col-md-6 col-12">
                            <div class="recruit-box animation-item">
                                <span class="p1"> <?php the_sub_field('title'); ?></span>
                                <p class="description"> <?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>