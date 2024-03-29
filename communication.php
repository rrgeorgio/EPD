<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css\pagestyle.css" />
    <title>Επικοινωνία</title>
  </head>

  <body>
    <div class="page-title">
      <form action="logout.php" method="post">
        <input class="log_out" type="submit" value="Log out" />
      </form>
      <h1>Επικοινωνία</h1>
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
      <div class="announcement">
        <p id="header"><b>Αποστολή e-mail μέσω web φόρμας</b></p>
        <form
          action="MAILTO:tutor@csd.auth.test.gr"
          method="post"
          enctype="text/plain"
        >
          <label for="sname">Αποστολέας</label>
          <input type="text" id="sname" name="sname" /><br /><br />
          <label for="topic">Θέμα</label>
          <input type="text" id="topic" name="topic" /><br /><br />
          <label for="ttext">Κείμενο</label>
          <textarea id="ttext">Your text</textarea><br /><br />
          <button type="submit">Αποστολή</button>
        </form>
      </div>

      <div class="announcement">
        <p id="header"><b>Αποστολή e-mail με χρήση e-mail διεύθυνσης</b></p>
        <p>
          Εναλλακτικά μπορείτε να αποστείλετε e-mail στην παρακάτω διεύθυνση
          ηλεκτρονικού ταχυδρομείου
        </p>
        <a href="mailto:tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</a>
      </div>
    </div>
  </body>
</html>
