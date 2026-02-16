<?php
/**
 * Redixo Theme Functions
 */

function redixo_theme_scripts() {
    $theme_uri = get_template_directory_uri();
    
    // Styles
    wp_enqueue_style('bootstrap', $theme_uri . '/assets/vandor/bootstrap/bootstrap.min.css', array(), '1.0.0');
    wp_enqueue_style('fontawesome', $theme_uri . '/assets/vandor/fontawesome/fontawesome-pro.min.css', array(), '1.0.0');
    wp_enqueue_style('swiper', $theme_uri . '/assets/vandor/swiper/swiper-bundle.min.css', array(), '1.0.0');
    wp_enqueue_style('meanmenu', $theme_uri . '/assets/vandor/menu/meanmenu.min.css', array(), '1.0.0');
    wp_enqueue_style('magnific-popup', $theme_uri . '/assets/vandor/popup/magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style('odometer', $theme_uri . '/assets/css/odometer.min.css', array(), '1.0.0');
    wp_enqueue_style('nice-select', $theme_uri . '/assets/vandor/nice-select/nice-select.css', array(), '1.0.0');
    wp_enqueue_style('redixo-style', $theme_uri . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0.0');

    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-bundle', $theme_uri . '/assets/vandor/bootstrap/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', $theme_uri . '/assets/vandor/popup/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('swiper', $theme_uri . '/assets/vandor/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gsap', $theme_uri . '/assets/vandor/gsap/gsap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scroll-smoother', $theme_uri . '/assets/vandor/gsap/ScrollSmoother.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('scroll-trigger', $theme_uri . '/assets/vandor/gsap/ScrollTrigger.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('split-text', $theme_uri . '/assets/vandor/gsap/SplitText.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('split-type', $theme_uri . '/assets/vandor/gsap/SplitType.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('custom-ease', $theme_uri . '/assets/vandor/gsap/customEase.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('meanmenu', $theme_uri . '/assets/vandor/menu/jquery.meanmenu.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('backtop', $theme_uri . '/assets/vandor/backtop/backToTop.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('nice-select', $theme_uri . '/assets/vandor/nice-select/nice-select.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('odometer', $theme_uri . '/assets/js/odometer.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magiccursor', $theme_uri . '/assets/js/vendor/magiccursor.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', $theme_uri . '/assets/js/vendor/waypoints.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('common-js', $theme_uri . '/assets/vandor/common-js/common.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('redixo-main', $theme_uri . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'redixo_theme_scripts');

function redixo_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'redixo'),
    ));
}
add_action('after_setup_theme', 'redixo_setup');

// Helper function to get page permalink by slug
if (!function_exists('redixo_get_page_permalink')) {
    function redixo_get_page_permalink($page_slug) {
        if (empty($page_slug)) {
            return esc_url(home_url('/'));
        }
        $page = get_page_by_path($page_slug, OBJECT, 'page');
        if ($page && isset($page->ID) && $page->ID) {
            $permalink = get_permalink($page->ID);
            return $permalink ? esc_url($permalink) : esc_url(home_url('/'));
        }
        return esc_url(home_url('/'));
    }
}

// Fallback menu function
function redixo_fallback_menu() {
    echo '<ul>';
    echo '<li class="menu-item-has-children"><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li class="menu-item-has-children"><a href="#">Pages</a>';
    echo '<ul class="dp-menu">';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('about')) . '">About Us</a></li>';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('team')) . '">Team</a></li>';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('service')) . '">Service</a></li>';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('404')) . '">404</a></li>';
    echo '</ul></li>';
    echo '<li class="menu-item-has-children"><a href="#">Portfolio</a>';
    echo '<ul class="dp-menu">';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('portfolio')) . '">Portfolio</a></li>';
    echo '</ul></li>';
    echo '<li class="menu-item-has-children"><a href="#">Blog</a>';
    echo '<ul class="dp-menu">';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('blog')) . '">Blog</a></li>';
    echo '</ul></li>';
    echo '<li><a href="' . esc_url(redixo_get_page_permalink('contact')) . '">Contact</a></li>';
    echo '</ul>';
}

