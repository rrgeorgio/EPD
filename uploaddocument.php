<?php

session_start();

    $file=$_FILES['fileToUpload'];
    $filename=$_FILES['fileToUpload']['name'];
    $filetmpname=$_FILES['fileToUpload']['tmp_name'];
    $fileSize=$_FILES['fileToUpload']['size'];
    $fileError=$_FILES['fileToUpload']['error'];
    $extension= pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($extension,['zip','docx','doc','pdf','odt'])){
        echo ("<script> alert(\"Το έγγραφο πρέπει να είναι της μορφής zip,docx,doc,pdf η odt!\");window.location.href='adddocument.php'</script>");
    }
    if($fileError === 0){
        if($fileSize < 1000000){
            $destination = 'uploads/'.$filename;
            move_uploaded_file($filetmpname,$destination);
            $insert_post_sql_query=
            "INSERT INTO `documents`(`title`,`descr`,`filename`) 
            VALUES (\"".htmlentities($_POST["title"],ENT_QUOTES)."\",\"".$_POST["content"]."\",\"".$destination."\")";
            $con = include "config.php";
            mysqli_query($con,$insert_post_sql_query);
            unset($_POST["title"]); unset($_POST["content"]);

            echo ("<script> alert(\"Το αρχείο μεταφορτώθηκε επιτυχώς\");window.location.href='documents.php';</script>");
            
        
        } else{
            echo ("<script> alert(\"Υπερβολικά μεγάλο μέγεθος αρχείου\");window.location.href='adddocument.php';</script>");

        }

    } else {
        echo ("<script> alert(\"Σφάλμα κατά την μεταφόρτωση αρχείου\");window.location.href='adddocument.php'</script>");
    }


    



?>
