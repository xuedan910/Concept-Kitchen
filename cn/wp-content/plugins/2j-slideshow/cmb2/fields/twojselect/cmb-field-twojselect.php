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

function twoj_twojselect_get_options( $options, $value = false, $content=array() ) {
    $state_options = '';
    foreach ( $options as $abrev => $state ) {
        $state_options .= 
       	'<option '
        	.'value="'. $abrev .'" '
        	.(isset($content[$abrev])?' data-content="'.$state.' '.str_replace('"', "'", $content[$abrev]).'"':'')
        	.($value==$abrev?' selected="selected"':'') 
        .'>'. $state .'</option>';
    }
    return $state_options;
}

function jt_cmb2_render_twojselect_field_callback( $field, $value, $object_id, $object_type, $field_type_object ){
	$value =  $value?$value:$field->args('default');
	$level = $field->args('level')?1:0;
	?>
	<div class="form-horizontal">
		<div class="form-group">
	    	<label class="col-sm-2 control-label" for="<?php echo $field_type_object->_id(); ?>"><?php echo esc_html( $field->args( 'name' ) ); ?></label>
		    <div class="col-sm-<?php echo $level?'8 twoj_disabled':'10'; ?>">
		      <?php
		      	echo $field_type_object->select(array(
					'name'  		=> $field_type_object->_name(),
					'id'    		=> $field_type_object->_id(),
					'class'   		=> 'twoj_select'.(count($field->args('depends'))?' twoj_action_element_select':''),
					'options' 		=> twoj_twojselect_get_options( $field->args('options'),  $value, $field->args('content') ),
					'data-depends'	=> count($field->args('depends')) ? 1 : 0 ,
					'desc'    		=> $field_type_object->_desc( true ),
				));

				if( count($field->args('depends')) ){
				?>
				<script type="text/javascript">
					var  <?php echo $field_type_object->_id(); ?>_depends = <?php echo json_encode($field->args('depends')); ?>;
				</script>
				<?php } ?>
		    </div>
		    <?php if($level){ ?>
		    	<div class="col-sm-2 twoj-block-premium"><?php echo TWOJ_SLIDESHOW_LABEL_PRO; ?></div>
		    <?php } ?>
	  	</div>
	</div>
<?php
}
add_filter( 'cmb2_render_twojselect', 'jt_cmb2_render_twojselect_field_callback', 10, 5 );