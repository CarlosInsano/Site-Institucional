const form = document.querySelector("#formulario");
const nameInput = document.querySelector("#nome");
const mailInput = document.querySelector("#email");
const calledInput = document.querySelector("#chamado");

form.addEventListener("submit", function (event) ){
  event.preventDefault();

  // Validação do campo nome
  if (nameInput.value.trim() === "") {
    alert("Por favor, preencha o campo nome.");
    return;
  }
  // Validação do campo e-mail
  const emailValue = mailInput.value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailValue)) {
    alert("Por favor, insira um endereço de e-mail válido.");
    return;
  }
  // Validação do campo chamado
  if (calledInput.value.trim() === "") {
    alert("Por favor, preencha o campo chamado.");
    return;
  }

  };












//Função PESQUISAR
/*function pesquisar() {
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
*/
