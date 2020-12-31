<!DOCTYPE html>

<?php 
    require "config.php";
    session_start();
    $retrieve_post="SELECT theme,text FROM announcements where id=\"".$_POST['postID']."\"";
    $result=mysqli_query($con,$retrieve_post);
    $posttoedit=mysqli_fetch_array($result);
    $theme=$posttoedit['theme'];
    $text=$posttoedit['text'];



?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css\pagestyle.css" />
    <script src="js/editor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <title>Προσθήκη νέας ανακοίνωσης</title>
  </head>

  <body>
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
        <div class="create-content">
        <h1>Προσθήκη νέας ανακοίνωσης</h1>
        <form action="alterannouncement.php" method="post">
         <label class="form" for="anntheme">Θέμα</label>
        <input type="text" name="theme" id="anntheme" placeholder=<?php echo $theme;?>></br></br>
        <label class="form" for="content">Κείμενο</label>
         <textarea name="content" id="editor" placeholder=<?php echo $text;?>></textarea>
         <script>
         createEditor();
         </script>
         </div>
        <button class="sendcontent" type="submit"><input type="hidden" name="editpostID" value= "<?php echo $_POST['postID'];?>">Αποστολή</button>
        </form>
      </div>
    </div>
  </body>
</html>