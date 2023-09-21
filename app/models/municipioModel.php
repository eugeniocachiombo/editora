<?php
require_once '../app/config/db.php';

class MunicipioModel {

    private $idMunicipio;
    private $nomeMunicipio;
    private $idProvincia;

    function getIdProvincia() {
        return $this->idProvincia;
    }

    function setIdProvincia( $idProvincia ) {
        $this->idProvincia = $idProvincia;
    }

    function getIdMunicipio() {
        return $this->idMunicipio;
    }

    function getNomeMunicipio() {
        return $this->nomeMunicipio;
    }

    function setIdMunicipio( $idMunicipio ) {
        $this->idMunicipio = $idMunicipio;
    }

    function setNomeMunicipio( $nomeMunicipio ) {
        $this->nomeMunicipio = $nomeMunicipio;
    }

}

?>