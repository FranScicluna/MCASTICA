<?php get_header(); ?>

<h1>Home</h1>

<div class="container-fluid">
	<div class="row">

<!-- The Loop -->
<?php 
	$args = array('section_title' => 'Home');
	get_template_part("template-parts/loop", null, $args);
?>
		<div class="col-4">
			<!-- Prepped for Sidebar -->
			<h4>Featured Articles</h4>
		</div>
	</div>
</div>

<?php get_footer(); ?>