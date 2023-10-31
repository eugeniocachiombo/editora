function BuscarEstilos($idEstilo){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosEstilo = JSON.parse(this.responseText);

            console.log(dadosEstilo);

            txtNomeEstilo.value = dadosEstilo['nomeEstilo'];
            
        }

    }
    
    xhr.open("POST", window.location.origin+"/estilo/AjaxBuscarEstilo", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idEstilo="+$idEstilo);
    
}