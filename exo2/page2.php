<?= session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 8 exercice 2</title>
  </head>
  <body>
    <main>
        <h1>Page 2</h1>
        <p>First name :<?= $_SESSION['firstname'] ?></p>
        <p>Last name :<?= $_SESSION['lastname'] ?></p>
        <p>Age :<?= $_SESSION['age'] ?></p>
        <a href="index.php">Back !</a>
    </main>
  </body>
</html>
