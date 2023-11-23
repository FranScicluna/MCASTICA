<aside role="complimentary">
                <h4>Second Footer Sidebar 2</h4>

                <?php
                    if(is_active_sidebar("fourth-footer-sidebar")){
                        dynamic_sidebar("fourth-footer-sidebar");
                    }//using sidebar id
                    else{
                        echo "<p>No sidebar widgets.</p>";
                    }
                ?>
</aside>