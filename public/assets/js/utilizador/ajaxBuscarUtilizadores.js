function BuscarUtilizadores(idUtilizador){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(this.responseText);
            var dadosUtilizador = JSON.parse(this.responseText);
            
            txtNomeUtilizador.value = dadosUtilizador['nomeUtilizador'];
            txtSobreNomeUtilizador.value = dadosUtilizador['sobrenomeUtilizador'];
            txtNomeArtisticoUtilizador.value = dadosUtilizador['nomeArtisticoUtilizador'];
            txtNIFUtilizador.value = dadosUtilizador['NIFUtilizador'];
            txtEmailUtilizador.value = dadosUtilizador['emailUtilizador'];
            txtTelefoneUtilizador.value = dadosUtilizador['telefoneUtilizador'];
            txtPasseUtilizador.value = dadosUtilizador['senhaUtilizador'];
            //txtNacionalidadeUtilizador.value = dadosUtilizador['nacionalidadeUtilizador'];
            var tratarData = dadosUtilizador['dataNascimentoUtilizador'];
            tratarData = tratarData.split("-");
            txtdataNascimentoUtilizador.value = tratarData[2]+"-"+tratarData[1]+"-"+tratarData[0];
            txtGeneroUtilizador.value = dadosUtilizador['generoUtilizador'];
            txtTipoAcessoUtilizador.value = dadosUtilizador['idTipoAcesso'];
            txtTipoAcessoUtilizador.text = dadosUtilizador['descricaoTipoAcesso'];

            txtProvinciaUtilizador.value = dadosUtilizador['idProvincia'];
            txtProvinciaUtilizador.text = dadosUtilizador['nomeProvincia'];

            txtMunicipioUtilizador.value = dadosUtilizador['idMunicipio'];
            txtMunicipioUtilizador.text = dadosUtilizador['nomeMunicipio'];

            txtEnderecoUtilizador.value = dadosUtilizador['endereco'];

        }

    }
    
    xhr.open("POST", window.location.origin+"/utilizador/AjaxBuscarUtilizador", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idUtilizador="+idUtilizador);
    
}