<section id="section-vision" class="section-vision">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="video-animation-wrapper">
                    <video id="video" autoplay muted playsinline loop>
                        <source src="<?php the_field('about_vision_video');?>" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="wrapper-vision">
                    <p class="fade-left"><?php the_field('about_text_top');?> </p>
                    <div class="text-vision fade-right">
                        <p class="h3 uppercase "><span>Doson</span> Media</p>
                    </div>
                    <div class="fade-left">
                        <?php the_field('about_text_top_2');?>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="wrapper-title-banner">
                    <div class="section-title">
                        <h1 class="uppercase font-boild h2 fade-right"><?php the_field('about_vision_title');?></h1>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="wrapper-vision fade-left">

                    <?php the_field('about_vision_text_bottom');?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chart-wrapper">
                    <div class="chart-img">
                        <?php 
                        $image = get_field('about_vision_chart');
                        $size = 'large'; 
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                        }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-shape-divider-bottom-1652259014">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="chart-arow">
        <?php 
        $imageChart = get_field('about_vision_line');
        $size = 'large'; 
        if( $imageChart ) {
            echo wp_get_attachment_image( $imageChart, $size, "", array( "class" => "char-img" ) );
        }
            ?>
    </div>
</section>