window.onload = function() {
    document.forms.formCadastro.onsubmit = validaForm; //acesso ao formulario e trata o submit para validar os campos
}

function validaForm(e) {
    let form = e.target;
    let formValido = true;

    const spanUsuario = form.usuario.nextElementSibling; //acessa os objetos na árvore DOM
    const spanSenha = form.senha.nextElementSibling;
    const spanEmail = form.email.nextElementSibling;

    spanUsuario.textContent = ""; //inicia os span com vazio
    spanSenha.textContent = "";
    spanEmail.textContent = "";

    if(form.usuario.value === ""){ //valida se o campo está vazio
        spanUsuario.textContent = 'O usuário deve ser preenchido'; //altera o textContet do span com o texto
        formValido = false;
    }

    if(form.senha.value === ""){
        spanSenha.textContent = 'A senha deve ser preenchid0';
        formValido = false;
    }

    if(form.email.value === ""){
        spanEmail.textContent =  'O email deve ser preenchido';
        formValido = false;
    }
    

   return formValido;
}