<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test OOP</title>
  </head>
  <body>
    <?php

    //require del file della classe
    require 'Prodotto.php';


    //creazione oggetto tramite il costruttore
    $pallone = new Prodotto('Pallone', 25, 'sport');

    //stampa tutti i valori dell'oggetto
    var_dump($pallone);







     ?>
  </body>
</html>
