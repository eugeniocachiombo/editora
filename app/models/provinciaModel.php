<?php
require_once '../app/config/db.php';

class ProvinciaModel {

    private $idProvincia;
    private $nomeProvincia;

    function getIdProvincia() {
        return $this->idProvincia;
    }

    function getNomeProvincia() {
        return $this->nomeProvincia;
    }

    function setIdProvincia( $idProvincia ) {
        $this->idProvincia = $idProvincia;
    }

    function setNomeProvincia( $nomeProvincia ) {
        $this->nomeProvincia = $nomeProvincia;
    }

}

?>