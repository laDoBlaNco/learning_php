<?php

// So there are two main ways to connect to php databases:
    // mysqli - is limited to mysql
    // PDO - PHP Data Objects - This a preference of many for real world projects as you
    //       basically use any (up to 12) relational database.
    define('DB_HOST','localhost');
    define('DB_USER','kevin');
    define('DB_PASS','123456');
    define('DB_NAME','php_dev');

    // Create connection
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME); // with mysql class

    // Check connection
    if($conn->connect_error){
      die('Connection Failed ' . $conn->connect_error);
    }

 