<div class="col text-left  text-dark" style="height: auto; border-radius: 10px; margin-top: 10px; width: 100%">
            
            <!--PARAMETROS OU ROTAS DOS BOTÕES-->
            <div class="adicionar" style="">
                <?php 
                    if(!empty($uri[3]) && $uri[3] == "Adicionar"){
                       require "../app/views/artista/formulario/formCadastro.php"; 
                    }
                ?>
            </div>

            <div class="actualizar " style="">
                <?php 
                    if(!empty($uri[3]) && $uri[3] == "Actualizar"){
                       require "../app/views/artista/formulario/formActualizar.php"; 
                    }
                ?>
            </div>

            <div class="listar text-left" style=" display: block; ">
                    <?php 
                        if(empty($uri[3]) || $uri[3] == "Listar" || $uri[3] == "/" || $uri[3] == ""){
                        require "../app/views/painel/estrutura/artistas/recentes/artistasRecentes.php";
                        }
                    ?>
            </div>

            <div class="eliminar " style="">
                <?php 
                    if(!empty($uri[3]) && $uri[3] == "Eliminar"){
                       require "../app/views/artista/formulario/formEliminar.php"; 
                    }
                     
                ?>
            </div>
            
            <!--BOTÕES-->
            <div class="col text-center d-table d-md-flex bg-white text-dark" style="border: 5px solid #299;border-radius: 10px; margin-top: 10px; width: 100%">
                
                <button id="btnAdicionar" onClick="Adicionar()" style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn w-50 m-3 border border-warnning p-1" type="button" >
                            <i class='fas fa-plus-circle' style="font-size: 20px"></i> Adicionar
                </button>
                

                <button id="btnActualizar" onClick="Actuallizar()" style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn w-50 m-3 border border-warnning p-1" type="button" >
                            <i class='fas fa-edit' style="font-size: 20px"></i> Actuallizar
                </button>
                

                <button id="btnListar" onClick="Listar()" style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn w-50 m-3 border border-warnning p-1" type="button" >
                            <i class='fas fa-list' style="font-size: 20px"></i> Listar
                </button>
                

                <button id="btnEliminar" onClick="Eliminar()" style=" font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn w-50 m-3 border border-warnning p-1" type="button" >
                            <i class='fas fa-trash' style="font-size: 20px"></i> Eliminar
                </button>
                

            </div>
</div>




<script>
        // ACENDER O BOTÃO
            artista.style = "background: #299; color: white";

        // DIVS
            var adicionar = document.querySelector(".adicionar");
            var actualizar = document.querySelector(".actualizar");
            var listar = document.querySelector(".listar");
            var eliminar = document.querySelector(".eliminar");

        // BOTÕES
            var btnAdicionar = document.querySelector("#btnAdicionar");
            var btnActualizar = document.querySelector("#btnActualizar");
            var btnListar = document.querySelector("#btnListar");
            var btnEliminar = document.querySelector("#btnEliminar");

        function Adicionar(){
            
            // DIVS
            adicionar.style = "display: block;";
            actualizar.style = "display: none";
            listar.style = "display: none";
            eliminar.style = "display: none";
            window.location = "/painel/Artistas/Artista/Adicionar";     
        }
        
        function Actuallizar(){
            
            // DIVS
            adicionar.style = "display: none;";
            actualizar.style = "display: block";
            listar.style = "display: none";
            eliminar.style = "display: none";
            window.location = "/painel/Artistas/Artista/Actualizar";
        }

        function Listar(){
            
            // DIVS
            adicionar.style = "display: none;";
            actualizar.style = "display: none";
            listar.style = "display: block;";
            eliminar.style = "display: none";
            window.location = "/painel/Artistas/Artista/Listar";
        }

        function Eliminar(){
            
            // DIVS
            adicionar.style = "display: none;";
            actualizar.style = "display: none";
            listar.style = "display: none";
            eliminar.style = "display: block";
            window.location = "/painel/Artistas/Artista/Eliminar";
        }

        function AcenderBotao(){
            var pagActual = window.location.pathname;
            pagActual = pagActual.split("/");

            if(pagActual[4] != undefined && pagActual[4] == "Adicionar"){
                // BOTÕES
                btnadicionar.style = "background: #299; color: white;";
                btnActualizar.style = "background: white; color: black;";
                btnListar.style = "background: white; color: black;";
                btnEliminar.style = "background: white; color: black;";
            }  

            if(pagActual[4] != undefined && pagActual[4] == "Actualizar"){
                // BOTÕES
                // BOTÕES
                btnadicionar.style = "background: white; color: black;";
                btnActualizar.style = "background: #299; color: white;";
                btnListar.style = "background: white; color: black;";
                btnEliminar.style = "background: white; color: black;";
            } 

            if(pagActual[4] != undefined && pagActual[4] == "Listar"){
                // BOTÕES
                btnadicionar.style = "background: white; color: black;";
                btnActualizar.style = "background: white; color: black;";
                btnListar.style = "background: #299; color: white;";
                btnEliminar.style = "background: white; color: black;";
            } 

            if(pagActual[4] != undefined && pagActual[4] == "Eliminar"){
                // BOTÕES
                btnadicionar.style = "background: white; color: black;";
                btnActualizar.style = "background: white; color: black;";
                btnListar.style = "background: white; color: black;";
                btnEliminar.style = "background: #299; color: white;";
            } 
        }

        AcenderBotao();
</script>