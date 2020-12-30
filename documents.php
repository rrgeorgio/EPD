<!DOCTYPE html>
<?php
  require("config.php");
  session_start();
  
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css\pagestyle.css" />
    <title>Έγγραφα μαθήματος</title>
  </head>

  <body>
    <div class="page-title">
      <form action="logout.php" method="post">
        <input class="log_out" type="submit" value="Log out"/>
      </form>
      <h1>Έγγραφα μαθήματος</h1>
    </div>

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
      <a href="adddocument.php">Προσθήκη νέου εγγράφου</a>
      </div>
      <?php
          $total_pages="SELECT COUNT(*) FROM documents";
          $result=mysqli_query($con,$total_pages);
          $total_rows=mysqli_fetch_array($result)[0];
          $all_posts_query="SELECT id,title,descr,filename FROM documents";
          $all_posts_results=mysqli_query($con,$all_posts_query);
          if($total_rows>0){
            while($post=mysqli_fetch_array($all_posts_results)){
              echo '<div class="announcement">';
              echo '<p id="header"><b>';echo $post["title"];echo'</b><a class="tutor_edit" href="deleteannouncement.php">[διαγραφή]</a><a class="tutor_edit" href="editannouncement.php">[επεξεργασία]</a></p>';
              echo '<p><b>Περιγραφή: </b>'; echo $post["descr"];echo'</p>';
              echo '<a href =';echo $post["filename"];echo '>Download</a>';
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
