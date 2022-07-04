<?php
    $produtos = ["televisão", "som", "cama", "sofá", "fogão", "óculos", "jogos", "lâmpadas", "cafeteira", "cadeira"];
    $descricao = ["Aparelho para entretenimento.", "Aparelho para curtir músicas.", "Utilizar no momento de descanso.", "Para reunir a família na sala.", "Para cozinhar diversos alimentos.", "Enxergar o mundo.", "Se distrair no momento de lazer.", "Lâmpada usada para clarear o ambiente.", "Fazer café de uma forma mais rápido.", "Cadeira para jantar."];

    //recebe o parâmetro via URL

    $qde = $_GET["qde"];


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Busca Produtos</title>
</head>
<body>
    <?php

        //criar as colunas
        echo <<<HTML
        <div class="container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Produtos</th>
                        <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
        HTML;

        //percorer a lista de acordo com a quantidade passado no parâmetro
        for($i = 1; $i <= $qde; $i++){
            $rand = rand(0, 9);
        
        //para cada valor é inserido uma linha na tabela
            echo <<<HTML
            <tr>
                <th scope="row">$i</th>
                    <td>$produtos[$rand]</td>
                    <td>$descricao[$rand]</td>
                </tr>
            HTML;
        }

        //fecha as tags html da tabela
        echo <<<HTML
        </tbody>
        </table>
        </div>
        HTML;
        
    ?>  
</body>
</html>