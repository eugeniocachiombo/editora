<?php

class ChatController {

    function Index( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( 'Chat' );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Enviar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            
            if ( 
                !empty( $_POST[ 'textoChat' ] ) && 
                !empty( $_SESSION[ 'idUtilizador' ] ) && 
                !empty( $_SESSION[ 'idUtilizadorDestino' ] ) 
            ) {
                
                $ChatDao = new ChatDao();
                $ChatDao->setIdUtilizadorEmissor( $_SESSION[ 'idUtilizador' ] );
                $ChatDao->setIdUtilizadorReceptor( $_SESSION[ 'idUtilizadorDestino' ] );
                $ChatDao->setTextoChat( $_POST[ 'textoChat' ] );
                //$ChatDao->setarquivoChat( '' );
                $ChatDao->Cadastrar();

            } else {
                ?>
                    <script>
                        console.log( 'Erro ao selecionar dados no arquivo controller' );
                    </script>
                <?php
            }
        }
    }

    function Conversando( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );
    }

    function Eliminar( $nomePasta, $nomeController, $nomeMetodo ) {
        $nomeController = strval( $nomeController );
        $dados[ 'title' ] =  ucfirst( $nomeMetodo ) . ' ' . ucfirst( $nomeController );
        $dados[ 'nomeMetodo' ] = $nomeMetodo;
        $views = new Views();
        $views->Load( $nomePasta, $nomeMetodo, $dados );

        if ( isset( $_POST[ 'btnSubmit' ] ) ) {
            if ( !empty( $_POST[ 'idChat' ] ) ) {

                echo 'Saida: '.$_POST[ 'idChat' ];
                $ChatDao = new ChatDao();
                $ChatDao->setIdChat( $_POST[ 'idChat' ] );
                $ChatDao->Eliminar();

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

