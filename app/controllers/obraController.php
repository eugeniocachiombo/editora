<?php

class ObraController {

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
                !empty( $_POST[ 'txtTituloObra' ] ) &&
                !empty( $_POST[ 'txtIdArtista' ] ) &&
                !empty( $_POST[ 'txtGeneroObra' ] ) &&
                !empty( $_POST[ 'txtIdEstilo' ] ) &&
                !empty( $_POST[ 'txtIdAlbum' ] )
            ) {
                if ( empty( $_FILES[ 'fileArquivoObra' ][ 'name' ] ) ) {
                    ?> 
                      <script>
                        Swal.fire( 'Erro!', 'Nenhum arquivo foi inserido!!', 'error' );
                      </script>
                    <?php
                } else {
                    $this->TratamentoArquivoCadastrar();
                }
            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script>
                <?php
            }
        }
    }

    function AjaxBuscarObra( $nomePasta, $nomeController, $nomeMetodo ) {
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
        $dados[ 'title' ] =  'Registos de Obras';
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
                !empty( $_POST[ 'txtIdObra' ] ) &&
                !empty( $_POST[ 'txtTituloObra' ] ) &&
                !empty( $_POST[ 'txtIdArtista' ] ) &&
                !empty( $_POST[ 'txtGeneroObra' ] ) &&
                !empty( $_POST[ 'txtIdEstilo' ] ) &&
                !empty( $_POST[ 'txtIdAlbum' ] )
            ) {
                if ( empty( $_FILES[ 'fileArquivoObra' ][ 'name' ] ) ) {
                    $this->InserirDados();
                } else {
                    $this->TratamentoArquivoActualizar();
                }
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

            if ( !empty( $_POST[ 'txtIdObra' ] ) ) {
                $obraDao = new ObraDao();
                $obraDao->setIdObra( $_POST[ 'txtIdObra' ] );
                $obra = $obraDao->BuscarTodosDadosID( $_POST[ 'txtIdObra' ] );
                $caminho = 'assets/tmp_file/'.$obra[ 'arquivoObra' ];

                if ( file_exists( $caminho ) ) {
                    unlink( $caminho );
                    $obraDao->Eliminar();
                } else {
                    ?>
                      <script>
                        Swal.fire( 'Erro!', 'Nenhum arquivo foi encontrado desta obra!!', 'error' );
                      </script>
                    <?php
                }

            } else {
                ?>
                  <script>
                    console.log( 'Erro ao selecionar dados no arquivo controller' );
                  </script>
                <?php
            }
        }
    }

    /**
    * As funções abaixo são complementares para avitar certas confusões nos códigos
    */

    function InserirDados() {
        $obraDao = new ObraDao();

        if ( !empty( $_POST[ 'txtIdObra' ] ) ) {
            $obraDao->setIdObra( $_POST[ 'txtIdObra' ] );
        }

        $obraDao->setTituloObra( $_POST[ 'txtTituloObra' ] );
        $obraDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
        $obraDao->setGeneroObra( $_POST[ 'txtGeneroObra' ] );
        $obraDao->setIdEstilo( $_POST[ 'txtIdEstilo' ] );
        
        if ( isset( $_POST[ 'txtIdAlbum' ] ) ) {
            $obraDao->setIdAlbum( $_POST[ 'txtIdAlbum' ] );
        }

        $obraDao->Actualizar();
    }

    function TratamentoArquivoActualizar() {
        $nomeArquivo = $_FILES[ 'fileArquivoObra' ][ 'name' ];
        $nomeTemporarioAqruivo = $_FILES[ 'fileArquivoObra' ][ 'tmp_name' ];
        $destino = 'assets/tmp_file/'.$nomeArquivo;
        $arquivoTratado = explode( '.', $nomeArquivo );
        $extensao = $arquivoTratado[ 1 ];
        $totalCarateres = 0;

        foreach ( $arquivoTratado as $value ) {
            $totalCarateres++;
        }

        if ( $extensao == 'mp3' || $extensao == 'wave' ) {
            $obraDao = new ObraDao();
            $obraDao->setIdObra( $_POST[ 'txtIdObra' ] );
            $obraDao->setTituloObra( $_POST[ 'txtTituloObra' ] );
            $obraDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
            $obraDao->setGeneroObra( $_POST[ 'txtGeneroObra' ] );
            $obraDao->setIdEstilo( $_POST[ 'txtIdEstilo' ] );
            
            if ( isset( $_POST[ 'txtIdAlbum' ] ) ) {
                $obraDao->setIdAlbum( $_POST[ 'txtIdAlbum' ] );
            }
            
            if ( move_uploaded_file( $nomeTemporarioAqruivo, $destino ) ) {
                $obraDao->setArquivoObra( $nomeArquivo );
                $obraDao->Actualizar();
            }

        } else {
            ?> 
              <script>
                Swal.fire( 'Erro!', 'Formato de Arquivo Errado (Somente arquivos mp3 ou wave)!!', 'error' );
              </script>
            <?php
        }
    }

    function TratamentoArquivoCadastrar() {
        $nomeArquivo = uniqid().'_'.$_FILES[ 'fileArquivoObra' ][ 'name' ];
        $nomeTemporarioAqruivo = $_FILES[ 'fileArquivoObra' ][ 'tmp_name' ];
        $destino = 'assets/tmp_file/'.$nomeArquivo;
        $arquivoTratado = explode( '.', $nomeArquivo );
        $extensao = $arquivoTratado[ 1 ];
        $totalCarateres = 0;

        foreach ( $arquivoTratado as $value ) {
            $totalCarateres++;
        }

        if ( $extensao == 'mp3' || $extensao == 'wave' ) {

            $obraDao = new ObraDao();
            $obraDao->setTituloObra( $_POST[ 'txtTituloObra' ] );
            $obraDao->setIdArtista( $_POST[ 'txtIdArtista' ] );
            $obraDao->setGeneroObra( $_POST[ 'txtGeneroObra' ] );
            $obraDao->setIdEstilo( $_POST[ 'txtIdEstilo' ] );

            if ( isset( $_POST[ 'txtIdAlbum' ] ) ) {
                $obraDao->setIdAlbum( $_POST[ 'txtIdAlbum' ] );
            }

            if ( move_uploaded_file( $nomeTemporarioAqruivo, $destino ) ) {
                $obraDao->setArquivoObra( $nomeArquivo );
                $obraDao->Cadastrar();
            }

        } else {
            ?> 
              <script>
                Swal.fire( 'Erro!', 'Formato de Arquivo Errado (Somente arquivos mp3 ou wave)!!', 'error' );
              </script>
            <?php
        }
    }

}

?>