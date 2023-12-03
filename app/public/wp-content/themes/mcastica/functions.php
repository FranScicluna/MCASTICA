
<?php

show_admin_bar(false);


require_once("lib/navigation.php");
require_once("lib/enqueue-assets.php");
require_once("lib/customize.php");
require_once("lib/sidebars.php");

function mcastica_h3title($title){
    return "<h6>".$title."</h6>";
}

add_filter('the_title','mcastica_h3title');

function mcastica_excerptlength($words){
    return 15;
}

add_filter('excerpt_length', 'mcastica_excerptlength');


?>
