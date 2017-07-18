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

class twojSlideshowImages{
	public $id 			= 0;
	public $imgArray	= array();
	public $catArray	= array();

	public $width 		= 0;
	public $height		= 0;
	public $thumbsource = '';
	public $lazyLoad = 1;


	function __construct($attr){
 		if( isset($attr) && (int) $attr ){
			$this->id = (int) $attr;
 		}
 		++$this->lazyLoad;
 	}

 	function setSize( $width , $height, $thumbsource ){
 		$this->width 		= $width;
 		$this->height 		= $height;
 		$this->thumbsource 	= $thumbsource;
 	}

 	function getImages(){
 		if(!$this->id) return false;
 		++$this->lazyLoad;
		$tempImages = get_post_meta( $this->id, TWOJ_SLIDESHOW_PREFIX.'slideshowImages', true );
		for ($i=0; $i < count($tempImages) ; $i++){
			$this->imgArray[] = array( 'id'=> $tempImages[$i], 'catid'=> $this->id );
		}

		for($i=0;$i<count($this->imgArray);$i++){
			$img = $this->imgArray[$i];
			$thumb =  wp_get_attachment_image_src( $img['id'] , $this->thumbsource);
			$this->imgArray[$i]['image'] 	= 	wp_get_attachment_url( $img['id'] );
			$this->imgArray[$i]['thumb'] 	=	(isset($thumb) && count($thumb) ) ? $thumb[0] : '';
			$this->imgArray[$i]['sizeW']  	=	(isset($thumb[1]) && count($thumb)) ? $thumb[1] : $this->width;
			$this->imgArray[$i]['sizeH']  	= 	(isset($thumb[2]) && count($thumb)) ? $thumb[2] : $this->height;
			$this->imgArray[$i]['data'] 	=	get_post($img['id'] );
			$this->imgArray[$i]['link'] 	=	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'gallery_link', true );
			$this->imgArray[$i]['typelink'] = 	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'gallery_type_link', true );
			$this->imgArray[$i]['linkoptions'] = 	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'gallery_link_options', true );
			$this->imgArray[$i]['col'] 		=	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'gallery_col', true );
			$this->imgArray[$i]['style'] 	=	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'style', true );
			$this->imgArray[$i]['opacity'] 	=	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'opacity', true );
			$this->imgArray[$i]['padding'] 	=	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'padding', true );
			$this->imgArray[$i]['position'] =	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'position', true );
			$this->imgArray[$i]['size'] 	=	get_post_meta( $img['id'], TWOJ_SLIDESHOW_PREFIX.'size', true );
		}	
 	}
}