<?php
require_once '../app/config/db.php';

class PedidoModel {

    private $idPedido;
    private $tituloPedido;
    private $descricaoPedido;
    private $cargoPedido;
    private $idUtilizador;

    function getIdPedido() {
        return $this->idPedido;
    }

    function getTituloPedido() {
        return $this->tituloPedido;
    }

    function getDescricaoPedido() {
        return $this->descricaoPedido;
    }

    function getCargoPedido() {
        return $this->cargoPedido;
    }

    function getIdUtilizador() {
        return $this->idUtilizador;
    }

    function setIdPedido( $idPedido ) {
        $this->idPedido = $idPedido;
    }

    function setTituloPedido( $tituloPedido ) {
        $this->tituloPedido = $tituloPedido;
    }

    function setDescricaoPedido( $descricaoPedido ) {
        $this->descricaoPedido = $descricaoPedido;
    }

    function setCargoPedido( $cargoPedido ) {
        $this->cargoPedido = $cargoPedido;
    }

    function setIdUtilizador( $idUtilizador ) {
        $this->idUtilizador = $idUtilizador;
    }

}

?>