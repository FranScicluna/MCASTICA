<?php get_header(); ?>
<?php 
if(have_posts()) :while(have_posts()) : the_post();
    $author_id = get_the_author_meta("ID");
    $author_posts = get_the_author_posts();
    $author_display = get_the_author();
    $author_posts_url = get_author_posts_url($author_id);
    $author_desc = get_the_author_meta("user_description");
    $author_url = get_the_author_meta("user_url");
    $post_datetime = get_the_date();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <main>
                

                    <article <?php post_class("mt-4 p-4");?>>

                        <div><?php the_content(); ?></div>
                    </article>

                    

                
            </main>
        </div>

    </div>
</div>
<?php 
                    endwhile; 
                    endif; 
                ?>
<?php get_footer(); ?>