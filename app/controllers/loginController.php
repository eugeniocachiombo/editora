<?php

class LoginController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnLogar' ] ) ) {
            $this->Logar();
        }
    }

    function Logar() {
        // AUTENTICAÇÃO
        $txtEmailTel = $_POST[ 'txtEmailTel' ];
        $txtPasse = $_POST[ 'txtPasse' ];
        $utilizador = new UtilizadorDao();

        if ( intval( $txtEmailTel ) == 0 ) {
            $utilizador->LogarEmailSenha( $txtEmailTel, $txtPasse );
        } else {
            $utilizador->LogarTelefoneSenha( $txtEmailTel, $txtPasse );
        }
    }

}

?>