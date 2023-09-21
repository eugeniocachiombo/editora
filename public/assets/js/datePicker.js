// Efeitos do data picker para campos de data
$( function() {
     $( "#txtdataNascimentoUtilizador" ).datepicker({
         dateFormat: "dd-mm-yy",
         language: "pt-BR"
     });
 } );

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






