<aside role="complimentary">
                <h4>First Footer Sidebar 1</h4>

                <?php
                    if(is_active_sidebar("first-footer-sidebar")){
                        dynamic_sidebar("first-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>