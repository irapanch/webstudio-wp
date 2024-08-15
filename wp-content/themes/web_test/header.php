<!DOCTYPE html>
<html<?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WebStudio</title>

    <?php wp_head(); ?>
    
  </head>

  <body>
    <!-- ============HEADER==  -->
    <!-- ===================== -->
    <header class="header">
      <div class="header-container container">
        <nav class="header-menu">
          <a class="header-logo logo link" href="./"
            >web<span class="logo-dark">Studio</span></a
          >
          <ul class="menu-list list">
            <li class="menu-item">
              <a class="menu-link underline link" href="<?php echo get_page_link(15); ?>">Studio</a>
            </li>
            <li class="menu-item">
              <a class="menu-link link" href="<?php echo get_page_link(18); ?>">Portfolio</a>
            </li>
            <li class="menu-item">
              <a class="menu-link link" href="">Contacts</a>
            </li>
          </ul>
        </nav>
        <!--  ======BURGER BUTTON+========= -->
        <button
          type="button"
          class="header-mobile-menu-btn js-open-menu"
          aria-expanded="false"
          aria-controls="mobile-menu"
        >
          <svg class="header-mobile-menu-icon" width="32" height="22">
            <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-burger-1"></use>
          </svg>
        </button>
        <!--  ======/// BURGER BUTTON+========= -->

        <!-- header ADDRESS -->
        <address class="contacts-menu">
          <ul class="contacts-list list">
            <li class="contacts-item">
              <a class="contacts-link link" href="mailto:info@devstudio.com"
                >info@devstudio.com</a
              >
            </li>
            <li class="contacts-item">
              <a class="contacts-link link" href="tel:+<?php the_field('phone'); ?>"
                ><?php the_field('phone-visual'); ?></a
              >
            </li>
          </ul>
        </address>

        <!-- ========= header mobile MODAL  ============ -->
  
        <div class="header-mobile-modal js-menu-container" id="mobile-menu">
          <div class="header-mobile-modal-container">
            <button
              type="button"
              class="header-mobile-modal-btn-close js-close-menu"
            >
              <svg class="header-mobile-modal-btn-icon" width="8" height="8">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-close-modal"></use>
              </svg>
            </button>
            <div class="header-mobile-modal-wripper">
              <ul class="header-mobile-modal-menu-list list">
              <li class="mobile-modal-menu-item">
                <a
                  class="mobile-modal-menu-link underline link"
                  href="./index.html"
                  >Studio</a
                >
              </li>
              <li class="mobile-modal-menu-item">
                <a class="mobile-modal-menu-link link" href="./portfolio.html"
                  >Portfolio</a
                >
              </li>
              <li class="mobile-modal-menu-item">
                <a class="mobile-modal-menu-link link" href="">Contacts</a>
              </li>
              </ul>
              <div class="header-mobile-modal-wripper-bottom">
                <!-- ===== header ADDRESS modal===== -->
                <address class="header-mobile-modal-contacts-menu">
                  <ul class="header-mobile-modal-contacts-list list">
                <li class="header-mobile-modal-contacts-item">
                  <a
                    class="header-mobile-modal-contacts-link link"
                    href="tel:+110001111111"
                    >+11 (000) 111-11-11</a
                  >
                </li>
                <li class="header-mobile-modal-contacts-item">
                  <a
                    class="header-mobile-modal-contacts-link link"
                    href="mailto:info@devstudio.com"
                    >info@devstudio.com</a
                  >
                </li>
                  </ul>
                </address>
                <!-- =====///  header ADDRESS modal===== -->

                <!--  ==== header modal SOCIAL===== -->
                <ul class="header-mobile-modal-icon-list list">
                    <li class="header-mobile-modal-icon-item">
                      <a class="header-mobile-modal-icon-link link" href="">
                        <svg class="header-mobile-modal-icon" width="24" height="24">
                          <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-instagram-1"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="header-mobile-modal-icon-item">
                      <a class="header-mobile-modal-icon-link link" href="">
                        <svg class="header-mobile-modal-icon" width="24" height="24">
                          <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-twitter-1"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="header-mobile-modal-icon-item">
                      <a class="header-mobile-modal-icon-link link" href="">
                        <svg class="header-mobile-modal-icon" width="24" height="24">
                          <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-facebook-1"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="header-mobile-modal-icon-item">
                      <a class="header-mobile-modal-icon-link link" href="">
                        <svg class="header-mobile-modal-icon" width="24" height="24">
                          <use href="<?php bloginfo('template_url'); ?>/assets/images/icons.svg#icon-linkedin-1"></use>
                        </svg>
                      </a>
                    </li>
                </ul>
                      <!--  ==== /// header modal SOCIAL===== -->
              </div>
          </div>
          </div>
        </div>
        <!-- ========= /// header mobile MODAL  ============ -->
      </div>
    </header>