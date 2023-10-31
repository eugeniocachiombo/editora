<!--MAIN-->
<div class="container-fluild pt-5 pb-5">
    <!--TEXT-->
    <div class="col pb-1 ">
        <center>
            <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block" style="text-align: center;">
                <legend class=""><?php echo $title ?></legend>
            </div>

            <div class="col d-md-none d-lg-none d-xl-none">
                <h5><?php echo $title ?></h5>
            </div>
        </center>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover col-1">
            <thead>
                <tr class="bg-dark text-white border">
                    <th> Id </th>
                    <th> Nome do Contratado </th>
                    <th> Tipo de Contrato </th>
                    <th> Descrição do Contrato </th>
                    <th> Data Inicial </th>
                    <th> Data Final </th>
                    <th> Estado do contrato </th>
                </tr>
            </thead>

            </tbody>
            <?php 
                $contratos = new ContratoDao();
                $lista = $contratos->BuscarTodosDados();
                     foreach ($lista as $contrato) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $contrato['idContrato']; ?> </td>
                <td> <?php echo $contrato["nomeUtilizador"]." ".$contrato["sobrenomeUtilizador"]."  ( ".$contrato["nomeArtisticoUtilizador"]." )"; ?>
                </td>
                <td> <?php echo $contrato['tipoContrato']; ?> </td>
                <td> <?php echo $contrato['descricaoContrato']; ?> </td>
                <?php   
                  $dataInicial = explode("-", $contrato["dataInicialContrato"]);
                  $dataInicial = $dataInicial[2]."/".$dataInicial[1]."/".$dataInicial[0];

                  $dataFinal = explode("-", $contrato["dataFinalContrato"]);
                  $dataFinal = $dataFinal[2]."/".$dataFinal[1]."/".$dataFinal[0];
                ?>
                <td> <?php echo $dataInicial; ?> </td>
                <td> <?php echo $dataFinal; ?> </td>
                <td> <?php echo $contrato['estadoContrato']; ?> </td>
                <?php  } ?>
                </tbody>
        </table>
    </div>

</div>