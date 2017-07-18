<?php
/*
	Plugin name: Gallery Video
	Plugin URI: http://total-soft.pe.hu/gallery-video
	Description: Gallery created for those who realy appreciate the beauty and taste. You can display your videos in high quality and best design
	Version: 1.0.6
	Author: Total-Soft
	Author URI: http://total-soft.pe.hu/
	License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/	
 	require_once(dirname(__FILE__) . '/Includes/Total-Soft-Gallery-Video-Widget.php');
 	require_once(dirname(__FILE__) . '/Includes/Total-Soft-Gallery-Video-Ajax.php');

 	add_action('wp_enqueue_scripts',function() {
 		wp_enqueue_script('cwp-main', plugins_url('/JS/modernizr.custom.js', __FILE__), array('jquery', 'jquery-ui-core'));
		wp_enqueue_script( 'Total_Soft_Gallery_Video' );

 		wp_register_style('Total_Soft_Gallery_Video', plugins_url('/CSS/Total-Soft-Gallery-Video-Widget.css',__FILE__ ));
		wp_enqueue_style('Total_Soft_Gallery_Video');	
		wp_register_script('Total_Soft_Gallery_Video',plugins_url('/JS/Total-Soft-Gallery-Video-Widget.js',__FILE__),array('jquery','jquery-ui-core'));
		wp_localize_script('Total_Soft_Gallery_Video', 'object', array('ajaxurl' => admin_url('admin-ajax.php')));
		wp_enqueue_script('Total_Soft_Gallery_Video');
		wp_enqueue_script("jquery");

		wp_register_style('fontawesome-css', plugins_url('/CSS/totalsoft.css', __FILE__)); 
  		wp_enqueue_style('fontawesome-css');
 	});

 	add_action('widgets_init', function() {
 		register_widget('Total_Soft_Gallery_Video');
 	});

	add_action("admin_menu", function() {
		add_menu_page('Admin Menu','Gallery Video', 'manage_options','Total_Soft_Gallery_Video', 'Add_New_Gallery_Video',plugins_url('/Images/admin.png',__FILE__));
 		add_submenu_page('Total_Soft_Gallery_Video', 'Admin Menu', 'Video Manager', 'manage_options', 'Total_Soft_Gallery_Video', 'Add_New_Gallery_Video');
 		add_submenu_page('Total_Soft_Gallery_Video', 'Admin Menu', 'General Options', 'manage_options', 'Total_Soft_Gallery_Video_General', 'Gallery_Video_Options');
	});

	add_action('admin_init', function() {
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('wp-color-picker');

		wp_register_style('Total_Soft_Gallery_Video', plugins_url('/CSS/Total-Soft-Gallery-Video-Admin.css',__FILE__));
		wp_enqueue_style('Total_Soft_Gallery_Video' );	
		wp_register_script('Total_Soft_Gallery_Video', plugins_url('/JS/Total-Soft-Gallery-Video-Admin.js',__FILE__),array('jquery','jquery-ui-core'));
		wp_localize_script('Total_Soft_Gallery_Video','object', array('ajaxurl'=>admin_url('admin-ajax.php')));
		wp_enqueue_script('Total_Soft_Gallery_Video');

		wp_register_style('fontawesome-css', plugins_url('/CSS/totalsoft.css', __FILE__)); 
  		wp_enqueue_style('fontawesome-css');	
	});

	function Add_New_Gallery_Video()
	{
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Gallery-Video-New.php');
	}
	function Gallery_Video_Options()
	{
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Gallery-Video-Settings.php');
	}
	function TotalSoftGalleryVideoInstall()
	{
		require_once(dirname(__FILE__) . '/Includes/Total-Soft-Gallery-Video-Install.php');
	}
	register_activation_hook(__FILE__,'TotalSoftGalleryVideoInstall');

	function Total_SoftGalleryVideo_Short_ID($atts, $content = null)
	{
		$atts=shortcode_atts(
			array(
				"id"=>"1"
			),$atts
		);
		return Total_Soft_Draw_Gallery_Video($atts['id']);
	}
	add_shortcode('Total_Soft_Gallery_Video', 'Total_SoftGalleryVideo_Short_ID');
	function Total_Soft_Draw_Gallery_Video($GalleryVideo)
	{
		ob_start();	
			$args = shortcode_atts(array('name' => 'Widget Area','id'=>'','description'=>'','class'=>'','before_widget'=>'','after_widget'=>'','before_title'=>'','AFTER_TITLE'=>'','widget_id'=>'','widget_name'=>'Total Soft Gallery Video'), $GalleryVideo, 'Total_Soft_Gallery_Video' );
			$Total_Soft_Gallery_Video=new Total_Soft_Gallery_Video;

			$instance=array('Gallery_Video'=>$GalleryVideo);
			$Total_Soft_Gallery_Video->widget($args,$instance);	
			$cont[]= ob_get_contents();
		ob_end_clean();	
		return $cont[0];		
	}
?>