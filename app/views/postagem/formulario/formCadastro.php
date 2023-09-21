<!--MAIN-->
<form action="/postagem/Cadastrar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid d-table d-md-flex justify-content-center align-items-center pt-5"
        style="min-height: 315px;">
        <div class="row d-block form-group" style="width: 100%; ">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE postagem-->
                <div class="col">
                    <center>
                        <div class="col-8 pb-1" style="text-align: center;">
                            <img class="img-fluid" src="/assets/img/icons/user33.png" alt="Perfil" width="17%">
                        </div>
                    </center>
                </div>

                <!--TEXT-->
                <div class="col pb-1 ">
                    <center>
                        <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                            style="text-align: center;">
                            <legend class=""><?php echo $title ?></legend>
                        </div>

                        <div class="col d-md-none d-lg-none d-xl-none">
                            <h5><?php echo $title ?></h5>
                        </div>
                    </center>
                </div>
            </div>

            <!--COLEÇÃO PRINCIPAL 2-->
            <div class="col text-center" style="height: auto">

                <!--COLEÇÃO CAMPOS DO FORMULARIO-->
                <div class="row d-block d-sm-block d-lg-flex d-xl-flex text-center">

                    <!--CAMPOS 1-->
                    <div class="col text-center">
                        <!--FORM Obra-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="IdObra" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Obra:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="IdObra" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Obra:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">

                                    <select name="txtIdObra" id="txtIdObra" class="form-control custom-select" required>
                                        <option value="">Selecione...</option>
                                        <?php 
                                        $obras = new ObraDao();
                                        $lista = $obras->BuscarTodosDados();
                                        foreach ($lista as $obra) { ?>
                                        <option value="<?php echo $obra["idObra"];?>">
                                            <?php echo $obra["tituloObra"];?>
                                        </option>
                                        <?php  }
                                        ?>
                                    </select>

                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione a obra
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>

                    <!--CAMPOS 2-->
                    <div class="col text-center">

                        <!--FORM UtilizadorPublicador-->
                        <div class="col pt-2">
                            <center>
                                <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                    <label for="IdUtilizadorPublicador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Publicador:</b></p>
                                    </label>
                                </div>

                                <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                    <label for="IdUtilizadorPublicador" style="width: 100%; text-align: left;">
                                        <p class="p"><b>Publicador:</b></p>
                                    </label>
                                </div>

                                <div class="col-8" style="margin-top: -15px">

                                    <select name="txtIdUtilizadorPublicador" id="txtIdUtilizadorPublicador"
                                        class="form-control custom-select" required>
                                        <option selected value="">Selecione...</option>
                                        <?php 
                                        $utilizadores = new UtilizadorDao();
                                        $lista = $utilizadores->Buscar();
                                        foreach ($lista as $utilizador) { ?>
                                        <option value="<?php echo $utilizador["idUtilizador"];?>">
                                            <?php echo $utilizador["nomeArtisticoUtilizador"];?>
                                        </option>
                                        <?php  }
                                        ?>
                                    </select>

                                    <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                        Selecione o publicador
                                    </div>
                                </div>
                            </center>
                        </div>

                    </div>

                </div>

            </div>

            <!--COLEÇÃO BOTÃO-->
            <div class="col text-center" style="height: auto">
                <!--FORM BOTAO-->
                <div class="col d-flex justify-content-center pt-4">
                    <center>
                        <div class="col mb-5">
                            <input onClick="ClickLogar()" name="btnSubmit" class="btn" type="submit" value="Cadastrar"
                                name="btnSubmit" id="btnSubmit" style="width: 100%;"> <br><span id="spinner"
                                class=''></span>
                            <br>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
    </div>

</form>

<!--VARIÁVIES postagem-->
<script src="/assets/js/postagem/variaveis.js"></script>
<!--AJAX PARA BUSCAR postagens-->
<script src="/assets/js/postagem/ajaxBuscarPostagens.js"></script>
<script src="/assets/js/validarCampo.js"></script>