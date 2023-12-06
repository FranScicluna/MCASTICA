<?php get_header(); ?>



<div class="container-fluid p-0 m-0 cardsPad">
	<div class="row p-0 m-0">
		<div class="col-12 p-0 m-0">
			<?php $coursePosts =  new WP_Query('post_type=course');
            if($coursePosts->have_posts()) : while ($coursePosts->have_posts()) : $coursePosts->the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->

				<?php 
					the_title(); 
					endwhile;
					endif;
				?>

          
		</div>	
	</div>
</div>
<?php get_footer(); ?>