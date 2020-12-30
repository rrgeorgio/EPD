<!DOCTYPE html>
<?php
  require("config.php");
  session_start();
  
?>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="css\pagestyle.css">
<title>Εργασίες</title>

</head>
<a id="top"></a>
<body>
<div class="page-title">
<form action="logout.php" method="post">
      <input class="log_out" type="submit" value="Log out"/>
      </form>
<h1>Εργασίες</h1>
</div>

<div class="content">


<div class="hyperlinks">

<form action="index.php">
<button type="submit">Αρχική Σελίδα</button>
</form>

<form action="announcement.php">
<button type="submit">Ανακοινώσεις</button>
</form>

<form action="communication.php">
<button type="submit">Επικοινωνία</button>
</form>

<form action="documents.php">
<button type="submit">Έγγραφα μαθήματος</button>
</form>

<form action="homework.php">
<button type="submit">Εργασίες</button>
</form>

</div>

<div class="page-content">
    <div class="tutor_edit">
      <a href="addhomework.php">Προσθήκη νέας εργασίας</a>
    </div>
    <?php
          $total_pages="SELECT COUNT(*) FROM homework";
          $result=mysqli_query($con,$total_pages);
          $total_rows=mysqli_fetch_array($result)[0];
          $all_posts_query="SELECT id,goals,filename_ann,deliveries,duedate FROM homework";
          $all_posts_results=mysqli_query($con,$all_posts_query);
          if($total_rows>0){
            while($post=mysqli_fetch_array($all_posts_results)){
              $text1=trim($post["goals"]);
              $text2=trim($post["deliveries"]);
              $textAr1 = explode("\n", $text1);
              $textAr1 = array_filter($textAr1, 'trim');  
              $textAr2 = explode("\n", $text2);
              $textAr2 = array_filter($textAr2, 'trim');  
              echo '<div class="announcement">';
              echo '<p id="header"><b>Εργασία: ';echo $post["id"];echo '</b></p>';
              echo '<p><i>Στόχοι: Οι στόχοι της εργασίας είναι</i></p>';
              echo '<ol>';
              foreach($textAr1 as $line){
                  echo '<li>';echo $line;echo '</li>';
              }
              echo '</ol>';
              echo '<p><i>Εκφώνηση:</i></p>';
              echo '<p>Κατεβάστε την εκφώνηση της εργασίας από <a href =';echo $post["filename_ann"];echo '>εδώ</a></p>';
              echo '<p><i>Παραδοτέα:</i></p>';
              echo '<ol>';
              foreach($textAr2 as $line){
                  echo '<li>';echo $line;echo '</li>';
              }
              echo '</ol>';
              echo '<p><b id="duedate">Ημερομηνία παράδοσης: </b>';echo $post["duedate"];echo'</p>';
              echo '</div>';
            }
            echo '<a href="#top">top</a>';
          }
      ?>
    
    
 

    <?php
          function showElements(){ ?>
            <script type='text/javascript'>
            var elements = document.getElementsByClassName('tutor_edit');
            for (var i = 0, len = elements.length; i < len; i++) {
              elements[i].style.visibility = 'visible';
            }
            </script>
        <?php }
         if($_SESSION["role"]=="tutor"){
          showElements();
        }
        ?>

</div>
</body>
</html>