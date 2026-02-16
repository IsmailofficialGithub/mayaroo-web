<?php
/**
 * Template Name: Coming Soon Page
 * Template for Coming Soon page
 */
get_header(); ?>

<main>
  <section class="coming-soon-section">
    <div class="coming-soon-wrapper">
      <div class="container">
        <div class="coming-soon-content fade-wrapper">
          <div class="coming-soon-logo fade-top">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/logo.png" class="show-light" alt="Mayaroo Logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo/logo-4-dark.png" class="show-dark" alt="Mayaroo Logo">
            </a>
          </div>
          
          <div class="coming-soon-main-content fade-top">
            <h3 class="sub-title">{Coming Soon}</h3>
            <h1 class="title rr-char-animation">Something Amazing is <br>On the Way</h1>
            <p class="decs">We're crafting something special for you. Stay tuned for an incredible experience that will transform your digital presence.</p>
          </div>

          <div class="coming-soon-countdown fade-top" id="countdown">
            <div class="countdown-item">
              <div class="countdown-number" id="days">00</div>
              <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-item">
              <div class="countdown-number" id="hours">00</div>
              <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-item">
              <div class="countdown-number" id="minutes">00</div>
              <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item">
              <div class="countdown-number" id="seconds">00</div>
              <div class="countdown-label">Seconds</div>
            </div>
          </div>

          <div class="coming-soon-form fade-top">
            <h3 class="form-title">Get Notified When We Launch</h3>
            <form id="coming-soon-form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
              <input type="hidden" name="action" value="redixo_coming_soon_subscribe">
              <?php wp_nonce_field('redixo_coming_soon_subscribe', 'redixo_coming_soon_nonce'); ?>
              <div class="form-group">
                <input type="email" name="email" id="coming-soon-email" placeholder="Enter your email address" required>
                <button type="submit" class="rr-btn">
                  <span class="btn-wrap">
                    <span class="text-one">Notify Me</span>
                    <span class="text-two">Notify Me</span>
                  </span>
                </button>
              </div>
              <div id="coming-soon-message"></div>
            </form>
          </div>

          <div class="coming-soon-social fade-top">
            <h4 class="social-title">Follow Us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://x.com/?lang=en" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer" aria-label="Dribbble">
                <i class="fab fa-dribbble"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.coming-soon-section {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 80px 20px;
  background: var(--rr-common-white, #fff);
  position: relative;
  overflow: hidden;
}

.coming-soon-section.dark-mode {
  background: var(--rr-common-black, #000);
}

.coming-soon-wrapper {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
}

.coming-soon-content {
  text-align: center;
}

.coming-soon-logo {
  margin-bottom: 60px;
}

.coming-soon-logo img {
  max-width: 200px;
  height: auto;
}

.coming-soon-main-content {
  margin-bottom: 60px;
}

.coming-soon-main-content .sub-title {
  font-size: 16px;
  font-weight: 500;
  color: var(--rr-theme-primary, #6366f1);
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.coming-soon-main-content .title {
  font-size: 64px;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 30px;
  color: var(--rr-common-black, #000);
}

.coming-soon-section.dark-mode .coming-soon-main-content .title {
  color: var(--rr-common-white, #fff);
}

.coming-soon-main-content .decs {
  font-size: 18px;
  line-height: 1.6;
  color: var(--rr-text-body, #666);
  max-width: 600px;
  margin: 0 auto;
}

.coming-soon-section.dark-mode .coming-soon-main-content .decs {
  color: var(--rr-text-body-dark, #999);
}

.coming-soon-countdown {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin-bottom: 60px;
  flex-wrap: wrap;
}

.countdown-item {
  text-align: center;
}

.countdown-number {
  font-size: 48px;
  font-weight: 700;
  color: var(--rr-theme-primary, #6366f1);
  line-height: 1;
  margin-bottom: 10px;
  min-width: 80px;
}

.countdown-label {
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--rr-text-body, #666);
  font-weight: 500;
}

.coming-soon-section.dark-mode .countdown-label {
  color: var(--rr-text-body-dark, #999);
}

.coming-soon-form {
  margin-bottom: 60px;
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
}

.form-title {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 25px;
  color: var(--rr-common-black, #000);
}

.coming-soon-section.dark-mode .form-title {
  color: var(--rr-common-white, #fff);
}

.coming-soon-form .form-group {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
}

.coming-soon-form input[type="email"] {
  flex: 1;
  padding: 18px 24px;
  border: 2px solid var(--rr-border-1, #e5e7eb);
  border-radius: 8px;
  font-size: 16px;
  background: var(--rr-common-white, #fff);
  color: var(--rr-common-black, #000);
  transition: all 0.3s ease;
}

.coming-soon-section.dark-mode .coming-soon-form input[type="email"] {
  background: var(--rr-common-black, #000);
  border-color: var(--rr-border-dark, #333);
  color: var(--rr-common-white, #fff);
}

.coming-soon-form input[type="email"]:focus {
  outline: none;
  border-color: var(--rr-theme-primary, #6366f1);
}

.coming-soon-form .rr-btn {
  white-space: nowrap;
}

#coming-soon-message {
  font-size: 14px;
  margin-top: 10px;
  min-height: 20px;
}

#coming-soon-message.success {
  color: #10b981;
}

#coming-soon-message.error {
  color: #ef4444;
}

.coming-soon-social {
  margin-top: 40px;
}

.social-title {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 20px;
  color: var(--rr-text-body, #666);
}

.coming-soon-section.dark-mode .social-title {
  color: var(--rr-text-body-dark, #999);
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.social-links a {
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: var(--rr-bg-1, #f3f4f6);
  color: var(--rr-text-body, #666);
  font-size: 18px;
  transition: all 0.3s ease;
  text-decoration: none;
}

.coming-soon-section.dark-mode .social-links a {
  background: var(--rr-bg-dark, #1a1a1a);
  color: var(--rr-text-body-dark, #999);
}

.social-links a:hover {
  background: var(--rr-theme-primary, #6366f1);
  color: var(--rr-common-white, #fff);
  transform: translateY(-3px);
}

@media (max-width: 768px) {
  .coming-soon-main-content .title {
    font-size: 36px;
  }

  .coming-soon-countdown {
    gap: 20px;
  }

  .countdown-number {
    font-size: 36px;
    min-width: 60px;
  }

  .coming-soon-form .form-group {
    flex-direction: column;
  }

  .coming-soon-form .rr-btn {
    width: 100%;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Set target date to 30 days from now
  const now = new Date();
  const targetDate = new Date(now.getTime() + (30 * 24 * 60 * 60 * 1000)).getTime();

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      document.getElementById('days').textContent = '00';
      document.getElementById('hours').textContent = '00';
      document.getElementById('minutes').textContent = '00';
      document.getElementById('seconds').textContent = '00';
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById('days').textContent = String(days).padStart(2, '0');
    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
  }

  // Update countdown every second
  updateCountdown();
  setInterval(updateCountdown, 1000);

  // Handle form submission
  const form = document.getElementById('coming-soon-form');
  const messageDiv = document.getElementById('coming-soon-message');

  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('coming-soon-email').value;
      const formData = new FormData(form);

      messageDiv.textContent = '';
      messageDiv.className = '';

      fetch('<?php echo esc_url(admin_url('admin-post.php')); ?>', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        if (data.success) {
          messageDiv.textContent = data.data && data.data.message ? data.data.message : 'Thank you! We\'ll notify you when we launch.';
          messageDiv.className = 'success';
          form.reset();
        } else {
          messageDiv.textContent = data.data && data.data.message ? data.data.message : 'Something went wrong. Please try again.';
          messageDiv.className = 'error';
        }
      })
      .catch(error => {
        messageDiv.textContent = 'Something went wrong. Please try again.';
        messageDiv.className = 'error';
        console.error('Error:', error);
      });
    });
  }

  // Check for dark mode
  const body = document.body;
  if (body.classList.contains('dark-mode') || document.documentElement.classList.contains('dark')) {
    document.querySelector('.coming-soon-section').classList.add('dark-mode');
  }
});
</script>

<?php get_footer(); ?>
