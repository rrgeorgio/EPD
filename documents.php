<!DOCTYPE html>
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
      <form action="index.html">
        <button type="submit">Αρχική Σελίδα</button>
      </form>

      <form action="announcement.html">
        <button type="submit">Ανακοινώσεις</button>
      </form>

      <form action="communication.html">
        <button type="submit">Επικοινωνία</button>
      </form>

      <form action="documents.html">
        <button type="submit">Έγγραφα μαθήματος</button>
      </form>

      <form action="homework.html">
        <button type="submit">Εργασίες</button>
      </form>
    </div>

    <div class="page-content">
     <div class="tutor_edit">
      <a href="adddocument.html">Προσθήκη νέου εγγράφου</a>
      </div>
      <div class="announcement">
        <p id="header"><b>Τίτλος εγγράφου 1</b></p>
        <p><i>Περιγραφή:</i>Περιγραφή του περιεχομένου</p>
        <a href="file1.doc" target="_blank">Download</a>
      </div>

      <div class="announcement">
        <p id="header"><b>Τίτλος εγγράφου 2</b></p>
        <p><i>Περιγραφή:</i>Περιγραφή του περιεχομένου</p>
        <a href="file2.doc" target="_blank">Download</a>
      </div>

      <a href="#top">top</a>
    </div>
  </body>
</html>