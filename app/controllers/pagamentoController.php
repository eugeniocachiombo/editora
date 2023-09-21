<?php

class PagamentoController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] = ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeController, $dados );
    }

    function Cadastrar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdArtista' ] ) &&
                !empty( $_POST[ 'txtIdUtilizadorGerente' ] ) &&
                !empty( $_POST[ 'txtDescricaoPagamento' ] ) &&
                !empty( $_POST[ 'txtValorPagamento' ] ) &&
                !empty( $_POST[ 'txtDataPagamento' ] )
            ) {

                $dataPagamento = explode( '-', $_POST[ 'txtDataPagamento' ] );
                $dataPagamento = $dataPagamento[ 2 ].'/'.$dataPagamento[ 1 ].'/'.$dataPagamento[ 0 ];

                $pagamentoDao = new PagamentoDao();
                $pagamentoDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
                $pagamentoDao->setIdUtilizadorGerente( $_POST[ 'txtIdUtilizadorGerente' ] );
                $pagamentoDao->setDescricaoPagamento( $_POST[ 'txtDescricaoPagamento' ] );
                $pagamentoDao->setValorPagamento( $_POST[ 'txtValorPagamento' ] );
                $pagamentoDao->setDataPagamento( $dataPagamento );
                $pagamentoDao->Cadastrar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarPagamento( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function AjaxPaginar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Álbum' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Buscar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  'Registos de Pagamentos';
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Actualizar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if (
                !empty( $_POST[ 'txtIdPagamento' ] ) &&
                !empty( $_POST[ 'txtIdPagamento' ] ) &&
                !empty( $_POST[ 'txtIdArtista' ] ) &&
                !empty( $_POST[ 'txtIdUtilizadorGerente' ] ) &&
                !empty( $_POST[ 'txtDescricaoPagamento' ] ) &&
                !empty( $_POST[ 'txtValorPagamento' ] ) &&
                !empty( $_POST[ 'txtDataPagamento' ] )
            ) {

                $dataPagamento = explode( '-', $_POST[ 'txtDataPagamento' ] );
                $dataPagamento = $dataPagamento[ 2 ].'/'.$dataPagamento[ 1 ].'/'.$dataPagamento[ 0 ];

                $pagamentoDao = new PagamentoDao();
                $pagamentoDao->setIdPagamento( $_POST[ 'txtIdPagamento' ] );
                $pagamentoDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
                $pagamentoDao->setIdUtilizadorGerente( $_POST[ 'txtIdUtilizadorGerente' ] );
                $pagamentoDao->setDescricaoPagamento( $_POST[ 'txtDescricaoPagamento' ] );
                $pagamentoDao->setValorPagamento( $_POST[ 'txtValorPagamento' ] );
                $pagamentoDao->setDataPagamento( $dataPagamento );
                $pagamentoDao->Actualizar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function Eliminar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'txtIdPagamento' ] ) ) {
                $pagamentoDao = new PagamentoDao();
                $pagamentoDao->setIdPagamento( $_POST[ 'txtIdPagamento' ] );
                $pagamentoDao->Eliminar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

}

?>