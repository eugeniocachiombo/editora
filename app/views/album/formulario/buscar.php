<!--CABEÇALHO DA PAGINAÇÃO-->
<?php require "../app/views/album/paginacao/headPaginacao.php"; ?>

<!--CAMPO DE PESQUISA-->
<?php require "../app/views/default/campoPesquisaPaginacao.php"; ?>

<!------------------------------------------------------------------->
<!--MAIN-->
<div class="container-fluild divPrincipal pt-5 " style=" border-radius: 10px;  min-height: 62vh;">
    <!--TEXT-->
    <div class="col pb-1 ">
        <center>
            <div>
                <i class='fas fa-folder-minus' style="font-size: 100px"></i>
            </div>

            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block" style="text-align: center;">
                <legend class=""><b>Lista de álbuns</b></legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5><b>Lista de álbuns</b></h5>
            </div>
        </center>
    </div>

    <div class="table-responsive">
        <table id="tabela" class="table table-striped table-hover col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th class="d-none"> Id </th>
                    <th> Nome do Album </th>
                    <th> Proprietário </th>
                </tr>
            </thead>

            <tbody class="">
                <?php   $cont = 0;
                        foreach ($lista as $album) { ?>
                <tr class="bg-light text-dark border">
                    <td class="d-none"> <?php echo $album['idAlbum']; ?> </td>
                    <td> <?php echo $album['nomeAlbum']; ?> </td>
                    <td> <?php echo $album['nomeArtisticoUtilizador']; ?> </td>
                </tr>
                <?php       $cont++;  ?>
                <?php   } ?>
            </tbody>
        </table>
        <?php   
            if($cont == 0){
                echo "<h1>Nenhuma informação de momento</h1>";
            }
        ?>
    </div>
</div>

<!------------------------------------------------------------------->

<!--RODAPÉ DA PAGINAÇÃO-->
<?php require "../app/views/album/paginacao/footerPaginacao.php"; ?>

<!--AJAX PARA BUSCAR AlbunS -->
<script src="/assets/js/album/ajaxPaginacao.js"></script>