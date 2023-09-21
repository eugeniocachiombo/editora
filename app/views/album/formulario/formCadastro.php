<!--MAIN-->
<form action="/album/Cadastrar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid bg-white pt-5 text-dark"
        style="min-height: 62vh; border-radius: 10px;border: 5px solid #299; padding-right: 0">
        <div class="row d-block form-group" style="width: 100%;">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE Album-->
                <div class="col ">
                    <center>
                        <div class="" style="text-align: center;">
                            <i class='fas fa-folder-minus' style="font-size: 100px"></i>
                        </div>
                    </center>
                </div>

                <!--TEXT-->
                <div class="col pb-1 ">
                    <center>
                        <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                            style="text-align: center;">
                            <legend class=""><b>Criar Álbum</b></legend>
                        </div>

                        <div class="col d-md-none d-lg-none d-xl-none">
                            <h5><b>Criar Álbum</b></h5>
                        </div>
                    </center>
                </div>
            </div>

            <!--COLEÇÃO PRINCIPAL 3-->
            <div class="col text-center" style="height: auto">

                <!--COLEÇÃO CAMPOS DO FORMULARIO-->
                <div class="row d-block text-center">
                    <!--CAMPOS 1-->
                    <div class="col text-center">
                        <!--FORM NAME-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block" style="width: 220px;">
                                    <label for="nomeAlbum" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nome do Álbum:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none " style="width: 220px;">
                                    <label for="nomeAlbum" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Nome do Álbum:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px;width: 220px;">
                                    <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                        pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ]+)*$" maxlength="20" required
                                        class="form-control" type="text" name="txtNomeAlbum" id="txtNomeAlbum">
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Introduza o nome
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <!--CAMPOS 2-->
                    <div class="col text-center">
                        <!--FORM Artista-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8 d-none d-md-block d-lg-block d-xl-block" style="width: 220px;">
                                    <label for="idArtista" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Artísta:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none " style="width: 220px;">
                                    <label for="idArtista" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Artísta:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 " style="margin-top: -15px; width: 220px;">
                                    <select name="txtIdArtista" id="txtIdArtista"
                                        class="form-control custom-select tetx-dark" required>
                                        <option selected value="">Selecione...</option>
                                        <?php 
                                        $artistas = new ArtistaDao();
                                        $lista = $artistas->BuscarTodosDados();
                                        foreach ($lista as $artista) { ?>
                                        <option value="<?php echo $artista["idArtista"];?>">
                                            <?php echo $artista["nomeArtisticoUtilizador"];?>
                                        </option>
                                        <?php  }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o artísta
                                    </div>

                                </div>
                            </center>
                        </div>

                    </div>

                </div>

            </div>

            <!--COLEÇÃO BOTÃO-->
            <div class="col text-center" style="height: auto;">
                <!--FORM BOTAO-->
                <div class="col d-flex justify-content-center pt-4">
                    <center>
                        <div class="col mb-5" style="width: 220px;">
                            <input onClick="ClickLogar()" name="btnSubmit" class="btn" type="submit" value="Criar Álbum"
                                id="btnLogar" style="width: 100%"> <br><span id="spinner" class=''></span>
                            <br>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
    </div>

</form>

<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>