function BuscarBandas($idBanda){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosBanda = JSON.parse(this.responseText);

            console.log(dadosBanda);

            txtNomeBanda.value = dadosBanda['nomeBanda'];
            
        }

    }
    
    xhr.open("POST", window.location.origin+"/Banda/AjaxBuscarBanda", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idBanda="+$idBanda);
    
}