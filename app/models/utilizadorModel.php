<?php
require_once '../app/config/db.php';

class UtilizadorModel {

    private $idUtilizador;
    private $nomeUtilizador;
    private $sobrenomeUtilizador;
    private $nomeArtisticoUtilizador;
    private $NIFUtilizador;
    private $emailUtilizador;
    private $telefoneUtilizador;
    private $senhaUtilizador;
    private $nacionalidadeUtilizador;
    private $dataNascimentoUtilizador;
    private $generoUtilizador;

    private $idTipoAcesso;
    private $idProvincia;
    private $idMunicipio;
    private $endereco;

    function getIdUtilizador() {
        return $this->idUtilizador;
    }

    function getNomeUtilizador() {
        return $this->nomeUtilizador;
    }

    function getSobrenomeUtilizador() {
        return $this->sobrenomeUtilizador;
    }

    function getNomeArtisticoUtilizador() {
        return $this->nomeArtisticoUtilizador;
    }

    function getNIFUtilizador() {
        return $this->NIFUtilizador;
    }

    function getEmailUtilizador() {
        return $this->emailUtilizador;
    }

    function getTelefoneUtilizador() {
        return $this->telefoneUtilizador;
    }

    function getSenhaUtilizador() {
        return $this->senhaUtilizador;
    }

    function getNacionalidadeUtilizador() {
        return $this->nacionalidadeUtilizador;
    }

    function getDataNascimentoUtilizador() {
        return $this->dataNascimentoUtilizador;
    }

    function getGeneroUtilizador() {
        return $this->generoUtilizador;
    }

    function getIdTipoAcesso() {
        return $this->idTipoAcesso;
    }

    function getIdProvincia() {
        return $this->idProvincia;
    }

    function getIdMunicipio() {
        return $this->idMunicipio;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setIdUtilizador( $idUtilizador ) {
        $this->idUtilizador = $idUtilizador;
    }

    function setNomeUtilizador( $nomeUtilizador ) {
        $this->nomeUtilizador = $nomeUtilizador;
    }

    function setSobrenomeUtilizador( $sobrenomeUtilizador ) {
        $this->sobrenomeUtilizador = $sobrenomeUtilizador;
    }

    function setNomeArtisticoUtilizador( $nomeArtisticoUtilizador ) {
        $this->nomeArtisticoUtilizador = $nomeArtisticoUtilizador;
    }

    function setNIFUtilizador( $NIFUtilizador ) {
        $this->NIFUtilizador = $NIFUtilizador;
    }

    function setEmailUtilizador( $emailUtilizador ) {
        $this->emailUtilizador = $emailUtilizador;
    }

    function setTelefoneUtilizador( $telefoneUtilizador ) {
        $this->telefoneUtilizador = $telefoneUtilizador;
    }

    function setSenhaUtilizador( $senhaUtilizador ) {
        $this->senhaUtilizador = $senhaUtilizador;
    }

    function setNacionalidadeUtilizador( $nacionalidadeUtilizador ) {
        $this->nacionalidadeUtilizador = $nacionalidadeUtilizador;
    }

    function setDataNascimentoUtilizador( $dataNascimentoUtilizador ) {
        $this->dataNascimentoUtilizador = $dataNascimentoUtilizador;
    }

    function setGeneroUtilizador( $generoUtilizador ) {
        $this->generoUtilizador = $generoUtilizador;
    }

    function setIdTipoAcesso( $idTipoAcesso ) {
        $this->idTipoAcesso = $idTipoAcesso;
    }

    function setIdProvincia( $idProvincia ) {
        $this->idProvincia = $idProvincia;
    }

    function setIdMunicipio( $idMunicipio ) {
        $this->idMunicipio = $idMunicipio;
    }

    function setEndereco( $endereco ) {
        $this->endereco = $endereco;
    }

}

?>