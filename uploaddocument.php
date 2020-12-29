<?php

session_start();


    $filename=$_FILES["fileToUpload"]["name"];
    $target_dir="tmp/";
    $extension= pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($extension,['zip','docx','doc','pdf','odt'])){
        echo ("<script> alert(\"Το έγγραφο πρέπει να είναι της μορφής zip,docx,doc,pdf η odt!\")</script>");
        header("Location: adddocument.php");
    } else{
        if(move_uploaded_file($filename,$target_dir)){
            echo "success";
        }else{
            echo "failure";
        }   
    
    }



?>
