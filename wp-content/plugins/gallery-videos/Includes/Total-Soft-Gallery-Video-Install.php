<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	$table_name  = $wpdb->prefix . "totalsoft_fonts";
	$table_name1 = $wpdb->prefix . "totalsoft_galleryv_id";
	$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
	$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";
	$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
	$table_name5 = $wpdb->prefix . "totalsoft_galleryv_gvg";
	$table_name6 = $wpdb->prefix . "totalsoft_galleryv_lvg";
	$table_name7 = $wpdb->prefix . "totalsoft_galleryv_ttvg";
	$table_name8 = $wpdb->prefix . "totalsoft_galleryv_ctpg";
	$table_name9 = $wpdb->prefix . "totalsoft_galleryv_hlg";

	$sql = 'CREATE TABLE IF NOT EXISTS ' .$table_name . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Font VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql1 = 'CREATE TABLE IF NOT EXISTS ' .$table_name1 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		GalleryV_ID VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql2 = 'CREATE TABLE IF NOT EXISTS ' .$table_name2 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGallery_Video_Gallery_Title VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_Option VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_ShowType VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_PerPage VARCHAR(255) NOT NULL,
		TotalSoftGallery_LoadMore VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql3 = 'CREATE TABLE IF NOT EXISTS ' .$table_name3 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGallery_Video_VT VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_VDesc LONGTEXT NOT NULL,
		TotalSoftGallery_Video_VLink VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_VONT VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_VURL VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_IURL VARCHAR(255) NOT NULL,
		TotalSoftGallery_Video_Video VARCHAR(255) NOT NULL,
		GalleryV_ID VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql4 = 'CREATE TABLE IF NOT EXISTS ' .$table_name4 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGalleryV_SetName VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetType VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql5 = 'CREATE TABLE IF NOT EXISTS ' .$table_name5 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGalleryV_SetID VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetName VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetType VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_DShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_PB VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_VR VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_HE VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_HO VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_DSC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TDA_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TDA_MT VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_TTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_DFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_DFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_DC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_DTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_LAT_W VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_LAT_S VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_LAT_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_BW VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_BR VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_Pad VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_TTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_DFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_DFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_DC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_DTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LAT_W VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LAT_S VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LAT_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_AType VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_ALeft VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_ARight VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_AC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_AFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_CType VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_CIcon VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_CFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LBW VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LBS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LBR VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LText VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LHBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_LHC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_NBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_PBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_FS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_FF VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_H VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_CBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_HC VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_TShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_Pop_DShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_GVG_P_BC VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql6 = 'CREATE TABLE IF NOT EXISTS ' .$table_name6 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGalleryV_SetID VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetName VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetType VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_PB VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pad VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_VBW VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_VBS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_VBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_VBR VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_BW VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_BR VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_TShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_TTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_PType VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_PIcon VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_Pause VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_PIS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_PIC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_CType VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_CIcon VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_CIS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_CIC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_CIT VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_CTF VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_AType VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_ALeft VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_ARight VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_ArrS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_ArrC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_NFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Pop_NC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_NBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_PBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_FS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_FF VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_H VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_CBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_HC VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_P_BC VARCHAR(255) NOT NULL,			
		TotalSoft_VG_LVG_Img_Zoom_Type VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Img_Zoom_Effect_Time VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Hov_Ov_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Hov_Ov_Transparency VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Hov_Ov_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Hov_Ov_Effect_Time VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Transparency VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Font_Size VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Text_Shadow VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Shadow_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Title_Effect_Time VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Line_Width VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Line_Style VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Line_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Line_Hov_Type VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Line_Hov_Time VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Font_Size VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Border_Color VARCHAR(255) NOT NULL,			
		TotalSoft_VG_LVG_Link_Border_Width VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Border_Style VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Hov_Type VARCHAR(255) NOT NULL,
		TotalSoft_VG_LVG_Link_Hov_Time VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql7 = 'CREATE TABLE IF NOT EXISTS ' .$table_name7 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGalleryV_SetID VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetName VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetType VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_SE VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_HE VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_O VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_AS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_FC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Sl VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_BR VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_POM VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_POS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_ShC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_VW VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_VH VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_TShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_TBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_TPos VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_OC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_OO VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_Bg VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_BR VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_BSC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_TBg VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_TBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_TTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_NC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_NS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_ABgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_AC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_AR VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_AO VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_CBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Pop_CR VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_NBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_PBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_FS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_FF VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_H VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_CBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_HC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_P_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_V_PBImgs VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Ic_S VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Ic_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_TV_Ic_T VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql8 = 'CREATE TABLE IF NOT EXISTS ' .$table_name8 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGalleryV_SetID VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetName VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetType VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_W VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_H VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_BW VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_PB VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_BSShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_BSW VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_BSC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_HEff VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_HOC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_HOO VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_TShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_TBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_DShow VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_DC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_DFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_DFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LATW VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LATC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LText VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LBW VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LBR VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LHBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LHC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_NBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_PBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_FS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_FF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_CBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_HC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_P_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_BW VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_TBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_TTA VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_DFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_DFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_DC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_DBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LText VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LBW VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LBS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LBR VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LHBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_LHC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_IBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_CIS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_CIC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_CIT VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_CIcon VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_AS VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_AC VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_AT VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_ALeft VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_Pop_ARight VARCHAR(255) NOT NULL,
		TotalSoft_VG_CP_LShow VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';	
		
	$sql9 = 'CREATE TABLE IF NOT EXISTS ' .$table_name9 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftGalleryV_SetID VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetName VARCHAR(255) NOT NULL,
		TotalSoftGalleryV_SetType VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_W VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_H VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_BW VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_BC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_BSh VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_BShC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_IHovT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_IHovTr VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_TFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_TC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_TFF VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_TBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_THovT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_THovTr VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_ShowT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_TOp VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcBW VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcBS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PIcBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_LC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_LBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_LBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_LIcT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_POvBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_POvBgCOp VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSShChDur VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlOpC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlOpFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PDelIcT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlIcFS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlIcC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlIcBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlIcT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlAutPl VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlLoop VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlBW VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlBS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlBC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlBSh VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_PSlBShC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_NBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_PBT VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_BgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_C VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_FS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_FF VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_H VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_CBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_CC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_HC VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_BS VARCHAR(255) NOT NULL,
		TotalSoft_VG_HLG_P_BC VARCHAR(255) NOT NULL,		
		PRIMARY KEY (id))';		

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
	dbDelta($sql1);
	dbDelta($sql2);
	dbDelta($sql3);
	dbDelta($sql4);
	dbDelta($sql5);
	dbDelta($sql6);
	dbDelta($sql7);
	dbDelta($sql8);
	dbDelta($sql9);

	$TotalSoft_Fonts = array('Abadi MT Condensed Light','Aharoni','Aldhabi','Andalus','Angsana New','AngsanaUPC','Aparajita','Arabic Typesetting','Arial','Arial Black', 'Batang','BatangChe','Browallia New','BrowalliaUPC','Calibri','Calibri Light','Calisto MT','Cambria','Candara','Century Gothic','Comic Sans MS','Consolas', 'Constantia','Copperplate Gothic','Copperplate Gothic Light','Corbel','Cordia New','CordiaUPC','Courier New','DaunPenh','David','DFKai-SB','DilleniaUPC', 'DokChampa','Dotum','DotumChe','Ebrima','Estrangelo Edessa','EucrosiaUPC','Euphemia','FangSong','Franklin Gothic Medium','FrankRuehl','FreesiaUPC','Gabriola', 'Gadugi','Gautami','Georgia','Gisha','Gulim','GulimChe','Gungsuh','GungsuhChe','Impact','IrisUPC','Iskoola Pota','JasmineUPC','KaiTi','Kalinga','Kartika', 'Khmer UI','KodchiangUPC','Kokila','Lao UI','Latha','Leelawadee','Levenim MT','LilyUPC','Lucida Console','Lucida Handwriting Italic','Lucida Sans Unicode', 'Malgun Gothic','Mangal','Manny ITC','Marlett','Meiryo','Meiryo UI','Microsoft Himalaya','Microsoft JhengHei','Microsoft JhengHei UI','Microsoft New Tai Lue', 'Microsoft PhagsPa','Microsoft Sans Serif','Microsoft Tai Le','Microsoft Uighur','Microsoft YaHei','Microsoft YaHei UI','Microsoft Yi Baiti','MingLiU_HKSCS', 'MingLiU_HKSCS-ExtB','Miriam','Mongolian Baiti','MoolBoran','MS UI Gothic','MV Boli','Myanmar Text','Narkisim','Nirmala UI','News Gothic MT','NSimSun','Nyala', 'Palatino Linotype','Plantagenet Cherokee','Raavi','Rod','Sakkal Majalla','Segoe Print','Segoe Script','Segoe UI Symbol','Shonar Bangla','Shruti','SimHei','SimKai', 'Simplified Arabic','SimSun','SimSun-ExtB','Sylfaen','Tahoma','Times New Roman','Traditional Arabic','Trebuchet MS','Tunga','Utsaah','Vani','Vijaya');
	
	$TotalSoftFontCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
	if(count($TotalSoftFontCount)==0)
	{
		foreach ($TotalSoft_Fonts as $Fonts) 
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name (id, Font) VALUES (%d, %s)", '', $Fonts));
		}
	}

	$TotalSoftGVEff1Count=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id>%d",0));
	if(count($TotalSoftGVEff1Count)==0)
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Grid Video Gallery', 'Grid Video Gallery'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Grid Video Gallery'));
		
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_GVG_TShow, TotalSoft_VG_GVG_DShow, TotalSoft_VG_GVG_CC, TotalSoft_VG_GVG_PB, TotalSoft_VG_GVG_VR, TotalSoft_VG_GVG_HE, TotalSoft_VG_GVG_HO, TotalSoft_VG_GVG_DSC, TotalSoft_VG_GVG_TDA_BgC, TotalSoft_VG_GVG_TDA_MT, TotalSoft_VG_GVG_TFS, TotalSoft_VG_GVG_TFF, TotalSoft_VG_GVG_TC, TotalSoft_VG_GVG_TTA, TotalSoft_VG_GVG_DFS, TotalSoft_VG_GVG_DFF, TotalSoft_VG_GVG_DC, TotalSoft_VG_GVG_DTA, TotalSoft_VG_GVG_LAT_W, TotalSoft_VG_GVG_LAT_S, TotalSoft_VG_GVG_LAT_C, TotalSoft_VG_GVG_Pop_BgC, TotalSoft_VG_GVG_Pop_BW, TotalSoft_VG_GVG_Pop_BS, TotalSoft_VG_GVG_Pop_BC, TotalSoft_VG_GVG_Pop_BR, TotalSoft_VG_GVG_Pop_Pad, TotalSoft_VG_GVG_Pop_TFS, TotalSoft_VG_GVG_Pop_TFF, TotalSoft_VG_GVG_Pop_TC, TotalSoft_VG_GVG_Pop_TTA, TotalSoft_VG_GVG_Pop_DFS, TotalSoft_VG_GVG_Pop_DFF, TotalSoft_VG_GVG_Pop_DC, TotalSoft_VG_GVG_Pop_DTA, TotalSoft_VG_GVG_Pop_LAT_W, TotalSoft_VG_GVG_Pop_LAT_S, TotalSoft_VG_GVG_Pop_LAT_C, TotalSoft_VG_GVG_Pop_AType, TotalSoft_VG_GVG_Pop_ALeft, TotalSoft_VG_GVG_Pop_ARight, TotalSoft_VG_GVG_Pop_AC, TotalSoft_VG_GVG_Pop_AFS, TotalSoft_VG_GVG_Pop_CType, TotalSoft_VG_GVG_Pop_CIcon, TotalSoft_VG_GVG_Pop_CC, TotalSoft_VG_GVG_Pop_CFS, TotalSoft_VG_GVG_Pop_LBW, TotalSoft_VG_GVG_Pop_LBS, TotalSoft_VG_GVG_Pop_LBC, TotalSoft_VG_GVG_Pop_LBR, TotalSoft_VG_GVG_Pop_LText, TotalSoft_VG_GVG_Pop_LBgC, TotalSoft_VG_GVG_Pop_LC, TotalSoft_VG_GVG_Pop_LFS, TotalSoft_VG_GVG_Pop_LFF, TotalSoft_VG_GVG_Pop_LHBgC, TotalSoft_VG_GVG_Pop_LHC, TotalSoft_VG_GVG_P_NBT, TotalSoft_VG_GVG_P_PBT, TotalSoft_VG_GVG_P_BgC, TotalSoft_VG_GVG_P_C, TotalSoft_VG_GVG_P_FS, TotalSoft_VG_GVG_P_FF, TotalSoft_VG_GVG_P_H, TotalSoft_VG_GVG_P_CBgC, TotalSoft_VG_GVG_P_CC, TotalSoft_VG_GVG_P_HBgC, TotalSoft_VG_GVG_P_HC, TotalSoft_VG_GVG_Pop_TShow, TotalSoft_VG_GVG_Pop_DShow, TotalSoft_VG_GVG_P_BS, TotalSoft_VG_GVG_P_BC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Grid Video Gallery', 'Grid Video Gallery', 'true', 'false', '294', '5', '0', 'sepia', '0.5', '#000000', '#009491', '0', '19', 'Gabriola', '#ffffff', 'center', '23', 'Gabriola', '#ffffff', 'justify', '0', 'dotted', '#ffffff', '#ffffff', '0', 'solid', '#009491', '0', '30', '30', 'Gabriola', '#009491', 'center', '18', 'Gabriola', '#009491', 'justify', '1', 'solid', '#cccccc', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '#009491', '28', '3', 'totalsoft totalsoft-times-circle', '#009491', '25', '1', 'solid', '#009491', '0', 'View More', '#009491', '#ffffff', '18', 'Gabriola', '#ffffff', '#009491', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '30', '#009491', '#ffffff', '#009491', '#f9f9f9', 'true', 'true', 'solid', '#009491'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Grid VideoGallery', 'Grid Video Gallery'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Grid VideoGallery'));
		
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_GVG_TShow, TotalSoft_VG_GVG_DShow, TotalSoft_VG_GVG_CC, TotalSoft_VG_GVG_PB, TotalSoft_VG_GVG_VR, TotalSoft_VG_GVG_HE, TotalSoft_VG_GVG_HO, TotalSoft_VG_GVG_DSC, TotalSoft_VG_GVG_TDA_BgC, TotalSoft_VG_GVG_TDA_MT, TotalSoft_VG_GVG_TFS, TotalSoft_VG_GVG_TFF, TotalSoft_VG_GVG_TC, TotalSoft_VG_GVG_TTA, TotalSoft_VG_GVG_DFS, TotalSoft_VG_GVG_DFF, TotalSoft_VG_GVG_DC, TotalSoft_VG_GVG_DTA, TotalSoft_VG_GVG_LAT_W, TotalSoft_VG_GVG_LAT_S, TotalSoft_VG_GVG_LAT_C, TotalSoft_VG_GVG_Pop_BgC, TotalSoft_VG_GVG_Pop_BW, TotalSoft_VG_GVG_Pop_BS, TotalSoft_VG_GVG_Pop_BC, TotalSoft_VG_GVG_Pop_BR, TotalSoft_VG_GVG_Pop_Pad, TotalSoft_VG_GVG_Pop_TFS, TotalSoft_VG_GVG_Pop_TFF, TotalSoft_VG_GVG_Pop_TC, TotalSoft_VG_GVG_Pop_TTA, TotalSoft_VG_GVG_Pop_DFS, TotalSoft_VG_GVG_Pop_DFF, TotalSoft_VG_GVG_Pop_DC, TotalSoft_VG_GVG_Pop_DTA, TotalSoft_VG_GVG_Pop_LAT_W, TotalSoft_VG_GVG_Pop_LAT_S, TotalSoft_VG_GVG_Pop_LAT_C, TotalSoft_VG_GVG_Pop_AType, TotalSoft_VG_GVG_Pop_ALeft, TotalSoft_VG_GVG_Pop_ARight, TotalSoft_VG_GVG_Pop_AC, TotalSoft_VG_GVG_Pop_AFS, TotalSoft_VG_GVG_Pop_CType, TotalSoft_VG_GVG_Pop_CIcon, TotalSoft_VG_GVG_Pop_CC, TotalSoft_VG_GVG_Pop_CFS, TotalSoft_VG_GVG_Pop_LBW, TotalSoft_VG_GVG_Pop_LBS, TotalSoft_VG_GVG_Pop_LBC, TotalSoft_VG_GVG_Pop_LBR, TotalSoft_VG_GVG_Pop_LText, TotalSoft_VG_GVG_Pop_LBgC, TotalSoft_VG_GVG_Pop_LC, TotalSoft_VG_GVG_Pop_LFS, TotalSoft_VG_GVG_Pop_LFF, TotalSoft_VG_GVG_Pop_LHBgC, TotalSoft_VG_GVG_Pop_LHC, TotalSoft_VG_GVG_P_NBT, TotalSoft_VG_GVG_P_PBT, TotalSoft_VG_GVG_P_BgC, TotalSoft_VG_GVG_P_C, TotalSoft_VG_GVG_P_FS, TotalSoft_VG_GVG_P_FF, TotalSoft_VG_GVG_P_H, TotalSoft_VG_GVG_P_CBgC, TotalSoft_VG_GVG_P_CC, TotalSoft_VG_GVG_P_HBgC, TotalSoft_VG_GVG_P_HC, TotalSoft_VG_GVG_Pop_TShow, TotalSoft_VG_GVG_Pop_DShow, TotalSoft_VG_GVG_P_BS, TotalSoft_VG_GVG_P_BC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Grid VideoGallery', 'Grid Video Gallery', 'true', 'true', '294', '5', '0', 'drop-shadow', '0.01', '#727272', '#ededed', '2', '19', 'Gabriola', '#009491', 'center', '16', 'Gabriola', '#009491', 'justify', '1', 'solid', '#d8d8d8', '#ffffff', '0', 'solid', '#009491', '0', '30', '30', 'Gabriola', '#009491', 'center', '18', 'Gabriola', '#009491', 'justify', '1', 'solid', '#cccccc', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '#009491', '28', '3', 'totalsoft totalsoft-times-circle', '#009491', '25', '1', 'solid', '#009491', '0', 'View More', '#009491', '#ffffff', '18', 'Gabriola', '#ffffff', '#009491', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '30', '#009491', '#ffffff', '#009491', '#f9f9f9', 'true', 'true', 'solid', '#009491'));
	}
	$TotalSoftGVEff2Count=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE id>%d",0));
	if(count($TotalSoftGVEff2Count)==0)
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'LightBox VideoGallery', 'LightBox Video Gallery'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'LightBox VideoGallery'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_LVG_CC, TotalSoft_VG_LVG_PB, TotalSoft_VG_LVG_Pad, TotalSoft_VG_LVG_BgC, TotalSoft_VG_LVG_VBW, TotalSoft_VG_LVG_VBS, TotalSoft_VG_LVG_VBC, TotalSoft_VG_LVG_VBR, TotalSoft_VG_LVG_Pop_BgC, TotalSoft_VG_LVG_Pop_BW, TotalSoft_VG_LVG_Pop_BS, TotalSoft_VG_LVG_Pop_BC, TotalSoft_VG_LVG_Pop_BR, TotalSoft_VG_LVG_Pop_TShow, TotalSoft_VG_LVG_Pop_TTA, TotalSoft_VG_LVG_Pop_TFS, TotalSoft_VG_LVG_Pop_TFF, TotalSoft_VG_LVG_Pop_TC, TotalSoft_VG_LVG_Pop_PType, TotalSoft_VG_LVG_Pop_PIcon, TotalSoft_VG_LVG_Pop_Pause, TotalSoft_VG_LVG_Pop_PIS, TotalSoft_VG_LVG_Pop_PIC, TotalSoft_VG_LVG_Pop_CType, TotalSoft_VG_LVG_Pop_CIcon, TotalSoft_VG_LVG_Pop_CIS, TotalSoft_VG_LVG_Pop_CIC, TotalSoft_VG_LVG_Pop_CIT, TotalSoft_VG_LVG_Pop_CTF, TotalSoft_VG_LVG_Pop_AType, TotalSoft_VG_LVG_Pop_ALeft, TotalSoft_VG_LVG_Pop_ARight, TotalSoft_VG_LVG_Pop_ArrS, TotalSoft_VG_LVG_Pop_ArrC, TotalSoft_VG_LVG_Pop_NFS, TotalSoft_VG_LVG_Pop_NC, TotalSoft_VG_LVG_P_NBT, TotalSoft_VG_LVG_P_PBT, TotalSoft_VG_LVG_P_BgC, TotalSoft_VG_LVG_P_C, TotalSoft_VG_LVG_P_FS, TotalSoft_VG_LVG_P_FF, TotalSoft_VG_LVG_P_H, TotalSoft_VG_LVG_P_CBgC, TotalSoft_VG_LVG_P_CC, TotalSoft_VG_LVG_P_HBgC, TotalSoft_VG_LVG_P_HC, TotalSoft_VG_LVG_P_BS, TotalSoft_VG_LVG_P_BC, TotalSoft_VG_LVG_Img_Zoom_Type, TotalSoft_VG_LVG_Img_Zoom_Effect_Time, TotalSoft_VG_LVG_Hov_Ov_Bg_Color, TotalSoft_VG_LVG_Hov_Ov_Transparency, TotalSoft_VG_LVG_Hov_Ov_Effect_Type, TotalSoft_VG_LVG_Hov_Ov_Effect_Time, TotalSoft_VG_LVG_Title_Bg_Color, TotalSoft_VG_LVG_Title_Transparency, TotalSoft_VG_LVG_Title_Font_Size, TotalSoft_VG_LVG_Title_Color, TotalSoft_VG_LVG_Title_Text_Shadow, TotalSoft_VG_LVG_Title_Shadow_Color, TotalSoft_VG_LVG_Title_Effect_Type, TotalSoft_VG_LVG_Title_Effect_Time, TotalSoft_VG_LVG_Line_Width, TotalSoft_VG_LVG_Line_Style, TotalSoft_VG_LVG_Line_Color, TotalSoft_VG_LVG_Line_Hov_Type, TotalSoft_VG_LVG_Line_Hov_Time, TotalSoft_VG_LVG_Link_Font_Size, TotalSoft_VG_LVG_Link_Color, TotalSoft_VG_LVG_Link_Border_Color, TotalSoft_VG_LVG_Link_Border_Width, TotalSoft_VG_LVG_Link_Border_Style, TotalSoft_VG_LVG_Link_Bg_Color, TotalSoft_VG_LVG_Link_Hov_Type, TotalSoft_VG_LVG_Link_Hov_Time) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'LightBox VideoGallery', 'LightBox Video Gallery', '294', '5', '10', '#ffffff', '1', 'solid', '#009491', '0', '#ffffff', '2', 'solid', '#009491', '5', 'true', 'center', '20', 'Arial', '#009491', '2', 'totalsoft totalsoft-play-circle-o', 'totalsoft totalsoft-pause-circle-o', '20', '#009491', '2', 'totalsoft totalsoft-times-circle-o', '16', '#009491', 'Close', 'Gabriola', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '20', '#009491', '16', '#009491', 'Next', 'Prev', '#009491', '#ffffff', '21', 'Gabriola', '28', '#ffffff', '#000000', '#ffffff', '#009491', 'solid', '#ffffff', 'lImgZoom7', '4', '#009491', '40', 'hovLayTVG1', '4', '#009491', '70', '23', '#ffffff', 'Gabriola', 'Gabriola', 'hovTit4', '5', '0', 'solid', '#dd3333', 'hovLine6', '6', '13', '#ffffff', '#ffffff', '1', 'solid', 'View More', 'hovLink7', '5'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'LightBox Video Gallery', 'LightBox Video Gallery'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'LightBox Video Gallery'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_LVG_CC, TotalSoft_VG_LVG_PB, TotalSoft_VG_LVG_Pad, TotalSoft_VG_LVG_BgC, TotalSoft_VG_LVG_VBW, TotalSoft_VG_LVG_VBS, TotalSoft_VG_LVG_VBC, TotalSoft_VG_LVG_VBR, TotalSoft_VG_LVG_Pop_BgC, TotalSoft_VG_LVG_Pop_BW, TotalSoft_VG_LVG_Pop_BS, TotalSoft_VG_LVG_Pop_BC, TotalSoft_VG_LVG_Pop_BR, TotalSoft_VG_LVG_Pop_TShow, TotalSoft_VG_LVG_Pop_TTA, TotalSoft_VG_LVG_Pop_TFS, TotalSoft_VG_LVG_Pop_TFF, TotalSoft_VG_LVG_Pop_TC, TotalSoft_VG_LVG_Pop_PType, TotalSoft_VG_LVG_Pop_PIcon, TotalSoft_VG_LVG_Pop_Pause, TotalSoft_VG_LVG_Pop_PIS, TotalSoft_VG_LVG_Pop_PIC, TotalSoft_VG_LVG_Pop_CType, TotalSoft_VG_LVG_Pop_CIcon, TotalSoft_VG_LVG_Pop_CIS, TotalSoft_VG_LVG_Pop_CIC, TotalSoft_VG_LVG_Pop_CIT, TotalSoft_VG_LVG_Pop_CTF, TotalSoft_VG_LVG_Pop_AType, TotalSoft_VG_LVG_Pop_ALeft, TotalSoft_VG_LVG_Pop_ARight, TotalSoft_VG_LVG_Pop_ArrS, TotalSoft_VG_LVG_Pop_ArrC, TotalSoft_VG_LVG_Pop_NFS, TotalSoft_VG_LVG_Pop_NC, TotalSoft_VG_LVG_P_NBT, TotalSoft_VG_LVG_P_PBT, TotalSoft_VG_LVG_P_BgC, TotalSoft_VG_LVG_P_C, TotalSoft_VG_LVG_P_FS, TotalSoft_VG_LVG_P_FF, TotalSoft_VG_LVG_P_H, TotalSoft_VG_LVG_P_CBgC, TotalSoft_VG_LVG_P_CC, TotalSoft_VG_LVG_P_HBgC, TotalSoft_VG_LVG_P_HC, TotalSoft_VG_LVG_P_BS, TotalSoft_VG_LVG_P_BC, TotalSoft_VG_LVG_Img_Zoom_Type, TotalSoft_VG_LVG_Img_Zoom_Effect_Time, TotalSoft_VG_LVG_Hov_Ov_Bg_Color, TotalSoft_VG_LVG_Hov_Ov_Transparency, TotalSoft_VG_LVG_Hov_Ov_Effect_Type, TotalSoft_VG_LVG_Hov_Ov_Effect_Time, TotalSoft_VG_LVG_Title_Bg_Color, TotalSoft_VG_LVG_Title_Transparency, TotalSoft_VG_LVG_Title_Font_Size, TotalSoft_VG_LVG_Title_Color, TotalSoft_VG_LVG_Title_Text_Shadow, TotalSoft_VG_LVG_Title_Shadow_Color, TotalSoft_VG_LVG_Title_Effect_Type, TotalSoft_VG_LVG_Title_Effect_Time, TotalSoft_VG_LVG_Line_Width, TotalSoft_VG_LVG_Line_Style, TotalSoft_VG_LVG_Line_Color, TotalSoft_VG_LVG_Line_Hov_Type, TotalSoft_VG_LVG_Line_Hov_Time, TotalSoft_VG_LVG_Link_Font_Size, TotalSoft_VG_LVG_Link_Color, TotalSoft_VG_LVG_Link_Border_Color, TotalSoft_VG_LVG_Link_Border_Width, TotalSoft_VG_LVG_Link_Border_Style, TotalSoft_VG_LVG_Link_Bg_Color, TotalSoft_VG_LVG_Link_Hov_Type, TotalSoft_VG_LVG_Link_Hov_Time) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'LightBox Video Gallery', 'LightBox Video Gallery', '294', '5', '10', '#009491', '7', 'solid', '#ffffff', '0', '#009491', '4', 'none', '#ffffff', '10', 'true', 'center', '20', 'Arial', '#ffffff', '2', 'totalsoft totalsoft-play-circle-o', 'totalsoft totalsoft-pause-circle-o', '20', '#dbdbdb', '2', 'totalsoft totalsoft-times-circle-o', '16', '#dbdbdb', 'Close', 'Gabriola', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '20', '#dbdbdb', '18', '#dbdbdb', 'Next', 'Prev', '#009491', '#ffffff', '21', 'Gabriola', '28', '#ffffff', '#000000', '#ffffff', '#009491', 'solid', '#ffffff', 'lImgZoom1', '5', '#009491', '17', 'hovLayTVG1', '5', '#ffffff', '60', '23', '#009491', 'Gabriola', 'Gabriola', 'hovTit1', '5', '1', 'solid', '#ffffff', 'hovLine5', '4', '13', '#ffffff', '#ffffff', '3', 'solid', 'View More', 'hovLink5', '4'));			
	}
	$TotalSoftGVEff3Count=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE id>%d",0));
	if(count($TotalSoftGVEff3Count)==0)
	{
		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Thumbnails Video'));

		if(!$TotalSoftGalleryV_SetNameID)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Thumbnails Video', 'Thumbnails Video'));
			$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Thumbnails Video'));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_TV_SE, TotalSoft_VG_TV_HE, TotalSoft_VG_TV_O, TotalSoft_VG_TV_AS, TotalSoft_VG_TV_FC, TotalSoft_VG_TV_Sl, TotalSoft_VG_TV_BC, TotalSoft_VG_TV_BR, TotalSoft_VG_TV_POM, TotalSoft_VG_TV_POS, TotalSoft_VG_TV_ShC, TotalSoft_VG_TV_VW, TotalSoft_VG_TV_VH, TotalSoft_VG_TV_TShow, TotalSoft_VG_TV_TBgC, TotalSoft_VG_TV_TC, TotalSoft_VG_TV_TFS, TotalSoft_VG_TV_TFF, TotalSoft_VG_TV_TPos, TotalSoft_VG_TV_Pop_OC, TotalSoft_VG_TV_Pop_OO, TotalSoft_VG_TV_Pop_Bg, TotalSoft_VG_TV_Pop_BgC, TotalSoft_VG_TV_Pop_BR, TotalSoft_VG_TV_Pop_BSC, TotalSoft_VG_TV_Pop_TBg, TotalSoft_VG_TV_Pop_TBgC, TotalSoft_VG_TV_Pop_TFS, TotalSoft_VG_TV_Pop_TFF, TotalSoft_VG_TV_Pop_TC, TotalSoft_VG_TV_Pop_TTA, TotalSoft_VG_TV_Pop_NC, TotalSoft_VG_TV_Pop_NS, TotalSoft_VG_TV_Pop_ABgC, TotalSoft_VG_TV_Pop_AC, TotalSoft_VG_TV_Pop_AR, TotalSoft_VG_TV_Pop_AO, TotalSoft_VG_TV_Pop_CBgC, TotalSoft_VG_TV_Pop_CC, TotalSoft_VG_TV_Pop_CR, TotalSoft_VG_TV_P_NBT, TotalSoft_VG_TV_P_PBT, TotalSoft_VG_TV_P_BgC, TotalSoft_VG_TV_P_C, TotalSoft_VG_TV_P_FS, TotalSoft_VG_TV_P_FF, TotalSoft_VG_TV_P_H, TotalSoft_VG_TV_P_CBgC, TotalSoft_VG_TV_P_CC, TotalSoft_VG_TV_P_HBgC, TotalSoft_VG_TV_P_HC, TotalSoft_VG_TV_P_BS, TotalSoft_VG_TV_P_BC, TotalSoft_VG_TV_V_PBImgs, TotalSoft_VG_TV_Ic_S, TotalSoft_VG_TV_Ic_C, TotalSoft_VG_TV_Ic_T) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Thumbnails Video', 'Thumbnails Video', 'overlay', 'boxRainGrow', '0.3', '300', '#009491', '30', '12', '10', '0', '20', '#009491', '320', '180', 'true', '#ffffff', '#009491', '14', 'Arabic Typesetting', 'bottom', '#009491', '0.4', 'false', '#009491', '0', '#ffffff', 'false', '#009491', '25', 'Gabriola', '#ffffff', 'center', '#ffffff', '16', '#009491', '#ffffff', '100', '0.1', '#009491', '#ffffff', '100', 'Next', 'Prev', '#ffffff', '#009491', '21', 'Gabriola', '29', '#009491', '#ffffff', '#009491', '#e0e0e0', 'none', '#009491', '5', '45', '#ffffff', 'totalsoft totalsoft-play-circle'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Thumbnails Video 2'));

		if(!$TotalSoftGalleryV_SetNameID)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Thumbnails Video 2', 'Thumbnails Video'));
			$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Thumbnails Video 2'));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_TV_SE, TotalSoft_VG_TV_HE, TotalSoft_VG_TV_O, TotalSoft_VG_TV_AS, TotalSoft_VG_TV_FC, TotalSoft_VG_TV_Sl, TotalSoft_VG_TV_BC, TotalSoft_VG_TV_BR, TotalSoft_VG_TV_POM, TotalSoft_VG_TV_POS, TotalSoft_VG_TV_ShC, TotalSoft_VG_TV_VW, TotalSoft_VG_TV_VH, TotalSoft_VG_TV_TShow, TotalSoft_VG_TV_TBgC, TotalSoft_VG_TV_TC, TotalSoft_VG_TV_TFS, TotalSoft_VG_TV_TFF, TotalSoft_VG_TV_TPos, TotalSoft_VG_TV_Pop_OC, TotalSoft_VG_TV_Pop_OO, TotalSoft_VG_TV_Pop_Bg, TotalSoft_VG_TV_Pop_BgC, TotalSoft_VG_TV_Pop_BR, TotalSoft_VG_TV_Pop_BSC, TotalSoft_VG_TV_Pop_TBg, TotalSoft_VG_TV_Pop_TBgC, TotalSoft_VG_TV_Pop_TFS, TotalSoft_VG_TV_Pop_TFF, TotalSoft_VG_TV_Pop_TC, TotalSoft_VG_TV_Pop_TTA, TotalSoft_VG_TV_Pop_NC, TotalSoft_VG_TV_Pop_NS, TotalSoft_VG_TV_Pop_ABgC, TotalSoft_VG_TV_Pop_AC, TotalSoft_VG_TV_Pop_AR, TotalSoft_VG_TV_Pop_AO, TotalSoft_VG_TV_Pop_CBgC, TotalSoft_VG_TV_Pop_CC, TotalSoft_VG_TV_Pop_CR, TotalSoft_VG_TV_P_NBT, TotalSoft_VG_TV_P_PBT, TotalSoft_VG_TV_P_BgC, TotalSoft_VG_TV_P_C, TotalSoft_VG_TV_P_FS, TotalSoft_VG_TV_P_FF, TotalSoft_VG_TV_P_H, TotalSoft_VG_TV_P_CBgC, TotalSoft_VG_TV_P_CC, TotalSoft_VG_TV_P_HBgC, TotalSoft_VG_TV_P_HC, TotalSoft_VG_TV_P_BS, TotalSoft_VG_TV_P_BC, TotalSoft_VG_TV_V_PBImgs, TotalSoft_VG_TV_Ic_S, TotalSoft_VG_TV_Ic_C, TotalSoft_VG_TV_Ic_T) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Thumbnails Video 2', 'Thumbnails Video', 'normal', 'popout', '0.1', '400', '#009491', '30', '8', '8', '1', '20', '#009491', '320', '180', 'true', '#ffffff', '#009491', '14', 'Arabic Typesetting', 'bottom', '#000000', '0.15', 'true', '#009491', '0', '#ffffff', 'true', '#009491', '25', 'Gabriola', '#ffffff', 'center', '#ffffff', '16', '#009491', '#ffffff', '0', '0.1', '#009491', '#ffffff', '100', 'Next', 'Prev', '#ffffff', '#009491', '21', 'Gabriola', '29', '#009491', '#ffffff', '#009491', '#e0e0e0', 'none', '#009491', '5', '45', '#ffffff', 'totalsoft totalsoft-play-circle'));
	}
	$TotalSoftGVEff4Count=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE id>%d",0));
	if(count($TotalSoftGVEff4Count)==0)
	{
		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Content Popup'));

		if(!$TotalSoftGalleryV_SetNameID)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Content Popup', 'Content Popup'));
			$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Content Popup'));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_CP_W, TotalSoft_VG_CP_H, TotalSoft_VG_CP_BW, TotalSoft_VG_CP_BC, TotalSoft_VG_CP_PB, TotalSoft_VG_CP_BSShow, TotalSoft_VG_CP_BSW, TotalSoft_VG_CP_BSC, TotalSoft_VG_CP_HEff, TotalSoft_VG_CP_HOC, TotalSoft_VG_CP_HOO, TotalSoft_VG_CP_TShow, TotalSoft_VG_CP_TC, TotalSoft_VG_CP_TFS, TotalSoft_VG_CP_TFF, TotalSoft_VG_CP_TBgC, TotalSoft_VG_CP_DShow, TotalSoft_VG_CP_DC, TotalSoft_VG_CP_DFS, TotalSoft_VG_CP_DFF, TotalSoft_VG_CP_LATW, TotalSoft_VG_CP_LATC, TotalSoft_VG_CP_LText, TotalSoft_VG_CP_LBW, TotalSoft_VG_CP_LBC, TotalSoft_VG_CP_LBR, TotalSoft_VG_CP_LBgC, TotalSoft_VG_CP_LC, TotalSoft_VG_CP_LFS, TotalSoft_VG_CP_LFF, TotalSoft_VG_CP_LHBgC, TotalSoft_VG_CP_LHC, TotalSoft_VG_CP_P_NBT, TotalSoft_VG_CP_P_PBT, TotalSoft_VG_CP_P_BgC, TotalSoft_VG_CP_P_C, TotalSoft_VG_CP_P_FS, TotalSoft_VG_CP_P_FF, TotalSoft_VG_CP_P_CBgC, TotalSoft_VG_CP_P_CC, TotalSoft_VG_CP_P_HBgC, TotalSoft_VG_CP_P_HC, TotalSoft_VG_CP_P_BS, TotalSoft_VG_CP_P_BC, TotalSoft_VG_CP_Pop_BgC, TotalSoft_VG_CP_Pop_BW, TotalSoft_VG_CP_Pop_BS, TotalSoft_VG_CP_Pop_BC, TotalSoft_VG_CP_Pop_TFS, TotalSoft_VG_CP_Pop_TFF, TotalSoft_VG_CP_Pop_TC, TotalSoft_VG_CP_Pop_TBgC, TotalSoft_VG_CP_Pop_TTA, TotalSoft_VG_CP_Pop_DFS, TotalSoft_VG_CP_Pop_DFF, TotalSoft_VG_CP_Pop_DC, TotalSoft_VG_CP_Pop_DBgC, TotalSoft_VG_CP_Pop_LText, TotalSoft_VG_CP_Pop_LBW, TotalSoft_VG_CP_Pop_LBS, TotalSoft_VG_CP_Pop_LBC, TotalSoft_VG_CP_Pop_LBR, TotalSoft_VG_CP_Pop_LBgC, TotalSoft_VG_CP_Pop_LC, TotalSoft_VG_CP_Pop_LFS, TotalSoft_VG_CP_Pop_LFF, TotalSoft_VG_CP_Pop_LHBgC, TotalSoft_VG_CP_Pop_LHC, TotalSoft_VG_CP_Pop_IBgC, TotalSoft_VG_CP_Pop_CIS, TotalSoft_VG_CP_Pop_CIC, TotalSoft_VG_CP_Pop_CIT, TotalSoft_VG_CP_Pop_CIcon, TotalSoft_VG_CP_Pop_AS, TotalSoft_VG_CP_Pop_AC, TotalSoft_VG_CP_Pop_AT, TotalSoft_VG_CP_Pop_ALeft, TotalSoft_VG_CP_Pop_ARight, TotalSoft_VG_CP_LShow) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Content Popup', 'Content Popup', '250', '150', '5', '#ffffff', '10', 'true', '15', '#009491', '1', '#009491', '60', 'true', '#009491', '16', 'Gabriola', '#ffffff', 'true', '#ffffff', '15', 'Gabriola', '2', '#000000', 'View More ....', '2', '#ffffff', '20', '#ffffff', '#000000', '23', 'Gabriola', '#000000', '#ffffff', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '#009491', '#ffffff', '#009491', '#000000', 'solid', '#ffffff', '#ffffff', '0', 'solid', '#ffffff', '23', 'Gabriola', '#ffffff', '#009491', 'center', '19', 'Gabriola', '#009491', '#ffffff', 'View More ....', '2', 'solid', '#ffffff', '16', '#009491', '#ffffff', '16', 'Gabriola', '#ffffff', '#009491', '#009491', '25', '#ffffff', '1', 'totalsoft totalsoft-times', '25', '#ffffff', '1', 'totalsoft totalsoft-angle-double-left', 'totalsoft totalsoft-angle-double-right', 'false'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Content Popup 2'));

		if(!$TotalSoftGalleryV_SetNameID)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Content Popup 2', 'Content Popup'));
			$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Content Popup 2'));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_CP_W, TotalSoft_VG_CP_H, TotalSoft_VG_CP_BW, TotalSoft_VG_CP_BC, TotalSoft_VG_CP_PB, TotalSoft_VG_CP_BSShow, TotalSoft_VG_CP_BSW, TotalSoft_VG_CP_BSC, TotalSoft_VG_CP_HEff, TotalSoft_VG_CP_HOC, TotalSoft_VG_CP_HOO, TotalSoft_VG_CP_TShow, TotalSoft_VG_CP_TC, TotalSoft_VG_CP_TFS, TotalSoft_VG_CP_TFF, TotalSoft_VG_CP_TBgC, TotalSoft_VG_CP_DShow, TotalSoft_VG_CP_DC, TotalSoft_VG_CP_DFS, TotalSoft_VG_CP_DFF, TotalSoft_VG_CP_LATW, TotalSoft_VG_CP_LATC, TotalSoft_VG_CP_LText, TotalSoft_VG_CP_LBW, TotalSoft_VG_CP_LBC, TotalSoft_VG_CP_LBR, TotalSoft_VG_CP_LBgC, TotalSoft_VG_CP_LC, TotalSoft_VG_CP_LFS, TotalSoft_VG_CP_LFF, TotalSoft_VG_CP_LHBgC, TotalSoft_VG_CP_LHC, TotalSoft_VG_CP_P_NBT, TotalSoft_VG_CP_P_PBT, TotalSoft_VG_CP_P_BgC, TotalSoft_VG_CP_P_C, TotalSoft_VG_CP_P_FS, TotalSoft_VG_CP_P_FF, TotalSoft_VG_CP_P_CBgC, TotalSoft_VG_CP_P_CC, TotalSoft_VG_CP_P_HBgC, TotalSoft_VG_CP_P_HC, TotalSoft_VG_CP_P_BS, TotalSoft_VG_CP_P_BC, TotalSoft_VG_CP_Pop_BgC, TotalSoft_VG_CP_Pop_BW, TotalSoft_VG_CP_Pop_BS, TotalSoft_VG_CP_Pop_BC, TotalSoft_VG_CP_Pop_TFS, TotalSoft_VG_CP_Pop_TFF, TotalSoft_VG_CP_Pop_TC, TotalSoft_VG_CP_Pop_TBgC, TotalSoft_VG_CP_Pop_TTA, TotalSoft_VG_CP_Pop_DFS, TotalSoft_VG_CP_Pop_DFF, TotalSoft_VG_CP_Pop_DC, TotalSoft_VG_CP_Pop_DBgC, TotalSoft_VG_CP_Pop_LText, TotalSoft_VG_CP_Pop_LBW, TotalSoft_VG_CP_Pop_LBS, TotalSoft_VG_CP_Pop_LBC, TotalSoft_VG_CP_Pop_LBR, TotalSoft_VG_CP_Pop_LBgC, TotalSoft_VG_CP_Pop_LC, TotalSoft_VG_CP_Pop_LFS, TotalSoft_VG_CP_Pop_LFF, TotalSoft_VG_CP_Pop_LHBgC, TotalSoft_VG_CP_Pop_LHC, TotalSoft_VG_CP_Pop_IBgC, TotalSoft_VG_CP_Pop_CIS, TotalSoft_VG_CP_Pop_CIC, TotalSoft_VG_CP_Pop_CIT, TotalSoft_VG_CP_Pop_CIcon, TotalSoft_VG_CP_Pop_AS, TotalSoft_VG_CP_Pop_AC, TotalSoft_VG_CP_Pop_AT, TotalSoft_VG_CP_Pop_ALeft, TotalSoft_VG_CP_Pop_ARight, TotalSoft_VG_CP_LShow) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Content Popup 2', 'Content Popup', '250', '150', '5', '#ffffff', '10', 'true', '15', '#ffffff', '8', '#009491', '60', 'true', '#009491', '16', 'Gabriola', '#ffffff', 'false', '#ffffff', '15', 'Gabriola', '2', '#000000', 'View More ....', '2', '#ffffff', '20', '#ffffff', '#000000', '23', 'Gabriola', '#000000', '#ffffff', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '#009491', '#ffffff', '#009491', '#000000', 'solid', '#ffffff', '#ffffff', '0', 'solid', '#ffffff', '23', 'Gabriola', '#ffffff', '#009491', 'center', '19', 'Gabriola', '#009491', '#ffffff', 'View More ....', '2', 'solid', '#ffffff', '16', '#009491', '#ffffff', '16', 'Gabriola', '#ffffff', '#009491', '#009491', '25', '#ffffff', '1', 'totalsoft totalsoft-times', '25', '#ffffff', '1', 'totalsoft totalsoft-angle-double-left', 'totalsoft totalsoft-angle-double-right', 'false'));
	}
	$TotalSoftGVEff5Count=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE id>%d",0));
	if(count($TotalSoftGVEff5Count)==0)
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Elastic Gallery', 'Elastic Gallery'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Elastic Gallery'));
		
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_HLG_W, TotalSoft_VG_HLG_H, TotalSoft_VG_HLG_BW, TotalSoft_VG_HLG_BS, TotalSoft_VG_HLG_BC, TotalSoft_VG_HLG_BSh, TotalSoft_VG_HLG_BShC, TotalSoft_VG_HLG_IHovT, TotalSoft_VG_HLG_IHovTr, TotalSoft_VG_HLG_TFS, TotalSoft_VG_HLG_TC, TotalSoft_VG_HLG_TFF, TotalSoft_VG_HLG_TBgC, TotalSoft_VG_HLG_THovT, TotalSoft_VG_HLG_THovTr, TotalSoft_VG_HLG_ShowT, TotalSoft_VG_HLG_TOp, TotalSoft_VG_HLG_PIcS, TotalSoft_VG_HLG_PIcC, TotalSoft_VG_HLG_PIcT, TotalSoft_VG_HLG_PIcBW, TotalSoft_VG_HLG_PIcBC, TotalSoft_VG_HLG_PIcBS, TotalSoft_VG_HLG_PIcBgC, TotalSoft_VG_HLG_LC, TotalSoft_VG_HLG_LBC, TotalSoft_VG_HLG_LBgC, TotalSoft_VG_HLG_LIcT, TotalSoft_VG_HLG_POvBgC, TotalSoft_VG_HLG_POvBgCOp, TotalSoft_VG_HLG_PSShChDur, TotalSoft_VG_HLG_PSlOpC, TotalSoft_VG_HLG_PSlOpFS, TotalSoft_VG_HLG_PDelIcT, TotalSoft_VG_HLG_PSlIcFS, TotalSoft_VG_HLG_PSlIcC, TotalSoft_VG_HLG_PSlIcBgC, TotalSoft_VG_HLG_PSlIcT, TotalSoft_VG_HLG_PSlAutPl, TotalSoft_VG_HLG_PSlLoop, TotalSoft_VG_HLG_PSlBW, TotalSoft_VG_HLG_PSlBS, TotalSoft_VG_HLG_PSlBC, TotalSoft_VG_HLG_PSlBSh, TotalSoft_VG_HLG_PSlBShC, TotalSoft_VG_HLG_P_NBT, TotalSoft_VG_HLG_P_PBT, TotalSoft_VG_HLG_P_BgC, TotalSoft_VG_HLG_P_C, TotalSoft_VG_HLG_P_FS, TotalSoft_VG_HLG_P_FF, TotalSoft_VG_HLG_P_H, TotalSoft_VG_HLG_P_CBgC, TotalSoft_VG_HLG_P_CC, TotalSoft_VG_HLG_P_HBgC, TotalSoft_VG_HLG_P_HC, TotalSoft_VG_HLG_P_BS, TotalSoft_VG_HLG_P_BC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Elastic Gallery', 'Elastic Gallery', '240', '140', '3', 'solid', '#ffffff', '15', '#009491', 'zEff1', '4', '19', '#ffffff', 'Aldhabi', '#009491', 'zTitfHov1', '4', 'true', '70', '14', '#009491', 'totalsoft totalsoft-file-video-o', '1', '#ffffff', 'solid', '#ffffff', '#009491', '#ffffff', '#ffffff', 'totalsoft totalsoft-link', '#ffffff', '0', '6', '#ffffff', '30', 'totalsoft totalsoft-times-circle', '30', '#ffffff', '#009491', '1', 'false', 'true', '10', 'solid', '#ffffff', '30', '#009491', 'Prev', 'Next', '#ffffff', '#009491', '14', 'Aldhabi', '19', '#009491', '#ffffff', '#009491', '#ffffff', 'solid', '#009491'));
		
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType) VALUES (%d, %s, %s)", '', 'Elastic Gallery 2', 'Elastic Gallery'));

		$TotalSoftGalleryV_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName=%s order by id desc limit 1", 'Elastic Gallery 2'));
		
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoftGalleryV_SetID, TotalSoftGalleryV_SetName, TotalSoftGalleryV_SetType, TotalSoft_VG_HLG_W, TotalSoft_VG_HLG_H, TotalSoft_VG_HLG_BW, TotalSoft_VG_HLG_BS, TotalSoft_VG_HLG_BC, TotalSoft_VG_HLG_BSh, TotalSoft_VG_HLG_BShC, TotalSoft_VG_HLG_IHovT, TotalSoft_VG_HLG_IHovTr, TotalSoft_VG_HLG_TFS, TotalSoft_VG_HLG_TC, TotalSoft_VG_HLG_TFF, TotalSoft_VG_HLG_TBgC, TotalSoft_VG_HLG_THovT, TotalSoft_VG_HLG_THovTr, TotalSoft_VG_HLG_ShowT, TotalSoft_VG_HLG_TOp, TotalSoft_VG_HLG_PIcS, TotalSoft_VG_HLG_PIcC, TotalSoft_VG_HLG_PIcT, TotalSoft_VG_HLG_PIcBW, TotalSoft_VG_HLG_PIcBC, TotalSoft_VG_HLG_PIcBS, TotalSoft_VG_HLG_PIcBgC, TotalSoft_VG_HLG_LC, TotalSoft_VG_HLG_LBC, TotalSoft_VG_HLG_LBgC, TotalSoft_VG_HLG_LIcT, TotalSoft_VG_HLG_POvBgC, TotalSoft_VG_HLG_POvBgCOp, TotalSoft_VG_HLG_PSShChDur, TotalSoft_VG_HLG_PSlOpC, TotalSoft_VG_HLG_PSlOpFS, TotalSoft_VG_HLG_PDelIcT, TotalSoft_VG_HLG_PSlIcFS, TotalSoft_VG_HLG_PSlIcC, TotalSoft_VG_HLG_PSlIcBgC, TotalSoft_VG_HLG_PSlIcT, TotalSoft_VG_HLG_PSlAutPl, TotalSoft_VG_HLG_PSlLoop, TotalSoft_VG_HLG_PSlBW, TotalSoft_VG_HLG_PSlBS, TotalSoft_VG_HLG_PSlBC, TotalSoft_VG_HLG_PSlBSh, TotalSoft_VG_HLG_PSlBShC, TotalSoft_VG_HLG_P_NBT, TotalSoft_VG_HLG_P_PBT, TotalSoft_VG_HLG_P_BgC, TotalSoft_VG_HLG_P_C, TotalSoft_VG_HLG_P_FS, TotalSoft_VG_HLG_P_FF, TotalSoft_VG_HLG_P_H, TotalSoft_VG_HLG_P_CBgC, TotalSoft_VG_HLG_P_CC, TotalSoft_VG_HLG_P_HBgC, TotalSoft_VG_HLG_P_HC, TotalSoft_VG_HLG_P_BS, TotalSoft_VG_HLG_P_BC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGalleryV_SetNameID[0]->id, 'Elastic Gallery 2', 'Elastic Gallery', '240', '140', '3', 'solid', '#ffffff', '15', '#009491', 'zEff3', '3', '19', '#ffffff', 'Aldhabi', '#009491', 'zTitfHov2', '3', 'true', '90', '14', '#009491', 'totalsoft totalsoft-file-video-o', '1', '#ffffff', 'solid', '#ffffff', '#009491', '#ffffff', '#ffffff', 'totalsoft totalsoft-link', '#ffffff', '100', '6', '#ffffff', '30', 'totalsoft totalsoft-times-circle', '30', '#ffffff', '#009491', '1', 'false', 'true', '10', 'solid', '#ffffff', '30', '#009491', 'Prev', 'Next', '#ffffff', '#009491', '14', 'Aldhabi', '19', '#009491', '#ffffff', '#009491', '#ffffff', 'solid', '#009491'));
	}			
?>