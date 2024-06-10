var MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px"; 

function menucelular() {
    if (MenuItens.style.maxHeight === "0px") {
        MenuItens.style.maxHeight = "200px";
    } else {
        MenuItens.style.maxHeight = "0px"; 
    }
}


var EntrarPainel = document.getElementById("EntrarPainel");
var CadastroSite = document.getElementById("CadastroSite");
var Indicador = document.getElementById("Indicador");

function Cadastro()
{
    CadastroSite.style.transform = "translate(0px)";
    EntrarPainel.style.transform = "translate(0px)";
    Indicador.style.transform = "translate(100px)";
}

function Entrar()
{
    CadastroSite.style.transform = "translate(300px)";
    EntrarPainel.style.transform = "translate(300px)";
    Indicador.style.transform = "translate(0px)";
}

function sendEmail(event) {
    event.preventDefault();

    emailjs.sendForm('service_qpb2wvu', 'template_7cvutex', '#ContatoForm')
        .then(function(response) {
            alert('Mensagem enviada com sucesso!', response.status, response.text);
        }, function(error) {
            alert('Falha no envio da mensagem...', error);
        });
}
