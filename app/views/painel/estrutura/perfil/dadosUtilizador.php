<div class="col text-center d-table d-md-flex bg-white text-dark" style="border: 5px solid #299;border-radius: 10px; width: 100%">
    <button style="font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn  m-3 border border-warnning p-1" type="button" id="meusArquivos">
    <i class='fas fa-folder-open' style="font-size: 20px"></i> Meus Arquivos 
    </button>
</div>
            
<div class="col text-left d-table d-md-table  bg-white text-dark" style="border-radius: 10px; margin-top: 10px; width: 100%;border: 5px solid #299;">
    <div class="pt-4 pb-4" style="margin-left: 10px;">
            <h4 >Dados Pessoais <i class='fas fa-info-circle' style="font-size: 20px"></i> <hr></h4> 
            <?php
                $utilizador = new UtilizadorDao();
                $lista = $utilizador->BuscarTodosDadosID($_SESSION["idUtilizador"]);
            ?>
            <p><b>Nome Completo: </b> <?php echo $lista["nomeUtilizador"] ." ". $lista["sobrenomeUtilizador"]; ?></p>
            <p><b>Nome artístico: </b>  <?php echo $lista["nomeArtisticoUtilizador"];  ?></p>
            <p><b>Número do BI:    </b>  <?php echo $lista["NIFUtilizador"]; ?> </p>
            <p><b>Email:  </b> <?php echo $lista["emailUtilizador"]; ?> </p>
            <p><b>Telefone:  </b> <?php echo $lista["telefoneUtilizador"]; ?> </p>
            <!--<p><b>Nacionalidade:  </b> <?php //echo  ?> </p> -->
            <?php   
                  $dataNascimento = explode("-", $lista["dataNascimentoUtilizador"]);
                  $dataNascimento = $dataNascimento[2]."/".$dataNascimento[1]."/".$dataNascimento[0];
            ?>
            <p><b>Data de Nascimento:  </b> <?php echo $dataNascimento; ?> </p>
            <p><b>Gênero:  </b> <?php if($lista["generoUtilizador"] == "M"){ echo "Masculino" ; } else { echo "Femenino" ; }  ?> </p> <br>

            <h5>Morada <i class='fas fa-map-marker-alt' style="font-size: 20px"></i></h5> <hr>
            <p><b>Província:  </b> <?php echo $lista["nomeProvincia"]; ?> </p>
            <p><b>Município:  </b> <?php echo $lista["nomeMunicipio"]; ?> </p>
            <p><b>Endereço de morada:  </b> <?php echo $lista["endereco"]; ?> </p><br>

            <h5>Sistema <i class='fas fa-window-maximize' style="font-size: 20px"></i></h5> <hr>
            <p><b>Tipo de acesso:  </b> <?php echo $lista["descricaoTipoAcesso"]; ?></p>
    </div>

    <div class="col text-center pt-4 pb-2 pb-5 d-table d-md-flex bg-white text-dark" style="border-radius: 10px; margin-top: 10px; width: 100%">
            <button data-bs-toggle="modal" data-bs-target="#utilizadorModal" style="font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn pb-2 m-3 border border-warnning p-1" type="button">
                    <i class='fas fa-user-edit' style="font-size: 20px"></i>    Editar
            </button>
    </div> 
</div> 

<br class="d-lg-none "> 

<script>
       var meusArquivos = document.querySelector("#meusArquivos");
       meusArquivos.addEventListener("click", ()=>{
            window.location = "/painel/Perfil/MeusArquivos";
       });
</script>