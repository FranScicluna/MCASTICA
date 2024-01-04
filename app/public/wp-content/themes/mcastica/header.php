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
  $header_bg = get_theme_mod('mcastica_theme_header_bg', '#ededed');
  $header_text = get_theme_mod('mcastica_header_text_color', '#000000');
  $header_logo = get_theme_mod('mcastica_header_logo');

?>
<div class="container-fluid"  style="background-color: <?php echo $header_bg;?>;">
  <div class="row align-content-center align-items-center" style="height: 100px;">
    <div class="col-6" style="color: <?php echo $header_text;?>;"><a href="http://mcast-ica.local/"><img class="headerIMG" src="<?php echo $header_logo?>" alt=""></a></div>
    <div class="col-6">
      <nav id="mcastica-main-menu" class="navigationFlex main-menu" style="color: <?php echo $header_text;?>;">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu'
          ));
        ?>
      </nav>
    </div>
  </div>
</div>
</header>



