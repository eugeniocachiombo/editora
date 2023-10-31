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
                    <th> Nome </th>
                    <th> Sobrenome </th>
                    <th> Nome Artístico </th>
                    <th> NIF </th>
                    <th> Email </th>
                    <th> Telefone </th>
                    <th class="d-none"> Passe </th>
                    <th> Nacionalidade </th>
                    <th> Data de Nascimento </th>
                    <th> Genero </th>
                    <th> Tipo de Acesso </th>
                    <th> Provincia </th>
                    <th> Municipio </th>
                    <th> Endereco de morada</th>
                </tr>
            </thead>

            </tbody>
            <?php 
                $utilizadores = new UtilizadorDao();
                $lista = $utilizadores->BuscarTodosDados();
                     foreach ($lista as $utilizador) { ?>
            <tr class="bg-light text-dark border">
                <td> <?php echo $utilizador['idUtilizador']; ?> </td>
                <td> <?php echo $utilizador['nomeUtilizador']; ?> </td>
                <td> <?php echo $utilizador['sobrenomeUtilizador']; ?> </td>
                <td> <?php echo $utilizador['nomeArtisticoUtilizador']; ?> </td>
                <td> <?php echo $utilizador['NIFUtilizador']; ?> </td>
                <td> <?php echo $utilizador['emailUtilizador']; ?> </td>
                <td> <?php echo $utilizador['telefoneUtilizador']; ?> </td>
                <td class="d-none"> <?php echo $utilizador['senhaUtilizador']; ?> </td>
                <td> <?php echo $utilizador['nomePais']; ?> </td>
                <?php   
                  $dataNascimento = explode("-", $utilizador["dataNascimentoUtilizador"]);
                  $dataNascimento = $dataNascimento[2]."/".$dataNascimento[1]."/".$dataNascimento[0];
                ?>
                <td> <?php echo $dataNascimento; ?> </td>
                <td> <?php echo $utilizador['generoUtilizador']; ?> </td>
                <td> <?php echo $utilizador['descricaoTipoAcesso']; ?> </td>
                <td> <?php echo $utilizador['nomeProvincia']; ?> </td>
                <td> <?php echo $utilizador['nomeMunicipio']; ?> </td>
                <td> <?php echo $utilizador['endereco']; ?> </td>
            </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>

</div>