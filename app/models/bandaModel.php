<?php
require_once '../app/config/db.php';

class BandaModel {

    private $idBanda;
    private $nomeBanda;

    function getIdBanda() {
        return $this->idBanda;
    }

    function getNomeBanda() {
        return $this->nomeBanda;
    }

    function setIdBanda( $idBanda ) {
        $this->idBanda = $idBanda;
    }

    function setNomeBanda( $nomeBanda ) {
        $this->nomeBanda = $nomeBanda;
    }

}

?>