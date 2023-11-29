<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-4">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-8">
            <main>
                <?php if(have_posts()) :while(have_posts()) : the_post(); ?>

                    <article <?php post_class("mt-4 p-4"); ?> >
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                        <?php 
                            $author_id = get_the_author_meta("ID");
                            $author_posts = get_the_author_posts();
                            $author_display = get_the_author();
                            $author_posts_url = get_author_posts_url($author_id);
                            $author_desc = get_the_author_meta("user_description");
                            $author_url = get_the_author_meta("user_url");
                        ?>

                        <?php
                            if($author_url){
                                echo "<p><a href='{$author_url}'>{$author_display}</a></p>";
                            }
                        ?>
                    </article>

                    

                <?php 
                    endwhile; 
                    endif; 
                ?>
            </main>
        </div>

    </div>
</div>

<?php get_footer(); ?>