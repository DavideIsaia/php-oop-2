<?php
class Utente {
  protected $nome;
  protected $cognome;
  protected $tel;

  public function __construct($nome, $cognome, $tel) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->tel = $tel;
  }

  public function printUtente() {
    return "$this->nome $this->cognome Numero di telefono: $this->tel";
  }
}