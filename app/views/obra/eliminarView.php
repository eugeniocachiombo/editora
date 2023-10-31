<!--HEADER HTML-->
<?php

include_once "../app/views/default/htmlHead.php"; ?>
<title><?php echo $title ?></title>

<!--------------------------------------------------------->
<!--MAIN-->
<div class="d-none">
<?php include_once "../app/views/obra/formulario/formEliminar.php";?>
</div>
<!--------------------------------------------------------->

<!--FOOTER HTML-->
<?php include_once "../app/views/default/htmlFooter.php"; ?>

<!--ENCAMINHAR AO PAINEL-->
<script>
    setTimeout(() => {
        window.location = "/painel/Obras/Obra/";
    }, 1000);
</script>