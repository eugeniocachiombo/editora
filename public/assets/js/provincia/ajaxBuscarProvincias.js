function BuscarProvincias($idProvincia){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosProvincia = JSON.parse(this.responseText);

            console.log(dadosProvincia);

            txtNomeProvincia.value = dadosProvincia['nomeProvincia'];
            
        }

    }
    
    xhr.open("POST", window.location.origin+"/provincia/AjaxBuscarProvincia", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idProvincia="+$idProvincia);
    
}