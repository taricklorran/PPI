function funcApi(value){
    fetch(`https://pokeapi.co/api/v2/pokemon/${value}/`)
    .then(response =>{
        if(!response.ok){
            throw new Error(response.status);
        }
        return response.json();
    })
    .then(data =>{
        console.log(data);
        document.getElementById('nome').innerHTML = data.name;
        document.getElementById('numero').innerHTML = data.id;

        let img = data.sprites.front_default;
        document.getElementById('pic').setAttribute('src', img);
    })
    .catch(error =>{
        console.error('Falha inesperada: '+ error);
    })
}

window.onload = function(){
    var campo = '';

    var button = document.querySelector('button');

    button.onclick = function(){
        campo = document.getElementById('search');
        funcApi(campo.value);
    }
}