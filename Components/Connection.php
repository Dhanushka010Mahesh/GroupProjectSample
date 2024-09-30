<?php
    $connect = mysqli_connect("localhost", "root", "", "cloth_database");

    if ($connect === false) {
        die("Connection Error: " . mysqli_connect_error());
    }
?>