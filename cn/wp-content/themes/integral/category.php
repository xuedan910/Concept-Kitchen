<?php
/**
 * Category Page for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php get_header(); ?>
<div style="width:950px;margin:0 auto;margin-top:-50px;padding:10px;text-align:center;">
	<div style="padding-top:10px;display:inline-block;background-color:white;width:747px;padding-left:10px;padding-right:10px;">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
		<article style="width:240px;display:inline-block;float:left;padding:0 30px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div style="text-align:left;">
				<?php if(get_the_post_thumbnail()) { ?>

					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('integral-post-thumbnails',array('class'=>'img-responsive')); ?></a>
				<?php } ?>
				<h5 style="color:#e3532b;font-weight:bold;"><?php the_title_attribute(); ?></h5>
				<div style="margin:0 auto;"><?php the_excerpt(); ?></div>
			</div>
		    <!-- <?php if(get_the_post_thumbnail()) { ?><figure class="post-image"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('integral-post-thumbnails',array('class'=>'img-responsive')); ?></a></figure><?php } ?>
            <div class="clearfix"></div>
		    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> -->
            
            
		    <div class="clearfix"></div>
		 </article> <!--post -->
		
		 
		 <?php endwhile;?>
		 <?php endif; ?>

		 <!-- <div style="width:728px;height:1px;background-color:lightgray;margin-top:40px;"></div> -->
		 
		<div style="margin-top:120px;float:left;width:100%;border-top:1px solid lightgrey;height:30px;text-align:left;">
			<!-- <hr style="color:grey;height:2px;width:100%;"> -->
			<a style="color:black;" href="#">Shipping Costs</a>&nbsp&nbsp&nbsp&nbsp
			<a style="color:black; href="#">Return Policy</a>&nbsp&nbsp&nbsp&nbsp
			<a style="color:black; href="#">Customer Center</a>&nbsp&nbsp&nbsp&nbsp
			<a style="color:black; href="#">Private Policy</a>&nbsp&nbsp&nbsp&nbsp
			<a style="color:black; href="#">Terms&Conditions</a>
		</div>
		<div style="clear:both;"></div>
		
	</div>
	<div style="display:inline-block;width:183px;float:right;margin-top:50px;padding-left:10px;">
		<div class="sidebar">
			
			<?php get_sidebar(); ?>

		</div><!--sidebar-->
	</div>
	<div style="background-color:#F8F4E9;margin-left:-10px;padding-top:10px;width:747px;">
		<p style="margin:0px;">Copyright &copy Concept Kitchen 2016@3A IT Solutions</p>
	</div>
</div>

<?php get_footer(); ?>