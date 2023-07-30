<?php
//**********************************************
//File: dbc.php
//Connect Read-only to MySql database via PHP
//***********************************************

    $host = "sql108.infinityfree.com";
    $userName ="if0_34583243";
    $passWord ="VuivfQMk2JyUEx";
    $dataBase = "if0_34583243_gameSite";

    $con = mysqli_connect($host, $userName, $passWord, $dataBase);

    $connection_error = mysqli_connect_error();
    if($connection_error != null){
        echo "<p>Error connecting to database: $connection_error </p>";
    }else{
        echo "Connected to Admin MySQL <br   />";
    }
?>