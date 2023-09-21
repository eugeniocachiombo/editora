<?php
require_once '../app/config/db.php';

class PagamentoModel {

    private $idPagamento;
    private $idArtista;
    private $idUtilizadorGerente;
    private $descricaoPagamento;
    private $valorPagamento;
    private $dataPagamento;

    function getIdPagamento() {
        return $this->idPagamento;
    }

    function getIdArtista() {
        return $this->IdArtista;
    }

    function getIdUtilizadorGerente() {
        return $this->idUtilizadorGerente;
    }

    function getDescricaoPagamento() {
        return $this->descricaoPagamento;
    }

    function getValorPagamento() {
        return $this->valorPagamento;
    }

    function getDataPagamento() {
        return $this->DataPagamento;
    }

    function setIdPagamento( $idPagamento ) {
        $this->idPagamento = $idPagamento;
    }

    function setIdArtista( $idArtista ) {
        $this->IdArtista = $idArtista;
    }

    function setIdUtilizadorGerente( $idUtilizadorGerente ) {
        $this->idUtilizadorGerente = $idUtilizadorGerente;
    }

    function setDescricaoPagamento( $descricaoPagamento ) {
        $this->descricaoPagamento = $descricaoPagamento;
    }

    function setValorPagamento( $valorPagamento ) {
        $this->valorPagamento = $valorPagamento;
    }

    function setDataPagamento( $dataPagamento ) {
        $this->DataPagamento = $dataPagamento;
    }

}

?>