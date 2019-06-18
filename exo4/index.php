<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 8 exercice 4</title>
  </head>
  <body>
    <main>
        <h1>Bonjour tu est connecté a ton compte</h1>
        <?php
                if (isset($_COOKIE['snikers'])) {
                    echo 'Le cookie existe ' . $_COOKIE['snikers'] . '!<br />';
                } else {
                    echo 'Le cookie n\'existe pas <br />';
                }
                ?>
        <?php echo 'Ton Nom de compte est'.$_COOKIE['snikers'].' '.'tu a saisie le mots de passe suivant'.$_COOKIE['granola'] ?>
    </main>
  </body>
</html>
