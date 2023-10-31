// Validação


function SpinnerSucesso() {
    var spinner = document.querySelector("#spinner");
    spinner.classList.add('spinner-border');
    spinner.style = "color: #299; margin-top: 5px";
    setInterval(() => {

    }, 500);
}

function SpinnerErro() {
    var spinner = document.querySelector("#spinner");
    spinner.classList.add('spinner-border');
    spinner.style = "color: red; margin-top: 5px";
    setInterval(() => {
        spinner.style = "display: none; color: red; margin-top: 5px";
    }, 500);
}


(function () {
    'use strict';

    window.addEventListener('load', function () {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                SpinnerSucesso();
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation;
                    SpinnerErro();
                }
                form.classList.add('was-validated');
            }, false);
        });
        // 
    }, false);
})();

