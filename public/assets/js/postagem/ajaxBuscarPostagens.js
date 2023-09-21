function BuscarPostagens(idPostagem){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosPostagem = JSON.parse(this.responseText);
            console.log(dadosPostagem[1]);
            txtIdObra.value = dadosPostagem[1];
            txtIdObra.text = dadosPostagem['tituloObra'];
            txtIdUtilizadorPublicador.value = dadosPostagem['idUtilizador'];
            txtIdUtilizadorPublicador.text = dadosPostagem['nomeArtisticoUtilizador'];

        }

    }
    
    xhr.open("POST", window.location.origin+"/Postagem/AjaxBuscarPostagem", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idPostagem="+idPostagem);
    
}