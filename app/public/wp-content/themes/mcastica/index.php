<?php get_header(); ?>

<!-- <h1>Index</h1> -->

<!-- The Loop -->

<!-- <h1>Index</h1> -->

<div class="container-fluid p-0 m-0 cardsPad">
	<div class="row p-0 m-0">
		<div class="col-12 p-0 m-0">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->

				<?php 
					the_content(); 
					endwhile;
					endif;
				?>
		</div>	
	</div>
</div>
<?php get_footer(); ?>