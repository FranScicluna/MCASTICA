<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>
</head>
<body<?php body_class(); ?>

<header>
<?php
  $header_bg = get_theme_mod('mcastica_theme_header_bg', '#000043');
  $header_text = get_theme_mod('mcastica_header_text', '#000000');

?>
<div class="container-fluid" style="background-color: <?php echo $header_bg;?>;" style="color: <?php echo $header_text;?>;">
  <div class="row">
    <div class="col-4">MCAST ICA</div>
    <div class="col-4">
      <nav id="firstexample-main-menu" class="navigationFlex">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu'
          ));
        ?>
      </nav>
    </div>
    <div class="col-4 searchPadding"><?php get_search_form(true)?></div>
  </div>
</div>
</header>



