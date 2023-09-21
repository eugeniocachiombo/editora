<?php

class UtilizadorController {

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
                !empty( $_POST[ 'txtNomeUtilizador' ] ) &&
                !empty( $_POST[ 'txtSobreNomeUtilizador' ] ) &&
                !empty( $_POST[ 'txtNomeArtisticoUtilizador' ] ) &&
                !empty( $_POST[ 'txtNIFUtilizador' ] ) &&
                !empty( $_POST[ 'txtEmailUtilizador' ] ) &&
                !empty( $_POST[ 'txtTelefoneUtilizador' ] ) &&
                !empty( $_POST[ 'txtPasseUtilizador' ] ) &&
                !empty( $_POST[ 'txtNacionalidadeUtilizador' ] ) &&
                !empty( $_POST[ 'txtdataNascimentoUtilizador' ] ) &&
                !empty( $_POST[ 'txtGeneroUtilizador' ] ) &&
                !empty( $_POST[ 'txtTipoAcessoUtilizador' ] ) &&
                !empty( $_POST[ 'txtProvinciaUtilizador' ] ) &&
                !empty( $_POST[ 'txtMunicipioUtilizador' ] ) &&
                !empty( $_POST[ 'txtEnderecoUtilizador' ] )
            ) {

                $dataNascimento = explode( '-', $_POST[ 'txtdataNascimentoUtilizador' ] );
                $dataNascimento = $dataNascimento[ 2 ].'/'.$dataNascimento[ 1 ].'/'.$dataNascimento[ 0 ];

                $utilizadorDao = new utilizadorDao();
                $utilizadorDao->setNomeUtilizador( $_POST[ 'txtNomeUtilizador' ] );
                $utilizadorDao->setSobrenomeUtilizador( $_POST[ 'txtSobreNomeUtilizador' ] );
                $utilizadorDao->setNomeArtisticoUtilizador( $_POST[ 'txtNomeArtisticoUtilizador' ] );
                $utilizadorDao->setNIFUtilizador( $_POST[ 'txtNIFUtilizador' ] );
                $utilizadorDao->setEmailUtilizador( $_POST[ 'txtEmailUtilizador' ] );
                $utilizadorDao->setTelefoneUtilizador( $_POST[ 'txtTelefoneUtilizador' ] );
                $utilizadorDao->setSenhaUtilizador( $_POST[ 'txtPasseUtilizador' ] );
                $utilizadorDao->setNacionalidadeUtilizador( $_POST[ 'txtNacionalidadeUtilizador' ] );
                $utilizadorDao->setDataNascimentoUtilizador( $dataNascimento );
                $utilizadorDao->setGeneroUtilizador( $_POST[ 'txtGeneroUtilizador' ] );
                $utilizadorDao->setIdTipoAcesso( $_POST[ 'txtTipoAcessoUtilizador' ] );
                $utilizadorDao->setIdProvincia( $_POST[ 'txtProvinciaUtilizador' ] );
                $utilizadorDao->setIdMunicipio( $_POST[ 'txtMunicipioUtilizador' ] );
                $utilizadorDao->setEndereco( $_POST[ 'txtEnderecoUtilizador' ] );
                $utilizadorDao->Cadastrar();
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

    function AjaxBuscarUtilizador( $nomePasta, $nomeController, $nomeMetodo ) {
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
        $dados[ 'title' ] =  'Registos de Utilizadores';
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
                !empty( $_POST[ 'txtIdUtilizador' ] ) &&
                !empty( $_POST[ 'txtNomeUtilizador' ] ) &&
                !empty( $_POST[ 'txtSobreNomeUtilizador' ] ) &&
                !empty( $_POST[ 'txtNomeArtisticoUtilizador' ] ) &&
                !empty( $_POST[ 'txtNIFUtilizador' ] ) &&
                !empty( $_POST[ 'txtEmailUtilizador' ] ) &&
                !empty( $_POST[ 'txtTelefoneUtilizador' ] ) &&
                !empty( $_POST[ 'txtPasseUtilizador' ] ) &&
                !empty( $_POST[ 'txtNacionalidadeUtilizador' ] ) &&
                !empty( $_POST[ 'txtdataNascimentoUtilizador' ] ) &&
                !empty( $_POST[ 'txtGeneroUtilizador' ] ) &&
                !empty( $_POST[ 'txtTipoAcessoUtilizador' ] ) &&
                !empty( $_POST[ 'txtProvinciaUtilizador' ] ) &&
                !empty( $_POST[ 'txtMunicipioUtilizador' ] ) &&
                !empty( $_POST[ 'txtEnderecoUtilizador' ] )
            ) {

                $dataNascimento = explode( '-', $_POST[ 'txtdataNascimentoUtilizador' ] );
                $dataNascimento = $dataNascimento[ 2 ].'/'.$dataNascimento[ 1 ].'/'.$dataNascimento[ 0 ];

                $utilizadorDao = new utilizadorDao();
                $utilizadorDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $utilizadorDao->setNomeUtilizador( $_POST[ 'txtNomeUtilizador' ] );
                $utilizadorDao->setSobrenomeUtilizador( $_POST[ 'txtSobreNomeUtilizador' ] );
                $utilizadorDao->setNomeArtisticoUtilizador( $_POST[ 'txtNomeArtisticoUtilizador' ] );
                $utilizadorDao->setNIFUtilizador( $_POST[ 'txtNIFUtilizador' ] );
                $utilizadorDao->setEmailUtilizador( $_POST[ 'txtEmailUtilizador' ] );
                $utilizadorDao->setTelefoneUtilizador( $_POST[ 'txtTelefoneUtilizador' ] );
                $utilizadorDao->setSenhaUtilizador( $_POST[ 'txtPasseUtilizador' ] );
                $utilizadorDao->setNacionalidadeUtilizador( $_POST[ 'txtNacionalidadeUtilizador' ] );
                $utilizadorDao->setDataNascimentoUtilizador( $dataNascimento );
                $utilizadorDao->setGeneroUtilizador( $_POST[ 'txtGeneroUtilizador' ] );
                $utilizadorDao->setIdTipoAcesso( $_POST[ 'txtTipoAcessoUtilizador' ] );
                $utilizadorDao->setIdProvincia( $_POST[ 'txtProvinciaUtilizador' ] );
                $utilizadorDao->setIdMunicipio( $_POST[ 'txtMunicipioUtilizador' ] );
                $utilizadorDao->setEndereco( $_POST[ 'txtEnderecoUtilizador' ] );
                $utilizadorDao->Actualizar();
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
            if ( !empty( $_POST[ 'txtIdUtilizador' ] ) ) {
                $utilizadorDao = new utilizadorDao();
                $utilizadorDao->setIdUtilizador( $_POST[ 'txtIdUtilizador' ] );
                $utilizadorDao->Eliminar();
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