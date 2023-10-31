

setInterval(() => {
    if(incluirArquivoActualizar.checked){
        fileArquivoObraActualizar.style = "display: block";
        fileArquivoObraActualizar.required = true;
    }else{
        fileArquivoObraActualizar.style = "display: none";
        fileArquivoObraActualizar.required = false;
    }
}, 1000);
