

// Efeitos do data picker para campos de data
$( function() {
     $( "#txtDataPagamento" ).datepicker({
         dateFormat: "dd-mm-yy",
         language: "pt-BR"
     });
 } );
 
 
 // Foco no campo de data
 $("#txtDataPagamento").focus(function(){
     if($("#txtDataPagamento").val() == ""){
          $("#txtDataPagamento").val("00-00-0000");
     }
 });
 
 // Desfoco no campo de data
 $("#txtDataPagamento").blur(function(){
     if($("#txtDataPagamento").val() == "00-00-0000"){
          $("#txtDataPagamento").val("");
     }
 });

  // Foco no campo de pagamento
  $("#txtValorPagamento").focus(function(){
    if($("#txtValorPagamento").val() == ""){
         $("#txtValorPagamento").val("0.0");
    }
});

// Desfoco no campo de pagamento
$("#txtValorPagamento").blur(function(){
    if($("#txtValorPagamento").val() == "0.0"){
         $("#txtValorPagamento").val("");
    }
});





