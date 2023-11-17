<!--HEADER HTML-->
<?php require_once "../app/views/default/htmlHead.php"; ?>
<title><?php echo $title ?></title>

<!--------------------------------------------------------->
<?php $_SESSION[ 'processando' ] = '/login/Index'; ?>
<script>
    window.location = '/painel/Carregando';
</script>

<!--------------------------------------------------------->

<!--FOOTER HTML-->
<?php require_once "../app/views/default/htmlFooter.php"; ?>

<!--ACESSAR O COOKIE-->
<script src="/assets/js/cookies/cookies.js"></script>