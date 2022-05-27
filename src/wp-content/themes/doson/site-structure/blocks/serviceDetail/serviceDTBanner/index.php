<section id="serviceDetail-banner">
    <div class="wrapper-banner">
        <div class="wrapper-main-banner">
            <?php
            if ( get_field('service_detail_banner') ) {
                $attachment_id_1 = get_field('service_detail_banner');
                $size = "full"; // (thumbnail, medium, large, full or custom size)
              echo  wp_get_attachment_image( $attachment_id_1, $size );
            }
            ?>
        </div>
        <div class="wrapper-sub-banner">
            <?php
            if ( get_field('service_detail_banner_image') ) {
                $attachment_id_2 = get_field('service_detail_banner_image');
                $size = "full"; // (thumbnail, medium, large, full or custom size)
                echo  wp_get_attachment_image( $attachment_id_2, $size );
            }
            ?>
        </div>
    </div>
</section>