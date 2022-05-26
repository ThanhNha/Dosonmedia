<section id="section-creative" class="section-reative">
    <div class="wrapper-title-service">
        <div class="section-title fade-right">
            <div class="title">
                <h1 class="uppercase font-boild h2">Sáng tạo</h1>
                <div class="divider "></div>
            </div>
            <span class="h2 font-boild uppercase">nội dung</span>
        </div>
        <p class="body-text fade-left"><?php the_field('service_creative_sub_title');?></p>
    </div>
    <div class="container">
        <?php if( have_rows('service_creative_repeater') ): ?>
        <?php $iCreative = 0;?>
        <?php while( have_rows('service_creative_repeater') ) : the_row(); ?>
        <!-- variables -->
        <?php
            $iCreative++;

            $iconCreative =  get_sub_field('icon'); 
            $imageCreative =  get_sub_field('image'); 
            $titleCreative =  get_sub_field('title'); 
            $descriptionCreative =  get_sub_field('description'); 
        ?>
        <!-- html here -->
        <div class="wrapper-reative <?php if($iCreative === 1){echo 'top fade-left';}else{echo 'bottom fade-right';}?>">
            <div class="reative-row">
                <div class="reative-img">
                    <?php 
                         if( $imageCreative ) {
                            echo wp_get_attachment_image( $imageCreative, $size, "", array( "class" => "img-fluid" ) );
                        }
                    ?>
                </div>
                <div class="wapper-reative-content">
                    <div class="reative-content">
                        <div class="wrapper-content-title">
                            <div class="content-title">
                                <span class="sub-heading uppercase"><?php echo $titleCreative; ?></span>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="content-description">
                            <p class="body-text"><?php echo $descriptionCreative;?></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="icon-reative">
                <div class="icon-img">
                    <?php 
                     if( $iconCreative ) {
                        echo wp_get_attachment_image( $iconCreative, $size, "", array( "class" => "icon" ) );
                    }
                   ?>
                </div>
                <div class="line line-1"></div>
                <div class="line line-2"></div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
    </div>

</section>