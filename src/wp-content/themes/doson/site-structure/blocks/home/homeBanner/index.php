<section id="main-banner" class="main-banner">
    <div class="bg-video">
        <?php the_field('oembed'); ?>
        <video id="video" autoplay muted playsinline loop>
            <source src="<?php the_field('video_banner'); ?>" type="video/mp4" />
        </video>
    </div>
    <div class="container position-relative h-100">
        <div class="wrapper-title-banner">
            <div class="section-title">
                <h1 class="uppercase font-boild text-white h2 fade-right"><?php the_field('banner_title'); ?></h1>
                <div class="divider"></div>
                <p class="text-white p1 fade-left">
                    <?php if(get_field('banner_description')){
                        $description = get_field('banner_description'); 
                        echo $description;
                    } ?></p>
            </div>
        </div>
    </div>
</section>