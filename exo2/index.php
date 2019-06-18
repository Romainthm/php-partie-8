<?= session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 8 exercice 2</title>
  </head>
  <body>
    <main>
        <h1>Page 1</h1>
        <p>First name :<?= $_SESSION['firstname']='Thomine'; ?></p>
        <p>Last name :<?= $_SESSION['lastname']='Romain'; ?></p>
        <p>Age :<?= $_SESSION['age']=20; ?></p>
        <a href="page2.php">Start !</a>
    </main>
  </body>
</html>