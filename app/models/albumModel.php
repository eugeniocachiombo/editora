<?php
require_once '../app/config/db.php';

class AlbumModel {

    private $idAlbum;
    private $nomeAlbum;
    private $idArtista;

    function getIdArtista() {
        return $this->idArtista;
    }

    function setIdArtista( $idArtista ) {
        $this->idArtista = $idArtista;
    }

    function getIdAlbum() {
        return $this->idAlbum;
    }

    function getNomeAlbum() {
        return $this->nomeAlbum;
    }

    function setIdAlbum( $idAlbum ) {
        $this->idAlbum = $idAlbum;
    }

    function setNomeAlbum( $nomeAlbum ) {
        $this->nomeAlbum = $nomeAlbum;
    }

}

?>