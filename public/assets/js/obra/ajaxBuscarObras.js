function BuscarObras(idObra){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {           
            var dadosObra = JSON.parse(this.responseText);
            console.log(dadosObra);
            txtTituloObraActualizar.value = dadosObra['tituloObra'];
            txtIdArtistaActualizar.value = dadosObra[2];
            txtIdArtistaActualizar.text = dadosObra['nomeArtisticoUtilizador'];
            txtGeneroObraActualizar.value = dadosObra['generoObra'];
            txtGeneroObraActualizar.text = dadosObra['generoObra'];
            txtIdEstiloActualizar.value = dadosObra['idEstilo'];
            txtIdEstiloActualizar.text = dadosObra['nomeEstilo'];
            txtIdAlbumActualizar.value = dadosObra['idAlbum'];
            txtIdAlbumActualizar.text = dadosObra['nomeAlbum'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/obra/AjaxBuscarObra", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idObra="+idObra);
    
}