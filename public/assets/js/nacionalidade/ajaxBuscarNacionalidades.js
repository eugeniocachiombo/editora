function BuscarNacionalidades(idNacionalidade){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosNacionalidade = JSON.parse(this.responseText);

            console.log(dadosNacionalidade);

            txtNomePais.value = dadosNacionalidade['nomePais'];
            txtValorNacionalidade.value = dadosNacionalidade['valorNacionalidade'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/Nacionalidade/AjaxBuscarNacionalidade", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idNacionalidade="+idNacionalidade);
    
}