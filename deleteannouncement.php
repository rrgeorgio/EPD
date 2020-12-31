<?php 
    require "config.php";
    session_start();

    $id="SELECT * FROM announcements ORDER BY id DESC LIMIT 0, 1";
    $result=mysqli_query($con,$id);
    $maxid=mysqli_fetch_array($result);
    $total_pages="SELECT COUNT(*) FROM announcements";
    $result=mysqli_query($con,$total_pages);
    $total_rows=mysqli_fetch_array($result)[0];

    
    

    $delete_post="DELETE FROM announcements where id=\"".$_POST['postID']."\"";
    mysqli_query($con,$delete_post);

    if($total_rows==1){
        echo "OK";
        $change_id="ALTER TABLE announcements AUTO_INCREMENT = 1";
        mysqli_query($con,$change_id);
    } else {
        if($_POST['postID']==$maxid['id']){
            $change_id="ALTER TABLE announcements AUTO_INCREMENT = ".$_POST['postID'];
            mysqli_query($con,$change_id);
            }
    }
    
    header("Location:announcement.php");
