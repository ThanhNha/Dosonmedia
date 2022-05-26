<section id="section-digital" class="section-digital">
    <div class="custom-shape-divider-top-1652350317">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <div class="wrapper-title-service">
            <div class="section-title fade-right">
                <div class="title ">
                    <h1 class="uppercase font-boild h2">Digital</h1>
                    <div class="divider "></div>
                </div>
                <span class="h2 font-boild uppercase">marketing</span>
            </div>
            <p class="body-text fade-left">
                <?php the_field('service_digital_sub_title'); ?>
            </p>
        </div>
        <div class="wrapper-service animation-wrapper">
            <div class="row">
                <?php if( have_rows('service_digital_repeater') ): ?>
                <?php while( have_rows('service_digital_repeater') ) : the_row(); ?>
                <!-- variables -->
                <?php   
                    $icon = get_sub_field('item_icon');
                    $itemTitle = get_sub_field('item_title');
                    $itemDes = get_sub_field('item_description');
                    $link_item = get_sub_field('item_link');
                    $size = 'large'; 
                ?>
                <!-- html here -->
                <div class="col-lg-4 col-md-6 col-12 ">
                    <a href="<?php echo $link_item;?>" class="service-item animation-item">
                        <div class="service-icon">
                            <?php 
                            if( $icon ) {
                                echo wp_get_attachment_image( $icon, $size, "", array( "class" => "img-fluid" ) );
                            }
                        ?>
                        </div>
                        <div class="line mx-auto"></div>
                        <div class="service-title">
                            <h2 class=" h3"><?php echo $itemTitle; ?></h2>
                        </div>
                        <div class="service-description">
                            <p class="description"><?php echo $itemDes; ?></p>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="custom-shape-divider-bottom-1652411159">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
</section>