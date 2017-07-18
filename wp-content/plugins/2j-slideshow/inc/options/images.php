<?php
/*  
 * 2J SlideShow		http://2joomla.net/wordpress
 * Version:           1.2.19 - 48663
 * Author:            2J Team (c)
 * Author URI:        http://2joomla.net/wordpress
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Date:              Thu, 28 Jul 2016 09:05:13 GMT
 */

$tools_metabox = new_cmb2_box( array(
    'id'            => TWOJ_SLIDESHOW_PREFIX . 'images_metabox',
    'title'         => __( 'Tools', 'twoj_slideshow' ),
    'object_types'  => array( TWOJ_SLIDESHOW_TYPE_POST ),
    'context'       => 'normal',
    'priority'      => 'high',
    'closed'        => twoj_slideshow_set_checkbox_default_for_new_post(0),
    'show_names'	=> false,
));

$tools_metabox->add_field(array(
    'button' => __( 'Manage Slides', 'twoj_slideshow' ),
    'id'   => TWOJ_SLIDESHOW_PREFIX . 'slideshowImages', 
    'type' => 'twoj_slideshow',
    'sanitization_cb' => 'twoj_slideshow_field_sanitise'
));