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
    $pallone = new Prodotto('Pallone', 5, 'sport'); ?>

    <!-- Modifica di un valore protetto tramite funzioni -->
    <p>Ci sono <?php echo $pallone->dammiQuantitaDisponibile(); ?> palloni </p>

    <?php $pallone->aggiornaQuantita(0); ?>

    <p>Ci sono <?php echo $pallone->dammiQuantitaDisponibile(); ?> palloni </p>


     ?>
  </body>
</html>
