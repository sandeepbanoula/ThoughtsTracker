<?php 

    $link = mysqli_connect("localhost", 
                            "root", 
                            "", 
                            "secret_diary");

        if(mysqli_connect_error()) {
            die("Data Connection Error");
        }

?>