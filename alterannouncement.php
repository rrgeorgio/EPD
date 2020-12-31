<?php

    require "config.php";
    session_start();
    echo $_POST['editpostID'];

    $change_post_title="UPDATE announcements SET theme='$_POST[theme]' WHERE id=\"".$_POST['editpostID']."\"";
    $change_post_text="UPDATE announcements SET text='$_POST[content]' WHERE id=\"".$_POST['editpostID']."\"";
    mysqli_query($con,$change_post_title);
    mysqli_query($con,$change_post_text);
    header("Location:announcement.php");



    
   
?>