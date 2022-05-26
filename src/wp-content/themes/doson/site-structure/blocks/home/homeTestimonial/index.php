<section id="section-testimonial" class="section-testimonial">
    <div class="container">
        <div class="wrapper-title-banner">
            <div class="section-title">
                <h1 class="uppercase font-boild h2 fade-right"><?php the_field('home_testimonial_tilte')?></h1>
                <div class="divider mx-auto"></div>
            </div>
        </div>
    </div>
    <div class="animation-wrapper">
        <div class="testimonial-wrap-2 animation-item">
            <?php if( have_rows('home_testimonial_slide') ): ?>
            <?php while( have_rows('home_testimonial_slide') ) : the_row(); ?>
            <!-- variables -->
            <?php 
                $client_image = get_sub_field('client_image');
                $name_client = get_sub_field('name_client');
                $client_position = get_sub_field('client_position');
                $testimonial = get_sub_field('testimonial');
                ?>
            <!-- html here -->
            <div class="testimonial-block">
                <div class="testimonial-wrapper">
                    <div class="wrapper-image">
                        <div class="testimonial-thumb animation__image">
                            <?php 
                          if( $client_image ) {
                            echo wp_get_attachment_image( $client_image, $size, "", array( "class" => "img-fluid" ) );
                        }?>
                        </div>
                    </div>
                    <div class="wrapper-info">
                        <div class="client-info ">
                            <p class="p1">
                                <?php echo $testimonial;?>
                            </p>
                            <h4> <?php echo $name_client;?></h4>
                            <span> <?php echo   $client_position;?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>

</section>