<?php

require_once '../app/interface/crud.php';
require_once '../app/models/provinciaModel.php';

class ProvinciaDao extends ProvinciaModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Provincia (nomeProvincia) values(?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeProvincia() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Cadastro feito com sucesso!',
                'success'
            );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro de cadastro!!',
                'error'
            );
            </script>
            <?php
        }

    }

    function Buscar() {
        $con = GetConexao();
        $sql = 'select * from Provincia order by nomeProvincia asc;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarTodosDadosID( $idProvincia ) {
        $con = GetConexao();
        $sql = "select * from Provincia
                where idProvincia = ? order by nomeProvincia asc;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idProvincia );
        $stmt->execute();
        return $stmt->fetch();
    }

    function Actualizar() {
        $con = GetConexao();
        $sql = "update Provincia 
                set nomeProvincia = ?
                where idProvincia = ?";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeProvincia() );
        $stmt->bindValue( 2, $this->getIdProvincia() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Actualização feita com sucesso!',
                'success'
            );
            </script>
            <?php
        } else {
            ?>
            <script>
            Swal.fire(
                'Erro!',
                'Erro ao actualizar!!',
                'error'
            );
            </script>
            <?php
        }
    }

    function Eliminar() {
        $con = GetConexao();
        $sql = 'delete from Provincia where idProvincia = ?';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getIdProvincia() );

        if ( $stmt->execute() ) {
            ?>
            <script>
            Swal.fire(
                'Sucesso!',
                'Eliminado com sucesso!',
                'success'
            );
            setTimeout( () => {
                window.location = '/provincia/Eliminar';
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
            );
            </script>
            <?php
        }
    }
}
?>