<?php
/**
 * Template Name: Portfolio Page
 * Template for Portfolio listing page
 */
get_header(); ?>

<main>
  <section class="breadcrumb-2">
    <div class="breadcrumb-2__wrapper">
      <div class="container rr-container-1650">
        <div class="sub-heading">
          <h3 class="sub-title">{Portfolio}</h3>
        </div>
        <div class="breadcrumb-2__content-box">
          <div class="breadcrumb-2__heading">
            <h3 class="title">Our Recent <br>
              Projects</h3>
          </div>
          <div class="content">
            <p class="decs">Showcasing our latest work and creative <br> solutions for clients across various <br> industries.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portfolio-page__area section-space-bottom fade-wrapper">
    <div class="container rr-container-1650">
      <div class="portfolio-page__wrapper fade-top">
        <?php
        $portfolio_query = new WP_Query(array(
          'post_type' => 'portfolio',
          'posts_per_page' => -1,
          'post_status' => 'publish'
        ));

        if (!$portfolio_query->have_posts()) {
          // Fallback: Use regular posts if portfolio post type doesn't exist
          $portfolio_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'post_status' => 'publish'
          ));
        }

        if ($portfolio_query->have_posts()) :
          while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            ?>
            <div class="portfolio-page__item">
              <div class="thumb" data-cursor-text="View Project">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>" data-speed="0.9">
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/project/feature-4-img-1.jpg" alt="<?php the_title_attribute(); ?>" data-speed="0.9">
                  <?php endif; ?>
                </a>
              </div>
              <div class="content">
                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span><?php echo get_the_date('Y'); ?> - <?php echo get_post_type(); ?></span>
              </div>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        else :
          ?>
          <p><?php esc_html_e('No portfolio items found.', 'redixo'); ?></p>
          <?php
        endif;
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
