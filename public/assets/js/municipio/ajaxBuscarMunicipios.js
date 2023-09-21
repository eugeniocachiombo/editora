function BuscarMunicipios($idMunicipio){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosMunicipio = JSON.parse(this.responseText);

            console.log(dadosMunicipio);

            txtNomeMunicipio.value = dadosMunicipio['nomeMunicipio'];
            txtIdProvincia.value = dadosMunicipio['idProvincia'];
            txtIdProvincia.text = dadosMunicipio['nomeProvincia'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/Municipio/AjaxBuscarMunicipio", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idMunicipio="+$idMunicipio);
    
}