<?php

/**
* Class Responsável pela exibição dos arquivos
*/

class Views {
    function Load( $pasta_view, $nome_view, $dados ) {
        // ARQUIVOS
        $arquivo = '../app/views/'.lcfirst( $nome_view ).'View.php';
        $pasta = '../app/views/'.lcfirst( $pasta_view ).'/'.lcfirst( $nome_view ).'View.php';
        $paginacao = '../app/views/'.lcfirst( $pasta_view ).'/'.'paginacao'.'/'.lcfirst( $nome_view ).'View.php';
        $ajax = '../app/views/'.lcfirst( $pasta_view ).'/'.'ajax'.'/'.lcfirst( $nome_view ).'View.php';

        if ( file_exists( $arquivo ) ) {
            extract( $dados );
            ob_start();
            require_once $arquivo;
            ob_end_flush();
        } else if ( file_exists( $pasta ) ) {
            // PASTAS
            extract( $dados );
            ob_start();
            require_once $pasta;
            ob_end_flush();
        } else if ( file_exists( $paginacao ) ) {
            // PASTAS
            extract( $dados );
            ob_start();
            require_once $paginacao;
            ob_end_flush();
        } else if ( file_exists( $ajax ) ) {
            // PASTAS
            extract( $dados );
            ob_start();
            require_once $ajax;
            ob_end_flush();
        } else {
            $_SESSION[ 'error_info' ] = 'Página Invalida';
            ?> 
                <script>
                    window.location = '/errorPageInfo.php';
                </script>
            <?php
        }
    }
}

