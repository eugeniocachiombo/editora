<?php
require_once '../app/config/db.php';

class PostagemModel {

    private $idPostagem;
    private $idObra;
    private $idUtilizadorPublicador;
    private $dataPostagem;

    function getIdPostagem() {
        return $this->idPostagem;
    }

    function getIdObra() {
        return $this->idObra;
    }

    function getIdUtilizadorPublicador() {
        return $this->idUtilizadorPublicador;
    }

    function getDataPostagem() {
        return $this->dataPostagem;
    }

    function setIdPostagem( $idPostagem ) {
        $this->idPostagem = $idPostagem;
    }

    function setIdObra( $idObra ) {
        $this->idObra = $idObra;
    }

    function setIdUtilizadorPublicador( $idUtilizadorPublicador ) {
        $this->idUtilizadorPublicador = $idUtilizadorPublicador;
    }

    function setDataPostagem( $dataPostagem ) {
        $this->dataPostagem = $dataPostagem;
    }

}

?>