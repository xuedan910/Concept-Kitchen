function Total_Soft_Gallery_Video_AMD2_But1(Gallery_Video_ID)
{
	jQuery('.Total_Soft_Gallery_Video_AMD2').hide(500);
	jQuery('.Total_Soft_Gallery_VideoAMMTable').hide(500);
	jQuery('.Total_Soft_Gallery_VideoAMOTable').hide(500);
	jQuery('.Total_Soft_Gallery_Video_Save').show(500);
	jQuery('.Total_Soft_Gallery_Video_Update').hide(500);
	jQuery('.Total_Soft_Gallery_Video_ID').html('[Total_Soft_Gallery_Video id="'+Gallery_Video_ID+'"]');
	jQuery('.Total_Soft_Gallery_Video_TID').html('<?php echo do_shortcode("[Total_Soft_Gallery_Video id="'+Gallery_Video_ID+'"]");?>');
	setTimeout(function(){
		jQuery('.Total_Soft_Gallery_Video_AMD3').show(500);
		jQuery('.Total_Soft_AMTable').show(500);
		jQuery('.Total_Soft_AMVideoTable').show(500);
		jQuery('.Total_Soft_AMVideoTable1').show(500);
		jQuery('.Total_Soft_GV_AMShortTable').show(500);
	},500)
}
function TotalSoft_Reload()
{
	location.reload();
}
function TotalSoftGallery_Video_Show()
{
	var TotalSoftGallery_Video_ShowType=jQuery('#TotalSoftGallery_Video_ShowType').val();
	if(TotalSoftGallery_Video_ShowType=='All')
	{
		jQuery('#TotalSoftGallery_Video_PerPage').hide(500);
		jQuery('#TotalSoftGallery_LoadMore').hide(500);
	}
	else if(TotalSoftGallery_Video_ShowType=='Pagination')
	{
		jQuery('#TotalSoftGallery_LoadMore').hide(500);
		setTimeout(function(){
			jQuery('#TotalSoftGallery_Video_PerPage').show(500);
		},500)
	}
	else
	{
		jQuery('#TotalSoftGallery_Video_PerPage').show(500);
		jQuery('#TotalSoftGallery_LoadMore').show(500);
	}	
}
function TotalSoftGallery_Video_URL_Clicked()
{
	var nIntervId = setInterval(function(){
		var code = jQuery('#TotalSoftGallery_Video_URL_1').val();		

		if(code.indexOf('https://www.youtube.com/')>0)
		{
			var TotalSoftCodes1 = code.split('<a href="https://www.youtube.com/');
			var TotalSoftGallery_Video_Video = code.split('<a href="')[1].split('">')[0]; 
			jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftGallery_Video_Video); 
			if(code.indexOf('list')>0 || code.indexOf('index')>0)
			{
				var TotalSoftCodes2= TotalSoftCodes1[1].split("=");
				var TotalSoftCodeSrc = TotalSoftCodes2[1].split('&');

				jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/'+TotalSoftCodeSrc[0]);
				jQuery('#TotalSoftGallery_VideoIm_URL_2').val('http://img.youtube.com/vi/'+TotalSoftCodeSrc[0]+'/mqdefault.jpg');
				if(jQuery('#TotalSoftGallery_Video_URL_2').val().length>0){
					clearInterval(nIntervId);
				}				
			}
			else if(code.indexOf('embed')>0)
			{
				var TotalSoftCodes1=code.split('[embed]');
				var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
				if(TotalSoftCodes2[0].indexOf('watch?')>0)
				{
					var TotalSoftCodes3=TotalSoftCodes2[0].split('=');
					
					jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/'+TotalSoftCodes3[1]);
					jQuery('#TotalSoftGallery_VideoIm_URL_2').val('http://img.youtube.com/vi/'+TotalSoftCodes3[1]+'/mqdefault.jpg');
					if(jQuery('#TotalSoftGallery_Video_URL_2').val().length>0){
						clearInterval(nIntervId);
					}	
				}
				else
				{
					var TotalSoftCodeSrc=TotalSoftCodes2[0];
					var TotalSoftImsrc=TotalSoftCodeSrc.split('embed/');

					jQuery('#TotalSoftGallery_Video_URL_2').val(TotalSoftCodeSrc);
					jQuery('#TotalSoftGallery_VideoIm_URL_2').val('http://img.youtube.com/vi/'+TotalSoftImsrc[1]+'/mqdefault.jpg');
					if(jQuery('#TotalSoftGallery_Video_URL_2').val().length>0){
						clearInterval(nIntervId);
					}	
				}
			}
			else
			{
				var TotalSoftCodes2= TotalSoftCodes1[1].split('=');
				var TotalSoftCodeSrc = TotalSoftCodes2[1].split('">https://');

				jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/'+TotalSoftCodeSrc[0]);
				jQuery('#TotalSoftGallery_VideoIm_URL_2').val('http://img.youtube.com/vi/'+TotalSoftCodeSrc[0]+'/mqdefault.jpg');
				if(jQuery('#TotalSoftGallery_Video_URL_2').val().length>0){
					clearInterval(nIntervId);
				}				
			}	
		}
		else if(code.indexOf('https://youtu.be/')>0)
		{
			var TotalSoftCodes1 = code.split('<a href="https://youtu.be/'); 
			var TotalSoftCodeSrc = TotalSoftCodes1[1].split('">https://');

			jQuery('#TotalSoftGallery_Video_URL_2').val('https://www.youtube.com/embed/'+TotalSoftCodeSrc[0]);
			jQuery('#TotalSoftGallery_VideoIm_URL_2').val('http://img.youtube.com/vi/'+TotalSoftCodeSrc[0]+'/mqdefault.jpg');
			jQuery('#TotalSoftGallery_Video_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodeSrc[0]);			

			if(jQuery('#TotalSoftGallery_Video_URL_2').val().length>0){
				clearInterval(nIntervId);
			}				
		}
	},100)	
}
function Total_Soft_Gallery_Video_Res_Vid()
{
	jQuery('#TotalSoftGallery_Video_Title').val('');
	jQuery('#TotalSoftGallery_Video_URL_1').val('');
	jQuery('#TotalSoftGallery_Video_Video_1').val('');
	jQuery('#TotalSoftGallery_Video_URL_2').val('');
	jQuery('#TotalSoftGallery_VideoIm_URL_2').val('');

	jQuery('#TotalSoftGallery_Video_Desc').val('');
	jQuery('#TotalSoftGallery_Video_Link').val('');
	jQuery('#TotalSoftGallery_Video_ONT').attr('checked',true);
	jQuery('#Total_Soft_Gallery_Video_Upd').hide(500);
	jQuery('#Total_Soft_Gallery_Video_Sav').show(500);
}
function Total_Soft_Gallery_Video_Save_Vid()
{
	var TotalSoftGVHidNum=jQuery('#TotalSoftGVHidNum').val();
	var TotalSoftGallery_Video_Title=jQuery('#TotalSoftGallery_Video_Title').val();
	var TotalSoftGallery_Video_URL_2=jQuery('#TotalSoftGallery_Video_URL_2').val();
	var TotalSoftGallery_Video_Video_1=jQuery('#TotalSoftGallery_Video_Video_1').val();
	var TotalSoftGallery_VideoIm_URL_2=jQuery('#TotalSoftGallery_VideoIm_URL_2').val();
	var TotalSoftGallery_Video_Desc=jQuery('#TotalSoftGallery_Video_Desc').val();
	var TotalSoftGallery_Video_Link=jQuery('#TotalSoftGallery_Video_Link').val();
	var TotalSoftGallery_Video_ONT=jQuery('#TotalSoftGallery_Video_ONT').attr('checked');
	if(TotalSoftGallery_Video_ONT=='checked')
	{ TotalSoftGallery_Video_ONT='true'; }
	else
	{ TotalSoftGallery_Video_ONT='false'; }

	if(TotalSoftGVHidNum=='0')
	{
		jQuery('#TotalSoftGallery_VideoUl').html('<li id="TotalSoftGallery_VideoLi_1"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2"><tr><td>1</td><td><input type="text" readonly value="'+TotalSoftGallery_Video_Title+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VT_1" name="TotalSoftGallery_Video_VT_1"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_1" name="TotalSoftGallery_Video_VDesc_1" value="'+TotalSoftGallery_Video_Desc+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_1" name="TotalSoftGallery_Video_VLink_1" value="'+TotalSoftGallery_Video_Link+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_1" name="TotalSoftGallery_Video_RVideo_1" value="'+TotalSoftGallery_Video_Video_1+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_1" name="TotalSoftGallery_Video_VONT_1" value="'+TotalSoftGallery_Video_ONT+'"></td><td><input type="text" readonly value="'+TotalSoftGallery_Video_URL_2+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VURL_1" name="TotalSoftGallery_Video_VURL_1"></td><td><img class="TotalSoftGallery_VideoImage" src="'+TotalSoftGallery_VideoIm_URL_2+'"><input type="text" readonly value="'+TotalSoftGallery_VideoIm_URL_2+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftGallery_Video_IURL_1" name="TotalSoftGallery_Video_IURL_1"></td><td onclick="TotalSoftGV_Video_Edit(1)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftGV_Video_Del(1)"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>');
	}
	else
	{
		if(TotalSoftGVHidNum%2==1)
		{
			jQuery('<li id="TotalSoftGallery_VideoLi_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable3"><tr><td>'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'</td><td><input type="text" readonly value="'+TotalSoftGallery_Video_Title+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_Desc+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VLink_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_Link+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_Video_1+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VONT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_ONT+'"></td><td><input type="text" readonly value="'+TotalSoftGallery_Video_URL_2+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"></td><td><img class="TotalSoftGallery_VideoImage" src="'+TotalSoftGallery_VideoIm_URL_2+'"><input type="text" readonly value="'+TotalSoftGallery_VideoIm_URL_2+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftGallery_Video_IURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_IURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"></td><td onclick="TotalSoftGV_Video_Edit('+parseInt(parseInt(TotalSoftGVHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftGV_Video_Del('+parseInt(parseInt(TotalSoftGVHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child('+TotalSoftGVHidNum+')');
		}
		else
		{
			jQuery('<li id="TotalSoftGallery_VideoLi_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2"><tr><td>'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'</td><td><input type="text" readonly value="'+TotalSoftGallery_Video_Title+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_Desc+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VLink_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_Link+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_Video_1+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VONT_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" value="'+TotalSoftGallery_Video_ONT+'"></td><td><input type="text" readonly value="'+TotalSoftGallery_Video_URL_2+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_VURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"></td><td><img class="TotalSoftGallery_VideoImage" src="'+TotalSoftGallery_VideoIm_URL_2+'"><input type="text" readonly value="'+TotalSoftGallery_VideoIm_URL_2+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftGallery_Video_IURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'" name="TotalSoftGallery_Video_IURL_'+parseInt(parseInt(TotalSoftGVHidNum)+1)+'"></td><td onclick="TotalSoftGV_Video_Edit('+parseInt(parseInt(TotalSoftGVHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftGV_Video_Del('+parseInt(parseInt(TotalSoftGVHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child('+TotalSoftGVHidNum+')');
		}
	}
	jQuery('#TotalSoftGVHidNum').val(parseInt(parseInt(TotalSoftGVHidNum)+1));
	
	Total_Soft_Gallery_Video_Res_Vid();
}
function TotalSoftGV_Video_Edit(TotalSoftGV_Video_Li_ID)
{
	var TotalSoftGallery_Video_VT    =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.Total_Soft_Select').val();
	var TotalSoftGallery_Video_VDesc =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Desc').val();
	var TotalSoftGallery_Video_VLink =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Link').val();
	var TotalSoftGallery_Video_VONT  =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_ONT').val();
	var TotalSoftGallery_Video_VURL  =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.Total_Soft_Select').val();
	var TotalSoftGallery_Video_IURL  =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.Total_Soft_Select').val();
	var TotalSoftGallery_Video_Video =jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Video').val();

	jQuery('#TotalSoftGVHidUpdate').val(TotalSoftGV_Video_Li_ID);
	jQuery('#Total_Soft_Gallery_Video_Sav').hide(500);
	jQuery('#Total_Soft_Gallery_Video_Upd').show(500);

	jQuery('#TotalSoftGallery_Video_Title').val(TotalSoftGallery_Video_VT);
	jQuery('#TotalSoftGallery_Video_URL_2').val(TotalSoftGallery_Video_VURL);
	jQuery('#TotalSoftGallery_Video_Video_1').val(TotalSoftGallery_Video_Video);
	jQuery('#TotalSoftGallery_VideoIm_URL_2').val(TotalSoftGallery_Video_IURL);
	jQuery('#TotalSoftGallery_Video_Desc').val(TotalSoftGallery_Video_VDesc);	
	jQuery('#TotalSoftGallery_Video_Link').val(TotalSoftGallery_Video_VLink);

	if(TotalSoftGallery_Video_VONT=='true')
	{ jQuery('#TotalSoftGallery_Video_ONT').attr('checked', true); }
	else
	{ jQuery('#TotalSoftGallery_Video_ONT').attr('checked', false); }
}
function TotalSoftGV_Video_Del(TotalSoftGV_Video_Li_ID)
{
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).remove();
	jQuery('#TotalSoftGVHidNum').val(jQuery('#TotalSoftGVHidNum').val()-1);

	jQuery("#TotalSoftGallery_VideoUl > li").each(function(){
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('id','TotalSoftGallery_Video_VT_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('name','TotalSoftGallery_Video_VT_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Desc').attr('id','TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Desc').attr('name','TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Link').attr('id','TotalSoftGallery_Video_VLink_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Link').attr('name','TotalSoftGallery_Video_VLink_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Video').attr('id','TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Video').attr('name','TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_ONT').attr('id','TotalSoftGallery_Video_VONT_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_ONT').attr('name','TotalSoftGallery_Video_VONT_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('id','TotalSoftGallery_Video_VURL_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('name','TotalSoftGallery_Video_VURL_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('id','TotalSoftGallery_Video_IURL_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('name','TotalSoftGallery_Video_IURL_'+parseInt(parseInt(jQuery(this).index())+1));
	});  
}
function TotalSoftGallery_VideoUlSort()
{
	jQuery('#TotalSoftGallery_VideoUl').sortable({
	  	update: function() {
	    	jQuery("#TotalSoftGallery_VideoUl > li").each(function(){
	    		jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('id','TotalSoftGallery_Video_VT_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('name','TotalSoftGallery_Video_VT_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Desc').attr('id','TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Desc').attr('name','TotalSoftGallery_Video_VDesc_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Link').attr('id','TotalSoftGallery_Video_VLink_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Link').attr('name','TotalSoftGallery_Video_VLink_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Video').attr('id','TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Video').attr('name','TotalSoftGallery_Video_RVideo_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_ONT').attr('id','TotalSoftGallery_Video_VONT_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_ONT').attr('name','TotalSoftGallery_Video_VONT_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('id','TotalSoftGallery_Video_VURL_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('name','TotalSoftGallery_Video_VURL_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('id','TotalSoftGallery_Video_IURL_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('name','TotalSoftGallery_Video_IURL_'+parseInt(parseInt(jQuery(this).index())+1));
			});         
	   	}
    });	
}
function Total_Soft_Gallery_Video_Update_Vid()
{
	var TotalSoftGV_Video_Li_ID=jQuery('#TotalSoftGVHidUpdate').val();

	var TotalSoftGallery_Video_Title=jQuery('#TotalSoftGallery_Video_Title').val();
	var TotalSoftGallery_Video_URL_2=jQuery('#TotalSoftGallery_Video_URL_2').val();
	var TotalSoftGallery_Video_Video_1=jQuery('#TotalSoftGallery_Video_Video_1').val();
	var TotalSoftGallery_VideoIm_URL_2=jQuery('#TotalSoftGallery_VideoIm_URL_2').val();
	var TotalSoftGallery_Video_Desc=jQuery('#TotalSoftGallery_Video_Desc').val();
	var TotalSoftGallery_Video_Link=jQuery('#TotalSoftGallery_Video_Link').val();
	var TotalSoftGallery_Video_ONT=jQuery('#TotalSoftGallery_Video_ONT').attr('checked');
	if(TotalSoftGallery_Video_ONT=='checked')
	{ TotalSoftGallery_Video_ONT='true'; }
	else
	{ TotalSoftGallery_Video_ONT='false'; }

	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.Total_Soft_Select').val(TotalSoftGallery_Video_Title);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Video').val(TotalSoftGallery_Video_Video_1);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Desc').val(TotalSoftGallery_Video_Desc);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_Link').val(TotalSoftGallery_Video_Link);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(2)').find('.TotalSoftGallery_Video_ONT').val(TotalSoftGallery_Video_ONT);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(3)').find('.Total_Soft_Select').val(TotalSoftGallery_Video_URL_2);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.Total_Soft_Select').val(TotalSoftGallery_VideoIm_URL_2);
	jQuery('#TotalSoftGallery_VideoLi_'+TotalSoftGV_Video_Li_ID).find('.Total_Soft_AMVideoTable1 td:nth-child(4)').find('.TotalSoftGallery_VideoImage').attr('src',TotalSoftGallery_VideoIm_URL_2);

	jQuery('#Total_Soft_Gallery_Video_Upd').hide(500);
	jQuery('#Total_Soft_Gallery_Video_Sav').show(500);

	Total_Soft_Gallery_Video_Res_Vid();
}
function TotalSoftGallery_Video_Del(Gallery_Video_ID)
{
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftGallery_Video_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		location.reload();
	})
}
function TotalSoftGallery_Video_Edit(Gallery_Video_ID)
{
	jQuery('.Total_Soft_Gallery_Video_AMD2').hide(500);
	jQuery('.Total_Soft_Gallery_VideoAMMTable').hide(500);
	jQuery('.Total_Soft_Gallery_VideoAMOTable').hide(500);
	jQuery('.Total_Soft_Gallery_Video_Save').hide(500);
	jQuery('.Total_Soft_Gallery_Video_Update').show(500);
	jQuery('.Total_Soft_Gallery_Video_ID').html('[Total_Soft_Gallery_Video id="'+Gallery_Video_ID+'"]');
	jQuery('.Total_Soft_Gallery_Video_TID').html('<?php echo do_shortcode("[Total_Soft_Gallery_Video id="'+Gallery_Video_ID+'"]");?>');
	
	jQuery('#Total_SoftGallery_Video_Update').val(Gallery_Video_ID);
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftGallery_Video_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var b=Array();
		var a=response.split('=>');
		for(var i=3;i<a.length;i++)
		{ b[b.length]=a[i].split('[')[0].trim(); }
		b[b.length-1]=b[b.length-1].split(')')[0].trim();

		jQuery('#TotalSoftGallery_Video_Gallery_Title').val(b[0]); 
		jQuery('#TotalSoftGallery_Video_Option').val(b[1]); 
		jQuery('#TotalSoftGallery_Video_ShowType').val(b[2]); 
		jQuery('#TotalSoftGallery_Video_PerPage').val(b[3]);
		jQuery('#TotalSoftGallery_LoadMore').val(b[4]);

		TotalSoftGallery_Video_Show();
	})

	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftGallery_Video_Edit_Videos', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Gallery_Video_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var TotalSoftGallery_Video_VT=Array();
		var TotalSoftGallery_Video_VDesc=Array();
		var TotalSoftGallery_Video_VLink=Array();
		var TotalSoftGallery_Video_VONT=Array();
		var TotalSoftGallery_Video_VURL=Array();
		var TotalSoftGallery_Video_IURL=Array();
		var TotalSoftGallery_Video_Video_1=Array();

		var a=response.split('stdClass Object');
		for(i=1;i<a.length;i++)
		{
			var c=a[i].split('=>');
			TotalSoftGallery_Video_VT[TotalSoftGallery_Video_VT.length]=c[2].split('[')[0].trim();
			TotalSoftGallery_Video_VDesc[TotalSoftGallery_Video_VDesc.length]=c[3].split('[')[0].trim();
			TotalSoftGallery_Video_VLink[TotalSoftGallery_Video_VLink.length]=c[4].split('[')[0].trim();
			TotalSoftGallery_Video_VONT[TotalSoftGallery_Video_VONT.length]=c[5].split('[')[0].trim();
			TotalSoftGallery_Video_VURL[TotalSoftGallery_Video_VURL.length]=c[6].split('[')[0].trim();
			TotalSoftGallery_Video_IURL[TotalSoftGallery_Video_IURL.length]=c[7].split('[')[0].trim();
			TotalSoftGallery_Video_Video_1[TotalSoftGallery_Video_Video_1.length]=c[8].split('[')[0].trim();
		}
		for(i=1;i<=TotalSoftGallery_Video_VT.length;i++)
		{	
			if(i==1)
			{
				jQuery('#TotalSoftGallery_VideoUl').html('<li id="TotalSoftGallery_VideoLi_1"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2"><tr><td>1</td><td><input type="text" readonly value="'+TotalSoftGallery_Video_VT[0]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VT_1" name="TotalSoftGallery_Video_VT_1"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_1" name="TotalSoftGallery_Video_VDesc_1" value="'+TotalSoftGallery_Video_VDesc[0]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_1" name="TotalSoftGallery_Video_VLink_1" value="'+TotalSoftGallery_Video_VLink[0]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_1" name="TotalSoftGallery_Video_RVideo_1" value="'+TotalSoftGallery_Video_Video_1[0]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_1" name="TotalSoftGallery_Video_VONT_1" value="'+TotalSoftGallery_Video_VONT[0]+'"></td><td><input type="text" readonly value="'+TotalSoftGallery_Video_VURL[0]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VURL_1" name="TotalSoftGallery_Video_VURL_1"></td><td><img class="TotalSoftGallery_VideoImage" src="'+TotalSoftGallery_Video_IURL[0]+'"><input type="text" readonly value="'+TotalSoftGallery_Video_IURL[0]+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftGallery_Video_IURL_1" name="TotalSoftGallery_Video_IURL_1"></td><td onclick="TotalSoftGV_Video_Edit(1)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftGV_Video_Del(1)"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>');
			}
			else
			{
				if(i%2==0)
				{
					jQuery('<li id="TotalSoftGallery_VideoLi_'+i+'"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable3"><tr><td>'+i+'</td><td><input type="text" readonly value="'+TotalSoftGallery_Video_VT[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VT_'+i+'" name="TotalSoftGallery_Video_VT_'+i+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_'+i+'" name="TotalSoftGallery_Video_VDesc_'+i+'" value="'+TotalSoftGallery_Video_VDesc[i-1]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_'+i+'" name="TotalSoftGallery_Video_VLink_'+i+'" value="'+TotalSoftGallery_Video_VLink[i-1]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_'+i+'" name="TotalSoftGallery_Video_RVideo_'+i+'" value="'+TotalSoftGallery_Video_Video_1[i-1]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_'+i+'" name="TotalSoftGallery_Video_VONT_'+i+'" value="'+TotalSoftGallery_Video_VONT[i-1]+'"></td><td><input type="text" readonly value="'+TotalSoftGallery_Video_VURL[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VURL_'+i+'" name="TotalSoftGallery_Video_VURL_'+i+'"></td><td><img class="TotalSoftGallery_VideoImage" src="'+TotalSoftGallery_Video_IURL[i-1]+'"><input type="text" readonly value="'+TotalSoftGallery_Video_IURL[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftGallery_Video_IURL_'+i+'" name="TotalSoftGallery_Video_IURL_'+i+'"></td><td onclick="TotalSoftGV_Video_Edit('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftGV_Video_Del('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child('+parseInt(parseInt(i)-1)+')');
				}
				else
				{
					jQuery('<li id="TotalSoftGallery_VideoLi_'+i+'"><table class="Total_Soft_AMVideoTable1 Total_Soft_AMVideoTable2"><tr><td>'+i+'</td><td><input type="text" readonly value="'+TotalSoftGallery_Video_VT[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VT_'+i+'" name="TotalSoftGallery_Video_VT_'+i+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Desc" id="TotalSoftGallery_Video_VDesc_'+i+'" name="TotalSoftGallery_Video_VDesc_'+i+'" value="'+TotalSoftGallery_Video_VDesc[i-1]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Link" id="TotalSoftGallery_Video_VLink_'+i+'" name="TotalSoftGallery_Video_VLink_'+i+'" value="'+TotalSoftGallery_Video_VLink[i-1]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_Video" id="TotalSoftGallery_Video_RVideo_'+i+'" name="TotalSoftGallery_Video_RVideo_'+i+'" value="'+TotalSoftGallery_Video_Video_1[i-1]+'"><input type="text" style="display:none;" class="TotalSoftGallery_Video_ONT" id="TotalSoftGallery_Video_VONT_'+i+'" name="TotalSoftGallery_Video_VONT_'+i+'" value="'+TotalSoftGallery_Video_VONT[i-1]+'"></td><td><input type="text" readonly value="'+TotalSoftGallery_Video_VURL[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftGallery_Video_VURL_'+i+'" name="TotalSoftGallery_Video_VURL_'+i+'"></td><td><img class="TotalSoftGallery_VideoImage" src="'+TotalSoftGallery_Video_IURL[i-1]+'"><input type="text" readonly value="'+TotalSoftGallery_Video_IURL[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftGallery_Video_IURL_'+i+'" name="TotalSoftGallery_Video_IURL_'+i+'"></td><td onclick="TotalSoftGV_Video_Edit('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftGV_Video_Del('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftGallery_VideoUl li:nth-child('+parseInt(parseInt(i)-1)+')');
				}
			}
		}
		jQuery('#TotalSoftGVHidNum').val(TotalSoftGallery_Video_VT.length);
	})
	setTimeout(function(){
		jQuery('.Total_Soft_Gallery_Video_AMD3').show(500);
		jQuery('.Total_Soft_AMTable').show(500);
		jQuery('.Total_Soft_AMVideoTable').show(500);
		jQuery('.Total_Soft_AMVideoTable1').show(500);
		jQuery('.Total_Soft_GV_AMShortTable').show(500);
	},500)
}
function TotalSoftGalleryV_Edit_Option(Gallery_Video_OptID)
{
	jQuery('.Total_Soft_AMMTable').hide(500);
	jQuery('.Total_Soft_AMOTable').hide(500);
	jQuery('.TotalSoftGalleryVideoFree').hide(500);
	setTimeout(function(){
		jQuery('.Total_Soft_Gallery_Video_AMD3').show(500);
		jQuery('#TotalSoftGalleryVideoFree_'+Gallery_Video_OptID).show(500);
	},500);

}