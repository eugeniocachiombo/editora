 <!--MAIN-->
 <form action="/obra/Eliminar" method="post" class="needs-validation" novalidate>

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
                             <legend class=""><b>Eliminar Obra</b></legend>
                         </div>

                         <div class="col d-md-none d-lg-none d-xl-none">
                             <h5><b>Eliminar Obra</b></h5>
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
                             <div class="col-8  d-none d-md-block d-lg-block d-xl-block" style="width: 220px">
                                 <label for="idObra" style="width: 100%; text-align: left;">
                                     <p class="p"><b>Obra:</b></p>
                                 </label>
                             </div>

                             <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none " style="width: 220px">
                                 <label for="idObra" style="width: 100%; text-align: left;">
                                     <p class="p"><b>Obra:</b></p>
                                 </label>
                             </div>

                             <div class="col-8" style="margin-top: -15px; width: 220px">

                                 <select name="txtIdObra" id="txtIdObra" class="form-control custom-select" required>
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

                 <!--COLEÇÃO BOTÃO-->
                 <div class="col text-center" style="height: auto">
                     <!--FORM BOTAO-->
                     <div class="col d-flex justify-content-center pt-4">
                         <center>
                             <div class="col mb-5" style="width: 220px">
                                 <input class="btn" type="submit" value="Eliminar Obra" id="btnSubmit" name="btnSubmit"
                                     style="width: 100%;"> <br><span id="spinner" class=''></span>
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