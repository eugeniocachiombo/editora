<!--MAIN-->
<form action="/contrato/Actualizar" method="post" class="needs-validation" novalidate>

    <div class="container-fluid d-table d-md-flex justify-content-center align-items-center pt-5"
        style="min-height: 315px;">
        <div class="row d-block form-group" style="width: 100%; ">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE Contrato-->
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

                    <!--FORM ID-->
                    <div class="col pt-2">
                        <center>
                            <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                <label for="idContrato" style="width: 100%; text-align: left;">
                                    <p class="p"><b>Utilizador Contratado:</b></p>
                                </label>
                            </div>

                            <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                <label for="idContrato" style="width: 100%; text-align: left;">
                                    <p class="p"><b>Utilizador Contratado:</b></p>
                                </label>
                            </div>

                            <div class="col-8" style="margin-top: -15px">

                                <select onChange="BuscarContratos(this.value)" name="txtIdContrato" id="txtIdContrato"
                                    class="form-control custom-select" required>
                                    <option value="">Selecione</option>
                                    <?php 
                                        $contratos = new ContratoDao();

                                        if(!empty($_SESSION["idUtilizador"]) && $_SESSION["tipoAcesso"] != "ceo"){
                                            $idContrato = $_SESSION["idContrato"];
                                            $contrato = $contratos->BuscarTodosDadosID($idContrato);
                                            ?>
                                    <option selected value="<?php echo $contrato["idContrato"];?>">
                                        <?php echo $contrato["nomeUtilizador"]." ".$contrato["sobrenomeUtilizador"]."  ( ".$contrato["nomeArtisticoUtilizador"]." )"; ?>
                                    </option>

                                    <?php  }else{

                                            $lista = $contratos->BuscarTodosDados();
                                            foreach ($lista as $contrato) { ?>
                                    <option value="<?php echo $contrato["idContrato"];?>">
                                        <?php echo $contrato["nomeUtilizador"]." ".$contrato["sobrenomeUtilizador"]."  ( ".$contrato["nomeArtisticoUtilizador"]." )"; ?>
                                    </option>
                                    <?php  }
                                          
                                            } ?>

                                </select>

                                <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                    Selecione o Contrato
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
                            <!--FORM IdUtilizador-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="idUtilizador" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Utilizador:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="idUtilizador" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Utilizador:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">

                                        <select name="txtIdUtilizador" id="txtIdUtilizador"
                                            class="form-control custom-select" required>
                                            <option value="">Selecione</option>
                                            <?php 
                                        $utilizadores = new UtilizadorDao();
                                        $lista = $utilizadores->Buscar();
                                            foreach ($lista as $utilizador) { ?>
                                            <option value="<?php echo $utilizador["idUtilizador"];?>">
                                                <?php echo $utilizador["nomeUtilizador"]." ".$utilizador["sobrenomeUtilizador"]."  ( ".$utilizador["nomeArtisticoUtilizador"]." )"; ?>
                                            </option>
                                            <?php  } ?>

                                        </select>

                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o utilizador
                                        </div>
                                    </div>

                                </center>
                            </div>

                            <!--FORM Tipo contrato-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="tipoContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Tipo de Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="tipoContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Tipo de Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">

                                        <select name="txtTipoContrato" id="txtTipoContrato"
                                            class="form-control custom-select" required>
                                            <option value="">Selecione</option>
                                            <option value="Contrato a Curto Prazo">Contrato a Curto Prazo</option>
                                            <option value="Contrato a Longo Prazo">Contrato a Longo Prazo</option>
                                        </select>

                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o tipo de contrato
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>

                        <!--CAMPOS 2-->
                        <div class="col text-center">
                            <!--FORM DESCRIÇÃO-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="descricaoContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Descrição do Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="descricaoContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Descrição do Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <textarea title="Deve conter no míninimo 3 caracteres" minlength="3"
                                            pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ ]+)*$" maxlength="20" required
                                            class="form-control" type="text" name="txtDescricaoContrato"
                                            id="txtDescricaoContrato" cols="30" rows="5"></textarea>
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Introduza a descrição
                                        </div>
                                    </div>
                                </center>
                            </div>

                        </div>

                        <!--CAMPOS 3-->
                        <div class="col text-center">

                            <!--FORM DATA Inicial-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="dataInicialContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Data Inicial do Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="dataInicialContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Data Inicial do Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <input title="Formato de data errado: xx/xx/xxxx"
                                            pattern="[0-9][0-9]-[0-9][0-9]-[0-9][0-9][0-9][0-9]" maxlength="10" required
                                            class="form-control" type="text" name="txtDataInicialContrato"
                                            id="txtDataInicialContrato">
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Introduza a data Inicial
                                        </div>
                                    </div>
                                </center>
                            </div>

                            <!--FORM DATA FInal-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="dataFinalContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Data Final do Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="dataFinalContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Data Final do Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <input title="Formato de data errado: xx/xx/xxxx"
                                            pattern="[0-9][0-9]-[0-9][0-9]-[0-9][0-9][0-9][0-9]" maxlength="10" required
                                            class="form-control" type="text" name="txtDataFinalContrato"
                                            id="txtDataFinalContrato">
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Introduza a data Final
                                        </div>
                                    </div>
                                </center>
                            </div>

                        </div>

                        <!--CAMPOS 4-->
                        <div class="col text-center">
                            <!--FORM Estado contrato-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="estadoContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Estado de Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="estadoContrato" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Estado de Contrato:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">

                                        <select name="txtEstadoContrato" id="txtEstadoContrato"
                                            class="form-control custom-select" required>
                                            <option value="">Selecione</option>
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        </select>

                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o Estado de contrato
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
                                <input onClick="ClickLogar()" name="btnSubmit" class="btn" type="submit"
                                    value="Actualizar" id="btnLogar" style="width: 100%;"> <br><span id="spinner"
                                    class=''></span>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>

<!--VARIÁVIES Contrato-->
<script src="/assets/js/contrato/variaveis.js"></script>
<!--AJAX PARA BUSCAR ContratoS-->
<script src="/assets/js/contrato/ajaxBuscarContratos.js"></script>
<!--BUSCAR VALIDAÇÃO DA DATA-->
<script src="/assets/js/contrato/datePicker.js"></script>
<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>