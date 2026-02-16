<?php
/**
 * Template Name: Contact Page
 * Template for Contact page
 */
get_header(); ?>

<main>
  <section class="breadcrumb-2 contact-pages">
    <div class="breadcrumb-2__wrapper">
      <div class="container ">
        <div class="sub-heading">
          <h3 class="sub-title"></h3>
        </div>
        <div class="breadcrumb-2__content-box">
          <div class="breadcrumb-2__heading">
            <h1 class="title">Contact Our Digital Marketing Agency for Real Growth Today</h1>
          </div>
          <div class="content">
            <h2 class="decs">Ready to Climb Higher? Let's Build Your Custom Growth Strategy Together Today</h2>
            <p class="decs">We are real people building real relationships. You don't have to navigate a complex phone tree to reach us—we are just one message away.</p>
            <p class="decs">You can schedule a direct 15-minute Discovery Call to audit your presence, or simply fill out the form below to tell us about your vision. Our Digital Marketing Agency is ready to help you improve your ROI.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact area start  -->
  <div class="contact-page">
    <div class="container">
      <div class="contact-page-inner">
        <div class="section-content-wrapper fade-anim">
          <div class="row">
            <div class="col-md-4">
              <div class="direct-contact">
                <h3 class="title">Reach Us Directly</h3>
                <p>Prefer to talk right now?</p>
                <div class="contact-meta">
                  <div class="contact-item">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <span class="text">
                      <strong>Email:</strong><br>
                      <a href="mailto:hello@Mayaroo.com">hello@Mayaroo.com</a>
                    </span>
                  </div>
                  <div class="contact-item">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <span class="text">
                      <strong>Phone/WhatsApp:</strong><br>
                      <a href="tel:(505)555-0125">(505) 555-0125</a>
                    </span>
                  </div>
                  <div class="contact-item">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="text">
                      <strong>Locations:</strong><br>
                      UAE (Remote)
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="contact-wrap">
                <h3 class="title">Send Us a Message</h3>
                <?php
                // Use Contact Form 7 or custom form
                if (function_exists('wpcf7_contact_form')) {
                  echo do_shortcode('[contact-form-7]');
                } else {
                  // Fallback form
                  ?>
                  <form id="contact__form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="redixo_contact_form">
                    <?php wp_nonce_field('redixo_contact_form', 'redixo_contact_nonce'); ?>
                    <div class="contact-formwrap">
                      <div class="contact-formfield">
                        <label>Name *</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                      </div>
                      <div class="contact-formfield">
                        <label>Business Email *</label>
                        <input type="email" name="email" id="email" placeholder="Enter your business email" required>
                      </div>
                      <div class="contact-formfield">
                        <label>Phone / WhatsApp *</label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
                      </div>
                      <div class="contact-formfield">
                        <label>Business Name / Website</label>
                        <input type="text" name="business" id="business" placeholder="Enter your business name or website">
                      </div>
                      <div class="contact-formfield">
                        <label>What Service Do You Need? (Select One)</label>
                        <select name="service" id="service" class="nice-select" required>
                          <option value="">Select a service</option>
                          <option value="I need Branding / Rebranding">I need Branding / Rebranding</option>
                          <option value="Digital Marketing / Ads">Digital Marketing / Ads</option>
                          <option value="Web Development">Web Development</option>
                          <option value="AI Automation">AI Automation</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="contact-formfield message">
                        <label>Your Message</label>
                        <textarea name="message" id="message" rows="8" placeholder="Write your message" required></textarea>
                      </div>
                    </div>
                    <div class="submit-btn">
                      <button type="submit" class="rr-btn">
                        <span class="btn-wrap">
                          <span class="text-one">BOOK MY FREE CONSULTATION</span>
                          <span class="text-two">BOOK MY FREE CONSULTATION</span>
                        </span>
                      </button>
                    </div>
                    <div id="response-message"></div>
                  </form>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- contact area end  -->

  <!-- contact-us area start  -->
  <section class="contact-us section-space">
    <div class="container">
      <div class="contact-us__wrapper">
        <div class="contact-us__info">
          <div class="contact-us__item">
            <h3 class="title">Montreal</h3>
            <a class="location" href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">438 McGill street #200
              Montreal, Quebec <br>
              H2Y 2G1</a>

            <a class="phone" href="tell:1226126877">+1 22 6126877</a>
            <a href="mailto:hello@Mayaroo.com">hello@Mayaroo.com</a>
          </div>
          <div class="contact-us__item">
            <h3 class="title">Toronto</h3>
            <a class="location" href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">67 Mowat Avenue #433
              Toronto, Ontario <br>
              M6K 3E3</a>

            <a class="phone" href="tell:1363126827">+1 36 3126827</a>
            <a href="mailto:hello@Mayaroo.com">hello@Mayaroo.com</a>
          </div>
          <div class="contact-us__item">
            <h3 class="title">New York</h3>
            <a class="location" href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">407 N. Maple Drive, Ground 1
              Beverly Hills, CA <br>
              90210</a>

            <a class="phone" href="tell:1226126877">+1 22 6126877</a>
            <a href="mailto:hello@Mayaroo.com">hello@Mayaroo.com</a>
          </div>
        </div>
        <div class="contact-us__offices">
          <h3 class="title"> Offices <br> world-wide
          </h3>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">Let's talk</a>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-us area end  -->

  <!-- FAQ area start  -->
  <section class="faq-area section-space">
    <div class="container rr-container-1650">
      <div class="faq-area-inner">
        <div class="section-title-wrapper fade-anim">
          <div class="title-wrapper">
            <h2 class="section-title rr_title_anim">Frequently Asked Questions</h2>
          </div>
        </div>
        <div class="accordion-wrapper fade-anim">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqOne" aria-expanded="false" aria-controls="faqOne">
                <span class="title"><span>Q1</span>How quickly can your Digital Marketing Agency start on my project?</span>
              </button>
              <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>We value agility, just like the Markhor. Once we complete the discovery call and sign the agreement, we typically start onboarding within 24 to 48 hours.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                <span class="title"><span>Q2</span>Do you offer physical meetings in the UAE?</span>
              </button>
              <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Currently, we operate remotely for UAE clients to keep costs efficient while maintaining premium quality. However, we offer seamless video consultations and regular reporting calls.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                <span class="title"><span>Q3</span>Is the initial consultation really free?</span>
              </button>
              <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Yes. We believe in proving value first. The consultation is a chance for us to understand your terrain and for you to see if we are the right fit for your climb.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                <span class="title"><span>Q4</span>Can I hire you for just one service, like Branding or SEO?</span>
              </button>
              <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Absolutely. While we are a full-service Digital Marketing Agency, you can hire us for specific needs like Brand Identity, Meta Ads, or AI Automation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ area end  -->

</main>

<?php get_footer(); ?>
