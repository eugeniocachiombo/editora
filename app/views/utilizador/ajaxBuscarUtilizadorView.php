<?php
require_once "../app/config/db.php"; 
$idUtilizador = $_POST['idUtilizador'];
$utilizador = new UtilizadorDao();
$lista = $utilizador->BuscarTodosDadosID($idUtilizador);
echo json_encode($lista);
?>