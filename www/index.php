<?php
// Front to the WordPress application. This file doesn't do anything, but loads
// wp-blog-header.php which does and tells WordPress to load the theme.

define('WP_USE_THEMES', true);
require( dirname( __FILE__ ) . '/wp-core/wp-blog-header.php' );
