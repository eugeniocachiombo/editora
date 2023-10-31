<!--CABEÇALHO DA PAGINAÇÃO-->
<?php require "../app/views/estilo/paginacao/headPaginacao.php"; ?>

<!--CAMPO DE PESQUISA-->
<?php require "../app/views/default/campoPesquisaPaginacao.php"; ?>

<!------------------------------------------------------------------->
<!--MAIN-->
<div class="container-fluild pt-5 pb-5" style="min-height: 62vh;">
    <div class="col pb-1 ">
        <center>

            <div>
                <i class='fas fa-drum' style="font-size: 100px"></i>
            </div>

            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block" style="text-align: center;">
                <legend class=""><b>Listar Estilos</b></legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5><b>Listar Estilos</b></h5>
            </div>

        </center>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Nome do Estilo</th>
                </tr>
            </thead>

            </tbody>
            <?php 
                    $cont=0;
                        foreach ($lista as $estilo) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $estilo['idEstilo']; ?> </td>
                <td> <?php echo $estilo['nomeEstilo']; ?> </td>
            </tr>
            <?php       $cont++; ?>
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
<?php require "../app/views/estilo/paginacao/footerPaginacao.php"; ?>

<!--AJAX PARA BUSCAR AlbunS -->
<script src="/assets/js/estilo/ajaxPaginacao.js"></script>