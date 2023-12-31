<?php
    function mcastica_footer_sidebars(){
        for($i=0;$i<4; $i++){
            register_sidebar(array(
                'id' => 'footer-sidebar-'.($i+1),
                'name' => 'Footer Sidebar '.($i+1),
                'description' => 'Footer Widget Section',
                'before_widget' => '<section id="%1$s" class="footer-widget %2$s">', //generates id
                'after_widget' => '</section>'
            ));
        }
    }
    add_action('widgets_init', 'mcastica_footer_sidebars');

    function mcastica_secondfooter_sidebars(){
        for($i=0;$i<4; $i++){
            register_sidebar(array(
                'id' => 'second-footer-sidebar-'.($i+1),
                'name' => 'Second Footer Sidebar '.($i+1),
                'description' => 'Second Footer Widget Section',
                'before_widget' => '<section id="%1$s" class="second-footer-widget %2$s">', //generates id
                'after_widget' => '</section>'
            ));
        }
    }
    add_action('widgets_init', 'mcastica_secondfooter_sidebars');
?>