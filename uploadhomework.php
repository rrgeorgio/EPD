<?php

session_start();

    date_default_timezone_set('Europe/Athens');
    $duedate= date('Y-m-d',strtotime($_POST['date']));
    $current_date=date('Y-m-d');
    $theme="";
    $text="Η ημερομηνία παράδοσης της εργασίας είναι ".$duedate;
    $file=$_FILES['fileToUpload'];
    $filename=$_FILES['fileToUpload']['name'];
    $filetmpname=$_FILES['fileToUpload']['tmp_name'];
    $fileSize=$_FILES['fileToUpload']['size'];
    $fileError=$_FILES['fileToUpload']['error'];
    $extension= pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($extension,['zip','docx','doc','pdf','odt'])){
        echo ("<script> alert(\"Η εκφώνηση πρέπει να είναι της μορφής zip,docx,doc,pdf η odt!\");window.location.href='addhomework.php'</script>");
    }
    if($fileError === 0){
        if($fileSize < 1000000){
            $destination = 'uploads/'.$filename;
            move_uploaded_file($filetmpname,$destination);
            $insert_post_sql_query=
            "INSERT INTO `homework`(`goals`,`filename_ann`,`deliveries`,`duedate`) 
            VALUES (\"".$_POST["content1"]."\",\"".$destination."\",\"".$_POST["content2"]."\",\"".htmlentities($duedate, ENT_QUOTES)."\")";
            $con = include "config.php";
            mysqli_query($con,$insert_post_sql_query);
            unset($_POST["content1"]);unset($_POST["content2"]);
            $insert_post_sql_query=
            "INSERT INTO `announcements`(`date`,`theme`,`text`) 
            VALUES (\"".$current_date."\",\"".$theme."\",\"".$text."\")";
            $con = include "config.php";
            mysqli_query($con,$insert_post_sql_query);
            echo ("<script> alert(\"Η εργασία μεταφορτώθηκε επιτυχώς\");window.location.href='homework.php';</script>");
            
        
        } else{
            echo ("<script> alert(\"Υπερβολικά μεγάλο μέγεθος αρχείου\");window.location.href='addhomework.php';</script>");

        }

    } else {
        echo ("<script> alert(\"Σφάλμα κατά την μεταφόρτωση αρχείου\");window.location.href='addhomework.php'</script>");
    }


    



?>
