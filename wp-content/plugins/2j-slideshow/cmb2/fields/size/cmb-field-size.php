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

function twoj_size_get_source_row( $value,  $text, $name, $curent = '', $icon = '' ) {
	$html = '';
	$html .= '<label class="btn '.($value==$curent? 'btn-info active' : 'btn-default').'">';
	 	$html .= '<input type="radio" name="'.$name.'" '.($value==$curent?'checked':'').' value="'.$value.'"> ';
	 	$html .= $text ;
	 	if($icon) $html .= ' <i class="'.$icon.'"></i>';
	 	
	$html .= '</label>';
	return $html;
}


function jt_cmb2_render_size_field_callback( $field, $value, $object_id, $object_type, $field_type_object ) {

	$value = wp_parse_args( $value, array(
		'height'	=> 60,
		'width' 	=> 120,
		'source' 	=> 'medium',
	) );

	$level = $field->args('level')?1:0;
?>
<div class="form-horizontal">

	<div class="form-group"> 
	    <label class="col-sm-2 control-label" for="<?php echo $field_type_object->_id( '_width' ); ?>'"><?php echo esc_html( $field_type_object->_text( 'size_width_text', 'Res. Width' ) ); ?></label>
	    <div class="col-sm-10">
			<?php echo $field_type_object->input( array(
				'name'  => $field_type_object->_name( '[width]' ),
				'id'    => $field_type_object->_id( '_width' ),
				'value' => (int) $value['width'],
				'data-slider-value' => (int) $value['width'],
				'type'  => 'text',
				'class' => 'small-text twoj_slider',
				'data-slider-min'=>20,
				'data-slider-max'=>500,
				'data-slider-step'=>1
			) ); ?> px
		</div>
	</div>

	<div class="form-group">
    	<label class="col-sm-2 control-label" for="<?php echo $field_type_object->_id( '_height' ); ?>'"><?php echo esc_html( $field_type_object->_text( 'size_height_text', 'Res. Height' ) ); ?></label>
	    <div class="col-sm-10">
			<?php echo $field_type_object->input( array(
				'name'  => $field_type_object->_name( '[height]' ),
				'id'    => $field_type_object->_id( '_height' ),
				'value' => (int) $value['height'],
				'data-slider-value' => (int) $value['height'],
				'type'  => 'text',
				'class' => 'small-text twoj_slider',
				'data-slider-min'=>20,
				'data-slider-max'=>500,
				'data-slider-step'=>1
			) ); ?> px
 		</div>
  	</div>

  	<div class="form-group">
    	<label class="col-sm-2 control-label" for="<?php echo $field_type_object->_id( '_source' ); ?>'">
    		<?php echo esc_html( $field_type_object->_text( 'size_source_text', 'Source' ) ); ?>
    	</label>
	    <div class="col-sm-<?php echo $level?'8':'10'; ?>">
			<div class="btn-group twoj_checkbox<?php echo $level?' twoj_disabled twoj-block-premium':''; ?>" data-toggle="buttons">
			<?php
				echo twoj_size_get_source_row( 'thumbnail',  'Thumbnail',$field_type_object->_name('[source]'), $value['source'] );
				echo twoj_size_get_source_row( 'medium',  	'Medium', 	$field_type_object->_name('[source]'), $value['source'] );
				echo twoj_size_get_source_row( 'large',  	'Large',	$field_type_object->_name('[source]'), $value['source'] );
				echo twoj_size_get_source_row( 'full',  		'Full', 	$field_type_object->_name('[source]'), $value['source'] );
			 ?>
			</div>
	    </div>
	    <?php if($level){ ?>
		   	<div class="col-sm-2 twoj-block-premium"><?php echo TWOJ_SLIDESHOW_LABEL_PRO; ?></div>
		<?php } ?>
  	</div>
	
	
</div>
<?php echo $field_type_object->_desc( true );
}
add_filter( 'cmb2_render_size', 'jt_cmb2_render_size_field_callback', 10, 5 );
