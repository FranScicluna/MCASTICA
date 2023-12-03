<?php get_header(); ?>
<?php 
    $author_id = get_the_author_meta("ID");
    $author_posts = get_the_author_posts();
    $author_display = get_the_author();
    $author_posts_url = get_author_posts_url($author_id);
    $author_desc = get_the_author_meta("user_description");
    $author_url = get_the_author_meta("user_url");
?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="row sidebarFlex mt-4 p-4">
                <div class="col-1">
                    <p>admin</p>
                </div>
                <div class="col-2">
                    <?php
                        if($author_posts > 1){
                            $post_word = "Posts";
                        }
                        else{
                            $posts_word = "Post";
                        }
                        echo "<p><a href='{$author_posts_url}'>{$author_posts} {$post_word}</a></p>";
                    ?>
                </div>
            </div>
            <?php //get_sidebar(); ?>
        </div>
        <div class="col-9">
            <main>
                <?php if(have_posts()) :while(have_posts()) : the_post();?>

                    <article <?php post_class("mt-4 p-4");?>>
                        <h1><?php the_title()?></h1>

                        <div><?php the_content(); ?></div>

                        <?php 
                            $author_id = get_the_author_meta("ID");
                            $author_posts = get_the_author_posts();
                            $author_display = get_the_author();
                            $author_posts_url = get_author_posts_url($author_id);
                            $author_desc = get_the_author_meta("user_description");
                            $author_url = get_the_author_meta("user_url");
                        ?>

                        <div class="bg-dark">
                            <div><?php echo get_avatar($author_id,200);?></div>
                        </div>

                        <?php
                            if($author_url){
                                echo "<p><a href='{$author_url}'>{$author_display}</a></p>";
                            }
                            else{
                                echo "<p>{$author_display}</p>";
                            }

                            if($author_desc){
                                echo "<p>{$author_desc}</p>";
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