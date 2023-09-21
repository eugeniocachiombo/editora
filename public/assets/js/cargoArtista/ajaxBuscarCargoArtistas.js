function BuscarCargoArtistas($idCargoArtista){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosCargoArtista = JSON.parse(this.responseText);

            console.log(dadosCargoArtista['descricaoCargoArtista']);
            console.log(dadosCargoArtista);
            txtDescricaoCargoArtista.value = dadosCargoArtista['descricaoCargoArtista'];
            
        }

    }
    
    xhr.open("POST", window.location.origin+"/CargoArtista/AjaxBuscarCargoArtista", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idCargoArtista="+$idCargoArtista);
    
}