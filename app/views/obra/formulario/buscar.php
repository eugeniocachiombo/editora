<?php 
// CAMPO DE PESQUISA
require "../app/views/default/campoPesquisaPaginacao.php"; ?>
<hr>

<?php 
// Cabeçalho da paginação 
require "../app/views/obra/paginacao/headPaginacao.php";

$cont = 0;
?> <div class="d-table  divPrincipal " style="height: 15vh; justify-content: center; width: 100%"> <?php
foreach ($lista as $obra) { ?>

    <div class="d-table d-lg-flex " style="justify-content: space-around; width: 100% ">

        <div class="border col-1 justify-content-center align-items-center">
            <img src="/assets/img/icons/music.png" alt="Perfil" width="100%">
        </div>

        <div class="d-table  justify-content-center align-items-center">
            <b>Título:</b> <?php echo $obra['tituloObra']; ?> <br>
            <b>Artísta:</b> <?php echo $obra["nomeArtisticoUtilizador"]; ?> <br>
            <div class="d-table ">
                <div>
                    <b>Áudio:</b>
                </div>

                <div class="embed-responsive embed-responsive-16by9">
                    <audio class="embed-responsive-item" controls>
                        <source src="/assets/tmp_file/<?php echo $obra["arquivoObra"]; ?>" type="audio/mpeg">
                        Não suportado pelo navegador
                    </audio>
                </div>
            </div>
        </div>

        <div class=" d-none text-center d-md-block " style="width: 20%">
            <div><b>Gênero:</b> <?php echo $obra['generoObra']; ?> </div>
            <div><b>Estilo:</b> <?php echo $obra["nomeEstilo"]; ?> </div>
            <div><b>Álbum:</b> <?php echo $obra["nomeAlbum"]; ?> </div>
        </div>

        <div class=" d-table  d-md-none text-center justify-content-end" style="width: 100%">
            <div><b>Gênero:</b> <br> <?php echo $obra['generoObra']; ?> </div>
            <div><b>Estilo:</b> <br> <?php echo $obra["nomeEstilo"]; ?> </div>
            <div><b>Álbum:</b> <br> <?php echo $obra["nomeAlbum"]; ?> </div>
        </div>

    </div>
    <hr> <?php 
    $cont++;
} 
?> </div> <?php
 
if($cont == 0){
    echo "<h1>Nenhuma informação de momento</h1>";
}

// Rodapé da paginação 
require "../app/views/obra/paginacao/footerPaginacao.php";
?>

<!--AJAX PARA BUSCAR AlbunS -->
<script src="/assets/js/obra/ajaxPaginacao.js"></script>