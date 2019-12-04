<?php
$min = 0;
$max = 300;
$chiffresPairs = '';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Partie 4 Exercice 5 : les conditions</title>
  </head>
  <body>
    <p>
      <?php
      for ($i = $min; $i <= $max; $i++) {
        if ( $i % 2 == 0 ) {
          $chiffresPairs .= $i.' ';
        }
      }
      echo "Les chiffres pairs compris entre $min et $max sont: $chiffresPairs";
      ?>
    </p>
  </body>
</html>
