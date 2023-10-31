function BuscarContratos(idContrato){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            
            var dadosContrato = JSON.parse(this.responseText);
            console.log(dadosContrato);

            txtIdUtilizador.value = dadosContrato['idUtilizador'];
            txtIdUtilizador.text = dadosContrato['nomeUtilizador'];

            txtTipoContrato.value = dadosContrato['tipoContrato'];
            txtTipoContrato.text = dadosContrato['tipoContrato'];

            txtDescricaoContrato.value = dadosContrato['descricaoContrato'];

            var tratarDataInicial = dadosContrato['dataInicialContrato'];
            tratarDataInicial = tratarDataInicial.split("-");
            txtDataInicialContrato.value = tratarDataInicial[2]+"-"+tratarDataInicial[1]+"-"+tratarDataInicial[0];

            var tratarDataFinal = dadosContrato['dataFinalContrato'];
            tratarDataFinal = tratarDataFinal.split("-");
            txtDataFinalContrato.value = tratarDataFinal[2]+"-"+tratarDataFinal[1]+"-"+tratarDataFinal[0];

            txtEstadoContrato.value = dadosContrato['estadoContrato'];
            txtEstadoContrato.text = dadosContrato['estadoContrato'];
        }

    }
    
    xhr.open("POST", window.location.origin+"/contrato/AjaxBuscarContrato", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("idContrato="+idContrato);
    
}