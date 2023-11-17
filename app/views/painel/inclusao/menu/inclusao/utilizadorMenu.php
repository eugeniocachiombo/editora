<!--Tela Grande-->
<div class="col d-none d-lg-flex justify-content-center align-items-center">
    <div class="col text-center ">
        <?php include "../app/views/painel/inclusao/menu/inclusao/fotoPerfil.php"; ?>
        <span class="text-white" style="font-weight: bold"><?php echo $_SESSION["nomeArtisticoUtilizador"]; ?></span>
    </div>
</div>

<!--Tela Pequena-->
<div class="col d-lg-none justify-content-center align-items-center">
    <div class="col text-center ">
        <?php include "../app/views/painel/inclusao/menu/inclusao/fotoPerfil.php"; ?> <br>
        <span class="text-white" style="font-weight: bold"><?php echo $_SESSION["nomeArtisticoUtilizador"]; ?></span>
        <hr>
    </div>
</div>