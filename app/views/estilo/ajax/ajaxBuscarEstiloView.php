<?php
require_once "../app/config/db.php"; 
$idEstilo = $_POST['idEstilo'];
$estilos = new EstiloDao();
$lista = $estilos->BuscarTodosDadosID($idEstilo);
echo json_encode($lista);
?>