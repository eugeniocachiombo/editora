function BuscarAlbuns($idAlbum){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosAlbum = JSON.parse(this.responseText);

            console.log(dadosAlbum);

            txtNomeAlbumActualizar.value = dadosAlbum['nomeAlbum'];
            txtIdArtistaActualizar.value = dadosAlbum['idArtista'];
            txtIdArtistaActualizar.text = dadosAlbum['nomeArtisticoUtilizador'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/album/AjaxBuscarAlbum", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idAlbum="+$idAlbum);
    
}