
        var card = document.querySelector(".card");
        var card_body = document.querySelector(".card-body");
        var fecharMenu = document.querySelector("#fecharMenu");
        var mostrarMenu = document.querySelector("#mostrarMenu");
        mostrarMenu.style = "display: none; position: absolute";

        function Ocultar(){
            card.style = "display: none; position: absolute";
            card_body.style = "display: none; position: absolute";
            fecharMenu.style = "display: none; position: absolute";
            mostrarMenu.style = "display: block; position: fixed; width: 150px;top: 880px";
        }

        function Mostrar(){
            card.style = "display: block;background:#57489b; width: 300px;";
            card_body.style = "display: block;width: 100%; background: #57489b;";
            fecharMenu.style = "display: block; position: fixed; width: 150px;top: 880px";
            mostrarMenu.style = "display: none;";
        }
