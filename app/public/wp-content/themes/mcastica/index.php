<?php get_header(); ?>

<h1>Index</h1>

<!-- The Loop -->

<!-- <h1>Index</h1> -->

<div class="container">
	<div class="row">
		<div class="col-8">
			<?php if(have_posts()) : while (have_posts()) : the_post() ?> <!-- have_posts() checks if there is posts to show / : is the sameas {} -->

				<?php 
					the_content(); 
					endwhile;
					endif;
				?>
		</div>	
		<div class="col-4">
			<!-- Prepped for Sidebar -->
		</div>
	</div>
</div>
<?php get_footer(); ?>