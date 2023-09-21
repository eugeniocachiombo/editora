<?php

class PedidoController {

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
                !empty( $_POST[ 'txtTituloPedido' ] ) &&
                !empty( $_POST[ 'txtDescricaoPedido' ] ) &&
                !empty( $_POST[ 'txtCargoPedido' ] ) &&
                !empty( $_POST[ 'txtIdUtilizador' ] )
            ) {
                $PedidoDao = new PedidoDao();
                $PedidoDao->setTituloPedido( $_POST[ 'txtTituloPedido' ] );
                $PedidoDao->setDescricaoPedido( $_POST[ 'txtDescricaoPedido' ] );
                $PedidoDao->setCargoPedido( $_POST[ 'txtCargoPedido' ] );
                $PedidoDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $PedidoDao->Cadastrar();
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script> 
                <?php
            }
        }
    }

    function Ajax( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function AjaxBuscarPedido( $nomePasta, $nomeController, $nomeMetodo ) {
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
        $dados[ 'title' ] =  'Registos de Pedidos';

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
                !empty( $_POST[ 'txtIdPedido' ] ) &&
                !empty( $_POST[ 'txtTituloPedido' ] ) &&
                !empty( $_POST[ 'txtDescricaoPedido' ] ) &&
                !empty( $_POST[ 'txtCargoPedido' ] ) &&
                !empty( $_POST[ 'txtIdUtilizador' ] )
            ) {

                $PedidoDao = new PedidoDao();
                $PedidoDao->setIdPedido( $_POST[ 'txtIdPedido' ] );
                $PedidoDao->setTituloPedido( $_POST[ 'txtTituloPedido' ] );
                $PedidoDao->setDescricaoPedido( $_POST[ 'txtDescricaoPedido' ] );
                $PedidoDao->setCargoPedido( $_POST[ 'txtCargoPedido' ] );
                $PedidoDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $PedidoDao->Actualizar();
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
            if ( !empty( $_POST[ 'txtIdPedido' ] ) ) {
                $PedidoDao = new PedidoDao();
                $PedidoDao->setIdPedido( $_POST[ 'txtIdPedido' ] );
                $PedidoDao->Eliminar();
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