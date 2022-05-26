<section id="section-service" class="section-service">
    <div class="container position-relative">
        <div class="wrapper-title-banner">
            <div class="section-title">
                <h1 class="uppercase font-boild h2 fade-right">Các dịch vụ</h1>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <div class="container wrapper-service ">
        <div class="w-80 animation-wrapper">
            <div class="row">
                <?php $i = 0;?>
                <?php if( have_rows('home_service_repeater') ) : ?>
                <?php while( have_rows('home_service_repeater') ): the_row(); 
                $i++;
                    // sub field
                    $service_icon = get_sub_field('service_item');
                    $size = 'full';
                    $service_title = get_sub_field('service_title');
                    $service_description = get_sub_field('service_description');
                        ?>
                <!-- html here -->
                <div
                    class="<?php if($i === 3){echo 'col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-5 mb-3';}else{echo 'col-lg-4 col-md-6 col-12  mb-lg-0 mb-md-5 mb-3';} ?>">
                    <div class="service-item animation-item">
                        <div class="service-icon">
                            <?php
                            if ($service_icon) {
                                echo wp_get_attachment_image($service_icon, $size, "", array("class" => "svg"));
                            } ?>
                        </div>
                        <div class="line mx-auto"></div>
                        <div class="service-title">
                            <h2 class=" h3 w-50 mx-auto"><?php echo  $service_title;?></h2>
                        </div>
                        <div class="service-description">
                            <p class="description"><?php echo   $service_description;?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>