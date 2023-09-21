<?php
require_once '../app/config/db.php';

class CargoArtistaModel {

    private $idCargoArtista;
    private $descricaoCargoArtista;

    function getIdCargoArtista() {
        return $this->idCargoArtista;
    }

    function getDescricaoCargoArtista() {
        return $this->DescricaoCargoArtista;
    }

    function setIdCargoArtista( $idCargoArtista ) {
        $this->idCargoArtista = $idCargoArtista;
    }

    function setDescricaoCargoArtista( $descricaoCargoArtista ) {
        $this->DescricaoCargoArtista = $descricaoCargoArtista;
    }

}

?>