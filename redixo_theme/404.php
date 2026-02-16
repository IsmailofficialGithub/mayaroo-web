<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<main>
  <!-- error area start  -->
  <section class="error-area">
    <div class="container large">
      <div class="error-area-inner ">
        <div class="section-content">
          <div class="section-title-wrapper">
            <div class="subtitle-wrapper">
              <span class="section-subtitle">404</span>
            </div>
            <div class="title-wrapper">
              <h2 class="section-title ">Oops sorry! page
                didn't found</h2>
            </div>
          </div>
          <div class="btn-wrapper">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="rr-btn">
              <span class="btn-wrap">
                <span class="text-one">Back - To - Home</span>
                <span class="text-two">Back - To - Home</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- error area end  -->
</main>

<?php get_footer(); ?>
