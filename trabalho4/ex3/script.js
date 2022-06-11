window.onload = function () { //após carregar a página completa irá iniciar a função
    const modal = document.querySelector(".modal"); //selecionando a classe modal e guardando o valor
    const buttonClose = modal.querySelector(".buttonClose"); //selecionando a classe buttonClose e guardando o valor

    buttonClose.addEventListener("click", function () { //quando ocorrer um evento de click buttonClose irá iniciar a função
        modal.style.display = 'none'; //manipula o estilo css da classe modal para display = none para não exibir o modal
    });

    const buttonOpenModal = document.getElementById("btnOpenModal"); //capitura o id do elemento que no caso é btnOpenModal
    buttonOpenModal.addEventListener("click", function () { //quando ocorrer um evento de click no botão para abrir o modal executará a função
        modal.style.display = 'block'; //manipula o estilo css da classe modal para display = block para exibir o modal.
    })
}