// Foco no campo de data
$("#txtdataNascimentoUtilizador").focus(function(){
   if($("#txtdataNascimentoUtilizador").val() == ""){
         $("#txtdataNascimentoUtilizador").val("00-00-0000");
    }
});

// Desfoco no campo de data
$("#txtdataNascimentoUtilizador").blur(function(){
    if($("#txtdataNascimentoUtilizador").val() == "00-00-0000"){
         $("#txtdataNascimentoUtilizador").val("");
    }
});