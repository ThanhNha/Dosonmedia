<section class="section-value" id="section-value">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class=" col-12">
                        <div class="wrapper-title-banner">
                            <div class="section-title">
                                <h1 class="uppercase font-boild h2 fade-right"><?php the_field('home_value_title'); ?>
                                </h1>
                                <div class="divider"></div>
                                <p class="p1 des-animation fade-left"><?php the_field('home_value_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if( have_rows('home_value_box_items') ): ?>
                    <?php $i =0;?>
                    <?php while( have_rows('home_value_box_items') ) : the_row(); ?>
                    <!-- variables -->
                    <?php 
                    $i++;
                        $name = get_sub_field('name');
                        $value = get_sub_field('value');
                    ?>
                    <!-- html here -->
                    <div class="<?php if($i===3){echo 'col-md-4 col-12';}else{echo 'col-md-4 col-6';}?> ">
                        <div class="value-block mx-auto">
                            <div class="font-boild">
                                +
                                <span><?php echo $value; ?></span>
                                <p><?php echo $name; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="image-right ">
                    <video id="video" autoplay muted playsinline>
                        <source src="<?php the_field('home_value_animation')?>" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-shape-divider-bottom-1652176518">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
</section>