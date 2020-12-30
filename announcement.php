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
    <title>Ανακοινώσεις</title>
  </head>

  <body>
    <a id="top"></a>
    <div class="page-title">
    <form action="logout.php" method="post">
      <input class="log_out" type="submit" value="Log out"/>
      </form>
      <h1>Ανακοινώσεις</h1>
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
          <a href="addannouncement.php">Προσθήκης νέας ανακοίνωσης</a>
        </div>
        <?php
          $total_pages="SELECT COUNT(*) FROM announcements";
          $result=mysqli_query($con,$total_pages);
          $total_rows=mysqli_fetch_array($result)[0];
          $all_posts_query="SELECT id,date,theme,text FROM announcements";
          $all_posts_results=mysqli_query($con,$all_posts_query);
          if($total_rows>0){
            while($post=mysqli_fetch_array($all_posts_results)){
              echo '<div class="announcement">';
              echo '<p id="header"><b>Ανακοίνωση ';echo $post["id"];echo'</b><a class="tutor_edit" href="deleteannouncement.php">[διαγραφή]</a><a class="tutor_edit" href="editannouncement.php">[επεξεργασία]</a></p>';
              echo '<p><b>Ημερομηνία: </b>';echo $post["date"];echo'</p>';
              echo '<p><b>Θέμα: </b>'; echo $post["theme"];echo'</p>';
              echo '<p>';echo $post["text"];echo '</p>';
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
    </div>
  </body>
</html>
