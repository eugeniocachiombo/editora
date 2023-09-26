<?php

class Init {
    private $controllerPadrao = 'inicio';
    private $metodo = 'Index';
    private $parametro = [];

    function __construct() {
        $this->AutoRedirecionar();
        $this->PrepararURL();
    }

    // VERIFICAR AUTO-REDIRECIONAMENTO

    function AutoRedirecionar() {
        $url = $_SERVER[ 'REQUEST_URI' ];

        if ( $url == '/inicio' || $url == '/inicio/' ) {
            ?> <script>window.location = '/inicio/Index'</script><?php
        }

        if ( $url == '/login' || $url == '/login/' ) {
            ?> <script>window.location = '/login/Index'</script><?php
        }

        if ( $url == '/painel' || $url == '/painel/' ) {
            ?> <script>window.location = '/painel/Index'</script><?php
        }
    }

    // VERIFICAR O CONTROLLER

    function PrepararURL() {

        $url = $_SERVER[ 'REQUEST_URI' ];

        $url = explode( '/', $url );

        $url = array_values( array_filter( $url ) );

        // CHAMAR METODO
        if ( !empty( $url[ 0 ] ) && !empty( $url[ 1 ] ) ) {
            $this->BuscarMetodo( $url[ 0 ], $url[ 1 ] );
        } else // CHAMAR CONTROLLER
        if ( !empty( $url[ 0 ] ) ) {
            $this->BuscarController( $url[ 0 ] );
        } else {
            // $this->BuscarController( 'inicio' );
            ?> <script>window.location = '/inicio/Index'</script><?php
        }

    }

    // VERIFICAR O CONTROLLER

    function BuscarController( $nomeController ) {
        if ( file_exists( '../app/controllers/'.$nomeController.'Controller.php' ) ) {
            $classe = ucfirst( $nomeController.'Controller' );
            $controller = new $classe;
        } else {
            $_SESSION[ 'error_info' ] = 'Controlador não encontrado ::: '.$nomeController;
            ?> <script>window.location = '/errorPageInfo.php'</script><?php
        }
    }

    // VERIFICAR O METODO

    function BuscarMetodo( $nomeController, $nomeMetodo ) {

        if ( file_exists( '../app/controllers/'.$nomeController.'Controller.php' ) ) {
            $classe = ucfirst( $nomeController.'Controller' );
            $controller = new $classe;
        }

        if ( method_exists( $controller, $nomeMetodo ) ) {
            // Para simbolizar o nome da pasta
            $this->parametro[ 0 ] = $nomeController;
            // Para simbolizar o nome do contoller
            $this->parametro[ 1 ] = $nomeController;
            // Para simbolizar o nome do método
            $this->parametro[ 2 ] = $nomeMetodo;
            call_user_func_array( [ $controller, $nomeMetodo ], $this->parametro );
        } else {
            $_SESSION[ 'error_info' ] = 'Método do Controlador não encontrado ::: '.$nomeMetodo;
            ?>
                <script>
                    window.location = '/errorPageInfo.php';
                </script>
            <?php
        }
    }

}
?>

