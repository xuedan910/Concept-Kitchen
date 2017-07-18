<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	require_once(dirname(__FILE__) . '/Total-Soft-Gallery-Video-Install.php');
	global $wpdb;

	$table_name4 = $wpdb->prefix . "totalsoft_galleryv_dbt";
	$TotalSoftGalleryVOptions=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d", 0));	
?>
<form method="POST">
	<div class="Total_Soft_Gallery_Video_AMD">
		<a href="http://total-soft.pe.hu/" target="_blank" title="Click to Buy">
			<div class="Full_Version"><i class="totalsoft totalsoft-cart-arrow-down"></i>Get The Full Version</div>
		</a>
		<div class="Full_Version_Span">
			This is the free version of the plugin.
		</div>
		<div class="Total_Soft_Gallery_Video_AMD1"></div>
		
		<div class="Total_Soft_Gallery_Video_AMD3">
			<i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Canceling"></i>
			<input type="button" value="Cancel" class="Total_Soft_Gallery_Video_AMD2_But" onclick='TotalSoft_Reload()'>
		</div>
	</div>

	<table class="Total_Soft_AMMTable">
		<tr class="Total_Soft_AMMTableFR">
			<td>No</td>
			<td>Setting Title</td>
			<td>Gallery Type</td>
			<td>Actions</td>
		</tr>
	</table>

	<table class="Total_Soft_AMOTable">
	 	<?php for($i=0;$i<count($TotalSoftGalleryVOptions);$i++){ ?> 
	 		<tr>
				<td><?php echo $i+1;?></td>
				<td><?php echo $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetName;?></td>
				<td><?php echo $TotalSoftGalleryVOptions[$i]->TotalSoftGalleryV_SetType;?></td>
				<td onclick="TotalSoftGalleryV_Edit_Option(<?php echo $i+1;?>)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
				<td><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
			</tr>
	 	<?php }?>
	</table>

	<img src="<?php echo plugins_url('../Images/Gallery-Video-1.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_1">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-2.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_2">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-3.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_3">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-4.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_4">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-5.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_5">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-6.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_6">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-7.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_7">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-8.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_8">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-9.png',__FILE__);?>"  class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_9">	
	<img src="<?php echo plugins_url('../Images/Gallery-Video-10.png',__FILE__);?>" class="TotalSoftGalleryVideoFree" id="TotalSoftGalleryVideoFree_10">	
</form>