<section id="section-futures" class="section-futures">
    <div class="img-animation rotating animation__image">
        <?php 
      $image = get_field('about_futures_rotating');
      $size = 'large'; 
      if( $image ) {
          echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
      }
       ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 position-relative">
                <div class="wrapper-card-futures">
                    <div class="card-futures">
                        <div class="wrapper-title-banner">
                            <div class="section-title">
                                <h1 class="uppercase font-boild h2 fade-right">
                                    <?php the_field('about_futures_box_2_title'); ?></h1>
                                <div class="divider"></div>
                                <div class="fade-left">
                                    <?php the_field('about_futures_box_2_desription');?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-12">
                <div class="card-futures">
                    <div class="wrapper-title-banner">
                        <div class="section-title">
                            <h1 class="uppercase font-boild h2 fade-right">
                                <?php the_field('about_futures_box_1_title'); ?></h1>
                            <div class="divider"></div>
                            <div class="fade-left"> <?php the_field('about_futures_box_1_desription');?></div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-value">
                    <div class="row">
                        <?php if( have_rows('about_futures_values') ): ?>
                        <?php $i = 1;?>
                        <?php while( have_rows('about_futures_values') ) : the_row(); ?>
                        <!-- variables -->
                        <?php 
                        $i++;
                        $value = get_sub_field('value');
                        $name = get_sub_field('name');
                        ?>
                        <!-- html here -->
                        <div class="<?php if($i === 3 ){echo 'col-md-4 col-12';}else{echo 'col-md-4 col-6';}?>">
                            <div class="value-block mx-auto">

                                <div class="font-boild">
                                    +
                                    <span><?php echo $value;?></span>
                                    <p><?php echo $name;?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>