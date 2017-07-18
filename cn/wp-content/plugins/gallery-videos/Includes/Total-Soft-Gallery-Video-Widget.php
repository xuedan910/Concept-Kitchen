<?php
	class Total_Soft_Gallery_Video extends WP_Widget
	{
		function __construct()
 	  	{
 			$params=array('name'=>'Total Soft Gallery Video','description'=>'This is the widget of Total Soft Gallery Video plugin');
			parent::__construct('Total_Soft_Gallery_Video','',$params);
 	  	}
 	  	function form($instance)
 		{
 			$defaults = array('Total_Soft_Gallery_Video'=>'');
		    $instance = wp_parse_args((array)$instance, $defaults);

		   	$Gallery_Video = $instance['Gallery_Video'];
		   	?>
		   	<div>			  
			   	<p>
			   		Gallery Video Title:
			   		<select name="<?php echo $this->get_field_name('Gallery_Video'); ?>" class="widefat">
				   		<?php
				   			global $wpdb;

							$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
							$Total_Soft_Gallery_Video=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d", 0));
				   			
				   			foreach ($Total_Soft_Gallery_Video as $Total_Soft_Gallery_Video1)
				   			{
				   				?> <option value="<?php echo $Total_Soft_Gallery_Video1->id; ?>"> <?php echo $Total_Soft_Gallery_Video1->TotalSoftGallery_Video_Gallery_Title; ?> </option> <?php 
				   			}
				   		?>
			   		</select>
			   	</p>
		   	</div>
		   	<?php
 		}
 		function widget($args,$instance)
 		{
 			extract($args);
 		 	$Total_Soft_Gallery_Video = empty($instance['Gallery_Video']) ? '' : $instance['Gallery_Video'];
 		 	global $wpdb;
			$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
			$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";
			$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
			$table_name5 = $wpdb->prefix . "totalsoft_galleryv_gvg";
			$table_name6 = $wpdb->prefix . "totalsoft_galleryv_lvg";
			$table_name7 = $wpdb->prefix . "totalsoft_galleryv_ttvg";
			$table_name8 = $wpdb->prefix . "totalsoft_galleryv_ctpg";
			$table_name9 = $wpdb->prefix . "totalsoft_galleryv_hlg";

			$Total_Soft_GalleryV_Man=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $Total_Soft_Gallery_Video));
			$Total_Soft_GalleryV_Videos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID = %s order by id", $Total_Soft_Gallery_Video));
			$Total_Soft_GalleryV_Type=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE TotalSoftGalleryV_SetName = %s", $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_Option));

			if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery')
			{
				$TotalSoftGallery_Video_Opt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}
			else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery')
			{
				$TotalSoftGallery_Video_Opt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}
			else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Thumbnails Video')
			{
				$TotalSoftGallery_Video_Opt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}
			else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Content Popup')
			{
				$TotalSoftGallery_Video_Opt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}
			else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery')
			{
				$TotalSoftGallery_Video_Opt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE TotalSoftGalleryV_SetID = %s", $Total_Soft_GalleryV_Type[0]->id));
			}
		
 		 	echo $before_widget;
 		 	
			if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_ShowT=='true'){
				$TotalSoft_VG_HLG_ShowT='inline';
			}else{
				$TotalSoft_VG_HLG_ShowT='none';
			}
			if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='1'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-angle-double-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-angle-double-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='2'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-angle-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-angle-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='3'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-arrow-circle-left';	$TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-arrow-circle-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='4'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-arrow-circle-o-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-arrow-circle-o-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='5'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-arrow-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-arrow-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='6'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-caret-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-caret-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='7'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-caret-square-o-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-caret-square-o-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='8'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-chevron-circle-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-chevron-circle-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='9'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-chevron-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-chevron-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='10'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-hand-o-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-hand-o-right'; }
			else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcT=='11'){ $TotalSoft_VG_HLG_PSlIcT_Left='totalsoft totalsoft-long-arrow-left'; $TotalSoft_VG_HLG_PSlIcT_Right='totalsoft totalsoft-long-arrow-right'; }
			
 		 	if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Grid Video Gallery'){ ?>
 		 		<style type="text/css">
 		 			.grid li {
 		 				width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_CC;?>px;
 		 			}
 		 			.grid figure {
						padding: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_PB;?>px;
					}
					.grid-gallery figure img {
						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_VR;?>px;
					}
					.grid li:hover figure {
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='none'){ ?>
							-webkit-filter: none; 
							filter:none;
						<?php } else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='blur'){ ?>
							-webkit-filter: blur(2px);
							filter:blur(2px);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='brightness'){ ?>
							-webkit-filter: brightness(120%);
							filter:brightness(120%);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='contrast'){ ?>
							-webkit-filter: contrast(150%);
							filter:contrast(150%);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='grayscale'){ ?>
							-webkit-filter: grayscale(100%);
							filter:grayscale(100%);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='hue-rotate'){ ?>
							-webkit-filter: hue-rotate(90deg);
							filter:hue-rotate(90deg);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='invert'){ ?>
							-webkit-filter: invert(100%);
							filter:invert(100%);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='drop-shadow'){ ?>
							-webkit-filter: drop-shadow(0px 0px 20px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DSC;?>);
							filter:drop-shadow(0px 0px 20px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DSC;?>);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='opacity'){ ?>
							-webkit-filter: opacity(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HO*100;?>%); 
							filter:opacity(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HO*100;?>%);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='saturate'){ ?>
							-webkit-filter: saturate(8); 
							filter:saturate(8);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='sepia'){ ?>
							-webkit-filter: sepia(100%); 
							filter:sepia(100%);
						<?php }else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_HE=='contrast-brightness'){ ?>
							-webkit-filter: contrast(120%) brightness(120%); 
							filter:contrast(120%) brightness(120%);
						<?php }?>
					}
					.grid figcaption {
						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TDA_BgC;?>;
						margin-top: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TDA_MT;?>px;
					}
					.grid-gallery figcaption h3 {
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TC;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TTA;?>;
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_LAT_W;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_LAT_S;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_LAT_C;?>;
					}
					.grid-gallery figcaption p {
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DC;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DTA;?>;
					}
					.slideshow figure {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BgC;?>;
						border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BC;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BR;?>px;
						padding: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_Pad;?>px;
						max-width:100%;
						max-height:94%;
					}
					.slideshow li:after {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BgC;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BR;?>px;
						opacity: 0.8;
					}
					
					.slideshow figcaption h3 {
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TC;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TTA;?>;
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LAT_W;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LAT_S;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LAT_C;?>;
					}
					.slideshow figcaption p {
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DC;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DTA;?>;
					}
					.slideshow nav span.nav-prev, .slideshow nav span.nav-next {
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_AFS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_AC;?>;
					}
					.slideshow nav span.nav-close {
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_CFS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_CC;?>;
					}
					.TotalSoft_GV_GVG_Link
					{
						position: absolute;
						padding: 3px 10px;
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TTA=='right'){ echo 'left';} else{ echo 'right';} ?>: 4%;
						
						border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LBW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LBS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LBC;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LBR;?>px;
						text-decoration: none;
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LC;?>;
					}
					.TotalSoft_GV_GVG_Link:hover
					{
						text-decoration: none;
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LHBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LHC;?>;
					}
					ul.pagination li {
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
					}
					ul.pagination li span {
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_FF;?>;
						height:auto !important;
					}
					ul.pagination li span:hover:not(.active) {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_HC;?>;
					}
					ul.pagination li span.active {
					    background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_CBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_CC;?>;
					}
					.TotalSoftGV_GVG_LM
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_FF;?>;
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
					}
					.TotalSoftGV_GVG_LM:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_HC;?>;
					}
					.slideshow figcaption p::-webkit-scrollbar {
						width: 0.5em;
					}

					.slideshow figcaption p::-webkit-scrollbar-track {
						-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_BgC;?>;
					}

					.slideshow figcaption p::-webkit-scrollbar-thumb {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DC;?>;
						outline: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DC;?>;
					}
 		 		</style>
 		 		<div class="container">
					<div id="grid-gallery" class="grid-gallery">
						<section class="grid-wrap GRWR">
							<ul class="GRU grid" style='margin:0px;list-style:none;max-width:none;'>
								<li class="grid-sizer"></li>
								<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?> 
									<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
										<li class='imgLiii' id="TotalSoft_GV_GVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
											<figure>
												<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="img<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>"/>
												<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TShow=='true' || $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DShow=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
													<figcaption>
													<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TShow=='true'){ ?> 
														<h3><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h3>
													<?php }?>
													<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DShow=='true'){ ?> 
														<p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
													<?php }?>											
												</figcaption>
												<?php }?>
											</figure>
										</li>
									<?php } else { ?> 
										<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?> 
											<li class='imgLiii' id="TotalSoft_GV_GVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">
												<figure>
													<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="img<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>"/>
													<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TShow=='true' || $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DShow=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
														<figcaption>
														<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TShow=='true'){ ?> 
															<h3><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h3>
														<?php }?>
														<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DShow=='true'){ ?> 
															<p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
														<?php }?>											
													</figcaption>
													<?php }?>
												</figure>
											</li>
										<?php } else { ?> 
											<li class='imgLiii' style="display:none;" id="TotalSoft_GV_GVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>>
												<figure>
													<img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="img<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>"/>
													<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TShow=='true' || $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DShow=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
														<figcaption>
														<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_TShow=='true'){ ?> 
															<h3><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h3>
														<?php }?>
														<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_DShow=='true'){ ?> 
															<p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
														<?php }?>											
													</figcaption>
													<?php }?>
												</figure>
											</li>
										<?php }?>
									<?php }?>
								<?php }?>
							</ul>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
								<div class="TotalSoftcenter">
								  <ul class="pagination">
								    <li onclick="Total_Soft_GV_GVG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_PBT;?></span></li>
								    <?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
								    	<?php if($i==1){ ?>
								    		<li id="TotalSoft_GV_GVG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_GVG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
								    	<?php } else { ?>
								   			<li id="TotalSoft_GV_GVG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_GVG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
								    	<?php }?>
								   	<?php }?>
								    <li onclick="Total_Soft_GV_GVG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_P_NBT;?></span></li>
								  </ul>
								</div>
							<?php }?>
							<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
								<div class="TotalSoftcenter" id="TotalSoftPageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
									<span class="TotalSoftGV_GVG_LM" onclick="Total_Soft_GV_GVG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
									<input type="text" style="display:none;" id="TotalSoftPage_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
								</div>
							<?php }?>
						</section>
						<section class="slideshow">
							<ul>
								<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?> 
									<li>									
										<figure>
											<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TShow=='true' || $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DShow=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?>
												<figcaption>
												<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TShow=='true'){ ?> 
													<h3>
														<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
													</h3>
												<?php }?>
												
												<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DShow=='true' && $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc != ''){ ?> 
													<p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
												<?php }?>	
												
												<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
													<div style='height:30px;margin-top:10px;text-align:right;'>
														<a class="TotalSoft_GV_GVG_Link" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>" <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LText;?></a>
													</div>
												<?php }?>
											
											</figcaption>
											<?php }?>
											<iframe src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" frameborder="0" allowfullscreen></iframe>
											
										</figure>
									</li>
								<?php }?>
							</ul>
							<nav>
								<span class="icon nav-prev"><i class="<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_ALeft?>"></i></span>
								<span class="icon nav-next"><i class="<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_ARight?>"></i></span>
								<span class="icon nav-close"><i class="<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_CIcon?>"></i></span>
							</nav>
						</section>
					</div>
				</div>
				<input type='text' style='display:none;' class='ImgWidthhhh' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_CC;?>'>
				<input type='text' style='display:none;' class='VTitlePOpFS' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_TFS;?>'>
				<input type='text' style='display:none;' class='VDescPOpFS' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_DFS;?>'>
				<input type='text' style='display:none;' class='VLinkPOpFS' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_GVG_Pop_LFS;?>'>
				<script src="<?php echo plugins_url('../JS/imagesloaded.pkgd.min.js',__FILE__);?>" type="text/javascript"></script>
				<script src="<?php echo plugins_url('../JS/masonry.pkgd.min.js',__FILE__);?>" type="text/javascript"></script>
				<script src="<?php echo plugins_url('../JS/classie.js',__FILE__);?>" type="text/javascript"></script>
				<script>
					new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
				</script>
				<script>
					jQuery(document).ready(function(){
						var ImgWidthhhh = jQuery('.ImgWidthhhh').val();
						var VTitlePOpFS = jQuery('.VTitlePOpFS').val();
						var VDescPOpFS = jQuery('.VDescPOpFS').val();
						var VLinkPOpFS = jQuery('.VLinkPOpFS').val();
						function resp(){
							jQuery('.slideshow ul li figure iframe').css('width',jQuery('.slideshow ul li figure iframe').height()*16/9);
							jQuery('.slideshow figcaption h3').css('font-size',VTitlePOpFS*jQuery(window).width()/(jQuery(window).width()+150));
							jQuery('.slideshow figcaption p').css('font-size',VDescPOpFS*jQuery(window).width()/(jQuery(window).width()+150));
							jQuery('.slideshow figcaption p').css('line-height',jQuery('.slideshow figcaption p').css('font-size'));
							jQuery('.TotalSoft_GV_GVG_Link').css('font-size',VLinkPOpFS*jQuery(window).width()/(jQuery(window).width()+150));
							jQuery('.grid li').css('width',ImgWidthhhh*jQuery('.GRWR').width()/1000);
							if(jQuery('.GRWR').width()<=300){
								jQuery('.GRU li').css('width',ImgWidthhhh*jQuery('.GRWR').width()/300+'px');
							}else if(jQuery('.GRWR').width()<=700){
								jQuery('.GRU li').css('width',ImgWidthhhh*jQuery('.GRWR').width()/700+'px');
							}else if(jQuery('.GRWR').width()<=1000){
								jQuery('.GRU li').css('width',ImgWidthhhh*jQuery('.GRWR').width()/1000+'px');
							}else if(jQuery('.GRWR').width()<=1500){
								jQuery('.GRU li').css('width',ImgWidthhhh*jQuery('.GRWR').width()/1500+'px');
							}else if(jQuery('.GRWR').width()<=1800){
								jQuery('.GRU li').css('width',ImgWidthhhh*jQuery('.GRWR').width()/1800+'px');
							}
						}
						resp();
						jQuery(window).resize(function(){
							resp();
						})
					})
				</script>
		 	<?php } else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='LightBox Video Gallery'){?>
					
			    <script src="<?php echo plugins_url('../JS/jquery.quicksand.js',__FILE__);?>" type="text/javascript"></script>
			    <script src="<?php echo plugins_url('../JS/jquery.easing.js',__FILE__);?>" type="text/javascript"></script>
			    <script src="<?php echo plugins_url('../JS/script.js',__FILE__);?>" type="text/javascript"></script>
			   
			    <style type="text/css">
			    	.totalsoft-gv-lvg-area li
					{
						width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_CC;?>px;
						margin: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_PB;?>px;
						border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_VBW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_VBS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_VBC;?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pad;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_BgC;?>;
						padding:0px !important;
					}
					.totalsoft-gv-lvg-image-block img
					{
						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_VBR;?>px;
						margin: 0;
					}
					div.pp_pic_holder
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_BgC;?>;
						border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_BW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_BS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_BC;?>;
						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_BR;?>px;
					}
					.pp_description
					{
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TTA;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TC;?>;
					}
					.totalsoft-gv-lvg-pl-pa
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_PIS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_PIC;?>;
						margin-top: 3px;
					}
					.totalsoft-gv-lvg-close
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_CIS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_CIC;?>;    					
					}
					.totalsoft-gv-lvg-close span
					{
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_CTF;?>;
						margin-left:3px;
					}
					.totalsoft-gv-lvg-nepr
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_ArrS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_ArrC;?>; 
					}
					.totalsoft-gv-lvg-text
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_NFS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_NC;?>; 
					}
					ul.pagination li {
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						list-style:none !important;
					}
					ul.pagination li span {
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_FF;?>;
						height:auto !important;
					}
					ul.pagination li span:hover:not(.active) {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_HC;?>;
					}
					ul.pagination li span.active {
					    background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_CBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_CC;?>;
					}
					.TotalSoftGV_LVG_LM
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_FF;?>;
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
					}
					.TotalSoftGV_LVG_LM:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_HC;?>;
					}
					.fHeightZoom{
						position:relative;
						perspective: 800px;
						overflow:hidden;
					}
					
					.lImgZoom1{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom1{
						width:200%;
						left:-50%;
						top:-50%;
						-ms-transform:rotate(25deg);
						-webkit-transform:rotate(25deg);
						transform:rotate(25deg);
					}
					.lImgZoom2{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom2{
						width:200%;
						left:-50%;
						top:-50%;
						-ms-transform:rotate(-25deg);
						-webkit-transform:rotate(-25deg);
						transform:rotate(-25deg);
					}
					.lImgZoom3{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom3{
						width:150%;
					}
					.lImgZoom4{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom4{
						width:150%;
						left:-25%;
						top:-25%;
					}
					.lImgZoom5{
						position:absolute;
						top:0px;
						right:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom5{
						width:150%;
					}
					.lImgZoom6{
						position:absolute;
						bottom:0px;
						right:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom6{
						width:150%;
					}
					.lImgZoom7{
						position:absolute;
						bottom:0px;
						left:0px;
						width:100%;
						max-width:none !important;
						-ms-transform:rotate(0deg);
						-webkit-transform:rotate(0deg);
						transform:rotate(0deg);
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .lImgZoom7{
						width:150%;
					}
					.hovLayTVG1{
						position:absolute;
						top:0px;
						left:0px;
						width:100%;
						height:100%;
						max-width:none !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?>;
						opacity:0;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear;
					}
					.fHeightZoom:hover .hovLayTVG1{
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?>;
					}
					.hovLayTVG2{
						position:absolute !important;
						top:0% !important;
						left:100% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transform:rotate(-90deg) !important;
						-ms-transform:rotate(-90deg) !important;
						-webkit-transform:rotate(-90deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG2{
						left:0% !important;
						top:0% !important;
						transform:rotate(0deg) !important;
						-ms-transform:rotate(0deg) !important;
						-webkit-transform:rotate(0deg) !important;
					}
					.hovLayTVG3{
						position:absolute !important;
						top:0% !important;
						left:100% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transform:rotateY(-180deg) !important;
						-ms-transform:rotateY(-180deg) !important;
						-webkit-transform:rotateY(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG3{
						left:0% !important;
						top:0% !important;
						transform:rotateY(0deg) !important;
						-ms-transform:rotateY(0deg) !important;
						-webkit-transform:rotateY(0deg) !important;
					}					
					.hovLayTVG4{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG4{
						left:0% !important;
						top:0% !important;
						width:100% !important;
						height:100% !important;
						transform:rotate(0deg) !important;
						-ms-transform:rotate(0deg) !important;
						-webkit-transform:rotate(0deg) !important;
					}
					.hovLayTVG5{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG5{
						width:100% !important;
						height:100% !important;
						transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
					}
					.hovLayTVG6{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG6{
						width:100% !important;
						height:100% !important;
						transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
					}
					.hovLayTVG7{
						position:absolute !important;
						top:50% !important;
						left:50% !important;
						width:0% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG7{
						left:0% !important;
						top:0% !important;
						width:100% !important;
						height:100% !important;
					}
					.hovLayTVG8{
						position:absolute !important;
						top:50% !important;
						left:0% !important;
						width:100% !important;
						height:0% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						visibility:hidden !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG8{
						top:0% !important;
						height:100% !important;
						visibility:visible !important;
					}
					.hovLayTVG9{
						position:absolute !important;
						top:0% !important;
						left:50% !important;
						width:0% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG9{
						left:0% !important;
						width:100% !important;
					}
					.hovLayTVG10{
						position:absolute !important;
						top:-100% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG10{
						top:0% !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
					}
					.hovLayTVG11{
						position:absolute !important;
						top:0% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						border:20px solid red !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLayTVG11{
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
					}
					.hovLayTVG12{
						position:absolute !important;
						top:0% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						border:20px solid red !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}
					.hovLayTVG13{
						position:absolute !important;
						top:0% !important;
						left:0% !important;
						width:100% !important;
						height:100% !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Time/10;?>s linear !important;
					}					
					.hovTit1{
						position:absolute !important;
						top:-55% !important;
						width:100% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit1{
						top:5% !important;
					}
					.hovTit2{
						position:absolute !important;
						top:5% !important;
						left:100% !important;
						transform:rotate(-90deg) !important;
						-ms-transform:rotate(-90deg) !important;
						-webkit-transform:rotate(-90deg) !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit2{
						left:0% !important;
						transform:rotate(0deg) !important;
						-ms-transform:rotate(0deg) !important;
						-webkit-transform:rotate(0deg) !important;
					}
					.hovTit3{
						position:absolute !important;
						top:10% !important;
						left:15% !important;
						width:70% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:0px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						padding:0px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Bg_Color;?> !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit3{
						left:0% !important;
						top:5% !important;
						width:100% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Transparency/100;?> !important;
						padding:1px 0px !important;
					}					
					.hovTit4{
						position:absolute !important;
						top:25% !important;
						left:0% !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit4{
						top:5% !important;
					}
					.hovTit5{
						position:absolute !important;
						top:5% !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						padding:1px 0px !important;
						text-align:center !important;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Bg_Color;?> !important;
						opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.hovTit6{
						position:absolute !important;
						top:50% !important;
						left:0% !important;
						width:100% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit6{
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size-5;?>px !important;
						opacity:0 !important;
					}
					.hovTit7{
						position:absolute !important;
						top:100% !important;
						left:0% !important;
						width:100% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Bg_Color;?> !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						text-align:center !important;
						transform:translateY(0%);
						-ms-transform:translateY(0%);
						-webkit-transform:translateY(0%);
						opacity<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Transparency/100;?> !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit7{
						top:0% !important;
					}
					.hovTit8{
						position:absolute !important;
						top:50% !important;
						right:0% !important;
						width:85% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						text-align:left !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.hovTit9{
						position:absolute !important;
						top:40% !important;
						left:0% !important;
						width:100% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.hovTit10{
						position:absolute !important;
						top:20% !important;
						left:0% !important;
						width:0% !important;
						display:inline !important;
						padding:0px !important;
						margin:0px !important;
						left:50% !important;
						font-size:0px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit10{
						width:100% !important;
						top:30% !important;
						left:0% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
					}
					.hovTit11{
						position:absolute !important;
						top:20% !important;
						left:10% !important;
						width:40% !important;
						display:inline !important;
						transform:translateX(0%) !important;
						-ms-transform:translateX(0%) !important;
						-webkit-transform:translateX(0%) !important;
						padding:0px !important;
						margin:0px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Text_Shadow;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Color;?> !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovTit11{
						top:30% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						opacity:1 !important;
					}
					.hovLine1{
						position:absolute !important;
						width:10% !important;
						height:10% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine1{
						width:90% !important;
						height:90% !important;
						opacity:1 !important;
					}					
					.hovLine2{
						position:absolute !important;
						width:110% !important;
						height:110% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine2{
						width:90% !important;
						height:90% !important;
						opacity:1 !important;
					}
					.hovLine3{
						position:absolute !important;
						width:90% !important;
						height:90% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						border-right:0px solid #fff !important;
						top:50% !important;
						left:40% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine3{
						left:50% !important;
						opacity:1 !important;
					}
					.hovLine4{
						position:absolute !important;
						width:0% !important;
						height:0% !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						top:50% !important;
						left:10% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(0%) !important;
						-ms-transform:translateY(-50%) translateX(0%) !important;
						-webkit-transform:translateY(-50%) translateX(0%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine4{
						width:80% !important;
						opacity:1 !important;
					}
					.hovLine5{
						position:absolute !important;
						width:0% !important;
						height:90% !important;
						border-top:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						border-bottom:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine5{
						width:80% !important;
						opacity:1 !important;
					}
					.hovLine6{
						position:absolute !important;
						width:120px !important;
						height:120px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						border-radius:50% !important;
						top:100% !important;
						left:100% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) !important;
						-ms-transform:translateY(-50%) translateX(-50%) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine6{
						top:50% !important;
						left:50% !important;
						opacity:1 !important;
					}
					.hovLine7{
						position:absolute !important;
						width:0px !important;
						height:0px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Color;?> !important;
						top:50% !important;
						left:50% !important;
						opacity:0 !important;
						transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLine7{
						width:100px !important;
						height:100px !important;
						transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						-ms-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
						opacity:1 !important;
					}
					.hovLink1{
						position:absolute !important;
						top:40% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-size:0px !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink1{
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
					}
					.hovLink2{
						position:absolute !important;
						top:40% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink2{
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						opacity:1 !important;
					}
					.hovLink3{
						position:absolute !important;
						top:70% !important;
						left:5% !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink3{
						left:15% !important;
						opacity:1 !important;
					}
					.hovLink4{
						position:absolute !important;
						top:50% !important;
						left:90% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink4{
						left:50% !important;
						opacity:1 !important;
					}
					.hovLink5{
						position:absolute !important;
						top:80% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:0px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink5{
						top:50% !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						opacity:1 !important;
					}
					.hovLink6{
						position:absolute !important;
						top:50% !important;
						left:40% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:5px 0px !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink6{
						left:50% !important;
						opacity:1 !important;
					}
					.hovLink7{
						position:absolute !important;
						top:60% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:0px 7px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Color;?> !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink7{
						opacity:1 !important;
					}
					.hovLink8{
						position:absolute !important;
						top:-100% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:0px 7px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Color;?> !important;
						text-align:center !important;
						opacity:1 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink8{
						opacity:1 !important;
						top:60% !important;
					}
					.hovLink9{
						position:absolute !important;
						top:60% !important;
						left:50% !important;
						transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Shadow_Color;?>;
						font-size:0px !important;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Color;?> !important;
						padding:0px 7px !important;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Width;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Style;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Border_Color;?> !important;
						text-align:center !important;
						opacity:0 !important;
						transition: all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Time/10;?>s linear !important;
					}
					.fHeightZoom:hover .hovLink9{
						opacity:1 !important;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Font_Size;?>px !important;
					}
					.hovLink:hover{
						text-decoration:none;
					}
					.hovLink:focus{
						border:none;
					}								
			    </style>
			    <script type="text/javascript">
			    	(function($){$.prettyPhoto={version:'3.0'};$.fn.prettyPhoto=function(pp_settings){pp_settings=jQuery.extend({animation_speed:'fast',slideshow:false,autoplay_slideshow:false,opacity:0.80,show_title:true,allow_resize:true,default_width:500,default_height:344,counter_separator_label:'/',theme:'facebook',hideflash:false,wmode:'opaque',autoplay:true,modal:false,overlay_gallery:true,keyboard_shortcuts:true,changepicturecallback:function(){},callback:function(){},markup:'<div class="pp_pic_holder"> \
					      <div class="pp_top"> \
					       <div class="pp_left"></div> \
					       <div class="pp_middle"></div> \
					       <div class="pp_right"></div> \
					      </div> \
					      <div class="pp_content_container"> \
					       <div class="pp_left"> \
					       <div class="pp_right"> \
					        <div class="pp_content"> \
					         <div class="pp_loaderIcon"></div> \
					         <div class="pp_fade"> \
					          <a href="#" class="pp_expand" title="Expand the image">Expand</a> \
					          <div class="pp_hoverContainer"> \
					           <a class="pp_next" href="#">next</a> \
					           <a class="pp_previous" href="#">previous</a> \
					          </div> \
					          <div id="pp_full_res"></div> \
					          <div class="pp_details clearfix"> \
					           <p class="pp_description"></p> \
					           <i class="totalsoft-gv-lvg-close pp_close <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_CIcon;?>"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_CIT;?></span></i> \
					           <div class="pp_nav"> \
					            <i href="#" class="pp_arrow_previous totalsoft-gv-lvg-nepr <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_ALeft;?>"></i> \
					            <p class="currentTextHolder totalsoft-gv-lvg-text">0/0</p> \
					            <i href="#" class="pp_arrow_next totalsoft-gv-lvg-nepr <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_ARight;?>"></i> \
					           </div> \
					          </div> \
					         </div> \
					        </div> \
					       </div> \
					       </div> \
					      </div> \
					      <div class="pp_bottom"> \
					       <div class="pp_left"></div> \
					       <div class="pp_middle"></div> \
					       <div class="pp_right"></div> \
					      </div> \
					     </div> \
					     <div class="pp_overlay"></div>',gallery_markup:'<div class="pp_gallery"> \
					        <a href="#" class="pp_arrow_previous">Previous</a> \
					        <ul> \
					         {gallery} \
					        </ul> \
					        <a href="#" class="pp_arrow_next">Next</a> \
					       </div>',image_markup:'<iframe id="fullResImage" src=""  frameborder="0" allowfullscreen></iframe>',flash_markup:'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',quicktime_markup:'<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',iframe_markup:'<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',inline_markup:'<div class="pp_inline clearfix">{content}</div>',custom_markup:''},pp_settings);var matchedObjects=this,percentBased=false,correctSizes,pp_open,pp_contentHeight,pp_contentWidth,pp_containerHeight,pp_containerWidth,windowHeight=$(window).height(),windowWidth=$(window).width(),pp_slideshow;doresize=true,scroll_pos=_get_scroll();$(window).unbind('resize').resize(function(){_center_overlay();_resize_overlay();});if(pp_settings.keyboard_shortcuts){$(document).unbind('keydown').keydown(function(e){if(typeof $pp_pic_holder!='undefined'){if($pp_pic_holder.is(':visible')){switch(e.keyCode){case 37:$.prettyPhoto.changePage('previous');break;case 39:$.prettyPhoto.changePage('next');break;case 27:if(!settings.modal)
					$.prettyPhoto.close();break;};return false;};};});}
					$.prettyPhoto.initialize=function(){
					  settings=pp_settings;
					  if($.browser.msie&&parseInt($.browser.version)==6)settings.theme="light_square";
					  _buildOverlay(this);
					  if(settings.allow_resize)
					  $(window).scroll(function(){_center_overlay();});
					  _center_overlay();
					  set_position=jQuery.inArray($(this).attr('href'),pp_images);
					  $.prettyPhoto.open();
					  return false;
					}
					$.prettyPhoto.open=function(event){
					  if(typeof settings=="undefined")
					    {
					      settings=pp_settings;
					      if($.browser.msie&&$.browser.version==6)settings.theme="light_square";
					      _buildOverlay(event.target);
					      pp_images=$.makeArray(arguments[0]);
					      pp_titles=(arguments[1])?$.makeArray(arguments[1]):$.makeArray("");
					      pp_descriptions=(arguments[2])?$.makeArray(arguments[2]):$.makeArray("");
					      isSet=(pp_images.length>1)?true:false;
					      set_position=0;
					    }
					  if($.browser.msie&&$.browser.version==6)$('select').css('visibility','hidden');
					  if(settings.hideflash)$('object,embed').css('visibility','hidden');
					  _checkPosition($(pp_images).size());
					  $('.pp_loaderIcon').show();
					  if($ppt.is(':hidden'))$ppt.css('opacity',0).show();
					  $pp_overlay.show().fadeTo(settings.animation_speed,settings.opacity);
					  $pp_pic_holder.find('.currentTextHolder').text((set_position+1)+settings.counter_separator_label+$(pp_images).size());
					  $pp_pic_holder.find('.pp_description').show().html(unescape(pp_descriptions[set_position]));
					  (settings.show_title&&pp_titles[set_position]!=""&&typeof pp_titles[set_position]!="undefined")?$ppt.html(unescape(pp_titles[set_position])):$ppt.html('&nbsp;');
					  movie_width=(parseFloat(grab_param('width',pp_images[set_position])))?grab_param('width',pp_images[set_position]):settings.default_width.toString();
					  movie_height=(parseFloat(grab_param('height',pp_images[set_position])))?grab_param('height',pp_images[set_position]):settings.default_height.toString();
					  if(movie_width.indexOf('%')!=-1||movie_height.indexOf('%')!=-1)
					    {
					      movie_height=parseFloat(($(window).height()*parseFloat(movie_height)/100)-150);
					      movie_width=parseFloat(($(window).width()*parseFloat(movie_width)/100)-150);
					      percentBased=true;
					    }
					  else{percentBased=false;}
					  $pp_pic_holder.fadeIn(function(){
					    imgPreloader="";
					    switch(_getFileType(pp_images[set_position]))
					    {
					      case'image':imgPreloader=new Image();
					        nextImage=new Image();
					        if(isSet&&set_position>$(pp_images).size())nextImage.src=pp_images[set_position+1];
					        prevImage=new Image();
					        if(isSet&&pp_images[set_position-1])prevImage.src=pp_images[set_position-1];
					        $pp_pic_holder.find('#pp_full_res')[0].innerHTML=settings.image_markup;
					        $pp_pic_holder.find('#fullResImage').attr('src',pp_images[set_position]);
					        imgPreloader.onload=function(){correctSizes=_fitToViewport(imgPreloader.width,imgPreloader.height);
					          _showContent();
					        };
					        imgPreloader.onerror=function(){
					          alert('Image cannot be loaded. Make sure the path is correct and image exist.');
					          $.prettyPhoto.close();
					        };
					        imgPreloader.src=pp_images[set_position];
					      break;
					      case'youtube':correctSizes=_fitToViewport(movie_width,movie_height);
					        movie='http://www.youtube.com/v/'+grab_param('v',pp_images[set_position]);
					        if(settings.autoplay)movie+="&autoplay=1";
					        toInject=settings.flash_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,movie);
					      break;
					      case'vimeo':correctSizes=_fitToViewport(movie_width,movie_height);
					        movie_id=pp_images[set_position];
					        var regExp=/http:\/\/(www\.)?vimeo.com\/(\d+)/;
					        var match=movie_id.match(regExp);
					        movie='http://player.vimeo.com/video/'+match[2]+'?title=0&amp;byline=0&amp;portrait=0';
					        if(settings.autoplay)movie+="&autoplay=1;";
					        vimeo_width=correctSizes['width']+'/embed/?moog_width='+correctSizes['width'];
					        toInject=settings.iframe_markup.replace(/{width}/g,vimeo_width).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,movie);
					      break;
					      case'quicktime':correctSizes=_fitToViewport(movie_width,movie_height);
					        correctSizes['height']+=15;
					        correctSizes['contentHeight']+=15;
					        correctSizes['containerHeight']+=15;
					        toInject=settings.quicktime_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,pp_images[set_position]).replace(/{autoplay}/g,settings.autoplay);
					      break;
					      case'flash':correctSizes=_fitToViewport(movie_width,movie_height);
					        flash_vars=pp_images[set_position];
					        flash_vars=flash_vars.substring(pp_images[set_position].indexOf('flashvars')+10,pp_images[set_position].length);
					        filename=pp_images[set_position];
					        filename=filename.substring(0,filename.indexOf('?'));
					        toInject=settings.flash_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,filename+'?'+flash_vars);
					      break;
					      case'iframe':correctSizes=_fitToViewport(movie_width,movie_height);
					        frame_url=pp_images[set_position];
					        frame_url=frame_url.substr(0,frame_url.indexOf('iframe')-1);
					        toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,frame_url);
					      break;
					      case'custom':correctSizes=_fitToViewport(movie_width,movie_height);
					        toInject=settings.custom_markup;
					      break;
					      case'inline':myClone=$(pp_images[set_position]).clone().css({'width':settings.default_width}).wrapInner('<div id="pp_full_res"><div class="pp_inline clearfix"></div></div>').appendTo($('body'));
					        correctSizes=_fitToViewport($(myClone).width(),$(myClone).height());
					        $(myClone).remove();
					        toInject=settings.inline_markup.replace(/{content}/g,$(pp_images[set_position]).html());
					      break;
					    };
					    if(!imgPreloader)
					    {
					      $pp_pic_holder.find('#pp_full_res')[0].innerHTML=toInject;
					      _showContent();
					    };
					  });
					  return false;
					};
					$.prettyPhoto.changePage=function(direction){currentGalleryPage=0;if(direction=='previous'){set_position--;if(set_position<0){set_position=0;return;};}else if(direction=='next'){set_position++;if(set_position>$(pp_images).size()-1){set_position=0;}}else{set_position=direction;};if(!doresize)doresize=true;$('.pp_contract').removeClass('pp_contract').addClass('pp_expand');_hideContent(function(){$.prettyPhoto.open();});};$.prettyPhoto.changeGalleryPage=function(direction){if(direction=='next'){currentGalleryPage++;if(currentGalleryPage>totalPage){currentGalleryPage=0;};}else if(direction=='previous'){currentGalleryPage--;if(currentGalleryPage<0){currentGalleryPage=totalPage;};}else{currentGalleryPage=direction;};itemsToSlide=(currentGalleryPage==totalPage)?pp_images.length-((totalPage)*itemsPerPage):itemsPerPage;$pp_pic_holder.find('.pp_gallery li').each(function(i){$(this).animate({'left':(i*itemWidth)-((itemsToSlide*itemWidth)*currentGalleryPage)});});};$.prettyPhoto.startSlideshow=function(){if(typeof pp_slideshow=='undefined'){$pp_pic_holder.find('.pp_play').unbind('click').removeClass('pp_play <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_PIcon;?>').addClass('pp_pause <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_Pause;?>').click(function(){$.prettyPhoto.stopSlideshow();return false;});pp_slideshow=setInterval($.prettyPhoto.startSlideshow,settings.slideshow);}else{$.prettyPhoto.changePage('next');};}
					$.prettyPhoto.stopSlideshow=function(){$pp_pic_holder.find('.pp_pause').unbind('click').removeClass('pp_pause <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_Pause;?>').addClass('pp_play <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_PIcon;?>').click(function(){$.prettyPhoto.startSlideshow();return false;});clearInterval(pp_slideshow);pp_slideshow=undefined;}
					$.prettyPhoto.close=function(){clearInterval(pp_slideshow);$pp_pic_holder.stop().find('object,embed').css('visibility','hidden');$('div.pp_pic_holder,div.ppt,.pp_fade').fadeOut(settings.animation_speed,function(){$(this).remove();});$pp_overlay.fadeOut(settings.animation_speed,function(){if($.browser.msie&&$.browser.version==6)$('select').css('visibility','visible');if(settings.hideflash)$('object,embed').css('visibility','visible');$(this).remove();$(window).unbind('scroll');settings.callback();doresize=true;pp_open=false;delete settings;});};_showContent=function(){$('.pp_loaderIcon').hide();$ppt.fadeTo(settings.animation_speed,1);projectedTop=scroll_pos['scrollTop']+((windowHeight/2)-(correctSizes['containerHeight']/2));if(projectedTop<0)projectedTop=0;$pp_pic_holder.find('.pp_content').animate({'height':correctSizes['contentHeight']},settings.animation_speed);$pp_pic_holder.animate({'top':projectedTop,'left':(windowWidth/2)-(correctSizes['containerWidth']/2),'width':correctSizes['containerWidth']},settings.animation_speed,function(){$pp_pic_holder.find('.pp_hoverContainer,#fullResImage').height(correctSizes['height']).width(correctSizes['width']);$pp_pic_holder.find('.pp_fade').fadeIn(settings.animation_speed);if(isSet&&_getFileType(pp_images[set_position])=="image"){$pp_pic_holder.find('.pp_hoverContainer').show();}else{$pp_pic_holder.find('.pp_hoverContainer').hide();}
					if(correctSizes['resized'])$('a.pp_expand,a.pp_contract').fadeIn(settings.animation_speed);if(settings.autoplay_slideshow&&!pp_slideshow&&!pp_open)$.prettyPhoto.startSlideshow();settings.changepicturecallback();pp_open=true;});_insert_gallery();};function _hideContent(callback){$pp_pic_holder.find('#pp_full_res object,#pp_full_res embed').css('visibility','hidden');$pp_pic_holder.find('.pp_fade').fadeOut(settings.animation_speed,function(){$('.pp_loaderIcon').show();callback();});};function _checkPosition(setCount){if(set_position==setCount-1){$pp_pic_holder.find('a.pp_next').css('visibility','hidden');$pp_pic_holder.find('a.pp_next').addClass('disabled').unbind('click');}else{$pp_pic_holder.find('a.pp_next').css('visibility','visible');$pp_pic_holder.find('a.pp_next.disabled').removeClass('disabled').bind('click',function(){$.prettyPhoto.changePage('next');return false;});};if(set_position==0){$pp_pic_holder.find('a.pp_previous').css('visibility','hidden').addClass('disabled').unbind('click');}else{$pp_pic_holder.find('a.pp_previous.disabled').css('visibility','visible').removeClass('disabled').bind('click',function(){$.prettyPhoto.changePage('previous');return false;});};(setCount>1)?$('.pp_nav').show():$('.pp_nav').hide();};function _fitToViewport(width,height){resized=false;_getDimensions(width,height);imageWidth=width,imageHeight=height;if(((pp_containerWidth>windowWidth)||(pp_containerHeight>windowHeight))&&doresize&&settings.allow_resize&&!percentBased){resized=true,fitting=false;while(!fitting){if((pp_containerWidth>windowWidth)){imageWidth=(windowWidth-50);imageHeight=(height/width)*imageWidth;}else if((pp_containerHeight>windowHeight)){imageHeight=(windowHeight-50);imageWidth=(width/height)*imageHeight;}else{fitting=true;};pp_containerHeight=imageHeight,pp_containerWidth=imageWidth;};_getDimensions(imageWidth,imageHeight);};return{width:Math.floor(imageWidth),height:Math.floor(imageHeight),containerHeight:Math.floor(pp_containerHeight),containerWidth:Math.floor(pp_containerWidth)+40,contentHeight:Math.floor(pp_contentHeight),contentWidth:Math.floor(pp_contentWidth),resized:resized};};function _getDimensions(width,height){width=parseFloat(width);height=parseFloat(height);$pp_details=$pp_pic_holder.find('.pp_details');$pp_details.width(width);detailsHeight=parseFloat($pp_details.css('marginTop'))+parseFloat($pp_details.css('marginBottom'));$pp_details=$pp_details.clone().appendTo($('body')).css({'position':'absolute','top':-10000});detailsHeight+=$pp_details.height();detailsHeight=(detailsHeight<=34)?36:detailsHeight;if($.browser.msie&&$.browser.version==7)detailsHeight+=8;$pp_details.remove();pp_contentHeight=height+detailsHeight;pp_contentWidth=width;pp_containerHeight=pp_contentHeight+$ppt.height()+$pp_pic_holder.find('.pp_top').height()+$pp_pic_holder.find('.pp_bottom').height();pp_containerWidth=width;}
					function _getFileType(itemSrc){if(itemSrc.match(/youtube\.com\/watch/i)){return'youtube';}else if(itemSrc.match(/vimeo\.com/i)){return'vimeo';}else if(itemSrc.indexOf('.mov')!=-1){return'quicktime';}else if(itemSrc.indexOf('.swf')!=-1){return'flash';}else if(itemSrc.indexOf('iframe')!=-1){return'iframe';}else if(itemSrc.indexOf('custom')!=-1){return'custom';}else if(itemSrc.substr(0,1)=='#'){return'inline';}else{return'image';};};function _center_overlay(){if(doresize&&typeof $pp_pic_holder!='undefined'){scroll_pos=_get_scroll();titleHeight=$ppt.height(),contentHeight=$pp_pic_holder.height(),contentwidth=$pp_pic_holder.width();projectedTop=(windowHeight/2)+scroll_pos['scrollTop']-(contentHeight/2);$pp_pic_holder.css({'top':projectedTop,'left':(windowWidth/2)+scroll_pos['scrollLeft']-(contentwidth/2)});};};function _get_scroll(){if(self.pageYOffset){return{scrollTop:self.pageYOffset,scrollLeft:self.pageXOffset};}else if(document.documentElement&&document.documentElement.scrollTop){return{scrollTop:document.documentElement.scrollTop,scrollLeft:document.documentElement.scrollLeft};}else if(document.body){return{scrollTop:document.body.scrollTop,scrollLeft:document.body.scrollLeft};};};function _resize_overlay(){windowHeight=$(window).height(),windowWidth=$(window).width();if(typeof $pp_overlay!="undefined")$pp_overlay.height($(document).height());};function _insert_gallery(){if(isSet&&settings.overlay_gallery&&_getFileType(pp_images[set_position])=="image"){itemWidth=52+5;navWidth=(settings.theme=="facebook")?58:38;itemsPerPage=Math.floor((correctSizes['containerWidth']-100-navWidth)/itemWidth);itemsPerPage=(itemsPerPage<pp_images.length)?itemsPerPage:pp_images.length;totalPage=Math.ceil(pp_images.length/itemsPerPage)-1;if(totalPage==0){navWidth=0;$pp_pic_holder.find('.pp_gallery .pp_arrow_next,.pp_gallery .pp_arrow_previous').hide();}else{$pp_pic_holder.find('.pp_gallery .pp_arrow_next,.pp_gallery .pp_arrow_previous').show();};galleryWidth=itemsPerPage*itemWidth+navWidth;$pp_pic_holder.find('.pp_gallery').width(galleryWidth).css('margin-left',-(galleryWidth/2));$pp_pic_holder.find('.pp_gallery ul').width(itemsPerPage*itemWidth).find('li.selected').removeClass('selected');goToPage=(Math.floor(set_position/itemsPerPage)<=totalPage)?Math.floor(set_position/itemsPerPage):totalPage;if(itemsPerPage){$pp_pic_holder.find('.pp_gallery').hide().show().removeClass('disabled');}else{$pp_pic_holder.find('.pp_gallery').hide().addClass('disabled');}
					$.prettyPhoto.changeGalleryPage(goToPage);$pp_pic_holder.find('.pp_gallery ul li:eq('+set_position+')').addClass('selected');}else{$pp_pic_holder.find('.pp_content').unbind('mouseenter mouseleave');$pp_pic_holder.find('.pp_gallery').hide();}}
					function _buildOverlay(caller){theRel=$(caller).attr('rel');galleryRegExp=/\[(?:.*)\]/;isSet=(galleryRegExp.exec(theRel))?true:false;pp_images=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return $(n).attr('href');}):$.makeArray($(caller).attr('href'));pp_titles=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return($(n).find('img').attr('alt'))?$(n).find('img').attr('alt'):"";}):$.makeArray($(caller).find('img').attr('alt'));pp_descriptions=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return($(n).attr('title'))?$(n).attr('title'):"";}):$.makeArray($(caller).attr('title'));$('body').append(settings.markup);$pp_pic_holder=$('.pp_pic_holder'),$ppt=$('.ppt'),$pp_overlay=$('div.pp_overlay');if(isSet&&settings.overlay_gallery){currentGalleryPage=0;toInject="";for(var i=0;i<pp_images.length;i++){var regex=new RegExp("(.*?)\.(jpg|jpeg|png|gif)$");var results=regex.exec(pp_images[i]);if(!results){classname='default';}else{classname='';}
					toInject+="<li class='"+classname+"'><a href='#'><img src='"+pp_images[i]+"' width='50' alt='' /></a></li>";};toInject=settings.gallery_markup.replace(/{gallery}/g,toInject);$pp_pic_holder.find('#pp_full_res').after(toInject);$pp_pic_holder.find('.pp_gallery .pp_arrow_next').click(function(){$.prettyPhoto.changeGalleryPage('next');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder.find('.pp_gallery .pp_arrow_previous').click(function(){$.prettyPhoto.changeGalleryPage('previous');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder.find('.pp_content').hover(function(){$pp_pic_holder.find('.pp_gallery:not(.disabled)').fadeIn();},function(){$pp_pic_holder.find('.pp_gallery:not(.disabled)').fadeOut();});itemWidth=52+5;$pp_pic_holder.find('.pp_gallery ul li').each(function(i){$(this).css({'position':'absolute','left':i*itemWidth});$(this).find('a').unbind('click').click(function(){$.prettyPhoto.changePage(i);$.prettyPhoto.stopSlideshow();return false;});});};if(settings.slideshow){$pp_pic_holder.find('.pp_nav').prepend('<i class="totalsoft-gv-lvg-pl-pa pp_play <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_PIcon;?>"></i>')
					$pp_pic_holder.find('.pp_nav .pp_play').click(function(){$.prettyPhoto.startSlideshow();return false;});}
					$pp_pic_holder.attr('class','pp_pic_holder '+settings.theme);$pp_overlay.css({'opacity':0,'height':$(document).height(),'width':$(document).width()}).bind('click',function(){if(!settings.modal)$.prettyPhoto.close();});$('i.pp_close').bind('click',function(){$.prettyPhoto.close();return false;});$('a.pp_expand').bind('click',function(e){if($(this).hasClass('pp_expand')){$(this).removeClass('pp_expand').addClass('pp_contract');doresize=false;}else{$(this).removeClass('pp_contract').addClass('pp_expand');doresize=true;};_hideContent(function(){$.prettyPhoto.open();});return false;});$pp_pic_holder.find('.pp_previous, .pp_nav .pp_arrow_previous').bind('click',function(){$.prettyPhoto.changePage('previous');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder.find('.pp_next, .pp_nav .pp_arrow_next').bind('click',function(){$.prettyPhoto.changePage('next');$.prettyPhoto.stopSlideshow();return false;});_center_overlay();};return this.unbind('click').click($.prettyPhoto.initialize);};function grab_param(name,url){name=name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");var regexS="[\\?&]"+name+"=([^&#]*)";var regex=new RegExp(regexS);var results=regex.exec(url);return(results==null)?"":results[1];}})(jQuery);
			    </script>

	 			<div class="wrapper">
	 				<input type="text" style="display:none" class=""/>
				   	<div class="totalsoft-gv-lvg-content">	
						<ul class="ulContWidth totalsoft-gv-lvg-area" style='padding:0px;'>	
							<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
								<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
									<li class="totalsoft-gv-lvg-item2 TotalSoft_GV_LVG_Li" id="TotalSoft_GV_LVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style='max-width:100%;'>	
							        	<div class='fHeightZoom'>
								            <span class="totalsoft-gv-lvg-image-block">
												<a class="image-zoom" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_Video;?>" rel="prettyPhoto[gallery]" title="<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TShow=='true'){ echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;} ?>">
													<img class='LImg <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Type;?>' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"/>
													<div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Type;?>'>
													
													</div>
													<h2 class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Type;?>' >
														<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
													</h2>
													<div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Type;?>'>
														
													</div>
													<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
													<a href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>'  class='hovLink <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Type;?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
														<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Bg_Color;?>
													</a>
													<?php } ?>
												</a>
								            </span>
										</div>	
						            </li>
								<?php } else { ?>
									<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?> 
											<li class="totalsoft-gv-lvg-item2 TotalSoft_GV_LVG_Li" id="TotalSoft_GV_LVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">	
									        	<div class='fHeightZoom'>
										            <span class="totalsoft-gv-lvg-image-block">
														<a class="image-zoom" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_Video;?>" rel="prettyPhoto[gallery]" title="<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TShow=='true'){ echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;} ?>">
															<img class='LImg <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Type;?>' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"/>
															<div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Type;?>'>
															
															</div>
															<h2 class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Type;?>' >
																<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
															</h2>
															<div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Type;?>'>
																
															</div>
															<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
															<a href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>'  class='hovLink <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Type;?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
																<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Bg_Color;?>
															</a>
															<?php } ?>
														</a>
										            </span>
												</div>	
								            </li>
										<?php } else { ?> 
											<li style="display:none;" class="totalsoft-gv-lvg-item2 TotalSoft_GV_LVG_Li" id="TotalSoft_GV_LVG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>">	
									        	<div class='fHeightZoom'>
										            <span class="totalsoft-gv-lvg-image-block">
														<a class="image-zoom" href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_Video;?>" rel="prettyPhoto[gallery]" title="<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Pop_TShow=='true'){ echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;} ?>">
															<img class='LImg <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Img_Zoom_Type;?>' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" alt="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"/>
															<div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Hov_Ov_Effect_Type;?>'>
																
															</div>
															<h2 class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Title_Effect_Type;?>' >
																<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
															</h2>
															<div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Line_Hov_Type;?>'>
																
															</div>
															<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink != ''){ ?>
															<a href='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink ?>'  class='hovLink <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Hov_Type;?>' <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){echo 'target="_blank"';}?>>
																<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_Link_Bg_Color;?>
															</a>
															<?php } ?>
														</a>
										            </span>
												</div>	
								            </li>
										<?php }?>
								<?php }?>									
							<?php }?>							
				            <div class="column-clear"></div>
						</ul>
						<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
							<div class="TotalSoftcenter">
							  <ul class="pagination">
							    <li onclick="Total_Soft_GV_LVG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_PBT;?></span></li>
							    <?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
							    	<?php if($i==1){ ?>
							    		<li id="TotalSoft_GV_LVG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_LVG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
							    	<?php } else { ?>
							   			<li id="TotalSoft_GV_LVG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_LVG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
							    	<?php }?>
							   	<?php }?>
							    <li onclick="Total_Soft_GV_LVG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_P_NBT;?></span></li>
							  </ul>
							</div>
						<?php }?>
						<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
							<div class="TotalSoftcenter" id="TotalSoft_VG_LVG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
								<span class="TotalSoftGV_LVG_LM" onclick="Total_Soft_GV_LVG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
								<input type="text" style="display:none;" id="TotalSoft_VG_LVG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
							</div>
						<?php } ?>
					</div>
				</div>
				<input type='text' style='display:none;' class='ImWidth' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_LVG_CC;?>' />
				<script>
				jQuery(document).ready(function(){
					var ImWidth = jQuery('.ImWidth').val();
					function imH(){
						jQuery('.TotalSoft_GV_LVG_Li').css('width',ImWidth*jQuery('.ulContWidth').width()/2000+'px');
						
						if(jQuery('.ulContWidth').width()<=300){
							jQuery('.TotalSoft_GV_LVG_Li').css('width',ImWidth*jQuery('.ulContWidth').width()/300+'px');
						}else if(jQuery('.ulContWidth').width()<=700){
							jQuery('.TotalSoft_GV_LVG_Li').css('width',ImWidth*jQuery('.ulContWidth').width()/700+'px');
						}else if(jQuery('.ulContWidth').width()<=1000){
							jQuery('.TotalSoft_GV_LVG_Li').css('width',ImWidth*jQuery('.ulContWidth').width()/1000+'px');
						}else if(jQuery('.ulContWidth').width()<=1500){
							jQuery('.TotalSoft_GV_LVG_Li').css('width',ImWidth*jQuery('.ulContWidth').width()/1500+'px');
						}else if(jQuery('.ulContWidth').width()<=1800){
							jQuery('.TotalSoft_GV_LVG_Li').css('width',ImWidth*jQuery('.ulContWidth').width()/1800+'px');
						}
						
						jQuery('.fHeightZoom').css('height',jQuery('.LImg').height());
					}
					imH();
					jQuery(window).resize(function(){
						imH();
					})
				})					
				</script>
			<?php } else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Thumbnails Video'){ ?>	
		        <script src="<?php echo plugins_url('../JS/jquery.adipoli.js',__FILE__);?>" type="text/javascript"></script>

		        <link href="<?php echo plugins_url('../CSS/jquery.fs.boxer.css',__FILE__);?>" rel="stylesheet" type="text/css" media="all">
		        <script src="<?php echo plugins_url('../JS/jquery.fs.boxer.js',__FILE__);?>"  type="text/javascript"></script>	

		         <script type="text/javascript">
		            jQuery(function(){
		                jQuery('.totalsoft_gv_tv_row').adipoli({
		                    'startEffect'   : '<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_SE;?>',
		                    'hoverEffect'   : '<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_HE;?>',
		                    'imageOpacity'  : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_O;?>,
				            'animSpeed'     : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_AS;?>,
				            'fillColor'     : '<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_FC;?>',
				            'textColor'     : '#ffffff',
				            'overlayText'   : '<i class="<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Ic_T;?>"></i>',
				            'slices'        : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Sl;?>,
				            'boxCols'       : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_BC;?>,
				            'boxRows'       : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_BR;?>,
				            'popOutMargin'  : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_POM;?>,
				            'popOutShadow'  : <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_POS;?>,
				            'popOutShadowC' : '<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_ShC;?>'
		                });
		            });
		        </script>
		        <script>
		            jQuery(document).ready(function() {
		                jQuery(".boxer").not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer();
		                jQuery(".boxer.boxer_object").click(function(e) {
		                    e.preventDefault();
		                    e.stopPropagation();

		                    $.boxer( jQuery('<div class="inline_content"><h2>More Content!</h2><p>This was created by jQuery and loaded into the new Boxer instance.</p></div>') );
		                });
		                jQuery(".boxer.boxer_mobile").boxer({
		                    mobile: true
		                });
		                jQuery(window).one("pronto.load", function() {
		                    jQuery.boxer("close");
		                    jQuery(".boxer").boxer("destroy");
		                });
		            });
		        </script>
		        <style type="text/css">
		        	ul.pagination li {
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						list-style:none !important;
					}
					ul.pagination li span {
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_FF;?>;
						height:auto !important;
					}
					ul.pagination li span:hover:not(.active) {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_HC;?>;
					}
					ul.pagination li span.active {
					    background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_CBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_CC;?>;
					}
					.TotalSoftGV_TV_LM
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_FF;?>;
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
					}
					.TotalSoftGV_TV_LM:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_HC;?>;
					}
					#boxer-overlay 
					{
  						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_OC;?>;
					}
					.boxer-open #boxer-overlay 
					{
					  	opacity: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_OO;?>;
					}
					#boxer 
					{
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_Bg=='true'){ ?> 
							background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_BgC;?>;
						<?php }?>
  						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_BR;?>px;
 						box-shadow: 0 0 25px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_BSC;?>;
					}
					#boxer .boxer-container 
					{
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_TBg=='true'){ ?> 
							background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_TBgC;?>;
						<?php }?>
					}
					#boxer .boxer-caption p 
					{
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_TC;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_TFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_TFF;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_TTA;?>;
					}
					#boxer .boxer-position 
					{
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_NC;?>;
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_NS;?>px;
					}
					#boxer .boxer-control 
					{
  						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_ABgC;?>;
  						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_AR;?>%;
  						opacity: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_AO;?>;
					}
					#boxer .boxer-control.previous:before 
					{
  						border-right: 10.4px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_AC;?>;
					}
					#boxer .boxer-control.next:before 
					{
  						border-left: 10.4px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_AC;?>;
					}
					#boxer .boxer-close 
					{
						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_CBgC;?>;
  						border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_CR;?>%;
					}
					#boxer .boxer-close:before 
					{
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Pop_CC;?>;
					}
					
					.adipoli-slice {
						display:block;
						position:absolute;
						z-index:15;
						height:100%;
					}
					.adipoli-box{
						display:block;
						position:absolute;
						z-index:15;
					}
					.totalsoft_gv_tv_row p{
						position:relative;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Ic_C;?>;
						margin:0px !important;
						top:50%;
						transform:translateY(-50%);
						z-index: 9999999999;
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Ic_S;?>px;
					}
					
		        </style>

		        <div class="effect-container">
		        	<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
		        		<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
		           			<a style='margin:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_V_PBImgs;?>px;display:inline-block;max-width:none;border:none;' href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" class="boxer button small" data-gallery="video_gallery" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"><img class="img-style totalsoft_gv_tv_row totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>" style="width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VW;?>px; height: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VH;?>px;" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/></a>
		        		<?php } else { ?>
		        			<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?> 
		        				<a style='margin:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_V_PBImgs;?>px;display:inline-block;max-width:none;border:none;' href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" class="boxer button small" id="TotalSoft_GV_TV_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" data-gallery="video_gallery" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"><img class="img-style totalsoft_gv_tv_row totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>" style="width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VW;?>px; height: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VH;?>px;" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/></a>
		        			<?php } else { ?>
		        				<a style='margin:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_V_PBImgs;?>px;display:inline-block;max-width:none;border:none;' href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" style="display:none;" class="boxer button small" id="TotalSoft_GV_TV_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>"data-gallery="video_gallery" title="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>"><img class="img-style totalsoft_gv_tv_row totalsoft_gv_tv_img_<?php echo $Total_Soft_Gallery_Video;?>" style="width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VW;?>px; height: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VH;?>px;" src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/></a>
		        			<?php }?>
		        		<?php }?>
		        	<?php }?>
		        	<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
						<div class="TotalSoftcenter">
						  <ul class="pagination">
						    <li onclick="Total_Soft_GV_TV_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_PBT;?></span></li>
						    <?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
						    	<?php if($i==1){ ?>
						    		<li id="TotalSoft_GV_TV_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_TV_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
						    	<?php } else { ?>
						   			<li id="TotalSoft_GV_TV_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_TV_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
						    	<?php }?>
						   	<?php }?>
						    <li onclick="Total_Soft_GV_TV_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_P_NBT;?></span></li>
						  </ul>
						</div>
					<?php }?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
						<div class="TotalSoftcenter" id="TotalSoft_VG_TV_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
							<span class="TotalSoftGV_TV_LM" onclick="Total_Soft_GV_TV_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
							<input type="text" style="display:none;" id="TotalSoft_VG_TV_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
						</div>
					<?php } ?>
		        </div>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_W' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VW;?>'>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_H' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_VH;?>'>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_PBImgs' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_V_PBImgs;?>'>
				<input type='text' style='display:none;' class='Totalsoft_Thumb_FS' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_TV_Ic_S;?>'>
				
				<script>
					jQuery(document).ready(function(){
						var Totalsoft_Thumb_W=parseInt(jQuery('.Totalsoft_Thumb_W').val());
						var Totalsoft_Thumb_H=parseInt(jQuery('.Totalsoft_Thumb_H').val());
						var Totalsoft_Thumb_PBImgs=parseInt(jQuery('.Totalsoft_Thumb_PBImgs').val());
						var Totalsoft_Thumb_FS=parseInt(jQuery('.Totalsoft_Thumb_FS').val());
						function resp(){
							if(jQuery('.img-style').parent().parent().parent().width()<=jQuery('.img-style').width()+2*Totalsoft_Thumb_PBImgs){
								jQuery('.img-style').css('width',jQuery('.img-style').parent().parent().parent().width()-2*Totalsoft_Thumb_PBImgs);
								jQuery('.img-style').css('height',(jQuery('.img-style').parent().parent().parent().width()-2*Totalsoft_Thumb_PBImgs)*Totalsoft_Thumb_H/Totalsoft_Thumb_W);
								jQuery('.totalsoft_gv_tv_row p').css('font-size',Totalsoft_Thumb_FS*jQuery('.img-style').parent().parent().parent().width()/Totalsoft_Thumb_W+'px');
							}else{
								jQuery('.img-style').css('width',Totalsoft_Thumb_W);
								jQuery('.img-style').css('height',Totalsoft_Thumb_H);
								jQuery('.totalsoft_gv_tv_row p').css('font-size',Totalsoft_Thumb_FS);
							}
						}
						//jQuery(window).load(function(){
							resp();
						//})
						
						jQuery(window).resize(function(){
							resp();
						})
						
					})
				</script>
		    <?php } else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Content Popup'){ ?>	
		    	<?php 
		    	 	$TotSoft=Array('', 'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth');


		    	?>
		        <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/style_common.css',__FILE__);?>"/>
		        <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('../CSS/style9.css',__FILE__);?>"/>

		        <style type="text/css">
		        	ul.pagination li {
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						list-style:none !important;
					}
					ul.pagination li span {
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_FF;?>;
						height:auto !important;
					}
					ul.pagination li span:hover:not(.active) {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_HC;?>;
					}
					ul.pagination li span.active {
					    background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_CBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_CC;?>;
					}
					.TotalSoftGV_CP_LM
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_FF;?>;
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
					}
					.TotalSoftGV_CP_LM:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_HC;?>;
					}
					.totalsoftview a.info 
					{
						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LC;?>;
					    font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LFS;?>px;
					    font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LFF;?>;
					    border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LBW;?>px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LBC;?>;
					    border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LBR;?>px;
					}
					.totalsoftview a.info:hover
					{
						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LHBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LHC;?>;
					}
					.totalsoftview 
					{
						width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px;
						height: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_H;?>px;
   						margin: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_PB;?>px;
   						border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BW;?>px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BC;?>;
   						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSShow=='true'){ ?> 
					   		-webkit-box-shadow: 0px 0px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSC;?>;
						    -moz-box-shadow: 0px 0px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSC;?>;
						    box-shadow: 0px 0px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_BSC;?>;
					    <?php }?>
					    cursor:pointer;
						perspective:800px;
						overflow:hidden;
					}
					<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff!='9'){ ?>
						.totalsoftview .mask,.totalsoftview .content 
						{
							width: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px;
							height: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_H;?>px;
						}
					<?php }?>
						
					.totalsoftview h2 
					{
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TC;?>;
					    text-align: center;
					    font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TFS;?>px;
					    font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TFF;?>;
					}
					.totalsoftview p 
					{
					   font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DFF;?>;
					   font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DFS;?>px;
					   color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DC;?>;
					   text-align: justify;
					}					
					.totalsoftview-second h2, .totalsoftview-fourth h2, .totalsoftview-sixth h2, .totalsoftview-tenth h2, .totalsoftview-ninth h2
					{
						border-bottom: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LATW;?>px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LATC;?>;
					}
					.totalsoftview-first h2, .totalsoftview-third h2, .totalsoftview-fifth h2, .totalsoftview-seventh h2, .totalsoftview-eighth h2, .totalsoftview-ninth .content
					{
					    background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TBgC;?>;
					}
					.totalsoftview-first .mask, .totalsoftview-second .mask, .totalsoftview-third .mask, .totalsoftview-fourth .mask, .totalsoftview-fifth .mask, .totalsoftview-sixth .mask, .totalsoftview-seventh .mask, .totalsoftview-eighth .mask, .totalsoftview-tenth .mask, .totalsoftview-ninth .mask-1, .totalsoftview-ninth .mask-2
					{
  						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HOC;?>;
					}
					.totalsoftview-first:hover .mask,.totalsoftview-second:hover .mask, .totalsoftview-third:hover .mask, .totalsoftview-fourth:hover .mask, .totalsoftview-fifth:hover .mask, .totalsoftview-sixth:hover .mask, .totalsoftview-seventh:hover .mask, .totalsoftview-eighth:hover .mask, .totalsoftview-tenth:hover .mask, .totalsoftview-ninth .mask-1, .totalsoftview-ninth .mask-2
					{
					    -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HOO;?>)";
					    filter: alpha(opacity=<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HOO;?>);
					    opacity: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HOO/100;?>;
					}
					.totalsoftview-fifth .mask
					{
						-webkit-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    -moz-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    -o-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    -ms-transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    transform: translateX(-<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					}
					.totalsoftview-fifth:hover img 
					{
					    -webkit-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    -moz-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    -o-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    -ms-transform: translateX(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					    transform: translateX(<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>px);
					}
					.TotalSoft_GV_CP_Popup
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_BgC;?>;
						outline: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_BW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_BS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_BC;?>;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
					}
					.TotalSoft_GV_CP_TD h2
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_TFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_TFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_TC;?>;
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_TBgC;?>;
						text-align: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_TTA;?>;
					}
					.TotalSoft_GV_CP_TD p
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DFS;?>px;
						font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DFF;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DC;?>;
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DBgC;?>;
						text-align: justify;
					}
					.fResp h3 a
					{
						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LC;?>;
					    font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LFS;?>px;
					    font-family: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LFF;?>;
					    border: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LBW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LBS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LBC;?>;
					    border-radius: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LBR;?>px;
					}
					.fResp h3 a:hover
					{
						background: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LHBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LHC;?>;
					}
					.TotalSoft_GV_CP_Pop_Icons
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_IBgC;?>;
					}
					.TotalSoft_GV_CP_Pop_Icons_1 i.totalsoft
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_AS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_AC;?>;
					}
					.TotalSoft_GV_CP_Pop_Icons_2 i.totalsoft
					{
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_CIS;?>px;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_CIC;?>;
					}
					.popDescr::-webkit-scrollbar 
					{
						width: 0.5em;
					}
					.popDescr::-webkit-scrollbar-track {
						-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DBgC;?>;
					}
					.popDescr::-webkit-scrollbar-thumb {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DC;?>;
						outline: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DC;?>;
					}
		        </style>

		        <div class="main TotalSoft_GV_CP_Main">
		        	<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
		        		<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
			        		<div class="totalsoftview totalsoftview-<?php echo $TotSoft[$TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff];?>" onclick="TotalSoft_GV_CP_Cont('<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>', '<?php echo $Total_Soft_Gallery_Video;?>')">
			                    <img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/>
			                    <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff=='2'){ ?>
			                    	<div class="mask"></div>
				                    <div class="content">
				                        <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
				                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
				                    	<?php }?>
				                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
				                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
				                    	<?php }?>			                       
				                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
				                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
				                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
				                        	<?php } else { ?> 
				                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
				                        	<?php }?>
				                        <?php }?>
				                    </div>
			                    <?php } else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff=='9'){ ?>
			                    	<div class="mask mask-1"></div>
				                    <div class="mask mask-2"></div>
				                    <div class="content">
				                        <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
				                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
				                    	<?php }?>
				                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
				                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
				                    	<?php }?>			                       
				                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
				                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
				                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
				                        	<?php } else { ?> 
				                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
				                        	<?php }?>
				                        <?php }?>
				                    </div>
			                    <?php } else{ ?>
				                	<div class="mask">
				                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
				                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
				                    	<?php }?>
				                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
				                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
				                    	<?php }?>			                       
				                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
				                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
				                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
				                        	<?php } else { ?> 
				                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
				                        	<?php }?>
				                        <?php }?>
				                    </div>
				                <?php }?>				                   
			                </div> 
			            <?php } else { ?> 
			            	<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?> 
			            		<div class="totalsoftview totalsoftview-<?php echo $TotSoft[$TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff];?>" id="TotalSoft_GV_CP_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" onclick="TotalSoft_GV_CP_Cont('<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>', '<?php echo $Total_Soft_Gallery_Video;?>')">
				                    <img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/>
				                    <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff=='2'){ ?>
				                    	<div class="mask"></div>
					                    <div class="content">
					                        <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
					                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
					                    	<?php }?>
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
					                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
					                    	<?php }?>			                       
					                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
					                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php } else { ?> 
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php }?>
					                        <?php }?>
					                    </div>
				                    <?php } else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff=='9'){ ?>
				                    	<div class="mask mask-1"></div>
					                    <div class="mask mask-2"></div>
					                    <div class="content">
					                        <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
					                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
					                    	<?php }?>
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
					                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
					                    	<?php }?>			                       
					                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
					                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php } else { ?> 
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php }?>
					                        <?php }?>
					                    </div>
				                    <?php } else{ ?>
					                	<div class="mask">
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
					                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
					                    	<?php }?>
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
					                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
					                    	<?php }?>			                       
					                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
					                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php } else { ?> 
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php }?>
					                        <?php }?>
					                    </div>
					                <?php }?>				                   
				                </div>
							<?php } else { ?>
								<div class="totalsoftview totalsoftview-<?php echo $TotSoft[$TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff];?>" id="TotalSoft_GV_CP_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" style="display:none;" onclick="TotalSoft_GV_CP_Cont('<?php echo $Total_Soft_GalleryV_Videos[$i]->id;?>', '<?php echo $Total_Soft_Gallery_Video;?>')">
				                    <img src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>"/>
				                    <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff=='2'){ ?>
				                    	<div class="mask"></div>
					                    <div class="content">
					                        <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
					                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
					                    	<?php }?>
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
					                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
					                    	<?php }?>			                       
					                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
					                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php } else { ?> 
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php }?>
					                        <?php }?>
					                    </div>
				                    <?php } else if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_HEff=='9'){ ?>
				                    	<div class="mask mask-1"></div>
					                    <div class="mask mask-2"></div>
					                    <div class="content">
					                        <?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
					                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
					                    	<?php }?>
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
					                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
					                    	<?php }?>			                       
					                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
					                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php } else { ?> 
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php }?>
					                        <?php }?>
					                    </div>
				                    <?php } else{ ?>
					                	<div class="mask">
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TShow=='true'){ ?>
					                        	<h2><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?></h2>
					                    	<?php }?>
					                    	<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_DShow=='true'){ ?>
					                        	 <p><?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VDesc;?></p>
					                    	<?php }?>			                       
					                        <?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!='' && $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LShow=='true'){ ?>
					                        	<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT=='true'){ ?>
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info" target="_blank"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php } else { ?> 
					                        		<a href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink?>" class="info"><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_LText;?></a>
					                        	<?php }?>
					                        <?php }?>
					                    </div>
					                <?php }?>				                   
				                </div>
							<?php }?>
		        		<?php }?>
		        	<?php }?>		        	
	            </div>
	            <?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
					<div class="TotalSoftcenter">
					  <ul class="pagination">
					    <li onclick="Total_Soft_GV_CP_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_PBT;?></span></li>
					    <?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
					    	<?php if($i==1){ ?>
					    		<li id="TotalSoft_GV_CP_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_CP_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
					    	<?php } else { ?>
					   			<li id="TotalSoft_GV_CP_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_CP_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
					    	<?php }?>
					   	<?php }?>
					    <li onclick="Total_Soft_GV_CP_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_P_NBT;?></span></li>
					  </ul>
					</div>
				<?php }?>
				<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
					<div class="TotalSoftcenter" id="TotalSoft_VG_CP_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
						<span class="TotalSoftGV_CP_LM" onclick="Total_Soft_GV_CP_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
						<input type="text" style="display:none;" id="TotalSoft_VG_CP_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
					</div>
				<?php } ?>
				<div class="TotalSoft_GV_CP_Content" onclick="TotalSoft_GV_CP_Close_Popup()"></div>
				<div class="TotalSoft_GV_CP_Popup">
					<div class="TotalSoft_GV_CP_Pop_Icons">
						<input type="text" style="display:none;" id="TotalSoft_GV_CP_VID_<?php echo $Total_Soft_Gallery_Video;?>">
						<div class="TotalSoft_GV_CP_Pop_Icons_1">
							<i class="totalsoftleft <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_ALeft;?>" onclick="TotalSoft_GV_CP_Left('<?php echo $Total_Soft_Gallery_Video;?>')"></i>
							<i class="totalsoftright <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_ARight;?>" onclick="TotalSoft_GV_CP_Right('<?php echo $Total_Soft_Gallery_Video;?>')"></i>
						</div>
						<div class="TotalSoft_GV_CP_Pop_Icons_2">
							<i class="<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_CIcon;?>" onclick="TotalSoft_GV_CP_Close_Popup()"></i>
						</div>
					</div>

					<div class="TotalSoft_GV_CP_Iframe">
						<iframe src=""  frameborder="0" allowfullscreen></iframe>
					</div>
					<div class='fResp' style='width:40%;position:absolute;right:0;height:90%'>
					<div class="TotalSoft_GV_CP_TD">
						<h2></h2>
						<p class='popDescr'></p>
						<h3 class='frsp' style='text-align:right'>
							<a style='padding:5px 10px;' href=""><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LText;?></a>
						</h3>
					</div>
						
					</div>
				</div>
				<input type='text' style='display:none;' class='CPWIDTHVideo' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_W;?>' />
				<input type='text' style='display:none;' class='CPHeightVideo' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_H;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideo' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_TFS;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideoTitlePopup' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_TFS;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideoDescPopup' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_DFS;?>' />
				<input type='text' style='display:none;' class='CPFontSizeVideoLinkPopup' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_CP_Pop_LFS;?>' />
				
				<script>
					jQuery(document).ready(function(){
						var CPWIDTHVideo = jQuery('.CPWIDTHVideo').val();
						var CPHeightVideo = jQuery('.CPHeightVideo').val();
						var CPFontSizeVideo = jQuery('.CPFontSizeVideo').val();
						var CPFontSizeVideoTitlePopup = jQuery('.CPFontSizeVideoTitlePopup').val();
						var CPFontSizeVideoDescPopup = jQuery('.CPFontSizeVideoDescPopup').val();
						var CPFontSizeVideoLinkPopup = jQuery('.CPFontSizeVideoLinkPopup').val();
						
						
						function resp(){
							jQuery('.TotalSoft_GV_CP_TD h2').css('font-size',CPFontSizeVideoTitlePopup*jQuery('.totalsoftview').parent().width()/(jQuery('.totalsoftview').parent().width()+150));
							jQuery('.popDescr').css('font-size',CPFontSizeVideoDescPopup*jQuery('.totalsoftview').parent().width()/(jQuery('.totalsoftview').parent().width()+150));
							jQuery('.fResp h3 a').css('font-size',CPFontSizeVideoLinkPopup*jQuery('.totalsoftview').parent().width()/(jQuery('.totalsoftview').parent().width()+150))
							if(jQuery('.totalsoftview').parent().width()<=300){
								jQuery('.totalsoftview').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/300);
								jQuery('.totalsoftview').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/300);
								jQuery('.totalsoftview .mask').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/300);
								jQuery('.totalsoftview .mask').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/300);
								jQuery('.totalsoftview .content').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/300);
								jQuery('.totalsoftview .content').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/300);
								jQuery('.totalsoftview h2').css('font-size',CPFontSizeVideo*jQuery('.totalsoftview').parent().width()/300);
							}else if(jQuery('.totalsoftview').parent().width()<=700){
								jQuery('.totalsoftview').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/700);
								jQuery('.totalsoftview').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/700);
								jQuery('.totalsoftview .mask').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/700);
								jQuery('.totalsoftview .mask').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/700);
								jQuery('.totalsoftview .content').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/700);
								jQuery('.totalsoftview .content').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/700);
								jQuery('.totalsoftview h2').css('font-size',CPFontSizeVideo*jQuery('.totalsoftview').parent().width()/700)
							}else if(jQuery('.totalsoftview').parent().width()<=1000){
								jQuery('.totalsoftview').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/1000);
								jQuery('.totalsoftview').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/1000);
								jQuery('.totalsoftview .mask').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/1000);
								jQuery('.totalsoftview .mask').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/1000);
								jQuery('.totalsoftview .content').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/1000);
								jQuery('.totalsoftview .content').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/1000);
								jQuery('.totalsoftview h2').css('font-size',CPFontSizeVideo*jQuery('.totalsoftview').parent().width()/1000)
							}else{
								jQuery('.totalsoftview').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/1200);
								jQuery('.totalsoftview').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/1200);
								jQuery('.totalsoftview .mask').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/1200);
								jQuery('.totalsoftview .mask').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/1200);
								jQuery('.totalsoftview .content').css('width',CPWIDTHVideo*jQuery('.totalsoftview').parent().width()/1200);
								jQuery('.totalsoftview .content').css('height',CPHeightVideo*jQuery('.totalsoftview').parent().width()/1200);
								jQuery('.totalsoftview h2').css('font-size',CPFontSizeVideo*jQuery('.totalsoftview').parent().width()/1200)
							}
							
						}
						resp();
						jQuery(window).resize(function(){
							resp();
						})
					})
				</script>
		 	<?php }
			else if($Total_Soft_GalleryV_Type[0]->TotalSoftGalleryV_SetType=='Elastic Gallery')
			{
			?>
				<link href="<?php echo plugins_url('../CSS/lightgallery.css',__FILE__);?>" rel="stylesheet">
				<style type="text/css">
					.lg-backdrop {
					  position: fixed;
					  top: 0;
					  left: 0;
					  right: 0;
					  bottom: 0;
					  z-index: 1040;
					  background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_POvBgC;?>;
					  opacity: 0;
					  -webkit-transition: opacity 0.15s ease 0s;
					  -o-transition: opacity 0.15s ease 0s;
					  transition: opacity 0.15s ease 0s;
					}
					.lg-backdrop.in {
					  opacity: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_POvBgCOp/100;?>;
					}
					#lg-counter {
					  color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpC;?>;
					  display: inline-block;
					  font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpFS*2/3;?>px;
					  padding-left: 20px;
					  padding-top: 12px;
					  vertical-align: middle;
					}
					.lg-toolbar .lg-icon {
					  color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpC;?>;
					  cursor: pointer;
					  float: right;
					  font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpFS;?>px;
					  height: 47px;
					  line-height: 27px;
					  padding: 10px 0;
					  text-align: center;
					  width: 50px;
					  text-decoration: none !important;
					  outline: medium none;
					  -webkit-transition: color 0.2s linear;
					  -o-transition: color 0.2s linear;
					  transition: color 0.2s linear;
					}
					.lg-iconn{
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpC;?>;
						cursor: pointer;
						float: right;
						font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpFS;?>px;
						height: 47px;
						line-height: 27px;
						padding: 10px 0;
						text-align: center;
						width: 50px;
						text-decoration: none !important;
						outline: medium none;
						-webkit-transition: color 0.2s linear;
						-o-transition: color 0.2s linear;
						transition: color 0.2s linear;
					}
					.lg-toolbar .lg-close:after{
						display:none !important;
					}
					.lg-actions .lg-next, .lg-actions .lg-prev {
					  background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcBgC;?>;
					  border-radius: 2px;
					  color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcC;?>;
					  cursor: pointer;
					  display: block;
					  font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlIcFS;?>px;
					  margin-top: -10px;
					  padding: 8px 10px 9px;
					  position: absolute;
					  top: 50%;
					  z-index: 1080;
					}
					.lg-toolbar .lg-icon:hover{
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlOpC;?> !important;
					}
					.lg-actions .lg-prev:after{
						display:none;
					}
					.lg-outer .lg-video {
					  width: 100%;
					  height: 0;
					  border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlBW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlBS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlBC;?>;
					  box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlBSh;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlBShC;?>;
					  padding-bottom: 56.25%;
					  overflow: hidden;
					  position: relative;
					}
					.demo-gallery > ul {
					  margin-bottom: 0;
					}
					.demo-gallery > ul > li {
						float: left;
						margin-bottom: 15px;
						margin-right: 20px;
						width: 200px;
					}
					.demo-gallery > ul > li a {
					  border: 3px solid #FFF;
					  border-radius: 3px;
					  display: block;
					  overflow: hidden;
					  position: relative;
					  float: left;
					}
					.demo-gallery > ul > li a > img {
					  -webkit-transition: -webkit-transform 0.15s ease 0s;
					  -moz-transition: -moz-transform 0.15s ease 0s;
					  -o-transition: -o-transform 0.15s ease 0s;
					  transition: transform 0.15s ease 0s;
					  -webkit-transform: scale3d(1, 1, 1);
					  transform: scale3d(1, 1, 1);
					  height: 100%;
					  width: 100%;
					}
					.demo-gallery > ul > li a:hover > img {
					  -webkit-transform: scale3d(1.1, 1.1, 1.1);
					  transform: scale3d(1.1, 1.1, 1.1);
					}
					.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
					  opacity: 1;
					}
					.demo-gallery > ul > li a .demo-gallery-poster {
					  background-color: rgba(0, 0, 0, 0.1);
					  bottom: 0;
					  left: 0;
					  position: absolute;
					  right: 0;
					  top: 0;
					  -webkit-transition: background-color 0.15s ease 0s;
					  -o-transition: background-color 0.15s ease 0s;
					  transition: background-color 0.15s ease 0s;
					}
					.demo-gallery > ul > li a .demo-gallery-poster > img {
					  left: 50%;
					  margin-left: -10px;
					  margin-top: -10px;
					  opacity: 0;
					  position: absolute;
					  top: 50%;
					  -webkit-transition: opacity 0.3s ease 0s;
					  -o-transition: opacity 0.3s ease 0s;
					  transition: opacity 0.3s ease 0s;
					}
					.demo-gallery > ul > li a:hover .demo-gallery-poster {
					  background-color: rgba(0, 0, 0, 0.5);
					}
					.demo-gallery .justified-gallery > a > img {
					  -webkit-transition: -webkit-transform 0.15s ease 0s;
					  -moz-transition: -moz-transform 0.15s ease 0s;
					  -o-transition: -o-transform 0.15s ease 0s;
					  transition: transform 0.15s ease 0s;
					  -webkit-transform: scale3d(1, 1, 1);
					  transform: scale3d(1, 1, 1);
					  height: 100%;
					  width: 100%;
					}
					.demo-gallery .justified-gallery > a:hover > img {
					  -webkit-transform: scale3d(1.1, 1.1, 1.1);
					  transform: scale3d(1.1, 1.1, 1.1);
					}
					.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
					  opacity: 1;
					}
					.demo-gallery .justified-gallery > a .demo-gallery-poster {
					  background-color: rgba(0, 0, 0, 0.1);
					  bottom: 0;
					  left: 0;
					  position: absolute;
					  right: 0;
					  top: 0;
					  -webkit-transition: background-color 0.15s ease 0s;
					  -o-transition: background-color 0.15s ease 0s;
					  transition: background-color 0.15s ease 0s;
					}
					.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
					  left: 50%;
					  margin-left: -10px;
					  margin-top: -10px;
					  opacity: 0;
					  position: absolute;
					  top: 50%;
					  -webkit-transition: opacity 0.3s ease 0s;
					  -o-transition: opacity 0.3s ease 0s;
					  transition: opacity 0.3s ease 0s;
					}
					.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
					  background-color: rgba(0, 0, 0, 0.5);
					}
					.demo-gallery .video .demo-gallery-poster img {
					  height: 48px;
					  margin-left: -24px;
					  margin-top: -24px;
					  opacity: 0.8;
					  width: 48px;
					}
					.demo-gallery.dark > ul > li a {
					  border: 3px solid #04070a;
					}
					.home .demo-gallery {
					  padding-bottom: 80px;
					}
					.fhovZoom{
						display:inline-block;
						position:relative;
						/*width:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_W;?>px;
						height:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_H;?>px;*/
						width:450px;
						height:350px;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_BW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_BS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_BC;?>;
						box-shadow:0px 0px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_BSh;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_BShC;?>;
						margin:5px;
						overflow:hidden;
					}
					.zEff1{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:125% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff1{
						top:-25%;
					}
					.zEff2{
						position:absolute;
						top:-25%;
						left:0%;
						width:100%;
						height:125% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff2{
						top:0%;
					}
					.zEff3{
						position:absolute;
						top:-15%;
						left:-15%;
						width:130%;
						height:130% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff3{
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
					}
					.zEff4{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff4{
						top:-15%;
						left:-15%;
						width:130%;
						height:130% !important;
					}
					.zEff5{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff5{
						width:130%;
						height:130% !important;
					}
					.zEff6{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff6{
						width:130%;
						height:130% !important;
						top:-30%;
					}
					.zEff7{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff7{
						width:130%;
						height:130% !important;
						left:-30%;
					}
					.zEff8{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						height:100% !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovTr/10;?>s linear !important;
					}
					.fhovZoom:hover .zEff8{
						width:130%;
						height:130% !important;
						left:-30%;
						top:-30%;
					}
					.zTitfHov1{
						position:absolute;
						bottom:0%;
						left:0%;
						width:100%;
						padding-top:5px;
						padding-bottom:5px;
						text-align:left;
						background:#000;
						color:#fff;
						transform:translateY(100%) !important;
						-webkit-transform:translateY(100%) !important;
						-ms-transform:translateY(100%) !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovTr/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovTr/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovTr/10;?>s linear;
					}
					.fhovZoom:hover .zTitfHov1{
						transform:translateY(0%) !important;
						-webkit-transform:translateY(0%) !important;
						-ms-transform:translateY(0%) !important;
					}
					.zTitfHov2{
						position:absolute;
						top:0%;
						left:0%;
						width:100%;
						padding-top:5px;
						padding-bottom:5px;
						text-align:left;
						background:#000;
						color:#fff;
						transform:translateY(-100%) !important;
						-webkit-transform:translateY(-100%) !important;
						-ms-transform:translateY(-100%) !important;
						transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovTr/10;?>s linear;
						-webkit-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovTr/10;?>s linear;
						-ms-transition:all <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovTr/10;?>s linear;
					}
					.fhovZoom:hover .zTitfHov2{
						transform:translateY(0%) !important;
						-webkit-transform:translateY(0%) !important;
						-ms-transform:translateY(0%) !important;
					}
					
					.TotalsofthPIcon1{
						float:right;
						padding:5px;
						margin-right:5px;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcS;?>px;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcBW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcBS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcBC;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcBgC;?>;
						border-radius:50%;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcC;?>;
					}
					.TotalsofthLIcon1{
						float:right;
						padding:5px;
						margin-right:5px;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcS;?>px;
						border:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcBW;?>px <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcBS;?> <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_LBC;?>;
						background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_LBgC;?>;
						border-radius:50%;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_LC;?>;
					}
					ul.pagination li {
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						list-style:none !important;
						padding-left:0px !important;
					}
					ul.pagination li span {
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_FF;?>;
						height:auto !important;
					}
					ul.pagination li span:hover:not(.active) {
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_HC;?>;
					}
					ul.pagination li span.active {
					    background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_CBgC;?>;
					    color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_CC;?>;
					}
					.TotalSoftGV_HLG_LM
					{
						background-color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_BgC;?>;
						color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_C;?>;
						font-size:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_FS;?>px;
						font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_FF;?>;
						<?php if($TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_BS!='none'){ ?> 
							border: 1px solid <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_BC;?>;
						<?php } else { ?>
							border: none !important;
						<?php }?>
						cursor:pointer;
						display: block;
					}
					.TotalSoftGV_HLG_LM:hover
					{
						background-color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_HBgC;?>;
						color: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_HC;?>;
					}					
				</style>
				<div id="video-gallery" class='Tot_Vid_Gallery' style='text-align:center;'>
				<?php for($i=0;$i<count($Total_Soft_GalleryV_Videos);$i++){ ?>
					<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='All'){ ?>
					<div  id="TotalSoft_GV_HLG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='fhovZoom' href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" data-poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
					  <a href='#' >
						  <img class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovT;?>' style='max-width:none;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
						  <div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovT;?>' style='background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TBgC;?>;opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TOp/100;?>'> 
							<span style='margin-left:5px;font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TFS;?>px; color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TC;?>; font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TFF;?>; display:<?php echo $TotalSoft_VG_HLG_ShowT;?>'>
								<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
							</span>
							<i onclick='TotalsofthPIcon()' class='TotalsofthPIcon1 <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcT;?>' ></i>
							<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!=''){ ?>
							<i onclick="TotalsoftLink('<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>',<?php echo $i+1; ?>)" name='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT;?>'  class='Tot_<?php echo $i+1; ?> TotalsofthLIcon1 <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_LIcT;?>'></i>
							<?php } ?>
						  </div> 
					  </a>
					</div>
					<?php }else{ ?>
					<?php if($i<$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage){ ?>
						<div  id="TotalSoft_GV_HLG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='fhovZoom' href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" data-poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
					  <a href='#' >
						  <img class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovT;?>' style='max-width:none;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
						  <div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovT;?>' style='background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TBgC;?>;opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TOp/100;?>'> 
							<span style='margin-left:5px;font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TFS;?>px; color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TC;?>; font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TFF;?>;display:<?php echo $TotalSoft_VG_HLG_ShowT;?>'>
								<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
							</span>
							<i onclick='TotalsofthPIcon()' class='TotalsofthPIcon1 <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcT;?>' ></i>
							<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!=''){ ?>
							<i onclick="TotalsoftLink('<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>',<?php echo $i+1; ?>)" name='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT;?>'  class='Tot_<?php echo $i+1; ?> TotalsofthLIcon1 <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_LIcT;?>'></i>
							<?php } ?>
						  </div> 
					  </a>
					</div>
					<?php }else{ ?>
						<div style='display:none;'  id="TotalSoft_GV_HLG_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i+1;?>" class='fhovZoom' href="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VURL;?>" data-poster="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>">
					  <a href='#' >
						  <img class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_IHovT;?>' style='max-width:none;' src="<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_IURL;?>" />
						  <div class='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_THovT;?>' style='background:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TBgC;?>;opacity:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TOp/100;?>'> 
							<span style='margin-left:5px;font-size: <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TFS;?>px; color:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TC;?>; font-family:<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_TFF;?>;display:<?php echo $TotalSoft_VG_HLG_ShowT;?>'>
								<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VT;?>
							</span>
							<i onclick='TotalsofthPIcon()' class='TotalsofthPIcon1 <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PIcT;?>' ></i>
							<?php if($Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink!=''){ ?>
							<i onclick="TotalsoftLink('<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VLink;?>',<?php echo $i+1; ?>)" name='<?php echo $Total_Soft_GalleryV_Videos[$i]->TotalSoftGallery_Video_VONT;?>'  class='Tot_<?php echo $i+1; ?> TotalsofthLIcon1 <?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_LIcT;?>'></i>
							<?php } ?>
						  </div> 
					  </a>
					</div>
					<?php } ?>
				<?php } ?>
				<?php } ?>
				</div>
				<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Pagination'){ ?>
							<div class="TotalSoftcenter">
							  <ul class="pagination">
							    <li onclick="Total_Soft_GV_HLG_PageP('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_PBT;?></span></li>
							    <?php for($i=1;$i<=ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);$i++){ ?> 
							    	<?php if($i==1){ ?>
							    		<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_HLG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span class="active"><?php echo $i;?></span></li>
							    	<?php } else { ?>
							   			<li id="TotalSoft_GV_HLG_PLi_<?php echo $Total_Soft_Gallery_Video;?>_<?php echo $i;?>" onclick="Total_Soft_GV_HLG_Page('<?php echo $Total_Soft_Gallery_Video;?>','<?php echo $i?>','<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>')"><span><?php echo $i;?></span></li>
							    	<?php }?>
							   	<?php }?>
							    <li onclick="Total_Soft_GV_HLG_PageN('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><span><?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_P_NBT;?></span></li>
							  </ul>
							</div>
						<?php }?>
						<?php if($Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_ShowType=='Load'){ ?>
							<div class="TotalSoftcenter" id="TotalSoft_VG_HLG_PageDiv_<?php echo $Total_Soft_Gallery_Video;?>">
								<span class="TotalSoftGV_HLG_LM" onclick="Total_Soft_GV_HLG_PageLM('<?php echo $Total_Soft_Gallery_Video;?>', '<?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage;?>', '<?php echo count($Total_Soft_GalleryV_Videos);?>', '<?php echo ceil(count($Total_Soft_GalleryV_Videos)/$Total_Soft_GalleryV_Man[0]->TotalSoftGallery_Video_PerPage);?>')"><?php echo $Total_Soft_GalleryV_Man[0]->TotalSoftGallery_LoadMore;?></span>
								<input type="text" style="display:none;" id="TotalSoft_VG_HLG_Page_<?php echo $Total_Soft_Gallery_Video;?>" value="1">
							</div>
						<?php } ?>
				<input type='text' style='display:none;' class='iagesCountNumb' value='<?php count($Total_Soft_GalleryV_Videos); ?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlDuration' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSShChDur;?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlDelIcType' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PDelIcT;?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlIcLeftType' value='<?php echo $TotalSoft_VG_HLG_PSlIcT_Left;?>' >
				<input type='text' style='display:none;' class='Totalsoft_SlIcRightType' value='<?php echo $TotalSoft_VG_HLG_PSlIcT_Right;?>' >
				<input type='text' style='display:none;' class='Totalsoft_Autoplay' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlAutPl;?>' >
				<input type='text' style='display:none;' class='Totalsoft_Loop' value='<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_PSlLoop;?>' >
				
				<script type="text/javascript">
					jQuery(document).ready(function(){
						var cssWidtTot=<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_W;?>;
						var cssHeightTot=<?php echo $TotalSoftGallery_Video_Opt[0]->TotalSoft_VG_HLG_H;?>;
						function resp(){
							if(jQuery('.fhovZoom').parent().width()<=jQuery('.fhovZoom').width()){
								jQuery('.fhovZoom').css('width',jQuery('.fhovZoom').parent().width());
								jQuery('.fhovZoom').css('height',jQuery('.fhovZoom').parent().width()*cssHeightTot/cssWidtTot);
							}
						}
						resp();
						jQuery(window).resize(function(){
							resp();
						})
						
						jQuery('.Tot_Vid_Gallery').lightGallery();
					});
					
					function TotalsoftLink(link,number)
					{
						for(number==1;number<=<?php echo count($Total_Soft_GalleryV_Videos); ?>;number++){
							if(jQuery('.Tot_'+number).attr('name')=='true'){
								window.open(link);
								break;
							}else{
								window.location.assign(link)
							}
						}
					}
					jQuery('.TotalsofthLIcon1').one('click',function(){
						TotalsoftLink();
					})
				</script>
				<script src="<?php echo plugins_url('../JS/lightgallery.js',__FILE__);?>"></script>
				<script src="<?php echo plugins_url('../JS/lg-video.js',__FILE__);?>"></script>
				<script src="<?php echo plugins_url('../JS/jquery.mousewheel.min.js',__FILE__);?>"></script>
				<script src="<?php echo plugins_url('../JS/lg-autoplay.js',__FILE__);?>"></script>
				<script>
					
				</script>
			<?php
 		 	echo $after_widget;
			}
 		}
	}
?>