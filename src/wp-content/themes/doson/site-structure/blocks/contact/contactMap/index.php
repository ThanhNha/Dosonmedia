<section id="section-map">
    <div class="wrapper-map animation__image">
        <?php 
        $link = get_field('contact_map_link');
        if( $link ): 
        $link_url = $link['url'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="map-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> <?php
        if ( get_field('contact_map_image') ) {
            $attachment_id = get_field('contact_map_image');
            $size = "full"; 
            echo wp_get_attachment_image( $attachment_id, $size );
        }
        ?></a>
        <?php endif; ?>
    </div>
</section>