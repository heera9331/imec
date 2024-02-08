<?php

    // mysqli_set_charset($conn,"utf8");
    // xamp server mysql
    
    $hostname = "localhost";
    $database = "imec_data";
    $username = "root";
    $password = "";
    


    // local mysql configuration
    // mysql root password - admin
    // host - localhost
    // username = heera7242
    // role - DB admin
    // password - user

    // local mysql
    // $hostname = "localhost";
    // $username = "heera7242";
    // $password = "user";
    // $database = "imec_data";

    // online server
    // $hostname = "localhost";
    // $database = "imec_data";
    // $username = "imec";
    // $password = "KTvlpYTDaJ";

    $conn = mysqli_connect($hostname,$username, $password, $database);

    mysqli_set_charset($conn,"utf8");

    date_default_timezone_set("Asia/Kolkata");

    $siteName = "IMEC Campus Pulse";
    $siteSub = "Complete Portal";
    $statusArray = array(1=>"Active",0=>"Inactive");

?>