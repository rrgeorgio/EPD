<?php

session_start();

date_default_timezone_set('Europe/Athens');
$current_date=date('Y-m-d');
$insert_post_sql_query =
"INSERT INTO `announcements`(`date`,`theme`,`text`)
VALUES (\"".$current_date."\",\"".htmlentities($_POST["theme"],ENT_QUOTES)."\",\"".$_POST["content"]."\")
"
;

$con = include "config.php";
mysqli_query($con,$insert_post_sql_query);
mysqli_query("SET NAMES 'utf8'");
mysqli_query("SET CHARACTER SET 'utf8'");

unset($_POST["theme"]); unset($_POST["content"]);
echo("
    <script> alert(\"Επιτυχής δημιουργία ανακοίνωσης!\");window.location.href='announcement.php' </script>
    ");
?>