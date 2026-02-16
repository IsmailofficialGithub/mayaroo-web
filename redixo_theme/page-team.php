<?php
/**
 * Template Name: Team Page
 * Template for Team page
 */
get_header(); ?>

<main>
  <section class="breadcrumb-2">
    <div class="breadcrumb-2__wrapper">
      <div class="container rr-container-1650">
        <div class="sub-heading">
          <h3 class="sub-title">{Team}</h3>
        </div>
        <div class="breadcrumb-2__content-box">
          <div class="breadcrumb-2__heading">
            <h3 class="title">Meet Our Team</h3>
          </div>
          <div class="content">
            <p class="decs">Talented professionals dedicated to <br> delivering exceptional results.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team-section-4 rr-bg-color section-space-top fade-wrapper">
    <div class="container rr-container-1650">
      <div class="team-section-4__info">
        <h3 class="title rr-char-animation">Meet squad (06)</h3>
      </div>
      <div class="team-section-4__wrapper fade-top">
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-1.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Cristian Vargas</a></h4>
            <h5 class="text">CEO & Founder</h5>
          </div>
        </div>
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-2.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Joey Dello Russo</a></h4>
            <h5 class="text">Lead Designer</h5>
          </div>
        </div>
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-3.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Michelle Gasparov</a></h4>
            <h5 class="text">Lead Designer</h5>
          </div>
        </div>
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-4.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Courtney Gayer</a></h4>
            <h5 class="text">Head of Marketing</h5>
          </div>
        </div>
      </div>
      <div class="team-section-4__wrapper fade-top">
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-5.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">David Kushner</a></h4>
            <h5 class="text">WP Developer</h5>
          </div>
        </div>
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-6.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Sara Lenartowicz</a></h4>
            <h5 class="text">WP Developer</h5>
          </div>
        </div>
        <div class="team-section-4__item">
          <div class="team-section-4__thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/team/team-4-img-7.jpg" alt="img not found">
          </div>
          <div class="team-section-4__content">
            <h4 class="title"><a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Christian Carlson</a></h4>
            <h5 class="text">Brand Designer</h5>
          </div>
        </div>
        <div class="team-section-4__item">
          <div class="team-section-4__btn">
            <a href="<?php echo esc_url(redixo_get_page_permalink('team')); ?>">Explore all team <br>
              players (15+)</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
