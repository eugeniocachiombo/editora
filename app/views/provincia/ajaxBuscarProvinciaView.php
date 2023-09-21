<?php
require_once "../app/config/db.php"; 
$idProvincia = $_POST['idProvincia'];
$provincias = new ProvinciaDao();
$lista = $provincias->BuscarTodosDadosID($idProvincia);
echo json_encode($lista);
?>