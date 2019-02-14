<?php

class Prodotto {

  public $categoria; //String
  public $quantita; // Int
  public $nome; //String
  public $descrizione; //String
  public $disponibile; //Bool

  function __construct($nome, $quantita, $categoria) {
    $this->$nome = $nome;
    $this->$quantita = $quantita;
    $this->categoria = $categoria;
  }

}






 ?>
