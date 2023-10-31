txtProvinciaUtilizador.addEventListener("change", () =>{
        
    var idProvinciaSelecionada = txtProvinciaUtilizador.value;
    
    // Crie a solicitação XMLHttpRequest
    var xhr = new XMLHttpRequest();
    
    // Defina o callback para lidar com a resposta
    xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        
        // A resposta do servidor é um JSON contendo os municípios
        var municipios = JSON.parse(this.responseText);
        
        // Limpe as opções anteriores do select de municípios
        txtMunicipioUtilizador.innerHTML = "";

        // Percorrer o array da resposta do servidor
        for(var i=0; i < municipios.length; i++) {
            var option = document.createElement("option");
            option.text = municipios[i]["nomeMunicipio"]; // Supondo que o nome do município está na propriedade "nome"
            option.value = municipios[i]["idMunicipio"]; // Supondo que o ID do município está na propriedade "id"
            txtMunicipioUtilizador.add(option);
        }
        
    }
    };
    
    // Configure e envie a solicitação POST para o arquivo PHP
    xhr.open("POST", window.location.origin+"/utilizador/Ajax", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id_provincia=" + encodeURIComponent(idProvinciaSelecionada));
});          
