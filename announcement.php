<!DOCTYPE html>
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
      <a href="addannouncement.html">Προσθήκης νέας ανακοίνωσης</a>
      </div>
        <div class="announcement">
          <p id="header"><b>Ανακοίνωση 1</b><a class="tutor_edit" href="deleteannouncement.html">[διαγραφή]</a><a class="tutor_edit" href="editannouncement.html">[επεξεργασία]</a></p>
          <p><b>Ημερομηνία:</b>12/12/2008</p>
          <p><b>Θέμα:</b>Έναρξη μαθημάτων</p>
          <p>Τα μαθήματα αρχίζουν τη Δευτέρα 17/12/2008</p>
        </div>

        <div class="announcement">
          <p id="header"><b>Ανακοίνωση 2</b><a class="tutor_edit" href="deleteannouncement.html">[διαγραφή]</a><a class="tutor_edit" href="editannouncement.html">[επεξεργασία]</a></p>
          <p><b>Ημερομηνία:</b>15/12/2012</p>
          <p><b>Θέμα:</b>Ανάρτηση εργασίας</p>
          <p>
            Η 1η εργασία έχει ανακοινωθεί στην ιστοσελίδα
            <a href="homework.html">"Εργασίες"</a>
          </p>
          <p>Τα μαθήματα αρχίζουν τη Δευτέρα 17/12/2008</p>
        </div>

        <a href="#top">top</a>
      </div>
    </div>
  </body>
</html>