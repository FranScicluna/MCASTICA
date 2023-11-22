<?php

    function mcastica_register_menus(){
        register_nav_menus(array(
            "main-menu" => "Main Menu",
            "footer-menu" => "Footer Menu"
        ));
    }

    add_action("init", "mcastica_register_menus");

?>