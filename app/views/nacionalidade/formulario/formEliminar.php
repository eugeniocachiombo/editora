 <!--MAIN-->
 <form action="/nacionalidade/Eliminar" method="post" class="needs-validation" novalidate>

     <div class="container-fluid d-table d-md-flex justify-content-center align-items-center pt-5"
         style="min-height: 315px;">
         <div class="row d-block form-group" style="width: 100%; ">

             <!--COLEÇÃO PRINCIPAL 1-->
             <div class="col text-center" style="height: auto">
                 <!--ICONE Nacionalidade-->
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
                                 <label for="idNacionalidade" style="width: 100%; text-align: left;">
                                     <p class="p"><b>Nacionalidade:</b></p>
                                 </label>
                             </div>

                             <div class="col-8 d-sm-block d-md-none d-lg-none d-xl-none ">
                                 <label for="idNacionalidade" style="width: 100%; text-align: left;">
                                     <p class="p"><b>Nacionalidade:</b></p>
                                 </label>
                             </div>

                             <div class="col-8" style="margin-top: -15px">

                                 <select onChange="BuscarNacionalidades(this.value)" name="txtIdNacionalidade"
                                     id="txtIdNacionalidade" class="form-control custom-select" required>
                                     <option value="">Selecione</option>
                                     <?php 
                                        $nacionalidades = new NacionalidadeDao();
                                        $lista = $nacionalidades->Buscar();
                                            foreach ($lista as $nacionalidade) { ?>
                                     <option value="<?php echo $nacionalidade["idNacionalidade"];?>">
                                         <?php echo $nacionalidade["nomePais"];?>
                                     </option>
                                     <?php  } ?>

                                 </select>

                                 <div class="invalid-feedback" style="font-size: 16px; text-align: left">
                                     Selecione a nacionalidade
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
                             <div class="col mb-5">
                                 <input class="btn" name="btnSubmit" type="submit" value="Eliminar" id="btnSubmit"
                                     style="width: 100%;"> <br><span id="spinner" class=''></span>
                             </div>
                         </center>
                     </div>
                 </div>
             </div>

         </div>
     </div>

 </form>

 <!--VARIÁVIES Nacionalidade-->
 <script src="/assets/js/nacionalidade/variaveis.js"></script>
 <!--AJAX PARA BUSCAR NacionalidadeS-->
 <script src="/assets/js/nacionalidade/ajaxBuscarNacionalidades.js"></script>
 <!--BUSCAR VALIDAÇÃO DE CAMPOS VAZIOS-->
 <script src="/assets/js/validarCampo.js"></script>