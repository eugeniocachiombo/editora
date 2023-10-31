<!--CABEÇALHO DA PAGINAÇÃO-->
<?php require "../app/views/artista/paginacao/headPaginacao.php"; ?>

<!--CAMPO DE PESQUISA-->
<?php require "../app/views/default/campoPesquisaPaginacao.php"; ?>

<!------------------------------------------------------------------->

<!--MAIN-->
<div class="container-fluild pt-5 pb-5">
    <div class="col pb-1 ">
        <center>
            <div>
                <i class='fas fa-users' style="font-size: 100px"></i>
            </div>

            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block" style="text-align: center;">
                <legend class="">Lista de Artístas</legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5>Lista de Artístas</h5>
            </div>
        </center>
    </div>
    <!--TELA PEQUENA-->
    <div id="divTeste" class="d-block d-md-flex table-responsive">
        <table class="table table-striped table-hover ">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Nome Artístico </th>
                    <th> Cargo do Artísta </th>
                    <th> Banda </th>
                    <th> Cargo na Banda </th>
                </tr>

            </thead>

            </tbody>
            <?php 
                    $cont = 0;
                    foreach ($lista as $artista) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $artista['idArtista']; ?> </td>
                <td> <?php echo $artista['nomeArtisticoUtilizador']; ?> </td>
                <td> <?php echo $artista['descricaoCargoArtista']; ?> </td>
                <td> <?php echo $artista['nomeBanda']; ?> </td>
                <td> <?php echo $artista['descricaoCargoArtistaBanda']; ?> </td>
            </tr>
            <?php  $cont++; 
                    } ?>
            </tbody>
            <?php   
                    if($cont == 0){
                        echo "<h1>Nenhuma informação de momento</h1>";
                    }
                ?>
        </table>
    </div>

</div>

<!------------------------------------------------------------------->

<!--RODAPÉ DA PAGINAÇÃO-->
<?php require "../app/views/artista/paginacao/footerPaginacao.php"; ?>

<!--AJAX PARA BUSCAR AlbunS -->
<script src="/assets/js/artista/ajaxPaginacao.js"></script>

<script>
    setInterval(() => {
        var div = document.querySelector("#divTeste");
        if (window.getComputedStyle(div).getPropertyValue("display") === "block") {
            div.style = "font-size: 10px";
        } else {
            div.style = "font-size: 16px";
        }
    }, 1000);
</script>