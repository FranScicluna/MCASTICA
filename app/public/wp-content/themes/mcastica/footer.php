<?php
  $first_bg = get_theme_mod('mcastica_footer1_colour', '#ebebeb');
  $first_text = get_theme_mod('mcastica_footer1_text_colour', '#000000');
  $second_bg = get_theme_mod('mcastica_footer2_colour', '#000043');
  $second_text = get_theme_mod('mcastica_footer2_text_colour', '#ffffff');
?>

<div class="container-fluid footerContainer">
    <div class="row">
        <div class="container-fluid firstFooter" style="background-color: <?php echo $first_bg;?>; color:<?php echo $first_text;?>;">
        <?php
        $footer1_layout = get_theme_mod('mcastica_firstfooter_widget_count','3');
        $sidebars_active = false;

        for($i=0;$i<$footer1_layout;$i++){
          if(is_active_sidebar('footer-sidebar-'. ($i+1))){
            $sidebars_active = true;
          }
        }

        if($sidebars_active):
          for($i=0;$i<$footer1_layout;$i++):

            echo "<div class='col'>";
            if(is_active_sidebar('footer-sidebar-'. ($i+1))){
              dynamic_sidebar('footer-sidebar-'. ($i+1));
            }
            echo "</div>";
            
          endfor;
        endif;
      ?>

        </div>
        <div class="container-fluid secondFooter" style="background-color: <?php echo $second_bg;?>; color:<?php echo $second_text;?>;">
        <?php
        $footer2_layout = get_theme_mod('mcastica_secondfooter_widget_count','3');
        $sidebars_active = false;

        for($i=0;$i<$footer2_layout;$i++){
          if(is_active_sidebar('second-footer-sidebar-'. ($i+1))){
            $sidebars_active = true;
          }
        }

        if($sidebars_active):
          for($i=0;$i<$footer2_layout;$i++):

            echo "<div class='col'>";
            if(is_active_sidebar('second-footer-sidebar-'. ($i+1))){
              dynamic_sidebar('second-footer-sidebar-'. ($i+1));
            }
            echo "</div>";
            
          endfor;
        endif;
      ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>