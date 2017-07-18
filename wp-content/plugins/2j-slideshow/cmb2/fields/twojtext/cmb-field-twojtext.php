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

function jt_cmb2_twojtext_field( $metakey, $post_id = 0 ) {
	echo jt_cmb2_get_twojtext_field( $metakey, $post_id );
}

function jt_cmb2_render_twojtext_field_callback( $field, $value, $object_id, $object_type, $field_type_object ) {
	
//$value =  $value ? $value : $field->args('default') ;
$level = $field->args('level')?1:0;
?>
<div class="form-horizontal">
	<div class="form-group">
	    <label class="col-sm-2 control-label" for="<?php echo $field_type_object->_id(); ?>"><?php echo esc_html(  $field->args('name') ); ?></label>
	    <div class="<?php echo $field->args('small')?'col-sm-4':'col-sm-8'; echo ($level?' twoj_disabled':'') ?>">
		    <?php echo $field_type_object->input( array(
				'name'  		=> $field_type_object->_name( ),
				'id'    		=> $field_type_object->_id( ),
				'value' 		=> $value,
				'data-default' 	=> $field->args('data-default'),
				'data-alpha' 	=> $field->args('data-alpha'),
				'data-css-style'=> $field->args('data-css-style'),
				'data-demo-class'=> $field->args('data-demo-class'),
				'data-demo-id'	=> $field->args('data-demo-id'),
				'class' 		=> 'form-control '.$field->args('class') ,
			)); 
			?> 
	    </div>
	    <?php if($level){ ?>
		    <div class="col-sm-<?php echo $field->args('small')?'6':'2'; ?> twoj-block-premium">
		    	<?php echo TWOJ_SLIDESHOW_LABEL_PRO; ?>
		    </div>
		<?php } ?>
	</div>
</div>
<?php
}
add_filter( 'cmb2_render_twojtext', 'jt_cmb2_render_twojtext_field_callback', 10, 5 );