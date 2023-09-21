<div class="col text-center d-table d-md-flex bg-white text-dark" style="border: 5px solid #299;border-radius: 10px; width: 100%">
    <button style="font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn  m-3 border border-warnning p-1" type="button" id="meusDados">
    <i class='fas fa-info-circle' style="font-size: 20px"></i>  Meus Dados 
    </button>
    
</div>
            
<div class="col text-left d-table d-md-table  bg-white text-dark" style="min-height: 92vh; max-height: auto; border: 5px solid #299;border-radius: 10px; margin-top: 10px; width: 100%">
    <div class="pt-4 pb-4" style="margin-left: 10px;">
            <h4>Meus Arquivos <i class='fas fa-folder-open' style="font-size: 20px"></i><hr></h4> 
            <h1>Nenhum Arquivo de momento</h1>
    </div>

    <div>
        <button style="font-weight: bold; border-bottom: 5px solid black; border-radius: 10px; width: 300px" class="btn  m-3 border border-warnning p-1" type="button" >
             <i class='fas fa-plus-circle' style="font-size: 20px"></i>  Adicionar
        </button>
        
    </div>
    
</div>

<br class="d-lg-none "> 

<script>
       var meusDados = document.querySelector("#meusDados");
       meusDados.addEventListener("click", ()=>{
            window.location = "/painel/Perfil/MeusDados";
       });
</script>