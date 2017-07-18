<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	require_once(dirname(__FILE__) . '/Total-Soft-Gallery-Video-Install.php');
	global $wpdb;
	$table_name1 = $wpdb->prefix . "totalsoft_galleryv_id";
	$table_name2 = $wpdb->prefix . "totalsoft_galleryv_manager";
	$table_name3 = $wpdb->prefix . "totalsoft_galleryv_videos";
	$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";

	wp_enqueue_media();
	wp_enqueue_script( 'custom-header' );
	add_filter( 'upload_size_limit', 'PBP_increase_upload' );
	function PBP_increase_upload(  )
	{
	 	return 20480000; // 20MB
	}

	$TotalSoftGallery_Video_Gallery_Title=sanitize_text_field($_POST['TotalSoftGallery_Video_Gallery_Title']);
	$TotalSoftGallery_Video_Option=sanitize_text_field($_POST['TotalSoftGallery_Video_Option']);
	$TotalSoftGallery_Video_ShowType=sanitize_text_field($_POST['TotalSoftGallery_Video_ShowType']);
	$TotalSoftGallery_Video_PerPage=sanitize_text_field($_POST['TotalSoftGallery_Video_PerPage']);
	$TotalSoftGallery_LoadMore=sanitize_text_field($_POST['TotalSoftGallery_LoadMore']);

	$TotalSoftGallery_Video_VT=array();
	$TotalSoftGallery_Video_VDesc=array();
	$TotalSoftGallery_Video_VLink=array();
	$TotalSoftGallery_Video_VONT=array();
	$TotalSoftGallery_Video_VURL=array();
	$TotalSoftGallery_Video_IURL=array();
	$TotalSoftGallery_Video_Video=array();

	$TotalSoftGVHidNum=sanitize_text_field($_POST['TotalSoftGVHidNum']);

	for($j=1;$j<=$TotalSoftGVHidNum;$j++)
	{
		$TotalSoftGallery_Video_VT[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_VT_' . $j]);
		$TotalSoftGallery_Video_VDesc[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_VDesc_' . $j]);
		$TotalSoftGallery_Video_VLink[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_VLink_' . $j]);
		$TotalSoftGallery_Video_VONT[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_VONT_' . $j]);
		$TotalSoftGallery_Video_VURL[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_VURL_' . $j]);
		$TotalSoftGallery_Video_IURL[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_IURL_' . $j]);
		$TotalSoftGallery_Video_Video[$j]=sanitize_text_field($_POST['TotalSoftGallery_Video_RVideo_' . $j]);
	}

	if(isset($_POST['Total_Soft_Gallery_Video_Save']))
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftGallery_Video_Gallery_Title, TotalSoftGallery_Video_Option, TotalSoftGallery_Video_ShowType, TotalSoftGallery_Video_PerPage, TotalSoftGallery_LoadMore) VALUES (%d, %s, %s, %s, %s, %s)", '', $TotalSoftGallery_Video_Gallery_Title, $TotalSoftGallery_Video_Option, $TotalSoftGallery_Video_ShowType, $TotalSoftGallery_Video_PerPage, $TotalSoftGallery_LoadMore));

		$New_GalleryV_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d order by id desc limit 1",0));
		$New_Total_SoftGVID=$New_GalleryV_ID[0]->GalleryV_ID + 1;
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, GalleryV_ID) VALUES (%d, %s)", '', $New_Total_SoftGVID));

		for($j=1;$j<=$TotalSoftGVHidNum;$j++)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, TotalSoftGallery_Video_VT, TotalSoftGallery_Video_VDesc, TotalSoftGallery_Video_VLink, TotalSoftGallery_Video_VONT, TotalSoftGallery_Video_VURL, TotalSoftGallery_Video_IURL, TotalSoftGallery_Video_Video, GalleryV_ID) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGallery_Video_VT[$j], $TotalSoftGallery_Video_VDesc[$j], $TotalSoftGallery_Video_VLink[$j], $TotalSoftGallery_Video_VONT[$j], $TotalSoftGallery_Video_VURL[$j], $TotalSoftGallery_Video_IURL[$j], $TotalSoftGallery_Video_Video[$j], $New_Total_SoftGVID));
		}
	}
	else if(isset($_POST['Total_Soft_Gallery_Video_Update']))
	{
		$Total_SoftGallery_Video_Update=sanitize_text_field($_POST['Total_SoftGallery_Video_Update']);

		$wpdb->query($wpdb->prepare("UPDATE $table_name2 set TotalSoftGallery_Video_Gallery_Title=%s, TotalSoftGallery_Video_Option=%s, TotalSoftGallery_Video_ShowType=%s, TotalSoftGallery_Video_PerPage=%s, TotalSoftGallery_LoadMore=%s WHERE id=%d", $TotalSoftGallery_Video_Gallery_Title, $TotalSoftGallery_Video_Option, $TotalSoftGallery_Video_ShowType, $TotalSoftGallery_Video_PerPage, $TotalSoftGallery_LoadMore, $Total_SoftGallery_Video_Update));

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE GalleryV_ID=%s", $Total_SoftGallery_Video_Update));

		for($j=1;$j<=$TotalSoftGVHidNum;$j++)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, TotalSoftGallery_Video_VT, TotalSoftGallery_Video_VDesc, TotalSoftGallery_Video_VLink, TotalSoftGallery_Video_VONT, TotalSoftGallery_Video_VURL, TotalSoftGallery_Video_IURL, TotalSoftGallery_Video_Video, GalleryV_ID) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftGallery_Video_VT[$j], $TotalSoftGallery_Video_VDesc[$j], $TotalSoftGallery_Video_VLink[$j], $TotalSoftGallery_Video_VONT[$j], $TotalSoftGallery_Video_VURL[$j], $TotalSoftGallery_Video_IURL[$j], $TotalSoftGallery_Video_Video[$j], $Total_SoftGallery_Video_Update));
		}
	}

	$TotalSoftGalleryVOptions=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d", 0));
	$TotalSoftGalleryV=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d", 0));
	$TotalSoftGalleryVShortID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d order by id desc limit 1",0));
