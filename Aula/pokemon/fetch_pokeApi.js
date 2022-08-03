function funcApi(parameter){
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "https://pokeapi.co/api/v2/pokemon/"+ parameter +"/");

    xhr.onload = function(){
        try{
            var data = JSON.parse(xhr.responseText);
            
            document.getElementById('nome').innerHTML = data['name'];
            document.getElementById('numero').innerHTML = data['id'];

            let img = data['sprites']['front_shiny'];
            document.getElementById('pic').setAttribute('src', img);
        }
        catch(e){
            console.log("JSON inválido: "+ e);
        }
    }

    xhr.send();
}


window.onload = function(){
    var campo = '';

    var button = document.querySelector('button');

    button.onclick = function(){
        campo = document.getElementById('search');
        funcApi(campo.value);
    }

}
