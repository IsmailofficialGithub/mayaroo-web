# Debugging Guide

If you're getting a critical error, follow these steps:

## Step 1: Enable WordPress Debug Mode

Add these lines to your `wp-config.php` file (before "That's all, stop editing!"):

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
```

## Step 2: Check the Error Log

After enabling debug mode, check the file:
`/wp-content/debug.log`

This will show you the exact error message.

## Step 3: Common Issues

### Issue: "Call to undefined function"
- **Solution**: Make sure all WordPress functions are being called correctly
- Check that `functions.php` doesn't have syntax errors

### Issue: "Fatal error: Uncaught Error"
- **Solution**: Usually a PHP syntax error or missing file
- Check all PHP files for syntax errors

### Issue: Theme doesn't appear in WordPress
- **Solution**: Make sure `style.css` has the correct header:
```css
/*
Theme Name: Redixo Custom Theme
Author: Antigravity AI
Description: A professional conversion of the Redixo HTML template.
Version: 1.0
Text Domain: redixo
*/
```

## Step 4: Test with Minimal Theme

If the error persists, try activating a default WordPress theme first to make sure WordPress itself is working.

## Step 5: Check PHP Version

Make sure your server is running PHP 7.4 or higher. Check in WordPress admin under Tools > Site Health.

## Step 6: Check File Permissions

Make sure all theme files are readable:
- Files should be: 644
- Directories should be: 755

## Still Having Issues?

Share the exact error message from `debug.log` and I can help fix it!
