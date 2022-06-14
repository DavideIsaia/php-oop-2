<?php
require_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto {
  private $scadenza;

  public function __construct($nome, $descrizione, $prezzo, $scadenza) {
    parent::__construct($nome, $descrizione, $prezzo);
    $this->scadenza = $scadenza;
  }

  public function getScadenza() {
    return $this->scadenza;
  }
}
?>