<header class="site__header">
  <div class="header__desktop header__desktop-image hidden-md-down">
      <div class="container">
          <div class="header__desktop-logo">
            <a href="<?php echo home_url();?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" style="height: 40px; width:auto;"> 
            </a>
          </div>
          <nav class="header__desktop-menu clearfix">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
              endif;
            ?>
          </nav>
      </div>
    </div>

   <div class="header__mobile header__mobile-image hidden-lg-up">
      <div class="container">
          <div class="row">
            <div class="col-xs-12">

              <div class="header__mobile-logo">

                <a href="<?php echo home_url();?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" style="height: 75px; width:auto;"> 
                </a>

              </div>

              <div class="header__mobile-close">

                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.svg" style="height: 25px; width:auto;">
                </a>

              </div>

            </div>
          </div>

        <nav class="header__mobile-menu" id="mobile-menu">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
          ?>
        </nav> 
      </div>
    </div>
</header>