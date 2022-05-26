<?php
/*
 * Create blocks for site
 */
add_filter('block_categories_all', 'shin_block_category', 10, 2);
function shin_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'shin-blocks',
                'title' => __('The Natives Blocks', 'shin-blocks'),
            ),
        )
    );
}


add_action('acf/init', 'shin_acf_init_block_types');
function shin_acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'              => 'Spacing',
            'title'             => __('Spacing'),
            'description'       => __('A custom Spacing block.'),
            'render_template'   => 'site-structure/blocks/spacing/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'spacing'),
            'mode'              => 'edit', 
        ));
        //Page About Block 
        acf_register_block_type(array(
            'name'              => 'Block Home Banner',
            'title'             => __('homeBanner'),
            'description'       => __('A custom homeBanner block.'),
            'render_template'   => 'site-structure/blocks/home/homeBanner/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'homeBanner'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Home Service',
            'title'             => __('homeService'),
            'description'       => __('A custom homeService block.'),
            'render_template'   => 'site-structure/blocks/home/homeService/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'homeService'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Home Value',
            'title'             => __('homeValue'),
            'description'       => __('A custom homeValue block.'),
            'render_template'   => 'site-structure/blocks/home/homeValue/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'homeValue'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Home Welcome',
            'title'             => __('homeWelcome'),
            'description'       => __('A custom homeWelcome block.'),
            'render_template'   => 'site-structure/blocks/home/homeWelcome/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'homeWelcome'),
            'mode'              => 'edit', 
        ));

        acf_register_block_type(array(
            'name'              => 'Block Home Blogs',
            'title'             => __('homeBlogs'),
            'description'       => __('A custom homeBlogs block.'),
            'render_template'   => 'site-structure/blocks/home/homeBlogs/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'homeBlogs'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Home Testimonial',
            'title'             => __('homeTestimonial'),
            'description'       => __('A custom homeTestimonial block.'),
            'render_template'   => 'site-structure/blocks/home/homeTestimonial/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'homeTestimonial'),
            'mode'              => 'edit', 
        ));

        //Page About Block 
        acf_register_block_type(array(
            'name'              => 'Block About Banner',
            'title'             => __('aboutBanner'),
            'description'       => __('A custom aboutBanner block.'),
            'render_template'   => 'site-structure/blocks/about/aboutBanner/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'aboutBanner'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block About Futures',
            'title'             => __('aboutFutures'),
            'description'       => __('A custom aboutFutures block.'),
            'render_template'   => 'site-structure/blocks/about/aboutFutures/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'aboutFutures'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block About Animation',
            'title'             => __('aboutAnimation'),
            'description'       => __('A custom aboutAnimation block.'),
            'render_template'   => 'site-structure/blocks/about/aboutAnimation/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'aboutAnimation'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block About Vision',
            'title'             => __('aboutVision'),
            'description'       => __('A custom aboutVision block.'),
            'render_template'   => 'site-structure/blocks/about/aboutVision/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'aboutVision'),
            'mode'              => 'edit', 
        ));

        //Page Service
        acf_register_block_type(array(
            'name'              => 'Block Service Banner',
            'title'             => __('serviceBanner'),
            'description'       => __('A custom serviceBanner block.'),
            'render_template'   => 'site-structure/blocks/services/serviceBanner/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'serviceBanner'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Service Marketing',
            'title'             => __('serviceMarketing'),
            'description'       => __('A custom serviceMarketing block.'),
            'render_template'   => 'site-structure/blocks/services/serviceMarketing/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'serviceMarketing'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Service Digital',
            'title'             => __('serviceDigital'),
            'description'       => __('A custom serviceDigital block.'),
            'render_template'   => 'site-structure/blocks/services/serviceDigital/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'serviceDigital'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Service Flow',
            'title'             => __('serviceFlow'),
            'description'       => __('A custom serviceFlow block.'),
            'render_template'   => 'site-structure/blocks/services/serviceFlow/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'serviceFlow'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Service Creative',
            'title'             => __('serviceCreative'),
            'description'       => __('A custom serviceCreative block.'),
            'render_template'   => 'site-structure/blocks/services/serviceCreative/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'serviceCreative'),
            'mode'              => 'edit', 
        ));
       //Page Recruit
        acf_register_block_type(array(
            'name'              => 'Block Recruit Banner',
            'title'             => __('recruitBanner'),
            'description'       => __('A custom recruitBanner block.'),
            'render_template'   => 'site-structure/blocks/recruit/recruitBanner/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'recruitBanner'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Recruit Section2',
            'title'             => __('recruitSection2'),
            'description'       => __('A custom recruitSection2 block.'),
            'render_template'   => 'site-structure/blocks/recruit/recruitSection2/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'recruitSection2'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Recruit Table',
            'title'             => __('recruitTable'),
            'description'       => __('A custom recruitTable block.'),
            'render_template'   => 'site-structure/blocks/recruit/recruitTable/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'recruitTable'),
            'mode'              => 'edit', 
        ));
        //Page Contact
        acf_register_block_type(array(
            'name'              => 'Block Contact Banner',
            'title'             => __('contactBanner'),
            'description'       => __('A custom contactBanner block.'),
            'render_template'   => 'site-structure/blocks/contact/contactBanner/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'contactBanner'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Contact Section2',
            'title'             => __('contactSection2'),
            'description'       => __('A custom contactSection2 block.'),
            'render_template'   => 'site-structure/blocks/contact/contactSection2/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'contactSection2'),
            'mode'              => 'edit', 
        ));
        acf_register_block_type(array(
            'name'              => 'Block Contact Map',
            'title'             => __('contactMap'),
            'description'       => __('A custom contactMap block.'),
            'render_template'   => 'site-structure/blocks/contact/contactMap/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'contactMap'),
            'mode'              => 'edit', 
        ));
    }
}