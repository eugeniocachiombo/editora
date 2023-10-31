<?php
require_once "../app/config/db.php"; 

// Obtenha o ID da província selecionada do POST
$idProvincia = $_POST['id_provincia'];

function BuscarPorProvincia($idProvincia){
  $con = GetConexao();
  $sql = "select * from Municipio
  where idProvincia = ? order by nomeMunicipio asc;";
  $stmt = $con->prepare($sql);
  $stmt->bindValue(1, $idProvincia);
  $stmt->execute();
  return $stmt->fetchAll();
}

// Converta o array em JSON e retorne a resposta
echo json_encode(BuscarPorProvincia($idProvincia));
?>