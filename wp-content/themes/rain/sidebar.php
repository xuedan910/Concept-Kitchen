<?php
	if(is_dynamic_sidebar()){
		dynamic_sidebar();
	}else{
		wp_list_cats();
	}
?>