// Coming Soon Email Subscription Handler
function redixo_coming_soon_subscribe() {
    // Verify nonce
    if (!isset($_POST['redixo_coming_soon_nonce']) || !wp_verify_nonce($_POST['redixo_coming_soon_nonce'], 'redixo_coming_soon_subscribe')) {
        wp_send_json_error(array('message' => 'Security check failed.'));
        return;
    }

    // Get email
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

    if (empty($email) || !is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
        return;
    }

    // Store email (you can customize this to save to database, send to email service, etc.)
    // For now, we'll just log it or you can integrate with MailChimp, SendGrid, etc.
    
    // Option 1: Save to WordPress options (simple storage)
    $subscribers = get_option('redixo_coming_soon_subscribers', array());
    if (!in_array($email, $subscribers)) {
        $subscribers[] = $email;
        update_option('redixo_coming_soon_subscribers', $subscribers);
    }

    // Option 2: Send email notification to admin
    $admin_email = get_option('admin_email');
    $subject = 'New Coming Soon Subscription';
    $message = "A new user subscribed to the coming soon page:\n\nEmail: {$email}";
    wp_mail($admin_email, $subject, $message);

    wp_send_json_success(array('message' => 'Thank you! We\'ll notify you when we launch.'));
}
add_action('admin_post_redixo_coming_soon_subscribe', 'redixo_coming_soon_subscribe');
add_action('admin_post_nopriv_redixo_coming_soon_subscribe', 'redixo_coming_soon_subscribe');

// Coming Soon Page - Show on homepage (/), normal site on /test/
function redixo_coming_soon_template($template) {
    // Don't override admin pages, AJAX requests, or API calls
    if (is_admin() || wp_doing_ajax() || defined('DOING_CRON') || defined('WP_CLI')) {
        return $template;
    }

    // Get the path from REQUEST_URI
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $parsed_url = parse_url($request_uri);
    $path = isset($parsed_url['path']) ? trim($parsed_url['path'], '/') : '';
    
    // Remove query string from path
    if (strpos($path, '?') !== false) {
        $path = substr($path, 0, strpos($path, '?'));
    }

    // Get coming soon template path
    $coming_soon_template = get_template_directory() . '/page-coming-soon.php';
    
    // Check if template file exists
    if (!file_exists($coming_soon_template)) {
        return $template;
    }

    // Check if path is /test/ or starts with test/ - show main homepage template
    if ($path === 'test' || strpos($path, 'test/') === 0) {
        // For /test/, show the normal homepage template (front-page.php)
        $front_page_template = get_template_directory() . '/front-page.php';
        if (file_exists($front_page_template)) {
            return $front_page_template;
        }
        // Fallback to index.php if front-page.php doesn't exist
        $index_template = get_template_directory() . '/index.php';
        if (file_exists($index_template)) {
            return $index_template;
        }
        // If neither exists, use normal template
        return $template;
    }

    // Check if this is the homepage (root /)
    $is_homepage = false;
    
    // Check if path is empty (root)
    if (empty($path) || $path === '' || $path === '/') {
        $is_homepage = true;
    }
    // Check WordPress functions
    elseif (is_front_page() || is_home()) {
        // But only if path is not 'test'
        if ($path !== 'test') {
            $is_homepage = true;
        }
    }
    // Check if REQUEST_URI is just / or empty
    elseif (trim($request_uri, '/') === '' || $request_uri === '/') {
        $is_homepage = true;
    }

    // Show coming soon on homepage
    if ($is_homepage) {
        return $coming_soon_template;
    }

    // For all other pages, use normal template
    return $template;
}
add_filter('template_include', 'redixo_coming_soon_template', 99);

// Backup: Handle /test/ route to show main page
function redixo_test_page_handler() {
    // Don't handle admin pages, AJAX requests, or API calls
    if (is_admin() || wp_doing_ajax() || defined('DOING_CRON') || defined('WP_CLI')) {
        return;
    }

    // Get the path
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $parsed_url = parse_url($request_uri);
    $path = isset($parsed_url['path']) ? trim($parsed_url['path'], '/') : '';
    
    // Remove query string
    if (strpos($path, '?') !== false) {
        $path = substr($path, 0, strpos($path, '?'));
    }

    // If path is /test/, set up query to show homepage content
    if ($path === 'test' || strpos($path, 'test/') === 0) {
        global $wp_query;
        
        // Set up query vars to make it act like homepage
        $wp_query->is_404 = false;
        $wp_query->is_page = false;
        $wp_query->is_home = true;
        $wp_query->is_front_page = true;
        
        // Load front-page.php if it exists
        $front_page_template = get_template_directory() . '/front-page.php';
        if (file_exists($front_page_template)) {
            include($front_page_template);
            exit;
        }
    }
}
add_action('template_redirect', 'redixo_test_page_handler', 1);
