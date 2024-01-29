<?php
    /*
        this file contains databse configuration assuming you are running mysql using user "root" and password ""

    */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'developer');
    define('DB_PASSWORD', 'Temple@20001');
    define('DB_NAME', 'jaiShreeRam');

    // Try connecting to the Database
    $conn = mysqli_connect(DB_SERVER , DB_USERNAME, DB_PASSWORD, DB_NAME );

    //check the connection
    if($conn==false){
        dir('Error: Cannot connect');
    }

?>