
var divPrincipal = document.querySelector(".divPrincipal");

function Procurar(palavra){
    divPrincipal.innerHTML = "";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function (){
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                
            var dadosAlbum = JSON.parse(this.responseText);
            console.log(dadosAlbum);
            

            if(dadosAlbum.length == 0){
                divPrincipal.innerHTML = "Não Encontrado";
            }else{
                
                dadosAlbum.forEach(element => {

                    var div0 = document.createElement("div");
                    var div1 = document.createElement("div");
                    var div2 = document.createElement("div");
                    var div3 = document.createElement("div");
                    var div4 = document.createElement("div");
                    var hr = document.createElement("hr");

                    div0.innerHTML = "<img src='/assets/img/icons/music.png' alt='Perfil' width='100%'>"; 
                    div0.classList.add("border");
                    div0.classList.add("col-1");
                    div0.classList.add("justify-content-center");
                    div0.classList.add("align-items-center");
                    
                    div1.innerHTML = ""+
                    "<b>Título:</b>" + " " + element.tituloObra + "<br>"+
                    "<b>Artísta:</b>" + " " + element.nomeArtisticoUtilizador + "<br>"+
                    "<div class='d-table' >"+
                    "    <div> "+
                    "        <b>Áudio:</b> "+
                    "    </div>"+
        
                        "<div class='embed-responsive embed-responsive-16by9'>"+
                            "<audio class='embed-responsive-item' controls>"+
                            "<source src='/assets/tmp_file/"+ element.arquivoObra + "' type='audio/mpeg'>"+
                                    "Não suportado pelo navegador"+
                            "</audio>"+
                        "</div>"+
                    "</div>";
                    div1.classList.add("d-table");
                    div1.classList.add("justify-content-center");
                    div1.classList.add("align-items-center");

                    div2.innerHTML = ""+
                    "<div><b>Gênero:</b> "+ " " + element.generoObra + "</div>"+
                    "<div><b>Estilo:</b> "+ " " + element.nomeEstilo + "</div>"+
                    "<div><b>Álbum:</b>"+   " " + element.nomeAlbum  +"</div>";
                    div2.classList.add("d-none");
                    div2.classList.add("d-md-block");
                    div2.style="width: 20%";

                   div3.innerHTML = ""+
                    "<div><b>Gênero:</b> <br>" +  element.generoObra + "</div>"+
                    "<div><b>Estilo:</b> <br>" +  element.nomeEstilo + "</div>"+
                    "<div><b>Álbum:</b>  <br>" +  element.nomeAlbum  + "</div>";
                    div3.classList.add("d-table");
                    div3.classList.add("d-md-none");
                    div3.classList.add("text-center");
                    div3.classList.add("justify-content-end");
                    div3.style = "width: 100%";

                    div4.classList.add("d-table");
                    div4.classList.add("d-lg-flex");
                    div4.style="justify-content: space-around; width: 100%";

                    div4.appendChild(div0);
                    div4.appendChild(div1);
                    div4.appendChild(div2);
                    div4.appendChild(div3);
                    divPrincipal.appendChild(div4);
                    divPrincipal.appendChild(hr);
                    
                });
            }
            

        }
    } 
    xhr.open("POST", window.location.origin+"/obra/AjaxPaginar", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("palavra="+palavra);
}


          




    
    