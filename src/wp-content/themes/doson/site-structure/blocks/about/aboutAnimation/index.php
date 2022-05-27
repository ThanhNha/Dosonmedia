<section id="section-aboutAnimation">
    <div class="container">
        <div class="wrapper-aboutAnimation">
            <div class="wrapper-aboutAnimation-center">

                <div class="animation-center">
                    <strong> <?php the_field('about_animation_text_strong')?></strong>

                    <?php
                $imageCenter= get_field('about_animation_image_center');
                $size ='large';
                if($imageCenter){
                    echo wp_get_attachment_image( $imageCenter, $size, "", array( "class" => "img-fluid" ) );
                }
            ?>
                </div>
                <div class="info-text">
                    <div>
                        <p>
                            <?php the_field('about_animation_text_info')?>
                        </p>
                        <strong> <?php the_field('about_animation_text_strong')?></strong>
                    </div>
                </div>
            </div>
            <div class="wrapper-aboutAnimation-left">
                <?php
                $imageLeft = get_field('about_animation_image_left');
                if($imageLeft){
                    echo wp_get_attachment_image( $imageLeft, $size, "", array( "class" => "img-fluid" ) );
                }
            ?>
            </div>
            <div class="wrapper-aboutAnimation-right">
                <?php
                $imageRight = get_field('about_animation_image_right');
                if($imageRight){
                    echo wp_get_attachment_image( $imageRight, $size, "", array( "class" => "img-fluid" ) );
                }
            ?>
                <span class="p1 uppercase">Phát triển tăng trưởng bền vững</span>
            </div>
        </div>
    </div>

</section>