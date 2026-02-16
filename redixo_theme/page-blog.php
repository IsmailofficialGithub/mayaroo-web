<?php
/**
 * Template Name: Blog Page
 * Template for Blog listing page
 */
get_header(); ?>

<main>
  <section class="breadcrumb-2">
    <div class="breadcrumb-2__wrapper">
      <div class="container rr-container-1650">
        <div class="sub-heading">
          <h3 class="sub-title">{Blog}</h3>
        </div>
        <div class="breadcrumb-2__content-box">
          <div class="breadcrumb-2__heading">
            <h3 class="title">Learn our recent <br>
              articles</h3>
          </div>
          <div class="content">
            <p class="decs">Inspiring young audiences across the country <br> to order their groceries and fresh
              meals <br> online.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog-page__area section-space-bottom">
    <div class="blog-page__wrapper">
      <div class="container rr-container-1650">
        <div class="blog-page__inner">
          <div class="blog-page__list">
            <ul>
              <?php
              $categories = get_categories();
              foreach ($categories as $category) {
                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
              }
              ?>
            </ul>
          </div>
          <div class="blog-page__item-box">
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post();
                ?>
                <div class="blog-page__item">
                  <div class="thumb">
                    <?php if (has_post_thumbnail()) : ?>
                      <img data-speed="0.9" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                      <img data-speed="0.9" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/blog/blog-page-1.jpg" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                  </div>
                  <div class="content">
                    <div class="meta">
                      <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                        foreach ($categories as $category) {
                          echo '<span>' . esc_html($category->name) . '</span>';
                        }
                      }
                      ?>
                    </div>
                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="author">
                      <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                      <h3 class="name"><span><?php the_author(); ?></span> — <?php echo get_the_date('Y'); ?></h3>
                    </div>
                  </div>
                </div>
                <?php
              endwhile;
            else :
              ?>
              <p><?php esc_html_e('No posts found.', 'redixo'); ?></p>
              <?php
            endif;
            ?>
          </div>
          <?php
          // Pagination
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('Previous', 'redixo'),
            'next_text' => __('Next', 'redixo'),
          ));
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
