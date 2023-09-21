
var tbody = document.querySelector("tbody");

function Procurar(palavra){

    tbody.innerHTML = "";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            var dadosBanda = JSON.parse(this.responseText);
            console.log(dadosBanda);
            
            if(dadosBanda.length == 0){

                tbody.innerHTML = "Não Encontrado";

            }else{
                
                dadosBanda.forEach(element => {

                    var td0 = document.createElement("td");
                    var td1 = document.createElement("td");
                    var tr = document.createElement("tr");

                    td0.innerHTML = "<td>"+element.idBanda+"</td>"; 
                    td1.innerHTML = "<td>"+element.nomeBanda+"</td>";
                    tr.classList.add("bg-light");
                    tr.classList.add("text-dark");

                    tr.appendChild(td0);
                    tr.appendChild(td1);
                    tbody.appendChild(tr);
                    
                });
                
            }

        }
    } 
    xhr.open("POST", window.location.origin+"/banda/AjaxPaginar", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("palavra="+palavra);
}


          




    
    