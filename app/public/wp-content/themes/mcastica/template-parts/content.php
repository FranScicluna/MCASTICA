
<h2>
				<a href="<?php the_permalink() ?>"> <!-- Perma link is a link that wont change -->
					<?php the_title(); ?>
				</a>
				
			</h2>

			<small>
				<?php the_date(); ?> by <?php the_author_posts_link();?>
			</small>

			<p>
				<?php 
				//the_content(); 
				the_excerpt(); 
				?>
			</p>