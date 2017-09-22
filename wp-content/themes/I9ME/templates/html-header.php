<?php get_template_part('templates/html','head'); ?>

 <!-- Header zone -->
<header class="header">
    <div class="container">
  
        <?php if( is_home() || is_front_page() ): ?>
       
            <a href="#home" class="header__brand">
                <h1 class="header__logo">
                    <span class="header__letter header--i">I</span>
                    <span class="header__letter header--n">9</span>
                    <span class="header__letter header--m">M</span>
                    <span class="header__letter header--e">E</span>
                </h1>
                <div class="header__name">
                    <div class="header__wd">Web & <span>Design</span></div>
                </div>
            </a>
        
        <?php else: ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
           <i class="icon-logo"></i>
        </a>
        <?php endif; ?>


        <a href="#menu" class="header__toggle"><span></span></a>

         <?php  wp_nav_menu( array(
            'theme_location'  => 'menu_1', 
            'menu_class'      => 'menu__nav ',
            'container_class' => 'header__menu'.$css.'')); ?>



        <div class="header__redes">
            <div class="header__redestop">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="header__redesbottom">
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            </div>
        </div>

    </div>
  </header>
<main class="main">

