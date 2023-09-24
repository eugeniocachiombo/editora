<!--ACESSAR O COOKIE-->
<script src="/assets/js/cookies/cookies.js"></script>

<!--HEADER HTML-->
<?php require_once "../app/views/default/htmlHead.php"; ?>
<title><?php echo $title ?></title>

<!--------------------------------------------------------->
<?php echo "<hr><h1> Método ".$nomeMetodo."</h1><hr>"; ?>

<form action="/inicio/Index" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Inicio</button> <br>
</form>

<form action="/login/Index" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Ir para Login</button> <br>
</form>

<form action="/utilizador/Cadastrar" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Cadastrar utilizador</button> <br>
</form>

<form action="/painel/Index" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Painel</button> <br>
</form>

<form action="/artista/Cadastrar" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Cadastrar artista</button> <br>
</form>

<form action="/inicio/Buscar" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Buscar</button> <br>
</form>

<form action="/ct" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Erro Controller</button> <br>
</form>

<form action="/inicio/iuerou" method="post">
    <button type="submit" class="mb-3 mx-auto" style="width: 40%;">Erro metodo</button> <br>
</form>

<a href="index">Acessar</a>

<!--------------------------------------------------------->

<!--FOOTER HTML-->
<?php require_once "../app/views/default/htmlFooter.php"; ?>

