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
                $firstFooterLayoutLimit = 2;
                $sidebars_active = false;

                for($i=0;$i<$firstFooterLayoutLimit;$i++){
                if(is_active_sidebar('footer-sidebar-'. ($i+1))){
                    $sidebars_active = true;
                    }
                }

                if($sidebars_active):
                for($i=0;$i<$firstFooterLayoutLimit;$i++):
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
                $secondFooterLayoutLimit = 4;
                $sidebars_active = false;

                for($i=2;$i<$secondFooterLayoutLimit;$i++){
                if(is_active_sidebar('footer-sidebar-'. ($i+1))){
                    $sidebars_active = true;
                    }
                }

                if($sidebars_active):
                for($i=2;$i<$secondFooterLayoutLimit;$i++):
                    echo "<div class='col'>";
                    if(is_active_sidebar('footer-sidebar-'. ($i+1))){
                    dynamic_sidebar('footer-sidebar-'. ($i+1));
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