window.onload = function () {
    const compoInteresse = document.querySelector("#interesse"); //selecionando o id interesse e guardando o valor
    compoInteresse.addEventListener("keyup", e => { //quando ocorrer um evento de keyup do enter irá iniciar a função
        if(e.key === "Enter"){
            adicionaInteresse();
        }
    });
}

function adicionaInteresse() {
    const campoInteresse = document.querySelector("#interesse");
    const listaInteresses = document.querySelector("ol");

    const novoLi = document.createElement("li");
    const novoSpan = document.createElement("span"); //cria span
    const novoBotao = document.createElement("button"); //cria botao

    novoSpan.textContent = campoInteresse.value; //adiciona conteudo do campo no novoSpan
    novoBotao.textContent = 'X'; // adiciona o caracter x

    novoLi.appendChild(novoSpan); //adiciona um filho de li novoSpan
    novoLi.appendChild(novoBotao); // adiciona um filho de lo novoBotao
    listaInteresses.appendChild(novoLi); // adiciona na lista

    novoBotao.onclick = function() { //evento click
        listaInteresses.removeChild(novoLi); // remove o item da lista
    }
    campoInteresse.value = '';
}