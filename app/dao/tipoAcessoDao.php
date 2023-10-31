<?php
require_once '../app/interface/crud.php';
require_once '../app/models/tipoAcessoModel.php';

class TipoAcessoDao extends TipoAcessoModel implements Crud {

    function Cadastrar() {
        $con = GetConexao();
        $sql = 'insert into TipoAcesso (descricaoTipoAcesso) values(?);';
        $stmt = $con->prepare( $sql );
        $stmt->bindValue( 1, $this->getDescricaoTipoAcesso() );

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
        $sql = 'select * from TipoAcesso order by descricaoTipoAcesso asc;';
        $stmt = $con->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Actualizar() {

    }

    function Eliminar() {

    }
}

?>