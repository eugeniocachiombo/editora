<?php
require_once '../app/config/db.php';

class TipoAcessoModel {

    private $idTipoAcesso;
    private $descricaoTipoAcesso;

    function getIdTipoAcesso() {
        return $this->idTipoAcesso;
    }

    function getDescricaoTipoAcesso() {
        return $this->descricaoTipoAcesso;
    }

    function setIdTipoAcesso( $idTipoAcesso ) {
        $this->idTipoAcesso = $idTipoAcesso;
    }

    function setDescricaoTipoAcesso( $descricaoTipoAcesso ) {
        $this->descricaoTipoAcesso = $descricaoTipoAcesso;
    }

}

?>