<!-- This is a MySql Database connection file -->
<?php 

    $link = mysqli_connect("localhost", 
                            "root", 
                            "", 
                            "thoughts_tracker");

        if(mysqli_connect_error()) {
            die("Data Connection Error");
        }

?>