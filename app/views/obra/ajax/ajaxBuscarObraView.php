<?php
require_once "../app/config/db.php"; 
$idObra = $_POST['idObra'];
$obra = new ObraDao();
$lista = $obra->BuscarTodosDadosID($idObra);
echo json_encode($lista);
?>