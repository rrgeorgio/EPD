<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css\pagestyle.css" />
    <script src="js/editor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <title>Αρχική Σελίδα</title>
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
        <form action="upload.php" method="post">
        <label class="form" for="title">Τίτλος</label>
        <input type="text" name="title" id="anntitle" placeholder="Τίτλος ανακοίνωσης" required></br></br>
         <label class="form" for="anntheme">Θέμα</label>
        <input type="text" name="theme" id="anntheme" placeholder="Θέμα" required></br></br>
        <label class="form" for="content">Κείμενο</label>
         <textarea name="content" id="editor"></textarea>
         <script>
         createEditor();
         </script>
         </div>
        <button class="sendcontent" type="submit">Αποστολή</button>
        </form>
      </div>
    </div>
  </body>
</html>
