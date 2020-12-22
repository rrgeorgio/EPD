<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css\pagestyle.css" />
    <title>Αρχική Σελίδα</title>
  </head>

  <body>
    <div class="page-title">
      <form action="logout.php" method="post">
      <input class="log_out" type="submit" value="Log out"/>
      </form>
      <h1>Αρχική Σελίδα</h1>
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
        <p>
          Καλώς ορίσατε στον ιστότοπο μας.Στόχος του συγκεκριμένου ιστοτόπου
          είναι:
        </p>
        <ul>
          <li>Εκμάθηση της γλώσσας HTML</li>
          <li>Εξοικείωση με το CSS</li>
          <li>Εκμάθηση της PHP</li>
          <li>Δημιουργία ιστοσελίδων με την χρήση των παραπάνω</li>
        </ul>
        <p>Στο διπλανό μενου θα βρείτε κάποιους χρήσιμους συνδέσμους όπως:</p>
        <ol>
          <li>Ανακοινώσεις για το μάθημα</li>
          <li>Επικοινωνία με τον διδάσκοντα</li>
          <li>Χρήσιμα έγγραφα του μαθήματος</li>
          <li>Εργασίες που ανατίθενται από τον διδάσκοντα</li>
        </ol>

        <img src="htmlimage.jpg" alt="Εικόνα" />
      </div>
    </div>
  </body>
</html>
