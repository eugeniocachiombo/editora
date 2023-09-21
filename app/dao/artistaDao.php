<?php
require_once '../app/interface/crud.php';
require_once '../app/models/artistaModel.php';

class ArtistaDao extends ArtistaModel implements Crud
 {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Artista (idUtilizador, idCargoArtista, idBanda, idCargoArtistaBanda) values (?,?,?,?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdUtilizador() );
        $stmt->bindValue( 2, $this->getIdCargoArtista() );
        $stmt->bindValue( 3, $this->getIdBanda() );
        $stmt->bindValue( 4, $this->getIdCargoArtistaBanda() );

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
        $sql = 'select * from Artista;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from Artista 
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            left outer join CargoArtista on CargoArtista.idCargoArtista = Artista.idCargoArtista
            left outer join Banda on Banda.idBanda = Artista.idBanda
            left outer join CargoArtistaBanda on CargoArtistaBanda.idCargoArtistaBanda = Artista.idCargoArtistaBanda
            order by nomeUtilizador asc";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idArtista ) {
        $con = GetConexao();
        $sql = "select * from Artista 
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            left outer join CargoArtista on CargoArtista.idCargoArtista = Artista.idCargoArtista
            left outer join Banda on Banda.idBanda = Artista.idBanda
            left outer join CargoArtistaBanda on CargoArtistaBanda.idCargoArtistaBanda = Artista.idCargoArtistaBanda
            where idArtista = ? order by nomeUtilizador asc;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idArtista );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from Artista;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Artista 
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            left outer join CargoArtista on CargoArtista.idCargoArtista = Artista.idCargoArtista
            left outer join Banda on Banda.idBanda = Artista.idBanda
            left outer join CargoArtistaBanda on CargoArtistaBanda.idCargoArtistaBanda = Artista.idCargoArtistaBanda
            order by idArtista desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Artista 
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            left outer join CargoArtista on CargoArtista.idCargoArtista = Artista.idCargoArtista
            left outer join Banda on Banda.idBanda = Artista.idBanda
            left outer join CargoArtistaBanda on CargoArtistaBanda.idCargoArtistaBanda = Artista.idCargoArtistaBanda
            where nomeArtisticoUtilizador like '$palavra%' or descricaoCargoArtista like '%$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Artista 
            left outer join Utilizador on Utilizador.idUtilizador = Artista.idUtilizador
            left outer join CargoArtista on CargoArtista.idCargoArtista = Artista.idCargoArtista
            left outer join Banda on Banda.idBanda = Artista.idBanda
            left outer join CargoArtistaBanda on CargoArtistaBanda.idCargoArtistaBanda = Artista.idCargoArtistaBanda
            order by idArtista desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Artista set
            idUtilizador=?, idCargoArtista=?, idBanda=?, idCargoArtistaBanda=? 
            where idArtista = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdUtilizador() );
        $stmt->bindValue( 2, $this->getIdCargoArtista() );
        $stmt->bindValue( 3, $this->getIdBanda() );
        $stmt->bindValue( 4, $this->getIdCargoArtistaBanda() );
        $stmt->bindValue( 5, $this->getIdArtista() );

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

    function Eliminar() {
        $con = GetConexao();
        $sql = 'delete from Artista where idArtista = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdArtista() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/Artista/Eliminar';
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