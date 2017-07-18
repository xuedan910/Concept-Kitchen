<?php 
/**
 * integral functions and definitions
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
* Enqueue Scripts.
*/
require get_template_directory() . '/inc/enqueue.php';

/**
 * Redux Framework Options.
 */
require get_template_directory() . '/inc/options.php';

/**
* Theme Welcome Page.
*/
require get_template_directory() . '/inc/welcome/theme-welcome.php';

/**
* Wordpress Bootstrap Nav Walker.
*/
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Custom Comments.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Extras.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Wordpress Customizer.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Register Widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Load WooCommerce Functions.
*/
require get_template_directory() . '/inc/woocommerce.php';

/**
* TGM Plugin Activation.
*/
require get_template_directory() . '/inc/tgm-plugin-activation.php';

add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
ob_start();
get_search_form();
$searchform = ob_get_contents();
ob_end_clean();
/*$items .= '<li>' . $searchform . '</li>'.'<li><span>ENGLISH</span><br><a href="./cn/index.php"><span>CHINESE</span></a></li>';*/
return$items;
}