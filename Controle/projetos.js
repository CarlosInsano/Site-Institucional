function pesquisar() {
    var input = document.getElementById("termo");
    var filter = input.value.toUpperCase();
    var itens = document.getElementsByClassName("item");

    for (var i = 0; i < itens.length; i++) {
        var item = itens[i];
        var textoItem = item.textContent || item.innerText;

        if (textoItem.toUpperCase().indexOf(filter) > -1) {
            item.style.display = "";
        } else {
            item.style.display = "none";
        }
    }
}

function pesquisarProjeto() {
    var input = document.getElementById("termo");
    var filter = input.value.toUpperCase();
    var itens = document.getElementsByClassName("Card");

    for (var i = 0; i < itens.length; i++) {
        var item = itens[i];
        var textoItem = item.textContent || item.innerText;

        if (textoItem.toUpperCase().indexOf(filter) > -1) {
            item.style.display = "";
        } else {
            item.style.display = "none";
        }
    }
}