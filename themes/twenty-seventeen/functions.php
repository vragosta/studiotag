<?php
/**
 * Functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Tag Wall - Twenty Seventeen
 * @since   0.1.0
 * @uses    define(), get_template_directory_uri(), get_template_directory(), require_once(), setup()
 */

// Useful global constants.
define( 'STUDIO_WALL_VERSION', '0.1.0' );
define( 'STUDIO_WALL_TEMPLATE_URL', get_template_directory_uri() );
define( 'STUDIO_WALL_PATH', get_template_directory() . '/' );
define( 'STUDIO_WALL_INC', STUDIO_WALL_PATH . 'includes/' );
define( 'STUDIO_WALL_SITE_ADMIN', 1 );

// Include compartmentalized functions.
require_once STUDIO_WALL_INC . 'functions/core.php';

// Include helper functions.
require_once STUDIO_WALL_INC . 'functions/helpers.php';

// Include various metabox files.
require_once STUDIO_WALL_INC . 'metaboxes/metabox-system.php';
require_once STUDIO_WALL_INC . 'metaboxes/metabox-user.php';

// Run the setup functions.
Tag_wall\Twenty_Seventeen\Core\setup();
