<!--HEADER HTML-->
<?php require_once "../app/views/default/htmlHead.php"; ?>
<title><?php echo $title ?></title>

<!--------------------------------------------------------->

<?php
$pedido = new PedidoDao();
$pedido->setIdPedido($_POST['idPedido']);
$pedido->Eliminar();
?>

<!--------------------------------------------------------->

<!--FOOTER HTML-->
<?php require_once "../app/views/default/htmlFooter.php"; ?>