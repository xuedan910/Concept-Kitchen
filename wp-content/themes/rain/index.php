<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('blogname'); ?></title>
	<link rel="stylesheet" type="text/css" href=<?php bloginfo('stylesheet_url'); ?> >
</head>
<body>
	<p><?php echo get_option('blogdescription','aaa'); ?></p>
	<a href=<?php bloginfo('home'); ?>><?php bloginfo('name'); ?></a>
	<?php
		$visit=get_option('visited');
		update_option('visited',$visit+1);
	?>
	<p>Visited:<?php echo $visit; ?></p>
	<div style="width: 1000px;margin:0 auto;">
		<div style="width:500px;display:inline-block;">
			<div>
				<?php

					if(have_posts()){
						while(have_posts()){
							the_post();
							?>
								<div style='width:500px;border:1px solid lightgrey;margin-top: 10px;box-shadow: 2px 2px grey'>
									<h3><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h3>
									<div><?php the_content(); ?></div>
									<div>
										<?php 
											the_author();
											the_time('Y-m-d H:i:s'); 
											edit_post_link('Edit','|','');
											the_category();
										?>
									</div>
								</div>
							<?php

						}
					}else{
						echo 'No post to display...';
					}
				?>
			</div>
			<div style="width:500px;margin:0 auto;">
				<?php posts_nav_link(); ?>
			</div>
		</div>
		<div style="display:inline-block;">
			<?php get_sidebar(); ?>
		</div>
	</div>
</body>
</html>