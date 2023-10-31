function BuscarCargoArtistaBandas($idCargoArtistaBanda){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosCargoArtistaBanda = JSON.parse(this.responseText);

            console.log(dadosCargoArtistaBanda);

            txtDescricaoCargoArtistaBanda.value = dadosCargoArtistaBanda['descricaoCargoArtistaBanda'];
            txtIdBanda.value = dadosCargoArtistaBanda['idBanda'];
            txtIdBanda.text = dadosCargoArtistaBanda['descricaoBanda'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/CargoArtistaBanda/AjaxBuscarCargoArtistaBanda", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idCargoArtistaBanda="+$idCargoArtistaBanda);
    
}