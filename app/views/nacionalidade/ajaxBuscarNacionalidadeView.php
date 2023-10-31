<?php
require_once "../app/config/db.php"; 
$idNacionalidade = $_POST['idNacionalidade'];
$nacionalidades = new NacionalidadeDao();
$lista = $nacionalidades->BuscarTodosDadosID($idNacionalidade);
echo json_encode($lista);
?>