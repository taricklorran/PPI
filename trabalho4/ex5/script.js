window.onload = function () {
    buttons = document.querySelectorAll("nav button"); //seleciona todos os botões na barra de navegação
    for(let button of buttons) {
        button.addEventListener("click", changeTab); //click em cada um dos botões
    }
    openTab(0);
}

function changeTab(e) { //informação do envento passando para o objeto o evento
    const botaoAcionado = e.target; //acesso ao botão que acionou o changeTab
    const liDoBotao = botaoAcionado.parentNode; //acess o nó pai ul.
    const nodes = Array.from(liDoBotao.parentNode.children); //acesso a lista de nó filhos ul.
    const index = nodes.indexOf(liDoBotao); //converte em vetor
    openTab(index);
}

function openTab(i) {
    const tabActive = document.querySelector(".tabActive"); //busca a classe tabActive
    if(tabActive !== null) 
        tabActive.className = ""; //remove a classe para não ficar ativo
    

    const buttonActive = document.querySelector(".buttonActive");
    if(buttonActive !== null) 
        buttonActive.className = "";
    

    document.querySelectorAll(".tabs section")[i].className = "tabActive"; //exibe a nova aba
    document.querySelectorAll("nav button")[i].className = "buttonActive";
}
