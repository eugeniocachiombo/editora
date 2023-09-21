<?php
require_once '../app/config/db.php';

class EnderecoModel {

    private $idEndereco;
    private $nomeEndereco;
    private $idMunicipio;

    function getIdMunicipio() {
        return $this->idMunicipio;
    }

    function setIdMunicipio( $idMunicipio ) {
        $this->idMunicipio = $idMunicipio;
    }

    function getIdEndereco() {
        return $this->idEndereco;
    }

    function getNomeEndereco() {
        return $this->nomeEndereco;
    }

    function setIdEndereco( $idEndereco ) {
        $this->idEndereco = $idEndereco;
    }

    function setNomeEndereco( $nomeEndereco ) {
        $this->nomeEndereco = $nomeEndereco;
    }

}

?>