<?php
require_once '../app/config/db.php';

class ContratoModel {

    private $idContrato;
    private $idUtilizador;
    private $tipoContrato;
    private $descricaoContrato;
    private $dataInicialContrato;
    private $dataFinalContrato;
    private $estadoContrato;

    function getIdContrato() {
        return $this->idContrato;
    }

    function getIdUtilizador() {
        return $this->IdUtilizador;
    }

    function getTipoContrato() {
        return $this->TipoContrato;
    }

    function getDescricaoContrato() {
        return $this->DescricaoContrato;
    }

    function getDataInicialContrato() {
        return $this->DataInicialContrato;
    }

    function getDataFinalContrato() {
        return $this->DataFinalContrato;
    }

    function getEstadoContrato() {
        return $this->estadoContrato;
    }

    function setIdContrato( $idContrato ) {
        $this->idContrato = $idContrato;
    }

    function setIdUtilizador( $idUtilizador ) {
        $this->IdUtilizador = $idUtilizador;
    }

    function setTipoContrato( $tipoContrato ) {
        $this->TipoContrato = $tipoContrato;
    }

    function setDescricaoContrato( $descricaoContrato ) {
        $this->DescricaoContrato = $descricaoContrato;
    }

    function setDataInicialContrato( $dataInicialContrato ) {
        $this->DataInicialContrato = $dataInicialContrato;
    }

    function setDataFinalContrato( $dataFinalContrato ) {
        $this->DataFinalContrato = $dataFinalContrato;
    }

    function setEstadoContrato( $estadoContrato ) {
        $this->estadoContrato = $estadoContrato;
    }

}

?>