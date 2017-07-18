<?php
	add_action( 'wp_ajax_TotalSoftGallery_Video_Del', 'TotalSoftGallery_Video_Del_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Del', 'TotalSoftGallery_Video_Del_Callback' );

	function TotalSoftGallery_Video_Del_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name2 WHERE id=%d", $GalleryV_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE GalleryV_ID=%s", $GalleryV_ID));
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_Edit', 'TotalSoftGallery_Video_Edit_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Edit', 'TotalSoftGallery_Video_Edit_Callback' );

	function TotalSoftGallery_Video_Edit_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";

		$Total_Soft_GalleryVManager=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id=%d", $GalleryV_ID));

		print_r($Total_Soft_GalleryVManager);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_Edit_Videos', 'TotalSoftGallery_Video_Edit_Videos_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Edit_Videos', 'TotalSoftGallery_Video_Edit_Videos_Callback' );

	function TotalSoftGallery_Video_Edit_Videos_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s order by id", $GalleryV_ID));

		print_r($Total_Soft_GalleryVVideos);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_VideoOpt_Del', 'TotalSoftGallery_VideoOpt_Del_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_VideoOpt_Del', 'TotalSoftGallery_VideoOpt_Del_Callback' );

	function TotalSoftGallery_VideoOpt_Del_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
		$table_name5 = $wpdb->prefix . "totalsoft_galleryv_gvg";
		$table_name6 = $wpdb->prefix . "totalsoft_galleryv_lvg";
		$table_name7 = $wpdb->prefix . "totalsoft_galleryv_ttvg";
		$table_name8 = $wpdb->prefix . "totalsoft_galleryv_ctpg";
		$table_name9 = $wpdb->prefix . "totalsoft_galleryv_hlg";

		$TotalSoft_GalleryV_Opt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id=%d", $GalleryV_ID));

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name4 WHERE id=%d", $GalleryV_ID));
		if($TotalSoft_GalleryV_Opt[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery')
		{
			$wpdb->query($wpdb->prepare("DELETE FROM $table_name5 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($TotalSoft_GalleryV_Opt[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery')
		{
			$wpdb->query($wpdb->prepare("DELETE FROM $table_name6 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($TotalSoft_GalleryV_Opt[0]->TotalSoftGalleryV_SetType=='Thumbnails Video')
		{
			$wpdb->query($wpdb->prepare("DELETE FROM $table_name7 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($TotalSoft_GalleryV_Opt[0]->TotalSoftGalleryV_SetType=='Content Popup')
		{
			$wpdb->query($wpdb->prepare("DELETE FROM $table_name8 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));;
		}
		else if($TotalSoft_GalleryV_Opt[0]->TotalSoftGalleryV_SetType=='Elastic Gallery')
		{
			$wpdb->query($wpdb->prepare("DELETE FROM $table_name9 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));;
		}
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_VideoOpt_Edit', 'TotalSoftGallery_VideoOpt_Edit_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_VideoOpt_Edit', 'TotalSoftGallery_VideoOpt_Edit_Callback' );

	function TotalSoftGallery_VideoOpt_Edit_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
		$table_name5 = $wpdb->prefix . "totalsoft_galleryv_gvg";
		$table_name6 = $wpdb->prefix . "totalsoft_galleryv_lvg";
		$table_name7 = $wpdb->prefix . "totalsoft_galleryv_ttvg";
		$table_name8 = $wpdb->prefix . "totalsoft_galleryv_ctpg";
		$table_name9 = $wpdb->prefix . "totalsoft_galleryv_hlg";
		
		$Total_Soft_GalleryVName=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id=%d", $GalleryV_ID));
		if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery')
		{
			$Total_Soft_GalleryVSet=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery')
		{
			$Total_Soft_GalleryVSet=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='Thumbnails Video')
		{
			$Total_Soft_GalleryVSet=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='Content Popup')
		{
			$Total_Soft_GalleryVSet=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		else if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='Elastic Gallery')
		{
			$Total_Soft_GalleryVSet=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE TotalSoftGalleryV_SetID=%s", $GalleryV_ID));
		}
		print_r($Total_Soft_GalleryVSet);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_Page', 'TotalSoftGallery_Video_Page_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_Page', 'TotalSoftGallery_Video_Page_Callback' );

	function TotalSoftGallery_Video_Page_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s order by id", $GalleryV_ID));

		print_r($Total_Soft_GalleryVVideos);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_PageGO', 'TotalSoftGallery_Video_PageGO_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_PageGO', 'TotalSoftGallery_Video_PageGO_Callback' );

	function TotalSoftGallery_Video_PageGO_Callback()
	{
		$GalleryV_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
		$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
		$table_name5 = $wpdb->prefix . "totalsoft_galleryv_gvg";

		$Total_Soft_GalleryMan=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id=%d", $GalleryV_ID));
		$Total_Soft_GalleryVName=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s", $Total_Soft_GalleryMan[0]->TotalSoftGallery_Video_Option));
		if($Total_Soft_GalleryVName[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery')
		{
			$Total_Soft_GalleryVSet=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftGalleryV_SetID=%s", $Total_Soft_GalleryVName[0]->id));
		}

		print_r($Total_Soft_GalleryVSet);
		
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_CP_Popup', 'TotalSoftGallery_Video_CP_Popup_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_CP_Popup', 'TotalSoftGallery_Video_CP_Popup_Callback' );

	function TotalSoftGallery_Video_CP_Popup_Callback()
	{
		$TotalSoftGV_CP_VID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id=%d order by id", $TotalSoftGV_CP_VID));

		print_r($Total_Soft_GalleryVVideos);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_CP_Popup_Left', 'TotalSoftGallery_Video_CP_Popup_Left_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_CP_Popup_Left', 'TotalSoftGallery_Video_CP_Popup_Left_Callback' );

	function TotalSoftGallery_Video_CP_Popup_Left_Callback()
	{
		$TotalSoft_GV_CP_VID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideo=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id=%d order by id", $TotalSoft_GV_CP_VID));
		
		$Total_Soft_GalleryVVideos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s order by id", $Total_Soft_GalleryVVideo[0]->GalleryV_ID));

		for($i=0;$i<count($Total_Soft_GalleryVVideos);$i++)
		{
			if($Total_Soft_GalleryVVideos[$i]->id==$TotalSoft_GV_CP_VID)
			{
				if($i!=0)
				{
					$Total_Soft_GalleryVVid=$Total_Soft_GalleryVVideos[$i-1];
				}
				else
				{
					$Total_Soft_GalleryVVid=$Total_Soft_GalleryVVideos[count($Total_Soft_GalleryVVideos)-1];
				}
			}
		}
		print_r($Total_Soft_GalleryVVid);
		die();
	}

	add_action( 'wp_ajax_TotalSoftGallery_Video_CP_Popup_Right', 'TotalSoftGallery_Video_CP_Popup_Right_Callback' );
	add_action( 'wp_ajax_nopriv_TotalSoftGallery_Video_CP_Popup_Right', 'TotalSoftGallery_Video_CP_Popup_Right_Callback' );

	function TotalSoftGallery_Video_CP_Popup_Right_Callback()
	{
		$TotalSoft_GV_CP_VID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";

		$Total_Soft_GalleryVVideo=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id=%d order by id", $TotalSoft_GV_CP_VID));
		
		$Total_Soft_GalleryVVideos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s order by id", $Total_Soft_GalleryVVideo[0]->GalleryV_ID));

		for($i=0;$i<count($Total_Soft_GalleryVVideos);$i++)
		{
			if($Total_Soft_GalleryVVideos[$i]->id==$TotalSoft_GV_CP_VID)
			{
				if($i!=count($Total_Soft_GalleryVVideos)-1)
				{
					$Total_Soft_GalleryVVid=$Total_Soft_GalleryVVideos[$i+1];
				}
				else
				{
					$Total_Soft_GalleryVVid=$Total_Soft_GalleryVVideos[0];
				}
			}
		}
		print_r($Total_Soft_GalleryVVid);
		die();
	}
?>