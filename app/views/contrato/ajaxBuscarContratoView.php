<?php
require_once "../app/config/db.php"; 
$idContrato = $_POST['idContrato'];
$contrato = new ContratoDao();
$lista = $contrato->BuscarTodosDadosID($idContrato);
echo json_encode($lista);
?>