<?php
/**
 * Test file to check if theme loads without errors
 * Delete this file after testing
 */

// Test if WordPress is loaded
if (!defined('ABSPATH')) {
    die('Direct access not allowed');
}

// Test if functions are loaded
if (function_exists('redixo_get_page_permalink')) {
    echo 'Function redixo_get_page_permalink exists';
} else {
    echo 'ERROR: Function redixo_get_page_permalink does NOT exist';
}

// Test if theme support is loaded
if (function_exists('redixo_setup')) {
    echo '<br>Function redixo_setup exists';
} else {
    echo '<br>ERROR: Function redixo_setup does NOT exist';
}
