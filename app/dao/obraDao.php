<?php
require_once '../app/interface/crud.php';
require_once '../app/models/obraModel.php';

class ObraDao extends ObraModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Obra (tituloObra, idArtista, generoObra, idEstilo, idAlbum, arquivoObra) values( ?, ?, ?, ?, ?, ?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->geTtituloObra() );
        $stmt->bindValue( 2, $this->getIdArtista() );
        $stmt->bindValue( 3, $this->getGeneroObra() );
        $stmt->bindValue( 4, $this->getIdEstilo() );
        $stmt->bindValue( 5, $this->getIdAlbum() );
        $stmt->bindValue( 6, $this->getArquivoObra() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Cadastro feito com sucesso!',
                'success'
            )
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro de cadastro!!',
                'error'
            )
            </script>
            <?php
        }
    }

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Obra;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from Obra;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Obra
            left outer join Estilo on Estilo.idEstilo = Obra.idEstilo
            left outer join Artista on Artista.idArtista = Obra.idArtista
            left outer join Utilizador on Artista.idUtilizador = Utilizador.idUtilizador
            left outer join Album on Album.idAlbum = Obra.idAlbum order by idObra desc limit 4";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Obra
            left outer join Estilo on Estilo.idEstilo = Obra.idEstilo
            left outer join Artista on Artista.idArtista = Obra.idArtista
            left outer join Utilizador on Artista.idUtilizador = Utilizador.idUtilizador
            left outer join Album on Album.idAlbum = Obra.idAlbum 
            order by idObra desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Obra
            left outer join Estilo on Estilo.idEstilo = Obra.idEstilo
            left outer join Artista on Artista.idArtista = Obra.idArtista
            left outer join Utilizador on Artista.idUtilizador = Utilizador.idUtilizador
            left outer join Album on Album.idAlbum = Obra.idAlbum 
            order by idObra desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Obra
            left outer join Estilo on Estilo.idEstilo = Obra.idEstilo
            left outer join Artista on Artista.idArtista = Obra.idArtista
            left outer join Utilizador on Artista.idUtilizador = Utilizador.idUtilizador
            left outer join Album on Album.idAlbum = Obra.idAlbum 
            where tituloObra like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idObra ) {
        $con = GetConexao();
        $sql = "select * from Obra
            left outer join Estilo on Estilo.idEstilo = Obra.idEstilo
            left outer join Artista on Artista.idArtista = Obra.idArtista
            left outer join Utilizador on Artista.idUtilizador = Utilizador.idUtilizador
            left outer join Album on Album.idAlbum = Obra.idAlbum
            where idObra = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idObra );
        $stmt->execute();
        return $stmt->fetch();
    }

    function Actualizar() {
        $arquivo = $this->getArquivoObra();

        if ( !empty( $arquivo ) ) {
            $con = GetConexao();
            $sql = "update Obra 
                 set 
                `tituloObra` = ?,
                `idArtista` = ?,
                `generoObra` = ?,
                `idEstilo` = ?,
                `idAlbum` = ?,
                `arquivoObra` = ?
                where idObra = ?";
            $stmt = $con->prepare( $sql );
            $stmt->bindValue( 1, $this->geTtituloObra() );
            $stmt->bindValue( 2, $this->getIdArtista() );
            $stmt->bindValue( 3, $this->getGeneroObra() );
            $stmt->bindValue( 4, $this->getIdEstilo() );
            $stmt->bindValue( 5, $this->getIdAlbum() );
            $stmt->bindValue( 6, $this->getArquivoObra() );
            $stmt->bindValue( 7, $this->getIdObra() );

            $obraDao = new ObraDao();
            $obra = $obraDao->BuscarTodosDadosID( $this->getIdObra() );
            $caminho = 'assets/tmp_file/'.$obra[ 'arquivoObra' ];

            if ( file_exists( $caminho ) ) {
                unlink( $caminho );
            } else {
                ?><script>Swal.fire( 'Erro!', 'Nenhum arquivo foi encontrado desta obra!!', 'error' );
                </script><?php }

                if ( $stmt->execute() ) {
                    ?>
                    <script>
                    Swal.fire(
                        'Sucesso!',
                        'Actualização feita com sucesso!',
                        'success'
                    )
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                    Swal.fire(
                        'Erro!',
                        'Erro ao actualizar!!',
                        'error'
                    )
                    </script>
                    <?php
                }

            } else {
                $con = GetConexao();
                $sql = "update Obra 
                set 
                `tituloObra` = ?,
                `idArtista` = ?,
                `generoObra` = ?,
                `idEstilo` = ?,
                `idAlbum` = ?
                where idObra = ?";
                $stmt = $con->prepare( $sql );
                $stmt->bindValue( 1, $this->geTtituloObra() );
                $stmt->bindValue( 2, $this->getIdArtista() );
                $stmt->bindValue( 3, $this->getGeneroObra() );
                $stmt->bindValue( 4, $this->getIdEstilo() );
                $stmt->bindValue( 5, $this->getIdAlbum() );
                $stmt->bindValue( 6, $this->getIdObra() );

                if ( $stmt->execute() ) {
                    ?>
                    <script>
                    Swal.fire(
                        'Sucesso!',
                        'Actualização feita com sucesso!',
                        'success'
                    )
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                    Swal.fire(
                        'Erro!',
                        'Erro ao actualizar!!',
                        'error'
                    )
                    </script>
                    <?php
                }
            }

        }

        function Eliminar() {
            $con = GetConexao();
            $sql = 'delete from Obra where idObra = ?';
            $stmt = $con->prepare( $sql );
            $stmt->bindValue( 1, $this->getIdObra() );

            if ( $stmt->execute() ) {
                ?>
                <script>
                Swal.fire(
                    'Sucesso!',
                    'Eliminado com sucesso!',
                    'success'
                );
                setTimeout( () => {
                    window.location = '/obra/Eliminar';
                }
                , 1000 );
                </script>
                <?php
            } else {
                ?>
                <script>
                Swal.fire(
                    'Erro!',
                    'Erro ao eliminar!!',
                    'error'
                )
                </script>
                <?php
            }
        }
    }

    ?>