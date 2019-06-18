<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 8 exercice 1</title>
  </head>
  <body>
    <main>
       <?php
       foreach ($_SERVER as $index =>$content){?>
            <tr>                    
             <td><small><b><?= $index ?></b></small></td>
             <td><small><?= $content ?></small></td>
            </tr>
      <?php } ?>
        
    </main>
  </body>
</html>
