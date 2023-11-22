<?php

    function mcastica_customize_register($wp_customize){
        $wp_customize ->add_section('mcastica_header_options', array(
            'title' => 'Header Options',
            'description' => 'You can change header options here'
        )); 

        //Background
        $wp_customize -> add_setting('mcastica_theme_header_bg', array(
            'default' => '#000043',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'mcastica_theme_header_bg', array(
                'label' => 'Choose Theme Header Background Color',
                'section' => 'mcastica_header_options',
                'settings' => 'mcastica_theme_header_bg'
            ))
        );

        //Text
        $wp_customize -> add_setting('mcastica_header_text', array(
            'default' => '#000000',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Color_Control($wp_customize, 'mcastica_header_text', array(
                'label' => 'Choose Theme Header Text Color',
                'section' => 'mcastica_header_options',
                'settings' => 'mcastica_header_text'

            ))
        );

        //Logo
        $wp_customize -> add_setting('mcastica_header_logo');

        $wp_customize -> add_control(
            new WP_Customize_Image_Control($wp_customize, 'mcastica_header_text', array(
                'label' => 'Choose Theme Header Logo',
                'section' => 'mcastica_header_options',
                'settings' => 'mcastica_header_logo'

            ))
        );
    }

    add_action('customize_register','mcastica_customize_register');

?>