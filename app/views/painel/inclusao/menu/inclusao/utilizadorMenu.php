<!--Tela Grande-->
<div class="col d-none d-lg-flex justify-content-center align-items-center">
    <div class="col text-center "> 
        <img class="img-fluid rounded-circle" src="/assets/img/icons/corte.jpg" alt="Foto do perfil" width="20%"> 
        <span class="text-white"><?php echo $_SESSION["nomeArtisticoUtilizador"]; ?></span>
    </div>
</div>

<!--Tela Pequena-->
<div class="col d-lg-none justify-content-center align-items-center">
    <div class="col text-center "> 
        <img class="img-fluid rounded-circle" src="/assets/img/icons/corte.jpg" alt="Foto do perfil" width="20%"> <br>
        <span class="text-white"><?php echo $_SESSION["nomeArtisticoUtilizador"]; ?></span>
        <hr>
    </div>
</div> 