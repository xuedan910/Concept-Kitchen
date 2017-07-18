<?php
/*
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */
?>
<?php get_header(); ?>
<!--<div class="spacer"></div>-->

<div style="width:950px;margin:0 auto;margin-top:-50px;padding:10px;text-align:center;">
	

		<div style="padding-top:10px;display:inline-block;background-color:white;width:747px;padding-left:10px;padding-right:10px;">
			<div style="width:745px;float:left;">
				
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				     <!--<h2><?php the_title(); ?></h2>-->
				    
				     <div class="entry" style="height:420px;text-align:center;">
				       <?php the_content(); ?>
				     </div>

				     
				 </div> <!--post -->
			
			
			 <?php endwhile;?>
			 <?php endif; ?>
			<div style="width:728px;background-color:white;">
				<div style="width:150px;margin-right:38px;display:inline-block;">
					<img style="width:100%;" src="/conceptkitchen/wp-content/uploads/2017/01/support.png">
					<h4 style="color:#e3532b;">Support</h4>
					<p style="color:black;font-size:14px;">text of the printing and typesetting industry.</p>
				</div>
				<div style="width:150px;margin-right:39px;display:inline-block;">
					<img style="width:100%;" src="/conceptkitchen/wp-content/uploads/2017/01/kitchen.png">
					<h4 style="color:#e3532b;">Kitchentrend</h4>
					<p style="color:black;font-size:14px;">text of the printing and typesetting industry.</p>
				</div>
				<div style="width:150px;margin-right:39px;display:inline-block;">
					<img style="width:100%;" src="/conceptkitchen/wp-content/uploads/2017/01/contact.png">
					<h4 style="color:#e3532b;">Contact us</h4>
					<p style="color:black;font-size:14px;">text of the printing and typesetting industry.</p>
				</div>
				<div style="display:inline-block;width:150px;">
					<img style="width:100%;" src="/conceptkitchen/wp-content/uploads/2017/01/about.png">
					<h4 style="color:#e3532b;">About us</h4>
					<p style="color:black;font-size:14px;">text of the printing and typesetting industry.</p>
				</div>
			</div>
			<!-- <div style="width:728px;background-color:white;margin-top:40px;">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
				<img src="/conceptkitchen/wp-content/uploads/2017/01/uncertain.png">
			</div> -->
			<div style="margin-top:40px;margin-left:-10px;">
				<?php do_action('slideshow_deploy', '230'); ?>
			</div>
			<div style="width:728px;height:1px;background-color:lightgray;margin-top:40px;"></div>
			<p style="margin-top:20px;float:left;">
				<a style="color:black;" href="#">Shipping Costs</a>&nbsp&nbsp&nbsp&nbsp
				<a style="color:black; href="#">Return Policy</a>&nbsp&nbsp&nbsp&nbsp
				<a style="color:black; href="#">Customer Center</a>&nbsp&nbsp&nbsp&nbsp
				<a style="color:black; href="#">Private Policy</a>&nbsp&nbsp&nbsp&nbsp
				<a style="color:black; href="#">Terms&Conditions</a>
			</p>
			<div style="clear:both;"></div>
			

			</div><!--content-->
			
		</div>

		<div style="display:inline-block;width:183px;float:right;margin-top:50px;padding-left:10px;">
			<div class="sidebar">
				
				<?php get_sidebar(); ?>

			</div><!--sidebar-->
		</div>
		
	
</div>

<?php get_footer(); ?>