<?php
    require_once "../app/interface/crud.php";
    require_once "../app/models/nacionalidadeModel.php";

    class NacionalidadeDao extends NacionalidadeModel implements Crud
    {
        
        function Cadastrar(){
            $con = GetConexao();
            $sql = "insert into Nacionalidade (nomePais, valorNacionalidade) values(?,?);";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $this->getNomePais());
            $stmt->bindValue(2, $this->getValorNacionalidade());

            if ($stmt->execute()) {  
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
     
        function Buscar(){
            $con = GetConexao();
            $sql = "select * from Nacionalidade order by nomePais asc";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        function BuscarTodosDados(){
            $con = GetConexao();
            $sql = "select * from Nacionalidade order by nomePais asc";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        function BuscarTodosDadosID($idNacionalidade){
            $con = GetConexao();
            $sql = "select * from Nacionalidade 
            where idNacionalidade = ? order by nomePais asc;";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $idNacionalidade);
            $stmt->execute();
            return $stmt->fetch();
        }
     
        function Actualizar(){
            $con = GetConexao();
            $sql = "update Nacionalidade set nomePais=?, valorNacionalidade=? where idNacionalidade = ?";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $this->getNomePais());
            $stmt->bindValue(2, $this->getValorNacionalidade());
            $stmt->bindValue(3, $this->getIdNacionalidade());

            if ($stmt->execute()) {
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
     
        function Eliminar(){
            $con = GetConexao();
            $sql = "delete from Nacionalidade where idNacionalidade = ?";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $this->getIdNacionalidade());

            if ($stmt->execute()) {
                ?> 
                <script>
                 Swal.fire(
                 'Sucesso!',
                 'Eliminado com sucesso!',
                 'success'
                 );
                 setTimeout(() => {
                     window.location = "/nacionalidade/Eliminar";
                 }, 1000);
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