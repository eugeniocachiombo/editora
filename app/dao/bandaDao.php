<?php
require_once '../app/interface/crud.php';
require_once '../app/models/bandaModel.php';

class BandaDao extends BandaModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Banda (nomeBanda) values(?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeBanda() );

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
        $sql = 'select * from Banda order by nomeBanda asc;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = 'select * from Banda order by nomeBanda asc;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idBanda ) {
        $con = GetConexao();
        $sql = "select * from Banda
            where idBanda = ? order by nomeBanda asc;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idBanda );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from Banda;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Banda 
            order by idBanda desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Banda 
            where nomeBanda like '$palavra%'";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Banda 
            order by idBanda desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Banda 
            set nomeBanda = ?
            where idBanda = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeBanda() );
        $stmt->bindValue( 2, $this->getIdBanda() );

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
        $sql = 'delete from Banda where idBanda = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdBanda() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/Banda/Eliminar';
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