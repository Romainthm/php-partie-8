<?php 
$newlogin = 'nouveau nom de compte';
$newpassword = 'nouveau mots de passe';
setcookie('snikers', $newlogin, time()+120, '/');
setcookie('granola', $newpassword, time()+120, '/');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 7 exercice 5</title>
  </head>
  <body>
    <main>
        <?php
                // Si les cookies existent, on les affiche
                if(isset($_COOKIE['newlogin']) && isset($_COOKIE['newpassword'])){
            ?>
                    <p><u>Login</u> : <?= $_COOKIE['loginCookie'] ?></p>
                    <p><u>Mot de passe</u> : <?= $_COOKIE['pwdCookie'] ?></p>
            <?php
                } else {
                    echo 'Pas de cookie d\'enregistré';
                }
            ?>
    </main>
  </body>
</html>
