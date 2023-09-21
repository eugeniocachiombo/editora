<?php
require_once '../app/interface/crud.php';
require_once '../app/models/enderecoModel.php';

class EnderecoDao extends EnderecoModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into Endereco (nomeEndereco, idMunicipio) values(?,?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getNomeEndereco() );
        $stmt->bindValue( 2, $this->getMunicipio() );

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
        $sql = 'select * from Endereco';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function BuscarPorMunicipio( $idMunicipio ) {
        $con = GetConexao();
        $sql = "select * from Endereco
            where idMunicipio = ?;";
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $idMunicipio );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {

    }

    function Eliminar() {

    }
}

?>