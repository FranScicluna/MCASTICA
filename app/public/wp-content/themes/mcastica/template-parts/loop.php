		<div class="col-8">
        <h1><?php echo $args['section_title']; ?></h1>
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->
			
            <?php 
				if(is_page()){
					get_template_part('template-parts/content-page', null,null);	
				}else{
					get_template_part('template-parts/content', null,null);	

				}

				endwhile; 
				the_posts_pagination(array(
					'min_size' => 1, //mid_size decides how many pages are either side on the selected page in the pagination system
					'prev_text' => "Newer",
					'next_text' => "Older"
                ));

				else : echo "<p> Sorry, no posts found. </p>";
				endif; 
			?>
		</div>	
