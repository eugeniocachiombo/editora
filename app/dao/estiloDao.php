<?php
require_once '../app/interface/crud.php';
require_once '../app/models/estiloModel.php';

class EstiloDao extends EstiloModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Estilo (nomeEstilo) values(?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeEstilo() );

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
        $sql = 'select * from Estilo order by nomeEstilo asc;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDados() {
        $con = GetConexao();
        $sql = 'select * from Estilo order by nomeEstilo asc;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idEstilo ) {
        $con = GetConexao();
        $sql = "select * from Estilo
            where idEstilo = ? order by nomeEstilo asc;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idEstilo );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarTotal() {
        $con = GetConexao();
        $sql = 'select count(*) from Estilo;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetch();
    }

    function BuscarPorLimite( $pagina, $itensPorPagina ) {
        $con = GetConexao();
        $sql = "select * from Estilo
            order by idEstilo desc limit $pagina, $itensPorPagina";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorPalavra( $palavra ) {
        $con = GetConexao();
        $sql = "select * from Estilo  
            where nomeEstilo like '$palavra%' ";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarLimitado() {
        $con = GetConexao();
        $sql = "select * from Estilo 
            order by idEstilo desc limit 10";
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Estilo 
            set nomeEstilo = ?
            where idEstilo = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeEstilo() );
        $stmt->bindValue( 2, $this->getIdEstilo() );

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
        $sql = 'delete from Estilo where idEstilo = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdEstilo() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/estilo/Eliminar';
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