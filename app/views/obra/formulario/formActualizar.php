<!--MAIN-->
<form action="/obra/Actualizar" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>

    <div class="container-fluid bg-white pt-5 text-dark"
        style="min-height: 62vh;border-radius: 10px;border: 5px solid #299; padding-right: 0">
        <div class="row d-block form-group" style="width: 100%;">

            <!--COLEÇÃO PRINCIPAL 1-->
            <div class="col text-center" style="height: auto">
                <!--ICONE Obra-->
                <div class="col">
                    <center>
                        <div class="" style="text-align: center;">
                            <i class='fas fa-music' style="font-size: 100px"></i>
                        </div>
                    </center>
                </div>

                <!--TEXT-->
                <div class="col pb-1 ">
                    <center>
                        <div class="col-8 pb-5 mb-3 d-none d-md-block d-lg-block d-xl-block"
                            style="text-align: center;">
                            <legend class=""><b>Actualizar Obra</b></legend>
                        </div>

                        <div class="col d-md-none d-lg-none d-xl-none">
                            <h5><b>Actualizar Obra</b></h5>
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
                                <label for="idObra" style="width: 100%; text-align: left;width: 200px">
                                    <p class="p"><b>Obra:</b></p>
                                </label>
                            </div>

                            <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                <label for="idObra" style="width: 100%; text-align: left;width: 200px">
                                    <p class="p"><b>Obra:</b></p>
                                </label>
                            </div>

                            <div class="col-8" style="margin-top: -15px; width: 200px">

                                <select onChange="BuscarObras(this.value)" name="txtIdObra" id="txtIdObra"
                                    class="form-control custom-select" required>
                                    <option value="">Selecione</option>
                                    <?php 
                                        $obras = new ObraDao();

                                        if(!empty($_SESSION["TituloObra"]) && $_SESSION["tipoAcesso"] != "ceo"){
                                            $idObra = $_SESSION["idObra"];
                                            $obra = $obras->BuscarTodosDadosID($idObra);
                                            ?>
                                    <option selected value="<?php echo $obra["idObra"];?>">
                                        <?php echo $obra["tituloObra"]." (De ".$obra["nomeArtisticoUtilizador"]." )"; ?>
                                    </option>

                                    <?php  }else{

                                            $lista = $obras->BuscarTodosDados();
                                            foreach ($lista as $obra) { ?>
                                    <option value="<?php echo $obra["idObra"];?>">
                                        <?php echo $obra["tituloObra"]." (De ".$obra["nomeArtisticoUtilizador"]." )"; ?>
                                    </option>
                                    <?php  }
                                          
                                            } ?>
                                </select>

                                <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                    Selecione a Obra
                                </div>
                            </div>

                        </center>
                    </div>
                </div>

                <!--COLEÇÃO PRINCIPAL 3-->
                <div class="col  text-center" style="height: auto">

                    <!--COLEÇÃO CAMPOS DO FORMULARIO-->
                    <div class="row d-block d-lg-flex  text-center">
                        <!--CAMPOS 1-->
                        <div class="col text-center">
                            <!--FORM TituloObra-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="tituloObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Título da obra:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="tituloObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Título da obra:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <input title="Deve conter no míninimo 3 caracteres" minlength="3"
                                            pattern="^[A-Za-z¿-ˇ]+(?: [A-Za-z¿-ˇ ]+)*$" maxlength="20" required
                                            class="form-control" type="text" name="txtTituloObra" id="txtTituloObra">
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Introduza o título
                                        </div>
                                    </div>

                                </center>
                            </div>

                            <!--FORM Artísta-->
                            <div class="col pt-2 ">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="tipoObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Artísta:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="tipoObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Artísta:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">

                                        <select name="txtIdArtista" id="txtIdArtista" class="form-control custom-select"
                                            required>
                                            <option value="">Selecione</option>
                                            <?php 
                                                $artistas = new ArtistaDao();
                                                $lista = $artistas->BuscarTodosDados();
                                                    foreach ($lista as $artista) { ?>
                                            <option value="<?php echo $artista["idArtista"];?>">
                                                <?php echo $artista["nomeArtisticoUtilizador"]; ?>
                                            </option>
                                            <?php  } ?>
                                        </select>

                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o artísta
                                        </div>
                                    </div>

                                </center>
                            </div>

                        </div>

                        <!--CAMPOS 2-->
                        <div class="col text-center">

                            <!--FORM Gênero-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="generoObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Gênero de Obra:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="generoObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Gênero de Obra:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">

                                        <select name="txtGeneroObra" id="txtGeneroObra"
                                            class="form-control custom-select" required>
                                            <option value="">Selecione</option>
                                            <option value="Música">Música</option>
                                            <option value="Instrumental">Instrumental</option>
                                            <option value="Sample">Sample</option>
                                            <option value="Projecto">Projecto</option>
                                        </select>

                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o gênero
                                        </div>
                                    </div>

                                </center>
                            </div>

                            <!--FORM Album-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="idAlbum" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Álbum:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="idAlbum" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Álbum:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <select name="txtIdAlbum" id="txtIdAlbum" class="form-control custom-select">
                                            <option value="">Selecione</option>
                                            <?php 
                                                $albums = new AlbumDao();
                                                $lista = $albums->BuscarTodosDados();
                                                    foreach ($lista as $album) { ?>
                                            <option value="<?php echo $album["idAlbum"];?>">
                                                <?php echo $album["nomeAlbum"]; ?>
                                            </option>
                                            <?php  } ?>
                                        </select>
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o álbum
                                        </div>
                                    </div>
                                </center>
                            </div>

                        </div>

                        <!--CAMPOS 3-->
                        <div class="col text-center">

                            <!--FORM Estilo-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="idEstilo" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Estilo:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="idEstilo" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Estilo:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <select name="txtIdEstilo" id="txtIdEstilo" class="form-control custom-select"
                                            required>
                                            <option value="">Selecione</option>
                                            <?php 
                                                    $estilos = new EstiloDao();
                                                    $lista = $estilos->BuscarTodosDados();
                                                        foreach ($lista as $estilo) { ?>
                                            <option value="<?php echo $estilo["idEstilo"];?>">
                                                <?php echo $estilo["nomeEstilo"]; ?>
                                            </option>
                                            <?php  } ?>
                                        </select>
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o estilo
                                        </div>
                                    </div>
                                </center>
                            </div>

                            <!--FORM Arquivo-->
                            <div class="col pt-2">
                                <center>
                                    <div class="col-8  d-none d-md-block d-lg-block d-xl-block">
                                        <label for="arquivoObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Arquivo da Obra:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                        <label for="arquivoObra" style="width: 100%; text-align: left;">
                                            <p class="p"><b>Arquivo da Obra:</b></p>
                                        </label>
                                    </div>

                                    <div class="col-8" style="margin-top: -15px">
                                        <div id="incluirArquivoDiv">
                                            <label for="">Pretende incluir um arquivo?</label><br>
                                            <input type="checkbox" id="incluirArquivo" value=""> Alterar o arquivo
                                            existente da obra
                                        </div>
                                        <input style="display: none" type="file" name="fileArquivoObra"
                                            id="fileArquivoObra" class="form-control custom-select">
                                        <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                            Selecione o arquivo
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
                            <div class="col mb-5" style="width: 190px">
                                <input name="btnSubmit" class="btn" type="submit" value="Actualizar Obra" id="btnLogar"
                                    style="width: 100%;"> <br><span id="spinner" class=''></span>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>

</form>

<!--VARIÁVIES Obra-->
<script src="/assets/js/obra/variaveis.js"></script>
<!--Checar Arquivo no file-->
<script src="/assets/js/obra/checarArquivo.js"></script>
<!--AJAX PARA BUSCAR ObraS-->
<script src="/assets/js/obra/ajaxBuscarObras.js"></script>
<!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
<script src="/assets/js/validarCampo.js"></script>