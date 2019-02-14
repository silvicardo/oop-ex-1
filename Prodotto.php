<?php

class Prodotto {

  public $categoria; //String
  public $nome; //String
  public $descrizione; //String
  //per linkare il comportamento di quantita e
  //disponibilita le rendiamo protected
  //quindi ereditabili ma non modificabili
  //dall'utente se non tramite le apposite
  //funzioni di classe
  protected $quantita; // Int
  protected $disponibile; //Bool


  function __construct($nome, $quantita, $categoria) {
    $this->nome = $nome;
    $this->quantita = $quantita;
    $this->disponibile = ($this->quantita > 0) ? true : false ;
    $this->categoria = $categoria;
  }

  public function aggiornaQuantita($nuovaQuantita) {
    $this->quantita = $nuovaQuantita;
    $this->disponibile = ($this->quantita > 0) ? true : false ;
  }

  public function dammiQuantitaDisponibile() {
    return $this->quantita;
  }

  public function isDisponibile() {
    return $this->disponibile;
  }


}






 ?>
