<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
      <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
      <div class="load-text">
        <span>M</span><span>A</span><span>Y</span><span>A</span><span>R</span><span>O</span><span>O</span>
      </div>
    </div>
  </div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- side toggle start -->
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img class="show-light" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/logo.png" alt="site logo">
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="mobile-menu d-xl-none fix"></div>
        <div class="offset-button">
          <a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('contact') : home_url('/contact')); ?>" class="rr-btn">
            <span class="btn-wrap">
              <span class="text-one">Let's Talk</span>
              <span class="text-two">Let's Talk</span>
            </span>
          </a>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Contact US</h2>
          <div class="contact-meta">
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              <span class="text">3891 Ranchview Dr. Richardson</span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-envelope"></i></span>
              <span class="text"><a href="mailto:hello@Mayaroo.com">hello@Mayaroo.com</a></span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-phone"></i></span>
              <span class="text"><a href="tel:(505)555-0125">(505) 555-0125</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>
  <!-- side toggle end -->

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">

      <!-- Header area start -->
      <header class="header-area-4">
        <div class="header-main">
          <div class="container rr-container-1650">
            <div class="header-area-4__inner">
              <div class="header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/logo-4-dark.png" class="normal-logo" alt="Site Logo">
                </a>
              </div>
              <div class="header__button d-xl-none">
                <div class="header__navicon">
                  <button class="side-toggle"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/header/icon.svg" alt="image"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Header area end -->

      <!-- Mobile menu area start -->
      <div class="header__nav d-xl-none">
        <nav class="main-menu">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => 'redixo_fallback_menu',
              'items_wrap' => '<ul>%3$s</ul>',
          ));
          ?>
        </nav>
      </div>
      <!-- Mobile menu area end -->
