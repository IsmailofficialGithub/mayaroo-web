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

  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

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
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="rr-btn">
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

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
