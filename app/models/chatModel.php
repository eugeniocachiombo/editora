<?php
require_once '../app/config/db.php';

class ChatModel {

    private $idChat;
    private $idUtilizadorEmissor;
    private $idUtilizadorReceptor;
    private $textoChat;
    private $arquivoChat;

    function getIdChat() {
        return $this->idChat;
    }

    function getIdUtilizadorEmissor() {
        return $this->idUtilizadorEmissor;
    }

    function getIdUtilizadorReceptor() {
        return $this->idUtilizadorReceptor;
    }

    function getTextoChat() {
        return $this->textoChat;
    }

    function getArquivoChat() {
        return $this->arquivoChat;
    }

    function setIdChat( $idChat ) {
        $this->idChat = $idChat;
    }

    function setIdUtilizadorEmissor( $idUtilizadorEmissor ) {
        $this->idUtilizadorEmissor = $idUtilizadorEmissor;
    }

    function setIdUtilizadorReceptor( $idUtilizadorReceptor ) {
        $this->idUtilizadorReceptor = $idUtilizadorReceptor;
    }

    function setTextoChat( $textoChat ) {
        $this->textoChat = $textoChat;
    }

    function setArquivoChat( $arquivoChat ) {
        $this->arquivoChat = $arquivoChat;
    }

}

?>