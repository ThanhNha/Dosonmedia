<section id="section-mkt" class="section-mkt">
    <div class="bg-video">
        <video id="video" autoplay muted playsinline loop>
            <source src="<?php the_field('service_marketing_background'); ?>" type="video/mp4" />
        </video>
    </div>
    <div class="container">
        <div class="wrapper-title-service">
            <div class="section-title fade-left">
                <div class="title">
                    <h1 class="uppercase font-boild h2 ">Marketing</h1>
                    <div class="divider"></div>
                </div>
                <span class="h2 font-boild uppercase">Tổng thể</span>
            </div>
            <p class="body-text fade-right">
                <?php 
                the_field('service_marketing_sub_title');
                ?>
            </p>
        </div>
    </div>
    <div class="wrapper-main-service">

        <div class="service service-1">
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-8 col-12">
                    <div class="service-icon magnetic">
                        <?php 
                        $image = get_field('service_marketing_planet');
                        $size = 'large'; 
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size, "", array( "class" => "object-cover" ) );
                        } 
                        ?>
                    </div>
                    <div class="service-info mt-lg-5 mt-md-4 mt-3">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="service-tag">
                                    <span class="p1 fade-left"><?php the_field('service_marketing_title_1');?></span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="body-text fade-right"><?php the_field('service_marketing_description_1');?>
                                </div>
                                <div class="wrapper-btn">
                                    <div class="btn btn-outline-red">
                                        <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                            <div class="btn-fill"></div>
                                            <span class="btn-text">
                                                <?php 
                                                $link1 = get_field('service_marketing_1_link_1');
                                                if( $link1 ): 
                                                    $link_url1 = $link1['url'];
                                                    $link_title1 = $link1['title'];
                                                    ?>
                                                <a class="btn-text-inner change"
                                                    href="<?php echo esc_url( $link_url1 ); ?>"><?php echo esc_html( $link_title1 ); ?></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- btn2 -->
                                    <div class="btn btn-red">
                                        <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                            <div class="btn-fill"></div>
                                            <span class="btn-text">
                                                <?php 
                                                $link2 = get_field('service_marketing_1_link_2');
                                                if( $link2 ): 
                                                    $link_url2 = $link2['url'];
                                                    $link_title2 = $link2['title'];
                                                    ?>
                                                <a class="btn-text-inner"
                                                    href="<?php echo esc_url( $link_url2 ); ?>"><?php echo esc_html( $link_title2 ); ?></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="minus-top">
            <div class="service service-2">
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-4 col-12"></div>
                    <div class="col-xl-6 col-lg-8 col-12">
                        <div class="service-icon magnetic">
                            <?php 
                          if( $image ) {
                            echo wp_get_attachment_image( $image, $size, "", array( "class" => "object-cover" ) );
                            } 
                          ?>
                        </div>
                        <div class="service-info mt-lg-5 mt-md-4 mt-3">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="service-tag">
                                        <span
                                            class="p1 fade-right"><?php the_field('service_marketing_title_2')?></span>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <div class="body-text fade-left">
                                        <?php the_field('service_marketing_description_2')?></div>
                                    <div class="wrapper-btn">
                                        <div class="btn btn-outline-red">
                                            <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                                <div class="btn-fill"></div>
                                                <span class="btn-text">
                                                    <?php 
                                                $link3 = get_field('service_marketing_2_link_1');
                                                if( $link3 ): 
                                                    $link_url3 = $link3['url'];
                                                    $link_title3 = $link3['title'];
                                                    ?>
                                                    <a class="btn-text-inner change"
                                                        href="<?php echo esc_url( $link_url3 ); ?>"><?php echo esc_html( $link_title3 ); ?></a>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- btn2 -->
                                        <div class="btn btn-red">
                                            <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                                <div class="btn-fill"></div>
                                                <span class="btn-text">
                                                    <?php 
                                                $link4 = get_field('service_marketing_2_link_2');
                                                if( $link4 ): 
                                                    $link_url4 = $link4['url'];
                                                    $link_title4 = $link4['title'];
                                                    ?>
                                                    <a class="btn-text-inner"
                                                        href="<?php echo esc_url( $link_url4 ); ?>"><?php echo esc_html( $link_title4 ); ?></a>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="minus-top">
            <div class="service service-3 ">
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-8 col-12">
                        <div class="service-icon magnetic">
                            <?php 
                          if( $image ) {
                            echo wp_get_attachment_image( $image, $size, "", array( "class" => "object-cover" ) );
                            } 
                          ?>
                        </div>
                        <div class="service-info mt-lg-5 mt-md-4 mt-3">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="service-tag">
                                        <span
                                            class="p1 fade-left"><?php the_field('service_marketing_title_3');?></span>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <div class="body-text fade-right">
                                        <?php the_field('service_marketing_description_3')?></div>
                                    <div class="wrapper-btn">
                                        <div class="btn btn-outline-red">
                                            <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                                <div class="btn-fill"></div>
                                                <span class="btn-text">
                                                    <?php 
                                                $link5 = get_field('service_marketing_3_link_1');
                                                if( $link5 ): 
                                                    $link_url5 = $link5['url'];
                                                    $link_title5 = $link5['title'];
                                                    ?>
                                                    <a class="btn-text-inner change"
                                                        href="<?php echo esc_url( $link_url5 ); ?>"><?php echo esc_html( $link_title5 ); ?></a>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- btn2 -->
                                        <div class="btn btn-red">
                                            <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                                <div class="btn-fill"></div>
                                                <span class="btn-text">
                                                    <?php 
                                                $link6 = get_field('service_marketing_3_link_2');
                                                if( $link6 ): 
                                                    $link_url6 = $link6['url'];
                                                    $link_title6 = $link6['title'];
                                                    ?>
                                                    <a class="btn-text-inner"
                                                        href="<?php echo esc_url( $link_url6 ); ?>"><?php echo esc_html( $link_title6 ); ?></a>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>