# Redixo WordPress Theme

A WordPress theme based on the Redixo HTML template (index-4.html design).

## Installation

1. Upload the `redixo_theme` folder to your WordPress `/wp-content/themes/` directory
2. Activate the theme through the 'Appearance' menu in WordPress
3. Go to Appearance > Menus and create a menu, then assign it to "Primary Menu" location

## Required Pages Setup

Create the following pages in WordPress with these exact slugs:

- **about** - About Us page (use "About Page" template)
- **blog** - Blog listing page (use "Blog Page" template)  
- **contact** - Contact page (use "Contact Page" template)
- **portfolio** - Portfolio page (use "Portfolio Page" template)
- **service** - Service page (use "Service Page" template)
- **team** - Team page (use "Team Page" template)

### How to Create Pages:

1. Go to Pages > Add New
2. Create a new page with the slug name (e.g., "about")
3. In the Page Attributes box, select the corresponding template (e.g., "About Page")
4. Publish the page
5. Repeat for all pages listed above

## Home Page Setup

The theme uses `front-page.php` which displays the index-4.html design as the home page. 

To set it up:
1. Go to Settings > Reading
2. Set "Your homepage displays" to "A static page"
3. Select your home page (or create one if needed)
4. The front-page.php template will automatically be used

## Menu Setup

1. Go to Appearance > Menus
2. Create a new menu or edit an existing one
3. Add pages to the menu (Home, About, Portfolio, Blog, Service, Team, Contact)
4. Assign the menu to "Primary Menu" location
5. Save the menu

## Assets

All theme assets (CSS, JS, images) are located in:
- `/assets/css/` - Stylesheets
- `/assets/js/` - JavaScript files
- `/assets/imgs/` - Images
- `/assets/vandor/` - Third-party libraries

## Features

- Responsive design
- Custom page templates for all major pages
- WordPress menu integration
- Contact form support (works with Contact Form 7 plugin)
- Blog post support
- Portfolio support (can use custom post type or regular posts)

## Template Files

- `front-page.php` - Home page (index-4.html design)
- `page-about.php` - About page template
- `page-blog.php` - Blog listing template
- `page-contact.php` - Contact page template
- `page-portfolio.php` - Portfolio listing template
- `page-service.php` - Service page template
- `page-team.php` - Team page template
- `404.php` - 404 error page template
- `header.php` - Header template
- `footer.php` - Footer template
- `index.php` - Default fallback template

## Notes

- The theme uses the same asset structure as the original HTML template
- All image paths are relative to the theme directory
- Navigation links will work once pages are created with the correct slugs
- The theme includes a fallback menu if no menu is assigned

## Support

For issues or questions, refer to the original HTML template documentation.
