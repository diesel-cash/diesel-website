<?php while (have_posts()) : the_post(); 
	// get Header Title
	if (is_front_page()) {
		
	}else{
		get_template_part('templates/page', 'header');
	}

  	get_template_part('templates/content', 'page');	
	endwhile; 	
?>