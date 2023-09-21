<?php
require_once '../app/config/db.php';

class NotificacaoModel {

    private $idNotificacao;
    private $textoNotificacao;
    private $idTipoAcesso;

    function getIdTipoAcesso() {
        return $this->idTipoAcesso;
    }

    function setIdTipoAcesso( $idTipoAcesso ) {
        $this->idTipoAcesso = $idTipoAcesso;
    }

    function getIdNotificacao() {
        return $this->idNotificacao;
    }

    function getTextoNotificacao() {
        return $this->textoNotificacao;
    }

    function setIdNotificacao( $idNotificacao ) {
        $this->idNotificacao = $idNotificacao;
    }

    function setTextoNotificacao( $textoNotificacao ) {
        $this->textoNotificacao = $textoNotificacao;
    }

}

?>