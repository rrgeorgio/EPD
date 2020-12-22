<?php
$dbserver="localhost:127.0.0.1.";
$dbusername="root";
$dbpass="cplusplus68";
$db="student3079partb"

$con=mysqli_connect($dbserver,$dbusername,$dbpass,$db) or die("Connect failed: %s\n". $con -> error);

return $con;

?>