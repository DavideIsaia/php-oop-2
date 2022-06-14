<?php
require_once __DIR__ . "/Prodotto.php";
class PetToy extends Prodotto {
    private $materiale;
    private $colore;

    public function __construct($nome, $descrizione, $prezzo, $materiale, $colore) {
        parent::__construct($nome, $descrizione, $prezzo);
        $this->material = $materiale;
        $this->color = $colore;
    }

    public function getMateriale() {
        return $this->materiale;
    }
    public function getColore() {
        return $this->colore;
    }
}
?>