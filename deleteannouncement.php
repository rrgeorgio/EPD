<?php 
    require "config.php";
    session_start();

    $id="SELECT * FROM announcements ORDER BY id DESC LIMIT 0, 1";
    $result=mysqli_query($con,$id);
    $maxid=mysqli_fetch_array($result);

    $delete_post="DELETE FROM announcements where id=\"".$_POST['postID']."\"";
    mysqli_query($con,$delete_post);

    if($_POST['postID']==$maxid['id']){
        echo 'OK';
        $change_id="ALTER TABLE announcements AUTO_INCREMENT = ".$_POST['postID'];
        mysqli_query($con,$change_id);
    }
    header("Location:announcement.php");
    
