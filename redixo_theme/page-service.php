<?php
/**
 * Template Name: Service Page
 * Template for Service page
 */
get_header(); ?>

<main>
  <section class="breadcrumb-2">
    <div class="breadcrumb-2__wrapper">
      <div class="container rr-container-1650">
        <div class="sub-heading">
          <h3 class="sub-title">{Services}</h3>
        </div>
        <div class="breadcrumb-2__content-box">
          <div class="breadcrumb-2__heading">
            <h3 class="title">Our Services</h3>
          </div>
          <div class="content">
            <p class="decs">Comprehensive digital solutions to help <br> your business grow and succeed.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-page__area section-space-bottom fade-wrapper">
    <div class="container rr-container-1650">
      <div class="service-page__wrapper fade-top">
        <?php
        while (have_posts()) :
          the_post();
          the_content();
        endwhile;
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
