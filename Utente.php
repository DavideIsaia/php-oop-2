<?php
class Utente {
  public $nome;
  public $cognome;
  public $tel;
  public $scadenza_carta;
  public $carrello = [];
  public $registrato = false;


  public function __construct($nome, $cognome, $tel) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->tel = $tel;
  }

  public function printUtente() {
    return "$this->nome $this->cognome - <small>Numero di tel: $this->tel</small>";
  }

  public function aggiungiCarrello($_prodotto) {
    if ($_prodotto->in_stock) {
        $this->carrello[] = $_prodotto;
        return true;
    } else {
        return false;
    }
  }

  function registrato() {
      $this->registrato = true;
      return "Bentornato ".$this->name."! hai effettuato l'accesso :)";
  }

  function getPrezzoTot() {
      $prezzo_tot = 0;
      foreach($this->carrello as $item) {
          $prezzo_tot += $item->prezzo;
      }
      if ($this->registrato) {
          return $prezzo_tot*0.8." (sconto del 20% applicato!)";
      }
      else {
      return $prezzo_tot;
      }
  }
  function canPurchase() {
      return !$this->scadenza_carta;
  }
}
