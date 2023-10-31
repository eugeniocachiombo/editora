<!--HEADER HTML-->
<?php require_once "../app/views/default/htmlHead.php"; ?>
<title><?php echo $title ?></title>

<!--------------------------------------------------------->
<div class="d-none">
<!--MAIN-->
<?php require_once "../app/views/artista/formulario/formActualizar.php";?>
</div>
<!--------------------------------------------------------->

<!--FOOTER HTML-->
<?php require_once "../app/views/default/htmlFooter.php"; ?>

<!--ENCAMINHAR AO PAINEL-->
<script>
    setTimeout(() => {
        window.location = "/painel/Artistas/Artista";
    }, 1000);
</script>