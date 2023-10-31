<?php
require_once '../app/interface/crud.php';
require_once '../app/models/cargoArtistaBandaModel.php';

class CargoArtistaBandaDao extends CargoArtistaBandaModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into CargoArtistaBanda (descricaoCargoArtistaBanda, idBanda) values(?,?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getDescricaoCargoArtistaBanda() );
        $stmt->bindValue( 2, $this->getIdBanda() );

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
        $sql = 'select * from CargoArtistaBanda order by descricaoCargoArtistaBanda asc';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorBanda( $idBanda ) {
        $con = GetConexao();
        $sql = "select * from CargoArtistaBanda
            where idBanda = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idBanda );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = "select * from CargoArtistaBanda 
            left outer join Banda 
            on Banda.idBanda = CargoArtistaBanda.idBanda
            order by nomeBanda asc
            ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idCargoArtistaBanda ) {
        $con = GetConexao();
        $sql = "select * from CargoArtistaBanda 
            left outer join Banda on Banda.idBanda = CargoArtistaBanda.idBanda
            where idCargoArtistaBanda = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idCargoArtistaBanda );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from CargoArtistaBanda;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from CargoArtistaBanda 
            left outer join Banda on Banda.idBanda = CargoArtistaBanda.idBanda
            order by descricaoCargoArtistaBanda asc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from CargoArtistaBanda 
            left outer join Banda on Banda.idBanda = CargoArtistaBanda.idBanda
            where descricaoCargoArtistaBanda like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from CargoArtistaBanda
            left outer join Banda on Banda.idBanda = CargoArtistaBanda.idBanda
            order by descricaoCargoArtistaBanda asc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = 'update CargoArtistaBanda set descricaoCargoArtistaBanda=?, idBanda=? where idCargoArtistaBanda = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getDescricaoCargoArtistaBanda() );
        $stmt->bindValue( 2, $this->getIdBanda() );
        $stmt->bindValue( 3, $this->getIdCargoArtistaBanda() );

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
        $sql = 'delete from CargoArtistaBanda where idCargoArtistaBanda = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdCargoArtistaBanda() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/CargoArtistaBanda/Eliminar';
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