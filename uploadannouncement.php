<?php

session_start();


date_default_timezone_set('Europe/Athens');
$current_date=date('Y-m-d');
$insert_post_sql_query=
"INSERT INTO `announcements`(`date`,`theme`,`text`)
VALUES (\"".$current_date."\",\"".htmlentities($_POST["theme"],ENT_QUOTES)."\",\"".$_POST["content"]."\")
"
;

include "config.php";
my_sqli_query($con,$insert_post_sql_query);

unset($_POST["theme"]); unset($_POST["content"]);
echo("
    <script> alert(\"Επιτυχής δημιουργία ανακοίνωσης!\") </script>
    ");

header("Location: announcement.php");
?>