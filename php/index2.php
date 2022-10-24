<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les Boucles</title>
    <style> table, tr, td, th 
    { 
       border: 1px solid #000000;
    }
    </style>
  </head>
  <body>
    <?php
    /* EXERCICE 1 - Nombre impaires de 0 à 150 */
      echo "<h2>EXERCICE 1</h2>";

      $i = -1;
      while (++$i <= 150)
      {
        if ($i % 2 != 0)
          echo "$i . ";
      }


    /* EXERCICE 2 - Ecrire 500 fois la phrases */
    echo "<br><hr><h2>EXERCICE 2</h2>";

      $i = 0;
      while (++$i <= 500)
        echo "$i : Je dois faire des sauvegardes régulières de mes fichiers. ";

    /* EXERCICE 3 - Table de multiplication 12 x 12 */
    echo "<br><hr><h2>EXERCICE 3</h2>";

    //multiplication jusqu'a 12 du coup m = 12
    $multiple = 12; 
    //tableau
    echo "<table><tr><th></th>"; 
    //on commence à partir de zero
    $i = 0;
    while ($i<=$multiple){
        echo "<th>".$i."</th>";
        $i++;
    }
    echo "</tr>";
    //seconde boucle part de 0
    $x = 0;
    while($x<=$multiple){
        echo "<tr>"; //a chaque boucle j'ouvre une ligne
        echo "<th>".$x."</th>"; //j'affiche la valeur dans la première case
        //on multiplie de 0 à 12
        $y = 0;
        while($y<=$multiple){
            echo "<td>".($x*$y)."</td>"; 
        $y++;
        }
        echo "</tr>"; 
        $x++;
    }

            ?>
  </body>
</html>
