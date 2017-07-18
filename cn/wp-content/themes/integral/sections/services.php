<?php
/**
 * Services Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>

<!--剪切自class='row'里面
            <div class="col-md-12 heading">
                <?php if ($integral['services-title-icon']) { ?><i class="fa <?php echo $integral['services-title-icon']; ?>"></i><?php } ?>
                <?php if ($integral['services-title']) { ?><h2 class="bigtitle_dark"><span><?php echo $integral['services-title']; ?></span></h2><?php } ?>
                <?php if ($integral['services-subtitle']) { ?><p class="subtitle" style="color:black;font-weight:bold;"><?php echo $integral['services-subtitle']; ?></p><?php } ?>
            </div>
-->

<?php global $integral; ?>
<?php if($integral['services-section-toggle']==1) { ?>
<section id="services" style="background-color:white;" class="services dark <?php echo $integral['services-custom-class']; ?>">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<?php
                    $my_id = $integral['services-text'];
                    $post_id = get_post($my_id);
                    $content = $post_id->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                ?>
			</div>
        </div>
        <?php if ( is_active_sidebar( 'service-widgets' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'service-widgets' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--services-->
<?php } ?>