<?php
require_once '../app/config/db.php';

class CargoArtistaBandaModel {

    private $idCargoArtistaBanda;
    private $descricaoCargoArtistaBanda;
    private $idBanda;

    function getIdBanda() {
        return $this->idBanda;
    }

    function setIdBanda( $idBanda ) {
        $this->idBanda = $idBanda;
    }

    function getIdCargoArtistaBanda() {
        return $this->idCargoArtistaBanda;
    }

    function getDescricaoCargoArtistaBanda() {
        return $this->descricaoCargoArtistaBanda;
    }

    function setIdCargoArtistaBanda( $idCargoArtistaBanda ) {
        $this->idCargoArtistaBanda = $idCargoArtistaBanda;
    }

    function setDescricaoCargoArtistaBanda( $descricaoCargoArtistaBanda ) {
        $this->descricaoCargoArtistaBanda = $descricaoCargoArtistaBanda;
    }

}

?>