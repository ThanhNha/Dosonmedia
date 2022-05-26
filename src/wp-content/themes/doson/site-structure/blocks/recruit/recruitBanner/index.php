<section id="recruit-main-banner" class="recruit-main-banner">
    <div class="bg-video">
        <video id="video" autoplay muted playsinline loop>
            <source src="<?php the_field('recruit_banner_desktop_video');?>" type="video/mp4" />
        </video>
    </div>
    <div class="bg-video-mobile">
        <video id="video" autoplay muted playsinline loop>
            <source src="<?php the_field('recruit_banner_mobile_video');?>" type="video/mp4" />
        </video>
    </div>
    <div class="banner-img">
        <?php 
        $imageBanner = get_field('recruit_banner_image_name');
        $size = 'large'; 
        if( $imageBanner ) {
            echo wp_get_attachment_image( $imageBanner, $size, "", array( "class" => "img-fluid" ) );
        }
    ?>
    </div>
    <div class="text-banner">
        <h1 class="combined ">
            <?php the_field('recruit_banner_text');?>
        </h1>
    </div>

</section>