<?php
session_start();
setcookie("snikers",$_GET["login"],time()+120, '/');
setcookie("granola", $_GET["password"],time()+120, '/');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>partie 8 exercice 3</title>
    </head>
    <body>
        <main>

            <form action="index.php" method="GET">
                <p>Login : <input type="text" name="login" /></p>
                <p>PassWord : <input type="password" name="password" /></p>
                <p><input type="submit" value="OK">Sing in</p>
            </form>
            <div>
                <?php
                if (isset($_COOKIE['snikers'])) {
                    echo 'Le cookie existe ' . $_COOKIE['snikers'] . ' ' .$_COOKIE['granola']. '!<br />';
                } else {
                    echo 'Le cookie n\'existe pas <br />';
                }
                ?>
                <p>Ton compte est :<?= $_COOKIE['snikers'] ?></p>
                <p>Ton mots de passe est :<?= $_COOKIE['granola'] ?></p>
            </div>
        </main>
    </body>
</html>