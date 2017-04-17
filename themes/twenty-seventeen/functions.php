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
define( 'TAGWALL_VERSION', '0.1.0' );
define( 'TAGWALL_TEMPLATE_URL', get_template_directory_uri() );
define( 'TAGWALL_INC', get_template_directory() . '/includes/' );
define( 'TAGWALL_SITE_ADMIN', 1 );

// Include compartmentalized functions.
require_once TAGWALL_INC . 'functions/core.php';

// Include helper functions.
require_once TAGWALL_INC . 'functions/helpers.php';

//Include essentials functions.
require_once TAGWALL_INC . 'functions/essentials.php';

// Include various metabox files.
require_once TAGWALL_INC . 'metaboxes/metabox-system.php';
require_once TAGWALL_INC . 'metaboxes/metabox-hardware.php';
require_once TAGWALL_INC . 'metaboxes/metabox-user.php';
require_once TAGWALL_INC . 'metaboxes/metabox-glass.php';
require_once TAGWALL_INC . 'metaboxes/metabox-page.php';

// Run the setup functions.
Tag_Wall\Twenty_Seventeen\Core\setup();
