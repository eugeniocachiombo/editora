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
                    <th> Nome do município </th>
                    <th> Provincia </th>
                </tr>
            </thead>

            </tbody>
            <?php 
                $municipios = new MunicipioDao();
                $lista = $municipios->BuscarTodosDados();
                     foreach ($lista as $municipio) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $municipio['idMunicipio']; ?> </td>
                <td> <?php echo $municipio['nomeMunicipio']; ?> </td>
                <td> <?php echo $municipio['nomeProvincia']; ?> </td>
            </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>

</div>