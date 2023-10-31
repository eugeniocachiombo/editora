<!--MAIN-->
<form action="/estilo/Actualizar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid bg-white pt-5 text-dark"
        style="min-height: 62vh; border-radius: 10px;border: 5px solid #299; padding-right: 0">
        <div class="row d-block form-group" style="width: 100%;">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE Estilo-->
                <div class="col">
                    <center>
                        <div class="" style="text-align: center;">
                            <i class='fas fa-drum' style="font-size: 100px"></i>
                        </div>
                    </center>
                </div>

                <!--TEXT-->
                <div class="col pb-1 ">
                    <center>
                        <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                            style="text-align: center;">
                            <legend class=""><b>Actualizar Estilo</b></legend>
                        </div>

                        <div class="col d-md-none d-lg-none d-xl-none">
                            <h5><b>Actualizar Estilo</b></h5>
                        </div>
                    </center>
                </div>
            </div>

            <!--COLEÇÃO PRINCIPAL 2-->
            <div class="col text-center" style="height: auto">

                <!--COLEÇÃO CAMPOS DO FORMULARIO-->
                <div class="row d-block d-sm-block d-lg-flex d-xl-flex text-center">

                    <!--FORM ID-->
                    <div class="col pt-2">
                        <center>
                            <div class="col-8  d-none d-md-block d-lg-block d-xl-block" style="width: 220px;">
                                <label for="idEstilo" style="width: 100%; text-align: left;">
                                    <p class="p"><b>Estilo:</b></p>
                                </label>
                            </div>

                            <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none " style="width: 220px;">
                                <label for="idEstilo" style="width: 100%; text-align: left;">
                                    <p class="p"><b>Estilo:</b></p>
                                </label>
                            </div>

                            <div class="col-8" style="margin-top: -15px; width:220px">

                                <select onChange="BuscarEstilos(this.value)" name="txtIdEstilo" id="txtIdEstilo"
                                    class="form-control custom-select" required>
                                    <option value="">Selecione</option>
                                    <?php 
                                        $estilos = new EstiloDao();


                                            $lista = $estilos->Buscar();
                                            foreach ($lista as $estilo) { ?>
                                    <option value="<?php echo $estilo["idEstilo"];?>">
                                        <?php echo $estilo["nomeEstilo"];?>
                                    </option>
                                    <?php  } ?>

                                </select>

                                <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                    Selecione o Estilo
                                </div>
                            </div>

                        </center>
                    </div>
                </div>

                <!--COLEÇÃO PRINCIPAL 3-->
                <div class="col text-center" style="height: auto">

                    <!--COLEÇÃO CAMPOS DO FORMULARIO-->
                    <div class="row d-block d-sm-block d-lg-flex d-xl-flex text-center">
                        <!--CAMPOS 1-->
                        <div class="col text-center">
                            <!--FORM NAME-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block" style="width: 220px;">
                                        <label for="nomeEstilo" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Nome do Estilo:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none " style="width: 220px;">
                                        <label for="nomeEstilo" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Nome do Estilo:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px; width: 220px">
                                        <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                            pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ]+)*$" maxlength="20" required
                                            class="form-control" type="text" name="txtNomeEstilo" id="txtNomeEstilo">
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Introduza o nome
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
                            <div class="col mb-5" style="width: 220px;">
                                <input onClick="ClickLogar()" name="btnSubmit" class="btn" type="submit"
                                    value="Actualizar Estilo" id="btnLogar" style="width: 100%;"> <br><span id="spinner"
                                    class=''></span>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>

<!--VARIÁVIES Estilo-->
<script src="/assets/js/estilo/variaveis.js"></script>
<!--AJAX PARA BUSCAR EstiloES-->
<script src="/assets/js/estilo/ajaxBuscarEstilos.js"></script>
<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>