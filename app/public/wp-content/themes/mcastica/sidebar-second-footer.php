<aside role="complimentary">
                <h4>First Footer Sidebar 2</h4>

                <?php
                    if(is_active_sidebar("second-footer-sidebar")){
                        dynamic_sidebar("second-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>