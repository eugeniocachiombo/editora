<?php
require_once '../app/config/db.php';

class NacionalidadeModel {

    private $idNacionalidade;
    private $nomePais;
    private $valorNacionalidade;

    function getValorNacionalidade() {
        return $this->valorNacionalidade;
    }

    function getIdNacionalidade() {
        return $this->idNacionalidade;
    }

    function getNomePais() {
        return $this->nomePais;
    }

    function setValorNacionalidade( $valorNacionalidade ) {
        $this->valorNacionalidade = $valorNacionalidade;
    }

    function setIdNacionalidade( $idNacionalidade ) {
        $this->idNacionalidade = $idNacionalidade;
    }

    function setNomePais( $nomePais ) {
        $this->nomePais = $nomePais;
    }

}

?>