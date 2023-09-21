
var tbody = document.querySelector("tbody");

function Procurar(palavra){

    tbody.innerHTML = "";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            var dadosCargoArtistaBanda = JSON.parse(this.responseText);
            console.log(dadosCargoArtistaBanda);
            
            if(dadosCargoArtistaBanda.length == 0){

                tbody.innerHTML = "Não Encontrado";

            }else{
                
                dadosCargoArtistaBanda.forEach(element => {

                    var td0 = document.createElement("td");
                    var td1 = document.createElement("td");
                    var td2 = document.createElement("td");
                    var tr = document.createElement("tr");

                    td0.innerHTML = "<td>"+element.idCargoArtistaBanda+"</td>"; 
                    td1.innerHTML = "<td>"+element.descricaoCargoArtistaBanda+"</td>";
                    td2.innerHTML = "<td>"+element.nomeBanda+"</td>";
                    tr.classList.add("bg-light");
                    tr.classList.add("text-dark");

                    tr.appendChild(td0);
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tbody.appendChild(tr);
                    
                });
                
            }

        }
    } 
    xhr.open("POST", window.location.origin+"/cargoArtistaBanda/AjaxPaginar", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("palavra="+palavra);
}


          




    
    