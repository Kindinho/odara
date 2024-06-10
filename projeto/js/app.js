var MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px"; 

function menucelular() {
    if (MenuItens.style.maxHeight === "0px") {
        MenuItens.style.maxHeight = "200px";
    } else {
        MenuItens.style.maxHeight = "0px"; 
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var produtoimg = document.querySelector(".col-2 img");
    var produtoMiniaturas = document.querySelectorAll(".img-col img");

    produtoMiniaturas.forEach(miniatura => {
        miniatura.addEventListener("click", function() {
            produtoimg.src = this.src;
        });
    });
});

