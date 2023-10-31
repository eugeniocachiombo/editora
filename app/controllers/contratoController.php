<?php

class ContratoController {

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
                !empty( $_POST[ 'txtIdUtilizador' ] ) &&
                !empty( $_POST[ 'txtTipoContrato' ] ) &&
                !empty( $_POST[ 'txtDescricaoContrato' ] ) &&
                !empty( $_POST[ 'txtDataInicialContrato' ] ) &&
                !empty( $_POST[ 'txtDataFinalContrato' ] ) &&
                !empty( $_POST[ 'txtEstadoContrato' ] )
            ) {

                $dataInicialContrato = explode( '-', $_POST[ 'txtDataInicialContrato' ] );
                $dataInicialContrato = $dataInicialContrato[ 2 ].'/'.$dataInicialContrato[ 1 ].'/'.$dataInicialContrato[ 0 ];

                $dataFinalContrato = explode( '-', $_POST[ 'txtDataFinalContrato' ] );
                $dataFinalContrato = $dataFinalContrato[ 2 ].'/'.$dataFinalContrato[ 1 ].'/'.$dataFinalContrato[ 0 ];

                $contratoDao = new ContratoDao();
                $contratoDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $contratoDao->setTipoContrato( $_POST[ 'txtTipoContrato' ] );
                $contratoDao->setDescricaoContrato( $_POST[ 'txtDescricaoContrato' ] );
                $contratoDao->setDataInicialContrato( $dataInicialContrato );
                $contratoDao->setDataFinalContrato( $dataFinalContrato );
                $contratoDao->setEstadoContrato( $_POST[ 'txtEstadoContrato' ] );
                $contratoDao->Cadastrar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function AjaxBuscarContrato( $nomePasta, $nomeController, $nomeMetodo ) {
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
        $dados[ 'title' ] =  'Registos de Contratos';
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
                !empty( $_POST[ 'txtIdContrato' ] ) &&
                !empty( $_POST[ 'txtIdContrato' ] ) &&
                !empty( $_POST[ 'txtIdUtilizador' ] ) &&
                !empty( $_POST[ 'txtTipoContrato' ] ) &&
                !empty( $_POST[ 'txtDescricaoContrato' ] ) &&
                !empty( $_POST[ 'txtDataInicialContrato' ] ) &&
                !empty( $_POST[ 'txtDataFinalContrato' ] ) &&
                !empty( $_POST[ 'txtEstadoContrato' ] )
            ) {

                $dataInicialContrato = explode( '-', $_POST[ 'txtDataInicialContrato' ] );
                $dataInicialContrato = $dataInicialContrato[ 2 ].'/'.$dataInicialContrato[ 1 ].'/'.$dataInicialContrato[ 0 ];

                $dataFinalContrato = explode( '-', $_POST[ 'txtDataFinalContrato' ] );
                $dataFinalContrato = $dataFinalContrato[ 2 ].'/'.$dataFinalContrato[ 1 ].'/'.$dataFinalContrato[ 0 ];

                $contratoDao = new ContratoDao();
                $contratoDao->setIdContrato( $_POST[ 'txtIdContrato' ] );
                $contratoDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $contratoDao->setTipoContrato( $_POST[ 'txtTipoContrato' ] );
                $contratoDao->setDescricaoContrato( $_POST[ 'txtDescricaoContrato' ] );
                $contratoDao->setDataInicialContrato( $dataInicialContrato );
                $contratoDao->setDataFinalContrato( $dataFinalContrato );
                $contratoDao->setEstadoContrato( $_POST[ 'txtEstadoContrato' ] );
                $contratoDao->Actualizar();
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
            if ( !empty( $_POST[ 'txtIdContrato' ] ) ) {
                $contratoDao = new ContratoDao();
                $contratoDao->setIdContrato( $_POST[ 'txtIdContrato' ] );
                $contratoDao->Eliminar();
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