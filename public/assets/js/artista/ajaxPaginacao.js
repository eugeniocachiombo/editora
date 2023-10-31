
var tbody = document.querySelector("tbody");

function Procurar(palavra){

    tbody.innerHTML = "";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            var dadosArtista = JSON.parse(this.responseText);
            console.log(dadosArtista);
            
            if(dadosArtista.length == 0){

                tbody.innerHTML = "Não Encontrado";

            }else{
                
                dadosArtista.forEach(element => {

                    var td0 = document.createElement("td");
                    var td1 = document.createElement("td");
                    var td2 = document.createElement("td");
                    var td3 = document.createElement("td");
                    var td4 = document.createElement("td");
                    var tr = document.createElement("tr");


                    td0.innerHTML = "<td>"+element.idArtista+"</td>"; 
                    td1.innerHTML = "<td>"+element.nomeArtisticoUtilizador+"</td>";
                    td2.innerHTML = "<td>"+element.descricaoCargoArtista+"</td>";
                    td3.innerHTML = "<td>"+element.nomeBanda+"</td>";
                    td4.innerHTML = "<td>"+element.descricaoCargoArtistaBanda+"</td>";
                    tr.classList.add("bg-light");
                    tr.classList.add("text-dark");

                    tr.appendChild(td0);
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    tr.appendChild(td4);
                    tbody.appendChild(tr);
                    
                });
                
            }

        }
    } 
    xhr.open("POST", window.location.origin+"/artista/AjaxPaginar", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("palavra="+palavra);
}


          




    
    