?>

<form method="POST" enctype="multipart/form-data">
	<div class="Total_Soft_Gallery_Video_AMD">
		<div class="Total_Soft_Gallery_Video_AMD1"></div>
		<div class="Total_Soft_Gallery_Video_AMD2">
			<i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Creating New Gallery Video"></i>
			<input type="button" name="" value="New Gallery Video" class="Total_Soft_Gallery_Video_AMD2_But" onclick="Total_Soft_Gallery_Video_AMD2_But1(<?php echo $TotalSoftGalleryVShortID[0]->GalleryV_ID+1;?>)">
		</div>
		<div class="Total_Soft_Gallery_Video_AMD3">
			<i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Canceling"></i>
			<input type="button" value="Cancel" class="Total_Soft_Gallery_Video_AMD2_But" onclick='TotalSoft_Reload()'>
			<i class="Total_Soft_Gallery_Video_Save Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Saving Settings"></i>
			<input type="submit" name="Total_Soft_Gallery_Video_Save" value="Save" class="Total_Soft_Gallery_Video_Save Total_Soft_Gallery_Video_AMD2_But">
			<i class="Total_Soft_Gallery_Video_Update Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Updating Settings"></i>
			<input type="submit" name="Total_Soft_Gallery_Video_Update" value="Update" class="Total_Soft_Gallery_Video_Update Total_Soft_Gallery_Video_AMD2_But">
			<input type="text" style="display:none" name="Total_SoftGallery_Video_Update" id="Total_SoftGallery_Video_Update">
		</div>
	</div>
	<table class="Total_Soft_Gallery_VideoAMMTable">
		<tr class="Total_Soft_AMMTableFR">
			<td>No</td>
			<td>Gallery Video Name</td>
			<td>Gallery Video Option</td>
			<td>Videos Count</td>
			<td>Actions</td>
		</tr>
	</table>

	<table class="Total_Soft_Gallery_VideoAMOTable">
	 	<?php for($i=0;$i<count($TotalSoftGalleryV);$i++){
	 		$TotalSoftGallery_Videos=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE GalleryV_ID=%s", $TotalSoftGalleryV[$i]->id));
	 		?> 
	 		<tr>
				<td><?php echo $i+1;?></td>
				<td><?php echo $TotalSoftGalleryV[$i]->TotalSoftGallery_Video_Gallery_Title;?></td>
				<td><?php echo $TotalSoftGalleryV[$i]->TotalSoftGallery_Video_Option;?></td>
				<td><?php echo count($TotalSoftGallery_Videos);?></td>
				<td onclick="TotalSoftGallery_Video_Edit(<?php echo $TotalSoftGalleryV[$i]->id;?>)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
				<td onclick="TotalSoftGallery_Video_Del(<?php echo $TotalSoftGalleryV[$i]->id;?>)"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
			</tr>
	 	<?php }?> 
	</table>

	<table class="Total_Soft_AMTable">
		<tr>
			<td>Gallery Video Title <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title=""></i></td>
			<td>Gallery Video Option <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title=""></i></td>
			<td>Gallery Show Type/Videos Per Page <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title=""></i></td>
		</tr>
		<tr>
			<td><input type="text" name="TotalSoftGallery_Video_Gallery_Title" id="TotalSoftGallery_Video_Gallery_Title" class="Total_Soft_Select" required placeholder=" * Required"></td>
			<td>
				<select class="Total_Soft_Select" name="TotalSoftGallery_Video_Option" id="TotalSoftGallery_Video_Option">
					<?php for($i=0;$i<count($TotalSoftGalleryVOptions);$i++){?>
						<option value="<?php echo $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetName;?>"><?php echo $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetName;?></option>
					<?php }?>
				</select>
			</td>
			<td>
				<select name="TotalSoftGallery_Video_ShowType" id="TotalSoftGallery_Video_ShowType" onchange="TotalSoftGallery_Video_Show()">
					<option value="All">        Show All   </option>
					<option value="Pagination"> Pagination </option>
					<option value="Load">       Load More  </option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>
				<select name="TotalSoftGallery_Video_PerPage" id="TotalSoftGallery_Video_PerPage">
					<?php for($i=1;$i<=20;$i++){ ?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>
				<input type="text" name="TotalSoftGallery_LoadMore" id="TotalSoftGallery_LoadMore" class="Total_Soft_Select" value="Load More ...">
			</td>
		</tr>
		<tr>
			<td colspan="3">Add Video</td>
		</tr>
		<tr>
			<td>Video Title <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title=""></i></td>
			<td colspan="2"><input type="text" name="TotalSoftGallery_Video_Title" id="TotalSoftGallery_Video_Title" class="Total_Soft_Select" placeholder=" * Required"></td>
		</tr>
		<tr>
			<td> 
				<div id="wp-content-media-buttons" class="wp-media-buttons" >													
					<a href="#" class="button insert-media add_media" style="border:1px solid #009491; color:#009491; background-color:#f4f4f4" data-editor="TotalSoftGallery_Video_URL_1" title="Add Video" id="TotalSoftGallery_Video_URL" onclick="TotalSoftGallery_Video_URL_Clicked()">
						<span class="wp-media-buttons-icon"></span>Add Video
					</a>
				</div>
				<input type="text" style="display:none;" id="TotalSoftGallery_Video_URL_1">	
				<input type="text" style="display:none;" id="TotalSoftGallery_Video_Video_1">	
			</td>
			<td colspan="2">
				<input type="text" id="TotalSoftGallery_Video_URL_2" class="Total_Soft_Select" readonly>
				<input type="text" id="TotalSoftGallery_VideoIm_URL_2" class="Total_Soft_Select" readonly style="display:none">
			</td>			
		</tr>
		<tr style="height:100px">
			<td>Video Description <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title=""></i></td>
			<td colspan="2">
				<textarea rows="4" class="Total_Soft_Select Total_Soft_Desc" name="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_Desc"></textarea>
			</td>
		</tr>
		<tr>
			<td>Link <i class="Total_Soft_Help1 totalsoft totalsoft-question-circle-o" title=""></i></td>
			<td><input type="text" name="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_Link" class="Total_Soft_Select"></td>
			<td>New Tab <input type="checkbox" class="Total_Soft_Check" checked="check" id="TotalSoftGallery_Video_ONT" name="TotalSoftGallery_Video_ONT"></td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="button" class="Total_Soft_Gallery_Video_But" onclick="Total_Soft_Gallery_Video_Res_Vid()" value="Reset">
				<input type="button" class="Total_Soft_Gallery_Video_But" id="Total_Soft_Gallery_Video_Sav" onclick="Total_Soft_Gallery_Video_Save_Vid()" value="Save Video">
				<input type="button" class="Total_Soft_Gallery_Video_But" id="Total_Soft_Gallery_Video_Upd" onclick="Total_Soft_Gallery_Video_Update_Vid()" value="Update Video">
				<input type="text" style="display:none;" id="TotalSoftGVHidNum" name="TotalSoftGVHidNum" value="0">
				<input type="text" style="display:none;" id="TotalSoftGVHidUpdate" value="0">
			</td>
		</tr>
	</table>

	<table class="Total_Soft_AMVideoTable">
		<tr>
			<td>No</td>
			<td>Video Title</td>
			<td>Video URL</td>
			<td>Video</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>		
	</table>
	
	<ul id="TotalSoftGallery_VideoUl" onclick="TotalSoftGallery_VideoUlSort()">
		
	</ul>
	<table class="Total_Soft_GV_AMShortTable">
		<tr style="text-align:center">
			<td>Shortcode</td>
		</tr>
		<tr>
			<td>Copy & paste the shortcode directly into any WordPress post or page.</td>
		</tr>
		<tr style="text-align:center">
			<td class="Total_Soft_Gallery_Video_ID"></td>
		</tr>
		<tr style="text-align:center">
			<td>Templete Include</td>
		</tr>
		<tr>
			<td>Copy & paste this code into a template file to include the slideshow within your theme.</td>
		</tr>
		<tr>
			<td >
				<textarea class="Total_Soft_Gallery_Video_TID" rows="3" readonly>
					
				</textarea>
			</td>
		</tr>
	</table>
</form>