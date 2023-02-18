<?php

    $host_name = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'my-too-app';



    $con = mysqli_connect($host_name,$db_user,$db_pass,$db_name);

    if (!$con) {
        die('connection-failed' . mysqli_connect_error());
    }