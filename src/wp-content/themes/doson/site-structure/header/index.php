<header id="header">
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="navbar-brand magnetic" id="logo_menu">
                <?php
                    $image = get_field('header_logo', 'option');
                    $size = 'full';
                    if ($image) {
                        echo wp_get_attachment_image($image, $size, "", array("class" => "img-fluid logo-dark"));
                    } ?>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="icofont-navigation-menu"></span> -->
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </button>
            <div class="line"></div>
            <div class="collapse navbar-collapse" id="navbarmain">
                <?php if( have_rows('menu_main' ,'option') ): ?>
                <ul class="navbar-nav ml-auto">
                    <?php while( have_rows('menu_main' ,'option') ): the_row(); 
                                        $menu_name = get_sub_field('menu_name');
                                        $menu_link = get_sub_field('menu_link');
                                ?>
                    <li class="nav-item <?php if(get_permalink()== $menu_link){echo 'active';} 
                        if( have_rows('sub_menu' ,'option') ){echo ' dropdown';}else{echo ' magnetic';}
                    ?>">
                        <a class="nav-link hover-menu <?php if( have_rows('sub_menu' ,'option') ){echo 'dropdown-toggle';} ?>" <?php if( have_rows('sub_menu' ,'option') ){echo ' dropdown-toggle" data-toggle="dropdown"
                                        href="#" role="button" aria-haspopup="true" aria-expanded="true"';} ?>
                            href="<?php echo $menu_link;?>">
                            <?php echo $menu_name;?>
                        </a>
                        <?php if( have_rows('sub_menu' ,'option') ): ?>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <?php while( have_rows('sub_menu','option') ): the_row(); 
                                            $sub_name = get_sub_field('sub_name');
                                            $sub_link = get_sub_field('sub_link');
                                        ?>
                            <li><a class="dropdown-item" href="<?php echo $sub_link;?>">
                                    <?php echo $sub_name;?>
                                </a></li>
                            <?php endwhile;?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endwhile ;?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>