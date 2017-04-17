<?php
    $localhost = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db = "silapar";

    $koneksi = mysqli_connect($localhost, $user_db, $pass_db, $db);

    if(mysqli_connect_errno()){
        echo "MySql Error". mysqli_connect_error;
    }
?>
