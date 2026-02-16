
      <!-- footer area start  -->
      <footer class="footer-area-4 rr-bg-color ">
        <div class="footer-area-4__wrapper">
          <div class="container rr-container-1650">
            <div class="footer-area-4__top">
              <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-6">
                  <div class="footer-area-4__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon/footer-4-logo.png" alt="icon"></a>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                  <div class="footer-area-4__content">
                    <h4 class="title">Mayaroo is a startup digital agency of design, development and marketing that works
                      friendly with global client
                    </h4>
                    <a href="mailto:info@Mayaroo.com.com">info@Mayaroo.com</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-widget-wrapper-box">
              <div class="footer-widget-wrapper">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-7 col-sm-7">
                    <div class="widget-header">
                      <div class="footer-form mb-20">
                        <form action="#" class="ts-subscribe-form">
                          <input class="form-control" type="email" name="email" placeholder="Enter your email">
                          <input type="hidden" name="action" value="mailchimpsubscribe">
                          <button class="submit"><i class="far fa-arrow-right"></i></button>
                        </form>
                      </div>
                      <p class="text">By subscribing you agree with our <br>
                        <a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('contact') : home_url('/contact')); ?>">Privacy Policy</a>
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5">
                    <div class="footer-widget-box item-2">
                      <h2 class="title">Company</h2>
                      <ul class="footer-nav-list">
                        <li><a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('about') : home_url('/about')); ?>">agency</a></li>
                        <li><a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('service') : home_url('/service')); ?>">Solutions</a></li>
                        <li><a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('team') : home_url('/team')); ?>">Community</a></li>
                        <li><a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('portfolio') : home_url('/portfolio')); ?>">Work</a></li>
                        <li><a href="<?php echo esc_url(function_exists('redixo_get_page_permalink') ? redixo_get_page_permalink('contact') : home_url('/contact')); ?>">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-7 col-sm-7">
                    <div class="footer-widget-box item-3">
                      <h2 class="title">Contact</h2>
                      <ul class="footer-nav-list">
                        <li><a href="mailto:INFO@Mayaroocreative.com">INFO@Mayaroocreative.com</a></li>
                        <li><a href="tel:+1245212354">+1 245 212 354</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-1 col-lg-1 col-md-5 col-sm-5">
                    <div class="footer-widget-box item-4">
                      <h2 class="title">Social</h2>
                      <ul class="footer-nav-list">
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                        <li><a href="https://x.com/?lang=en">Twitter</a></li>
                        <li><a href="https://dribbble.com/">Dribbble</a></li>
                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                        <li><a href="https://www.awwwards.com/">Awwwards</a></li>
                        <li><a href="https://www.youtube.com/">YouTube</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-4-wrapper">
              <div class="footer-4-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon/footer-4-logo-2.png" alt="img not found">
                </a>
              </div>
              <div class="copyright">
                <h3>Copyright © <span><a href="https://rrdevs.net/">rrdevs </a></span>2025</h3>
              </div>
              <div class="timer">
                <div class="date">
                  <h4>terms of use</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- footer area end  -->
    </div>
  </div>

  <?php wp_footer(); ?>

</body>

</html>
