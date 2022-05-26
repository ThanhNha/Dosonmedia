<section id="section-welcome" class="position-relative">

    <div class="container section-welcome-1">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="position-relative wrapper-image">
                    <div class="position-absolute img-1 animation__image">
                        <?php 
                            $image = get_field('home_welcome_image_1');
                            $size = 'full'; 
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                    </div>
                    <div class="position-absolute img-2 animation__image">
                        <?php 
                            $image = get_field('home_welcome_image_2');
                            $size = 'full'; 
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6">
                <div class="wrapper-title-banner">
                    <div class="section-title">
                        <h1 class="uppercase font-boild h2 fade-right">Về chúng tôi</h1>
                        <div class="divider"></div>
                        <div class="title-description fade-left">
                            <?php the_field('home_welcome_description'); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-welcome-2">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="wrapper-title-banner position-relative">
                    <div class="section-title fade-left">

                        <?php 
                        if(get_field('home_welcome_image_animation')):
                            $call_to_action = get_field('home_welcome_call_to_action');
                         ?>

                        <p class="sub-title">
                            “
                            <?php echo $call_to_action; ?>
                            “
                        </p>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative wrapper-image">
                    <div class="position-absolute img-1 animation__image">
                        <?php 
                            $image = get_field('home_welcome_image_3');
                            $size = 'full'; 
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                    </div>
                    <div class=" position-absolute img-2 animation__image">
                        <?php 
                            $image = get_field('home_welcome_image_4');
                            $size = 'full'; 
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=" custom-shape-divider-bottom-1652169260">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="background-img">
        <video id="video" autoplay muted playsinline loop>
            <source src="<?php the_field('home_welcome_image_animation');?>" type="video/mp4" />
        </video>
    </div>

</section>