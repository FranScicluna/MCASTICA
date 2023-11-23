<aside role="complimentary">
                <h4>Second Footer Sidebar 1</h4>

                <?php
                    if(is_active_sidebar("third-footer-sidebar")){
                        dynamic_sidebar("third-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>