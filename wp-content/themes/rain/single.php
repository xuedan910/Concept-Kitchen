<?php

the_post();
$cat = get_the_category($post->ID);
get_template_part('test',$cat[0]->slug);

?>