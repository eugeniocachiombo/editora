<?php
require_once '../app/config/db.php';

class ObraModel {

    private $idObra;
    private $tituloObra;
    private $idArtista;
    private $generoObra;
    private $idEstilo;
    private $idAlbum;
    private $arquivoObra;

    function getIdObra() {
        return $this->idObra;
    }

    function getTituloObra() {
        return $this->tituloObra;
    }

    function getIdArtista() {
        return $this->idArtista;
    }

    function getGeneroObra() {
        return $this->generoObra;
    }

    function getIdEstilo() {
        return $this->idEstilo;
    }

    function getIdAlbum() {
        return $this->idAlbum;
    }

    function getArquivoObra() {
        return $this->arquivoObra;
    }

    function setIdObra( $idObra ) {
        $this->idObra = $idObra;
    }

    function setTituloObra( $tituloObra ) {
        $this->tituloObra = $tituloObra;
    }

    function setIdArtista( $idArtista ) {
        $this->idArtista = $idArtista;
    }

    function setGeneroObra( $generoObra ) {
        $this->generoObra = $generoObra;
    }

    function setIdEstilo( $idEstilo ) {
        $this->idEstilo = $idEstilo;
    }

    function setIdAlbum( $idAlbum ) {
        $this->idAlbum = $idAlbum;
    }

    function setArquivoObra( $arquivoObra ) {
        $this->arquivoObra = $arquivoObra;
    }

}

?>