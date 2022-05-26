<section id="section-bannerService" class="section-bannerService">
    <div class="container h-100 position-relative">
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="wrapper-form" id="sign-up-form">
                    <div class="form-service">
                        <span class="label-form">Nhận tư vấn marketing</span>
                        <?php
                        $form = get_field('form_contact_service');
                        echo do_shortcode($form); ?>
                    </div>

                </div>

            </div>
            <div class="wrapper-banner">
                <?php 
                    $image = get_field('service_banner_image');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                    }
                ?>
            </div>
        </div>
    </div>
</section>