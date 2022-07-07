<?php
    $connect = mysqli_connect("localhost", "root", "", "eifeel");
    if (!$connect) {
        echo "COnnection Failed";
    }
?>