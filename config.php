<?php
    $dbserver = "localhost";
    $dbusername = "root";
    $dbpass = "cplusplus68";
    $db = "student3079partB";

    $con = mysqli_connect($dbserver, $dbusername, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);

    return $con;
?>