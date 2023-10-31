function BuscarArtistas(idArtista){
   
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosArtista = JSON.parse(this.responseText);

            console.log(dadosArtista);

             txtIdUtilizador.value = dadosArtista['idUtilizador'];
             txtIdCargoArtista.value = dadosArtista['idCargoArtista'];
             txtIdBanda.value = dadosArtista['idBanda'];
             txtIdCargoArtistaBanda.value = dadosArtista['idCargoArtistaBanda'];

             txtIdUtilizador.text = dadosArtista['nomeUtilizador'];
             txtIdCargoArtista.text = dadosArtista['descricaoCargoArtista'];
             txtIdBanda.text = dadosArtista['nomeBanda'];
             txtIdCargoArtistaBanda.text = dadosArtista['descricaoCargoArtistaBanda'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/artista/AjaxBuscarArtista", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idArtista="+idArtista);
    
}