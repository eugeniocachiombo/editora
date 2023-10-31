<?php

class Init {
    private $controllerPadrao = 'inicio';
    private $metodo = 'Index';
    private $parametro = [];

    function __construct() {
        $this->AutoRedirecionar();
        $this->PrepararURL();
    }

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

    function PrepararURL() {
        $url = $_SERVER[ 'REQUEST_URI' ];
        $url = explode( '/', $url );
        $url = array_values( array_filter( $url ) );

        if ( !empty( $url[ 0 ] ) && !empty( $url[ 1 ] ) ) {
            $this->BuscarMetodo( $url[ 0 ], $url[ 1 ] );
        } else if ( !empty( $url[ 0 ] ) ) {
            $this->BuscarController( $url[ 0 ] );
        } else {
            
            ?> <script>window.location = '/inicio/Index'</script><?php
        }

    }

    function BuscarController( $nomeController ) {
        if ( file_exists( '../app/controllers/'.$nomeController.'Controller.php' ) ) {
            $classe = ucfirst( $nomeController.'Controller' );
            $controller = new $classe;
        } else {
            $_SESSION[ 'error_info' ] = 'Controlador não encontrado ::: '.$nomeController;
            ?> <script>window.location = '/errorPageInfo.php'</script><?php
        }
    }

    function BuscarMetodo( $nomeController, $nomeMetodo ) {
        if ( file_exists( '../app/controllers/'.$nomeController.'Controller.php' ) ) {
            $classe = ucfirst( $nomeController.'Controller' );
            $controller = new $classe;
        }

        if ( method_exists( $controller, $nomeMetodo ) ) {
            $this->parametro[ 0 ] = $nomeController;
            $this->parametro[ 1 ] = $nomeController;
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

