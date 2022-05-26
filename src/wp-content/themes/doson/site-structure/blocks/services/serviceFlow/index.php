<section id="section-service-flow" class="section-service-flow">
    <div class="custom-shape-divider-top-1652425003">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="wrapper-title-service">
        <div class="section-title fade-right">
            <div class="title">
                <h1 class="uppercase font-boild h2">Quy trình</h1>
                <div class="divider "></div>
            </div>
            <span class="h2 font-boild uppercase">Dịch vụ</span>
        </div>
        <p class="body-text fade-left"><?php the_field('service_flow_sub_title');?></p>
    </div>
    <div class="container">
        <div class="wrapper-cards-flow animation-wrapper">
            <div class="row">
                <?php 
                    $rows = get_field('service_flow_repeater');
                    if( $rows ): ?>
                <?php 
                $i = 1;
                    ?>
                <?php foreach( $rows as $row ): ?>
                <?php 
                $i++;
                $image = get_field('service_flow_background_item');
                $image_last = get_field('service_flow_background_item_last');
                $title = $row['title'];
                $description = $row['description'];
                ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card-flow animation-item">
                        <div class="bg-card">
                            <?php  echo wp_get_attachment_image( $image, 'full' );?>
                        </div>
                        <div class="card-step">
                            <span class="h2">Step<h2 class="h1 font-boild"><?php echo($i-1);?></h2></span>
                        </div>
                        <div class="card-info">
                            <div class="info-title">
                                <span class="title p1"><?php echo $title ;?></span>
                                <div class="line"></div>
                            </div>
                            <div class="info-description">
                                <?php echo $description; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($i > 3 ) :?>
                <?php break;?>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="row row-2">
                <div class="col-2"></div>
                <?php if( $rows ): ?>
                <?php $length = sizeof($rows);
                $i_2 = 0;
              
                    ?>
                <?php foreach( $rows as $row ): ?>
                <?php 
                    $i_2++;
                    $title_2 = $row['title'];
                    $des_2 = $row['description'];
                ?>
                <?php if($i_2 > 3 ) :?>
                <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="card-flow animation-item">
                        <div class="bg-card">
                            <?php if (($length - $i_2)>0){
                                 echo wp_get_attachment_image( $image, 'full' );
                               
                           }else{
                            echo wp_get_attachment_image( $image_last, 'full' );
                           }
                               ?>
                        </div>
                        <div class="card-step">
                            <span class="h2">Step<h2 class="h1 font-boild"><?php echo($i_2);?></h2></span>
                        </div>
                        <div class="card-info">
                            <div class="info-title">
                                <span class="title p1">
                                    <?echo $title_2;?>
                                </span>
                                <div class="line"></div>
                            </div>
                            <div class="info-description">
                                <?echo $des_2;?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>
                <div class="col-2"></div>
            </div>
        </div>

    </div>
    <div class="wrapper-cards-flow mobile">

        <?php   if( $rows ): ?>
        <?php $i_mb = 0;?>
        <?php foreach( $rows as $row ): ?>
        <!-- variable get with key repeater -->
        <?php $i_mb++;
        ?>
        <div class="card-flow">
            <div class="bg-card">
                <?php if ($i_mb > 4){
                      echo wp_get_attachment_image( $image_last, 'full' );
                    }else{
                        echo wp_get_attachment_image( $image, 'full' );
                    }
                ?>
            </div>
            <div class="card-step">
                <span class="h2">Step<h2 class="h1 font-boild"><?php echo $i_mb;?></h2></span>
            </div>
            <div class="card-info">
                <div class="info-title">
                    <span class="title p1"><?php echo $row['title'];?></span>
                    <div class="line"></div>
                </div>
                <div class="info-description">
                    <?php echo $row['description'];?>
                </div>
            </div>
        </div>
        <!-- html here -->

        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>