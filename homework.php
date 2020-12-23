<!DOCTYPE html>
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
    <div class="announcement">
        <p id="header"><b>Εργασία 1</b></p>
        <p><i>Στόχοι: Οι στόχοι της εργασίας είναι</i></p>
        <ol>
            <li>Στόχος 1</li>
            <li>Στόχος 2</li>
            <li>...</li>
        </ol>
        <p><i>Εκφώνηση:</i></p>
        <p>Κατεβάστε την εκφώνηση της εργασίας από <a href="ergasia1.doc" target = "_blank">εδώ.</a></p>
        <p><i>Παραδοτέα:</i></p>
        <ol>
            <li>Γραπτή αναφορά σε word</li>
            <li>Παρουσίαση σε powerpoint</li>
        </ol>
        <p><b id="duedate">Ημερομηνία παράδοσης</b>: 12/5/2009</p>
    
    </div>
    
    <div class="announcement">
        <p id="header"><b>Εργασία 2</b></p>
        <p><i>Στόχοι: Οι στόχοι της εργασίας είναι</i></p>
        <ol>
            <li>Στόχος 1</li>
            <li>Στόχος 2</li>
            <li>...</li>
        </ol>
        <p><i>Εκφώνηση:</i></p>
        <p>Κατεβάστε την εκφώνηση της εργασίας από <a href="ergasia2.doc" target = "_blank">εδώ.</a></p>
        <p><i>Παραδοτέα:</i></p>
        <ol>
            <li>Γραπτή αναφορά σε word</li>
            <li>Παρουσίαση σε powerpoint</li>
        </ol>
        <p><b  id="duedate">Ημερομηνία παράδοσης</b>: 15/5/2009</p>
    </div>


    <a href="#top">top</a>
    <?php
          session_start();
          function showElements(){
            echo "<script type='text/javascript'>
            var elements = document.getElementsByClassName('tutor_edit');
            for (var i = 0, len = elements.length; i < len; i++) {
              elements[i].style.visibility = 'visible';
            }
            </script>";
          }
         if($_SESSION["role"]=="tutor"){
          showElements();
        }?>

</div>
</body>
</html>