
// Foco no campo de data
$("#txtDataInicialContrato").focus(function(){
    if($("#txtDataInicialContrato").val() == ""){
         $("#txtDataInicialContrato").val("00-00-0000");
    }
});

// Desfoco no campo de data
$("#txtDataInicialContrato").blur(function(){
    if($("#txtDataInicialContrato").val() == "00-00-0000"){
         $("#txtDataInicialContrato").val("");
    }
}); 


// Foco no campo de data
$("#txtDataFinalContrato").focus(function(){
    if($("#txtDataFinalContrato").val() == ""){
         $("#txtDataFinalContrato").val("00-00-0000");
    }
});

// Desfoco no campo de data
$("#txtDataFinalContrato").blur(function(){
    if($("#txtDataFinalContrato").val() == "00-00-0000"){
         $("#txtDataFinalContrato").val("");
    }
});