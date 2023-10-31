<?php
require_once '../app/config/db.php';

class ArtistaModel {

    private $idArtista;
    private $idUtilizador;
    private $idCargoArtista;
    private $idBanda;
    private $idCargoArtistaBanda;

    function getIdArtista() {
        return $this->idArtista;
    }

    function getidUtilizador() {
        return $this->idUtilizador;
    }

    function getIdCargoArtista() {
        return $this->idCargoArtista;
    }

    function getIdCargoArtistaBanda() {
        return $this->idCargoArtistaBanda;
    }

    function getIdBanda() {
        return $this->idBanda;
    }

    function setIdArtista( $idArtista ) {
        $this->idArtista = $idArtista;
    }

    function setIdUtilizador( $idUtilizador ) {
        $this->idUtilizador = $idUtilizador;
    }

    function setIdCargoArtista( $idCargoArtista ) {
        $this->idCargoArtista = $idCargoArtista;
    }

    function setIdCargoArtistaBanda( $idCargoArtistaBanda ) {
        $this->idCargoArtistaBanda = $idCargoArtistaBanda;
    }

    function setIdBanda( $idBanda ) {
        $this->idBanda = $idBanda;
    }

}

?>