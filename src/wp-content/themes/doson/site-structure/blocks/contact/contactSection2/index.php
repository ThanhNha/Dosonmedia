<section id="section-contact" class="section-contact">
    <div class="container">
        <div class="wrapper-title mw-100">
            <div class="section-title fade-right">
                <div class="title">
                    <h1 class="font-boild h2 uppercase">Liên hệ </h1>
                    <div class="divider "></div>
                </div>
                <span class="h2 font-boild uppercase ">chúng tôi</span>
            </div>
        </div>
        <div class="wrapper-items-contact animation-wrapper">
            <div class="row">
                <?php if ( have_rows('contact_section_2_repeater') ) : ?>
                <?php $i_form=0;?>
                <?php while( have_rows('contact_section_2_repeater') ) : the_row(); ?>
                <?php $i_form++?>
                <div class="col-lg-4 <?php if($i_form === 3){echo 'col-md-12';}else{echo 'col-md-6';}?> col-12">
                    <div class="contact-item animation-item">
                        <div class="item-icon">
                            <div class="icon"><i class="<?php the_sub_field('icon_item'); ?>"></i></div>
                        </div>
                        <div class="line my-3"></div>
                        <div class="item-name">
                            <span class="p1 uppercase font-boild"> <?php the_sub_field('name_item'); ?></span>
                        </div>
                        <div class="item-description <?php if($i_form === 3){echo 'last';}else{echo '';}?>">
                            <p> <?php the_sub_field('description_item'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="wrapper-form-contact">
            <div class="form-sub-title fade-left">
                <span class="sub-heading"><?php the_field('contact_section_2_title');?></span>
            </div>
            <div class="form-contact">
                <?php
                $form_contact = get_field('contact_section_form_contact');
                if($form_contact){
                    echo do_shortcode($form_contact);
                }
                ?>
            </div>
        </div>
    </div>
</section>